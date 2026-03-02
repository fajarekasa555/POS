<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $detailId = 1;

        for ($trx=1; $trx<=10; $trx++) {
            for ($i=1; $i<=3; $i++) {

                $barang = rand(1,15);
                $harga = DB::table('m_barang')
                            ->where('barang_id', $barang)
                            ->value('harga_jual');

                DB::table('t_penjualan_detail')->insert([
                    'penjualan_id' => $trx,
                    'barang_id' => $barang,
                    'harga' => $harga,
                    'jumlah' => rand(1,5)
                ]);
            }
        }
    }
}
