<?php

use Illuminate\Database\Seeder;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\Undangan::create([
            'id'    => 1,
            'nama_template' => 'traditional',
            'slug'  => 'undangan.dua'
        ]);

        \App\Model\Undangan::create([
            'id'    => 2,
            'nama_template' => 'love',
            'slug'  => 'undangan.satu'
        ]);
    }
}
