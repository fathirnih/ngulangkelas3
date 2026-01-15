<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index(Request $request)
        {
            $data = Produk::paginate(10);
            $search = $request->query('search');
             $data = Produk::when($search, function($query, $search) {
            return $query->where('nama_barang', 'like', "%{$search}%");
        })
        ->paginate(10)
        ->withQueryString(); // biar query search tetap ada saat paginate
            return view('produk.index', compact('data'));
        }

    /**
     * Show the form for creating a new resource.
     */
// Menampilkan halaman form (Add)
    public function create() {
        return view('produk.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $request->validate([
    'nama_barang' => [
        'required',
        'regex:/^[a-zA-Z\s]+$/'
    ],
    'jumlah' => 'required|integer|min:1',
    'harga' => 'required|integer|min:100',
    'deskripsi' => 'nullable|string'
], [
        'nama_barang.required' => 'Nama barang wajib diisi',
        'nama_barang.regex'    => 'Nama barang hanya boleh berisi huruf',
        'jumlah.required'      => 'Jumlah barang wajib diisi',
        'jumlah.integer'       => 'Jumlah harus berupa angka',
        'jumlah.min'           => 'Jumlah minimal 1',
        'harga.required'       => 'Harga wajib diisi',
        'harga.integer'        => 'Harga harus berupa angka',
        'harga.min'            => 'Harga minimal 100'
    ]);
    $imageName = null;

if ($request->hasFile('image')) {
    $imageName = time().'.'.$request->image->extension();
    $request->image->move(public_path('images/produk'), $imageName);
}


    Produk::create([
        'nama_barang' => $request->nama_barang,
        'jumlah'      => $request->jumlah,
        'harga' => $request->harga,
        'deskripsi' => $request->deskripsi,
        'image' => $imageName,
    ]);

        return redirect()->route('produk.index')
        ->with('success', 'Data produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
/*     
    public function show($id) 
    {
        //var_dump($id);
        $produk = Produk::findOrFail($id);
        //dd($produk);
        //dd($produk);
        return view('produk.detail', compact('produk'));
    }
     */


    public function show(Produk $produk)
    {
        return view('produk.detail', compact('produk'));
    }
    
    /* 
    public function show(Produk $produk)
    {
        // Seperti perintah Tinker: $p = Produk::find(1)
        $produk = Produk::findOrFail($id);
        // Kirim data ke view detail
        return view('produk.detail', compact('produk'));
    }
 */
    
    /**
     * Show the form for editing the specified resource.
     */
  public function edit(Produk $produk) 
    {
        return view('produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
  public function update(Request $request, Produk $produk)
    {
       $request->validate([
        'nama_barang' => [
            'required',
            'regex:/^[a-zA-Z\s]+$/'
        ],
        'jumlah' => 'required|integer|min:1',
        'harga' => 'required|integer|min:100',
        'deskripsi' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ], [
        'nama_barang.required' => 'Nama barang wajib diisi',
        'nama_barang.regex'    => 'Nama barang hanya boleh berisi huruf',
        'jumlah.required'      => 'Jumlah barang wajib diisi',
        'jumlah.integer'       => 'Jumlah harus berupa angka',
        'jumlah.min'           => 'Jumlah minimal 1',
        'harga.required'       => 'Harga wajib diisi',
        'harga.integer'        => 'Harga harus berupa angka',
        'harga.min'            => 'Harga minimal 100'
    ]);

        return redirect()->route('produk.index')
        ->with('success', 'Data produk berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk) 
    {
        $produk->delete();
        return redirect()->route('produk.index')
        ->with('success', 'Data produk berhasil dihapus');
    }
}
