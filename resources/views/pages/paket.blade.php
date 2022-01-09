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
    <div id = 'Barisan1'>
        <div id = 'Paket1'>
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
                    <div id = 'button'> <a href="/pickup">Pesan</a> </div>
                </div>
            </div>
        </div>
        <div id = 'Paket2'>
            <div class="Foto2">
                <img src = "laundryResource/paketSepatu.png">
            </div>
            <div id = 'PaketSepatu'>
                <h2> Paket Sepatu</h2>
                <h3> Paket cuci sepatu dengan pengerjaan</h3>
                <h3>dry clean serta menggunakan Shoes</h3>
                <h3>Laundry Machine dengan estimasi</h3>
                <h3>pengerjaan 1-2 hari.</h3>
                <div id = 'Harga'>
                    <h4>Rp.15.000 / pasang</h4>
                    <div id = 'button'> <a href="/pickup">Pesan</a> </div>
                </div>
            </div>
        </div>
    </div>
    <div id = 'Barisan2'>
        <div id = 'Paket3'>
            <div class="Foto3">
                <img src = "laundryResource/paketBed.png">
            </div>
            <div id = 'PaketBed'>
                <h2> Paket Bed</h2>
                <h3> Paket cuci bed cover dengan proses</h3>
                <h3> tenaga profesional serta mesin cuci</h3>
                <h3> dengan seri UltraEco</h3>
                <div id = 'Harga'>
                    <h4>Rp.17.000 / kg</h4>
                    <div id = 'button'> <a href="/pickup">Pesan</a> </div>
                </div>
            </div>
        </div>
        <div id = 'Paket4'>
            <div class="Foto4">
                <img src = "laundryResource/paketFormal.png">
            </div>
            <div id = 'PaketFormal'>
                <h2> Paket Formal</h2>
                <h3> Paket cuci pakaian dengan jenis Blazer,</h3>
                <h3> Jas, dan Almamater, proses pencucian</h3>
                <h3> dengan memperhatikan keterangan</h3>
                <h3> perawatan dari pakaian. estimasi </h3>
                <h3> pengerjaan 2 - 3 hari</h3>
                <div id = 'Harga'>
                    <h4>Rp.15.000 / pcs</h4>
                    <div id = 'button'> <a href="/pickup">Pesan</a> </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
