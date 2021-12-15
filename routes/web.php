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

Route::get('/laundryku', function () {
    return view('pages/laundryku');
});

Route::get('/faq', function () {
    return view('pages/faq');
});

Route::get('/tentang-kami', function () {
    return view('pages/tentangkami');
});

Route::get('/udpate-profile', function () {
    return view('pages/updateprofile');
});

Route::get('/request-sent', function () {
    return view('pages/requestsent');
});

Route::get('/payment', function () {
    return view('pages/payment');
});

Route::get('/payment-membership', function () {
    return view('pages/paymentmembership');
});

//SEMENTARA BUAT DEBUGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG
Route::get('/login', function () {
    return view('layout/in');
});



