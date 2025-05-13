<!-- resources/views/components/app-layout.blade.php -->

<div class="min-h-screen bg-gray-100">
    <header>
        <!-- Здесь ваш хедер -->
    </header>

    <main>
        {{ $slot }} <!-- Сюда вставляются содержимое страницы -->
    </main>

    <footer>
        <!-- Здесь ваш футер -->
    </footer>
</div>
