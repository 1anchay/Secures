<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    // Проверка баланса пользователя
    Route::post('/check-balance', function (Request $request) {
        // Проверяем аутентификацию пользователя
        if (!auth()->check()) {
            return response()->json(['message' => 'Не авторизован'], 401);
        }

        // Получаем запрошенную сумму
        $requestedAmount = $request->input('amount');
        
        // Получаем текущего пользователя
        $user = auth()->user();
        
        // Проверяем баланс (предполагаем, что у модели User есть поле balance)
        if ($user->balance >= $requestedAmount) {
            return response()->json([
                'success' => true,
                'balance' => $user->balance,
                'message' => 'Достаточно средств'
            ]);
        } else {
            return response()->json([
                'success' => false,
                'balance' => $user->balance,
                'required' => $requestedAmount,
                'message' => 'Недостаточно средств на балансе'
            ], 400);
        }
    });
});