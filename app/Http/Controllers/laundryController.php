<?php

namespace App\Http\Controllers;

use App\Models\adminModel;
use Illuminate\Http\Request;
use App\Models\laundryModel;
use App\Models\User;
use Illuminate\Support\Facades\Main;
use Exception;
use Illuminate\Support\Facades\Hash;
use Auth;
use Illuminate\Support\Facades\Session;
// use illuminate\contract\Mailer;
use Illuminate\Support\Facades\Mail;
use App\Http\Controller\DB;



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
        Session::flash('alamat', 'Mohon mengisi alamat terlebih dahulu !');
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

    public function session_login(Request $req){
        $login = Session::get('login');
        if($login != '')
        {
           Session::put('login', $login);
           return view('pages/home');
        }
        else{
            return redirect('/login');
        }
    }

    public function send_login(Request $request)
    {
        session_start();

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
            $cookieID = $request->input('loginEmail');
            $cookiePass = $request->input('loginPassword');
            setcookie($cookieID,$cookiePass);

            return redirect('/');
        }
        else
        {
            //buat logika if buat login id dan pass karyawan
            $loginCountCheckKaryawan = $sambungKeModel -> cekLoginKaryawan($tboxLogin);
            if($loginCountCheckKaryawan)
            {
                Session::put('login', $loginMail);
                Session::put('pass', $loginPass);
                return redirect('/laundry-management');
            }

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

        $sambungpostupdate = new laundryModel();

        $tboxupdateprofil = [
            'upnama'=>$updatenama,
            'upphone' =>$updatenohp,
            'upaddress' =>$updateaddress
        ];
        $loggedInIdUpdate = Session::get('id');

        $checkUpdate = $sambungpostupdate->post_update($tboxupdateprofil, $loggedInIdUpdate);

        if($checkUpdate==1){
            // echo 'berhail perbarui data diri';

            // // $hasloginupdate = $request->session()->has('login');

            $Id = $sambungpostupdate -> get_querykartuprofil($loggedInIdUpdate);

            Session::put('nama', $Id[0] -> NAMA_CUSTOMER); //buat session yang isinya nama customer
            Session::put('alamat', $Id[0] -> ALAMAT);
            Session::put('hp', $Id[0] -> PHONE);

            Session::flash('success', 'Anda berhasil memperbarui data diri');
            return redirect('/updateprofile');

            Session::flash('loginError', 'Mohon lengkapi data alamat dan kontak.');

        }
        // echo 'gagal';
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

    public function send_querykartuprofil()
    {
        $loggedInId = Session::get('id');

        $cekMembership = $this -> laundryModel ->get_querykartuprofil($loggedInId);

        //klo ga ada alamat, flash minta lengkapi data
        if($cekMembership[0]->ALAMAT === '-'){
            Session::flash('loginError', 'Mohon lengkapi data alamat dan kontak anda');
        }
        // dd($cekAlamatPickup);
        return view('pages/updateprofile', ['cekMembership' => $cekMembership]);
    }

    public function send_inserttransaksi()
    {
        $user = new laundryModel();
        $loggedInId = Session::get('id');
        $cekMembership = $this -> laundryModel ->get_querykartuprofil($loggedInId);
        $inserttransaksi = $user -> post_transaksi($loggedInId, $cekMembership);
        return redirect('/requestsend');
    }

    public function forgot_password(Request $req){
        $emailuser = $_POST['recoveryEmail'];
        $modelLaundry = new laundryModel;
        $get_pass = $modelLaundry->get_pass($emailuser);
        $data = array(
            'Email' => $emailuser,
            'Password' => $get_pass->PASSWORD
        );
        try{
                        // Mail::send('pages/recoverypass', array('pesan' => $get_pass) , function($pesan) use($request){
                        //     $pesan->to("prasetyon100402@gmail.com",'Verifikasi')->subject('Password Recovery');
                        //     $pesan->from(env('MAIL_USERNAME','luxurybubblelaundry@gmail.com'),'Luxury Bubble');
                        // });
            Mail::send('pages/recoverypass', $data, function($data) use($req){
                // dd($data)
                // $data->to("prasetyon100402@gmail.com", 'verifikasi')->subject('Password recovery');
                $data->to($req->recoveryEmail, 'verifikasi')->subject('Password recovery');
                $data->from(env('MAIL_USERNAME','luxurybubblelaundry@gmail.com'), 'Luxury Bubble');

            });
        }catch(Exception $e){
            return response (['status' => false, 'errors' => $e->getMessage()]);
        }
        return redirect('recoverysend');
    }

    public function send_admin(){

        $model = new adminModel;
        $transaksiAdmin = $model -> get_admin();
        return view('pages/admincheckorder', ['transaksiAdmin' => $transaksiAdmin]);

        // $transaksiAdmin = adminModel::paginate(2);
        // return view('pages/admincheckorder', ['transaksiAdmin'=> $transaksiAdmin]);
    }

    public function updateTable($id_transaksi, Request $request){
        $model = new adminModel;
        $upTable = $model->update_table($request, $id_transaksi);

        return redirect('/laundry-management');
    }

    public function selectTable($id_transaksi){
        $model = new adminModel;
        $selectTableEdit = $model->select_table($id_transaksi);

        return view('pages/adminedit', ['selectTableEdit' => $selectTableEdit]);
    }





}
