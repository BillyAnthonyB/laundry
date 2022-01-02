<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laundryModel;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

    public function send_paket()
    {
        $semuaPaket = $this -> laundryModel -> get_paket();
        return view('pages/paket', ['semuaPaket' => $semuaPaket]);
    }

    public function regindex()
    {
        return view('pages.signup', [
            'title' => 'signup',
            'active' => 'signup'

        ]);
    }

    public function regstore(request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:customer',
            'nohp' => 'required',
            'password' => 'required|min:5'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::created($validatedData);

        return redirect('/login');

    }

}
