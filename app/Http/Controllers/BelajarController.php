<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function index()
    {
        $nama = "Halo nama saya Latansa Bima Amanta";
        return view('belajar', ['nama' => $nama]);
    }

    function biodata()
    {
        $nama = "Latansa Bima Amanta";
        $mata_kuliah = ['Web Framework','Mobile Application', 'Literasi Digital'];
        return view('biodata', ['nama' => $nama, 'mata_kuliah' => $mata_kuliah]);
    }

    function getNama($nama)
    {
        return $nama;
    }

    function formRequest()
    {
        return view('request');
    }

    function proses(Request $request)
    {
        $nama = $request->nama;
        $alamat = $request->alamat;
        return 'Nama : ' . $nama . ', Alamat : ' . $alamat;
    }
}
