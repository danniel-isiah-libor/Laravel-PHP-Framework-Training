<form class="form-control" action="{{ route('register') }}" method="POST">
    @csrf

    {{ $slot }}
</form>
