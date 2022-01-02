{{-- untuk menghubungkan isi konten home ke template --}}
@extends('layout.main')

{{-- mengisi value title ke template --}}
@section('title', 'Luxury Bubble: Laundry Service')

<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

@section('content')

{{-- foto, text, button 'laundry now!' --}}
<section id = 'homeLanding'>
    <img src='laundryResource/landing.png'>
    <div id = 'header'>
        <h1>Bersihnya mewah!</h1>
    </div>
    <div id = 'paragraf'>
        <p>Pengen ngerasain jadi sultan?<br> Sekarang cuci baju bisa sambil rebahan loh~<br>Yuk, ambil gadgetmu dan laundry sekarang!
    </div>
    <div id = 'button'>
        <div id = 'laundryNow'>
            <a href="http://localhost:8000/paket">Laundry sekarang!</a>
        </div>
    </div>
<section>

{{-- gimana sih cara laundry disini? --}}
<section id = 'howTo'>
    <h6>Gimana sih cara laundry disini?</h6>
    <div class="gallery">
        <div class="title">1</div>
        <div class="desc">Daftar atau masuk dengan akun-mu</div>
    </div>
    <div class="gallery">
        <div class="title">2</div>
        <div class="desc">Buat pesanan-mu melalui fitur Pick-up</div>
    </div>
    <div class="gallery">
        <div class="title">3</div>
        <div class="desc">Tunggu hingga pakaianmu dijemput</div>
    </div>
    <div class="gallery">
        <div class="title">4</div>
        <div class="desc">Setelah pakaian dijemput, tunggu notifikasi pembayaran</div>
    </div>
    <div class="gallery">
        <div class="title">5</div>
        <div class="desc">Lakukan pembayaran, laundry akan segera kami proses!</div>
    </div>
    <div id = 'button'>
        <div id = 'pesanSekarang'>
            <a href="http://localhost:8000/paket">Pesan sekarang</a>
        </div>
    </div>
</section>

{{-- kenapa laundry disini --}}
<section id = 'why'>
    <h6>Kenapa laundry disini?</h6>
    <div class="icon">
        <img src = "laundryResource/money.png">
        <div class="descWhy">Luxury Bubble memberikan service kualitas pejabat, dengan harga bersahabat.</div>
    </div>
    <div class="icon">
        <img src = "laundryResource/shirt.png">
        <div class="descWhy">Pengerjaan di lakukan dengan metode pencucian profesional sesuai dengan kriteria pakaian anda.</div>
    </div>
    <div class="icon">
        <img src = "laundryResource/machine.png" >
        <div class="descWhy">Mesin operasional laundry, semuanya adalah mesin terbaik sehingga memberikan hasil maksimal pada pakaian anda.</div>
    </div>
    <div class="icon">
        <img src = "laundryResource/numberone.png" >
        <div class="descWhy">Salah satu Laundry online terbaik dan terpercaya di indonesia. Solusi simpel kebutuhan laundry anda.</div>
    </div>
</section>

{{-- Cari paket yang sesuai dan membership --}}
<section id = "paketDanMember">
    <img id = "iron" src = "laundryResource/iron.png">
    <div id = "iconPaket">
        <div id="descIconPaket">Cari paket yang <br>sesuai untukmu!</div>
        <div id = 'button'> <a href="http://localhost:8000/paket">Cek Paket</a> </div>
    </div>
    <img id = "diskon" src = "laundryResource/12.png">
    <div id = "iconMember">
        <div id="descIconMember">Jadi Member dapat diskon, loh!</div>
        <div id = 'button'> <a href="http://localhost:8000/membership">Gabung Sekarang</a> </div>
    </div>
</section>

@endsection
