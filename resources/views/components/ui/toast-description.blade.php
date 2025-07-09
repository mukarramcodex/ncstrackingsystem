@props(['class' => ''])

<p {{ $attributes->merge(['class' => 'text-sm opacity-90 ' . $class]) }}>
    {{ $slot }}
</p>