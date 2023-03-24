<x-layout>
    <h1>{!! $post->title !!}</h1>
    <div>
        By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
    </div>
    <hr>
    <p>{!! $post->body !!}</p>
    <a href="/">Back</a>
</x-layout>