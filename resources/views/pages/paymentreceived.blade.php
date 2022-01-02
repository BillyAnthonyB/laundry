{{-- untuk menghubungkan isi konten payment membership ke template --}}
@extends('layout.in')

{{-- mengisi value title ke template --}}
@section('title', 'Payment Membership')

@section('content')
<section id='paymentreceived'>
    <div id = "image">
        <img src = "laundryResource/logoFull.png">
    </div>
    <div id = "text">
        <div id = "payment">
            <h1>Pembayaran telah diterima!</h1>
            <div id = "image">
                <img src = "laundryResource/Protect.png">
            </div>
        </div>
        <h2>Terima kasih atas kepercayaan anda.</h2>
        <div id = 'button'> <a href="http://localhost:8000/">OK</a> </div>
    </div>
</section>
@endsection
