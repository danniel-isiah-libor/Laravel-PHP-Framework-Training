@props(['action'])
<form class="form-control" action="{{ $action}}" method="POST">
        @csrf
    
        {{ $slot }}
</form>