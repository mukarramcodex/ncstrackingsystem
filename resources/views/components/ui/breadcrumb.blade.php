@props([
    'items' => [],
])

<nav class="flex text-sm text-gray-500 mb-4" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
        {{-- <li>
            <a href="{{ url('/') }}" class="inline-flex items-center text-gray-500 hover:text-gray-700">
                <svg class="w-4 h-4 mr-1.5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 2L2 10h3v6h4v-4h2v4h4v-6h3L10 2z" />
                </svg>
                Home
            </a>
        </li> --}}
        @foreach ($items as $item)
            <li class="inline-flex items-center">
                <svg class="w-4 h-4 mx-2 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M7.05 4.05a.5.5 0 01.7 0L12 8.293l-4.24 4.243a.5.5 0 01-.707-.707L10.586 9 7.05 5.464a.5.5 0 010-.707z" />
                </svg>
                @if (isset($item['url']))
                    <a href="{{ $item['url'] }}" class="text-gray-500 hover:text-gray-700">
                        {{ $item['label'] }}
                    </a>
                @else
                    <span class="text-gray-400">{{ $item['label'] }}</span>
                @endif
            </li>
        @endforeach
    </ol>
</nav>
