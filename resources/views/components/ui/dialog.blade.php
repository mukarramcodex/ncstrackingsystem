@props(['show' => false])

<div x-data="{ show: @json($show) }" x-show="show" class="fixed inset-0 z-50">
    {{ $slot }}
</div>