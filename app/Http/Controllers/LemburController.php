<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LemburController extends Controller
{
    public function index()
    {
        $lembur = DB::table('tblembur')->get();
        return view('lembur', ['lembur' => $lembur]);
    }

    public function tambah()
    {
        return view('tambahlembur');
    }

    public function store(Request $request)
    {
        DB::table('tblembur')->insert([
            'pegawai_id' => $request->pegawai_id,
            'bulan_lembur' => $request->bulan_lembur,
            'jumlah_lembur' => $request->jumlah_lembur,
        ]);

        return redirect('/lembur');
    }

    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $lembur = DB::table('tblembur')->where('lembur_id', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('editlembur', ['lembur' => $lembur]);
    }

    public function storeupdate(Request $request)
    {
        // update data pegawai
        DB::table('tblembur')->where('lembur_id', $request->id)->update([
            'pegawai_id' => $request->pegawai_id,
            'bulan_lembur' => $request->bulan_lembur,
            'jumlah_lembur' => $request->jumlah_lembur
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/lembur');
    }

    public function hapus($id)
    {
        DB::table('tblembur')->where('lembur_id', $id)->delete();
        return redirect('/lembur')->with('success', 'Data berhasil dihapus.');
    }

}
