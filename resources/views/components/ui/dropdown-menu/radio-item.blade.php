@props(['value' => '', 'class' => ''])

<label class="relative flex cursor-default select-none items-center rounded-sm py-1.5 pl-8 pr-2 text-sm outline-none transition-colors hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground {{ $class }}">
    <input type="radio" class="sr-only" value="{{ $value }}">
    <span class="absolute left-2 flex h-3.5 w-3.5 items-center justify-center">
        <svg x-show="checked" class="h-2 w-2 fill-current" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3" />
        </svg>
    </span>
    {{ $slot }}
</label>