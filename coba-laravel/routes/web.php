<?php
//untuk [DataController::class, 'index']
use App\Http\Controllers\DataController;
//untuk datas:all();
use App\Models\Datas;
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

Route::get(
    // path website yang dituju
    '/',
    // ini adalah closures
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

/*
Route::get('/user', function () {
    return view('User', [
        "title" => "User",
        "data"  => Datas::all()
    ]);
});
*/

//Halaman Post - tutorial upnas
Route::get('/user', [DataController::class, 'index']);

// Halaman single post - tutorial unpas
Route::get('user/{slug}', [DataController::class, 'show']);

/* Route::get('user/{slug}', function ($slug) {
    return view(
        'data',
        [
            "title" => "Single Data",
            "data" => Datas::find($slug)
        ]
    );
});
*/
