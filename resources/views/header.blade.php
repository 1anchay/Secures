<header class="bg-gradient-to-r from-gray-900 to-gray-800 text-white shadow-xl">
  <div class="max-w-7xl mx-auto px-6">
    <div class="flex justify-between items-center py-4">
      <!-- Логотип и название -->
      <div class="flex items-center space-x-4">
        <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
          <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-lg flex items-center justify-center shadow-lg transform group-hover:rotate-6 transition duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
            </svg>
          </div>
          <span class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-400 via-indigo-500 to-purple-600 tracking-tight group-hover:bg-gradient-to-r group-hover:from-blue-500 group-hover:to-indigo-600 transition-all duration-500">
            Secure<span class="text-white">Shield</span>
          </span>
        </a>
      </div>

      <!-- Навигационное меню -->
      <nav class="hidden md:flex items-center space-x-1">
        <a href="{{ route('home') }}" class="px-4 py-2 rounded-md font-medium flex items-center space-x-2 hover:bg-gray-700/50 hover:text-blue-300 transition-all duration-200 group">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-400 group-hover:text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
          </svg>
          <span>Главная</span>
        </a>
        
        <a href="{{ route('store') }}" class="px-4 py-2 rounded-md font-medium flex items-center space-x-2 hover:bg-gray-700/50 hover:text-indigo-300 transition-all duration-200 group">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-400 group-hover:text-indigo-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
          </svg>
          <span>Услуги защиты</span>
        </a>
        
        <a href="{{ route('audit') }}" class="px-4 py-2 rounded-md font-medium flex items-center space-x-2 hover:bg-gray-700/50 hover:text-purple-300 transition-all duration-200 group">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-400 group-hover:text-purple-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
          </svg>
          <span>Аудит безопасности</span>
        </a>
        
        

      <!-- Кнопки входа/регистрации/выхода -->
      <div class="flex items-center space-x-4">
        @if (Auth::check())
          <!-- Профиль пользователя -->
          <div class="hidden md:flex items-center space-x-3">
            <span class="text-sm font-medium text-gray-300">{{ Auth::user()->name }}</span>
            <a href="{{ route('profile.edit') }}" class="relative group">
              <img src="{{ Auth::user()->profile_photo_url }}" alt="User Photo" class="w-10 h-10 rounded-full border-2 border-blue-400 shadow-md transition-all duration-300 group-hover:border-indigo-500 group-hover:scale-110">
              <span class="absolute -bottom-1 -right-1 bg-indigo-600 text-white text-xs px-1.5 py-0.5 rounded-full border border-gray-900 shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
              </span>
            </a>
          </div>
          
          <!-- Кнопка выхода -->
          <form action="{{ route('logout') }}" method="POST" class="inline">
            @csrf
            <button type="submit" class="px-4 py-2 bg-gradient-to-r from-red-500 to-pink-600 rounded-md font-medium text-sm flex items-center space-x-2 hover:shadow-lg hover:from-red-600 hover:to-pink-700 transition-all duration-200 transform hover:scale-105 active:scale-95">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
              </svg>
              <span class="hidden md:inline">Выход</span>
            </button>
          </form>
        @else
          <!-- Кнопки входа и регистрации -->
          <a href="{{ route('login') }}" class="px-4 py-2 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-md font-medium text-sm flex items-center space-x-2 hover:shadow-lg hover:from-blue-600 hover:to-indigo-700 transition-all duration-200 transform hover:scale-105 active:scale-95">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
            </svg>
            <span class="hidden md:inline">Войти</span>
          </a>
          
          <a href="{{ route('register') }}" class="px-4 py-2 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-md font-medium text-sm flex items-center space-x-2 hover:shadow-lg hover:from-indigo-600 hover:to-purple-700 transition-all duration-200 transform hover:scale-105 active:scale-95">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
            </svg>
            <span class="hidden md:inline">Регистрация</span>
          </a>
        @endif

        

        <!-- Мобильное меню (бургер) -->
        <button id="mobile-menu-button" class="md:hidden w-10 h-10 rounded-full bg-gray-700 flex items-center justify-center hover:bg-gray-600 transition-all duration-200">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </div>

    <!-- Мобильное меню (скрыто по умолчанию) -->
    <div id="mobile-menu" class="hidden md:hidden pb-4">
      <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
        <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700/50 hover:text-blue-300 flex items-center space-x-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
          </svg>
          <span>Главная</span>
        </a>
        
        <a href="{{ route('store') }}" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700/50 hover:text-indigo-300 flex items-center space-x-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
          </svg>
          <span>Услуги защиты</span>
        </a>
        
        <a href="{{ route('audit') }}" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700/50 hover:text-purple-300 flex items-center space-x-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
          </svg>
          <span>Аудит безопасности</span>
        </a>
        
        
      
        @if (Auth::check())
  
    
    <div class="pt-4 pb-3 border-t border-gray-700">
        <div class="flex items-center px-5">
            <div class="flex-shrink-0">
                <img src="{{ Auth::user()->profile_photo_url }}" alt="User Photo" class="h-10 w-10 rounded-full border-2 border-blue-400">
            </div>
            <div class="ml-3">
                <div class="text-base font-medium text-white">{{ Auth::user()->name }}</div>
                <div class="text-sm font-medium text-gray-400">Verified User</div>
            </div>
        </div>
        <div class="mt-3 px-2 space-y-1">
            <a href="{{ route('profile.edit') }}" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700/50 hover:text-indigo-300 flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                <span>Настройки</span>
            </a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="block w-full px-3 py-2 rounded-md text-base font-medium text-white hover:bg-gray-700/50 hover:text-red-300 flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    <span>Выход</span>
                </button>
            </form>
        </div>
    </div>
@endif

  <script>
    // Ждем полной загрузки DOM
    document.addEventListener('DOMContentLoaded', function() {
        // Элементы для переключения темы
        const themeToggleBtn = document.getElementById('theme-toggle');
        const sunIcon = document.getElementById('sun-icon');
        const moonIcon = document.getElementById('moon-icon');
        const html = document.documentElement;

        // Проверяем сохраненную тему или системные настройки
        function checkTheme() {
            if (localStorage.getItem('theme') === 'dark' || 
                (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                enableDarkMode();
            } else {
                enableLightMode();
            }
        }

        // Включение темной темы
        function enableDarkMode() {
            html.classList.add('dark');
            localStorage.setItem('theme', 'dark');
            if (sunIcon) sunIcon.classList.add('hidden');
            if (moonIcon) moonIcon.classList.remove('hidden');
        }

        // Включение светлой темы
        function enableLightMode() {
            html.classList.remove('dark');
            localStorage.setItem('theme', 'light');
            if (sunIcon) sunIcon.classList.remove('hidden');
            if (moonIcon) moonIcon.classList.add('hidden');
        }

        // Инициализация темы при загрузке
        checkTheme();

        // Обработчик переключения темы
        if (themeToggleBtn) {
            themeToggleBtn.addEventListener('click', function() {
                if (html.classList.contains('dark')) {
                    enableLightMode();
                } else {
                    enableDarkMode();
                }
            });
        }

        // Обработчик изменения системных настроек темы
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', function(e) {
            if (!localStorage.getItem('theme')) {
                if (e.matches) {
                    enableDarkMode();
                } else {
                    enableLightMode();
                }
            }
        });

        // Мобильное меню
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
                mobileMenu.classList.toggle('block');
                
                // Анимация иконки гамбургера
                const bars = mobileMenuButton.querySelectorAll('span');
                bars.forEach(bar => bar.classList.toggle('active'));
            });
        }
    });
</script>
</header>