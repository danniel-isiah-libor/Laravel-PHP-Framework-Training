<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class=" w-3/4 mx-auto bg-white sm:py-10 lg:px-2">
            <div class="mx-auto ">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl mb-3">Create Post</h2>


                <x-posts.form action="{{ route('posts.store') }}" />
            </div>
        </div>
    </div>
</x-app-layout>
