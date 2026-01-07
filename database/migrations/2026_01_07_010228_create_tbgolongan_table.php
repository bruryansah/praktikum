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
         Schema::create('tbgolongan', function (Blueprint $table) {
            $table->id('golongan_id');
            $table->string('golongan_nama', 20);
            $table->bigInteger('gaji_pokok');
            $table->bigInteger('tunjangan_keluarga');
            $table->bigInteger('tunjangan_transport');
            $table->bigInteger('tunjangan_makan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbgolongan');
    }
};
