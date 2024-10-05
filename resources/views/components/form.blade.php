@props(['action'])

<form action="{{$action}}" method="POST" class="form-group" enctype="multipart/form-data">
    @csrf

    {{ $slot }}
</form>