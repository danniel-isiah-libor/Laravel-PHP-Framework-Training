<x-layout title="Login Page">
    <x-slot:header>
        <h1>This is login page!</h1>
    </x-slot:header>

    <x-form action="{{ route('authenticate') }}">
        <x-forms.field label="Email" type="email" name="email" />

        <br>

        <x-forms.field label="Password" type="password" name="password" />

        <br>

        <x-button label="Login" />
        </x-forms.field>
</x-layout>
