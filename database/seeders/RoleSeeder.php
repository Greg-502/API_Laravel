<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->insert([
            [
                'nombre' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre' => 'staff',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
