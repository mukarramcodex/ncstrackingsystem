@props(['checked' => false, 'class' => ''])

<label class="relative flex cursor-default select-none items-center rounded-sm py-1.5 pl-8 pr-2 text-sm outline-none transition-colors hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground {{ $class }}">
    <input type="checkbox" class="sr-only" {{ $checked ? 'checked' : '' }}>
    <span class="absolute left-2 flex h-3.5 w-3.5 items-center justify-center">
        <svg x-show="checked" class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
    </span>
    {{ $slot }}
</label>