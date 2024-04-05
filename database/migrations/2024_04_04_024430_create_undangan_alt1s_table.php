<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('undangan_alt1s', function (Blueprint $table) {
            $table->id();
            $table->string('banner_img');
            $table->string('foto_mempelai_laki');
            $table->string('nama_mempelai_laki');
            $table->string('putra_dari_bpk');
            $table->string('foto_mempelai_perempuan');
            $table->string('nama_mempelai_perempuan');
            $table->string('putri_dari_bpk');
            $table->date('tgl_akad');
            $table->text('alamat_akad');
            $table->date('tgl_resepsi');
            $table->text('alamat_resepsi');
            $table->string('lokasi_gmaps');
            $table->text('caption');
            $table->string('galeri_img1');
            $table->string('galeri_img2');
            $table->string('galeri_img3');
            $table->string('galeri_img4');
            $table->string('galeri_img5');
            $table->string('galeri_img6');
            $table->text('pertemuan');
            $table->text('pendekatan');
            $table->text('lamaran');
            $table->text('pernikahan');
            $table->string('nama_rek1');
            $table->integer('no_rek1');
            $table->string('nama_rek2');
            $table->integer('no_rek2');
            $table->string('nama_rek3');
            $table->integer('no_rek3');
            $table->text('alamat_tertera');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('undangan_alt1s');
    }
};