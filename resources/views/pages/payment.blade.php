{{-- untuk menghubungkan isi konten payment ke template --}}
@extends('layout.main')

{{-- mengisi value title ke template --}}
@section('title', 'Payment')

@section('content')

<section id = "payment">
    <div id = "paymentbox1">
        <h1>Payment Page</h1>
        <div id = "border">
                    <img src = "laundryResource/border.png">
                </div>
            <div id = "permintaan">
                <h1>Paket yang dipilih:</h1>
            </div>
        <h2>Bed - Komplit</h2>
        <h3>3 kg total </h3>
    </div>
        <h4>Pemesanan dan pembayaran</h4>
        <h4>Pemesan: Budi - Jl. Merdeka no. 1</h4>
    </div>
    <div id = "paymentbox2">
    <div id = "border">
                    <img src = "laundryResource/border.png">
                </div>
            <div id = "permintaan">
                <h1>Ringkasan Belanja</h1>
                <div id = "image">
                    <img src = "laundryResource/Protect.png">
                </div>
            </div>
        <h2>Pesanan diterima dengan jenis</h2>
        <h3>Lakukan pembayaran untuk melanjutkan pesanan</h3><br>
        <h4>Total tagihan</h4>
        <h5>Rp. 20.000</h5>
        <div id = "button">
           <div id = 'bayar'> <a>Bayar Sekarang</a> </div>
        </div>
    </div>
</section>

@endsection
