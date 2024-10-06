<div>
    {{ auth()->user()->email }}
    <!-- {{ Auth::user() }} -->
    <a href="{{route('logout')}}">Logout</a>

    <br>

    <a href="{{ route('deactivate') }}">Deactivate</a>
</div>
