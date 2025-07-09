@props([
    'id' => 'chart-' . uniqid(),
    'type' => 'bar', // or 'line', 'doughnut', etc.
    'data' => [],
    'options' => [],
    'height' => '350px',
])

<div x-data
        x-init="
        new Chart($refs.canvas, {
            type: '{{ $type }}',
            data: {!! json_encode($data) !!},
            options: {!! json_encode($options) !!}
        });
        "
        style="height: {{ $height }}"
        class="relative w-full"
>
    <canvas x-ref="canvas"></canvas>
</div>
