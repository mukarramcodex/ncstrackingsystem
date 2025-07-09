@props(['name' => null, 'class' => '', 'value' => null])

<div>
    {{ $slot }}
    
    @if($name)
        @error($name)
            <input type="hidden" class="is-invalid">
        @enderror
    @endif
</div>