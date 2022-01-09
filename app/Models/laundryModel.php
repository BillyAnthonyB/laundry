<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\laundryController;

class laundryModel extends Model
{
    //menampilkan semua transaksi di laundryKu
    function get_transaksi($loggedInId) { //tambahin variabel dri controller ke function //INI
        //INI
        $queryTransaksi = "SELECT * FROM laundry_service.transaksi WHERE tanggal BETWEEN (CURDATE() - INTERVAL 60 DAY) AND CURDATE() AND ID_CUSTOMER = :loggedInId ORDER BY TANGGAL DESC;";
        $data = [
            'loggedInId' => $loggedInId
        ]; //declare biar bisa dipake di query //INI
        $executeQueryTransaksi = DB::select($queryTransaksi, $data); //tambahin data //INI
        return $executeQueryTransaksi; //INI
    }

    function get_paketdipilih($loggedInId) { //tambahin variabel dri controller ke function //INI
        //INI
        $querypaketdipilih = "SELECT * FROM laundry_service.transaksi WHERE tanggal BETWEEN (CURDATE() - INTERVAL 60 DAY) AND CURDATE() AND STATUS_BAYAR = 0 AND ID_CUSTOMER = :loggedInId ;";
        $data = [
            'loggedInId' => $loggedInId
        ]; //declare biar bisa dipake di query //INI
        $executeQuerypaketdipilih = DB::select($querypaketdipilih, $data); //tambahin data //INI
        return $executeQuerypaketdipilih; //INI
    }

    //cek apakah alamat user ada sebelum lanjut ke pembayaran
    function get_cekAlamat($loggedInId) {
        $queryCekAlamat = "SELECT ALAMAT, PHONE FROM laundry_service.customer WHERE ID_CUSTOMER = :loggedInId limit 1;";
        $data = [
            'loggedInId' => $loggedInId
        ]; //declare biar bisa dipake di query
        $executeQueryCekAlamat = DB::select($queryCekAlamat, $data);
        return $executeQueryCekAlamat;
    }

    function get_cekAlamatPickup($loggedInId) {
        $queryCekAlamatPickup = "SELECT ALAMAT, PHONE FROM laundry_service.customer WHERE ID_CUSTOMER = :loggedInId limit 1;";
        $data = [
            'loggedInId' => $loggedInId
        ];
        $executeQueryCekAlamatPickup = DB::select($queryCekAlamatPickup, $data);
        return $executeQueryCekAlamatPickup;
    }

    function get_paket() {
        return DB::table('laundry_service.paket')->get();
    }

    function get_belumbayar($loggedInId) {
        $queryharga = "select sum(HARGA) from transaksi where STATUS_BAYAR = '0' and ID_CUSTOMER = :loggedInId";
        $data = [
            'loggedInId' => $loggedInId
        ]; //declare biar bisa dipake di query
        $executequeryharga = DB::select($queryharga, $data);
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

    public function get_id($loginMail){
        $queryId = "SELECT * FROM laundry_service.customer WHERE email = :loginMail;";
        $data = [
            'loginMail' => $loginMail
        ]; //declare biar bisa dipake di query
        $executeQueryId = DB::select($queryId, $data); //tambahin data
        return $executeQueryId;
    }

    public function get_querykartuprofil($loggedInId){
        $querykartu = "SELECT * FROM laundry_service.customer WHERE ID_CUSTOMER = :loggedInId";
        $data = [
            'loggedInId' => $loggedInId
        ];
        $executequerykartu = DB::select($querykartu, $data); //tambahin data
        return $executequerykartu;
    }

    function post_datasignup($data) {
        $cmd = "INSERT INTO customer( `ID_MEMBERSHIP`, `NAMA_CUSTOMER`, `ALAMAT`, `PHONE`, `EMAIL`, `PASSWORD`, `DELETE_CUSTOMER`) VALUES ('REGU', :nama,'-', '-', :email, :password_customer,'0')";

        $result =DB::insert($cmd, $data);
        return $result;
    }

    function post_cekemail($data) {
        $data_baru =[
            'email'=> $data['email']
        ];

        $querycekemail = "SELECT EMAIL FROM customer WHERE EMAIL = :email";
        $result =DB::select($querycekemail, $data_baru);

        // dd($result[0]);
        // die;
        // $datacekemail = [
        //     'email' => $result[0]->EMAIL
        // ]; //declare biar bisa dipake di query
        return $result;

    }

    function post_update($tboxupdateprofil, $loggedInIdUpdate) {

        $queryupdate = "UPDATE customer " .
        "SET NAMA_CUSTOMER = :upnama, PHONE = :upphone, ALAMAT = :upaddress " .
        "WHERE ID_CUSTOMER = :loggedInId ;";
        $dataIdUpdate = [
            'loggedInId' => $loggedInIdUpdate,
            'upnama' => $tboxupdateprofil['upnama'],
            'upphone' => $tboxupdateprofil['upphone'],
            'upaddress' => $tboxupdateprofil['upaddress']
        ]; //declare biar bisa dipake di query
        $executequeryupdate = DB::update($queryupdate, $dataIdUpdate);
        // dd($executequeryupdate);
        return $executequeryupdate;
    }

    //update status bayar
    function get_updateStatusBayar($loggedInId){
        $updateStatusBayar = "UPDATE transaksi".
                            " SET STATUS_BAYAR = '1'".
                            " WHERE STATUS_BAYAR = '0' AND ID_CUSTOMER = :loggedInId;";
        $data = [
        'loggedInId' => $loggedInId
        ]; //declare biar bisa dipake di query
        $executeUpdateStatusBayar = DB::update($updateStatusBayar, $data);
        return $executeUpdateStatusBayar;
    }

    function get_paymentsilver($loggedInId) {
        $queryCeksilver = "update customer set ID_MEMBERSHIP = 'SILV' where ID_CUSTOMER = :loggedInId";
        $data = [
            'loggedInId' => $loggedInId
        ]; //declare biar bisa dipake di query
        $executeQueryCekpaymentsilv = DB::update($queryCeksilver, $data);
        return $executeQueryCekpaymentsilv;
    }

    function get_paymentplatinum($loggedInId) {
        $queryCekplat = "update customer set ID_MEMBERSHIP = 'PLAT' where ID_CUSTOMER = :loggedInId";
        $data = [
            'loggedInId' => $loggedInId
        ]; //declare biar bisa dipake di query
        $executeQueryCekpaymentplat = DB::update($queryCekplat, $data);
        return $executeQueryCekpaymentplat;
    }

    function get_hargafix($loggedInId) {
        $queryhargafix = "select sum(HARGA) as `hargafix` from transaksi where STATUS_BAYAR = '0' and ID_CUSTOMER = :loggedInId";
        $data = [
            'loggedInId' => $loggedInId
        ]; //declare biar bisa dipake di query
        $executequeryharga = DB::select($queryhargafix, $data);
        return $executequeryharga;
    }

    public function get_pass($loginMail){
        $data = [
            'loginMail' => $loginMail
        ]; //declare biar bisa dipake di query
        $queryPass = "SELECT `PASSWORD` FROM customer  WHERE EMAIL = :recoveryEmail;";
        $executeQueryPass = DB::select($queryPass, $data); //tambahin data
        return $executeQueryPass[0];
    }


}
