<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['name' => 'Michael', 'title' => 'Home Page']);
});

Route::get('/posts', function () {
    $posts = [
        [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'slug' => 'judul-artikel-1',
            'author' => 'Bob Will',
            'date'=> '10 June 2025',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum officiis, aut pariatur sunt fugit maiores
            laborum obcaecati, libero debitis porro facilis dolor sint. Quibusdam ipsum eius incidunt est nam
            laboriosam!'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'slug' => 'judul-artikel-2',
            'author' => 'Bopeng',
            'date'=> '15 June 2025',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum officiis, aut pariatur sunt fugit maiores
            laborum obcaecati, libero debitis porro facilis dolor sint. Quibusdam ipsum eius incidunt est nam
            laboriosam!'
        ],
    ];
    return view('posts', ['title' => 'Blog Page', 'posts' => $posts]);
});

// Route::get('/posts/{id}', function($id) {
//      $posts = [
//         [
//             'id' => 1,
//             'title' => 'Judul Artikel 1',
//             'slug' => 'judul-artikel-1',
//             'author' => 'Bob Will',
//             'date'=> '10 June 2025',
//             'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum officiis, aut pariatur sunt fugit maiores
//             laborum obcaecati, libero debitis porro facilis dolor sint. Quibusdam ipsum eius incidunt est nam
//             laboriosam!'
//         ],
//         [
//             'id' => 2,
//             'title' => 'Judul Artikel 2',
//              'slug' => 'judul-artikel-2',
//             'author' => 'Bopeng',
//             'date'=> '15 June 2025',
//             'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum officiis, aut pariatur sunt fugit maiores
//             laborum obcaecati, libero debitis porro facilis dolor sint. Quibusdam ipsum eius incidunt est nam
//             laboriosam!'
//         ],
//     ];
//     $post = Arr::first($posts, function($post) use ($id) {
//         return $post['id'] == $id;
//     });

//     if(!$post) abort(404);

//     return view('post', ['title' => 'Single Post', 'post' => $post]);
// });

Route::get('/posts/{slug}', function($slug) {
     $posts = [
        [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'slug' => 'judul-artikel-1',
            'author' => 'Bob Will',
            'date'=> '10 June 2025',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum officiis, aut pariatur sunt fugit maiores
            laborum obcaecati, libero debitis porro facilis dolor sint. Quibusdam ipsum eius incidunt est nam
            laboriosam!'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
             'slug' => 'judul-artikel-2',
            'author' => 'Bopeng',
            'date'=> '15 June 2025',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum officiis, aut pariatur sunt fugit maiores
            laborum obcaecati, libero debitis porro facilis dolor sint. Quibusdam ipsum eius incidunt est nam
            laboriosam!'
        ],
    ];
    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    if(!$post) abort(404);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
