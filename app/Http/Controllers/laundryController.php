<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laundryModel;

class laundryController extends Controller
{
    //
    function __construct()
    {
        $this->laundryModel = new laundryModel();
    }

    public function send_transaksi()
    {
        $semuaTransaksi = $this -> laundryModel -> get_transaksi();
        return view('pages/laundryku', ['semuaTransaksi' => $semuaTransaksi]);
    }
}