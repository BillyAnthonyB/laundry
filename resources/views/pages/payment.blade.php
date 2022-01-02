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
            <h6>Pemesanan dan pembayaran</h6>
            <h6>Pemesan: <b>Budi - Jl. Merdeka no. 1</b></h6><br>
            <div id = "image">
                <img src = "laundryResource/ovo.png">
            </div>
            <form action="/action_page.php">
                    <select name="tanggal" id="tanggal">
                    <option value="laundryResource/ovo.png"> <img src = "laundryResource/ovo.png"></option>
                    <option value="Februari"><img src = "laundryResource/ovo.png"></option>
                    <option value="Maret"><img src = "laundryResource/ovo.png"></option>
                    <option value="April"><img src = "laundryResource/ovo.png"></option>
                    <option value="Mei"><img src = "laundryResource/ovo.png"></option>
                    <option value="Juni"><img src = "laundryResource/ovo.png"></option>
                    <option value="Juli"><img src = "laundryResource/ovo.png"></option>
                    <option value="Agustus"><img src = "laundryResource/ovo.png"></option>
                    <option value="September"><img src = "laundryResource/ovo.png"></option>
                    <option value="Oktober"><img src = "laundryResource/ovo.png"></option>
                    <option value="November"><img src = "laundryResource/ovo.png"></option>
                    <option value="Desember"><img src = "laundryResource/ovo.png"></option>
                    </select>
            </form>
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
