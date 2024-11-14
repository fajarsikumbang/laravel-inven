<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangKeluar;

class BarangKeluarController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'user' => 'required|string',
            'kodebarang' => 'required|array',
            'jumlah' => 'required|array',
        ]);

        foreach ($request->kodebarang as $index => $kode) {
            BarangKeluar::create([
                'tanggal' => $request->tanggal,
                'user' => $request->user,
                'kodebarang' => $kode,
                'jumlah' => $request->jumlah[$index],
            ]);
        }

        return response()->json(['success' => 'Data berhasil disimpan']);
    }
}
