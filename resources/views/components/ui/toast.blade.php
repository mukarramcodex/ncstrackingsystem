@props([
    'id' => null,
    'type' => 'default',
    'duration' => 5000,
    'class' => ''
])

@php
    $baseClasses = 'pointer-events-auto relative flex w-full items-center justify-between space-x-4 overflow-hidden rounded-md border p-6 pr-8 shadow-lg transition-all';
    
    $typeClasses = [
        'default' => 'bg-background text-foreground',
        'success' => 'bg-green-50 text-green-800 border-green-200',
        'error' => 'bg-red-50 text-red-800 border-red-200',
        'warning' => 'bg-yellow-50 text-yellow-800 border-yellow-200',
        'info' => 'bg-blue-50 text-blue-800 border-blue-200',
    ];
    
    $classes = $baseClasses . ' ' . ($typeClasses[$type] ?? $typeClasses['default']) . ' ' . $class;
@endphp

<div 
    x-init="setTimeout(() => { $dispatch('toast-close', { id: '{{ $id }}' }) }, {{ $duration }})"
    x-show="show"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 translate-y-2"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 translate-y-2"
    {{ $attributes->merge(['class' => $classes]) }}
    @toast-close.window="if (event.detail.id === '{{ $id }}') { show = false; setTimeout(() => { $parent.removeToast('{{ $id }}') }, 200) }"
    x-data="{ show: true }"
>
    {{ $slot }}
</div>