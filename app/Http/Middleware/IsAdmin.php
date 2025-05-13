<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Проверка, что пользователь авторизован и его роль = admin
        if (auth()->check() && auth()->user()->role === 'admin') {
            return $next($request);  // Если администратор, продолжаем выполнение запроса
        }

        // Если не администратор, перенаправляем на главную
        return redirect('/home');
    }
}
