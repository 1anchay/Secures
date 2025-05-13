<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Показать личный кабинет пользователя
     */
    public function index()
    {
        // Получаем данные текущего пользователя
        $user = Auth::user();
        
        // Можно добавить любые дополнительные данные
        $stats = [
            'balance' => $user->balance,
            // другие статистические данные
        ];
        
        return view('dashboard.index', [
            'user' => $user,
            'stats' => $stats
        ]);
    }
}