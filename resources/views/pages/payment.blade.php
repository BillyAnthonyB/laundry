{{-- untuk menghubungkan isi konten payment ke template --}}
@extends('layout.main')

{{-- mengisi value title ke template --}}
@section('title', 'Payment')

@section('content')
@if (Session::has('login'))
        {{-- ini navbar udah login --}}
        @if (Session::has('success'))
            <div class="alertalert-successalert-block">
                <span class="button" onclick="this.parentElement.style.display='none';">&times;</span>
                <strong>{{ Session::get('success') }}</strong>
            </div>
        @endif
<section id = "payment">
    <div id = "paymentbox1">
        <h1>Payment Page</h1>
        <div class = "kotak">
            <div id = "paragraf">
                <h4>Paket yang dipilih :</h4>
                @foreach($semuaPaketPayment as $paketpayment)
                <div id = "kotakkanan">
                    <div id = "biru">
                        <img src = "laundryResource/biru.png">
                    </div>
                    <div class = "aturtext">
                        <h5>
                        <?php
                            if ($paketpayment->JUMLAH_KOMPLIT != 0)
                            {
                                echo "Komplit: $paketpayment->JUMLAH_KOMPLIT kg &nbsp &nbsp &nbsp";
                            }
                            if ($paketpayment->JUMLAH_BED != 0)
                            {
                                echo "Bed: $paketpayment->JUMLAH_BED kg &nbsp &nbsp &nbsp";
                            }
                            if ($paketpayment->JUMLAH_SEPATU != 0) {
                                echo "Sepatu: $paketpayment->JUMLAH_SEPATU pasang &nbsp &nbsp &nbsp";
                            }
                            if ($paketpayment->JUMLAH_FORMAL != 0) {
                                echo "Formal: $paketpayment->JUMLAH_FORMAL pcs &nbsp &nbsp &nbsp";
                            }
                        ?>
                        </h5>
                        <div id = "flexkanan">
                            <h6>INV/{{ $paketpayment->ID_TRANSAKSI }} </h6>
                            <p> Rp. {{ $paketpayment->HARGA }}</p>
                        </div>
                        <div id = "abu">
                            <img src = "laundryResource/abu.png">
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- <div id = "harga">
                    <h6>Total : &nbsp</h6>
                    <h6> 3 kg</h6>
                </div> -->
            </div>
        </div>
        <div id = "paragraf2">
            <!-- <h6>Pemesanan dan pembayaran</h6> -->
            <h6>Pemesan: <b>{{Session() -> get('nama')}} - {{Session() -> get('alamat')}}</b></h6><br>
            <h6><b>Metode pembayaran :</h6>
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
            <br>&nbsp
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
                @foreach ($checkqueryhargafix as $hargafix)
                <h6 id = "paragraf3">Rp. {{$hargafix->hargafix}}</h6><br>
                @endforeach
            </div>
            <div id = "button">
                <div id = "image">
                    <img src = "laundryResource/Protect2.png">
                </div>
                <div id = 'bayar'> <a href = "/pay-laundry">  Bayar Sekarang</a> </div>
            </div>
        </div>
    </div>

    <script>

    </script>
</section>
@else
<meta http-equiv="Refresh" content="0; url='/login'" />
@endif
@endsection
