<!-- /_nav/menu.blade.php -->
<nav class="bg-surface-1 p-4 rounded flex flex-col md:flex-row items-start md:items-center space-y-2 md:space-y-0 md:space-x-4">
    @foreach ($menuItems as $item)
        @include('_nav.menu-item', ['item' => $item])
    @endforeach
</nav>
