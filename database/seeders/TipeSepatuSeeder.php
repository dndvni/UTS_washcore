<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipeSepatuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('t_tipe_sepatu')->insert([
            ['tipe_sepatu_id' => 1, 'nama_tipe' => 'Sneakers'],
            ['tipe_sepatu_id' => 2, 'nama_tipe' => 'Running Shoes'],
            ['tipe_sepatu_id' => 3, 'nama_tipe' => 'Loafers'],
            ['tipe_sepatu_id' => 4, 'name_tipe' => 'Hiking Boots'],
            ['tipe_sepatu_id' => 5, 'nama_tipe' => 'Football Shoes'],
        ]);
    }
}
