<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaksi;

class TransaksiController extends Controller
{
    public function indexTransaksi()
    {
        $data = transaksi::all();
        return view('tampilpenjualan', compact('data'));
    }

    public function catat()
    {
        return view('catatpenjualan');
    }

    public function addTransaksi(Request $request)
    {
        transaksi::create($request->all());
        // dd($request->all());
        return redirect()->route('index_penjualan');
    }

    public function editTransaksi($id)
    {
        $data = transaksi::find($id);
        return view('editpenjualan', compact('data'));
    }

    public function updateTransaksi(Request $request)
    {
        transaksi::where('id', $request->id)->update([
            'nama_pembeli' => $request->nama_pembeli,
            'nama_obat' => $request->nama_obat,
            'harga_obat' => $request->harga_obat,
        ]);
        dd($request);
        // return redirect()->route('tampilpenjualan');
    }

    public function delete($id)
    {
        $data = transaksi::find($id);
        $data->delete();
        return redirect()->route('index_penjualan');
        // dd($data);
    }
}
