<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class usersController extends Controller
{
    public function getAllData(){
        $users = users::all();
        return response()->json($users);
    }
    public function insertUsers(Request $request)
    {
        $users = new users();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = hash('sha256', $request->password);
        $users->save();
        return response()->json($users);
    }

    public function updateUsers(Request $request,$id)
    {
        $post = users::findOrFail($id);

        $post->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => hash('sha256', $request->password)
        ]);
        return response()->json('Update Sucsess. Data: '.$post->name);
    }

    public function deleteUsers($id)
    {
        $post = users::findOrFail($id);
        $post->delete();
        return response()->json('Delete Sucsess. Data: '.$post->name);
    }
}
