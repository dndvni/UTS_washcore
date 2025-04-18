<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'pegawai_id'    => 1,
                'user_id'       => 1, 
                'nama_pegawai'  => 'Dhamang Ramadhan',
                'email'         => 'dhamang@gmail.com',
                'no_telepon'    => 6285194661250,
                'alamat'        => 'Jl. Bareng Kulon No. 941a, Malang',
                'created_at'    => now(),
                'updated_at'     => now(),
            ],
            [
                'pegawai_id'    => 2,
                'user_id'       => 2, 
                'nama_pegawai'  => 'Maman Firdaus',
                'email'         => 'maman@gmail.com',
                'no_telepon'    => 6288290062037,
                'alamat'        => 'Jl. Klaseman No. 30, Malang',
                'created_at'    => now(),
                'updated_at'     => now(),
            ],
            [
                'pegawai_id'    => 3,
                'user_id'       => 3, 
                'nama_pegawai'  => 'Adinda Mirza Devani',
                'email'         => 'funi@gmail.com',
                'no_telepon'    => 6289514373011,
                'alamat'        => 'Jl. Bareng Kulon No. 941, Malang',
                'created_at'    => now(),
                'updated_at'     => now(),
            ],
            [
                'pegawai_id'    => 4,
                'user_id'       => 4, 
                'nama_pegawai'  => 'Roesman Tianto',
                'email'         => 'roesman@gmail.com',
                'no_telepon'    => 6288292044422,
                'alamat'        => 'Jl. Bareng Kulon No. 941a, Malang',
                'created_at'    => now(),
                'updated_at'     => now(),
            ],
        ];

        DB::table('t_pegawai')->insert($data);
    }
}
