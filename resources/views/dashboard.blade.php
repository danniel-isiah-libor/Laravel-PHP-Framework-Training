<div>
    {{auth() ->user()->email}}

    <a href="{{route('logout')}}">Log out</a>

       <a href="{{route('deactivate')}}">Deactivate</a>
</div>
