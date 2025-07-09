@props(['for' => null, 'required' => false, 'class' => ''])

<label 
    for="{{ $for }}"
    {{ $attributes->merge(['class' => 'block text-sm font-medium text-gray-700 ' . ($errors->has($for) ? 'text-red-500' : '') . ' ' . $class]) }}
>
    {{ $slot }}
    @if($required)
        <span class="text-red-500">*</span>
    @endif
</label>