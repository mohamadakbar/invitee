<?php

use Illuminate\Database\Seeder;
use App\Model\Form;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Form::create([
            "id_user" => 2,
            "template_id" => 2,
            "slug" => "firman-ainun",
            "nama_panggilan_p" => "firmans",
            "nama_panggilan_w" => "ainun",
            "nama_lengkap_p" => "Achmad Firman Maulana S.Kom",
            "nama_lengkap_w" => "Ainun Nisa Solehah S.Pd",
            "tentang_p" => "tentang firman",
            "tentang_w" => "tentang inun",
            "tgl_akad" => "07/29/2021",
            "tgl_res" => "07/29/2021",
            "mulai_akad" => "08.00",
            "selesai_akad" => "09.00",
            "mulai_res" => "10.00",
            "selesai_res" => "20.00",
            "tempat_akad" => "ciledug",
            "alamat_akad" => "Karang Tengah",
            "tempat_res" => "ciledug",
            "alamat_res" => "Karang Tengah",
            "nama_ortu_p_p" => "tes",
            "nama_ortu_p_w" => "test",
            "nama_ortu_w_p" => "test",
            "nama_ortu_w_w" => "test",
            "link_loc" => "<iframe style='border:0; width: 100%; height: 350px;' src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3500066671977!2d106.71086611531906!3d-6.217490362629765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f9a67faeec89%3A0xd126cd6dc8778ea!2sTK%20Darul%20Sultan!5e0!3m2!1sid!2sid!4v1629488175603!5m2!1sid!2sid' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy'></iframe>",
            "status_und" => "publik",
            "foto_sampul" => "10.jpeg",
            "foto_p" => "pria.png",
            "foto_w" => "wanita.png",
            "is_create" => 1,
        ]);

        Form::create([
            "id_user" => 1,
            "template_id" => 2,
            "slug" => "firman-ainun",
            "nama_panggilan_p" => "firmans",
            "nama_panggilan_w" => "ainun",
            "nama_lengkap_p" => "Achmad Firman Maulana S.Kom",
            "nama_lengkap_w" => "Ainun Nisa Solehah S.Pd",
            "tentang_p" => "tentang firman",
            "tentang_w" => "tentang inun",
            "tgl_akad" => "07/29/2021",
            "tgl_res" => "07/29/2021",
            "mulai_akad" => "08.00",
            "selesai_akad" => "09.00",
            "mulai_res" => "10.00",
            "selesai_res" => "20.00",
            "tempat_akad" => "ciledug",
            "alamat_akad" => "Karang Tengah",
            "tempat_res" => "ciledug",
            "alamat_res" => "Karang Tengah",
            "nama_ortu_p_p" => "tes",
            "nama_ortu_p_w" => "test",
            "nama_ortu_w_p" => "test",
            "nama_ortu_w_w" => "test",
            "link_loc" => "<iframe style='border:0; width: 100%; height: 350px;' src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3500066671977!2d106.71086611531906!3d-6.217490362629765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f9a67faeec89%3A0xd126cd6dc8778ea!2sTK%20Darul%20Sultan!5e0!3m2!1sid!2sid!4v1629488175603!5m2!1sid!2sid' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy'></iframe>",
            "status_und" => "publik",
            "foto_sampul" => "10.jpeg",
            "foto_p" => "pria.png",
            "foto_w" => "wanita.png",
            "is_create" => 1,
        ]);


    }
}
