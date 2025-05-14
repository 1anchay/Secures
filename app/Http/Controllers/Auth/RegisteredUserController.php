<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/profile/edit';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string|email|max:255',
            'password' => 'required|string|max:255',
        ]);
    }

    protected function attemptLogin(Request $request)
    {
        $user = User::where($this->username(), $request->{$this->username()})->first();

        if (!$user) {
            Log::warning('Login attempt: user not found', ['email' => $request->email]);
            return false;
        }

        if (!$user->is_active) {
            Log::warning('Login attempt: inactive user', ['user_id' => $user->id]);
            throw ValidationException::withMessages([
                $this->username() => ['Ваш аккаунт деактивирован. Обратитесь к администратору.'],
            ]);
        }

        $credentials = $this->credentials($request);
        $remember = $request->filled('remember');

        if ($this->guard()->attempt($credentials, $remember)) {
            Log::debug('Successful login attempt', ['user_id' => $user->id]);
            return true;
        }

        Log::debug('Failed login attempt: invalid credentials', ['user_id' => $user->id]);
        return false;
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }

    protected function authenticated(Request $request, User $user)
    {
        $user->update([
            'last_login_at' => now(),
            'last_login_ip' => $request->ip()
        ]);

        Log::info('User logged in', [
            'user_id' => $user->id,
            'email' => $user->email,
            'ip' => $request->ip()
        ]);

        return redirect()->intended($this->redirectPath());
    }

    public function username()
    {
        return 'email';
    }
}