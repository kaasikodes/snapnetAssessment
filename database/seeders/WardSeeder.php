<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\models\Ward::factory(4)->create();
    }
}
