@props([
    'value',
    'class' => '',
    'disabled' => false
])

<button
    type="button"
    role="tab"
    @click="activeTab = '{{ $value }}'"
    :class="{
        'bg-background text-foreground shadow-sm': activeTab === '{{ $value }}',
        'opacity-50 pointer-events-none': {{ $disabled ? 'true' : 'false' }}
    }"
    {{ $attributes->merge([
        'class' => 'inline-flex items-center justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none ' . $class,
        ':aria-selected' => "activeTab === '{{ $value }}'",
        'x-bind:disabled' => $disabled ? 'true' : null
    ]) }}
>
    {{ $slot }}
</button>