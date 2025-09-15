<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('videos')->delete();

        DB::table('videos')->insert(array (
            0 =>
            array (
                'id' => 1,
                'title' => 'FITITEL',
                'detach' => 'destaque',
                'description' => 'Feira de Inovação Tecnologica do ITEL',
                'url' => 'https://youtu.be/8nIDcvViH0M?si=csEFx4h5SXP-5ODT',
                'deleted_at' => NULL,
                'created_at' => '2025-08-28 09:53:09',
                'updated_at' => '2025-08-28 10:16:13',
            ),
            1 =>
            array (
                'id' => 2,
                'title' => 'FITITEL',
                'detach' => 'destaque',
                'description' => 'FITITEL - Feira de Inovação Tecnologica do ITEL',
                'url' => 'https://youtu.be/8nIDcvViH0M?si=TeQt6yNVj0cYQkX3',
                'deleted_at' => NULL,
                'created_at' => '2025-08-28 10:43:07',
                'updated_at' => '2025-08-28 10:43:07',
            ),
        ));


    }
}
