@extends('layouts.app')

@section('content')
@include('header')
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/heroicons@1.0.6/outline/index.js"></script>
    <!-- Подключаем API для генерации QR-кодов -->
    <script src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=example"></script>
</head>

<div class="min-h-screen bg-gradient-to-b from-gray-900 to-gray-800 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md mx-auto bg-gray-800 rounded-xl shadow-lg overflow-hidden md:max-w-2xl transform transition-all hover:shadow-2xl">
        <div class="p-8">
            <!-- Заголовок и баланс -->
            <div class="flex flex-col space-y-4 mb-8">
                <div class="flex items-center justify-between">
                    <h2 class="text-3xl font-bold text-white">
                        <span class="bg-clip-text text-transparent bg-gradient-to-r from-yellow-400 to-amber-500">
                            Пополнение баланса
                        </span>
                    </h2>
                    <div class="flex items-center bg-gray-700 px-3 py-2 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-400" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd" />
                        </svg>
                        <span class="ml-2 text-lg font-semibold text-amber-400">
                            {{ number_format(auth()->user()->balance, 2) }} ₽
                        </span>
                    </div>
                </div>
                <div class="border-b border-gray-700 opacity-50"></div>
            </div>

            <form id="paymentForm" action="{{ route('balance.process') }}" method="POST">
                @csrf
                
                <!-- Поле для суммы -->
                <div class="mb-8">
                    <label for="amount" class="block text-sm font-medium text-gray-400 mb-3">
                        Сумма пополнения
                    </label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="text-gray-500 sm:text-sm"> ₽ </span>
                        </div>
                        <input type="number" id="amount" name="amount" min="10" step="10" value="100"
                               class="block w-full pl-10 pr-12 py-3 bg-gray-700 border border-gray-600 rounded-lg text-white focus:ring-2 focus:ring-amber-500 focus:border-amber-500 placeholder-gray-400"
                               placeholder="0.00" required>
                        <div class="absolute inset-y-0 right-0 flex items-center">
                            <span class="text-gray-400 px-3">RUB</span>
                        </div>
                    </div>
                    <div class="mt-2 flex justify-between text-xs text-gray-500">
                        <span>Минимум: 10 ₽</span>
                        <span>Шаг: 10 ₽</span>
                    </div>
                </div>

                <!-- Методы оплаты -->
                <div class="mb-8">
                    <label class="block text-sm font-medium text-gray-400 mb-3">
                        Способ оплаты
                    </label>
                    
                    <div class="space-y-3">
                        <!-- СБП -->
                        <div class="group">
                            <input id="sbp" name="payment_method" type="radio" value="sbp" class="hidden peer">
                            <label for="sbp" class="flex items-center p-4 bg-gray-700/50 border border-gray-700 rounded-lg cursor-pointer peer-checked:border-amber-500 peer-checked:bg-gray-700 group-hover:bg-gray-700 transition-all">
                                <div class="flex-shrink-0 w-8 h-8 flex items-center justify-center bg-blue-600 rounded-lg">
                                    <img src="https://qr.nspk.ru/proxyapp/logo.png" alt="СБП" class="h-5">
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-white font-medium">Система быстрых платежей</h3>
                                    <p class="text-xs text-gray-400">Мгновенное зачисление</p>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-auto h-5 w-5 text-transparent peer-checked:text-amber-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </label>
                        </div>

                        <!-- Банковская карта -->
                        <div class="group">
                            <input id="card" name="payment_method" type="radio" value="card" class="hidden peer">
                            <label for="card" class="flex items-center p-4 bg-gray-700/50 border border-gray-700 rounded-lg cursor-pointer peer-checked:border-amber-500 peer-checked:bg-gray-700 group-hover:bg-gray-700 transition-all">
                                <div class="flex-shrink-0 w-8 h-8 flex items-center justify-center bg-purple-600 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-white font-medium">Банковская карта</h3>
                                    <p class="text-xs text-gray-400">Visa, Mastercard, Мир</p>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-auto h-5 w-5 text-transparent peer-checked:text-amber-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </label>
                        </div>

                        <!-- FPIBank -->
                        <div class="group">
                            <input id="fpibank" name="payment_method" type="radio" value="fpibank" class="hidden peer" checked>
                            <label for="fpibank" class="flex items-center p-4 bg-gray-700/50 border border-gray-700 rounded-lg cursor-pointer peer-checked:border-amber-500 peer-checked:bg-gray-700 group-hover:bg-gray-700 transition-all">
                                <div class="flex-shrink-0 w-8 h-8 flex items-center justify-center bg-green-600 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 15h.01M11 15h.01" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-white font-medium">FPIBank</h3>
                                    <p class="text-xs text-gray-400">Оплата по QR-коду</p>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-auto h-5 w-5 text-transparent peer-checked:text-amber-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Кнопка оплаты -->
                <button type="button" id="payButton" class="w-full group relative flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-lg text-white bg-gradient-to-r from-amber-500 to-amber-600 hover:from-amber-600 hover:to-amber-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-amber-500 shadow-lg shadow-amber-500/20 hover:shadow-amber-500/30 transition-all active:scale-95">
                    <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-200 group-hover:text-white" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    Перейти к оплате
                    <span class="absolute right-0 inset-y-0 flex items-center pr-3 text-amber-200 group-hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </button>
            </form>

            <!-- Модальное окно с QR-кодом -->
            <div id="qrModal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 hidden">
                <div class="bg-gray-800 rounded-xl p-6 max-w-sm w-full mx-4 border border-amber-500">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold text-white">Оплата через FPIBank</h3>
                        <button id="closeQrModal" class="text-gray-400 hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    
                    <div class="text-center mb-4">
                        <p class="text-gray-300 mb-2">Отсканируйте QR-код для оплаты</p>
                        <img id="dynamicQrCode" src="" alt="QR Code" class="mx-auto mb-4 p-2 bg-white rounded-lg">
                        <p class="text-gray-400 text-sm">Сумма: <span id="qrAmount" class="text-amber-400 font-medium">100 ₽</span></p>
                    </div>
                    
                    <div class="bg-gray-700 rounded-lg p-4 mb-4">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-gray-400">Статус:</span>
                            <span id="paymentStatus" class="text-yellow-400 font-medium">Ожидание оплаты...</span>
                        </div>
                        <div class="w-full bg-gray-600 rounded-full h-2.5">
                            <div id="paymentProgress" class="bg-amber-500 h-2.5 rounded-full" style="width: 0%"></div>
                        </div>
                    </div>
                    
                    <button id="cancelPayment" class="w-full py-2 px-4 bg-gray-700 hover:bg-gray-600 text-white rounded-lg transition">
                        Отменить оплату
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@include('footer')

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const payButton = document.getElementById('payButton');
    const qrModal = document.getElementById('qrModal');
    const closeQrModal = document.getElementById('closeQrModal');
    const cancelPayment = document.getElementById('cancelPayment');
    const paymentForm = document.getElementById('paymentForm');
    const qrAmount = document.getElementById('qrAmount');
    const paymentStatus = document.getElementById('paymentStatus');
    const paymentProgress = document.getElementById('paymentProgress');
    const dynamicQrCode = document.getElementById('dynamicQrCode');
    
    let paymentCheckInterval;

    payButton.addEventListener('click', function() {
        const amount = document.getElementById('amount').value;
        const paymentMethod = document.querySelector('input[name="payment_method"]:checked').value;
        
        if (paymentMethod === 'fpibank') {
            // Показываем модальное окно с QR-кодом
            qrAmount.textContent = amount + ' ₽';
            qrModal.classList.remove('hidden');
            
            // Генерируем QR-код через российский сервис
            const qrData = encodeURIComponent(
                `FPIBank Payment|Amount:${amount}|Account:{{ auth()->user()->id }}`
            );
            dynamicQrCode.src = `https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=${qrData}`;
            
            // Симуляция проверки статуса платежа
            simulatePaymentCheck();
        } else {
            // Для других методов оплаты отправляем форму напрямую
            paymentForm.submit();
        }
    });
    
    closeQrModal.addEventListener('click', function() {
        qrModal.classList.add('hidden');
        clearInterval(paymentCheckInterval);
    });
    
    cancelPayment.addEventListener('click', function() {
        qrModal.classList.add('hidden');
        clearInterval(paymentCheckInterval);
    });
    
    function simulatePaymentCheck() {
        let progress = 0;
        paymentCheckInterval = setInterval(function() {
            progress += 5;
            if (progress > 100) progress = 100;
            
            paymentProgress.style.width = progress + '%';
            
            if (progress === 100) {
                paymentStatus.textContent = 'Оплата получена!';
                paymentStatus.className = 'text-green-400 font-medium';
                
                // Через 2 секунды отправляем форму
                setTimeout(function() {
                    qrModal.classList.add('hidden');
                    paymentForm.submit();
                }, 2000);
                
                clearInterval(paymentCheckInterval);
            }
        }, 1000);
    }
});
</script>
@endsection