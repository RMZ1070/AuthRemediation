<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {Role::truncate();
            DB::table('roles')->insert([
                'name' => 'Admin',
            ]);
            DB::table('roles')->insert([
                'name' => 'Controleur',
            ]);
            DB::table('roles')->insert([
                'name' => 'User',
            ]);
        }
    }
}
