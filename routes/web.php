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

// Route::get('/pickup', function () {
//     return view('pages/pickup');
// });

Route::get('/membership', function () {
    return view('pages/membership');
});

Route::get('/pickup', 'App\Http\Controllers\laundryController@send_querycekAlamatPickup');
Route::get('/ajukan-pickup', 'App\Http\Controllers\laundryController@send_inserttransaksi');


// Route::get('/laundryku', 'App\Http\Controllers\laundryController@send_transaksi');
// Route::get('/laundryku', 'App\Http\Controllers\laundryController@send_cekAlamat');
Route::get('/laundryku', 'App\Http\Controllers\laundryController@send_queryLaundryKu');

Route::get('/faq', function () {
    return view('pages/faq');
});

Route::get('/tentang-kami', function () {
    return view('pages/tentangkami');
});

Route::get('/updateprofile', 'App\Http\Controllers\laundryController@send_querykartuprofil');
Route::post('/updateprofile', 'App\Http\Controllers\laundryController@sendqueryupdate');

// Route::get('/payment', function () {
//     return view('pages/payment');
// });
Route::get('/payment', 'App\Http\Controllers\laundryController@send_querypayment');


Route::get('/payment-platinum', function () {
    return view('pages/paymentmembership');
});
Route::get('/payment-silver', function () {
    return view('pages/paymentmembershipp');
});

Route::get('/pay-silver', 'App\Http\Controllers\laundryController@payment_silver');
Route::get('/pay-platinum', 'App\Http\Controllers\laundryController@payment_platinum');

Route::get('/pay-laundry', 'App\Http\Controllers\laundryController@send_updateStatusBayar');

Route::get('/login', 'App\Http\Controllers\laundryController@loginIndex');
Route::post('/login', 'App\Http\Controllers\laundryController@send_login');

// Route::get('/laundry-management', function () {
//     return view('pages/admincheckorder');
// });

Route::get('/laundry-management', 'App\Http\Controllers\laundryController@send_admin');


Route::get('/recovery', function () {
    return view('pages/recovery');
});
Route::post('/recovery', 'App\Http\Controllers\laundryController@forgot_password');

Route::get('/signup', 'App\Http\Controllers\laundryController@regindex');
Route::post('/signup', 'App\Http\Controllers\laundryController@regstore');

Route::get('/logout', 'App\Http\Controllers\laundryController@logout');


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

Route::get('/recoverypass', function () {
    return view('pages/recoverypass');
});
Route::post('/recoverypass', 'App\Http\Controllers\laundryController@send_pass');








