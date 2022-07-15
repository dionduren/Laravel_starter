<?php

namespace App\Http\Controllers;

// untuk menangani request, form, dll

use App\Models\Category;
use Illuminate\Http\Request;
// menggunakan data dari Model Datas
use App\Models\Datas;
use App\Models\User;

class DataController extends Controller
{
    public function index()
    {
        // dd(request('search'));

        // $datas = Datas::latest();

        // // kalau ada search, mengganti query dengan if ini
        // if (request('search')) {
        //     $datas->where('title', 'like', '%' . request('search') . '%')
        //         ->orWhere('body', 'like', '%' . request('search') . '%');
        // }
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
            // "datax"  => Datas::with(['author', 'category'])->latest()->get()
            // "datax"  => $datas->get()
            // "datax"  => Datas::latest()->filter(request(['search', 'category', 'author']))->get()
            "datax"  => Datas::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
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
