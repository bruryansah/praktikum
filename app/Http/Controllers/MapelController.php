<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index()
    {
        $namamapel = "Matematika";
        $namapamong = ["Ki Sunarto","Ki Suherman","Ki Fatahillah","Nyi Dwinta","Nyi Anita"];
        return view('job2.daftarmapel', ['namamapel' => $namamapel, 'namapamong' => $namapamong]);
    }
}
