<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ReactController,
    ProfileController,
    BalanceController,
    AdminController,
    ChatController,
    HomeController
};
use App\Http\Controllers\Auth\{
    AuthenticatedSessionController,
    RegisteredUserController,
    ForgotPasswordController,
    ResetPasswordController
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Главная и статические страницы
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/home', 'index')->name('home.alt'); // Можно удалить, если не используется
    Route::get('/store', 'store')->name('store');
    Route::get('/politika', 'politika')->name('politika');
    Route::get('/prava', 'prava')->name('prava');
    Route::get('/yslovya', 'yslovya')->name('yslovya');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/audit', 'audit')->name('audit');
});

// Гостевые маршруты
Route::middleware('guest')->group(function () {
    // Аутентификация
    Route::controller(AuthenticatedSessionController::class)->group(function () {
        Route::get('login', 'create')->name('login');
        Route::post('login', 'store')->name('login.post');
    });
    
    // Регистрация
    Route::controller(RegisteredUserController::class)->group(function () {
        Route::get('register', 'create')->name('register');
        Route::post('register', 'store')->name('register.post');
    });
    
    // Сброс пароля
    Route::controller(ForgotPasswordController::class)->name('password.')->group(function () {
        Route::get('forgot-password', 'showLinkRequestForm')->name('request');
        Route::post('forgot-password', 'sendResetLinkEmail')->name('email');
    });
    
    Route::controller(ResetPasswordController::class)->group(function () {
        Route::get('reset-password/{token}', 'showResetForm')->name('password.reset');
        Route::post('reset-password', 'reset')->name('password.update');
    });
});

// Аутентифицированные маршруты
Route::middleware(['auth'])->group(function () {
    // Профиль
    Route::prefix('profile')->name('profile.')->group(function () {
        Route::controller(ProfileController::class)->group(function () {
            Route::get('/edit', 'edit')->name('edit');
            Route::put('/update', 'update')->name('update');
            Route::post('/remove-avatar', 'removeAvatar')->name('remove-avatar');
            Route::post('/update-avatar', 'updateAvatar')->name('update-avatar');
        });
    });
    
    // Баланс
    Route::prefix('balance')->name('balance.')->group(function () {
        Route::controller(BalanceController::class)->group(function () {
            Route::get('/', 'showForm')->name('form');
            Route::post('/process', 'processPayment')->name('process');
            Route::get('/topup', 'showTopUpForm')->name('topup');
            Route::post('/topup/process', 'processTopUp')->name('process.topup');
            Route::get('/gateway/{transaction}', 'paymentGateway')->name('gateway');
        });
    });

    // Чат
    Route::prefix('chat')->name('chat.')->group(function () {
        Route::controller(ChatController::class)->group(function () {
            Route::post('/send', 'sendMessage')->name('send');
            Route::get('/messages', 'getMessages')->name('messages');
        });
    });

    // Выход
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});

// Админские маршруты
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/dashboard', 'dashboard')->name('dashboard');
        Route::get('/users', 'users')->name('users');
        Route::get('/transactions', 'transactions')->name('transactions');
        Route::get('/cases', 'cases')->name('cases');
    });
    
    Route::prefix('chat')->name('chat.')->group(function () {
        Route::controller(ChatController::class)->group(function () {
            Route::get('/', 'getAdminMessages')->name('index');
            Route::post('/send', 'sendAdminMessage')->name('send');
        });
    });
});

// React (если нужно)
Route::get('/react', [ReactController::class, 'index'])
    ->name('react');