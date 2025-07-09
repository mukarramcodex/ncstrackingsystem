@props(['provider' => false])

@if($provider)
<div x-data="{ openTooltip: null }" @keydown.escape="openTooltip = null">
    {{ $slot }}
</div>
@else
<div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" @focusin="open = true" @focusout="open = false" class="relative inline-block">
    {{ $slot }}
</div>
@endif