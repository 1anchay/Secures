<?php
// В файле app/Http/Controllers/HomeController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome'); // Это представление будет возвращено при обращении на главную страницу
        
    }
    public function yslovya()
{
    return view('yslovya');
}
public function politika()
{
    return view('politika');
}
public function blog()
{
    return view('blog');
}
public function store()
{
    return view('store');
}
public function audit()
{
    return view('audit');
}
}
