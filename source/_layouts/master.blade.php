<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

        <meta property="og:site_name" content="{{ $page->siteName }}"/>
        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}"/>
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:image" content="{{ $page->ogImage ?? '/assets/img/logo.png' }}"/>
        <meta property="og:type" content="website"/>
        <meta name="twitter:image:alt" content="{{ $page->siteName }}">
        <meta name="twitter:card" content="summary_large_image">

        <!-- Подключение минимизированных стилей -->
        <link rel="stylesheet" href="/assets/css/utility.full.min.css">
        <link rel="stylesheet" href="/assets/css/core.min.css">
    </head>
    <body>
        <header>
            <nav class="flex justify-between items-center p-4 bg-primary text-white">
                <div>
                    <a href="/" class="text-lg font-bold">{{ $page->siteName }}</a>
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
    </body>
</html>
