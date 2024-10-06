<x-layout title="Register" class="container">
    <x-slot:header>
        <h1>This is Register page!</h1>
    </x-slot:header>
    {{-- <x-qoute /> --}}
    <x-form class="mt-4" action="{{ route('register') }}" method="POST">
        <div class="mb-4">
            <label for="file">Avatar</label>
            <input class="form-control" type="file" id="file" name="avatar" />
        </div>
        <div class="mb-4">
            <x-forms.field label="Name" type="text" name="name" />
        </div>
        <div class="mb-4">
            <x-forms.field label="Email" type="email" name="email" />
        </div>
        <div class="mb-4">
            <x-forms.field label="Password" type="password" name="password" />
        </div>
        <div class="mb-4">
            <x-forms.field label="Confirm Password" type="password" name="password_confirmation" />
        </div>
        <div class="mb-4">
            <x-button label="Save" type="submit" />
        </div>
    </x-form>
</x-layout>
