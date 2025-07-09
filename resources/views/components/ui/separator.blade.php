@props([
    'orientation' => 'horizontal', // 'horizontal' or 'vertical'
    'class' => '',
])

<hr
    {{ $attributes->merge([
        'aria-orientation' => $orientation,
        'role' => 'separator',
        'class' => ($orientation === 'horizontal'
            ? 'h-px w-full'
            : 'w-px h-full') . ' shrink-0 bg-border ' . $class,
    ]) }}
/>