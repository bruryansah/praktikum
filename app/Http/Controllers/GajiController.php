<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GajiController extends Controller
{
    // Menampilkan daftar gaji
    public function index()
    {
        $gaji = DB::table('tbgaji')->get();
        return view('gaji', ['gaji' => $gaji]);
    }

    // Menampilkan form untuk menambah data gaji
    public function tambah()
    {
        return view('tambahgaji');
    }

    // Menyimpan data gaji baru
    public function store(Request $request)
    {
        DB::table('tbgaji')->insert([
            'pegawai_id' => $request->input('pegawai_id'),
            'jumlah_gaji' => $request->input('jumlah_gaji'),
            'jumlah_lembur' => $request->input('jumlah_lembur'),
            'potongan' => $request->input('potongan'),
            'gaji_diterima' => $request->input('gaji_diterima'),
            'tanggal_gaji' => $request->input('tanggal_gaji'),
        ]);

        return redirect('/gaji');
    }

    // Menampilkan form untuk mengedit data gaji
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $gaji = DB::table('tbgaji')->where('gaji_id', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('editgaji', ['gaji' => $gaji]);
    }

    public function storeupdate(Request $request)
    {
        // update data pegawai
        DB::table('tbgaji')->where('gaji_id', $request->id)->update([
            'pegawai_id' => $request->pegawai_id,
            'jumlah_gaji' => $request->jumlah_gaji,
            'jumlah_lembur' => $request->jumlah_lembur,
            'potongan' => $request->potongan,
            'gaji_diterima' => $request->gaji_diterima,
            'tanggal_gaji' => $request->tanggal_gaji,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/gaji');
    }
    // Menghapus data gaji
    public function hapus($id)
    {
        DB::table('tbgaji')->where('gaji_id', $id)->delete();
        return redirect('/gaji')->with('success', 'Data berhasil dihapus.');
    }
}
