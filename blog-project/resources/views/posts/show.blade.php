<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Show Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                {{ $data->title }}

                <br>
                <br>

                {{ $data->body }}
            </div>
        @if (auth()->user()->id === $data->user_id)
            <a href="{{ route('posts.edit', $data->uuid) }}">Update Post</a>
            <form action="{{ route('posts.destroy', $data->uuid) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit">Delete Post</button>
            </form>
        @endif
    </div>


</x-app-layout>
