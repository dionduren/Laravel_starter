<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/admin', function () {
    return view('admin', [
        "title" => "Admin",
        "name" => "Dion Alamsah",
        "hp" => "085220440394",
        "email" => "dion.alamsah@pupuk-indonesia.com",
        "image" => "img/logo.png"
    ]);
});

Route::get('/user', function () {

    $dashboard_data = [
        [
            "title" => "Dashboard Admin",
            "slug"  => "dashboard-admin",
            "author" => "Admin",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente inventore eos quis, error ad odio nemo aut molestias quaerat deleniti. Ullam ducimus harum, ipsa saepe accusamus rem at est voluptas excepturi dolor suscipit blanditiis inventore quis sequi soluta vitae nobis mollitia maxime sunt amet. Numquam porro consequatur dolore ut dolores pariatur cupiditate quidem. Explicabo et, in sunt molestiae sint quae temporibus, enim iure illum blanditiis alias laudantium quam mollitia odit voluptas distinctio, ducimus voluptatem sed possimus cupiditate tempora minus vel?"
        ],
        [
            "title" => "Dashboard User",
            "slug"  => "dashboard-user",
            "author" => "User",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente inventore eos quis, error ad odio nemo aut molestias quaerat deleniti. Ullam ducimus harum, ipsa saepe accusamus rem at est voluptas excepturi dolor suscipit blanditiis inventore quis sequi soluta vitae nobis mollitia maxime sunt amet. Numquam porro consequatur dolore ut dolores pariatur cupiditate quidem. Explicabo et, in sunt molestiae sint quae temporibus, enim iure illum blanditiis alias laudantium quam mollitia odit voluptas distinctio, ducimus voluptatem sed possimus cupiditate tempora minus vel?"
        ]
    ];

    return view('User', [
        "title" => "User",
        "data"  => $dashboard_data
    ]);
});

// Halaman single post
Route::get('user/{slug}', function ($slug) {

    $dashboard_data = [
        [
            "title" => "Dashboard Admin",
            "slug"  => "dashboard-admin",
            "author" => "Admin",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente inventore eos quis, error ad odio nemo aut molestias quaerat deleniti. Ullam ducimus harum, ipsa saepe accusamus rem at est voluptas excepturi dolor suscipit blanditiis inventore quis sequi soluta vitae nobis mollitia maxime sunt amet. Numquam porro consequatur dolore ut dolores pariatur cupiditate quidem. Explicabo et, in sunt molestiae sint quae temporibus, enim iure illum blanditiis alias laudantium quam mollitia odit voluptas distinctio, ducimus voluptatem sed possimus cupiditate tempora minus vel?"
        ],
        [
            "title" => "Dashboard User",
            "slug"  => "dashboard-user",
            "author" => "User",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente inventore eos quis, error ad odio nemo aut molestias quaerat deleniti. Ullam ducimus harum, ipsa saepe accusamus rem at est voluptas excepturi dolor suscipit blanditiis inventore quis sequi soluta vitae nobis mollitia maxime sunt amet. Numquam porro consequatur dolore ut dolores pariatur cupiditate quidem. Explicabo et, in sunt molestiae sint quae temporibus, enim iure illum blanditiis alias laudantium quam mollitia odit voluptas distinctio, ducimus voluptatem sed possimus cupiditate tempora minus vel? asd"
        ]
    ];

    $new_data = [];
    foreach ($dashboard_data as $file) {
        if ($file["slug"] === $slug) {
            $new_data = $file;
        }
    }

    return view(
        'data',
        [
            "title" => "Single Data",
            "data" => $new_data
        ]
    );
});
