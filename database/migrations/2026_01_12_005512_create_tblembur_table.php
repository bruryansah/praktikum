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
        Schema::create('tblembur', function (Blueprint $table) {
        $table->engine = 'InnoDB';

        $table->id('lembur_id');
        $table->unsignedBigInteger('pegawai_id');
        $table->string('bulan_lembur', 20);
        $table->bigInteger('jumlah_lembur');
        $table->timestamps();

        $table->foreign('pegawai_id')
        ->references('pegawai_id')
        ->on('tbpegawai')
        ->onDelete('cascade');
        });
     }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblembur');
    }
};
