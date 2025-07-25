<div class="flex h-screen bg-gray-100">
    <div class="sidebar bg-gray-800 text-white w-64 min-h-screen fixed transition-all duration-300 ease-in-out">
        @include('layouts.sidebar')
    </div>
    <div class="flex-1 flex flex-col overflow-hidden ml-64">
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-4">
            {{ $slot }}
        </main>
    </div>
</div>
