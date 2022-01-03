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
                <h6>INV/1233848 Bed - Paket</h6><br>
                <div id = "harga">
                    <h6>Total : &nbsp</h6>
                    <h6> 3 kg</h6>
                </div>
            </div>
        </div>
        <div id = "paragraf2">
            <!-- <h6>Pemesanan dan pembayaran</h6> -->
            <h6>Pemesan: <b>Budi - Jl. Merdeka no. 1</b></h6><br>
            <h6><b>Metode pembayaran :</h6>
            <input type ="radio" name="payment" id="ovo" class = "pembayaran">
            <label for="ovo">
                <img src="laundryResource/ovo.png">
            </label>
            <input type ="radio" name="payment" id="gopay" class = "pembayaran">
            <label for="gopay">
                <img src="laundryResource/gopay.png">
            </label>
            <input type ="radio" name="payment" id="dana" class = "pembayaran">
            <label for="dana">
                <img src="laundryResource/dana.png">
            </label>
        </div>
    </div>
    <div id = "paymentbox2">
        <div class = "kotak">
            <div id = "paragraf1">
                <h4>Ringkasan Belanja</h4><br>
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
                <div id = 'bayar'> <a href = "http://127.0.0.1:8000/paymentreceived">  Bayar Sekarang</a> </div>
            </div>
        </div>
    </div>

    <script>

    </script>
</section>

@endsection
