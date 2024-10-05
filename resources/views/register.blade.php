<x-layout title="register">

    <x-slot:header>
        <h1>This is a Registration Page</h1>
    </x-slot:header>

    <div style="text-align:center; margin-top:auto;">
        <x-form action="{{ route('register') }}">

            <input type="file" name="avatar">


            <x-forms.field label="Name: " type="text" name="name"/>
            <br>

            <x-forms.field label="Email: " type="email" name="email"/>
            <br>

            <x-forms.field label="Password: " type="text" name="password"/>
            <br>

            <x-forms.field label="Confirm Password: " type="text" name="password_confirmation"/>
            <br>

            <x-button label="Save" />
        </x-form>
    </div>

</x-layout>