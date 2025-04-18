<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelayananController extends Controller
{
    public function index() {
        // DB::insert('insert into t_pelayanan(jenis_pelayanan, harga_pelayanan, created_at) values(?, ?, ?)', ['Recolor', '120000', now()]);

        // return 'Insert data baru berhasil';

        // $row = DB::update('update t_pelayanan set jenis_pelayanan = ? where harga_pelayanan = ?', ['Recolor', '125000']);
        // return 'Update data berhasil. Jumlah data yang diupdate: ' .$row.' baris';

        $data = DB::select('select * from t_pelayanan');
        return view('pelayanan', ['data' => $data]);
    }
}
