{{-- untuk menghubungkan isi konten payment ke template --}}
@extends('layout.main')

{{-- mengisi value title ke template --}}
@section('title', 'Payment')

@section('content')

<section id = "payment">
    <div id = "paymentbox1">
        <h1>Payment Page</h1>
        <div class = "kotak">
            <div id = "paragraf">
                <h4>Paket yang dipilih :</h4><br>
                <h6>Bed - Komplit  Platinum - Berlaku seumur hidup</h6><br>
                <h6>3 kg total</h6>
            </div>
        </div>
        <div id = "paragraf2">
            <h6>Pemesanan dan pembayaran</h6>
            <h6>Pemesan: <b>Budi - Jl. Merdeka no. 1</b></h6><br>
            <div id = "image">
                <img src = "laundryResource/ovo.png">
            </div>
        </div>
    </div>
    <div id = "paymentbox2">
        <div class = "kotak">
            <div id = "paragraf1">
                <h4>Ringkasan Belanja</h4><br>
                <h6>Pesanan diterima dengan jenis 'Paket Komplit' dan 'Paket Bed'. <h6>
                <h6>Lakukan pembayaran untuk melanjutkan pesanan</h6><br>
            </div>
            <div id = "paragraf2">
                <h6>Total Tagihan</h6>
                <h6 id = "paragraf3">Rp 20.000</h6><br>
            </div>
            <div id = "button">
                <div id = "image">
                    <img src = "laundryResource/Protect2.png">
                </div>
                <div id = 'bayar'> <a>  Bayar Sekarang</a> </div>
            </div>
        </div>
    </div>
</section>

@endsection
