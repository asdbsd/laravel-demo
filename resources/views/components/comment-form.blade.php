@props(['postSlug'])

<form method="POST" action="/posts/{{ $postSlug }}/comment" class="p-2 rounded-xl">
    @csrf

    <header class="flex items-center space-x-2">
        <img class="rounded-full" src="https://i.pravatar.cc/40?u={{ auth()->id() }}" alt="profile-image">
        <h2>Leave a comment:</h2>
    </header>


    <textarea rows="5" class="w-full border border-gray-300 rounded-xl mt-2 p-2 text-sm" type="text" id="body" name="body" placeholder="Leave your comment here..." required></textarea>
    @error('body')
        <span class="text-red-500 text-xs text-semibold">{{ $message }}</span>
    @enderror

    <div class="text-right">
        <button type="submit" class="bg-green-400 py-2 px-4 rounded-xl text-white text-sm hover:bg-green-600">Add Comment</button>
    </div>
</form>
