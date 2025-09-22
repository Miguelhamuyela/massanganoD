<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('courses')->delete(); 
        DB::table('courses')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Informática',
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 08:06:22',
                'updated_at' => '2025-08-27 08:06:22',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Administração',
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 08:09:22',
                'updated_at' => '2025-08-27 08:09:22',
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Contabilidade',
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 08:11:37',
                'updated_at' => '2025-08-27 08:11:37',
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'Recursos Humanos',
                'deleted_at' => NULL,
                'created_at' => '2025-08-27 08:12:30',
                'updated_at' => '2025-08-27 08:12:30',
            ),
        )); 
    }
}
