<x-layout title="Login">

    <x-slot:header>
        <h1>This is Login page!</h1>
    </x-slot:header>
    <x-form action="{{ route('authenticate') }}" method="POST" class="">
        <div class="mb-4">
            <x-forms.field label="Email" type="email" name="email" />
        </div>
        <div class="mb-4">
            <x-forms.field label="Password" type="password" name="password" />
        </div>
        <div>
            <x-button label="Login" type="submit" />
        </div>
    </x-form>
</x-layout>
