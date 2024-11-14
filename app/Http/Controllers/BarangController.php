<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'kode_barang.*' => 'required',
            'jenis_barang.*' => 'required',
            'nama_barang.*' => 'required',
            'dekripsi.*' => 'required',
            'maker.*' => 'required',
        ]);

        foreach ($request->kode_barang as $index => $kode) {
            Barang::create([
                'kode_barang' => $kode,
                'jenis_barang' => $request->jenis_barang[$index],
                'nama_barang' => $request->nama_barang[$index],
                'deskripsi' => $request->dekripsi[$index],
                'maker' => $request->maker[$index],
                'stok' => 0,
            ]);
        }

        return redirect()->route('barangs.index')->with('success', 'Data berhasil disimpan!');
    }

    public function index()
    {
        $barangs = Barang::all(); // Mengambil semua data dari model Barang
        return view('masterbarang', compact('barangs')); // Mengirim data ke view
    }
}
