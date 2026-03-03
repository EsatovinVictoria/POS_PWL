<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('t_penjualan')->insert([
            ['user_id'=>1,'penjualan_kode'=>'TRX001','pembeli'=>'Andi Saputra','penjualan_tanggal'=>now()],
            ['user_id'=>1,'penjualan_kode'=>'TRX002','pembeli'=>'Budi Santoso','penjualan_tanggal'=>now()],
            ['user_id'=>1,'penjualan_kode'=>'TRX003','pembeli'=>'Citra Lestari','penjualan_tanggal'=>now()],
            ['user_id'=>1,'penjualan_kode'=>'TRX004','pembeli'=>'Dewi Anggraini','penjualan_tanggal'=>now()],
            ['user_id'=>1,'penjualan_kode'=>'TRX005','pembeli'=>'Eko Prasetyo','penjualan_tanggal'=>now()],
            ['user_id'=>1,'penjualan_kode'=>'TRX006','pembeli'=>'Fajar Hidayat','penjualan_tanggal'=>now()],
            ['user_id'=>1,'penjualan_kode'=>'TRX007','pembeli'=>'Gita Permata','penjualan_tanggal'=>now()],
            ['user_id'=>1,'penjualan_kode'=>'TRX008','pembeli'=>'Hendra Wijaya','penjualan_tanggal'=>now()],
            ['user_id'=>1,'penjualan_kode'=>'TRX009','pembeli'=>'Intan Sari','penjualan_tanggal'=>now()],
            ['user_id'=>1,'penjualan_kode'=>'TRX010','pembeli'=>'Joko Susilo','penjualan_tanggal'=>now()],
        ]);
    }
}