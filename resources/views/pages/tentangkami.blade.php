{{-- untuk menghubungkan isi konten tentang kami ke template --}}
@extends('layout.main')

{{-- mengisi value title ke template --}}
@section('title', 'Tentang Kami')

@section('content')
<div class = "judul-tentangkami">
    <h1>Tentang Kami</h1>
    <h5>Luxury Bubble merupakan perusahaan yang bergerak di bidang Laundry atau pencucian pakaian. Berdiri sejak tahun 2020, Luxury Bubble laundry sudah beroperasi di beberapa kota di indonesia seperti Jakarta, Surabaya, Makassar, serta Kalimantan. Dengan penerapan laundry berbasis online, Luxury Bubble memudahkan kita dalam melakukan pemesanan laundry tanpa harus datang ke outlet - outlet laundry. </h5>
</div>
<div class = "button-tentangkami-FAQ">
    <a>FAQ</a>
</div>
<div class = "havemore">
    <a>Have More Questions?</a>
</div>
<div class = "button-tentangkami-contactus">
    <a>Contact Us</a>
</div>
@endsection
