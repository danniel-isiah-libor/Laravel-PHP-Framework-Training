<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Show Post') }}
        </h2>
    </x-slot>


    <div class="bg-white py-24 sm:py-32">

    

        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            {{$data -> title}}

            <br>
            {{$data -> body}}
        </div>


            <a href="{{route('posts.edit', $data -> uuid)}}" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update Post</a>
            
            <form action="{{route('posts.destroy', $data->uuid)}}" method="POST">
                @method ('DELETE')
                @csrf
            <button type="submit" class="block w-full rounded-md bg-red-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Delete Post</button>
            </form>

    </div>

</x-app-layout>
