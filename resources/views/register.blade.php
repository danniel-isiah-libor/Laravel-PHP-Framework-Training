<x-layout class="container mt-5">
    <h1>This is Registration Page</h1><br>

    <x-quote />

    <h2>User Registration</h2>

    <x-form action="{{ route('register') }}">

        @csrf

        <input type="file" name="avatar">
        <br>
        <x-forms.field label="Name" type="text" name="name" />
        <br>

        <x-forms.field label="Email" type="email" name="email" />
        <br>

        <x-forms.field label="Password" type="password" name="password" />
        <br>

        <x-forms.field label="Confirm Password" type="password" name="password" />
        <br>

        <x-button label="save" />
    </x-form>
</x-layout>
