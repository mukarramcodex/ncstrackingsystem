@props(['inset' => false, 'class' => ''])

<div {{ $attributes->merge([
    'class' => 'px-2 py-1.5 text-sm font-semibold ' . ($inset ? 'pl-8 ' : '') . $class
]) }}>
    {{ $slot }}
</div>