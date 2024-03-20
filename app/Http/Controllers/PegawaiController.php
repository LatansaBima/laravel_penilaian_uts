<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PegawaiController extends Controller
{
    public function datapegawai()
    {
        return view('pegawai');
    }

    function actiondatapegawai(Request $request)
    {
        $data = DB::table('pegawai')->insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tanggal_lahir' => $request->tanggal
        ]);
        Session::flash('message', 'Tambah data pegawai berhasil !');
        return redirect('dashboard');
    }
}
