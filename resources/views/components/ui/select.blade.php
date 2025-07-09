@props([
    'options' => [], // ['value' => 'Label']
    'placeholder' => 'Select an option',
    'selected' => null,
    'name' => 'select',
])

<div
    x-data="{
        open: false,
        selected: '{{ $selected ?? '' }}',
        label: '{{ $options[$selected] ?? $placeholder }}',
        choose(value, label) {
            this.selected = value
            this.label = label
            this.open = false
        }
    }"
    x-id="['select']"
    class="relative w-full"
>
    <!-- Trigger -->
    <button
        type="button"
        @click="open = !open"
        :aria-expanded="open"
        :aria-controls="$id('select')"
        class="flex h-10 w-full items-center justify-between rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
    >
        <span x-text="label" class="truncate"></span>
        <svg class="h-4 w-4 opacity-50" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    <!-- Hidden Input -->
    <input type="hidden" :name="name" :value="selected">

    <!-- Dropdown -->
    <div
        x-show="open"
        @click.outside="open = false"
        :id="$id('select')"
        x-transition
        class="absolute z-50 mt-1 w-full max-h-60 overflow-auto rounded-md border bg-popover text-sm shadow-md"
    >
        @foreach ($options as $value => $label)
            <div
                @click="choose('{{ $value }}', '{{ $label }}')"
                :class="{
                    'bg-accent text-accent-foreground': selected === '{{ $value }}'
                }"
                class="cursor-pointer select-none px-4 py-2 hover:bg-accent hover:text-accent-foreground"
            >
                <div class="flex items-center gap-2">
                    <span class="flex-1">{{ $label }}</span>
                    <template x-if="selected === '{{ $value }}'">
                        <svg class="h-4 w-4 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                    </template>
                </div>
            </div>
        @endforeach
    </div>
</div>
