<x-layout title="Dashboard">
    {{ auth()->user()->email }}

    <a href="{{ route('logout') }}">Logout</a>
</x-layout>
