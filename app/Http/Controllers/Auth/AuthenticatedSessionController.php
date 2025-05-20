<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;

class AuthenticatedSessionController extends Controller
{
    /**
     * Отображение страницы входа.
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Обработка запроса на вход.
     */
    public function store(Request $request)
    {
        $this->validateLogin($request);

        $testEmail = 'test@example.com';
        $testPassword = '123456';

        // ======== ТЕСТОВЫЙ ВХОД =========
        if (
            $request->email === $testEmail &&
            $request->password === $testPassword
        ) {
            $fakeUser = new User([
                'id' => 999999, // Уникальный ID
                'name' => 'Тестовый Пользователь',
                'email' => $testEmail,
                'email_verified_at' => now(),
            ]);

            $fakeUser->setRememberToken(Str::random(10));
            $fakeUser->exists = true;

            Auth::login($fakeUser);

            session()->regenerate();

            return $this->authenticated($request, $fakeUser);
        }

        // ======== ОГРАНИЧЕНИЯ И ЗАЩИТА =========
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }

        // ======== СТАНДАРТНЫЙ ЛОГИН =========
        if ($this->attemptLogin($request)) {
            $this->clearLoginAttempts($request);
            return $this->authenticated($request, Auth::user());
        }

        $this->incrementLoginAttempts($request);
        return $this->sendFailedLoginResponse($request);
    }

    /**
     * Выход из системы.
     */
    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    /**
     * Валидация формы логина.
     */
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    /**
     * Попытка логина через базу данных.
     */
    protected function attemptLogin(Request $request)
    {
        $user = User::where($this->username(), $request->{$this->username()})->first();

        if (!$user || ($user->is_active !== null && !$user->is_active)) {
            return false;
        }

        return Auth::attempt($this->credentials($request), $request->boolean('remember'));
    }

    /**
     * Данные для логина.
     */
    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password');
    }

    /**
     * Ответ при неудачном логине.
     */
    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }

    /**
     * Поведение при успешном логине.
     */
    protected function authenticated(Request $request, User $user)
    {
        // Обновление активности
        if ($user->exists) {
            $user->update([
                'last_login_at' => now(),
                'last_login_ip' => $request->ip(),
            ]);
        }

        Log::info('User logged in', [
            'user_id' => $user->id,
            'email' => $user->email,
            'ip' => $request->ip(),
        ]);

        return redirect()->intended('/profile/edit');
    }

    /**
     * Поле для логина.
     */
    protected function username()
    {
        return 'email';
    }

    // ======== Защита от brute-force =========

    protected function throttleKey(Request $request)
    {
        return Str::lower($request->input($this->username())) . '|' . $request->ip();
    }

    protected function hasTooManyLoginAttempts(Request $request)
    {
        return RateLimiter::tooManyAttempts($this->throttleKey($request), 5);
    }

    protected function incrementLoginAttempts(Request $request)
    {
        RateLimiter::hit($this->throttleKey($request), 60); // блок на 60 секунд
    }

    protected function clearLoginAttempts(Request $request)
    {
        RateLimiter::clear($this->throttleKey($request));
    }

    protected function fireLockoutEvent(Request $request)
    {
        Log::warning('Слишком много попыток входа', [
            'ip' => $request->ip(),
            'email' => $request->input($this->username())
        ]);
    }

    protected function sendLockoutResponse(Request $request)
    {
        $seconds = RateLimiter::availableIn($this->throttleKey($request));

        throw ValidationException::withMessages([
            $this->username() => [trans('auth.throttle', ['seconds' => $seconds])],
        ]);
    }
}
