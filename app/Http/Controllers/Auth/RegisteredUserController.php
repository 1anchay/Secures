<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;

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
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'terms' => ['accepted'],
        ]);

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'user',
                'is_active' => true,
                'balance' => 0,
                'email_verified_at' => now(), // Убрать, если нужна верификация email
            ]);

            event(new Registered($user));
            Auth::login($user);

            return redirect()->intended(RouteServiceProvider::HOME)
                ->with('success', 'Регистрация прошла успешно! Добро пожаловать!');
                
        } catch (\Exception $e) {
            Log::error('Registration error: ' . $e->getMessage());
            
            return back()
                ->withInput()
                ->withErrors([
                    'registration' => 'Произошла ошибка при регистрации. Пожалуйста, попробуйте позже.'
                ]);
        }
    }
}