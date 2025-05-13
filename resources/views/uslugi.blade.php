<!-- Interactive CTA Section with Mini-Game -->
<section class="relative py-24 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 overflow-hidden">
    <!-- Анимированные фоновые элементы -->
    <div class="absolute inset-0 opacity-10">
        <!-- Шевронный узор -->
        <div class="absolute inset-0 bg-repeat" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxMDAgMTAwIj48cGF0aCBkPSJNNTAgMEwxMDAgNTBMNTAgMTAwTDAgNTBMNTAgMCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSIjZmY5ZTAwIiBzdHJva2Utb3BhY2l0eT0iMC4xIiBzdHJva2Utd2lkdGg9IjEiLz48L3N2Zz4=');"></div>
    </div>
    
    <!-- Плавающие игровые элементы -->
    <div class="absolute top-1/4 left-1/5 w-12 h-12 bg-yellow-400 rounded-full filter blur-lg opacity-10 animate-float"></div>
    <div class="absolute top-1/3 right-1/4 w-16 h-16 bg-yellow-500 rounded-full filter blur-lg opacity-10 animate-float-delay"></div>
    
    <!-- Основной контент -->
    <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
        <h2 class="text-4xl md:text-5xl font-bold text-yellow-400 mb-6">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600">Готовы открыть кейс?</span>
        </h2>
        <p class="text-xl text-gray-300 mb-10 max-w-2xl mx-auto">
            Сыграйте в мини-игру и получите промокод на скидку 10%!
        </p>
        
        <!-- Мини-игра "Открой сундук" -->
        <div class="bg-gray-800/50 border-2 border-yellow-400/30 rounded-xl p-6 mb-10 max-w-md mx-auto">
            <div class="relative h-40 mb-6 flex justify-center items-center">
                <!-- Сундук (закрытый/открытый) -->
                <div id="chest" class="cursor-pointer transition-all duration-500 transform hover:scale-110">
                    <svg id="closed-chest" class="w-32 h-32 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                    <svg id="opened-chest" class="w-32 h-32 text-yellow-500 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                    </svg>
                </div>
                
                <!-- Светящийся эффект при открытии -->
                <div id="chest-glow" class="absolute inset-0 bg-yellow-400 rounded-full opacity-0 blur-xl transition-opacity duration-300 pointer-events-none"></div>
            </div>
            
            <!-- Промокод (скрыт до открытия) -->
            <div id="promo-code" class="hidden">
                <p class="text-gray-400 mb-2">Ваш промокод:</p>
                <div class="bg-gray-900 border-2 border-dashed border-yellow-400 rounded-lg py-3 px-6 mb-4">
                    <span class="text-2xl font-mono font-bold text-yellow-400">STEAM10</span>
                </div>
                <p class="text-sm text-gray-500">Используйте при оформлении заказа</p>
            </div>
            
            <!-- Инструкция -->
            <p id="game-instruction" class="text-yellow-400/80 animate-pulse">Нажмите на сундук, чтобы открыть</p>
        </div>
        
        <!-- Кнопки действий -->
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="#cases" class="px-8 py-4 bg-gradient-to-r from-yellow-500 to-yellow-600 text-gray-900 font-bold rounded-lg hover:from-yellow-400 hover:to-yellow-500 transition-all duration-300 shadow-lg hover:shadow-yellow-500/30 flex items-center justify-center transform hover:scale-105">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                </svg>
                Выбрать кейс
            </a>
            <button id="copy-promo" class="px-8 py-4 border-2 border-yellow-400 text-yellow-400 font-bold rounded-lg hover:bg-yellow-400 hover:bg-opacity-10 transition-all duration-300 shadow-lg hover:shadow-yellow-500/20 flex items-center justify-center transform hover:scale-105 hidden">
                <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"></path>
                </svg>
                Скопировать промокод
            </button>
        </div>
    </div>
    
    <!-- Конфеетти при открытии сундука -->
    <canvas id="confetti-canvas" class="absolute top-0 left-0 w-full h-full pointer-events-none z-0"></canvas>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const chest = document.getElementById('chest');
        const closedChest = document.getElementById('closed-chest');
        const openedChest = document.getElementById('opened-chest');
        const chestGlow = document.getElementById('chest-glow');
        const promoCode = document.getElementById('promo-code');
        const gameInstruction = document.getElementById('game-instruction');
        const copyButton = document.getElementById('copy-promo');
        const canvas = document.getElementById('confetti-canvas');
        
        let confetti = null;
        
        // Инициализация конфеетти
        function initConfetti() {
            confetti = new ConfettiGenerator({
                target: 'confetti-canvas',
                max: 80,
                size: 1.5,
                animate: true,
                props: ['circle', 'square', 'triangle', 'line'],
                colors: [[255, 158, 0], [255, 190, 50], [255, 210, 100], [200, 120, 0]],
                clock: 25,
                rotate: true
            });
            confetti.render();
        }
        
        // Открытие сундука
        chest.addEventListener('click', function() {
            if (openedChest.classList.contains('hidden')) {
                // Анимация открытия
                closedChest.classList.add('hidden');
                openedChest.classList.remove('hidden');
                chestGlow.style.opacity = '0.3';
                
                setTimeout(() => {
                    chestGlow.style.opacity = '0';
                }, 1000);
                
                // Показываем промокод
                promoCode.classList.remove('hidden');
                gameInstruction.classList.add('hidden');
                copyButton.classList.remove('hidden');
                
                // Запускаем конфеетти
                initConfetti();
                setTimeout(() => {
                    confetti.clear();
                }, 3000);
            }
        });
        
        // Копирование промокода
        copyButton.addEventListener('click', function() {
            navigator.clipboard.writeText('STEAM10').then(() => {
                const originalText = copyButton.innerHTML;
                copyButton.innerHTML = `
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Скопировано!
                `;
                
                setTimeout(() => {
                    copyButton.innerHTML = originalText;
                }, 2000);
            });
        });
    });
</script>

<style>
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-15px); }
    }
    .animate-float {
        animation: float 6s ease-in-out infinite;
    }
    .animate-float-delay {
        animation: float 6s ease-in-out 1s infinite;
    }
</style>

<!-- Подключаем библиотеку конфеетти -->
<script src="https://cdn.jsdelivr.net/npm/confetti-js@0.0.18/dist/index.min.js"></script>