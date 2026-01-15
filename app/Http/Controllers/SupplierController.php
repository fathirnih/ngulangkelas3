<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $data = Supplier::paginate(10);
        $data = Supplier::when(request('search'), function($query) {
    $query->where('nama', 'like', '%' . request('search') . '%');
})->paginate(10); // 10 per halaman

        return view('supplier.index', compact('data'));
    }

    public function create()
    {
        return view('supplier.add');
    }

    public function store(Request $request)
{
    $request->validate([
        'nama' => [
            'required',
            'regex:/^[a-zA-Z\s]+$/'
        ],
        'kota' => 'required',
        'cp' => [
            'required',
            'regex:/^[0-9]+$/',
            'min:10',
            'max:13'
        ],
    ], [
        'nama.required' => 'Nama supplier wajib diisi',
        'nama.regex'    => 'Nama supplier hanya boleh berisi huruf',

        'kota.required' => 'Kota wajib diisi',

        'cp.required' => 'Nomor HP wajib diisi',
        'cp.regex'    => 'Nomor HP hanya boleh berisi angka',
        'cp.min'      => 'Nomor HP minimal 10 digit',
        'cp.max'      => 'Nomor HP maksimal 13 digit',
    ]);

    Supplier::create([
        'nama' => $request->nama,
        'kota' => $request->kota,
        'cp'   => $request->cp,
    ]);

    return redirect()->route('supplier.index')
        ->with('success', 'Data supplier berhasil ditambahkan');
}

    public function show(Supplier $supplier)
{
    return view('supplier.detail', compact('supplier'));
}


    public function edit(Supplier $supplier)
    {
        return view('supplier.edit', compact('supplier'));
    }

    public function update(Request $request, Supplier $supplier)
{
    $request->validate([
        'nama' => [
            'required',
            'regex:/^[a-zA-Z\s]+$/'
        ],
        'kota' => 'required',
        'cp' => [
            'required',
            'regex:/^[0-9]+$/',
            'min:10',
            'max:13'
        ],
    ], [
        'nama.required' => 'Nama supplier wajib diisi',
        'nama.regex'    => 'Nama supplier hanya boleh berisi huruf',

        'kota.required' => 'Kota wajib diisi',

        'cp.required' => 'Nomor HP wajib diisi',
        'cp.regex'    => 'Nomor HP hanya boleh berisi angka',
        'cp.min'      => 'Nomor HP minimal 10 digit',
        'cp.max'      => 'Nomor HP maksimal 13 digit',
    ]);

    $supplier->update([
        'nama' => $request->nama,
        'kota' => $request->kota,
        'cp'   => $request->cp,
    ]);

    return redirect()->route('supplier.index')
        ->with('success', 'Data supplier berhasil diperbarui');
}


    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect()->route('supplier.index')
            ->with('success','Data supplier berhasil dihapus');
    }
}
