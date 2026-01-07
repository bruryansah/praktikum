<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
public function run(): void
    {
        DB::table('tbpegawai')->insert([
            [
                'pegawai_nama' => 'Andi Pratama',
                'pegawai_jabatan' => 'Staff IT',
                'pegawai_umur' => 24,
                'pegawai_alamat' => 'Jl. Merdeka No. 10, Jakarta',
            ],
            [
                'pegawai_nama' => 'Budi Santoso',
                'pegawai_jabatan' => 'Admin',
                'pegawai_umur' => 28,
                'pegawai_alamat' => 'Jl. Sudirman No. 5, Bandung',
            ],
            [
                'pegawai_nama' => 'Citra Lestari',
                'pegawai_jabatan' => 'HRD',
                'pegawai_umur' => 30,
                'pegawai_alamat' => 'Jl. Gatot Subroto No. 7, Surabaya',
            ],
            [
                'pegawai_nama' => 'Dewi Anggraini',
                'pegawai_jabatan' => 'Finance',
                'pegawai_umur' => 32,
                'pegawai_alamat' => 'Jl. Ahmad Yani No. 12, Semarang',
            ],
            [
                'pegawai_nama' => 'Eko Saputra',
                'pegawai_jabatan' => 'Manager',
                'pegawai_umur' => 35,
                'pegawai_alamat' => 'Jl. Diponegoro No. 20, Yogyakarta',
            ],
        ]);
    }
}
