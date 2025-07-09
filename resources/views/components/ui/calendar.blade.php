@props([
    'name' => 'date',         // Input name
    'value' => '',            // Default date value
    'placeholder' => 'Pick a date',
    'class' => '',            // Extra class support
])

<div x-data x-init="
    flatpickr($refs.input, {
        altInput: true,
        altFormat: 'F j, Y',
        dateFormat: 'Y-m-d',
        defaultDate: '{{ $value }}'
    })
">
    <input 
        x-ref="input" 
        type="text" 
        name="{{ $name }}" 
        value="{{ $value }}"
        class="w-full rounded-md border border-gray-300 px-3 py-2 text-sm shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 {{ $class }}"
        placeholder="{{ $placeholder }}"
        autocomplete="off"
    />
</div>
