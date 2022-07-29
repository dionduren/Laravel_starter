<?php

namespace App\Http\Controllers;

use App\Models\formUser;
use App\Models\kuotaTahun;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'datax' => formUser::All(),
            'kuota' => KuotaTahun::All()
        ]);
    }
}
