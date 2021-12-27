{{-- untuk menghubungkan isi konten request sent ke template --}}
@extends('layout.in')

{{-- mengisi value title ke template --}}
@section('title', 'Request Sent')

@section('content')
<section id='requestsend'>
    <div id = "paragraft">
        <h1>Apa yang harus saya lakukan</h1>
        <h2>1. Pisahkan laundry ke kantong plastik berbeda berdasarkan kategorinya:</h2>
        <h2><li>Bed (bed cover, sarung bantal, sarung guling, selimut)</li></h2>
        <h2><li>Komplit (baju, celana, kaus kaki, pakaian dalam, pakaian sehari-hari)</li></h2>
        <h2><li>Sepatu (sepatu, sandal)</li></h2>
        <h2><li>Formal (jas, almamater, blazer, kebaya, gaun)</li></h2>
        <h2>2. Tunggu kurir menjemput pesanan anda</h2>
        <h2>3. Lakukan pembayaran</h2>
    </div>
    <div id = "paragraft2">
                <div id = "border">
                    <img src = "laundryResource/border.png">
                </div>
            <div id = "permintaan">
                <h1>Permintaan Pick-up diterima</h1>
                <div id = "image">
                    <img src = "laundryResource/Protect.png">
                </div>
            </div>
        <h2>Kurir kami akan segera menjemput pesanan anda</h2>
        <h3>Mohon lakukan pembayaran setelah pesanan anda ditimbang</h3>
        <h4>untuk melanjutkan pesanan</h4>
    </div>
</section>

@endsection
