<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Pegawai_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pegawai')->insert([
            'nama' => 'Latansa Bima Amanta',
            'alamat' => 'Banyuwangi',
            'tanggal_lahir' => '2003-12-16'
        ]);
    }
}
