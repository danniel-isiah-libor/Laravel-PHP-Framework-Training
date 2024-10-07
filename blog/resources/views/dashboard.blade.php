<x-app-layout>



    <div class="bg-white py-12 sm:py-12">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto mb-12 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            @foreach ($data as $post)
            <article class="flex max-w-xl flex-col items-start justify-between">
                <div class="flex items-center gap-x-4 text-xs">
                <time datetime="2020-03-16" class="text-gray-500">{{ $post->created_at->diffForHumans() }}</time>
                <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                </div>
                <div class="group relative">
                <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                    <a href="{{ route('posts.show', $post->id) }}">
                    <span class="absolute inset-0"></span>
                    {{ $post->title }}
                    </a>
                </h3>
                <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">{{ $post->body }}</p>
                </div>
                <div class="relative mt-8 flex items-center gap-x-4">
                <img src="{{ asset('storage/'. $post->user->avatar) }}" alt="" class="h-10 w-10 rounded-full bg-gray-50">
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


        <!-- More posts... -->
        </div>

        {{ $data->links() }}

    </div>
</div>

</x-app-layout>
