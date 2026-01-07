<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tbpegawai', function (Blueprint $table) {
            $table->id('pegawai_id');
            $table->string('pegawai_nama', 50);
            $table->string('pegawai_jabatan', 20);
            $table->integer('pegawai_umur');
            $table->text('pegawai_alamat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbpegawai');
    }
};
