@props(['inset' => false, 'class' => ''])

<button 
    @click="open = !open"
    {{ $attributes->merge([
        'class' => 'flex w-full cursor-default select-none items-center gap-2 rounded-sm px-2 py-1.5 text-sm outline-none transition-colors hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground ' . ($inset ? 'pl-8 ' : '') . $class
    ]) }}
>
    {{ $slot }}
    <svg class="ml-auto h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
    </svg>
</button>