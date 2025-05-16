<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    if ($this->hasTooManyLoginAttempts($request)) {
        $this->fireLockoutEvent($request);
        return $this->sendLockoutResponse($request);
    }

    if ($this->attemptLogin($request)) {
        $request->session()->regenerate();
        $this->clearLoginAttempts($request);
        
        return $this->authenticated($request, $this->guard()->user());
    }

    $this->incrementLoginAttempts($request);
    return $this->sendFailedLoginResponse($request);
}

    /**
     * Завершение сессии (выход).
     */
    public function destroy(Request $request)
    {
        Auth::logout();

        // Инвалидируем и регенерируем токен сессии
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Перенаправление на главную страницу после выхода
        return redirect('/');
    }
}
