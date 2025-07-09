@props(['toasts' => []])
@php
    // This would typically come from your Laravel session or Livewire component
    $toasts = session('toasts', []);
@endphp

<div x-data="{
        toasts: @json($toasts),
        removeToast(id) {
            this.toasts = this.toasts.filter(t => t.id !== id)
        }
    }"
    class="fixed inset-0 flex flex-col items-end justify-start p-4 pointer-events-none z-[100]"
>
    <template x-for="toast in toasts" :key="toast.id">
        <x-toast :id="toast.id" :type="toast.type" :duration="toast.duration">
            <div class="grid gap-1">
                <x-toast-title x-text="toast.title" x-show="toast.title" />
                <x-toast-description x-text="toast.description" x-show="toast.description" />
            </div>
            <x-toast-close @click="removeToast(toast.id)" />
        </x-toast>
    </template>
</div>