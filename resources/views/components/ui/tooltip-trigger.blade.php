@props(['asChild' => false])

@if($asChild)
    {{ $slot }}
@else
<button {{ $attributes->merge(['class' => 'inline-flex items-center']) }} @click="open = !open">
    {{ $slot }}
</button>
@endif