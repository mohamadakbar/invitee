<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "slug" => "master",
            "name" => "master",
            "email" => "master@mail.com",
            "email_verified_at" => null,
            "password" => bcrypt('admin123'),
            "is_new" => 1,
            "id_paket" => 3,
            "roles" => 1,
            "remember_token" => null,
        ]);
    }
}
