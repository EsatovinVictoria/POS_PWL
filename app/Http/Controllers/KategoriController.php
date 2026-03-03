<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index() {
        // $data = [
        //     'kategori_kode' => 'SNK',
        //     'kategori_nama' => 'Snack/Makanan ringan',
        // ];

        // DB::table('m_kategori')->insert($data);
        // return 'insert data baru berhasil';

        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
        // return 'update data berhasil. Jumlah data diupdate: '.$row .' baris';

        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
        // return 'delete data berhasil. Jumlah data dihapus: '.$row .' baris';

        $data = DB::table('m_kategori')->get();
        return view('kategori', ['data' => $data]);
    }


}
