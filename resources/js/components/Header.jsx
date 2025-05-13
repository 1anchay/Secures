import { Bars3Icon } from '@heroicons/react/24/outline';

export default function Header() {
  return (
    <header className="bg-gray-900 shadow-md">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-16">
        {/* Логотип */}
        <div className="flex items-center space-x-2">
          <span className="text-yellow-400 text-2xl font-bold">🎁 xLoot</span>
          <span className="text-gray-400 hidden sm:inline text-sm">Кейсы с ключами и аккаунтами</span>
        </div>

        {/* Навигация */}
        <nav className="hidden md:flex space-x-6 text-sm">
          <a href="#" className="text-white hover:text-yellow-400 transition">Главная</a>
          <a href="#" className="text-white hover:text-yellow-400 transition">Кейсы</a>
          <a href="#" className="text-white hover:text-yellow-400 transition">Отзывы</a>
          <a href="#" className="text-white hover:text-yellow-400 transition">Контакты</a>
        </nav>

        {/* Кнопка входа */}
        <div className="flex items-center space-x-4">
          <button className="hidden md:inline px-4 py-2 text-sm font-medium bg-yellow-400 text-black rounded hover:bg-yellow-300 transition">
            Войти
          </button>
          {/* Иконка меню на мобилке */}
          <button className="md:hidden text-white hover:text-yellow-400">
            <Bars3Icon className="h-6 w-6" />
          </button>
        </div>
      </div>
    </header>
  );
}
