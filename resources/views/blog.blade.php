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
        .timeline-item::before {
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
        .timeline::before {
            content: '';
            position: absolute;
            left: 7px;
            top: 0;
            height: 100%;
            width: 2px;
            background: linear-gradient(to bottom, #3a6eff, #38b6ff);
        }
    </style>
</head>

<div class="min-h-screen security-background py-12 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
    <!-- Декоративные элементы -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <!-- Шифрование -->
        <svg class="absolute top-1/4 left-10 w-24 h-24 text-blue-400 opacity-20 security-icon floating" style="animation-delay: 0.5s;" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor" d="M12 3c-4.97 0-9 3.185-9 7.115 0 2.557 1.522 4.82 3.889 6.115l-.78 2.77 3.116-1.65c.88.275 1.823.425 2.775.425 4.97 0 9-3.186 9-7.115C21 6.186 16.97 3 12 3z"/>
        </svg>
        
        <!-- Защита -->
        <svg class="absolute top-1/3 right-20 w-28 h-28 text-green-400 opacity-20 security-icon floating" style="animation-delay: 1s;" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor" d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11V11.99z"/>
        </svg>
        
        <!-- Безопасность -->
        <svg class="absolute bottom-1/4 left-20 w-32 h-32 text-indigo-400 opacity-20 security-icon floating" style="animation-delay: 1.5s;" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor" d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/>
        </svg>
        
        <!-- Аудит -->
        <svg class="absolute bottom-1/3 right-16 w-24 h-24 text-cyan-400 opacity-20 security-icon floating" style="animation-delay: 2s;" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor" d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z"/>
        </svg>
    </div>

    <div class="max-w-6xl mx-auto relative z-10">
        <!-- Герой-секция -->
        <div class="security-card mb-8 overflow-hidden">
            <div class="bg-gradient-to-r from-blue-800 to-indigo-900 p-8 md:p-12 text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Разработка системы защиты конфиденциальной информации</h1>
                <p class="text-xl text-blue-200 max-w-3xl mx-auto">Современные подходы к обеспечению безопасности веб-приложений и защите пользовательских данных</p>
            </div>
            <div class="p-8 grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="flex items-center">
                    <div class="bg-blue-500/10 p-3 rounded-lg mr-4">
                        <svg class="h-8 w-8 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-400">Уровень защиты</p>
                        <p class="text-xl font-bold text-white">Многослойный</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="bg-green-500/10 p-3 rounded-lg mr-4">
                        <svg class="h-8 w-8 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-400">Скорость работы</p>
                        <p class="text-xl font-bold text-white">Без компромиссов</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="bg-purple-500/10 p-3 rounded-lg mr-4">
                        <svg class="h-8 w-8 text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-400">Совместимость</p>
                        <p class="text-xl font-bold text-white">Любые платформы</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Основное содержание -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Основной контент -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Статья 1 -->
                <div class="security-card overflow-hidden">
                    <div class="flex items-center bg-gradient-to-r from-blue-700 to-blue-800 p-6">
                        <div class="bg-blue-500/20 p-3 rounded-lg mr-6">
                            <svg class="h-8 w-8 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"/>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-white">Многоуровневая защита данных</h2>
                    </div>
                    <div class="p-8">
                        <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Защита данных" class="w-full h-64 object-cover rounded-lg mb-6">
                        
                        <p class="text-gray-300 mb-6">В современном цифровом мире защита конфиденциальной информации требует комплексного подхода. Мы разработали систему, которая сочетает несколько уровней защиты для максимальной безопасности ваших данных.</p>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                            <div class="bg-blue-900/30 p-6 rounded-lg border border-blue-800/50">
                                <div class="flex items-center mb-4">
                                    <div class="bg-blue-500/20 p-2 rounded-lg mr-4">
                                        <svg class="h-6 w-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-bold text-white">Шифрование данных</h3>
                                </div>
                                <p class="text-gray-400">Использование алгоритмов AES-256 для хранения и TLS 1.3 для передачи данных. Регулярная ротация ключей шифрования.</p>
                            </div>
                            <div class="bg-purple-900/30 p-6 rounded-lg border border-purple-800/50">
                                <div class="flex items-center mb-4">
                                    <div class="bg-purple-500/20 p-2 rounded-lg mr-4">
                                        <svg class="h-6 w-6 text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-bold text-white">Аутентификация</h3>
                                </div>
                                <p class="text-gray-400">Многофакторная аутентификация с поддержкой биометрии, аппаратных ключей и одноразовых паролей.</p>
                            </div>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-4">Этапы внедрения защиты</h3>
                        <div class="relative timeline pl-10">
                            <div class="relative timeline-item mb-8">
                                <div class="bg-blue-900/20 p-6 rounded-lg border border-blue-800/50">
                                    <p class="text-sm text-blue-400 font-bold mb-2">Этап 1</p>
                                    <h4 class="text-lg font-bold text-white mb-2">Анализ угроз</h4>
                                    <p class="text-gray-400">Проводим полный аудит системы, выявляем уязвимости и потенциальные векторы атак.</p>
                                </div>
                            </div>
                            <div class="relative timeline-item mb-8">
                                <div class="bg-purple-900/20 p-6 rounded-lg border border-purple-800/50">
                                    <p class="text-sm text-purple-400 font-bold mb-2">Этап 2</p>
                                    <h4 class="text-lg font-bold text-white mb-2">Проектирование</h4>
                                    <p class="text-gray-400">Разрабатываем архитектуру системы защиты с учетом специфики вашего проекта.</p>
                                </div>
                            </div>
                            <div class="relative timeline-item">
                                <div class="bg-indigo-900/20 p-6 rounded-lg border border-indigo-800/50">
                                    <p class="text-sm text-indigo-400 font-bold mb-2">Этап 3</p>
                                    <h4 class="text-lg font-bold text-white mb-2">Внедрение</h4>
                                    <p class="text-gray-400">Поэтапное развертывание системы защиты с минимальным влиянием на работу сервиса.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Статья 2 -->
                <div class="security-card overflow-hidden">
                    <div class="flex items-center bg-gradient-to-r from-purple-700 to-purple-800 p-6">
                        <div class="bg-purple-500/20 p-3 rounded-lg mr-6">
                            <svg class="h-8 w-8 text-purple-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                        <h2 class="text-2xl font-bold text-white">Реальный кейс: Защита медицинского портала</h2>
                    </div>
                    <div class="p-8">
                        <div class="flex flex-col md:flex-row gap-6 mb-8">
                            <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Медицинский портал" class="w-full md:w-1/2 h-64 object-cover rounded-lg">
                            <div class="w-full md:w-1/2">
                                <h3 class="text-xl font-bold text-white mb-4">Задача</h3>
                                <p class="text-gray-400">Обеспечить защиту персональных данных и медицинских записей 500,000+ пациентов в соответствии с HIPAA и GDPR.</p>
                                <div class="mt-6 p-4 bg-purple-900/20 rounded-lg border border-purple-800/50">
                                    <p class="text-purple-400 font-bold">Результат:</p>
                                    <p class="text-white">0 инцидентов за 2 года эксплуатации</p>
                                </div>
                            </div>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-4">Реализованные меры</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
                            <div class="flex items-start bg-gray-900/30 p-4 rounded-lg">
                                <span class="flex-shrink-0 bg-purple-500/10 text-purple-400 rounded-full p-1 mr-4 mt-1">
                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </span>
                                <span class="text-gray-300">Шифрование данных на уровне поля с индивидуальными ключами для каждого пациента</span>
                            </div>
                            <div class="flex items-start bg-gray-900/30 p-4 rounded-lg">
                                <span class="flex-shrink-0 bg-purple-500/10 text-purple-400 rounded-full p-1 mr-4 mt-1">
                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </span>
                                <span class="text-gray-300">Система контроля доступа на основе ролей (RBAC) с детальным аудитом</span>
                            </div>
                            <div class="flex items-start bg-gray-900/30 p-4 rounded-lg">
                                <span class="flex-shrink-0 bg-purple-500/10 text-purple-400 rounded-full p-1 mr-4 mt-1">
                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </span>
                                <span class="text-gray-300">Автоматическое маскирование персональных данных в интерфейсе</span>
                            </div>
                            <div class="flex items-start bg-gray-900/30 p-4 rounded-lg">
                                <span class="flex-shrink-0 bg-purple-500/10 text-purple-400 rounded-full p-1 mr-4 mt-1">
                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </span>
                                <span class="text-gray-300">Ежедневное тестирование на проникновение и автоматическое исправление уязвимостей</span>
                            </div>
                        </div>

                        <div class="bg-gray-900/50 p-6 rounded-lg border border-gray-800">
                            <div class="flex items-start">
                                <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Анна Смирнова" class="w-12 h-12 rounded-full mr-4">
                                <div>
                                    <p class="text-white font-bold">Анна Смирнова</p>
                                    <p class="text-gray-400 text-sm mb-4">CTO, Медицинский портал HealthSafe</p>
                                    <p class="text-gray-300 italic">"После внедрения системы SecureShield мы смогли пройти сертификацию по HIPAA без единого замечания. Наши пациенты доверяют нам свои данные, зная, что они находятся в безопасности."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Сайдбар -->
            <div class="space-y-8">
                <!-- О авторе -->
                <div class="security-card p-8">
                    <div class="text-center mb-6">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Иван Петров" class="w-24 h-24 rounded-full mx-auto mb-4 border-2 border-blue-500">
                        <h3 class="text-xl font-bold text-white">Иван Петров</h3>
                        <p class="text-blue-400">Эксперт по кибербезопасности</p>
                    </div>
                    <p class="text-gray-400 mb-4">15 лет опыта в разработке систем защиты информации. Сертифицированный специалист CISSP, CEH.</p>
                    <div class="flex justify-center space-x-4">
                        <a href="#" class="text-blue-400 hover:text-blue-300">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-blue-400 hover:text-blue-300">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                        <a href="#" class="text-blue-400 hover:text-blue-300">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Популярные статьи -->
                <div class="security-card overflow-hidden">
                    <div class="bg-gradient-to-r from-indigo-700 to-indigo-800 p-6">
                        <h3 class="text-xl font-bold text-white">Другие материалы</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <a href="#" class="flex items-start group">
                            <div class="bg-indigo-500/10 p-2 rounded-lg mr-4 group-hover:bg-indigo-500/20 transition">
                                <svg class="h-5 w-5 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white group-hover:text-blue-400 transition">Оптимальные настройки HTTPS</h4>
                                <p class="text-sm text-gray-500">5 мин чтения</p>
                            </div>
                        </a>
                        <a href="#" class="flex items-start group">
                            <div class="bg-indigo-500/10 p-2 rounded-lg mr-4 group-hover:bg-indigo-500/20 transition">
                                <svg class="h-5 w-5 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white group-hover:text-blue-400 transition">GDPR для разработчиков</h4>
                                <p class="text-sm text-gray-500">8 мин чтения</p>
                            </div>
                        </a>
                        <a href="#" class="flex items-start group">
                            <div class="bg-indigo-500/10 p-2 rounded-lg mr-4 group-hover:bg-indigo-500/20 transition">
                                <svg class="h-5 w-5 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-white group-hover:text-blue-400 transition">Защита от DDoS атак</h4>
                                <p class="text-sm text-gray-500">6 мин чтения</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Рассылка -->
                <div class="security-card overflow-hidden">
                    <div class="bg-gradient-to-r from-green-700 to-green-800 p-6">
                        <h3 class="text-xl font-bold text-white">Подписка на обновления</h3>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-400 mb-4">Получайте свежие статьи о безопасности прямо на почту</p>
                        <form class="space-y-4">
                            <input type="email" placeholder="Ваш email" class="w-full bg-gray-900/50 border border-gray-800 rounded-lg px-4 py-3 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-green-500 text-white font-bold py-3 px-4 rounded-lg hover:opacity-90 transition">Подписаться</button>
                        </form>
                        <p class="text-xs text-gray-600 mt-4">Мы не спамим и не передаем ваши данные третьим лицам</p>
                    </div>
                </div>

                <!-- Теги -->
                <div class="security-card overflow-hidden">
                    <div class="bg-gradient-to-r from-red-700 to-red-800 p-6">
                        <h3 class="text-xl font-bold text-white">Теги</h3>
                    </div>
                    <div class="p-6 flex flex-wrap gap-2">
                        <a href="#" class="bg-gray-900/50 hover:bg-red-900/50 text-gray-300 hover:text-white px-3 py-1 rounded-full text-sm transition">#шифрование</a>
                        <a href="#" class="bg-gray-900/50 hover:bg-red-900/50 text-gray-300 hover:text-white px-3 py-1 rounded-full text-sm transition">#GDPR</a>
                        <a href="#" class="bg-gray-900/50 hover:bg-red-900/50 text-gray-300 hover:text-white px-3 py-1 rounded-full text-sm transition">#аутентификация</a>
                        <a href="#" class="bg-gray-900/50 hover:bg-red-900/50 text-gray-300 hover:text-white px-3 py-1 rounded-full text-sm transition">#WAF</a>
                        <a href="#" class="bg-gray-900/50 hover:bg-red-900/50 text-gray-300 hover:text-white px-3 py-1 rounded-full text-sm transition">#HTTPS</a>
                        <a href="#" class="bg-gray-900/50 hover:bg-red-900/50 text-gray-300 hover:text-white px-3 py-1 rounded-full text-sm transition">#OWASP</a>
                        <a href="#" class="bg-gray-900/50 hover:bg-red-900/50 text-gray-300 hover:text-white px-3 py-1 rounded-full text-sm transition">#аудит</a>
                        <a href="#" class="bg-gray-900/50 hover:bg-red-900/50 text-gray-300 hover:text-white px-3 py-1 rounded-full text-sm transition">#криптография</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Раздел с инфографикой -->
        <div class="security-card mt-8 overflow-hidden">
            <div class="flex items-center bg-gradient-to-r from-cyan-700 to-cyan-800 p-6">
                <div class="bg-cyan-500/20 p-3 rounded-lg mr-6">
                    <svg class="h-8 w-8 text-cyan-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-white">Статистика безопасности</h2>
            </div>
            <div class="p-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                    <div class="bg-gray-900/30 p-6 rounded-lg border border-cyan-800/50 text-center">
                        <div class="text-5xl font-bold text-cyan-400 mb-2">83%</div>
                        <p class="text-gray-400">веб-приложений содержат критические уязвимости</p>
                    </div>
                    <div class="bg-gray-900/30 p-6 rounded-lg border border-cyan-800/50 text-center">
                        <div class="text-5xl font-bold text-cyan-400 mb-2">68%</div>
                        <p class="text-gray-400">компаний сталкивались с атаками на веб-приложения</p>
                    </div>
                    <div class="bg-gray-900/30 p-6 rounded-lg border border-cyan-800/50 text-center">
                        <div class="text-5xl font-bold text-cyan-400 mb-2">x10</div>
                        <p class="text-gray-400">рост стоимости взлома при использовании WAF</p>
                    </div>
                </div>

                <h3 class="text-xl font-bold text-white mb-6">Топ-5 угроз безопасности веб-приложений (OWASP 2023)</h3>
                <div class="space-y-4">
                    <div class="flex items-center bg-gray-900/50 p-4 rounded-lg border border-gray-800">
                        <span class="bg-red-500 text-white font-bold px-3 py-1 rounded-full mr-4">1</span>
                        <div>
                            <h4 class="text-white font-bold">Инъекции</h4>
                            <p class="text-gray-400 text-sm">SQL, NoSQL, OS, LDAP инъекции</p>
                        </div>
                    </div>
                    <div class="flex items-center bg-gray-900/50 p-4 rounded-lg border border-gray-800">
                        <span class="bg-orange-500 text-white font-bold px-3 py-1 rounded-full mr-4">2</span>
                        <div>
                            <h4 class="text-white font-bold">Недостатки аутентификации</h4>
                            <p class="text-gray-400 text-sm">Слабая защита учетных данных</p>
                        </div>
                    </div>
                    <div class="flex items-center bg-gray-900/50 p-4 rounded-lg border border-gray-800">
                        <span class="bg-yellow-500 text-white font-bold px-3 py-1 rounded-full mr-4">3</span>
                        <div>
                            <h4 class="text-white font-bold">Раскрытие конфиденциальных данных</h4>
                            <p class="text-gray-400 text-sm">Незащищенные персональные данные</p>
                        </div>
                    </div>
                    <div class="flex items-center bg-gray-900/50 p-4 rounded-lg border border-gray-800">
                        <span class="bg-green-500 text-white font-bold px-3 py-1 rounded-full mr-4">4</span>
                        <div>
                            <h4 class="text-white font-bold">XXE</h4>
                            <p class="text-gray-400 text-sm">Внешние XML-сущности</p>
                        </div>
                    </div>
                    <div class="flex items-center bg-gray-900/50 p-4 rounded-lg border border-gray-800">
                        <span class="bg-blue-500 text-white font-bold px-3 py-1 rounded-full mr-4">5</span>
                        <div>
                            <h4 class="text-white font-bold">Некорректный контроль доступа</h4>
                            <p class="text-gray-400 text-sm">Недостаточные ограничения прав</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Раздел с инструментами -->
        <div class="security-card mt-8 overflow-hidden">
            <div class="flex items-center bg-gradient-to-r from-yellow-700 to-yellow-800 p-6">
                <div class="bg-yellow-500/20 p-3 rounded-lg mr-6">
                    <svg class="h-8 w-8 text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h2 class="text-2xl font-bold text-white">Инструменты для тестирования безопасности</h2>
            </div>
            <div class="p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-gray-900/30 p-6 rounded-lg border border-yellow-800/50 hover:border-yellow-600 transition">
                        <div class="flex items-center mb-4">
                            <img src="https://www.zaproxy.org/img/zap-icon.png" alt="OWASP ZAP" class="h-10 w-10 mr-3">
                            <h3 class="text-lg font-bold text-white">OWASP ZAP</h3>
                        </div>
                        <p class="text-gray-400 mb-4">Автоматизированный сканер уязвимостей с открытым исходным кодом</p>
                        <a href="#" class="text-yellow-400 hover:text-yellow-300 text-sm font-bold flex items-center">
                            Узнать больше
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                    <div class="bg-gray-900/30 p-6 rounded-lg border border-yellow-800/50 hover:border-yellow-600 transition">
                        <div class="flex items-center mb-4">
                            <img src="https://www.burpsuite.org/images/burp-pro-logo.svg" alt="Burp Suite" class="h-10 w-10 mr-3">
                            <h3 class="text-lg font-bold text-white">Burp Suite</h3>
                        </div>
                        <p class="text-gray-400 mb-4">Комплексная платформа для тестирования безопасности веб-приложений</p>
                        <a href="#" class="text-yellow-400 hover:text-yellow-300 text-sm font-bold flex items-center">
                            Узнать больше
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                    <div class="bg-gray-900/30 p-6 rounded-lg border border-yellow-800/50 hover:border-yellow-600 transition">
                        <div class="flex items-center mb-4">
                            <img src="https://www.nmap.org/images/sitelogo.png" alt="Nmap" class="h-10 w-10 mr-3">
                            <h3 class="text-lg font-bold text-white">Nmap</h3>
                        </div>
                        <p class="text-gray-400 mb-4">Мощный сетевой сканер для обнаружения хостов и сервисов</p>
                        <a href="#" class="text-yellow-400 hover:text-yellow-300 text-sm font-bold flex items-center">
                            Узнать больше
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Призыв к действию -->
        <div class="security-card mt-8 bg-gradient-to-r from-blue-900 to-indigo-900 overflow-hidden">
            <div class="p-12 text-center">
                <h2 class="text-3xl font-bold text-white mb-6">Готовы усилить безопасность вашего проекта?</h2>
                <p class="text-xl text-blue-200 max-w-2xl mx-auto mb-8">Наши эксперты помогут разработать комплексную систему защиты, соответствующую вашим требованиям</p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="/contact" class="bg-white text-blue-900 hover:bg-gray-100 font-bold px-8 py-4 rounded-lg transition-all transform hover:scale-105 shadow-lg">
                        Обсудить проект
                    </a>
                    <a href="/services" class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-blue-900 font-bold px-8 py-4 rounded-lg transition-all transform hover:scale-105">
                        Наши услуги
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('footer')
@endsection