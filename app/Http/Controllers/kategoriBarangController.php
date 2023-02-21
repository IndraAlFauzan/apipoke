<?php

namespace App\Http\Controllers;

use App\Models\kategoriBarang;

use Illuminate\Http\Request;

class kategoriBarangController extends Controller
{
    public function getAllData(){
        $kb = kategoriBarang::all();
        return response()->json($kb);
    }
    public function insertKategoriBarang(Request $request)
    {
        $kb = new kategoriBarang();
        $kb->nama_kategori_barang = $request->nama_kategori_barang;
        $kb->save();
        return response()->json($kb);
    }

    public function updateKategoriBarang(Request $request,$id)
    {
        $post = kategoriBarang::findOrFail($id);

        $post->update([
            'nama_kategori_barang' => $request->nama_kategori_barang,           
        ]);
        return response()->json('Update Sucsess. Data: '.$post->nama_kategori_barang);
    }

    public function deleteKategoriBarang($id)
    {
        $post = kategoriBarang::findOrFail($id);
        $post->delete();
        return response()->json('Delete Sucsess. Data: '.$post->nama_kategori_barang);
    }
}
