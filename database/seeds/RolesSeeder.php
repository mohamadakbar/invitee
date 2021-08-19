<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\Role::create([
            'id'    => 1,
            'name' => 'admin'
        ]);

        \App\Model\Role::create([
            'id'    => 2,
            'name' => 'user'
        ]);
    }
}
