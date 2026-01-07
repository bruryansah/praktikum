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
         Schema::create('tbgaji', function (Blueprint $table) {
            $table->id('gaji_id');
            $table->integer('pegawai_id');
            $table->bigInteger('jumlah_gaji')->default(0);
            $table->bigInteger('jumlah_lembur')->default(0);
            $table->bigInteger('potongan')->default(0);
            $table->bigInteger('gaji_diterima')->default(0);
            $table->date('tanggal_gaji');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbgaji');
    }
};
