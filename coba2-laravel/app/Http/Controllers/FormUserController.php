<?php

namespace App\Http\Controllers;

use App\Models\formUser;
use App\Http\Requests\StoreformUserRequest;
use App\Http\Requests\UpdateformUserRequest;

class FormUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register.multiform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreformUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreformUserRequest $request)
    {
        try {
            $validatedData = $request->validate([
                'tahun' => 'required',
                'periode' => 'required',
                'bulan' => 'required',

                'nama' => 'required',
                'alias' => 'required',
                // 'email1' => 'required|email:dns|unique:users',
                'email1' => 'required|email:dns',
                'email2' => 'email:dns|nullable',
                'kotalahir' => 'required',
                'tanggallahir' => 'required|date',
                'alamat1' => 'required',
                'alamat2' => 'required',
                'nohp' => 'required',
                'sepatu' => 'required',
                'agama' => 'required',
                'warganegara' => 'required',

                'tipependidikan' => 'required',
                'tingkatpendidikan' => 'required',
                'institusi' => 'required',
                'fakultas' => 'nullable',
                'jurusan' => 'nullable',
                'programstudi' => 'nullable',
                'nomorinduk' => 'required',

                'tanggalpengajuan' => 'required|date|after_or_equal:start_date',
                'peminatan' => 'required',
                'departemen' => 'required',

                'docPermohonan' => 'file|max:5120',
                'docTranskrip' => 'file|max:5120',
                'docProposal' => 'file|max:5120',
                'imgFoto' => 'image|file|max:5120'
            ]);

            if ($request->file('docPermohonan')) {
                $validatedData['docPermohonan'] = $request->file('docPermohonan')->store('file-permohonan');
            };
            if ($request->file('docTranskrip')) {
                $validatedData['docTranskrip'] = $request->file('docTranskrip')->store('file-transkrips');
            };
            if ($request->file('docProposal')) {
                $validatedData['docProposal'] = $request->file('docProposal')->store('file-transkrip');
            };
            if ($request->file('imgFoto')) {
                $validatedData['imgFoto'] = $request->file('imgFoto')->store('pas-foto');
            };
        } catch (\Exception $e) {
            dd($e->getMessage(), $validatedData);
        }

        formUser::create($validatedData);

        return redirect('/login')->with('success', 'Pendaftaran berhasil! Silahkan menunggu cek inbox Email untuk melakukan Konfirmasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\formUser  $formUser
     * @return \Illuminate\Http\Response
     */
    public function show(formUser $formUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\formUser  $formUser
     * @return \Illuminate\Http\Response
     */
    public function edit(formUser $formUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateformUserRequest  $request
     * @param  \App\Models\formUser  $formUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateformUserRequest $request, formUser $formUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\formUser  $formUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(formUser $formUser)
    {
        //
    }
}
