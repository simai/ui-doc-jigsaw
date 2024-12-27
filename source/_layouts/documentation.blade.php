@extends('_layouts.master')

@section('title', 'Документация')

@section('content')
    <div class="container mx-auto py-6">
        <h1 class="text-3xl font-bold text-primary">Добро пожаловать в документацию</h1>
        <p class="mt-4 text-lg text-secondary">Здесь вы найдёте всю необходимую информацию для начала работы.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
            <div class="p-4 bg-surface-1 rounded shadow hover:shadow-lg">
                <h2 class="text-xl font-semibold text-on-surface">Раздел 1</h2>
                <p class="mt-2 text-sm text-on-surface-variant">Описание первого раздела документации.</p>
            </div>
            <div class="p-4 bg-surface-1 rounded shadow hover:shadow-lg">
                <h2 class="text-xl font-semibold text-on-surface">Раздел 2</h2>
                <p class="mt-2 text-sm text-on-surface-variant">Описание второго раздела документации.</p>
            </div>
            <div class="p-4 bg-surface-1 rounded shadow hover:shadow-lg">
                <h2 class="text-xl font-semibold text-on-surface">Раздел 3</h2>
                <p class="mt-2 text-sm text-on-surface-variant">Описание третьего раздела документации.</p>
            </div>
        </div>
    </div>
@endsection
