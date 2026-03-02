<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_level')->insert([
            ['level_kode' => 'LVL001', 'level_nama' => 'Administrator'],
            ['level_kode' => 'LVL002', 'level_nama' => 'Manager'],
            ['level_kode' => 'LVL003', 'level_nama' => 'Staff'],
        ]);
    }
}
