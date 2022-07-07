<?php

namespace App\Http\Controllers;

// untuk menangani request, form, dll
use Illuminate\Http\Request;
// menggunakan data dari Model Datas
use App\Models\Datas;

class DataController extends Controller
{
    // method controller yang digunakan/dipanggil di web.php
    public function index()
    {
        return view('User', [
            "title" => "User",
            "data"  => Datas::all()
        ]);
    }

    public function show($slug)
    {
        return view(
            'data',
            [
                "title" => "Single Data",
                "data" => Datas::find($slug)
            ]
        );
    }
}
