@extends('layouts.app')

@section('content')
@include('header')

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .game-pattern {
            background-image: url('https://cdn.cloudflare.steamstatic.com/store/home/store_home_share.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .card-glass {
            background: rgba(26, 32, 44, 0.8);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .hover-glow {
            transition: all 0.3s ease;
        }
        .hover-glow:hover {
            box-shadow: 0 0 15px rgba(66, 153, 225, 0.6);
            transform: translateY(-3px);
        }
        .legal-icon {
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            border-radius: 8px;
            padding: 12px;
            margin-right: 16px;
        }
    </style>
</head>

<div class="min-h-screen bg-gray-900 py-12 px-4 sm:px-6 lg:px-8 game-pattern">
    <div class="max-w-5xl mx-auto grid grid-cols-1 lg:grid-cols-4 gap-8">
        <!-- Боковая панель с игровыми изображениями -->
        <div class="lg:col-span-1 space-y-6 hidden lg:block">
            <div class="rounded-lg overflow-hidden hover-glow">
                <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/292030/header.jpg" 
                     alt="The Witcher 3" 
                     class="w-full h-auto object-cover"
                     onerror="this.src='https://via.placeholder.com/300x150?text=Game+Image'">
                <div class="bg-black bg-opacity-70 p-3">
                    <h3 class="text-white font-semibold">The Witcher 3</h3>
                </div>
            </div>
            
            <div class="rounded-lg overflow-hidden hover-glow">
                <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/1245620/header.jpg" 
                     alt="Elden Ring" 
                     class="w-full h-auto object-cover"
                     onerror="this.src='https://via.placeholder.com/300x150?text=Game+Image'">
                <div class="bg-black bg-opacity-70 p-3">
                    <h3 class="text-white font-semibold">Elden Ring</h3>
                </div>
            </div>
            
            <div class="rounded-lg overflow-hidden hover-glow">
                <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/1091500/header.jpg" 
                     alt="Cyberpunk 2077" 
                     class="w-full h-auto object-cover"
                     onerror="this.src='https://via.placeholder.com/300x150?text=Game+Image'">
                <div class="bg-black bg-opacity-70 p-3">
                    <h3 class="text-white font-semibold">Cyberpunk 2077</h3>
                </div>
            </div>
            
            <div class="rounded-lg overflow-hidden hover-glow">
                <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/1174180/header.jpg" 
                     alt="Red Dead Redemption 2" 
                     class="w-full h-auto object-cover"
                     onerror="this.src='https://via.placeholder.com/300x150?text=Game+Image'">
                <div class="bg-black bg-opacity-70 p-3">
                    <h3 class="text-white font-semibold">Red Dead Redemption 2</h3>
                </div>
            </div>
        </div>

        <!-- Основное содержание -->
        <div class="lg:col-span-3">
            <!-- Заголовок -->
            <div class="bg-gradient-to-r from-blue-900 to-blue-700 rounded-xl overflow-hidden shadow-2xl mb-8 hover-glow">
                <div class="p-8 text-center text-white">
                    <div class="flex items-center justify-center mb-4">
                        <svg class="h-12 w-12 mr-3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zm2 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z" fill="currentColor"/>
                        </svg>
                        <h1 class="text-4xl font-bold">Правовая информация</h1>
                    </div>
                    <p class="text-gray-300">Актуально на: {{ date('d.m.Y') }}</p>
                </div>
            </div>

            <!-- Контент -->
            <div class="card-glass rounded-xl overflow-hidden shadow-xl p-8 hover-glow">
                <div class="prose prose-invert max-w-none">
                    <!-- 1. Общие положения -->
                    <div class="mb-10 p-6 bg-gray-800 rounded-lg">
                        <div class="flex items-start">
                            <div class="legal-icon">
                                <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-2xl font-bold text-blue-400 mb-4">1. Общие положения</h2>
                                <ul class="list-disc pl-5 space-y-3">
                                    <li>Все товары и услуги предоставляются в соответствии с законодательством РФ</li>
                                    <li>Покупатель соглашается с условиями при совершении покупки</li>
                                    <li>Цены указаны в рублях с учетом всех налогов</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- 2. Условия продажи -->
                    <div class="mb-10 p-6 bg-gray-800 rounded-lg">
                        <div class="flex items-start">
                            <div class="legal-icon">
                                <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-2xl font-bold text-green-400 mb-4">2. Условия продажи</h2>
                                <ul class="list-disc pl-5 space-y-3">
                                    <li>Цифровые товары не подлежат возврату после активации</li>
                                    <li>Аккаунты передаются с гарантией оригинальности</li>
                                    <li>Доставка осуществляется в течение 1-24 часов</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- 3. Гарантии -->
                    <div class="mb-10 p-6 bg-gray-800 rounded-lg">
                        <div class="flex items-start">
                            <div class="legal-icon">
                                <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-2xl font-bold text-yellow-400 mb-4">3. Гарантии</h2>
                                <ul class="list-disc pl-5 space-y-3">
                                    <li>Гарантия на аккаунты - 1 год с момента покупки</li>
                                    <li>Поддержка 24/7 через тикет-систему</li>
                                    <li>Замена товара в случае технических проблем</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- 4. Контакты -->
                    <div class="p-6 bg-gray-800 rounded-lg border-l-4 border-blue-500">
                        <div class="flex items-start">
                            <div class="legal-icon">
                                <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-2xl font-bold text-purple-400 mb-4">Контакты</h2>
                                <div class="space-y-3">
                                    <p class="flex items-center">
                                        <svg class="h-5 w-5 mr-2 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                        </svg>
                                        Email: <a href="mailto:legal@steam-store.ru" class="text-blue-400 hover:underline ml-1">legal@steam-store.ru</a>
                                    </p>
                                    <p class="flex items-center">
                                        <svg class="h-5 w-5 mr-2 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                        </svg>
                                        Телефон: <span class="text-green-400 ml-1">+7 (XXX) XXX-XX-XX</span>
                                    </p>
                                    <p class="flex items-center">
                                        <svg class="h-5 w-5 mr-2 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        </svg>
                                        Юридический адрес: <span class="text-yellow-400 ml-1">г. Москва, ул. Примерная, д. 123</span>
                                    </p>
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