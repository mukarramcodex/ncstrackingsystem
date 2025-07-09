@props([
    'side' => 'right', // 'top', 'bottom', 'left', 'right'
    'open' => false,
])

<div
    x-data="{ open: @js($open) }"
    x-on:open-sheet.window="open = true"
    x-on:close-sheet.window="open = false"
>
    <!-- Trigger Slot -->
    <div x-on:click="open = true">
        {{ $trigger ?? '' }}
    </div>

    <!-- Overlay -->
    <div
        x-show="open"
        x-transition.opacity
        class="fixed inset-0 z-50 bg-black/80"
        x-on:click="open = false"
    ></div>

    <!-- Sheet Panel -->
    <div
        x-show="open"
        x-transition:enter="transition duration-500 ease-in-out"
        x-transition:enter-start="opacity-0 translate-{{ $side === 'left' ? 'x-[-100%]' : ($side === 'right' ? 'x-full' : ($side === 'top' ? 'y-[-100%]' : 'y-full')) }}"
        x-transition:enter-end="opacity-100 translate-0"
        x-transition:leave="transition duration-300 ease-in-out"
        x-transition:leave-start="opacity-100 translate-0"
        x-transition:leave-end="opacity-0 translate-{{ $side === 'left' ? 'x-[-100%]' : ($side === 'right' ? 'x-full' : ($side === 'top' ? 'y-[-100%]' : 'y-full')) }}"
        class="fixed z-50 bg-background p-6 shadow-lg transition ease-in-out
            {{ match($side) {
                'top' => 'inset-x-0 top-0 border-b',
                'bottom' => 'inset-x-0 bottom-0 border-t',
                'left' => 'inset-y-0 left-0 h-full w-3/4 border-r sm:max-w-sm',
                'right' => 'inset-y-0 right-0 h-full w-3/4 border-l sm:max-w-sm',
            } }}"
    >
        <!-- Close Button -->
        <button
            x-on:click="open = false"
            class="absolute right-4 top-4 rounded-sm opacity-70 ring-offset-background transition-opacity hover:opacity-100 focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2"
        >
            <x-lucide-x class="h-4 w-4" />
            <span class="sr-only">Close</span>
        </button>

        <!-- Content Slot -->
        {{ $slot }}
    </div>
</div>
