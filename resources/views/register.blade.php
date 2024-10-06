<x-layout title="Register">

    <div style="text-align:center;">
        <h1>This is registration page</h1>

        <x-quote/>


        <x-form action="{{route('register')}}">

          
            <x-forms.field label="Name" type="text" name="name"/>

            <x-forms.field label="Email" type="text" name="email"/>
            
            <x-forms.field label="Password" type="password" name="password"/>

            <x-forms.field label="Confirm Password" type="text" name="password_confirmation"/>

            <x-button label="Save"/>
        </x-form>
    </div>
</x-layout>

