<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('m_supplier')->insert([
            ['supplier_kode' => 'SUP01', 'supplier_nama' => 'PT Maju Jaya', 'supplier_alamat' => 'Jl. Maju Jaya No. 123'],
            ['supplier_kode' => 'SUP02', 'supplier_nama' => 'CV Sumber Rejeki', 'supplier_alamat' => 'Jl. Sumber Rejeki No. 456'],
            ['supplier_kode' => 'SUP03', 'supplier_nama' => 'PT Makmur Sentosa', 'supplier_alamat' => 'Jl. Makmur Sentosa No. 789'],
        ]);
    }
}