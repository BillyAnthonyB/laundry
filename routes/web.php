<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
return view('pages/home');
});

Route::get('/home', function () {
    return view('pages/home');
});

Route::get('/paket', function () {
    return view('pages/paket');
});

Route::get('/pickup', function () {
    return view('pages/pickup');
});

Route::get('/membership', function () {
    return view('pages/membership');
});

// Route::get('/laundryku', function () {
//     return view('pages/laundryku');
// });

Route::get('/laundryku', 'App\Http\Controllers\laundryController@send_transaksi');


Route::get('/faq', function () {
    return view('pages/faq');
});

Route::get('/tentang-kami', function () {
    return view('pages/tentangkami');
});

Route::get('/updateprofile', function () {
    return view('pages/updateprofile');
});

Route::get('/payment', function () {
    return view('pages/payment');
});

Route::get('/payment-membership', function () {
    return view('pages/paymentmembership');
});

Route::get('/login', function () {
    return view('pages/login');
});

Route::get('/recovery', function () {
    return view('pages/recovery');
});

Route::get('/signup', function () {
    return view('pages/signup');
});

Route::get('/recoverysend', function () {
    return view('pages/recoverysend');
});

Route::get('/requestsend', function () {
    return view('pages/requestsend');
});

Route::get('/admincheckorder', function () {
    return view('pages/admincheckorder');
});

//SEMENTARA BUAT DEBUG
Route::get('/debug', function () {
    return view('layout/in');
});



