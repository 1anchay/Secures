@extends('layouts.app')

@section('content')
@include('header')
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/heroicons@1.0.6/outline/index.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .security-bubble {
            position: absolute;
            border-radius: 50%;
            background: rgba(16, 185, 129, 0.05);
            animation: float 10s infinite ease-in-out;
            z-index: 0;
            filter: blur(1px);
        }
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-30px) rotate(5deg); }
        }
        .security-card {
            background: rgba(31, 41, 55, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .security-input {
            background: rgba(17, 24, 39, 0.8);
            border: 1px solid rgba(75, 85, 99, 0.5);
        }
        .security-input:focus {
            border-color: rgba(16, 185, 129, 0.8);
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.2);
        }
        .security-badge {
            background: rgba(16, 185, 129, 0.1);
            border: 1px solid rgba(16, 185, 129, 0.3);
        }
    </style>
</head>

<div class="min-h-screen bg-gradient-to-b from-gray-900 to-gray-800 py-12 px-4 sm:px-6 lg:px-8 pb-20 overflow-hidden relative">
    <!-- Security elements -->
    <div class="security-bubble" style="width: 120px; height: 120px; left: 10%; top: 20%; animation-delay: 0s;"></div>
    <div class="security-bubble" style="width: 80px; height: 80px; right: 15%; top: 40%; animation-delay: 3s;"></div>
    <div class="security-bubble" style="width: 60px; height: 60px; left: 30%; bottom: 20%; animation-delay: 6s;"></div>
    
    <div class="max-w-4xl mx-auto relative z-10">
        <!-- Security header -->
        <div class="text-center mb-10">
            <div class="inline-block mb-4">
                <div class="p-3 rounded-full bg-green-500/10 border border-green-500/30">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
            </div>
            <h1 class="text-3xl font-bold text-green-400 mb-2">Управление защитой профиля</h1>
            <p class="text-gray-400">Конфиденциальные настройки и параметры безопасности</p>
        </div>

        <!-- Main security card -->
        <div class="security-card rounded-xl shadow-2xl overflow-hidden">
            <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="p-6 sm:p-10" id="security-form">
                @csrf
                @method('PUT')

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Left column -->
                    <div>
                        <!-- Security badge -->
                        <div class="mb-6 p-4 rounded-lg security-badge">
                            <div class="flex items-center">
                                <svg class="h-5 w-5 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                <span class="font-medium text-green-400">Уровень защиты: Высокий</span>
                            </div>
                        </div>

                        <!-- Avatar block with security warning -->
                        <div class="mb-8">
                            <label class="block text-sm font-medium text-gray-300 mb-4 flex items-center">
                                <span>Фото профиля</span>
                                <span class="ml-2 px-2 py-1 text-xs bg-yellow-500/10 text-yellow-400 rounded">Конфиденциально</span>
                            </label>
                            <div class="flex flex-col items-center">
                                <label for="avatar-upload" class="cursor-pointer relative group">
                                    <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-green-400 shadow-lg transition-all duration-300 relative">
                                        <img id="avatar-preview" 
                                             src="{{ $user->profile_photo_path ? asset('storage/'.$user->profile_photo_path) : 'https://ui-avatars.com/api/?name='.urlencode($user->name).'&color=7F9CF5&background=EBF4FF' }}" 
                                             alt="User Avatar"
                                             class="w-full h-full object-cover transition duration-300">
                                        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 rounded-full opacity-0 group-hover:opacity-100 transition duration-300">
                                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </label>
                                <input type="file" id="avatar-upload" name="avatar" class="hidden" accept="image/jpeg,image/png">
                                <div class="mt-4 flex space-x-2">
                                    <button type="button" onclick="document.getElementById('avatar-upload').click()" class="px-4 py-2 bg-gray-700 text-gray-300 rounded-lg hover:bg-gray-600 transition duration-300">
                                        Изменить
                                    </button>
                                    @if($user->profile_photo_path)
                                    <button type="button" onclick="removeAvatar()" class="px-4 py-2 bg-red-600/20 text-red-400 rounded-lg hover:bg-red-600/30 transition duration-300">
                                        Удалить
                                    </button>
                                    @endif
                                </div>
                                <p class="mt-2 text-xs text-gray-400">Только JPEG/PNG. Макс. 2MB. Зашифровано при хранении.</p>
                            </div>
                        </div>

                        <!-- Security information -->
                        <div class="bg-gray-700/50 p-6 rounded-lg border border-gray-600">
                            <h3 class="text-lg font-semibold text-green-400 mb-4 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                                Журнал безопасности
                            </h3>
                            <div class="space-y-3 text-sm">
                                <div class="flex justify-between border-b border-gray-600 pb-2">
                                    <span class="text-gray-400">Последний вход:</span>
                                    <span class="text-white font-mono">{{ $user->last_login_at?->format('d.m.Y H:i') ?? 'Неизвестно' }}</span>
                                </div>
                                <div class="flex justify-between border-b border-gray-600 pb-2">
                                    <span class="text-gray-400">IP-адрес:</span>
                                    <span class="text-white font-mono">{{ $user->last_login_ip ?? 'Неизвестно' }}</span>
                                </div>
                                <div class="flex justify-between border-b border-gray-600 pb-2">
                                    <span class="text-gray-400">Устройство:</span>
                                    <span class="text-white">Определение отключено</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-400">Активность:</span>
                                    <span class="text-green-400 font-medium">Нет подозрительных действий</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right column - Security settings -->
                    <div>
                        <!-- Two-factor authentication -->
                        <div class="mb-6 bg-gray-700/50 p-4 rounded-lg border border-gray-600">
                            <div class="flex justify-between items-center">
                                <div>
                                    <h3 class="font-medium text-white flex items-center">
                                        <svg class="w-5 h-5 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                        </svg>
                                        Двухфакторная аутентификация
                                    </h3>
                                    <p class="text-xs text-gray-400 mt-1">Дополнительный уровень защиты</p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="sr-only peer" disabled>
                                    <div class="w-11 h-6 bg-gray-600 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-green-500"></div>
                                </label>
                            </div>
                            <p class="text-xs text-yellow-400 mt-2">Доступно в Enterprise-версии системы</p>
                        </div>

                        <!-- Personal data -->
                        <div class="mb-6">
                            <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Имя пользователя</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                </div>
                                <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required
                                       class="security-input text-white placeholder-gray-400 pl-10 pr-4 py-3 w-full rounded-lg focus:outline-none transition duration-300"
                                       placeholder="Ваше имя">
                            </div>
                            @error('name')
                                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email with verification status -->
                        <div class="mb-6">
                            <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Электронная почта</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" required
                                       class="security-input text-white placeholder-gray-400 pl-10 pr-4 py-3 w-full rounded-lg focus:outline-none transition duration-300"
                                       placeholder="your@secure-mail.com">
                            </div>
                            @error('email')
                                <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                            @enderror
                            
                            @if (!$user->hasVerifiedEmail())
                                <div class="mt-3 bg-gray-700/50 p-3 rounded-lg border border-yellow-500/30">
                                    <p class="text-yellow-400 text-sm mb-2 flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                        </svg>
                                        Ваш email не подтверждён
                                    </p>
                                    <form method="POST" action="{{ route('home') }}" class="inline">
                                        @csrf
                                        <button type="submit" class="text-green-400 hover:text-green-300 text-sm underline transition duration-300 flex items-center">
                                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                            </svg>
                                            Отправить подтверждение
                                        </button>
                                    </form>
                                </div>
                            @else
                                <div class="mt-2 text-xs text-green-400 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                    Email подтверждён и защищён
                                </div>
                            @endif
                        </div>

                        <!-- Password change with security requirements -->
                        <div class="mb-6 bg-gray-700/50 p-4 rounded-lg border border-gray-600">
                            <h3 class="font-medium text-white mb-3 flex items-center">
                                <svg class="w-5 h-5 text-green-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                                Смена пароля
                            </h3>
                            <div class="space-y-4">
                                <div>
                                    <label for="current_password" class="block text-sm text-gray-300 mb-1">Текущий пароль</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                            </svg>
                                        </div>
                                        <input id="current_password" name="current_password" type="password" autocomplete="current-password"
                                               class="security-input text-white placeholder-gray-400 pl-10 pr-4 py-2 w-full rounded-lg focus:outline-none transition duration-300"
                                               placeholder="Требуется для смены">
                                    </div>
                                </div>
                                <div>
                                    <label for="password" class="block text-sm text-gray-300 mb-1">Новый пароль</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                            </svg>
                                        </div>
                                        <input id="password" name="password" type="password" autocomplete="new-password"
                                               class="security-input text-white placeholder-gray-400 pl-10 pr-4 py-2 w-full rounded-lg focus:outline-none transition duration-300"
                                               placeholder="Минимум 12 символов">
                                    </div>
                                    <div class="mt-1 grid grid-cols-2 gap-2 text-xs text-gray-400">
                                        <div class="flex items-center">
                                            <span id="length-check" class="w-4 h-4 inline-block mr-1 rounded-full bg-gray-600"></span>
                                            <span>12+ символов</span>
                                        </div>
                                        <div class="flex items-center">
                                            <span id="number-check" class="w-4 h-4 inline-block mr-1 rounded-full bg-gray-600"></span>
                                            <span>Цифры</span>
                                        </div>
                                        <div class="flex items-center">
                                            <span id="lowercase-check" class="w-4 h-4 inline-block mr-1 rounded-full bg-gray-600"></span>
                                            <span>Строчные</span>
                                        </div>
                                        <div class="flex items-center">
                                            <span id="uppercase-check" class="w-4 h-4 inline-block mr-1 rounded-full bg-gray-600"></span>
                                            <span>Прописные</span>
                                        </div>
                                        <div class="flex items-center">
                                            <span id="special-check" class="w-4 h-4 inline-block mr-1 rounded-full bg-gray-600"></span>
                                            <span>Спецсимволы</span>
                                        </div>
                                        <div class="flex items-center">
                                            <span id="match-check" class="w-4 h-4 inline-block mr-1 rounded-full bg-gray-600"></span>
                                            <span>Совпадение</span>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label for="password_confirmation" class="block text-sm text-gray-300 mb-1">Подтверждение</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                        <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password"
                                               class="security-input text-white placeholder-gray-400 pl-10 pr-4 py-2 w-full rounded-lg focus:outline-none transition duration-300"
                                               placeholder="Повторите новый пароль">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form actions with security warning -->
                <div class="mt-8 pt-6 border-t border-gray-700">
                    <div class="flex flex-col sm:flex-row justify-between items-center">
                        <div class="mb-4 sm:mb-0 text-xs text-gray-400 order-2 sm:order-1">
                            <svg class="w-4 h-4 inline-block mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                            Все данные передаются по защищённому соединению
                        </div>
                        <div class="flex space-x-3 order-1 sm:order-2">
                            <a href="{{ route('home') }}" class="px-4 py-2 border border-gray-600 text-gray-300 rounded-lg hover:bg-gray-700/50 transition duration-300 flex items-center">
                                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                                </svg>
                                Отмена
                            </a>
                            <button type="submit" id="submit-button" class="px-6 py-2 bg-gradient-to-r from-green-500 to-green-600 text-white rounded-lg hover:from-green-600 hover:to-green-700 transition duration-300 shadow-lg flex items-center">
                                <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                Сохранить изменения
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Security modals -->
<div id="security-modal" class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50 hidden">
    <div class="bg-gray-800 p-6 rounded-xl border border-green-500/30 max-w-sm w-full shadow-2xl">
        <div class="text-center">
            <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-500/10">
                <svg class="h-6 w-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
            <h3 class="text-lg font-medium text-white mt-4" id="modal-title">Успешное обновление</h3>
            <div class="mt-2 text-sm text-gray-300" id="modal-text">
                <p>Ваши настройки безопасности были успешно обновлены.</p>
            </div>
            <div class="mt-6">
                <button id="close-security-modal" class="px-6 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition duration-300 w-full">
                    Понятно
                </button>
            </div>
        </div>
    </div>
</div>

@include('footer')

@section('scripts')
<script>
    // Функция для показа уведомлений
    function showSecurityAlert(title, message) {
        const modal = document.getElementById('security-modal');
        document.getElementById('modal-title').textContent = title;
        document.getElementById('modal-text').innerHTML = `<p>${message}</p>`;
        modal.classList.remove('hidden');
        
        // Автоматическое закрытие через 3 секунды
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 3000);
    }

    // Закрытие модального окна
    document.getElementById('close-security-modal').addEventListener('click', function() {
        document.getElementById('security-modal').classList.add('hidden');
    });

    // Обработка загрузки аватара
    document.getElementById('avatar-upload').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (!file) return;
        
        // Валидация файла
        if (file.size > 2 * 1024 * 1024) {
            showSecurityAlert('Ошибка', 'Максимальный размер файла - 2MB');
            return;
        }
        
        if (!['image/jpeg', 'image/png'].includes(file.type)) {
            showSecurityAlert('Ошибка', 'Допустимы только JPEG и PNG изображения');
            return;
        }
        
        // Превью аватара
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('avatar-preview').src = e.target.result;
            
            // Отправка на сервер
            const formData = new FormData();
            formData.append('avatar', file);
            formData.append('_token', document.querySelector('meta[name="csrf-token"]').content);
            
            fetch("{{ route('profile.update-avatar') }}", {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) throw new Error('Network response was not ok');
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    showSecurityAlert('Успешно', 'Аватар успешно обновлён');
                } else {
                    showSecurityAlert('Ошибка', data.message || 'Ошибка при обновлении аватара');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showSecurityAlert('Ошибка', 'Произошла ошибка при загрузке');
            });
        };
        reader.readAsDataURL(file);
    });

    // Удаление аватара
    function removeAvatar() {
        if (confirm('Вы уверены, что хотите удалить аватар?')) {
            fetch("{{ route('profile.remove-avatar') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.getElementById('avatar-preview').src = 'https://ui-avatars.com/api/?name=' + 
                        encodeURIComponent(document.getElementById('name').value) + 
                        '&color=7F9CF5&background=EBF4FF';
                    showSecurityAlert('Успешно', 'Аватар удалён');
                } else {
                    showSecurityAlert('Ошибка', data.message || 'Не удалось удалить аватар');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showSecurityAlert('Ошибка', 'Произошла ошибка при удалении');
            });
        }
    }

    // Валидация пароля
    const passwordInput = document.getElementById('password');
    const confirmInput = document.getElementById('password_confirmation');
    
    if (passwordInput) {
        passwordInput.addEventListener('input', checkPasswordStrength);
        confirmInput.addEventListener('input', checkPasswordMatch);
    }

    function checkPasswordStrength() {
        const password = passwordInput.value;
        const checks = {
            length: password.length >= 12,
            number: /\d/.test(password),
            lowercase: /[a-z]/.test(password),
            uppercase: /[A-Z]/.test(password),
            special: /[!@#$%^&*(),.?":{}|<>]/.test(password)
        };
        
        // Обновление индикаторов
        document.getElementById('length-check').style.backgroundColor = checks.length ? '#10B981' : '#4B5563';
        document.getElementById('number-check').style.backgroundColor = checks.number ? '#10B981' : '#4B5563';
        document.getElementById('lowercase-check').style.backgroundColor = checks.lowercase ? '#10B981' : '#4B5563';
        document.getElementById('uppercase-check').style.backgroundColor = checks.uppercase ? '#10B981' : '#4B5563';
        document.getElementById('special-check').style.backgroundColor = checks.special ? '#10B981' : '#4B5563';
        
        if (confirmInput.value.length > 0) {
            checkPasswordMatch();
        }
    }

    function checkPasswordMatch() {
        const match = passwordInput.value === confirmInput.value && passwordInput.value.length > 0;
        document.getElementById('match-check').style.backgroundColor = match ? '#10B981' : '#4B5563';
    }

    // Обработка основной формы
    document.getElementById('security-form').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        const submitButton = document.getElementById('submit-button');
        
        // Блокировка кнопки во время отправки
        submitButton.disabled = true;
        submitButton.innerHTML = '<svg class="animate-spin -ml-1 mr-2 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg> Обработка...';
        
        fetch(this.action, {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) throw new Error('Network response was not ok');
            return response.json();
        })
        .then(data => {
            if (data.success) {
                showSecurityAlert('Успешно', 'Настройки профиля сохранены');
                if (data.redirect) {
                    setTimeout(() => {window.location.href = data.redirect;
}, 1500);
}
} else {
let errorMessage = 'Произошла ошибка при сохранении';
if (data.errors) {
errorMessage = Object.values(data.errors).join('
');
}
showSecurityAlert('Ошибка', errorMessage);
}
})
.catch(error => {
console.error('Error:', error);
showSecurityAlert('Ошибка', 'Произошла ошибка при отправке формы');
})
.finally(() => {
submitButton.disabled = false;
submitButton.innerHTML = '<svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg> Сохранить изменения';
});
});
// Инициализация проверки пароля при загрузке страницы
if (passwordInput && passwordInput.value.length > 0) {
    checkPasswordStrength();
}
if (confirmInput && confirmInput.value.length > 0) {
    checkPasswordMatch();
}</script> @endsection
