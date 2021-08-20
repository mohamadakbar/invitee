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
            $table->string('template_id', 50);
            $table->string('slug')->unique();
            $table->string('nama_panggilan_p', 50)->nullable();
            $table->string('nama_panggilan_w', 50)->nullable();
            $table->string('nama_lengkap_p', 100)->nullable();
            $table->string('nama_lengkap_w', 100)->nullable();
            $table->text('tentang_p')->nullable();
            $table->text('tentang_w')->nullable();
            $table->string('tgl_akad')->nullable();
            $table->string('tgl_res')->nullable();
            $table->string('mulai_akad')->nullable();
            $table->string('selesai_akad')->nullable();
            $table->string('mulai_res')->nullable();
            $table->string('selesai_res')->nullable();
            $table->string('tempat_akad', 50)->nullable();
            $table->string('tempat_res', 50)->nullable();
            $table->string('alamat_akad', 50)->nullable();
            $table->string('alamat_res', 50)->nullable();
            $table->string('nama_ortu_p_p', 50)->nullable();
            $table->string('nama_ortu_p_w', 50)->nullable();
            $table->string('nama_ortu_w_p', 50)->nullable();
            $table->string('nama_ortu_w_w', 50)->nullable();
            $table->text('link_loc')->nullable();
            $table->string('status_und', 50)->nullable();
            $table->string('foto_sampul', 50)->nullable();
            $table->string('foto_p', 50)->nullable();
            $table->string('foto_w', 50)->nullable();
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
