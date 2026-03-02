<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i=1; $i<=5; $i++) {
            DB::table('m_kategori')->insert([
                'kategori_kode' => 'KTG'.$i,
                'kategori_nama' => 'Kategori '.$i
            ]);
        }
    }
}
