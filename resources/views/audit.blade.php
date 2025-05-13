@extends('layouts.app')

@section('content')
@include('header')

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .security-background {
            background: 
                linear-gradient(rgba(10, 10, 30, 0.95), rgba(5, 5, 20, 0.98)),
                url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .security-card {
            background: rgba(20, 20, 40, 0.9);
            border: 1px solid rgba(74, 109, 255, 0.3);
            border-radius: 8px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(5px);
            transition: all 0.3s ease;
        }
        .security-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 89, 255, 0.2);
            border-color: rgba(74, 109, 255, 0.5);
        }
        .security-icon {
            filter: drop-shadow(0 0 8px rgba(56, 182, 255, 0.5));
            transition: all 0.3s ease;
        }
        .security-icon:hover {
            transform: scale(1.1);
            filter: drop-shadow(0 0 12px rgba(56, 182, 255, 0.8));
        }
        .floating {
            animation: floating 6s ease-in-out infinite;
        }
        @keyframes floating {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }
        .gradient-text {
            background: linear-gradient(90deg, #38b6ff, #3a6eff);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        .audit-step::before {
            content: '';
            position: absolute;
            left: -38px;
            top: 0;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: #3a6eff;
            border: 3px solid #38b6ff;
        }
        .audit-timeline::before {
            content: '';
            position: absolute;
            left: 7px;
            top: 0;
            height: 100%;
            width: 2px;
            background: linear-gradient(to bottom, #3a6eff, #38b6ff);
        }
        .checklist-item {
            position: relative;
            padding-left: 32px;
        }
        .checklist-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 4px;
            width: 20px;
            height: 20px;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%2338b6ff'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 13l4 4L19 7'/%3E%3C/svg%3E") no-repeat center;
        }
    </style>
</head>

<div class="min-h-screen security-background py-12 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
    <!-- Декоративные элементы -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <!-- Аудит -->
        <svg class="absolute top-1/4 left-10 w-24 h-24 text-blue-400 opacity-20 security-icon floating" style="animation-delay: 0.5s;" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor" d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"/>
        </svg>
        
        <!-- Защита -->
        <svg class="absolute top-1/3 right-20 w-28 h-28 text-green-400 opacity-20 security-icon floating" style="animation-delay: 1s;" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor" d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11V11.99z"/>
        </svg>
        
        <!-- Безопасность -->
        <svg class="absolute bottom-1/4 left-20 w-32 h-32 text-indigo-400 opacity-20 security-icon floating" style="animation-delay: 1.5s;" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor" d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/>
        </svg>
    </div>

    <div class="max-w-6xl mx-auto relative z-10">
        <!-- Герой-секция -->
        <div class="security-card mb-8 overflow-hidden">
            <div class="bg-gradient-to-r from-blue-800 to-indigo-900 p-8 md:p-12 text-center">
                <div class="flex justify-center mb-6">
                    <img src="/images/secureshield-logo.png" alt="SecureShield" class="h-16 security-icon" onerror="this.src='https://via.placeholder.com/150x64?text=SecureShield'">
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Аудит безопасности SecureShield</h1>
                <p class="text-xl text-blue-200 max-w-3xl mx-auto">Комплексная проверка защищенности ваших систем и приложений</p>
            </div>
            <div class="p-8 grid grid-cols-1 md:grid-cols-3 gap-6 bg-gray-900/30">
                <div class="flex items-center">
                    <div class="bg-blue-500/10 p-3 rounded-lg mr-4">
                        <svg class="h-8 w-8 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-400">Методология</p>
                        <p class="text-xl font-bold text-white">OWASP, NIST, ISO 27001</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="bg-green-500/10 p-3 rounded-lg mr-4">
                        <svg class="h-8 w-8 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-400">Сроки</p>
                        <p class="text-xl font-bold text-white">От 3 до 14 дней</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="bg-purple-500/10 p-3 rounded-lg mr-4">
                        <svg class="h-8 w-8 text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-400">Гарантии</p>
                        <p class="text-xl font-bold text-white">Конфиденциальность</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Основное содержание -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Основной контент -->
            <div class="lg:col-span-2 space-y-8">
                <!-- О аудите -->
                <div class="security-card overflow-hidden">
                    <div class="flex items-center bg-gradient-to-r from-blue-700 to-blue-800 p-6">
                        <div class="bg-blue-500/20 p-3 rounded-lg mr-6">
                            <svg class="h-8 w-8 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-white">Что включает аудит?</h2>
                    </div>
                    <div class="p-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                            <div class="bg-blue-900/30 p-6 rounded-lg border border-blue-800/50">
                                <h3 class="text-lg font-bold text-white mb-4 flex items-center">
                                    <svg class="w-6 h-6 text-blue-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                    </svg>
                                    Технический аудит
                                </h3>
                                <ul class="space-y-3 text-gray-300">
                                    <li class="checklist-item">Проверка на уязвимости OWASP Top 10</li>
                                    <li class="checklist-item">Тестирование на проникновение</li>
                                    <li class="checklist-item">Анализ конфигураций серверов</li>
                                    <li class="checklist-item">Проверка шифрования данных</li>
                                </ul>
                            </div>
                            <div class="bg-blue-900/30 p-6 rounded-lg border border-blue-800/50">
                                <h3 class="text-lg font-bold text-white mb-4 flex items-center">
                                    <svg class="w-6 h-6 text-blue-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                                    </svg>
                                    Документальный аудит
                                </h3>
                                <ul class="space-y-3 text-gray-300">
                                    <li class="checklist-item">Анализ политик безопасности</li>
                                    <li class="checklist-item">Проверка соответствия GDPR</li>
                                    <li class="checklist-item">Оценка процессов управления доступом</li>
                                    <li class="checklist-item">Рекомендации по улучшению</li>
                                </ul>
                            </div>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-4">Как проходит аудит?</h3>
                        <div class="relative audit-timeline pl-10">
                            <div class="relative audit-step mb-8">
                                <div class="bg-blue-900/20 p-6 rounded-lg border border-blue-800/50">
                                    <p class="text-sm text-blue-400 font-bold mb-2">Этап 1</p>
                                    <h4 class="text-lg font-bold text-white mb-2">Подготовка</h4>
                                    <p class="text-gray-400">Заключение NDA, определение scope, согласование методологии</p>
                                </div>
                            </div>
                            <div class="relative audit-step mb-8">
                                <div class="bg-purple-900/20 p-6 rounded-lg border border-purple-800/50">
                                    <p class="text-sm text-purple-400 font-bold mb-2">Этап 2</p>
                                    <h4 class="text-lg font-bold text-white mb-2">Автоматизированное сканирование</h4>
                                    <p class="text-gray-400">Использование инструментов: Burp Suite, OWASP ZAP, Nmap</p>
                                </div>
                            </div>
                            <div class="relative audit-step mb-8">
                                <div class="bg-indigo-900/20 p-6 rounded-lg border border-indigo-800/50">
                                    <p class="text-sm text-indigo-400 font-bold mb-2">Этап 3</p>
                                    <h4 class="text-lg font-bold text-white mb-2">Ручное тестирование</h4>
                                    <p class="text-gray-400">Поиск сложных уязвимостей, бизнес-логика, цепочки атак</p>
                                </div>
                            </div>
                            <div class="relative audit-step">
                                <div class="bg-green-900/20 p-6 rounded-lg border border-green-800/50">
                                    <p class="text-sm text-green-400 font-bold mb-2">Этап 4</p>
                                    <h4 class="text-lg font-bold text-white mb-2">Отчет и рекомендации</h4>
                                    <p class="text-gray-400">Детальный отчет с приоритезацией и планом исправлений</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Кейсы -->
                <div class="security-card overflow-hidden">
                    <div class="flex items-center bg-gradient-to-r from-purple-700 to-purple-800 p-6">
                        <div class="bg-purple-500/20 p-3 rounded-lg mr-6">
                            <svg class="h-8 w-8 text-purple-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-white">Реальные кейсы</h2>
                    </div>
                    <div class="p-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-purple-900/20 p-6 rounded-lg border border-purple-800/50">
                                <div class="flex items-center mb-4">
                                    <div class="bg-purple-500/10 p-3 rounded-lg mr-4">
                                        <svg class="h-8 w-8 text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-bold text-white">Финтех стартап</h3>
                                </div>
                                <p class="text-gray-400 mb-4">Обнаружено 12 критических уязвимостей, включая SQL-инъекцию и небезопасную обработку платежей</p>
                                <div class="bg-purple-900/30 px-4 py-3 rounded-lg">
                                    <p class="text-purple-400 text-sm font-bold">Результат:</p>
                                    <p class="text-white">Все уязвимости устранены, успешная сертификация PCI DSS</p>
                                </div>
                            </div>
                            <div class="bg-purple-900/20 p-6 rounded-lg border border-purple-800/50">
                                <div class="flex items-center mb-4">
                                    <div class="bg-purple-500/10 p-3 rounded-lg mr-4">
                                        <svg class="h-8 w-8 text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-bold text-white">Медицинский портал</h3>
                                </div>
                                <p class="text-gray-400 mb-4">Выявлены проблемы с защитой персональных данных и медицинских записей</p>
                                <div class="bg-purple-900/30 px-4 py-3 rounded-lg">
                                    <p class="text-purple-400 text-sm font-bold">Результат:</p>
                                    <p class="text-white">Полное соответствие требованиям HIPAA и GDPR</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Сайдбар -->
            <div class="space-y-8">
                <!-- Заказать аудит -->
                <div class="security-card overflow-hidden">
                    <div class="bg-gradient-to-r from-indigo-700 to-indigo-800 p-6">
                        <h3 class="text-xl font-bold text-white">Заказать аудит</h3>
                    </div>
                    <div class="p-6">
                        <form class="space-y-4">
                            <div>
                                <label class="block text-gray-400 text-sm font-bold mb-2" for="name">
                                    Ваше имя
                                </label>
                                <input class="w-full bg-gray-900/50 border border-gray-800 rounded-lg px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" id="name" type="text" placeholder="Иван Иванов">
                            </div>
                            <div>
                                <label class="block text-gray-400 text-sm font-bold mb-2" for="email">
                                    Email
                                </label>
                                <input class="w-full bg-gray-900/50 border border-gray-800 rounded-lg px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" id="email" type="email" placeholder="ivan@example.com">
                            </div>
                            <div>
                                <label class="block text-gray-400 text-sm font-bold mb-2" for="company">
                                    Компания
                                </label>
                                <input class="w-full bg-gray-900/50 border border-gray-800 rounded-lg px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" id="company" type="text" placeholder="Название компании">
                            </div>
                            <div>
                                <label class="block text-gray-400 text-sm font-bold mb-2" for="service">
                                    Тип аудита
                                </label>
                                <select class="w-full bg-gray-900/50 border border-gray-800 rounded-lg px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" id="service">
                                    <option>Полный аудит</option>
                                    <option>Технический аудит</option>
                                    <option>Документальный аудит</option>
                                    <option>Пентест</option>
                                </select>
                            </div>
                            <button class="w-full bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-bold py-3 px-4 rounded-lg hover:opacity-90 transition transform hover:scale-105">
                                Отправить заявку
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Документы -->
                <div class="security-card overflow-hidden">
                    <div class="bg-gradient-to-r from-green-700 to-green-800 p-6">
                        <h3 class="text-xl font-bold text-white">Материалы для скачивания</h3>
                    </div>
                    <div class="p-6">
                        <div class="space-y-4">
                            <a href="#" class="flex items-center group bg-gray-900/30 p-4 rounded-lg border border-gray-800 hover:border-green-600 transition">
                                <div class="bg-green-500/10 p-2 rounded-lg mr-4">
                                    <svg class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-white group-hover:text-green-400 transition">Пример отчета</h4>
                                    <p class="text-gray-500 text-sm">PDF, 2.1 MB</p>
                                </div>
                            </a>
                            <a href="#" class="flex items-center group bg-gray-900/30 p-4 rounded-lg border border-gray-800 hover:border-green-600 transition">
                                <div class="bg-green-500/10 p-2 rounded-lg mr-4">
                                    <svg class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-white group-hover:text-green-400 transition">Чек-лист безопасности</h4>
                                    <p class="text-gray-500 text-sm">PDF, 0.8 MB</p>
                                </div>
                            </a>
                            <a href="#" class="flex items-center group bg-gray-900/30 p-4 rounded-lg border border-gray-800 hover:border-green-600 transition">
                                <div class="bg-green-500/10 p-2 rounded-lg mr-4">
                                    <svg class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-white group-hover:text-green-400 transition">Презентация услуг</h4>
                                    <p class="text-gray-500 text-sm">PDF, 5.3 MB</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Контакты -->
                <div class="security-card overflow-hidden">
                    <div class="bg-gradient-to-r from-red-700 to-red-800 p-6">
                        <h3 class="text-xl font-bold text-white">Контакты</h3>
                    </div>
                    <div class="p-6">
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="bg-red-500/10 p-2 rounded-lg mr-4">
                                    <svg class="h-6 w-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-white font-bold">Телефон</h4>
                                    <p class="text-gray-400">+7 (495) 123-45-67</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-red-500/10 p-2 rounded-lg mr-4">
                                    <svg class="h-6 w-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-white font-bold">Email</h4>
                                    <p class="text-gray-400">audit@secureshield.ru</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="bg-red-500/10 p-2 rounded-lg mr-4">
                                    <svg class="h-6 w-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-white font-bold">Офис</h4>
                                    <p class="text-gray-400">Севастополь, ул. Безопасности, 15</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('footer')
@endsection