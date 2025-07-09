@props([
    'variant' => 'default', // or 'destructive'
    'title' => null,
    'description' => null,
])

@php
    $baseClasses = 'relative w-full rounded-lg border p-4';
    $variantClasses = $variant === 'destructive'
        ? 'border-red-500/50 text-red-700 dark:border-red-500'
        : 'bg-white text-black'; // Tailwind's default

    $iconColor = $variant === 'destructive' ? 'text-red-700' : 'text-gray-800';
@endphp

<div role="alert" class="{{ $baseClasses }} {{ $variantClasses }}">
    <!-- Optional Icon -->
    <svg xmlns="http://www.w3.org/2000/svg"
            class="absolute left-4 top-4 h-5 w-5 {{ $iconColor }}"
            fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 100 20 10 10 0 000-20z" />
    </svg>

    <div class="pl-7">
        @if ($title)
            <h5 class="mb-1 font-medium leading-none tracking-tight">
                {{ $title }}
            </h5>
        @endif

        @if ($description)
            <div class="text-sm">
                {!! $description !!}
            </div>
        @endif

        {{-- For more flexible content, you can use slot --}}
        {{ $slot }}
    </div>
</div>
