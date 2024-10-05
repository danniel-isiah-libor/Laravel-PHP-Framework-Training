<x-layout title="Login Page">
    <h1> This is my login Page </h1>


    <x-form action="{{ route('login') }}">


        <x-forms.field label="Email" type="email" name="email" />
        <br>

        <x-forms.field label="Password" type="password" name="password" />
        <br>


        <x-button label="Login" />
    </x-form>

</x-layout>
