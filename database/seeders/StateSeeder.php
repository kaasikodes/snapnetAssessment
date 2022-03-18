<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\models\State::factory(4)->create();
    }
}
