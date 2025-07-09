@props(['align' => 'start', 'sideOffset' => 4])

<div x-data="{ open: false }" class="relative inline-block text-left">
    {{ $slot }}
</div>