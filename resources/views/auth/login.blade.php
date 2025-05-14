@extends('layouts.app')

@section('content')
@include('header')
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/heroicons@1.0.6/outline/index.js"></script>
    <style>
        .cyber-glitch {
            position: relative;
        }
        .cyber-glitch::before, .cyber-glitch::after {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.8;
        }
        .cyber-glitch::before {
            color: #0ff;
            z-index: -1;
            animation: glitch-effect 3s infinite;
        }
        .cyber-glitch::after {
            color: #f0f;
            z-index: -2;
            animation: glitch-effect 2s infinite reverse;
        }
        @keyframes glitch-effect {
            0% { transform: translate(0); }
            20% { transform: translate(-3px, 3px); }
            40% { transform: translate(-3px, -3px); }
            60% { transform: translate(3px, 3px); }
            80% { transform: translate(3px, -3px); }
            100% { transform: translate(0); }
        }
        .hacker-terminal {
            background-color: rgba(0, 20, 30, 0.7);
            border: 1px solid #0ff;
            box-shadow: 0 0 15px rgba(0, 255, 255, 0.5);
        }
        .scanline {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                to bottom,
                rgba(0, 255, 255, 0) 0%,
                rgba(0, 255, 255, 0.03) 50%,
                rgba(0, 255, 255, 0) 100%
            );
            animation: scanline 8s linear infinite;
            pointer-events: none;
        }
        @keyframes scanline {
            0% { transform: translateY(-100%); }
            100% { transform: translateY(100%); }
        }
        .cyber-input {
            background: rgba(0, 10, 20, 0.7);
            border: 1px solid #0ff;
            color: #0ff;
            transition: all 0.3s;
        }
        .cyber-input:focus {
            box-shadow: 0 0 10px rgba(0, 255, 255, 0.7);
            border-color: #f0f;
        }
        .cyber-input::placeholder {
            color: rgba(0, 255, 255, 0.5);
        }
        .cyber-btn {
            position: relative;
            overflow: hidden;
            background: linear-gradient(45deg, #0ff, #f0f);
            color: black;
            font-weight: bold;
            border: none;
            z-index: 1;
        }
        .cyber-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            transition: 0.5s;
            z-index: -1;
        }
        .cyber-btn:hover::before {
            left: 100%;
        }
        .binary-rain {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
            pointer-events: none;
        }
        .binary-digit {
            position: absolute;
            color: rgba(0, 255, 255, 0.3);
            font-family: monospace;
            animation: fall linear infinite;
        }
        @keyframes fall {
            to { transform: translateY(100vh); }
        }
    </style>
</head>

