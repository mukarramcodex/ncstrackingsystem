@props([
    'src' => null,           // Image source
    'alt' => 'User Avatar',  // Alt text
    'fallback' => 'NA',      // Fallback initials or icon
    'size' => '10'           // Tailwind size (h-10 w-10 by default)
])

@php
    $sizeClasses = "h-$size w-$size";
@endphp

<div class="relative flex {{ $sizeClasses }} shrink-0 overflow-hidden rounded-full bg-gray-200">
    @if ($src)
        <img
            src="{{ $src }}"
            alt="{{ $alt }}"
            class="aspect-square h-full w-full object-cover"
            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
        />
    @endif

    <!-- Fallback -->
    <div class="hidden absolute inset-0 flex items-center justify-center rounded-full bg-gray-300 text-gray-700 text-sm font-medium">
        {{ $fallback }}
    </div>
</div>
