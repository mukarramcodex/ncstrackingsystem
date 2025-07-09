<button 
    {{ $attributes->merge(['class' => 'absolute right-2 top-2 rounded-md p-1 text-foreground/50 hover:text-foreground focus:outline-none focus:ring-2 focus:ring-offset-2']) }}
    @click="$dispatch('toast-close', { id: '{{ $id }}' })"
>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <line x1="18" y1="6" x2="6" y2="18"></line>
        <line x1="6" y1="6" x2="18" y2="18"></line>
    </svg>
</button>