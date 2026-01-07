<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = DB::table('tbpegawai')->get();
        return view('pegawai', ['pegawai' => $pegawai]);
    }

    public function tambah()
    {
        return view('tambahpegawai');
    }

    public function store(Request $request)
    {
        DB::table('tbpegawai')->insert([
            'pegawai_nama' => $request->input('nama'),
            'pegawai_jabatan' => $request->input('jabatan'),
            'pegawai_umur' => $request->input('umur'),
            'pegawai_alamat' => $request->input('alamat'),
        ]);

        return redirect('/pegawai');
    }

    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('tbpegawai')->where('pegawai_id', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('editpegawai', ['pegawai' => $pegawai]);
    }

    public function storeupdate(Request $request)
    {
        // update data pegawai
        DB::table('tbpegawai')->where('pegawai_id', $request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }


    public function hapus($id)
    {
        DB::table('tbpegawai')->where('pegawai_id', $id)->delete();
        return redirect('/pegawai')->with('success', 'Data berhasil dihapus.');
    }
}
