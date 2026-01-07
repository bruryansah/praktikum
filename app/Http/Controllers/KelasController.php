<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
     public function index()
    {
        $namakelas = "XII RPL 1";
        $namasiswa = ["Asep","Cecep","Barong","Andi","Lisa"];
        return view('job2.daftarkelas', ['namakelas' => $namakelas, 'namasiswa' => $namasiswa]);
    }
}
