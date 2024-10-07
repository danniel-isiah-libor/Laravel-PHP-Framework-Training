<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden p-10 shadow-sm sm:rounded-lg mb-5">


                <div class="justify-between sm:flex">
                    <div>
                        <p class="text-xl font-bold text-slate-900">
                            {{ $post->title }}
                        </p>
                        <p class="mt-1 text-xs text-slate-600 font-bold">By {{ $post->user->name }}</p>
                        <p class="mt-1 text-xs font-medium text-slate-600">{{ $post->user->email }}</p>
                    </div>

                    <div class="flex-shrink-0 hidden ml-3 sm:block">

                        <img class="object-cover w-16 h-16 rounded-full shadow-sm"
                            src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png"
                            alt="" />


                    </div>
                </div>

                <div class="mt-4 sm:pr-8">
                    <p class="text-sm text-slate-500">
                        {{ $post->content }}
                    </p>
                </div>

                <dl class="flex mt-6">
                    <div class="flex flex-col-reverse">
                        <dt class="text-sm font-medium text-slate-600">Created</dt>
                        <dd class="text-xs text-slate-500">{{ $post->created_at->diffForHumans() }}</dd>
                    </div>


                </dl>
                @if ($post->user->id == auth()->user()->id)
                    <div class="mt-4 flex">
                        <a class="bg-blue-500 text-white py-1 px-3 rounded me-4"
                            href="{{ route('posts.edit', $post->uuid) }}">Edit</a>
                        <form action="{{ route('posts.destroy', $post->uuid) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="bg-red-600 text-white py-1 px-3 rounded">Delete</button>
                        </form>

                    </div>
                @endif
            </div>

        </div>
    </div>
</x-app-layout>
