<x-layout title="Dashboard">
    {{ auth()->user()->email }}

    <a href="{{ route('logout') }}">Logout</a>
    <a href="{{ route('deactivate') }}">Deactivate</a>
</x-layout>
