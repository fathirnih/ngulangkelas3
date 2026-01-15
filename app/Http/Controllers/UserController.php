<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::all();
        return view('users.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // Menampilkan halaman form (Add)
    public function create()
    {
        return view('users.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => [
                'required',
                'regex:/^[a-zA-Z\s]+$/'
            ],
            'kota' => 'required'
        ], [
            'nama.required' => 'Nama wajib diisi',
            'nama.regex'    => 'Nama hanya boleh berisi huruf',
            'kota.required' => 'Kota wajib diisi',
        ]);

        User::create([
            'nama' => $request->nama,
            'kota' => $request->kota,
        ]);

        return redirect()->route('users.index')
            ->with('success', 'Data user berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('users.detail', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'nama' => [
                'required',
                'regex:/^[a-zA-Z\s]+$/'
            ],
            'kota' => 'required'
        ], [
            'nama.required' => 'Nama wajib diisi',
            'nama.regex'    => 'Nama hanya boleh berisi huruf',
            'kota.required' => 'Kota wajib diisi',
        ]);

        $user->update([
            'nama' => $request->nama,
            'kota' => $request->kota,
        ]);

        return redirect()->route('users.index')
            ->with('success', 'Data user berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')
            ->with('success', 'Data user berhasil dihapus');
    }
}
