<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/posts/{post}', [PostController::class, 'show']);

Route::post('/posts/{post}/comment', [PostCommentController::class, 'store']);

Route::post('/subscribe', NewsletterController::class);

// Route::get('/categories/{category}', function(Category $category) {
//     return view('posts', [
//         'posts' =>  $category->posts,
//         'currentCategory'=> $category,  
//         'categories' => Category::all()
//     ]);
// });

// Route::get('/authors/{author}', function(User $author) {
//     return view('posts.index', ['posts' => $author->posts]);
// });

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware(('guest'));


Route::post('logout', [SessionsController::class, 'destroy'])->middleware(('auth'));

Route::middleware('can:admin', function() {
    Route::get('/admin/posts/', [AdminPostController::class, 'index']);
    Route::post('/admin/posts', [AdminPostController::class, 'store']);
    Route::get('/admin/posts/create', [AdminPostController::class, 'create']);
    Route::get('/admin/posts/{post}/edit', [AdminPostController::class, 'edit']);
    Route::patch('/admin/posts/{post}', [AdminPostController::class, 'update']);
    Route::delete('/admin/posts/{post}', [AdminPostController::class, 'destroy']);
});



