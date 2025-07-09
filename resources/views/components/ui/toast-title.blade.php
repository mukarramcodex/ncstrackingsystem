@props(['class' => ''])

<p {{ $attributes->merge(['class' => 'text-sm font-semibold [& + .toast-description]:mt-1 ' . $class]) }}>
    {{ $slot }}
</p>