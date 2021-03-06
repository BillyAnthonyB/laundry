{{-- untuk menghubungkan isi konten request sent ke template --}}
@extends('layout.main')

{{-- mengisi value title ke template --}}
@section('title', 'Pick Up')

@section('content')
@if (Session::has('login'))
        {{-- ini navbar udah login --}}






<section id='pickup'>
    <div id = "paragraft">
        <h1>Ajukan Pick Up</h1>
        <div class = "box-login">
            <div class="form-group">
                <label for="exampleInputEmail1"  class="col-sm-2 col-form-label" >Nama</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" {{Session() -> get('nama')}}" disabled>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="col-sm-2 col-form-label" >Kontak</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" {{Session() -> get('hp')}}" disabled>
            </div>
        </div>
        <div class = "box-login-2">
            <div class="form-group">
                <label for="exampleInputEmail1"  class="col-sm-2 col-form-label" >Alamat</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" {{Session() -> get('alamat')}}" disabled>
            </div>
        </div>
        <div id = "buttonkiri">
            <a href ="/updateprofile"><div id = 'edit'>Edit kontak dan Alamat </div></a>

        </div>
    </div>
    <div id = "paragraft2">
        <div id = "text">
            <h1>Konfirmasi Pick-up Laundry</h1><br><br>
            <h2>Ketentuan : <br>Barang yang sudah di pick up tidak dapat dibatalkan</h2>
                @foreach ($cekAlamatPickup as $hasilCekAlamatPickup)
            <?php
                $adaAlamatPickup = "/ajukan-pickup";
                $tidakAdaAlamatPickup  = "/updateprofile";
                if ($hasilCekAlamatPickup ->ALAMAT == '-')
                {

                    echo "<div id = 'button'> <div id = 'image'> <img src = 'laundryResource/Protect2.png'></div> <div id = 'ajukan'> <a href = ".$tidakAdaAlamatPickup.">Ajukan Pickup</a> </div></div>";
                }
                else
                {
                    echo "<div id = 'button'> <div id = 'image'> <img src = 'laundryResource/Protect2.png'></div> <div id = 'ajukan'> <a href = ".$adaAlamatPickup.">Ajukan Pickup</a> </div></div>";
                }
                ?>
            @endforeach
        </div>
        <!-- <div id = "button">
            <div id = "image">
                <img src = "laundryResource/Protect2.png">
            </div>
            <div id = 'ajukan'> <a>Ajukan Pickup</a> </div>
        </div> -->
    </div>
</section>
@else
<meta http-equiv="Refresh" content="0; url='/login'" />
@endif
@endsection
