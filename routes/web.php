<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', ['name' => 'Michael', 'title' => 'Home Page']);
});

Route::get('/posts', function () {
    $posts = Post::all();
    return view('posts', ['title' => 'Blog Page', 'posts' => $posts]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

// Route::get('/posts/{slug}', function ($slug) {
//     $post = Post::find($slug);
//     return view('post', ['title' => 'Single Post', 'post' => $post]);
// });

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', ['title' => count($user->posts) . ' Article by. ' . $user->name, 'posts' => $user->posts]);
});
