@props(['name'])

@php
    $error = $errors->first($name);
    $id = $attributes->get('id', 'input-' . $name);
@endphp

<div {{ $attributes->merge(['class' => 'space-y-2']) }}>
    {{ $label ?? null }}

    {{ $control ?? null }}

    @if($description ?? false)
        <p class="text-sm text-muted-foreground">{{ $description }}</p>
    @endif

    @if($error)
        <p class="text-sm text-destructive">{{ $error }}</p>
    @endif
</div>
