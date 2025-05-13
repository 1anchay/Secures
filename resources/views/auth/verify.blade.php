@extends('layouts.app')

@section('content')
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/heroicons@1.0.6/outline/index.js"></script>
  </head>
<div class="min-h-screen bg-gradient-to-b from-gray-900 to-gray-800 py-12 px-4 sm:px-6 lg:px-8 flex items-center">
    <div class="max-w-md mx-auto w-full">
        <!-- Логотип -->
        <div class="text-center mb-8">
            <a href="{{ url('/') }}" class="inline-flex items-center space-x-3">
                <div class="w-12 h-12 bg-gradient-to-br from-cyan-400 to-purple-600 rounded-lg flex items-center justify-center shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <span class="text-3xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-600 tracking-tight">
                    Secure<span class="text-white">Shield</span>
                </span>
            </a>
        </div>

        <!-- Карточка подтверждения -->
        <div class="bg-gray-800 py-8 px-6 sm:px-10 rounded-xl shadow-2xl border border-gray-700">
            <div class="text-center">
                <svg class="mx-auto h-16 w-16 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <h2 class="mt-6 text-2xl font-bold text-white">
                    Подтвердите ваш email
                </h2>
                
                @if (session('resent'))
                    <div class="mt-4 p-3 bg-green-500/10 border border-green-500/30 rounded-lg text-green-400">
                        Новое письмо с подтверждением отправлено на ваш email.
                    </div>
                @endif

                <p class="mt-4 text-gray-400">
                    Прежде чем продолжить, пожалуйста, проверьте вашу почту и перейдите по ссылке для подтверждения email.
                </p>
                <p class="mt-2 text-gray-400">
                    Если вы не получили письмо,
                </p>
            </div>

            <form method="POST" action="{{ route('dashboard') }}" class="mt-6">
                @csrf
                <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 transition duration-300">
                    Отправить письмо снова
                </button>
            </form>

            <div class="mt-4">
                <a href="{{ route('profile.edit') }}" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-gradient-to-r from-purple-500 to-indigo-600 hover:from-purple-600 hover:to-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transition duration-300">
                    Перейти в профиль
                </a>
            </div>

            <div class="mt-6 text-center">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-sm text-gray-400 hover:text-cyan-400 transition duration-300">
                        Выйти из аккаунта
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Декоративные элементы -->
<div class="fixed bottom-0 left-0 right-0 h-1/4 bg-gradient-to-t from-gray-900 to-transparent pointer-events-none z-0"></div>
<div class="fixed top-20 left-10 w-32 h-32 rounded-full bg-gradient-to-r from-cyan-500/10 to-purple-500/10 blur-xl opacity-50 z-0"></div>
<div class="fixed bottom-20 right-20 w-40 h-40 rounded-full bg-gradient-to-r from-purple-500/10 to-blue-500/10 blur-xl opacity-50 z-0"></div>
@endsection