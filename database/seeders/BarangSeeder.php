<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('m_barang')->insert([
            ['kategori_id'=>1,'barang_kode'=>'BRG001','barang_nama'=>'Indomie','harga_beli'=>2500,'harga_jual'=>3000],
            ['kategori_id'=>1,'barang_kode'=>'BRG002','barang_nama'=>'Beras 5kg','harga_beli'=>60000,'harga_jual'=>65000],
            ['kategori_id'=>2,'barang_kode'=>'BRG003','barang_nama'=>'Teh Botol','harga_beli'=>4000,'harga_jual'=>5000],
            ['kategori_id'=>2,'barang_kode'=>'BRG004','barang_nama'=>'Air Mineral','harga_beli'=>3000,'harga_jual'=>4000],
            ['kategori_id'=>4,'barang_kode'=>'BRG005','barang_nama'=>'Pulpen','harga_beli'=>2000,'harga_jual'=>3000],
            ['kategori_id'=>3,'barang_kode'=>'BRG006','barang_nama'=>'Mouse','harga_beli'=>50000,'harga_jual'=>65000],
            ['kategori_id'=>3,'barang_kode'=>'BRG007','barang_nama'=>'Keyboard','harga_beli'=>80000,'harga_jual'=>95000],
            ['kategori_id'=>3,'barang_kode'=>'BRG008','barang_nama'=>'Flashdisk 32GB','harga_beli'=>45000,'harga_jual'=>60000],
            ['kategori_id'=>5,'barang_kode'=>'BRG009','barang_nama'=>'Shampoo','harga_beli'=>15000,'harga_jual'=>20000],
            ['kategori_id'=>5,'barang_kode'=>'BRG010','barang_nama'=>'Sabun','harga_beli'=>5000,'harga_jual'=>7000],
            ['kategori_id'=>1,'barang_kode'=>'BRG011','barang_nama'=>'Biskuit','harga_beli'=>7000,'harga_jual'=>9000],
            ['kategori_id'=>2,'barang_kode'=>'BRG012','barang_nama'=>'Susu UHT','harga_beli'=>6000,'harga_jual'=>8000],
            ['kategori_id'=>4,'barang_kode'=>'BRG013','barang_nama'=>'Buku Tulis','harga_beli'=>4000,'harga_jual'=>6000],
            ['kategori_id'=>4,'barang_kode'=>'BRG014','barang_nama'=>'Pensil','harga_beli'=>1500,'harga_jual'=>2500],
            ['kategori_id'=>3,'barang_kode'=>'BRG015','barang_nama'=>'Headset','harga_beli'=>75000,'harga_jual'=>90000],
        ]);
    }
}