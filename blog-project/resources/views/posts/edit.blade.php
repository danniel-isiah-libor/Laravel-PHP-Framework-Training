<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Update Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <x-posts.form action="{{ route('posts.update', $data->uuid) }}" :isEdit="true" :data="$data" />
        </div>
    </div>
</x-app-layout>
