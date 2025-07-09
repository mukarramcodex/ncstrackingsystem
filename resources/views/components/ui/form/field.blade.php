@props(['name', 'label' => null, 'required' => false, 'class' => ''])

<div class="space-y-2 {{ $class }}">
    @if($label)
        <x-form.label for="{{ $name }}" :required="$required">
            {{ $label }}
        </x-form.label>
    @endif

    {{ $slot }}

    @error($name)
        <x-form.message>{{ $message }}</x-form.message>
    @enderror
</div>