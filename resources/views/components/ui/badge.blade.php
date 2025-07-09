@props([
    'variant' => 'default', // default, secondary, destructive, outline
])

@php
    $base = 'inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2';

    $variantClasses = match($variant) {
        'secondary'   => 'border-transparent bg-gray-200 text-gray-800 hover:bg-gray-300',
        'destructive' => 'border-transparent bg-red-600 text-white hover:bg-red-700',
        'outline'     => 'border border-gray-300 text-gray-800',
        default       => 'border-transparent bg-blue-600 text-white hover:bg-blue-700',
    };
@endphp

<div {{ $attributes->merge(['class' => "$base $variantClasses"]) }}>
    {{ $slot }}
</div>
