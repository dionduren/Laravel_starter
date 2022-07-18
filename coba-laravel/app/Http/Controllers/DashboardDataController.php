<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Datas::all());
        // return Datas::all();
        return view('dashboard.datas.index', [
            'datax' => Data::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.datas.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:data',
            'category_id' => 'required',
            'body' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body, 150));

        Data::create($validatedData);

        return redirect('/dashboard/data')->with('success', 'New post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Datas  $data
     * @return \Illuminate\Http\Response
     */
    public function show(Data $data)
    {
        // dd($datas);
        $dataz = Data::where('slug', $data->slug)->get();

        return view('dashboard.datas.show', [
            'datax' => $dataz[0]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datas  $datas
     * @return \Illuminate\Http\Response
     */
    public function edit(Data $datas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Datas  $datas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Data $datas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datas  $datas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Data $datas)
    {
        //
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Data::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
