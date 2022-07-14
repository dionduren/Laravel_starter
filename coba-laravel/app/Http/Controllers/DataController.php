<?php

namespace App\Http\Controllers;

// untuk menangani request, form, dll
use Illuminate\Http\Request;
// menggunakan data dari Model Datas
use App\Models\Datas;

class DataController extends Controller
{
    public function index()
    {
        return view('list', [
            "title" => "Data",
            "datax"  => Datas::latest()->get()
        ]);
    }

    public function show(Datas $data)
    {
        return view(
            'focus',
            [
                "title" => "Data",
                "datax" => $data
            ]
        );
    }
}
