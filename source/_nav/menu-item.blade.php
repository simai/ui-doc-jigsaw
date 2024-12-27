<a href="{{ $item['link'] ?? '#' }}" class="text-on-surface hover:text-primary px-4 py-2 rounded hover:bg-surface-transparent-overlay flex items-center space-x-2">
    @if (!empty($item['icon']))
        <span class="icon">
            <img src="{{ $item['icon'] }}" alt="{{ $item['title'] ?? 'Иконка' }}" class="w-5 h-5">
        </span>
    @endif
    <span>{{ $item['title'] ?? 'Элемент меню' }}</span>
</a>