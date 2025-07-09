@props(['class' => ''])

<div {{ $attributes->merge(['class' => 'space-y-0.5 ' . $class]) }}>
    {{ $slot }}
</div>