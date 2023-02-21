<?php

namespace App\Http\Controllers;

use App\Models\barang;

use Illuminate\Http\Request;

class barangController extends Controller
{
    public function getAllData()
    {
        $barang = barang::all();
        return response()->json($barang);
    }

    public function insertBarang(Request $request)
    {
        $post = new barang();
        $post->title = $request->title;
        $post->id_kategori_barang = $request->id_kategori_barang;
        $post->save();
        return response()->json('Data ' . $post->title . ' Berhasil Disimpan');
    }

    public function updateBarang(Request $request, $id)
    {
        $post = barang::find($id);
        $post->title = $request->title;
        $post->id_kategori_barang = $request->id_kategori_barang;
        $post->save();
        return response()->json('Data . ' . $post->title . ' Berhasil Diupdate');
    }

    public function deleteBarang($id)
    {
        $post = barang::find($id);
        $post->delete();
        return response()->json('Data ' . $post->title . ' Berhasil Dihapus');
    }

    public function getBarang($id)
    {
        $post = barang::find($id);
        return response()->json($post);
    }

    public function getBarangByKategori($id_kategori_barang)
    {
        $post = barang::where('id_kategori_barang', $id_kategori_barang)->get();
        $kategoriBarang = [];
        foreach ($post as $key => $value) {
            $ulang = [
                'nama_kategori_barang' => $value->kategori_barang->nama_kategori_barang,
                'id_barang' => $value->id_barang,
                'title' => $value->title               
            ];
            array_push($kategoriBarang, $ulang);
        }
        return response()->json($kategoriBarang);
    }
}
