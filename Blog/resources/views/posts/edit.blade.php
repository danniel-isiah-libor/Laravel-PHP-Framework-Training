<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg mb-5">


                <div class="justify-between w-full">
                    <x-posts.form action="{{ route('posts.update', $post->uuid) }}" :isEdit="true"
                        :post="$post" />

                </div>



            </div>

        </div>
    </div>
</x-app-layout>
