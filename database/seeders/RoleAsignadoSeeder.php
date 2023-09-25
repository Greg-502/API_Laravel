<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleAsignadoSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles_asignados')->insert([
            [
                'user_id' => 1,
                'role_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 1,
                'role_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
