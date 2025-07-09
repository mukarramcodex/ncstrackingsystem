@props([
    'class' => '',
    'orientation' => 'vertical' // for future horizontal support
])

<div class="relative overflow-auto {{ $class }}">
    <div class="h-full w-full rounded-inherit">
        {{ $slot }}
    </div>

    {{-- Custom scrollbar styling --}}
    <style>
        [x-cloak]::-webkit-scrollbar {
            width: 10px;
            height: 10px;
        }

        [x-cloak]::-webkit-scrollbar-track {
            background: transparent;
        }

        [x-cloak]::-webkit-scrollbar-thumb {
            background-color: theme('colors.border');
            border-radius: 9999px;
            border: 2px solid transparent;
            background-clip: content-box;
        }

        [x-cloak]::-webkit-scrollbar-corner {
            background: transparent;
        }
    </style>
</div>
