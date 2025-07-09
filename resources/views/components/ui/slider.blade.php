@props([
    'min' => 0,
    'max' => 100,
    'step' => 1,
    'value' => 50,
    'class' => '',
])

<div
    x-data="{ value: {{ $value }} }"
    class="relative flex w-full touch-none select-none items-center {{ $class }}"
>
    {{-- Track --}}
    <div class="relative h-2 w-full grow overflow-hidden rounded-full bg-secondary">
        {{-- Range --}}
        <div
            class="absolute h-full bg-primary"
            :style="'width: ' + ((value - {{ $min }}) / ({{ $max }} - {{ $min }}) * 100) + '%'">
        </div>
    </div>

    {{-- Thumb --}}
    <input
        type="range"
        :min="{{ $min }}"
        :max="{{ $max }}"
        :step="{{ $step }}"
        x-model="value"
        class="absolute w-full h-2 opacity-0 cursor-pointer"
    />

    <div
        class="absolute left-0 top-1/2 -translate-y-1/2"
        :style="'left: calc(' + ((value - {{ $min }}) / ({{ $max }} - {{ $min }}) * 100) + '% - 0.625rem)'"
    >
        <div
            class="block h-5 w-5 rounded-full border-2 border-primary bg-background ring-offset-background transition-colors
                focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2
                pointer-events-none"
        ></div>
    </div>
</div>
