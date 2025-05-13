<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Применяем middleware для защиты контроллера
    public function __construct()
    {
        $this->middleware('admin');
    }

    // Метод для отображения панели администратора
    public function dashboard()
    {
        return view('admin.dashboard'); // Создайте соответствующее представление
    }

    // Метод для отображения списка пользователей
    public function users()
    {
        return view('admin.users'); // Создайте соответствующее представление
    }
}
