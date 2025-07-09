@props([
    'title' => 'Are you sure?',
    'description' => 'This action cannot be undone.',
    'confirmText' => 'Confirm',
    'cancelText' => 'Cancel',
    'triggerText' => 'Open Dialog',
    'confirmAction' => '', // optional route or JS action
])

<div x-data="{ open: false }">
    <!-- Trigger Button -->
    <button @click="open = true" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
        {{ $triggerText }}
    </button>

    <!-- Overlay -->
    <div
        x-show="open"
        x-transition.opacity
        class="fixed inset-0 bg-black/80 z-40"
    ></div>

    <!-- Dialog Content -->
    <div
        x-show="open"
        x-transition
        class="fixed left-1/2 top-1/2 z-50 w-full max-w-lg transform -translate-x-1/2 -translate-y-1/2 bg-white p-6 shadow-lg sm:rounded-lg"
    >
        <!-- Header -->
        <div class="flex flex-col space-y-2 text-center sm:text-left">
            <h2 class="text-lg font-semibold">{{ $title }}</h2>
            <p class="text-sm text-gray-600">{{ $description }}</p>
        </div>

        <!-- Footer -->
        <div class="mt-6 flex flex-col-reverse sm:flex-row sm:justify-end sm:space-x-2">
            <!-- Cancel Button -->
            <button
                @click="open = false"
                class="px-4 py-2 border border-gray-300 text-gray-700 rounded-md hover:bg-gray-100 transition sm:mt-0 mt-2"
            >
                {{ $cancelText }}
            </button>

            <!-- Confirm Button -->
            @if($confirmAction)
                <a href="{{ $confirmAction }}" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition">
                    {{ $confirmText }}
                </a>
            @else
                <button
                    @click="open = false"
                    class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition"
                >
                    {{ $confirmText }}
                </button>
            @endif
        </div>
    </div>
</div>
