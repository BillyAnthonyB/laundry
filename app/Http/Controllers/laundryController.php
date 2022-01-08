<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laundryModel;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
        $loggedInId = Session::get('id'); //ambil data session isinya id //INI

        $semuaTransaksi = $this -> laundryModel -> get_transaksi($loggedInId); //masukin ke function model //INI
        $cekAlamat = $this -> laundryModel -> get_cekAlamat($loggedInId);

        return view('pages/laundryku', compact(['semuaTransaksi', 'cekAlamat'])); //INI
    }

    public function send_querycekAlamatPickup()
    {
        $loggedInId = Session::get('id');
        $cekAlamatPickup = $this -> laundryModel -> get_cekAlamatPickup($loggedInId);
        // dd($cekAlamatPickup);
        return view('pages/pickup', ['cekAlamatPickup' => $cekAlamatPickup]);
    }

    public function send_updateStatusBayar()
    {
        $loggedInId = Session::get('id');
        $upStatusBayar = $this -> laundryModel -> get_updateStatusBayar($loggedInId);
        return redirect('/paymentreceived');
    }

    public function send_querypayment()
    {
        $loggedInId = Session::get('id'); //ambil data session isinya id //INI
        $semuaPaketPayment = $this -> laundryModel -> get_paketdipilih($loggedInId); //masukin ke function model //INI
        $user = new laundryModel();
        $checkqueryhargafix = $user->get_hargafix($loggedInId);
        return view('pages/payment', compact(['semuaPaketPayment', 'checkqueryhargafix']));
    }


    public function send_paket()
    {
        $semuaPaket = $this -> laundryModel -> get_paket();
        return view('pages/paket', ['semuaPaket' => $semuaPaket]);
    }

    public function send_login(Request $request)
    {
        $loginMail = $request->input('loginEmail');
        $loginPass = $request->input('loginPassword');

        $tboxLogin = [
            'loginEmail' => $loginMail,
            'loginPassword' => $loginPass
        ];

        $sambungKeModel = new laundryModel;
        $loginCountCheck = $sambungKeModel -> cekLogin($tboxLogin);

        if($loginCountCheck)
        {
            $Id = $sambungKeModel -> get_id($loginMail); //nyambung ke model get id membawa var $loginMail

            Session::put('nama', $Id[0] -> NAMA_CUSTOMER); //buat session yang isinya nama customer
            Session::put('alamat', $Id[0] -> ALAMAT);
            Session::put('hp', $Id[0] -> PHONE);

            Session::put('id', $Id[0] -> ID_CUSTOMER); //buat session yang isinya id customer yg login
            Session::put('login', $loginMail);
            Session::put('pass', $loginPass);

            Session::flash('success', 'Anda berhasil login');

            return redirect('/');
        }
        else
        {
            Session::flash('loginError', 'Email atau password salah.');
            return redirect('/login');
        }
    }

    public function loginIndex()
    {
        return view('pages/login', [
            'title' => 'login',
            'active' => 'login'

        ]);
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
        $name = strtolower(stripslashes($_POST['name']));
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = new  laundryModel();

        $data = [

            'nama'=>$name,
            'email' =>$email,
            'password_customer' =>$password

        ];
        // dd($data);

        $checkemail = $user->post_cekemail($data);


        if($checkemail){
            // echo 'maaf email udah di pake';
            Session::flash('error', 'Maaf email telah terdaftar');
            return redirect('/signup');
        }
        else{
            $return = $user->post_datasignup($data);

            if($return==1){
            // echo 'berhail signup';
                 Session::flash('success', 'Anda berhasil signup');
                return redirect('/login');
             }
        }

        // $return = $user->post_datasignup($data);

        // if($return==1){
        //     // echo 'berhail signup';
        //     Session::flash('success', 'Anda berhasil signup');
        //     return redirect('/login');
        // }

        // return redirect('/register');
    }

    public function logout(request $request){

        $haslogin = $request->session()->has('login');
        if(isset($haslogin)){
            session::flush();
            // session::flash('exit', 'Anda telah logout!!')
            return redirect('/');
        }
    }

    public function sendqueryupdate(request $request)
    {
        $updatenama = $request->input('updatename');
        $updatenohp = $request->input('updatephone');
        $updateaddress = $request->input('updateaddress');

        $sambungpostupdate = new  laundryModel();

        $tboxupdateprofil = [
            'upnama'=>$updatenama,
            'upphone' =>$updatenohp,
            'upaddress' =>$updateaddress
        ];
        $loggedInIdUpdate = Session::get('id');

        $checkUpdate = $sambungpostupdate->post_update($tboxupdateprofil, $loggedInIdUpdate);

        if($checkUpdate==1){
            // echo 'berhail perbarui data diri';
            // $hasloginupdate = $request->session()->has('login');
            // $Id = $sambungpostupdate -> get_id($hasloginupdate); //nyambung ke model get id membawa var $loginMail

            // Session::put('nama', $Id[0] -> NAMA_CUSTOMER); //buat session yang isinya nama customer
            // Session::put('alamat', $Id[0] -> ALAMAT);
            // Session::put('hp', $Id[0] -> PHONE);

            Session::flash('success', 'anda berhasil memperbarui data diri');
            return redirect('/updateprofile');
        }
        echo 'gagal';
        // return redirect('/updateprofile');
    }

    public function updateindex()
    {
        return view('pages.updateprofile', [
            'title' => 'updateprofile',
            'active' => 'updateprofile'
        ]);
    }

    public function payment_silver()
    {
        $user = new laundryModel();
        $loggedInId = Session::get('id');

        $checkquerypayment = $user->get_paymentsilver($loggedInId);
        // dd($checkquerypayment);

        return redirect('/paymentreceived');
        // return redirect('/paymentreceived');

    }

    public function payment_platinum()
    {
        $user = new laundryModel();
        $loggedInId = Session::get('id');

        $checkquerypaymentplat = $user->get_paymentplatinum($loggedInId);
        // dd($checkquerypaymentplat);

        return redirect('/paymentreceived');
        // return redirect('/paymentreceived');

    }







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
    //     return view('pages/home');

    // }

    // public function register(Request $request)
    // {


    //     $simpanDataUser = $this -> laundryModel -> post_datasignup();

    //     return redirect('/login');

    // }

    // public function logindex()
    // {
    //   return view('pages.login', [
    //     'title' => 'login',
    //     'active' => 'login'

    //     ]);
    // }

}
