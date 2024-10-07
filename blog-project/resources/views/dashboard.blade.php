<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-24 bg-white sm:py-32">
        <div class="px-6 mx-auto max-w-7xl lg:px-8">
            <div
                class="grid max-w-2xl grid-cols-1 pt-10 mx-auto border-t border-gray-200 gap-x-8 gap-y-16 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">

                @foreach ($data as $post)
                    <article class="flex flex-col items-start justify-between max-w-xl">
                        <div class="flex items-center text-xs gap-x-4">
                            <time datetime="2020-03-16"
                                class="text-gray-500">{{ $post->created_at->diffForHumans() }}</time>
                        </div>
                        <div class="relative group">
                            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                <a href="{{ route('posts.show', $post->uuid) }}">
                                    <span class="absolute inset-0"></span>
                                    {{ $post->title }}
                                </a>
                            </h3>
                            <p class="mt-5 text-sm leading-6 text-gray-600 line-clamp-3">
                                {{ $post->body }}
                            </p>
                        </div>
                        <div class="relative flex items-center mt-8 gap-x-4">
                            <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="" class="w-10 h-10 rounded-full bg-gray-50">
                            <div class="text-sm leading-6">
                                <p class="font-semibold text-gray-900">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        {{ $post->user->name }}
                                    </a>
                                </p>
                                <p class="text-gray-600">{{ $post->user->email }}</p>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            <br>

            {{ $data->links() }}
        </div>
    </div>
</x-app-layout>
