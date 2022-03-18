<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Role::create([
            'name'=> "Publisher"
        ]);
        \App\Models\Role::create([
            'name'=> "Editor"
        ]);
        \App\Models\Role::create([
            'name'=> "Earner"
        ]);
        \App\Models\Role::create([
            'name'=> "HR Manager"
        ]);
    }
}
