<!DOCTYPE html>
<html lang="ru" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Документация')</title>

    <!-- Метаданные для шаринга -->
    <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">
    <meta property="og:site_name" content="{{ $page->siteName }}"/>
    <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
    <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}"/>
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:image" content="{{ $page->ogImage ?? '/assets/img/logo.png' }}"/>
    <meta property="og:type" content="website"/>
    <meta name="twitter:image:alt" content="{{ $page->siteName }}">
    <meta name="twitter:card" content="summary_large_image">

    <!-- Подключение минимизированных стилей из SIMAI Framework -->
    <link rel="stylesheet" href="{{ asset('css/utility.full.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/core.min.css') }}">
</head>
<body>
    <header>
        <nav class="flex justify-between items-center p-4 bg-primary text-white">
            <div>
                <a href="/" class="text-lg font-bold">Моя Документация</a>
            </div>
            <ul class="flex space-x-4">
                <li><a href="/docs" class="hover:text-secondary">Документация</a></li>
                <li><a href="/about" class="hover:text-secondary">О нас</a></li>
                <li><a href="/contact" class="hover:text-secondary">Контакты</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="p-4 bg-surface-2 text-on-surface">
        <p>&copy; {{ date('Y') }}. Все права защищены.</p>
    </footer>

    <!-- Подключение внешних скриптов -->
    <script src="{{ asset('js/runtime.62aad2947.js') }}"></script>
    <script src="{{ asset('js/vendor.950961573.js') }}"></script>
    <script src="{{ asset('js/_doc.3ebdc6279.js') }}"></script>
    <script src="{{ asset('js/init.9fe4f830e.js') }}"></script>
</body>
</html>
