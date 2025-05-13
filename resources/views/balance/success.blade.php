@extends('layouts.app')

@section('content')
@include('header')

<div class="min-h-screen bg-gray-900 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md mx-auto bg-gray-800 rounded-xl shadow-lg overflow-hidden md:max-w-2xl">
        <div class="p-8">
            <div class="text-center mb-8">
                <div class="w-20 h-20 bg-green-500/20 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-white mb-2">Платеж успешно завершен</h2>
                <p class="text-gray-400">ID транзакции: {{ $transaction->id }}</p>
            </div>

            <div class="bg-gray-700 rounded-lg p-6 mb-8">
                <div class="flex justify-between items-center mb-4">
                    <span class="text-gray-400">Сумма:</span>
                    <span class="text-xl font-bold text-green-400">{{ number_format($transaction->amount, 2) }} ₽</span>
                </div>
                <div class="flex justify-between items-center mb-4">
                    <span class="text-gray-400">Способ оплаты:</span>
                    <span class="text-white font-medium">
                        {{ $controller->getPaymentMethodName($transaction->payment_method) }}
                    </span>
                </div>
                <div class="flex justify-between items-center mb-4">
                    <span class="text-gray-400">Дата:</span>
                    <span class="text-white">{{ $transaction->completed_at->format('d.m.Y H:i') }}</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-400">Текущий баланс:</span>
                    <span class="text-xl font-bold text-white">
                        {{ number_format($transaction->user->balance, 2) }} ₽
                    </span>
                </div>
            </div>

            <a href="/" class="block w-full bg-gray-700 hover:bg-gray-600 text-white font-bold py-3 px-4 rounded-lg text-center transition-all">
                Вернуться на главную
            </a>
        </div>
    </div>
</div>

@include('footer')
@endsection