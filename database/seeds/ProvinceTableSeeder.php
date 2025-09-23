<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->delete();
        DB::table('provinces')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Luanda',
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 07:55:26',
                'updated_at' => '2025-08-27 07:55:26',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Cabinda',
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 07:56:26',
                'updated_at' => '2025-08-27 07:56:26',
            )
        ));
    }
}
