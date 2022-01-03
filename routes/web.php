<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
return view('pages/home');
});

Route::get('/in', function () {
    return view('layout/in');
    });

Route::get('/home', 'App\Http\Controllers\laundryController@homeindex');

Route::get('/paket', function () {
    return view('pages/paket');
});

Route::get('/pickup', function () {
    return view('pages/pickup');
});

Route::get('/membership', function () {
    return view('pages/membership');
});

// Route::get('/laundryku', 'App\Http\Controllers\laundryController@send_transaksi');
// Route::get('/laundryku', 'App\Http\Controllers\laundryController@send_cekAlamat');
Route::get('/laundryku', 'App\Http\Controllers\laundryController@send_queryLaundryKu');



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

Route::get('/login', 'App\Http\Controllers\laundryController@loginIndex');
Route::post('/login', 'App\Http\Controllers\laundryController@send_login');

Route::get('/recovery', function () {
    return view('pages/recovery');
});

Route::get('/signup', 'App\Http\Controllers\laundryController@regindex');
Route::post('/signup', 'App\Http\Controllers\laundryController@regstore');
Route::get('/recoverysend', function () {
    return view('pages/recoverysend');
});

Route::get('/requestsend', function () {
    return view('pages/requestsend');
});

Route::get('/admincheckorder', function () {
    return view('pages/admincheckorder');
});

Route::get('/paymentreceived', function () {
    return view('pages/paymentreceived');
});

//SEMENTARA BUAT DEBUG
Route::get('/debug', function () {
    return view('layout/in');
});



