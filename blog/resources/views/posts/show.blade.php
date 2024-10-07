<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Show Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if(auth()->user()->id === $data->user_id);
            <a href="{{ route('posts.edit', $data->id) }}" class="rounded-md bg-blue-700 px-3.5 py-2.5 text-white">Update Post</a>

            <form action="{{ route('posts.destroy', $data->id) }}" method="POST">
                @method('DELETE')
                @csrf

                <button type="submit" class="rounded-md bg-red-700 px-3.5 py-2.5 text-white">Delete Post</button>
            </form>
        @endif




        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            Title: {{ $data->title }};

            <br>

            Body: {{ $data->body }};

            <br>

            Author: {{ $data->user->name }} | {{ $data->user->email }};
        </div>
    </div>
</x-app-layout>
