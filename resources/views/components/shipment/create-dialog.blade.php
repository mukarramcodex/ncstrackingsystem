@props(['trigger' => null])

<div x-data="{ open: false }">
    <!-- Trigger -->
    <div @click="open = true">
        {{ $trigger }}
    </div>

    <!-- Dialog Backdrop -->
    <div 
        x-show="open"
        class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity z-50"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    ></div>

    <!-- Dialog Panel -->
    <div 
        x-show="open"
        class="fixed inset-0 z-50 overflow-y-auto"
        @click.away="open = false"
    >
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div 
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-4xl sm:p-6 dark:bg-gray-800"
            >
                <!-- Header -->
                <div class="mb-4">
                    <h3 class="text-lg font-medium leading-6 text-gray-900 dark:text-gray-100">
                        Create New Shipment
                    </h3>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                        Fill in the details below to create a new shipment. Click save when you're done.
                    </p>
                </div>

                <!-- Form Content -->
                <x-shipments.create-form onFinished="open = false" />
            </div>
        </div>
    </div>
</div>