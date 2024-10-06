<x-layout title="Register Page">
    <x-slot:header>
        <h1>This is registration page!</h1>

        <x-quote />
    </x-slot:header>

    <x-form action="{{ route('register') }}">
        <input type="file" name="avatar">

        <x-forms.field label="Name" type="text" name="name" />

        <br>

        <x-forms.field label="Email" type="email" name="email" />

        <br>

        <x-forms.field label="Password" type="password" name="password" />

        <br>

        <x-forms.field label="Confirm Password" type="password" name="password_confirmation" />

        <br>

        <x-button label="Save" />
        </x-forms.field>
</x-layout>
