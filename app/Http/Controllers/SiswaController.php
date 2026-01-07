<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = DB::table('siswas')->get();
        return view('siswa', compact('siswas'));
    }
}

