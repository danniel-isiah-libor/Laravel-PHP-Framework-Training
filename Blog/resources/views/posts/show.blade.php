<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @if (auth()->user()->id === $data->user_id)
            <a href="{{ route('posts.edit', $data->uuid) }}"
                class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update
                Post</a>

            <form action="{{ route('posts.destroy', $data->uuid) }}" method="POST">
                @method('DELETE')
                @csrf

                <button type="submit"
                    class="rounded-md bg-red-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Delete
                    Post</button>
            </form>
        @endif

        <br>
        <br>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            Title: {{ $data->title }}

            <br>

            Body: {{ $data->body }}

            <br>

            Author: {{ $data->user->name }} | {{ $data->user->email }}
        </div>
    </div>
</x-app-layout>
