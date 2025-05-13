<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReactController extends Controller
{
    public function index()
    {
        return view('welcome'); // Возвращаем view, где будет React
    }
}
