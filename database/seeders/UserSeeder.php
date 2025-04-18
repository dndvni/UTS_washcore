<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['user_id' => 1, 'username' => 'dhamangrhd',    'password' => Hash::make('dhamang123'),   'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 2, 'username' => 'mamanfr',  'password' => Hash::make('maman123'), 'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 3, 'username' => 'dndvni',   'password' => Hash::make('funi123'),   'created_at' => now(), 'updated_at' => now()],
            ['user_id' => 4, 'username' => 'roesmantnt', 'password' => Hash::make('roesman123'), 'created_at' => now(), 'update_at' => now()]
        ];

        DB::table('t_user')->insert($data);
    }
}
