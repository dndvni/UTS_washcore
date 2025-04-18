<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data= [
            [
                'pelayanan_id' => 1,
                'jenis_pelayanan' => 'Deep Clean',
                'harga_pelayanan' => 30000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pelayanan_id' => 2,
                'jenis_pelayanan' => 'Repaint',
                'harga_pelayanan' => 100000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pelayanan_id' => 3,
                'jenis_pelayanan' => 'Fast Clean',
                'harga_pelayanan' => 20000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pelayanan_id' => 4,
                'jenis_pelayanan' => 'Unyellowing',
                'harga_pelayanan' => 15000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pelayanan_id' => 5,
                'jenis_pelayanan' => 'Reglue',
                'harga_pelayanan' => 50000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('t_pelayanan')->insert($data);
    }
}
