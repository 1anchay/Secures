@include('header')
<script src="https://cdn.tailwindcss.com"></script>
<div class="min-h-screen bg-gray-900 py-12 px-4 sm:px-6 lg:px-8" style="background: radial-gradient(ellipse at center, #1a202c 0%, #0d1117 100%);">
    <div class="max-w-5xl mx-auto">
        <!-- Заголовок в стиле киберпанк -->
        <div class="text-center mb-12 relative overflow-hidden rounded-xl p-8 border border-blue-500/20 bg-gradient-to-br from-gray-800 to-gray-900 hover:shadow-[0_0_20px_rgba(59,130,246,0.3)] transition-all duration-300">
            <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1542751371-adc38448a05e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80')] opacity-20 bg-cover bg-center"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-center mb-4">
                    <svg class="h-12 w-12 mr-3 text-blue-400" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 3c-4.97 0-9 3.185-9 7.115 0 2.557 1.522 4.82 3.889 6.115l-.78 2.77 3.116-1.65c.88.275 1.823.425 2.775.425 4.97 0 9-3.186 9-7.115C21 6.185 16.97 3 12 3z" fill="currentColor"/>
                    </svg>
                    <h1 class="text-4xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-purple-500">Кибер-Щит Конфиденциальности</h1>
                </div>
                <p class="text-gray-300 text-lg">Версия 2.4.8 | Последнее обновление: {{ date('d.m.Y') }}</p>
                <div class="mt-4 text-blue-300 flex items-center justify-center">
                    <svg class="w-5 h-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Время чтения: 4 минуты
                </div>
            </div>
        </div>

        <!-- Основной контент -->
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <!-- Навигация -->
            <div class="lg:col-span-1 space-y-4 hidden lg:block">
                <div class="bg-gray-800/50 rounded-lg border border-gray-700 p-4 sticky top-4">
                    <h3 class="text-xl font-bold text-blue-400 mb-4 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                        Навигация
                    </h3>
                    <ul class="space-y-2">
                        <li><a href="#data-collection" class="text-gray-300 hover:text-blue-400 transition flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            Сбор данных
                        </a></li>
                        <li><a href="#data-usage" class="text-gray-300 hover:text-blue-400 transition flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            Использование
                        </a></li>
                        <li><a href="#protection" class="text-gray-300 hover:text-blue-400 transition flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            Защита
                        </a></li>
                        <li><a href="#cookies" class="text-gray-300 hover:text-blue-400 transition flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            Куки
                        </a></li>
                        <li><a href="#rights" class="text-gray-300 hover:text-blue-400 transition flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            Ваши права
                        </a></li>
                    </ul>
                </div>

                <!-- Статус защиты -->
                <div class="bg-gray-800/50 rounded-lg border border-green-500/30 p-4 mt-6">
                    <div class="flex items-center mb-2">
                        <div class="w-3 h-3 rounded-full bg-green-500 mr-2 animate-pulse"></div>
                        <span class="text-green-400 font-medium">Все системы защищены</span>
                    </div>
                    <p class="text-xs text-gray-400">Шифрование данных: AES-256</p>
                    <p class="text-xs text-gray-400">Защита от DDoS: активна</p>
                    <div class="mt-3 h-2 bg-gray-700 rounded-full overflow-hidden">
                        <div class="h-full bg-gradient-to-r from-green-500 to-blue-500 w-full" style="animation: progress 2s ease-in-out infinite"></div>
                    </div>
                </div>
            </div>

            <!-- Основной текст политики -->
            <div class="lg:col-span-3 space-y-8">
                <!-- Вступление -->
                <div class="bg-gray-800/50 rounded-xl p-8 border border-blue-500/20 hover:shadow-[0_0_15px_rgba(59,130,246,0.2)] transition-all duration-300">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 mt-1">
                            <svg class="h-6 w-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-gray-300">В цифровом мире ваша конфиденциальность - это ваш суверенитет. Наша миссия - защитить ваши данные так же тщательно, как вы защищаете свои игровые аккаунты. Эта политика объясняет, как мы собираем, используем и защищаем вашу информацию в нашем сервисе.</p>
                        </div>
                    </div>
                </div>

                <!-- 1. Сбор данных -->
                <div id="data-collection" class="bg-gray-800/50 rounded-xl p-8 border border-purple-500/20 hover:shadow-[0_0_15px_rgba(124,58,237,0.2)] transition-all duration-300">
                    <h2 class="text-2xl font-bold text-purple-400 mb-4 flex items-center">
                        <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                        1. Сбор цифровых данных
                    </h2>
                    <p class="text-gray-300 mb-4">Мы собираем только необходимые данные для обеспечения работы сервиса и вашей безопасности:</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <div class="bg-gray-700/50 p-4 rounded-lg border border-blue-500/20">
                            <h3 class="font-bold text-blue-400 mb-2 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                                Основные данные
                            </h3>
                            <ul class="text-sm text-gray-300 space-y-1">
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 mt-0.5 mr-2 text-blue-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Игровой никнейм и идентификаторы
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 mt-0.5 mr-2 text-blue-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Контактный email (шифруется)
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 mt-0.5 mr-2 text-blue-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Данные транзакций
                                </li>
                            </ul>
                        </div>
                        
                        <div class="bg-gray-700/50 p-4 rounded-lg border border-purple-500/20">
                            <h3 class="font-bold text-purple-400 mb-2 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                                </svg>
                                Технические данные
                            </h3>
                            <ul class="text-sm text-gray-300 space-y-1">
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 mt-0.5 mr-2 text-purple-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    IP-адрес (анонимизируется)
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 mt-0.5 mr-2 text-purple-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Данные устройства и браузера
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-4 h-4 mt-0.5 mr-2 text-purple-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Журналы безопасности
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <p class="text-gray-400 text-sm">Мы не храним платежные реквизиты - все платежи обрабатываются через защищенные шлюзы.</p>
                </div>

                <!-- 2. Использование данных -->
                <div id="data-usage" class="bg-gray-800/50 rounded-xl p-8 border border-green-500/20 hover:shadow-[0_0_15px_rgba(16,185,129,0.2)] transition-all duration-300">
                    <h2 class="text-2xl font-bold text-green-400 mb-4 flex items-center">
                        <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        2. Использование данных
                    </h2>
                    
                    <div class="mb-6 p-6 bg-gray-700/30 rounded-lg border-l-4 border-green-500">
                        <p class="text-green-300 font-medium">"Мы используем ваши данные только для того, чтобы сделать ваш игровой опыт безопаснее и удобнее."</p>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="bg-gray-700/20 p-4 rounded-lg border border-green-500/10 hover:border-green-500/30 transition">
                            <div class="w-10 h-10 bg-green-500/10 rounded-full flex items-center justify-center mb-3 text-green-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="font-bold text-green-400 mb-2">Обработка транзакций</h3>
                            <p class="text-sm text-gray-300">Подтверждение и выполнение ваших покупок игровых предметов и аккаунтов</p>
                        </div>
                        
                        <div class="bg-gray-700/20 p-4 rounded-lg border border-blue-500/10 hover:border-blue-500/30 transition">
                            <div class="w-10 h-10 bg-blue-500/10 rounded-full flex items-center justify-center mb-3 text-blue-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                            </div>
                            <h3 class="font-bold text-blue-400 mb-2">Техподдержка</h3>
                            <p class="text-sm text-gray-300">Решение технических вопросов и помощь с аккаунтами</p>
                        </div>
                        
                        <div class="bg-gray-700/20 p-4 rounded-lg border border-purple-500/10 hover:border-purple-500/30 transition">
                            <div class="w-10 h-10 bg-purple-500/10 rounded-full flex items-center justify-center mb-3 text-purple-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            </div>
                            <h3 class="font-bold text-purple-400 mb-2">Безопасность</h3>
                            <p class="text-sm text-gray-300">Обнаружение и предотвращение мошенничества и атак</p>
                        </div>
                    </div>
                </div>

                <!-- 3. Защита данных -->
                <div id="protection" class="bg-gray-800/50 rounded-xl p-8 border border-yellow-500/20 hover:shadow-[0_0_15px_rgba(234,179,8,0.2)] transition-all duration-300">
                    <h2 class="text-2xl font-bold text-yellow-400 mb-4 flex items-center">
                        <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                        3. Кибер-защита данных
                    </h2>
                    
                    <div class="mb-6 p-6 bg-gray-700/30 rounded-lg border-l-4 border-yellow-500">
                        <p class="text-yellow-300 font-medium">"Мы защищаем ваши данные как элитный клан защищает свою базу - со всей серьезностью и передовыми технологиями."</p>
                    </div>
                    
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-8 h-8 bg-yellow-500/10 rounded-full flex items-center justify-center text-yellow-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-bold text-white mb-1">Шифрование AES-256</h3>
                                <p class="text-gray-300">Все конфиденциальные данные шифруются по военному стандарту с использованием алгоритма AES-256.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-8 h-8 bg-blue-500/10 rounded-full flex items-center justify-center text-blue-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-bold text-white mb-1">Двухфакторная аутентификация</h3>
                                <p class="text-gray-300">Доступ к вашему аккаунту защищен 2FA, как и у топовых киберспортивных команд.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-8 h-8 bg-red-500/10 rounded-full flex items-center justify-center text-red-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016zM12 9v2m0 4h.01"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-bold text-white mb-1">Защита от DDoS</h3>
                                <p class="text-gray-300">Наши серверы защищены от распределенных атак, как профессиональные игровые сервера.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4. Куки -->
                <div id="cookies" class="bg-gray-800/50 rounded-xl p-8 border border-pink-500/20 hover:shadow-[0_0_15px_rgba(236,72,153,0.2)] transition-all duration-300">
                    <h2 class="text-2xl font-bold text-pink-400 mb-4 flex items-center">
                        <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                        </svg>
                        4. Куки и трекеры
                    </h2>
                    
                    <div class="flex items-start mb-6">
                        <div class="flex-shrink-0 mt-1">
                            <svg class="h-5 w-5 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-gray-300">Мы используем куки, как использует зелья ваш персонаж - для улучшения производительности и удобства:</p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <div class="bg-gray-700/50 p-4 rounded-lg border border-pink-500/20">
                            <h3 class="font-bold text-pink-400 mb-2 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                </svg>
                                Основные куки
                            </h3>
                            <ul class="text-sm text-gray-300 space-y-1">
                                <li>Авторизация и сессии</li>
                                <li>Настройки интерфейса</li>
                                <li>Корзина покупок</li>
                            </ul>
                        </div>
                        
                        <div class="bg-gray-700/50 p-4 rounded-lg border border-purple-500/20">
                            <h3 class="font-bold text-purple-400 mb-2 flex items-center">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Аналитические куки
                            </h3>
                            <ul class="text-sm text-gray-300 space-y-1">
                                <li>Анализ посещаемости</li>
                                <li>Оптимизация сервиса</li>
                                <li>Статистика использования</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="bg-gray-700/30 p-4 rounded-lg border border-blue-500/20">
                        <h3 class="font-bold text-blue-400 mb-2 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                            Управление куки
                        </h3>
                        <p class="text-sm text-gray-300">Вы можете контролировать куки в настройках браузера, как контролируете настройки графики в игре.</p>
                        <button class="mt-3 px-4 py-2 bg-pink-500/10 border border-pink-500/30 text-pink-400 rounded-lg hover:bg-pink-500/20 transition text-sm">
                            Настроить предпочтения
                        </button>
                    </div>
                </div>

                <!-- 5. Ваши права -->
                <div id="rights" class="bg-gray-800/50 rounded-xl p-8 border border-blue-500/20 hover:shadow-[0_0_15px_rgba(59,130,246,0.2)] transition-all duration-300">
                    <h2 class="text-2xl font-bold text-blue-400 mb-4 flex items-center">
                        <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9l3-3m0 0l3 3m-3-3v12m-8.5-3.5v-9a1.5 1.5 0 011.5-1.5h9a1.5 1.5 0 011.5 1.5v9a1.5 1.5 0 01-1.5 1.5h-9a1.5 1.5 0 01-1.5-1.5z"></path>
                        </svg>
                        5. Ваши цифровые права
                    </h2>
                    
                    <div class="mb-6 p-6 bg-gray-700/30 rounded-lg border-l-4 border-blue-500">
                        <p class="text-blue-300 font-medium">"Вы имеете право на конфиденциальность, как имеете право выбирать сторону в игре."</p>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-8 h-8 bg-blue-500/10 rounded-full flex items-center justify-center text-blue-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-bold text-white mb-1">Доступ к данным</h3>
                                <p class="text-gray-300">Вы можете запросить копию своих персональных данных в любое время.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-8 h-8 bg-red-500/10 rounded-full flex items-center justify-center text-red-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-bold text-white mb-1">Удаление аккаунта</h3>
                                <p class="text-gray-300">Вы можете удалить свой аккаунт и все связанные данные, кроме требуемых по закону.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0 mt-1">
                                <div class="w-8 h-8 bg-green-500/10 rounded-full flex items-center justify-center text-green-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-bold text-white mb-1">Отказ от рассылки</h3>
                                <p class="text-gray-300">Вы можете отписаться от маркетинговых сообщений в любой момент.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-6 bg-gray-700/50 p-4 rounded-lg">
                        <button class="w-full px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-500 transition flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                            </svg>
                            Запросить мои данные
                        </button>
                    </div>
                </div>

                <!-- Контакты -->
                <div class="bg-gray-800/50 rounded-xl p-8 border border-purple-500/20 hover:shadow-[0_0_15px_rgba(124,58,237,0.2)] transition-all duration-300">
                    <h2 class="text-2xl font-bold text-purple-400 mb-4 flex items-center">
                        <svg class="h-6 w-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Контакты службы защиты данных
                    </h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-gray-700/30 p-6 rounded-lg border border-purple-500/20">
                            <h3 class="font-bold text-white mb-3 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                                Техподдержка
                            </h3>
                            <p class="text-gray-300 mb-2">Для общих вопросов и технической помощи:</p>
                            <a href="mailto:support@game-store.ru" class="text-blue-400 hover:underline">support@game-store.ru</a>
                        </div>
                        
                        <div class="bg-gray-700/30 p-6 rounded-lg border border-blue-500/20">
                            <h3 class="font-bold text-white mb-3 flex items-center">
                                <svg class="w-5 h-5 mr-2 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                                Офицер по защите данных
                            </h3>
                            <p class="text-gray-300 mb-2">Для вопросов о конфиденциальности и персональных данных:</p>
                            <a href="mailto:privacy@game-store.ru" class="text-blue-400 hover:underline">privacy@game-store.ru</a>
                        </div>
                    </div>
                    
                    <div class="mt-6 bg-gray-700/50 p-6 rounded-lg border-t-4 border-blue-500">
                        <h3 class="font-bold text-white mb-3">Изменения в политике</h3>
                        <p class="text-gray-300">Мы можем обновлять эту политику, как обновляются игры. Все изменения будут опубликованы на этой странице с указанием даты последнего обновления.</p>
                        <div class="mt-4 flex items-center text-sm text-blue-400">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            Последнее обновление: {{ date('d.m.Y') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    @keyframes progress {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }
    
    .steam-gradient {
        background: linear-gradient(135deg, #1a202c 0%, #2d3748 100%);
    }
</style>
@include('footer')
<script>
    // Анимация прогресс-бара
    document.addEventListener('DOMContentLoaded', function() {
        // Плавное появление элементов
        const sections = document.querySelectorAll('div[id]');
        sections.forEach((section, index) => {
            setTimeout(() => {
                section.style.opacity = '1';
                section.style.transform = 'translateY(0)';
            }, index * 100);
        });
        
        // Интерактивность для навигации
        const navLinks = document.querySelectorAll('a[href^="#"]');
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                window.scrollTo({
                    top: targetElement.offsetTop - 20,
                    behavior: 'smooth'
                });
                
                // Добавляем эффект подсветки
                targetElement.classList.add('ring-2', 'ring-blue-500');
                setTimeout(() => {
                    targetElement.classList.remove('ring-2', 'ring-blue-500');
                }, 2000);
            });
        });
    });
</script>