<div
    x-data="{ value: {{ $value ?? 0 }} }"
    role="progressbar"
    aria-valuenow="{{ $value ?? 0 }}"
    aria-valuemin="0"
    aria-valuemax="100"
    class="relative h-4 w-full overflow-hidden rounded-full bg-secondary"
>
    <div
        class="h-full bg-primary transition-all"
        :style="'width: ' + value + '%;'"
    ></div>
</div>
