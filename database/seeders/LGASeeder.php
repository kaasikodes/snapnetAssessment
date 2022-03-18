<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LGASeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\models\LGA::factory(4)->create();
    }
}
