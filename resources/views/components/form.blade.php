<form action="{{ $action }}" method="POST"  style="text-align: center">
    @csrf
    {{ $slot }}
</form>
