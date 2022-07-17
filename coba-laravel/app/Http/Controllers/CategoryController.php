<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // method controller yang digunakan/dipanggil di web.php
    public function index()
    {
        return view('filter', [
            "title" => "Category",
            "datax"  => Category::all()
        ]);
    }

    public function show(Category $category)
    {
        return view('list', [
            'title' => 'Category',
            'datax' => $category->data->load('category', 'author')
        ]);
    }
}
