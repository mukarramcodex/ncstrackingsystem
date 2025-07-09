@props(['asChild' => false])

@if($asChild)
    {{ $slot }}
@else
<button 
    @click="open = !open" 
    @keydown.escape="open = false"
    {{ $attributes->merge(['class' => 'inline-flex items-center']) }}
>
    {{ $slot }}
</button>
@endif