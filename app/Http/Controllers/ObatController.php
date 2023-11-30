<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\obat;

class ObatController extends Controller
{
    public function indexObat()
    {
        $data = obat::all();
        return view('tampilobat', compact('data'));
    }




    public function catat()
    {
        return view('catatobat');
    }

    public function addObat(Request $request)
    {

        obat::create($request->all());
        return redirect()->route('tampilobat');
    }

    public function editObat($id)
    {
        $data = obat::find($id);
        return view('editobat', compact('data'));
    }

    public function updateObat(Request $request)
    {
        obat::where('id', $request->id)->update([
            'nama_obat' => $request->nama_obat,
            'deskripsi_obat' => $request->deskripsi_obat,
            'harga_obat' => $request->harga_obat,
        ]);
        //    dd($request);
        return redirect()->route('tampilobat');
    }

    public function delete($id)
    {
        $data = obat::find($id);
        $data->delete();
        return redirect()->route('tampilobat');
        // dd($data);
    }
}
