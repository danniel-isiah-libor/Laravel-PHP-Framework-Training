<div>
    {{auth() ->user()->email}}

    <a href="{{route('logout')}}">Log out</a>
</div>
