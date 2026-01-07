<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LemburSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('tblembur')->insert([
            ['pegawai_id' => 1, 'bulan_lembur' => 'Januari', 'jumlah_lembur' => 500000],
            ['pegawai_id' => 2, 'bulan_lembur' => 'Februari', 'jumlah_lembur' => 650000],
            ['pegawai_id' => 3, 'bulan_lembur' => 'Maret', 'jumlah_lembur' => 400000],
            ['pegawai_id' => 4, 'bulan_lembur' => 'April', 'jumlah_lembur' => 750000],
            ['pegawai_id' => 5, 'bulan_lembur' => 'Mei', 'jumlah_lembur' => 600000],
        ]);
    }
}
