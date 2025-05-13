<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Отображение страницы регистрации.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Обработка запроса на регистрацию.
     */
    public function store(Request $request): RedirectResponse
    {
        // Валидация данных
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'terms' => ['required', 'accepted'],
        ]);

        try {
            // Создаем нового пользователя
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'user', // Добавляем роль по умолчанию
                'is_active' => true, // Активируем пользователя
                'balance' => 0, // Начальный баланс
                'email_verified_at' => now(), // Автоверификация
            ]);

            // Событие регистрации пользователя
            event(new Registered($user));

            // Авторизация пользователя
            Auth::login($user);

            // Редирект на главную страницу с сообщением
            return redirect()->route('home')
                ->with('success', 'Регистрация прошла успешно! Добро пожаловать!');
                
        } catch (\Exception $e) {
            // Логируем ошибку
            \Log::error('Registration error: ' . $e->getMessage());
            
            // Возвращаем с ошибкой
            return back()
                ->withInput()
                ->withErrors([
                    'registration' => 'Произошла ошибка при регистрации. Пожалуйста, попробуйте позже.'
                ]);
        }
    }
}