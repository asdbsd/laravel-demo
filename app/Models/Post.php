<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'thumbnail', 'slug', 'excerpt', 'body', 'published_at', 'category_id', 'user_id'];
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {

        // Search Post Queries

        // if ($filters['search'] ?? false) {
        //     $query
        //         ->where('title', 'like', '%' . request('search') . '%')
        //         ->orWhere('body', 'like', '%' . request('search') . '%');
        // }

        $query
            ->when($filters['search'] ?? false, fn ($query, $search) =>
            $query->where(fn ($query) =>
                $query
                    ->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%')));


        // Search Posts Categories Queries

        // $query
        //     ->when(
        //         $filters['category'] ?? false,
        //         fn ($query, $category) =>
        //         $query
        //             ->whereExists(fn ($query) =>
        //             $query->from('categories')
        //                 ->whereColumn('categories.id', 'posts.category_id')
        //                 ->where('categories.slug', $category))
        //     );

        $query
            ->when(
                $filters['category'] ?? false,
                fn ($query, $category) =>
                $query->whereHas('category', fn ($query) => $query->where('slug', $category))
            );

        $query
            ->when(
                $filters['author'] ?? false,
                fn ($query, $author) =>
                $query->whereHas('author', fn ($query) => $query->where('username', $author))
            );
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category()
    {
        // hasOne, hasMany, belongsTo, belongsToMany
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
