<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = DB::table('siswas')->get();
        return view('siswa', compact('siswas'));
    }

     public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        DB::table('siswas')->insert([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
        ]);

        return redirect()->route('siswa.index');
    }

    public function edit($id)
    {
        $siswa = DB::table('siswas')->where('id', $id)->first();
        return view('edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        DB::table('siswas')->where('id', $id)->update([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
        ]);

        return redirect()->route('siswa.index');
    }

    public function destroy($id)
    {
        DB::table('siswas')->where('id', $id)->delete();
        return redirect()->route('siswa.index');
    }
}

