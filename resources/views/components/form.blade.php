<form action="{{ $action }}" method="POST"  enctype="multipart/form-data">
    @csrf
    {{ $slot }}
</form>
