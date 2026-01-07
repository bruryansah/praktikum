<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GajiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
        DB::table('tbgaji')->insert([
            ['pegawai_id'=>1,'jumlah_gaji'=>4200000,'jumlah_lembur'=>500000,'potongan'=>200000,'gaji_diterima'=>4500000,'tanggal_gaji'=>'2025-01-31'],
            ['pegawai_id'=>2,'jumlah_gaji'=>5100000,'jumlah_lembur'=>650000,'potongan'=>250000,'gaji_diterima'=>5500000,'tanggal_gaji'=>'2025-01-31'],
            ['pegawai_id'=>3,'jumlah_gaji'=>6000000,'jumlah_lembur'=>400000,'potongan'=>300000,'gaji_diterima'=>6100000,'tanggal_gaji'=>'2025-01-31'],
            ['pegawai_id'=>4,'jumlah_gaji'=>6900000,'jumlah_lembur'=>750000,'potongan'=>350000,'gaji_diterima'=>7300000,'tanggal_gaji'=>'2025-01-31'],
            ['pegawai_id'=>5,'jumlah_gaji'=>7800000,'jumlah_lembur'=>600000,'potongan'=>400000,'gaji_diterima'=>8000000,'tanggal_gaji'=>'2025-01-31'],
        ]);
    }
}
