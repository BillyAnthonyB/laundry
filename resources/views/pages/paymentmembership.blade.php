{{-- untuk menghubungkan isi konten payment membership ke template --}}
@extends('layout.main')

{{-- mengisi value title ke template --}}
@section('title', 'Payment Membership')

@section('content')
@if (Session::has('login'))
        {{-- ini navbar udah login --}}
        @if (Session::has('success'))
            <div class="alertalert-successalert-block">
                <span class="button" onclick="this.parentElement.style.display='none';">&times;</span>
                <strong>{{ Session::get('success') }}</strong>
            </div>
        @endif
<section id = "paymentmembership">
    <div id = "paymentbox1">
        <h1>Membership Payment Page</h1>
        <!-- <div class = "kotak">
            <div id = "paragraf">
                <h4>Jenis Membership yang dipilih :</h4><br>
                <h6>Platinum - Berlaku seumur hidup</h6>
            </div>
        </div> -->
        <div id = "container">
            <div id = "card">
                <img src = "laundryResource/Platinum.png">
            </div>
        </div>
        <div id = "paragraf2">
            <h6>Pemesan: <b>{{Session() -> get('nama')}}</b></h6><br>
            {{-- - {{Session() -> get('alamat')}} --}}
            <h6><b>Metode Pembayaran : </b></h6>
            <input type ="radio" name="payment" id="ovo" class = "pembayaran" checked="checked">
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
                <h6>Platinum - Berlaku seumur hidup</h6><br>
            </div>
            <div id = "paragraf2">
                <h6>Total Tagihan</h6>
                <h2>Rp 100.000</h2><br>
            </div>
            <div id = "button">
                <div id = "image">
                    <img src = "laundryResource/Protect2.png">
                </div>
                <div id = 'bayar'> <a href="/pay-platinum">  Bayar Sekarang</a> </div>
            </div>
        </div>
    </div>
</section>

<script src="app.js"></script>
@else
<meta http-equiv="Refresh" content="0; url='/login'" />
@endif
@endsection
