<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-posts.form action="{{ route('posts.update', $data->uuid) }}" :isEdit="true" :data="$data" />
        </div>
    </div>
</x-app-layout>
