<?php

namespace App\Http\Controllers;

// untuk menangani request, form, dll
use Illuminate\Http\Request;
// menggunakan data dari Model Datas
use App\Models\Category;

class CategoryController extends Controller
{
    // method controller yang digunakan/dipanggil di web.php
    public function index()
    {
        return view('categorylist', [
            "title" => "Category",
            "categoryx"  => Category::all()
        ]);
    }

    //Menggunakan model 'Datas', otomatis melakukan pencarian sesuai dengan data yang dikirimkan dari routes
    // variabel yang dikirim berasal dari potongan site di routes '/user/{data:slug}'
    public function show(Category $categoryx)
    {
        return view(
            'data',
            [
                "title" => "Single Category",
                // "data" => Datas::find($slug),
                "categoryx" => $categoryx
            ]
        );
    }
}
