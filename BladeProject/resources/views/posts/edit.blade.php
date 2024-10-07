
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Update Post') }}
        </h2>
    </x-slot>

    
    <x-posts.form action="{{route('posts.update', $data ->uuid)}}" :isEdit="true" :data="$data">

    </x-posts.form>
</x-app-layout>