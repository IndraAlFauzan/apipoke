<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users_barang;

class users_barangController extends Controller
{
    public function getAllData(){
        $users_barang = users_barang::all();
        return response()->json($users_barang);
    }
    public function insertusers_barang(Request $request)
    {
        $users_barang = new users_barang();
        $users_barang->uid = $request->uid;
        $users_barang->id_courses = $request->id_courses;
        $users_barang->save();
        return response()->json($users_barang);
    }

    public function updateusers_barang(Request $request,$id)
    {
        $post = users_barang::findOrFail($id);

        $post->update([
            'uid' => $request->uid,
            'id_courses' => $request->id_courses
        ]);
        return response()->json('Update Sucsess. Data: '.$post->uid);
    }

    public function deleteusers_barang($id)
    {
        $post = users_barang::findOrFail($id);
        $post->delete();
        return response()->json('Delete Sucsess. Data: '.$post->uid);
    }

    public function getBarangByUsers($uid)
    {
        $post = users_barang::where('uid', $uid)->get(
            
        );
        $barang = [];
        foreach ($post as $key => $value) {
            $ulang = [
                'uid' => $value->uid,
                
                'title' => $value->barang->title,
                'id_kategori_barang' => $value->barang->id_kategori_barang,
                
            ];
            array_push($barang, $ulang);
        }
        return response()->json($barang);
    }

    public function getUsersByBarang($id_barang)
    {
        $post = users_barang::where('id_barang', $id_barang)->get();
        $users = [];
        foreach ($post as $key => $value) {
            $users[] = $value->users;
        }
        return response()->json($users);
    }


    

    
}
