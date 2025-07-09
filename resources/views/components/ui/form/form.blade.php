@props(['method' => 'POST', 'action' => '', 'model' => null])

<form 
    method="{{ strtoupper($method) === 'GET' ? 'GET' : 'POST' }}"
    action="{{ $action }}"
    {{ $attributes }}
>
    @unless(in_array(strtoupper($method), ['GET', 'POST']))
        @method($method)
    @endunless

    @csrf
    
    @if($model)
        @method('PUT')
    @endif

    {{ $slot }}
</form>