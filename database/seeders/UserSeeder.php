<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('m_user')->insert([
            [
                'level_id' => 1, 
                'username' => 'admin', 
                'nama' => 'Administrator', 
                'password' => bcrypt('12345')],

            [
                'level_id' => 2, 
                'username' => 'manager', 
                'nama' => 'Manager', 
                'password' => bcrypt('12345')],

            [
                'level_id' => 3, 
                'username' => 'staff', 
                'nama' => 'Staff/Kasir', 
                'password' => bcrypt('12345')
            ],
        ]);
    }
}
