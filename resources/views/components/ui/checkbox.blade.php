@props([
    'id' => Str::uuid(),
    'name' => null,
    'value' => '1',
    'checked' => false,
    'disabled' => false,
])

<label for="{{ $id }}" class="inline-flex items-center gap-2 cursor-pointer">
    <input
        type="checkbox"
        id="{{ $id }}"
        name="{{ $name }}"
        value="{{ $value }}"
        @checked($checked)
        @disabled($disabled)
        {{ $attributes->merge([
            'class' => 'peer hidden'
        ]) }}
    />
    <div class="h-4 w-4 shrink-0 rounded-sm border border-primary text-primary-foreground ring-offset-background
        peer-checked:bg-primary peer-checked:text-white
        peer-focus-visible:outline-none peer-focus-visible:ring-2 peer-focus-visible:ring-ring peer-focus-visible:ring-offset-2
        peer-disabled:cursor-not-allowed peer-disabled:opacity-50
        flex items-center justify-center transition-colors"
    >
        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="20 6 9 17 4 12" />
        </svg>
    </div>
    {{ $slot }}
</label>
