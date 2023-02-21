<?php

namespace App\Http\Controllers;

use App\Models\barang;

use Illuminate\Http\Request;

class barangController extends Controller
{
    public function getAllData(){
        $barang = barang::all();
        return response()->json($barang);
    }
    
    public function insertBarang(Request $request)
    {
        $post = new barang();
        $post->title = $request->title;
        $post->id_kategori_barang = $request->id_kategori_barang;
        $post->save();
        return response()->json('Data '.$post->title.' Berhasil Disimpan');      
    }

    public function updateBarang(Request $request, $id)
    {
        $post = barang::find($id);
        $post->title = $request->title;
        $post->id_kategori_barang = $request->id_kategori_barang;
        $post->save();
        return response()->json('Data . '.$post->title .' Berhasil Diupdate');      
    }

    public function deleteBarang($id)
    {
        $post = barang::find($id);
        $post->delete();
        return response()->json('Data '.$post->title.' Berhasil Dihapus');      
    }

}
