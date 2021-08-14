<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_user');
            $table->integer('template_id');
            $table->string('nama_panggilan_p', 50);
            $table->string('nama_panggilan_w', 50);
            $table->string('nama_lengkap_p', 100);
            $table->string('nama_lengkap_w', 100);
            $table->text('tentang_p');
            $table->text('tentang_w');
            $table->string('tgl_akad');
            $table->string('tgl_res');
            $table->string('mulai_akad');
            $table->string('selesai_akad');
            $table->string('mulai_res');
            $table->string('selesai_res');
            $table->string('tempat_akad', 50);
            $table->string('tempat_res', 50);
            $table->integer('is_create');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('form');
    }
}
