<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userIds = DB::table('m_user')->pluck('user_id')->toArray();
        $supplierIds = DB::table('m_supplier')->pluck('supplier_id')->toArray();
        $barangIds = DB::table('m_barang')->pluck('barang_id')->toArray();

        if (empty($userIds) || empty($supplierIds) || empty($barangIds)) {
            $this->command->error('Cannot seed t_stok: missing m_user, m_supplier or m_barang rows');
            return;
        }

        for ($i = 0; $i < 15; $i++) {
            DB::table('t_stok')->insert([
                'supplier_id' => $supplierIds[array_rand($supplierIds)],
                'barang_id' => $barangIds[array_rand($barangIds)],
                'user_id' => $userIds[array_rand($userIds)],
                'stok_tanggal' => now(),
                'stok_jumlah' => rand(10, 50),
            ]);
        }
    }
}
