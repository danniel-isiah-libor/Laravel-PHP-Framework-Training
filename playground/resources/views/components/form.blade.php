@props(['class', 'action', 'method'])
<form class="col-5 mx-auto border border-opacity-15 p-4 rounded {{ $class }}" action="{{ $action }}"
    method="{{ $method }}" enctype="multipart/form-data">
    @csrf
    {{ $slot }}
</form>
