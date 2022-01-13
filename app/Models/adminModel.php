<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\laundryController;

class adminModel extends Model
{
    use HasFactory;

    protected $table = "transaksiAdmin";

    public function get_admin(){
        // $queryAdmin = "select t.id_transaksi, t.ID_MEMBERSHIP, t.ID_CUSTOMER, t.TANGGAL , c.NAMA_CUSTOMER, c.PHONE, c.ALAMAT, t.JUMLAH_KOMPLIT, t.JUMLAH_BED, t.JUMLAH_FORMAL, t.JUMLAH_SEPATU, t.HARGA, t.STATUS_CUCI, t.STATUS_BAYAR from transaksi t left join customer c on t.ID_CUSTOMER = c.ID_CUSTOMER";
        // $executeQueryAdmin = DB::select($queryAdmin);
        // return $executeQueryAdmin;

        $queryAdmin = DB::table('transaksi')
        ->join('customer', 'customer.ID_CUSTOMER', '=', 'transaksi.ID_CUSTOMER')
        ->select('transaksi.id_transaksi', 'transaksi.ID_MEMBERSHIP', 'transaksi.ID_CUSTOMER', 'transaksi.TANGGAL' , 'customer.NAMA_CUSTOMER', 'customer.PHONE', 'customer.ALAMAT', 'transaksi.JUMLAH_KOMPLIT', 'transaksi.JUMLAH_BED', 'transaksi.JUMLAH_FORMAL', 'transaksi.JUMLAH_SEPATU', 'transaksi.HARGA', 'transaksi.STATUS_CUCI', 'transaksi.STATUS_BAYAR')
        ->paginate(7);
        return $queryAdmin;
    }

    public function select_table($id_transaksi){
        $selectAdmin = DB::table('transaksi') -> where('transaksi.id_transaksi', $id_transaksi)
        ->join('customer', 'customer.ID_CUSTOMER', '=', 'transaksi.ID_CUSTOMER')
        ->select('transaksi.id_transaksi', 'transaksi.ID_MEMBERSHIP', 'transaksi.ID_CUSTOMER', 'transaksi.TANGGAL' , 'customer.NAMA_CUSTOMER', 'customer.PHONE', 'customer.ALAMAT', 'transaksi.JUMLAH_KOMPLIT', 'transaksi.JUMLAH_BED', 'transaksi.JUMLAH_FORMAL', 'transaksi.JUMLAH_SEPATU', 'transaksi.HARGA', 'transaksi.STATUS_CUCI', 'transaksi.STATUS_BAYAR')
        ->get();
        return $selectAdmin;
    }

    // public function update_table($id_transaksi){
    //     //query update dari ari

    //     // DB::table('mahasiswa')->insert(
    //     //     [
    //     //         'nim' => $request->nim,
    //     //         'nama' => $request->nama,
    //     //         'tempat_lahir' => '',
    //     //         'tanggal_lahir' => date("Ymd"),
    //     //         'fakultas' => '',
    //     //         'program_studi' => '',
    //     //         'ipk' => 0
    //     //     ]);

    //         DB::table('transaksi')
    //         ->where('id_transaksi', $id_transaksi)
    //         ->update(
    //                 [
    //                     'JUMLAH_KOMPLIT' => $request->tboxKomplit,
    //                     'JUMLAH_BED' => $request->tboxBed,
    //                     'JUMLAH_SEPATU' => $request->tboxSepatu,
    //                     'JUMLAH_FORMAL' => $request->tboxFormal
    //                 ]);
    // }



}
