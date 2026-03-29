<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // $user = UserModel::all();
        // return view('user', ['data' => $user]);
        $user = UserModel::with('level')->get();
        return view('user', ['data' => $user]);
    }

    public function tambah()
    {
        return view('user_tambah');
    }

    public function tambah_simpan(Request $request)
    {
        UserModel::create([
            'level_id' => $request->input('level_id'),
            'username' => $request->input('username'),
            'password' => Hash::make($request->input('password')),
            'nama' => $request->input('nama')
        ]);

        return redirect('/user');
    }

    public function ubah($id)
    {
        $user = UserModel::find($id);
        return view('user_ubah', ['data' => $user]);

    }

    public function ubah_simpan(Request $request, $id)
    {
        $user = UserModel::find($id);
        $user->level_id = $request->input('level_id');
        $user->username = $request->input('username');
        if ($request->input('password')) {
            $user->password = Hash::make($request->input('password'));
        }
        $user->nama = $request->input('nama');
        $user->save();

        return redirect('/user');
    }

    public function hapus($id)
    {
        $user = UserModel::find($id);
        $user->delete();

        return redirect('/user');
    }
}