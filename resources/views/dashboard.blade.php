<div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->


    {{ auth()->user()->email }}
    {{-- {{ Auth::user() }} --}}

    <a href="{{ route('logout') }}">Logout</a>

    <br>

    <a href="{{ route('login') }}">Deactivate</a>
</div>