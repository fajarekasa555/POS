<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // $data = [
        //     'nama' => 'Fajar Eka',
        // ];

        // UserModel::where('username', 'customer-1')->update($data);

        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'password' => Hash::make('12345'),
        //     'nama' => 'Manager 3',
        // ];

        // UserModel::create($data);

        // $user = UserModel::where('level_id', 1)->first();

        // $user = UserModel::where('username', 'manager9')->firstOrFail();
        $user = UserModel::where('level_id', 2)->count();
        return view('user', ['data' => $user]);
    }
}