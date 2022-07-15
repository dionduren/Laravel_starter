<?php
//untuk [DataController::class, 'index']

//untuk datas:all();
use Illuminate\Support\Facades\Route;
//untuk category
use App\Http\Controllers\DataController;
//untuk User
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;



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

Route::get(
    '/',
    function () {
        return view('home', [
            "title" => "Home"
        ]);
    }
);

Route::get('/admin', function () {
    return view('admin', [
        "title" => "Admin",
        "name" => "Dion Alamsah",
        "hp" => "085220440394",
        "email" => "dion.alamsah@pupuk-indonesia.com",
        "image" => "img/logo.png"
    ]);
});

Route::get('/data', [DataController::class, 'index']);
Route::get('/data/{data:slug}', [DataController::class, 'show']);

Route::get('/categories', [CategoryController::class, 'index']);
// Route::get('/categories/{category:slug}', [CategoryController::class, 'show']); 

Route::get('/authors', [AuthorController::class, 'index']);
// Route::get('/authors/{author:username}', [AuthorController::class, 'show']);

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);
