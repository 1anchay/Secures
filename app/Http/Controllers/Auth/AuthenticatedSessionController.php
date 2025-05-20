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
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Тестовые данные
    $testEmail = 'test@example.com';
    $testPassword = '123456';

    if ($request->email === $testEmail && $request->password === $testPassword) {
        // Создаём фейкового пользователя без базы данных
        $fakeUser = new \App\Models\User([
            'name' => 'Тестовый Пользователь',
            'email' => $testEmail,
        ]);

        // Принудительно логиним
        auth()->login($fakeUser);

        return redirect()->intended(route('home'));
    }

    return back()->withErrors([
        'email' => 'Неверный логин или пароль',
    ]);
}


    /**
     * Завершение сессии (выход).
     */
    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    // --------- ВСПОМОГАТЕЛЬНЫЕ МЕТОДЫ -----------

    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    protected function attemptLogin(Request $request)
    {
        $user = User::where($this->username(), $request->{$this->username()})->first();

        if (!$user || ($user->is_active !== null && !$user->is_active)) {
            return false;
        }

        return Auth::attempt($this->credentials($request), $request->boolean('remember'));
    }

    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password');
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }

    protected function authenticated(Request $request, User $user)
    {
        // Лог успешного входа
        $user->update([
            'last_login_at' => now(),
            'last_login_ip' => $request->ip()
        ]);

        Log::info('User logged in', [
            'user_id' => $user->id,
            'email' => $user->email,
            'ip' => $request->ip()
        ]);

        return redirect()->intended('/profile/edit');
    }

    protected function username()
    {
        return 'email';
    }

    // --- Защита от brute force ---

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
        // Можешь добавить логирование или событие
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
