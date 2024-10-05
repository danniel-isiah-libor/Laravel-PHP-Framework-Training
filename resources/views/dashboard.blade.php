<div>
    {{ auth()->user()->email }}
    <!-- {{ Auth::user() }} -->
    <a href="{{route('logout')}}">Logout</a>
</div>
