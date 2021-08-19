<?php

use Illuminate\Database\Seeder;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\Paket::create([
            'id'=>1,
            'nama_paket' => 'gratis',
        ]);

        \App\Model\Paket::create([
            'id'=>2,
            'nama_paket' => 'entry',
        ]);

        \App\Model\Paket::create([
            'id'=>3,
            'nama_paket' => 'pro',
        ]);
    }
}
