<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_users', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('user_id');
            $table->string('tahun');
            $table->string('periode');
            $table->string('bulan');
            $table->string('nama');
            $table->string('email1')->unique();
            $table->string('email2');
            $table->date('tanggallahir');
            $table->string('alamat1');
            $table->string('alamat2');
            $table->string('nohp');
            $table->string('sepatu');
            $table->string('agama');
            $table->string('warganegara');
            $table->string('tipependidikan');
            $table->string('tingkatpendidikan');
            $table->string('institusi');
            $table->string('fakultas')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('programstudi')->nullable();
            $table->string('nomorinduk');
            $table->date('tanggalpengajuan');
            $table->string('peminatan');
            $table->string('departemen');
            $table->string('docPermohonan');
            $table->string('docTranskrip');
            $table->string('docProposal');
            $table->string('imgFoto');
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
        Schema::dropIfExists('form_users');
    }
};
