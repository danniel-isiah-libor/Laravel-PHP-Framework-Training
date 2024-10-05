<x-layout title="Login">
<div style="text-align:center;">

    <x-slot:header>
        <div>This is login Page</div>


    </x-slot:header>
    
    <x-quote/>
    
    <x-form action="{{route('authenticate')}}">

        <x-forms.field label="Email" type="text" name="email"/>

        <x-forms.field label="Password" type="password" name="password"/>

        <x-button label="Login"/>
    </x-form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</x-layout>

