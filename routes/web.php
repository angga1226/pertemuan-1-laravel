<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});
Route::get('about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Herlangga",
        "email" => "herlangga@gmail.com",
        "image" => "angga.jpg"
    ]);
});

Route::get('/blog', function() {
    $blog_posts = [
        [
            "title" => "Judul post pertama",
            "slug" => "judul-post-pertama",
            "penulis" => "Herlangga Djohan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt voluptates ratione explicabo libero facere dignissimos quas corrupti? Quia, voluptatum quam maiores cupiditate ducimus voluptas! In tempore error quas eos dignissimos repudiandae cupiditate consectetur, dicta natus consequuntur saepe magni laborum nulla libero perspiciatis! Dolore libero blanditiis in doloremque? Dolorum dolorem deserunt eaque eveniet cum praesentium dicta fugiat nobis quisquam. Laboriosam, doloribus magnam? Minima, illum autem. Ipsam, aliquam! Id recusandae repudiandae ipsa. Cum fuga officiis debitis, nulla reprehenderit assumenda ad? Qui, voluptate."
        ],
        [
            "title" => "Judul post kedua",
            "slug" => "judul-post-kedua",
            "penulis" => "Haya Nussy",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus distinctio voluptas error laboriosam tenetur modi odit recusandae quasi exercitationem laudantium quidem, vero aliquid, numquam doloribus deserunt. Et atque, doloribus laudantium maxime iure praesentium. Pariatur facere exercitationem culpa odio aut, provident illo quidem quos quasi itaque aperiam, quibusdam autem nisi nostrum deleniti laboriosam assumenda consequuntur voluptas neque iste obcaecati recusandae rerum! Eum neque, dolorum facere magnam adipisci velit facilis sequi iusto totam vero qui fuga laborum exercitationem eligendi enim reprehenderit doloribus quas sapiente? Quod iure nobis omnis sed modi saepe id officiis ut. Sed tempora recusandae quam odio, quaerat ex quis?"
        ]
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul post pertama",
            "slug" => "judul-post-pertama",
            "penulis" => "Herlangga Djohan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt voluptates ratione explicabo libero facere dignissimos quas corrupti? Quia, voluptatum quam maiores cupiditate ducimus voluptas! In tempore error quas eos dignissimos repudiandae cupiditate consectetur, dicta natus consequuntur saepe magni laborum nulla libero perspiciatis! Dolore libero blanditiis in doloremque? Dolorum dolorem deserunt eaque eveniet cum praesentium dicta fugiat nobis quisquam. Laboriosam, doloribus magnam? Minima, illum autem. Ipsam, aliquam! Id recusandae repudiandae ipsa. Cum fuga officiis debitis, nulla reprehenderit assumenda ad? Qui, voluptate."
        ],
        [
            "title" => "Judul post kedua",
            "slug" => "judul-post-kedua",
            "penulis" => "Haya Nussy",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus distinctio voluptas error laboriosam tenetur modi odit recusandae quasi exercitationem laudantium quidem, vero aliquid, numquam doloribus deserunt. Et atque, doloribus laudantium maxime iure praesentium. Pariatur facere exercitationem culpa odio aut, provident illo quidem quos quasi itaque aperiam, quibusdam autem nisi nostrum deleniti laboriosam assumenda consequuntur voluptas neque iste obcaecati recusandae rerum! Eum neque, dolorum facere magnam adipisci velit facilis sequi iusto totam vero qui fuga laborum exercitationem eligendi enim reprehenderit doloribus quas sapiente? Quod iure nobis omnis sed modi saepe id officiis ut. Sed tempora recusandae quam odio, quaerat ex quis?"
        ]
    ];


    $new_post = [];
    foreach ($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Posts",
        "post" => $new_post
    ]); 
});