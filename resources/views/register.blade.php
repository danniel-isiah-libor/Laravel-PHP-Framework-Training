<x-layout title="Register Page">
        <div class="card container mt-5"  style="width: 30rem;">
            <h2 class="text-center mt-5 mb-5">This is registration page!</h2>

        {{-- <x-quote /> --}}

    <x-form action="{{ route('register') }}">
            <x-forms.field label="Name" type="text" name="name" />

            <br>

            <x-forms.field label="Email" type="email" name="email" />

            <br>

            <x-forms.field type="password" label="Password" name="password" />

            <br>

            <x-forms.field type="password" label="Confirm Password"  name="password_confirmation" />
            <br>

            <input type="file" name="avatar">
            <br>
            <br>

            <x-button label="Save" />
            </x-forms.field>
        </div>
</x-layout>
