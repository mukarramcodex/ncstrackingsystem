@props([
    'title',
    'value',
    'icon' => null,
    'description' => null,
    'class' => ''
])

<div {{ $attributes->merge(['class' => "rounded-lg border bg-card text-card-foreground shadow-sm hover:shadow-inner $class"]) }}>
    <div class="flex flex-row items-center justify-between space-y-0 p-6 pb-2">
        <h3 class="text-sm font-medium tracking-tight">{{ $title }}</h3>
        @if($icon)
            <div class="text-muted-foreground h-4 w-4">
                {!! $icon !!}
            </div>
        @endif
    </div>
    <div class="p-6 pt-0">
        <div class="text-2xl font-bold">{{ $value }}</div>
        @if($description)
            <p class="text-xs text-muted-foreground">{{ $description }}</p>
        @endif
    </div>
</div>