<div class="min-h-screen bg-gray-900 py-12 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
    <!-- Бинарный дождь -->
    <div class="binary-rain" id="binaryRain"></div>
    
    <!-- Декоративные элементы -->
    <div class="absolute top-20 left-10 w-32 h-32 rounded-full bg-gradient-to-r from-blue-500/10 to-cyan-500/10 blur-xl opacity-50 animate-float"></div>
    <div class="absolute bottom-20 right-20 w-40 h-40 rounded-full bg-gradient-to-r from-purple-500/10 to-pink-500/10 blur-xl opacity-50 animate-float-delay"></div>
    
    <div class="max-w-md mx-auto relative z-10">
        <!-- Логотип с глитч-эффектом -->
        <div class="text-center mb-8 transform transition-all duration-500 hover:scale-105">
            <a href="{{ url('/') }}" class="inline-flex items-center space-x-3 group cyber-glitch" data-text="SecureShield">
                <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-400 rounded-lg flex items-center justify-center shadow-lg ring-2 ring-blue-400/30 group-hover:ring-4 group-hover:from-blue-600 group-hover:to-cyan-500 transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <span class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-cyan-400 tracking-tight">
                Secure<span class="text-white">Shield</span>
                </span>
            </a>
            <p class="mt-2 text-sm text-cyan-400 font-mono">Система защищенной аутентификации</p>
        </div>

        <!-- Карточка входа в стиле терминала -->
        <div class="hacker-terminal py-8 px-6 sm:px-10 rounded-lg relative overflow-hidden">
            <!-- Сканлайн эффект -->
            <div class="scanline"></div>
            
            <div class="flex items-center justify-center mb-6">
                <svg class="h-8 w-8 text-cyan-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                </svg>
                <h2 class="text-2xl font-bold text-center text-cyan-400 font-mono">
                    ВХОД В СИСТЕМУ
                </h2>
            </div>

            <!-- Вывод ошибок -->
            @if($errors->any())
                <div class="mb-4 p-4 bg-red-900/50 border border-red-500 text-red-400 rounded-lg font-mono">
                    <div class="flex items-center">
                        <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        ОШИБКА АУТЕНТИФИКАЦИИ
                    </div>
                    <ul class="list-disc list-inside mt-2 text-sm">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <!-- Поле Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-cyan-400 mb-1 flex items-center font-mono">
                        <span class="text-green-400 mr-2">></span>
                        USER ID / EMAIL
                    </label>
                    <div class="relative">
                        <input id="email" name="email" type="email" autocomplete="email" required
                               class="cyber-input px-4 py-3 w-full rounded-lg focus:outline-none font-mono"
                               placeholder="user@domain.com" value="{{ old('email') }}"
                               onfocus="this.placeholder=''" 
                               onblur="this.placeholder='user@domain.com'">
                    </div>
                    @error('email')
                        <p class="mt-1 text-sm text-red-400 flex items-center font-mono">
                            <span class="text-red-400 mr-2">!</span>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Поле Пароля -->
                <div>
                    <label for="password" class="block text-sm font-medium text-cyan-400 mb-1 flex items-center font-mono">
                        <span class="text-green-400 mr-2">></span>
                        ENCRYPTION KEY
                    </label>
                    <div class="relative">
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                               class="cyber-input px-4 py-3 w-full rounded-lg focus:outline-none font-mono"
                               placeholder="********"
                               onfocus="this.placeholder=''" 
                               onblur="this.placeholder='********'"
                               oninput="updateSecurityIndicator(this.value)">
                        <div class="absolute right-3 top-3 text-cyan-400">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex items-center mt-1">
                        <span id="security-indicator" class="text-xs font-mono text-cyan-400">SECURITY LEVEL: </span>
                        <span id="security-level" class="text-xs font-mono ml-1 text-red-400">NULL</span>
                    </div>
                    @error('password')
                        <p class="mt-1 text-sm text-red-400 flex items-center font-mono">
                            <span class="text-red-400 mr-2">!</span>
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Запомнить меня и Забыли пароль -->
                <div class="flex items-center justify-between font-mono">
                    <div class="flex items-center">
                        <input id="remember" name="remember" type="checkbox" class="h-4 w-4 text-cyan-500 focus:ring-cyan-500 border-gray-600 rounded bg-gray-900">
                        <label for="remember" class="ml-2 block text-sm text-cyan-400">
                            REMEMBER SESSION
                        </label>
                    </div>

                    <div class="text-sm">
                        <a href="{{ route('password.request') }}" class="text-cyan-400 hover:text-cyan-300 transition duration-200">
                            LOST KEY?
                        </a>
                    </div>
                </div>

                <!-- Кнопка входа -->
                <div class="pt-4">
                    <button type="submit" class="cyber-btn w-full flex justify-center py-3 px-4 rounded-lg text-sm font-bold focus:outline-none transition-all duration-300">
                        <span class="flex items-center">
                            <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                            </svg>
                            INITIATE LOGIN SEQUENCE
                        </span>
                    </button>
                </div>
            </form>

            <!-- Разделитель -->
            <div class="mt-6">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-cyan-400/20"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-gray-900/80 text-cyan-400 font-mono">
                            NEW USER DETECTED
                        </span>
                    </div>
                </div>

                <!-- Ссылка на регистрацию -->
                <div class="mt-6 text-center">
                    <a href="{{ route('register') }}" class="text-cyan-400 hover:text-cyan-300 transition duration-300 flex items-center justify-center font-mono">
                        <svg class="h-5 w-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        REQUEST ACCESS CLEARANCE
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Генерация бинарного дождя
    function createBinaryRain() {
        const container = document.getElementById('binaryRain');
        const width = window.innerWidth;
        const height = window.innerHeight;
        const digits = '01';
        
        // Количество цифр
        for (let i = 0; i < 50; i++) {
            const digit = document.createElement('div');
            digit.className = 'binary-digit';
            digit.textContent = digits.charAt(Math.floor(Math.random() * digits.length));
            
            // Случайная позиция
            digit.style.left = Math.random() * width + 'px';
            digit.style.top = -20 + 'px';
            
            // Случайная скорость
            const duration = 5 + Math.random() * 10;
            digit.style.animationDuration = duration + 's';
            
            // Случайный размер
            const size = 10 + Math.random() * 10;
            digit.style.fontSize = size + 'px';
            
            // Случайная прозрачность
            digit.style.opacity = 0.1 + Math.random() * 0.3;
            
            container.appendChild(digit);
            
            // Удаление цифр после завершения анимации
            setTimeout(() => {
                digit.remove();
            }, duration * 1000);
        }
        
        // Продолжаем генерировать новые цифры
        setTimeout(createBinaryRain, 200);
    }
    
    // Индикатор сложности пароля
    function updateSecurityIndicator(password) {
        const indicator = document.getElementById('security-level');
        let strength = 0;
        
        if (password.length > 0) strength += 20;
        if (password.length >= 6) strength += 20;
        if (/\d/.test(password)) strength += 20;
        if (/[!@#$%^&*(),.?":{}|<>]/.test(password)) strength += 20;
        if (/[a-z]/.test(password) && /[A-Z]/.test(password)) strength += 20;
        
        if (strength === 0) {
            indicator.textContent = 'NULL';
            indicator.className = 'text-xs font-mono ml-1 text-red-400';
        } else if (strength < 40) {
            indicator.textContent = 'LOW';
            indicator.className = 'text-xs font-mono ml-1 text-red-400';
        } else if (strength < 70) {
            indicator.textContent = 'MEDIUM';
            indicator.className = 'text-xs font-mono ml-1 text-yellow-400';
        } else {
            indicator.textContent = 'HIGH';
            indicator.className = 'text-xs font-mono ml-1 text-green-400';
        }
    }
    
    // Запускаем бинарный дождь после загрузки страницы
    document.addEventListener('DOMContentLoaded', function() {
        createBinaryRain();
    });
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