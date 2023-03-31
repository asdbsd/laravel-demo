<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{
    public function index()
    {
        return view('admin.posts.index', [
            'posts' => Post::paginate(50)
        ]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store()
    {
        $attributes = array_merge($this->validatePost(), [
            $attributes['user_id'] = auth()->id(),
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails')
        ]);

        Post::create($attributes);
        return redirect('/');
    }

    public function edit(Post $post)
    {
        // dd($post);
        return view('admin.posts.edit', [
            'post' => $post
        ]);
    }

    public function update(Post $post) {

        $attributes = $this->validatePost();

        if($attributes['thumbnail'] ?? false) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $post->update($attributes);
        return back()->with('success', $post->title . ' has been updated!');
    }

    public function destroy(Post $post) {
        $post->delete();
        return back()->with('success', 'Post has been successfully deleted');
    }

    protected function validatePost(?Post $post = null): array
    {
        $post ??= new Post();

        return request()->validate([
            'title' => 'required',
            'thumbnail' => $post->exists ? ['image'] : ['required', 'image'],
            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post->id)],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);
    }
}