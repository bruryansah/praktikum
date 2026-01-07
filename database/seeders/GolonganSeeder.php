<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GolonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('tbgolongan')->insert([
            ['golongan_nama'=>'Golongan I','gaji_pokok'=>3000000,'tunjangan_keluarga'=>500000,'tunjangan_transport'=>300000,'tunjangan_makan'=>400000],
            ['golongan_nama'=>'Golongan II','gaji_pokok'=>4000000,'tunjangan_keluarga'=>700000,'tunjangan_transport'=>400000,'tunjangan_makan'=>500000],
            ['golongan_nama'=>'Golongan III','gaji_pokok'=>5000000,'tunjangan_keluarga'=>900000,'tunjangan_transport'=>500000,'tunjangan_makan'=>600000],
            ['golongan_nama'=>'Golongan IV','gaji_pokok'=>6000000,'tunjangan_keluarga'=>1100000,'tunjangan_transport'=>600000,'tunjangan_makan'=>700000],
            ['golongan_nama'=>'Golongan V','gaji_pokok'=>7000000,'tunjangan_keluarga'=>1300000,'tunjangan_transport'=>700000,'tunjangan_makan'=>800000],
        ]);
    }
}
