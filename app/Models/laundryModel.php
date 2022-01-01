<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class laundryModel extends Model
{
    function get_transaksi() {
        // return DB::table('laundry_service.transaksi')->get();
        $queryTransaksi = "SELECT * FROM laundry_service.transaksi WHERE tanggal BETWEEN (CURDATE() - INTERVAL 30 DAY) AND CURDATE()";
        $executeQueryTransaksi = DB::select($queryTransaksi);
        return $executeQueryTransaksi;
    }

    function get_paket() {
        return DB::table('laundry_service.paket')->get();
    }





}
