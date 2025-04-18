<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data= [
            [
                'pelanggan_id'   => 1,
                'nama_pelanggan' => 'Michelle Dorani',
                'alamat'         => 'Jl. Singosari No.17, Malang',
                'no_telepon'     => '6285606319598',
                'created_at'     => now(),
                'updated_at'     => now(), 
            ],
            [
                'pelanggan_id'   => 2,
                'nama_pelanggan' => 'Muhammad Al Fatih',
                'alamat'         => 'Jl. Purwodadi No. 88, Malang',
                'no_telepon'     => '6283159546301',
                'created_at'     => now(),
                'updated_at'     => now(), 
            ],
            [
                'pelanggan_id'   => 3,
                'nama_pelanggan' => 'Muhammad Farel',
                'alamat'         => 'Jl. Betek No. 10, Malang',
                'no_telepon'     => '6282132570837',
                'created_at'     => now(),
                'updated_at'     => now(), 
            ],
            [
                'pelanggan_id'   => 4,
                'nama_pelanggan' => 'Safiro Alfarisi',
                'alamat'         => 'Jl. Sulfat No. 13, Malang',
                'no_telepon'     => '628983484850',
                'created_at'     => now(),
                'updated_at'     => now(), 
            ],
            [
                'pelanggan_id'   => 5,
                'nama_pelanggan' => 'Keisya Nisrina',
                'alamat'         => 'Jl. Sama Walid No. 17, Malang',
                'no_telepon'     => '6288823890129',
                'created_at'     => now(),
                'updated_at'     => now(), 
            ],
            [
                'pelanggan_id'   => 6,
                'nama_pelanggan' => 'Brahim Diaz',
                'alamat'         => 'Jl. Sama Aku No. 88, Malang',
                'no_telepon'     => '6288934740920',
                'created_at'     => now(),
                'updated_at'     => now(), 
            ],
        ];
        DB::table('t_pegawai')->insert($data);
    }
}
