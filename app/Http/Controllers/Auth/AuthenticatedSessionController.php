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
        // Валидация данных
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Попытка аутентификации
        if (Auth::attempt($request->only('email', 'password'))) {
            // Регенирация сессии после успешного входа
            $request->session()->regenerate();

            // Редирект на домашнюю страницу или страницу, на которую был перенаправлен ранее
            return redirect()->intended(route('home'));
        }

        // Возврат с ошибками, если аутентификация не удалась
        return back()->withErrors([
            'email' => 'Указанные данные не совпадают с нашими записями.',
        ]);
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
