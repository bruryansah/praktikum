<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GolonganController extends Controller
{
    public function index()
    {
        $golongan = DB::table('tbgolongan')->get();
        return view('golongan', ['golongan' => $golongan]);
    }

    public function tambah()
    {
        return view('tambahgolongan');
    }

    public function store(Request $request)
    {
        DB::table('tbgolongan')->insert([
            'golongan_nama' => $request->input('golongan_nama'),
            'gaji_pokok' => $request->input('gaji_pokok'),
            'tunjangan_keluarga' => $request->input('tunjangan_keluarga'),
            'tunjangan_transport' => $request->input('tunjangan_transport'),
            'tunjangan_makan' => $request->input('tunjangan_makan'),
        ]);

        return redirect('/golongan');
    }

    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $golongan = DB::table('tbgolongan')->where('golongan_id', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('editgolongan', ['golongan' => $golongan]);
    }

    public function storeupdate(Request $request)
    {
        // update data pegawai
        DB::table('tbgolongan')->where('golongan_id', $request->id)->update([
            'golongan_nama' => $request->golongan_nama,
            'gaji_pokok' => $request->gaji_pokok,
            'tunjangan_keluarga' => $request->tunjangan_keluarga,
            'tunjangan_transport' => $request->tunjangan_transport,
            'tunjangan_makan' => $request->tunjangan_makan,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/golongan');
    }

    public function hapus($id)
    {
        DB::table('tbgolongan')->where('golongan_id', $id)->delete();
        return redirect('/golongan')->with('success', 'Data berhasil dihapus.');
    }
}
