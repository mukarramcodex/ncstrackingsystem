@props(['value' => null, 'class' => ''])

<div 
    x-data="{ value: @json($value) }"
    {{ $attributes->merge(['class' => 'space-y-0.5 ' . $class]) }}
>
    {{ $slot }}
</div>