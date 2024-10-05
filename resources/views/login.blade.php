<x-layout title="Login Page">
<div class="card container mt-5"  style="width: 30rem;">
    <h2 class="text-center mt-5 mb-5">This is login page!</h2>

<x-form action="{{ route('authenticate') }}">
    <x-forms.field label="Email" type="email" name="email" />
    <br>
    <x-forms.field label="Password" type="password" name="password" />
    <br>
    <x-button label="Login" />
    </x-forms.field>
</div>
</x-layout>
