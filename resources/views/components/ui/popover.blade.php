<div x-data="{ open: false }" class="relative inline-block">
    <!-- Trigger Button -->
    <button
        @click="open = !open"
        @keydown.escape.window="open = false"
        :aria-expanded="open"
        type="button"
        class="px-4 py-2 rounded-md bg-gray-100 text-sm font-medium shadow hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
    >
        Open Popover
    </button>

    <!-- Popover Content -->
    <div
        x-show="open"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        @click.away="open = false"
        class="absolute z-50 mt-2 w-72 rounded-md border bg-white p-4 shadow-md text-sm text-gray-700"
        style="display: none;"
    >
        {{ $slot }}
    </div>
</div>
