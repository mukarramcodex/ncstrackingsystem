@props([
    'value' => false,
    'class' => '',
    'disabled' => false,
    'id' => null,
    'name' => null,
])

@php
    $id = $id ?? 'switch-'.uniqid();
@endphp

<button
    type="button"
    role="switch"
    aria-checked="{{ $value ? 'true' : 'false' }}"
    @click="$dispatch('input', !{{ $value ? 'true' : 'false' }})"
    :class="{
        'bg-primary': {{ $value ? 'true' : 'false' }},
        'bg-input': !{{ $value ? 'true' : 'false' }},
        'opacity-50 cursor-not-allowed': {{ $disabled ? 'true' : 'false' }}
    }"
    {{ $attributes->merge([
        'class' => 'peer inline-flex h-6 w-11 shrink-0 cursor-pointer items-center rounded-full border-2 border-transparent transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 focus-visible:ring-offset-background ' . $class,
        'disabled' => $disabled,
        'id' => $id,
    ]) }}
    x-data="{ on: {{ $value ? 'true' : 'false' }} }"
    x-modelable="on"
>
    <span
        class="pointer-events-none block h-5 w-5 rounded-full bg-background shadow-lg ring-0 transition-transform"
        :class="{
            'translate-x-5': on,
            'translate-x-0': !on
        }"
    ></span>
    
    @if($name)
        <input type="hidden" name="{{ $name }}" x-model="on" value="{{ $value ? '1' : '0' }}">
    @endif
</button>