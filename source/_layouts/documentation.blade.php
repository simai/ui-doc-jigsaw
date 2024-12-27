<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body class="text-on-surface font-sans antialiased">
        @yield('body')

        @extends('_layouts.master')

@section('nav-toggle')
    @include('_nav.menu-toggle')
@endsection

@section('body')
<section class="container max-w-screen-xl mx-auto px-a6 md:px-a8 py-a4">
    <div class="flex flex-col lg:flex-row">
        <nav id="js-nav-menu" class="nav-menu hidden lg:block">
            @include('_nav.menu', ['items' => $page->navigation])
        </nav>

        <div class="DocSearch-content w-full lg:w-3/5 break-words pb-a16 lg:pl-a4" v-pre>
            @yield('content')
        </div>
    </div>
</section>
@endsection

<header class="flex items-cross-center shadow-2 bg-surface-1 border-b h-b8 mb-a8 py-a4" role="banner">
    <div class="container flex items-cross-center max-w-screen-xl mx-auto px-a4 lg:px-a8">
        <div class="flex items-cross-center">
            <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-cross-center">
                <img class="h-b2 md:h-b3 mr-a4" src="/assets/img/logo.svg" alt="{{ $page->siteName }} logo" />

                <h1 class="text-size-2 md:text-size-3 text-primary font-semibold hover:text-primary-hover m-0 pr-a4">{{ $page->siteName }}</h1>
            </a>
        </div>

        <div class="flex flex-1 justify-end items-cross-center text-right md:pl-a10">
            <button id="theme-toggle" class="px-a4 py-a2 bg-surface-2 text-on-surface rounded cursor-pointer">Switch Theme</button>
            @if ($page->docsearchApiKey && $page->docsearchIndexName)
                @include('_nav.search-input')
            @endif
        </div>
    </div>

    @yield('nav-toggle')
</header>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const themeToggle = document.getElementById('theme-toggle');
        themeToggle.addEventListener('click', () => {
            document.documentElement.classList.toggle('dark');
        });
    });
</script>
    </body>
</html>
