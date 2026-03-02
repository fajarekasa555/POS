<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    //

    public function index()
    {
        // DB::insert('INSERT INTO m_level (level_kode, level_nama) VALUES (?, ?)', ['L001', 'Sigure']);
        // return 'Insert data baru berhasil';

        // $row = DB::update('UPDATE m_level SET level_nama = ? WHERE level_kode = ?', ['Takt', 'L001']);
        // return $row . ' data berhasil diupdate, jumlah data yang diupdate: ' . $row;

        // $row = DB::delete('DELETE FROM m_level WHERE level_kode = ?', ['L001']);
        // return $row . ' data berhasil dihapus, jumlah data yang dihapus: ' . $row;

        $data = DB::select('SELECT * FROM m_level');
        return view('level', ['data' => $data]);
    }
}
