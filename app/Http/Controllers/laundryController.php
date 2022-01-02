<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laundryModel;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class laundryController extends Controller
{
    //
    function __construct()
    {
        $this->laundryModel = new laundryModel();
    }

    // //kirim hasil query semua transaksi ke laundryku
    // public function send_transaksi()
    // {
    //     $semuaTransaksi = $this -> laundryModel -> get_transaksi();
    //     return view('pages/laundryku', ['semuaTransaksi' => $semuaTransaksi]);
    // }

    // //kirim hasil query cek alamat apakah ada ke laundryku
    // public function send_CekAlamat()
    // {
    //     $cekAlamat = $this -> laundryModel -> get_cekAlamat();
    //     return view('pages/laundryku', ['cekAlamat' => $cekAlamat]);
    // }

    public function send_queryLaundryku()
    {
        $semuaTransaksi = $this -> laundryModel -> get_transaksi();
        $cekAlamat = $this -> laundryModel -> get_cekAlamat();

        return view('pages/laundryku', compact(['semuaTransaksi', 'cekAlamat']));
    }

    public function send_paket()
    {
        $semuaPaket = $this -> laundryModel -> get_paket();
        return view('pages/paket', ['semuaPaket' => $semuaPaket]);
    }


    public function register(){
        $simpanDataUser = $this -> laundryModel -> simpan_user();

    }



    // codingan pak sandhika login
    // public function logindex()
    // {
    //   return view('pages.login', [
    //     'title' => 'login',
    //  'active' => 'login'

    //     ]);
    // }

    // codingan pak sandhika registrasi
    // public function regindex()
    // {
    //     return view('pages.signup', [
    //         'title' => 'signup',
    //         'active' => 'signup'

    //     ]);
    // }

    // public function regstore(request $request)
    // {
    //     $validatedData = $request->validate([
    //         'name' => 'required|max:255',
    //         'email' => 'required|email:dns|unique:customer',
    //         'nohp' => 'required',
    //         'password' => 'required|min:5'
    //     ]);

    //     $validatedData['password'] = Hash::make($validatedData['password']);

    //     User::create($validatedData);

    //     return redirect('/login');

    // }

    // public function logauthenticate(request $request)
    // {
    //     $validasi = $request->validate([
    //         'email' => 'required|email:dns',
    //         'password' => 'required|min:5'

    //     ]);

    //     if(Auth::attempt($validasi)){

    //         $request->session()->regenerate();
    //         return redirect()->intended('/in');

    //     }

    //     return back()->with('loginError', 'login failed');
    // }

    // public function homeindex()
    // {
    //     return view('layout/in');

    // }


}
