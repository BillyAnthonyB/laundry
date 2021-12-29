{{-- untuk menghubungkan isi konten payment membership ke template --}}
@extends('layout.in')

{{-- mengisi value title ke template --}}
@section('title', 'Payment Membership')

@section('content')

<section id = "paymentmembership">
    <div id = "paymentbox1">
        <h1>Membership Payment Page</h1>
        <div class = "kotak">
            <div id = "paragraf">
                <h4>Jenis Membership yang dipilih:</h4>
                <h6>Platinum - Berlaku seumur hidup</h6>
            </div>
        </div>
        <h6>Pemesanan dan pembayaran</h6>
        <h6>Pemesan: Budi - Jl. Merdeka no. 1</h6>
    </div>


    <div id = "paymentbox2">
        <div class = "kotak">
            <div id = "paragraf1">
                <h4>Ringkasan Belanja</h4>
                <h6>Ringkasan Belanja</h6>
                <h6>Platinum - Berlaku seumur hidup</h6>
            </div>
            <div id = "paragraf2">
                <h6>Total Tagihan</h6>
                <h6>Rp 20.000</h6>
            </div>
            <div id = "button">
                <div id = "image">
                    <img src = "laundryResource/Protect2.png">
                </div>
                <div id = 'bayar'> <a>Bayar Sekarang</a> </div>
            </div>
        </div>
    </div>
</section>

@endsection
