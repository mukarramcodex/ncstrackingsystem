@props(['inset' => false, 'class' => ''])

<button 
    {{ $attributes->merge([
        'class' => 'relative flex w-full cursor-default select-none items-center gap-2 rounded-sm px-2 py-1.5 text-sm outline-none transition-colors hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground disabled:pointer-events-none disabled:opacity-50 ' . ($inset ? 'pl-8 ' : '') . $class
    ]) }}
>
    {{ $slot }}
</button>