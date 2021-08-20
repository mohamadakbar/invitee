<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Model\MenuTemplate::create([
            "paket_id" => 3,
            "slug" => "hero",
            "nama_menu" => "home",
            "nama_template" => "satu.blade.php",
            "icon" => "<i class='fa fa-home fa-2x' style='color: #fff'></i>"
        ]);

        \App\Model\MenuTemplate::create([
            "paket_id" => 3,
            "slug" => "menu",
            "nama_menu" => "couple",
            "nama_template" => "",
            "icon" => "<i class='fa fa-user fa-2x' style='color: #fff'></i>",
        ]);

        \App\Model\MenuTemplate::create([
            "paket_id" => 3,
            "slug" => "about",
            "nama_menu" => "events",
            "nama_template" => "",
            "icon" => "<i class='fa fa-envelope-open fa-2x' style='color: #fff'></i>",
        ]);

        \App\Model\MenuTemplate::create([
            "paket_id" => 3,
            "slug" => "events",
            "nama_menu" => "location",
            "nama_template" => "",
            "icon" => "<i class='fa fa-map-marker fa-2x' style='color: #fff'></i>",
        ]);

        \App\Model\MenuTemplate::create([
            "paket_id" => 3,
            "slug" => "gallery",
            "nama_menu" => "gallery",
            "nama_template" => "",
            "icon" => "<i class='fa fa-photo fa-2x' style='color: #fff'></i>",
        ]);

        \App\Model\MenuTemplate::create([
            "paket_id" => 3,
            "slug" => "contact",
            "nama_menu" => "comment",
            "nama_template" => "",
            "icon" => "<i class='fa fa-comment fa-2x' style='color: #fff'></i>",
        ]);

        \App\Model\MenuTemplate::create([
            "paket_id" => 2,
            "slug" => "hero",
            "nama_menu" => "home",
            "nama_template" => "",
            "icon" => "<i class='fa fa-home fa-2x' style='color: #fff'></i>",
        ]);

        \App\Model\MenuTemplate::create([
            "paket_id" => 2,
            "slug" => "menu",
            "nama_menu" => "couple",
            "nama_template" => "",
            "icon" => "<i class='fa fa-user fa-2x' style='color: #fff'></i>",
        ]);

        \App\Model\MenuTemplate::create([
            "paket_id" => 2,
            "slug" => "contact",
            "nama_menu" => "comment",
            "nama_template" => "",
            "icon" => "<i class='fa fa-comment fa-2x' style='color: #fff'></i>",
        ]);


    }
}
