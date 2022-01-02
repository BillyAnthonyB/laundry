<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\laundryController;

class laundryModel extends Model
{
    //menampilkan semua transaksi di laundryKu
    function get_transaksi() {
        // return DB::table('laundry_service.transaksi')->get();
        $queryTransaksi = "SELECT * FROM laundry_service.transaksi WHERE tanggal BETWEEN (CURDATE() - INTERVAL 30 DAY) AND CURDATE()";
        $executeQueryTransaksi = DB::select($queryTransaksi);
        return $executeQueryTransaksi;
    }

    //cek apakah alamat user ada sebelum lanjut ke pembayaran
    function get_cekAlamat() {
        $queryCekAlamat = "SELECT alamat FROM laundry_service.customer limit 1";
        $executeQueryCekAlamat = DB::select($queryCekAlamat);
        return $executeQueryCekAlamat;
    }

    function get_paket() {
        return DB::table('laundry_service.paket')->get();
    }

    function post_datasignup() {
        // return DB::table('laundry_service.customer')->get();
        $querysignup = "INSERT INTO customer ('ID_CUSTOMER', 'ID_MEMBERSHIP', 'NAMA_CUSTOMER', 'PHONE', 'EMAIL', 'PASSWORD', 'DELETE_CUSTOMER') VALUES ('', 'REGU', '', '', '', 'Norway','0');";
        $executeQuerysignup = DB::select($querysignup);
        return $executeQuerysignup;
    }

    function get_email(){
        $queryCekEmail = "SELECT * FROM customer WHERE email = '(dari text user)'";
        $executeQueryCekEmail = DB::select($queryCekEmail);
        return $executeQueryCekEmail;
    }





}
