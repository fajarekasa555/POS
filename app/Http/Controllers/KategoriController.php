<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use function Symfony\Component\Clock\now;

class KategoriController extends Controller
{
    //
    public function index()
    {
        // $data = [
        //     'kategori_kode' => 'K001',
        //     'kategori_nama' => 'Elektronik',
        //     'created_at' => now(),
        // ];
        // DB::table('m_kategori')->insert($data);
        // return 'Data berhasil disimpan';

        // $row = DB::table('m_kategori')->where('kategori_kode', 'K001')->update([
        //     'kategori_nama' => 'Elektronik dan Gadget',
        //     'updated_at' => now(),
        // ]);
        // return "Data berhasil diupdate. Jumlah baris yang terpengaruh: " . $row;

        // $row = DB::table('m_kategori')->where('kategori_kode', 'K001')->delete();
        // return "Data berhasil dihapus. Jumlah baris yang terpengaruh: " . $row;

        $data = DB::table('m_kategori')->get();
        return view('kategori', ['data' => $data]);
    }
}
