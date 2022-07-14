<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthorController extends Controller
{
    public function index()
    {
        return view('filter', [
            "title" => "Author",
            "datax"  => User::latest()->get()
        ]);
    }

    public function show(User $author)
    {
        return view('list', [
            'title' => 'Author',
            'datax' => $author->datas,
        ]);
    }
}
