<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Rmz',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin@admin.com'),
            'role_id' => 1,
        ]);

        DB::table('users')->insert([
            'name' => 'kams',
            'email' => 'webmatser@webmaster.com',
            'password' => Hash::make('webmaster@webmaster.com'),
            'role_id' => 2,
        ]);
        DB::table('users')->insert([
            'name' => 'john',
            'email' => 'users@users.com',
            'password' => Hash::make('users@users.com'),
            'role_id' => 3,
        ]);
        DB::table('users')->insert([
            'name' => 'On-L',
            'email' => 'utilisateur@utilisateur.com',
            'password' => Hash::make('utilisateur@utilisateur.com'),
            'role_id' => 4,
        ]);
        DB::table('users')->insert([
            'name' => 'leluli',
            'email' => 'utilisateurs@utilisateurs.com',
            'password' => Hash::make('utilisateurs@utilisateurs.com'),
            'role_id' => 5,
        ]);
        DB::table('users')->insert([
            'name' => 'On-Ul',
            'email' => 'bonchance@bonchance.com',
            'password' => Hash::make('bonchance@bonchance.com'),
            'role_id' => 4,
        ]);
        DB::table('users')->insert([
            'name' => 'mario',
            'email' => 'utili@utili.com',
            'password' => Hash::make('utili@utili.com'),
            'role_id' => 4,
        ]);
    }
}