<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data= [
            [
                'pegawai_id' => 1,
                'pelanggan_id' => 1,
                'pelayanan_id' => 2,
                'tipe_sepatu_id' => 1,
                'pengambilan_id' => 1,
                'tanggal_transaksi' => now(),
                'total_harga' => 100000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pegawai_id' => 2,
                'pelanggan_id' => 2,
                'pelayanan_id' => 1,
                'tipe_sepatu_id' => 3,
                'pengambilan_id' => 2,
                'tanggal_transaksi' => now(),
                'total_harga' => 30000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pegawai_id' => 3,
                'pelanggan_id' => 3,
                'pelayanan_id' => 5,
                'tipe_sepatu_id' => 4,
                'pengambilan_id' => 3,
                'tanggal_transaksi' => now(),
                'total_harga' => 50000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pegawai_id' => 4,
                'pelanggan_id' => 4,
                'pelayanan_id' => 3,
                'tipe_sepatu_id' => 2,
                'pengambilan_id' => 3,
                'tanggal_transaksi' => now(),
                'total_harga' => 20000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pegawai_id' => 1,
                'pelanggan_id' => 5,
                'pelayanan_id' => 4,
                'tipe_sepatu_id' => 1,
                'pengambilan_id' => 2,
                'tanggal_transaksi' => now(),
                'total_harga' => 15000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pegawai_id' => 3,
                'pelanggan_id' => 6,
                'pelayanan_id' => 1,
                'tipe_sepatu_id' => 5,
                'pengambilan_id' => 2,
                'tanggal_transaksi' => now(),
                'total_harga' => 30000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('t_transaksi')->insert($data);
    }
}
