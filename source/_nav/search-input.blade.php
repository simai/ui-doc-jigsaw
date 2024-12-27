<!-- /_nav/search-input.blade.php -->
<form action="{{ $action ?? '#' }}" method="GET" class="flex items-center bg-surface-1 p-2 rounded shadow hover:shadow-md">
    <input 
        type="text" 
        name="q" 
        placeholder="{{ $placeholder ?? 'Поиск...' }}" 
        class="flex-grow px-4 py-2 text-on-surface bg-transparent border-0 focus:outline-none focus:ring-2 focus:ring-primary"
    >
    <button 
        type="submit" 
        class="ml-2 px-4 py-2 bg-primary text-white rounded hover:bg-primary-hover">
        Искать
    </button>
</form>
