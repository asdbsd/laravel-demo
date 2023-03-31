@props(['comment'])

<article class="flex bg-gray-100 p-6 rounded-xl space-x-4">
    <div class="mt-2 flex-shrink-0" width="72">
        <a href="#">
            <img class="rounded-xl" src="https://i.pravatar.cc/72?u={{ $comment->author->id }}" alt="profile-image">
        </a>
    </div>

    <div>
        <header>
            <a href="#">
                <h3 class="font-bold">{{ $comment->author->name }}</h3>
            </a>
            <p class="text-xs text-gray-400">Posted <time> {{ $comment->created_at->diffForHumans() }}</time></p>
        </header>

        <p class="mt-4">
            {{ $comment->body }}
        </p>
    </div>
</article>
