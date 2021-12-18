{{-- untuk menghubungkan isi konten paket ke template --}}
@extends('layout.main')

<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

{{-- mengisi value title ke template --}}
@section('title', 'Paket Laundry')

@section('content')
<section id = 'PaketLaundry'>
    <div id = 'Paragraft'>
        <h1> Paket Laundry yang tersedia </h1>
    </div>
    <div id = 'Paket'>
        <div class="Foto1">
            <img src = "laundryResource/paketKomplit.png">
        </div>
        <div id = 'PaketKomplit'>
            <h2> Paket Komplit</h2>
            <h3> Paket cucian komplit dengan</h3>
            <h3>pengerjaan oleh tenaga profesional</h3>
            <h3>dengan estimasi 2-3 hari</h3>
            <div id = 'Harga'>
                <h4>Rp.5.000 / kg</h4>
                <div id = 'button'> <a>pesan</a> </div>
            </div>
        </div>
    </div>
</section>

@endsection
