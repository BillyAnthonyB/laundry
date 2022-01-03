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
        $semuaTransaksi = $this -> laundryModel -> get_transaksi();
        $cekAlamat = $this -> laundryModel -> get_cekAlamat();

        return view('pages/laundryku', compact(['semuaTransaksi', 'cekAlamat']));
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

        $return = $user->post_datasignup($data);

        if($return==1){
            // echo 'berhail signup';
            Session::flash('success', 'anda berhasil signup');
            return redirect('/login');
        }

        return redirect('/register');
    }

    public function logout(request $request){

        $haslogin = $request->session()->has('login');
        if(isset($haslogin)){
            session::flush();
            // session::flash('exit', 'Anda telah logout!!')
            return redirect('/');
        }
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
