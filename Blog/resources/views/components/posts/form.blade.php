@props(['action', 'isEdit' => false, 'post' => null])

<form action="{{ $action }}" method="POST">
    @if ($isEdit)
        @method('PUT')
    @endif
    @csrf


    <div>
        <x-input-label class="mb-1">Title</x-input-label>
        <x-text-input class="w-full mb-3" value="{{ $post->title ?? old('title') }}" name="title" required/>
        @error('title')
            <div class="mt-2 text-red-500">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <x-input-label class="mb-1">Content</x-input-label>
        <textarea name="content" id="content" rows="4" required
            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ $post->content ?? old('content') }}</textarea>
        @error('content')
            <div class="mt-2 text-red-500">{{ $message }}</div>
        @enderror
    </div>
    <div class="mt-4">
        <x-primary-button type="submit">Submit</x-primary-button>
    </div>

    {{-- @if (optional($post)->user->id == auth()->user()->id)
        <div class="mt-4">
            <x-primary-button type="submit">Update</x-primary-button>
        </div>
    @endif --}}

</form>
