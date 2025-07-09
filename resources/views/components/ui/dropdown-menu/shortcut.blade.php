@props(['class' => ''])

<span {{ $attributes->merge([
    'class' => 'ml-auto text-xs tracking-widest opacity-60 ' . $class
]) }}>
    {{ $slot }}
</span>