@props(['class' => ''])

<div {{ $attributes->merge([
    'class' => '-mx-1 my-1 h-px bg-muted ' . $class
]) }}></div>