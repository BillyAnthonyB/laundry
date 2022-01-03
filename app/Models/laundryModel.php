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

    public function cekLogin($tboxLogin){
        $queryCekLogin = "SELECT count(*) is_exist ".
                         "FROM laundry_service.customer ".
                         "WHERE EMAIL = :loginEmail AND PASSWORD = :loginPassword ;";
        $executeQueryCekLogin = DB::select($queryCekLogin, $tboxLogin);
        // dd($executeQueryCekLogin);

        if($executeQueryCekLogin[0]->is_exist == 1){
            return true;
        }
        return false;

        if(isset($executeQueryCekLogin) && count($executeQueryCekLogin) > 0){
            return $executeQueryCekLogin;
        }
        return null;
    }

    function post_datasignup($data) {
        $cmd = "INSERT INTO customer( `ID_MEMBERSHIP`, `NAMA_CUSTOMER`, `ALAMAT`, `PHONE`, `EMAIL`, `PASSWORD`, `DELETE_CUSTOMER`) VALUES ('REGU', :nama,'-', '-', :email, :password_customer,'0')";

        $result =DB::insert($cmd, $data);
        return $result;
    }







}
