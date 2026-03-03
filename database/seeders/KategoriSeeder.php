<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('m_kategori')->insert([
            ['kategori_kode' => 'KTG01', 'kategori_nama' => 'Makanan'],
            ['kategori_kode' => 'KTG02', 'kategori_nama' => 'Minuman'],
            ['kategori_kode' => 'KTG03', 'kategori_nama' => 'Elektronik'],
            ['kategori_kode' => 'KTG04', 'kategori_nama' => 'ATK'],
            ['kategori_kode' => 'KTG05', 'kategori_nama' => 'Kosmetik'],
        ]);
    }
}