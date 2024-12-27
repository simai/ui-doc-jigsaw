@extends('master')

@section('title', 'Главная страница')

@section('content')
    <div class="container mx-auto py-6">
        <h1 class="text-4xl font-bold text-primary">Добро пожаловать на наш сайт</h1>
        <p class="mt-4 text-lg text-secondary">Используйте документацию, чтобы быстро начать работу.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-8">
            <div class="p-4 bg-surface-1 rounded shadow hover:shadow-lg">
                <h2 class="text-xl font-semibold text-on-surface">Особенность 1</h2>
                <p class="mt-2 text-sm text-on-surface-variant">Краткое описание первой особенности вашего сайта.</p>
            </div>
            <div class="p-4 bg-surface-1 rounded shadow hover:shadow-lg">
                <h2 class="text-xl font-semibold text-on-surface">Особенность 2</h2>
                <p class="mt-2 text-sm text-on-surface-variant">Краткое описание второй особенности вашего сайта.</p>
            </div>
            <div class="p-4 bg-surface-1 rounded shadow hover:shadow-lg">
                <h2 class="text-xl font-semibold text-on-surface">Особенность 3</h2>
                <p class="mt-2 text-sm text-on-surface-variant">Краткое описание третьей особенности вашего сайта.</p>
            </div>
            <div class="p-4 bg-surface-1 rounded shadow hover:shadow-lg">
                <h2 class="text-xl font-semibold text-on-surface">Особенность 4</h2>
                <p class="mt-2 text-sm text-on-surface-variant">Краткое описание четвёртой особенности вашего сайта.</p>
            </div>
        </div>

        <div class="text-center mt-12">
            <a href="/docs" class="px-6 py-3 bg-primary text-white rounded shadow hover:bg-primary-hover">Перейти к документации</a>
        </div>

        <!-- Блок меню -->
        <nav class="flex items-center space-x-4 bg-surface-1 p-4 rounded mt-8">
            <a href="#" class="text-on-surface hover:text-primary px-3 py-2 rounded hover:bg-surface-transparent-overlay">Главная</a>
            <a href="#" class="text-on-surface hover:text-primary px-3 py-2 rounded hover:bg-surface-transparent-overlay">Особенности</a>
            <a href="#" class="text-on-surface hover:text-primary px-3 py-2 rounded hover:bg-surface-transparent-overlay">Контакты</a>
        </nav>
    </div>
@endsection
