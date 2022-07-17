<?php

namespace App\Http\Controllers;

// untuk menangani request, form, dll

use App\Models\Category;
use Illuminate\Http\Request;
// menggunakan data dari Model Datas
use App\Models\Data;
use App\Models\User;

class DataController extends Controller
{
    public function index()
    {

        $title  = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('list', [
            "title" => "All Post" . $title,
            "datax"  => Data::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Data $data)
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
