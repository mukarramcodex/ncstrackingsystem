@props([
    'sideOffset' => 4,
    'side' => 'bottom',
    'class' => '',
])

@php
    $classes = "z-50 overflow-hidden rounded-md border bg-popover px-3 py-1.5 text-sm text-popover-foreground shadow-md animate-in fade-in-0 zoom-in-95 data-[state=closed]:animate-out data-[state=closed]:fade-out-0 data-[state=closed]:zoom-out-95 {$class}";

    // Side-specific animations
    $sideClasses = [
        'bottom' => 'slide-in-from-top-2',
        'left' => 'slide-in-from-right-2',
        'right' => 'slide-in-from-left-2',
        'top' => 'slide-in-from-bottom-2',
    ];
    
    $classes .= ' ' . ($sideClasses[$side] ?? $sideClasses['bottom']);
@endphp

<div x-show="open" 
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        {{ $attributes->merge(['class' => $classes]) }}
        style="display: none;"
        x-cloak>
        {{ $slot }}
</div>