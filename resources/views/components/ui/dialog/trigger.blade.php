@props(['asChild' => false])

@if($asChild)
    {{ $slot }}
@else
<button {{ $attributes->merge(['class' => 'inline-flex items-center']) }} @click="show = true">
    {{ $slot }}
</button>
@endif