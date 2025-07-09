@props(['items'])

<div x-data="{ selected: null }" class="w-full border border-gray-200 rounded-md divide-y divide-gray-200">
    @foreach ($items as $index => $item)
        <div class="border-b">
            <button 
                @click="selected === {{ $index }} ? selected = null : selected = {{ $index }}"
                class="flex w-full items-center justify-between py-4 px-4 font-medium transition-all hover:underline"
            >
                <span>{{ $item['title'] }}</span>
                <svg 
                    xmlns="http://www.w3.org/2000/svg" 
                    class="h-4 w-4 shrink-0 transition-transform duration-200"
                    :class="{ 'rotate-180': selected === {{ $index }} }" 
                    fill="none" 
                    viewBox="0 0 24 24" 
                    stroke="currentColor"
                >
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </button>
            <div 
                x-show="selected === {{ $index }}" 
                x-collapse 
                class="px-4 pb-4 text-sm transition-all"
            >
                {!! $item['content'] !!}
            </div>
        </div>
    @endforeach
</div>
