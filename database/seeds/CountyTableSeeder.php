<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('counties')->delete();
        DB::table('counties')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Luanda',
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 07:57:26',
                'updated_at' => '2025-08-27 07:57:26',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Benguela',
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 07:58:26',
                'updated_at' => '2025-08-27 07:58:26',
            )
        ));
    }
}
