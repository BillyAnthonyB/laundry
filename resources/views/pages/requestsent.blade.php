{{-- untuk menghubungkan isi konten request sent ke template --}}
@extends('layout.in')

{{-- mengisi value title ke template --}}
@section('title', 'Request Sent')

@section('content')
<section id='requestsend'>
    <div id = "paragraft">
        <h1>1. Apa yang harus saya lakukan</h1>
        <h2>Pisahkan laundry ke kantong plastik berbeda berdasarkan kategorinya:</h2>
        <h2><li>Bed (bed cover, sarung bantal, sarung guling, selimut)</li></h2>
        <h2><li>Komplit (baju, celana, kaus kaki, pakaian dalam, pakaian sehari-hari)</li></h2>
        <h2><li>Sepatu (sepatu, sandal)</li></h2>
        <h2><li>Formal (jas, almamater, blazer, kebaya, gaun)</li></h2>
        <h1>2. Tunggu kurir menjemput pesanan anda</h1>
        <h1>3. Lakukan pembayaran</h1>
    </div>
</section>

@endsection
