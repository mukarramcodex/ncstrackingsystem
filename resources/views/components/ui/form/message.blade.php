@props(['class' => ''])

@if($slot->isNotEmpty())
    <p {{ $attributes->merge(['class' => 'text-sm text-red-600 ' . $class]) }}>
        {{ $slot }}
    </p>
@endif