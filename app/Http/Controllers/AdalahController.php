<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdalahController extends Controller
{
    public function index()
    {
        $form1 = session('form1');
        $form2 = session('form2');
        $form3 = session('form3');
        $name = session('name');
        $data = session()->get('data_testing', []);
        return view('testing.index', compact('data','name', 'form1', 'form2', 'form3'));
    }

    public function form()
    {
        return view('testing.form');
    }

    public function hasil(Request $request)
    {
        $request->validate([
            'produk' => 'required',
            'jumlah' => 'required|numeric',
        ]);

        $data = session()->get('data_testing', []);

        $data[] = [
            'produk' => $request->produk,
            'jumlah' => $request->jumlah,
        ];

        session()->put('data_testing', $data);

        return view('testing.hasil', [
            'produk' => $request->produk,
            'jumlah' => $request->jumlah,
        ]);
    }

    public function register()
    {
        return view('testing.register');
    }
    public function daftar(Request $request)
    {
        $data = $request->name;
        return view('testing.daftar', compact('data'));
    }

      public function form1() {
        return view('testing.form1');
    }

    public function storeForm1(Request $r) {
        session(['form1' => $r->name]);
        return redirect()->route('form2');
    }

    public function form2() {
        return view('testing.form2', ['form1' => session('form1')]);
    }

    public function storeForm2(Request $r) {
        session(['form2' => $r->name]);
        return redirect()->route('form3');
    }

    public function form3() {
        return view('testing.form3', [
            'form1' => session('form1'),
            'form2' => session('form2'),
        ]);
    }

    public function storeForm3(Request $r) {
        session(['form3' => $r->name]);
        return redirect()->route('index');
    }

    public function reset()
{
    // Hapus semua session terkait form
    session()->forget(['form1', 'form2', 'form3', 'data_testing', 'name']);

    // Redirect ke form pertama atau index
    return redirect()->route('index');
}

    
}
