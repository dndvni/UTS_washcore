<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipePengambilanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('t_tipe_pengambilan')->insert([
            ['pengambilan_id' => 1, 'nama_tipe_ambil' => 'Antar'],
            ['pengambilan_id' => 2, 'nama_tipe_ambil' => 'Ambil'],
            ['pengambilan_id' => 3, 'nama_tipe_ambil' => 'COD'],
        ]);
    }
}
