@extends('layouts.app')

@section('content')
@include('header')
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/heroicons@1.0.6/outline/index.js"></script>
    <style>
        .cyber-btn {
            position: relative;
            overflow: hidden;
        }
        .cyber-btn::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                to bottom right,
                rgba(59, 130, 246, 0) 0%,
                rgba(59, 130, 246, 0) 45%,
                rgba(59, 130, 246, 0.5) 50%,
                rgba(59, 130, 246, 0) 55%,
                rgba(59, 130, 246, 0) 100%
            );
            transform: rotate(30deg);
            animation: shine 3s infinite;
        }
        @keyframes shine {
            0% { left: -100%; top: -100%; }
            20% { left: 100%; top: 100%; }
            100% { left: 100%; top: 100%; }
        }
        .input-field {
            transition: all 0.3s ease;
            box-shadow: 0 0 0 1px rgba(59, 130, 246, 0);
        }
        .input-field:focus {
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.5);
        }
        .security-meter {
            height: 4px;
            background: linear-gradient(to right, #ef4444, #f59e0b, #84cc16);
            border-radius: 2px;
            margin-top: 2px;
            transition: all 0.5s ease;
        }
    </style>
</head>

<div class="min-h-screen bg-gray-900 py-12 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
    <!-- Анимированный фон -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80')] bg-cover bg-center"></div>
    </div>
    
    <!-- Декоративные элементы -->
    <div class="absolute top-20 left-10 w-32 h-32 rounded-full bg-gradient-to-r from-blue-500/10 to-cyan-500/10 blur-xl opacity-50 animate-float"></div>
    <div class="absolute bottom-20 right-20 w-40 h-40 rounded-full bg-gradient-to-r from-purple-500/10 to-pink-500/10 blur-xl opacity-50 animate-float-delay"></div>
    <div class="absolute top-1/3 right-1/4 w-24 h-24 rounded-full bg-gradient-to-r from-green-500/10 to-yellow-500/10 blur-xl opacity-30 animate-float"></div>

    <div class="max-w-md mx-auto relative z-10">
        <!-- Логотип с анимацией -->
        <div class="text-center mb-8 transform transition-all duration-500 hover:scale-105">
            <a href="{{ url('/') }}" class="inline-flex items-center space-x-3 group">
                <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-400 rounded-lg flex items-center justify-center shadow-lg ring-2 ring-blue-400/30 group-hover:ring-4 group-hover:from-blue-600 group-hover:to-cyan-500 transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <span class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-cyan-400 tracking-tight">
                    Secure<span class="text-white">Shield</span>
                </span>
            </a>
            <p class="mt-2 text-sm text-gray-400">Система защищенной регистрации</p>
        </div>

        <!-- Карточка регистрации -->
        <div class="bg-gray-800/80 backdrop-blur-sm py-8 px-6 sm:px-10 rounded-xl shadow-2xl border border-gray-700/50 hover:border-blue-500/30 transition-all duration-300">
            <div class="flex items-center justify-center mb-6">
                <svg class="h-8 w-8 text-blue-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                </svg>
                <h2 class="text-2xl font-bold text-center text-blue-400">
                    Активация доступа
                </h2>
            </div>

            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <!-- Имя пользователя -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-300 mb-1 flex items-center">
                        <svg class="h-4 w-4 mr-1 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        Идентификатор пользователя
                    </label>
                    <div class="relative">
                        <input id="name" name="name" type="text" autocomplete="name" required
                               class="input-field bg-gray-700/50 text-white placeholder-gray-400 px-4 py-3 w-full border border-gray-600/50 rounded-lg focus:outline-none focus:bg-gray-700/70"
                               placeholder="Введите ваш ID" value="{{ old('name') }}">
                        <div class="absolute right-3 top-3 text-gray-400">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                    </div>
                    @error('name')
                        <p class="mt-1 text-sm text-red-400 flex items-center">
                            <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-300 mb-1 flex items-center">
                        <svg class="h-4 w-4 mr-1 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Код доступа (Email)
                    </label>
                    <div class="relative">
                        <input id="email" name="email" type="email" autocomplete="email" required
                               class="input-field bg-gray-700/50 text-white placeholder-gray-400 px-4 py-3 w-full border border-gray-600/50 rounded-lg focus:outline-none focus:bg-gray-700/70"
                               placeholder="secure@example.com" value="{{ old('email') }}">
                        <div class="absolute right-3 top-3 text-gray-400">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                    </div>
                    @error('email')
                        <p class="mt-1 text-sm text-red-400 flex items-center">
                            <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Пароль -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-300 mb-1 flex items-center">
                        <svg class="h-4 w-4 mr-1 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                        Шифровальный ключ
                    </label>
                    <div class="relative">
                        <input id="password" name="password" type="password" autocomplete="new-password" required
                               class="input-field bg-gray-700/50 text-white placeholder-gray-400 px-4 py-3 w-full border border-gray-600/50 rounded-lg focus:outline-none focus:bg-gray-700/70"
                               placeholder="••••••••" oninput="updateSecurityMeter(this.value)">
                        <div class="absolute right-3 top-3 text-gray-400">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="security-meter" id="security-meter" style="width: 0%"></div>
                    <div class="flex justify-between text-xs text-gray-400 mt-1">
                        <span>Слабый</span>
                        <span>Средний</span>
                        <span>Сильный</span>
                    </div>
                    @error('password')
                        <p class="mt-1 text-sm text-red-400 flex items-center">
                            <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Подтверждение пароля -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-300 mb-1 flex items-center">
                        <svg class="h-4 w-4 mr-1 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Подтверждение ключа
                    </label>
                    <div class="relative">
                        <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password" required
                               class="input-field bg-gray-700/50 text-white placeholder-gray-400 px-4 py-3 w-full border border-gray-600/50 rounded-lg focus:outline-none focus:bg-gray-700/70"
                               placeholder="••••••••">
                        <div class="absolute right-3 top-3 text-gray-400">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                    </div>
                    @error('password_confirmation')
                        <p class="mt-1 text-sm text-red-400 flex items-center">
                            <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Checkbox для принятия условий -->
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="terms" name="terms" type="checkbox" required
                               class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-600 rounded bg-gray-700">
                    </div>
                    <div class="ml-3 text-sm">
                        <label for="terms" class="font-medium text-gray-300">
                            Я принимаю <a href="#" class="text-blue-400 hover:text-blue-300">условия использования</a> и <a href="#" class="text-blue-400 hover:text-blue-300">политику конфиденциальности</a>
                        </label>
                    </div>
                </div>
                @error('terms')
                    <p class="mt-1 text-sm text-red-400 flex items-center">
                        <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        {{ $message }}
                    </p>
                @enderror

                <!-- Кнопка регистрации -->
                <div class="pt-2">
                    <button type="submit" class="cyber-btn w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-gradient-to-r from-blue-600 to-cyan-500 hover:from-blue-700 hover:to-cyan-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-300 overflow-hidden">
                        <span class="relative z-10 flex items-center">
                            <svg class="h-5 w-5 mr-2 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                            </svg>
                            Активировать защищенный доступ
                        </span>
                    </button>
                </div>
            </form>

            <!-- Разделитель -->
            <div class="mt-6">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-600/50"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-gray-800/80 text-gray-400">
                            Уже есть идентификатор?
                        </span>
                    </div>
                </div>

                <!-- Ссылка на вход -->
                <div class="mt-6 text-center">
                    <a href="{{ route('login') }}" class="font-medium text-cyan-400 hover:text-cyan-300 transition duration-300 flex items-center justify-center">
                        <svg class="h-5 w-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                        </svg>
                        Авторизоваться в системе
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function updateSecurityMeter(password) {
        const meter = document.getElementById('security-meter');
        let strength = 0;
        
        // Проверка длины
        if (password.length > 0) strength += 20;
        if (password.length >= 8) strength += 20;
        
        // Проверка на наличие цифр
        if (/\d/.test(password)) strength += 20;
        
        // Проверка на наличие спецсимволов
        if (/[!@#$%^&*(),.?":{}|<>]/.test(password)) strength += 20;
        
        // Проверка на наличие букв разного регистра
        if (/[a-z]/.test(password) && /[A-Z]/.test(password)) strength += 20;
        
        meter.style.width = strength + '%';
        
        // Изменение цвета в зависимости от силы
        if (strength < 40) {
            meter.style.background = 'linear-gradient(to right, #ef4444, #ef4444)';
        } else if (strength < 80) {
            meter.style.background = 'linear-gradient(to right, #ef4444, #f59e0b)';
        } else {
            meter.style.background = 'linear-gradient(to right, #ef4444, #f59e0b, #84cc16)';
        }
    }
</script>

<style>
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
    .animate-float-delay {
        animation: float 6s ease-in-out 2s infinite;
    }
</style>

@include('footer')
@endsection