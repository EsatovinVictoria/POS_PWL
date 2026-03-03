<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('t_stok')->insert([
            ['supplier_id'=>1, 'barang_id'=>1,'stok_jumlah'=>50,'stok_tanggal'=>now(), 'user_id'=>1],
            ['supplier_id'=>1, 'barang_id'=>2,'stok_jumlah'=>40,'stok_tanggal'=>now() ,'user_id'=>3],
            ['supplier_id'=>2, 'barang_id'=>3,'stok_jumlah'=>60,'stok_tanggal'=>now() ,'user_id'=>3],
            ['supplier_id'=>2,'barang_id'=>4,'stok_jumlah'=>55,'stok_tanggal'=>now() ,'user_id'=>2],
            ['supplier_id'=>1,'barang_id'=>5,'stok_jumlah'=>30,'stok_tanggal'=>now() ,'user_id'=>2],
            ['supplier_id'=>2,'barang_id'=>6,'stok_jumlah'=>20,'stok_tanggal'=>now() ,'user_id'=>2],
            ['supplier_id'=>1,'barang_id'=>7,'stok_jumlah'=>25,'stok_tanggal'=>now() ,'user_id'=>1],
            ['supplier_id'=>1,'barang_id'=>8,'stok_jumlah'=>35,'stok_tanggal'=>now() ,'user_id'=>1],
            ['supplier_id'=>3,'barang_id'=>9,'stok_jumlah'=>45,'stok_tanggal'=>now() ,'user_id'=>1],
            ['supplier_id'=>2,'barang_id'=>10,'stok_jumlah'=>50,'stok_tanggal'=>now() ,'user_id'=>2],
            ['supplier_id'=>1,'barang_id'=>11,'stok_jumlah'=>40,'stok_tanggal'=>now() ,'user_id'=>2],
            ['supplier_id'=>3,'barang_id'=>12,'stok_jumlah'=>30,'stok_tanggal'=>now() ,'user_id'=>2],
            ['supplier_id'=>1,'barang_id'=>13,'stok_jumlah'=>60,'stok_tanggal'=>now() ,'user_id'=>2],
            ['supplier_id'=>3,'barang_id'=>14,'stok_jumlah'=>70,'stok_tanggal'=>now() ,'user_id'=>2],
            ['supplier_id'=>1,'barang_id'=>15,'stok_jumlah'=>25,'stok_tanggal'=>now() ,'user_id'=>2],
        ]);
    }
}