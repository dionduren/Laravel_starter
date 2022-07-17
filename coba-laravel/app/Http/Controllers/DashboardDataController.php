<?php

namespace App\Http\Controllers;

use App\Models\Data;
// use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
}
