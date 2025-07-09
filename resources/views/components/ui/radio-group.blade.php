@props([
    'name' => 'radio-group',
    'options' => [],
    'selected' => '',
])

<div x-data="{ selected: '{{ $selected }}' }" class="grid gap-2">
    @foreach ($options as $option)
        <label class="inline-flex items-center gap-2 cursor-pointer">
            <input
                type="radio"
                name="{{ $name }}"
                value="{{ $option['value'] }}"
                x-model="selected"
                class="peer sr-only"
            />
            <div
                class="aspect-square h-4 w-4 rounded-full border border-primary ring-offset-background
                        peer-focus-visible:ring-2 peer-focus-visible:ring-ring peer-focus-visible:ring-offset-2
                        peer-disabled:cursor-not-allowed peer-disabled:opacity-50
                        flex items-center justify-center"
                :class="{ 'bg-primary text-white': selected === '{{ $option['value'] }}' }"
            >
                <svg
                    x-show="selected === '{{ $option['value'] }}'"
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-2.5 w-2.5 fill-current text-current"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                >
                    <circle cx="12" cy="12" r="5" />
                </svg>
            </div>
            <span class="text-sm">{{ $option['label'] }}</span>
        </label>
    @endforeach
</div>
