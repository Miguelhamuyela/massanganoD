<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        DB::table('users')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Infosi',
                'email' => 'admin@infosi.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'remember_token' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'User',
                'email' => 'admin@user.com',
                'email_verified_at' => NULL,
                'password' => Hash::make('admin123'),
                'role' => 'user',
                'remember_token' => NULL,
            ),
        ));
    }
}
