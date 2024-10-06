<x-layout title="login">

    <x-slot:header>
        <h1>This is login page</h1>
    </x-slot:header>
    <div style="text-align:center; margin-top:auto;">

        <x-form action="{{ route('authenticate') }}">

            <x-forms.field label="Email: " type="email" name="email"/>
            <br>

            <x-forms.field label="Password: " type="text" name="password"/>
            <br>

            <x-button label="Login" />
        </x-form>
    </div>

</x-layout>
