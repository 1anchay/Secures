@extends('layouts.app')

@section('content')
@include('header')
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/heroicons@1.0.6/outline/index.js"></script>
  </head>
<div class="min-h-screen bg-gray-900 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md mx-auto bg-gray-800 rounded-xl shadow-lg overflow-hidden md:max-w-2xl">
        <div class="p-8">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold text-white mb-2">Подтверждение платежа</h2>
                <div class="w-20 h-1 bg-amber-500 mx-auto"></div>
            </div>

            <div class="bg-gray-700 rounded-lg p-6 mb-8">
                <div class="flex justify-between items-center mb-4">
                    <span class="text-gray-400">Сумма:</span>
                    <span class="text-xl font-bold text-amber-400">{{ number_format($transaction->amount, 2) }} ₽</span>
                </div>
                <div class="flex justify-between items-center mb-4">
                    <span class="text-gray-400">Способ оплаты:</span>
                    <span class="text-white font-medium">
    {{ $payment_method_name }}
</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-gray-400">Новый баланс:</span>
                    <span class="text-xl font-bold text-green-400">
                        {{ number_format($transaction->balance_after, 2) }} ₽
                    </span>
                </div>
            </div>

            @if($transaction->payment_method === 'card')
            <form action="#" method="POST" id="payment-form">
                @csrf
                <div class="mb-6">
                    <label for="card-number" class="block text-sm font-medium text-gray-400 mb-2">Номер карты</label>
                    <input type="text" id="card-number" name="card-number" placeholder="1234 5678 9012 3456"
                           class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white focus:ring-2 focus:ring-amber-500 focus:border-amber-500">
                </div>
                
                <div class="grid grid-cols-2 gap-4 mb-6">
                    <div>
                        <label for="card-expiry" class="block text-sm font-medium text-gray-400 mb-2">Срок действия</label>
                        <input type="text" id="card-expiry" name="card-expiry" placeholder="MM/YY"
                               class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white focus:ring-2 focus:ring-amber-500 focus:border-amber-500">
                    </div>
                    <div>
                        <label for="card-cvc" class="block text-sm font-medium text-gray-400 mb-2">CVC</label>
                        <input type="text" id="card-cvc" name="card-cvc" placeholder="123"
                               class="w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white focus:ring-2 focus:ring-amber-500 focus:border-amber-500">
                    </div>
                </div>

                <button type="submit" class="w-full bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white font-bold py-3 px-4 rounded-lg transition-all flex items-center justify-center shadow-lg shadow-green-500/20 hover:shadow-green-500/30">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Подтвердить платеж
                </button>
            </form>
            @else
            <div class="text-center py-4">
                <p class="text-green-400">Платеж успешно обработан!</p>
                <a href="{{ route('dashboard') }}" class="mt-4 inline-block bg-gray-700 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-lg transition-all">
                    Вернуться в личный кабинет
                </a>
            </div>
            @endif
        </div>
    </div>
</div>

@include('footer')
@endsection