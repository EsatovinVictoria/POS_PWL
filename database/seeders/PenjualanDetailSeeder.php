<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('t_penjualan_detail')->insert([

            // TRX001
            ['penjualan_id'=>1,'barang_id'=>1,'harga'=>3000,'jumlah'=>2],
            ['penjualan_id'=>1,'barang_id'=>3,'harga'=>5000,'jumlah'=>1],
            ['penjualan_id'=>1,'barang_id'=>5,'harga'=>3000,'jumlah'=>1],

            // TRX002
            ['penjualan_id'=>2,'barang_id'=>2,'harga'=>65000,'jumlah'=>1],
            ['penjualan_id'=>2,'barang_id'=>4,'harga'=>4000,'jumlah'=>2],
            ['penjualan_id'=>2,'barang_id'=>6,'harga'=>65000,'jumlah'=>1],

            // TRX003
            ['penjualan_id'=>3,'barang_id'=>7,'harga'=>95000,'jumlah'=>1],
            ['penjualan_id'=>3,'barang_id'=>8,'harga'=>60000,'jumlah'=>1],
            ['penjualan_id'=>3,'barang_id'=>9,'harga'=>20000,'jumlah'=>2],

            // TRX004
            ['penjualan_id'=>4,'barang_id'=>10,'harga'=>7000,'jumlah'=>3],
            ['penjualan_id'=>4,'barang_id'=>11,'harga'=>9000,'jumlah'=>2],
            ['penjualan_id'=>4,'barang_id'=>12,'harga'=>8000,'jumlah'=>1],

            // TRX005
            ['penjualan_id'=>5,'barang_id'=>13,'harga'=>6000,'jumlah'=>4],
            ['penjualan_id'=>5,'barang_id'=>14,'harga'=>2500,'jumlah'=>5],
            ['penjualan_id'=>5,'barang_id'=>15,'harga'=>90000,'jumlah'=>1],

            // TRX006
            ['penjualan_id'=>6,'barang_id'=>1,'harga'=>3000,'jumlah'=>5],
            ['penjualan_id'=>6,'barang_id'=>2,'harga'=>65000,'jumlah'=>1],
            ['penjualan_id'=>6,'barang_id'=>3,'harga'=>5000,'jumlah'=>2],

            // TRX007
            ['penjualan_id'=>7,'barang_id'=>4,'harga'=>4000,'jumlah'=>3],
            ['penjualan_id'=>7,'barang_id'=>5,'harga'=>3000,'jumlah'=>2],
            ['penjualan_id'=>7,'barang_id'=>6,'harga'=>65000,'jumlah'=>1],

            // TRX008
            ['penjualan_id'=>8,'barang_id'=>7,'harga'=>95000,'jumlah'=>1],
            ['penjualan_id'=>8,'barang_id'=>8,'harga'=>60000,'jumlah'=>2],
            ['penjualan_id'=>8,'barang_id'=>9,'harga'=>20000,'jumlah'=>1],

            // TRX009
            ['penjualan_id'=>9,'barang_id'=>10,'harga'=>7000,'jumlah'=>2],
            ['penjualan_id'=>9,'barang_id'=>11,'harga'=>9000,'jumlah'=>1],
            ['penjualan_id'=>9,'barang_id'=>12,'harga'=>8000,'jumlah'=>3],

            // TRX010
            ['penjualan_id'=>10,'barang_id'=>13,'harga'=>6000,'jumlah'=>2],
            ['penjualan_id'=>10,'barang_id'=>14,'harga'=>2500,'jumlah'=>4],
            ['penjualan_id'=>10,'barang_id'=>15,'harga'=>90000,'jumlah'=>1],

        ]);
    }
}