{{-- untuk menghubungkan isi konten request sent ke template --}}
@extends('layout.in')

{{-- mengisi value title ke template --}}
@section('title', 'Pick Up')

@section('content')
<section id='pickup'>
    <div id = "paragraft">
        <h1>Ajukan Pick Up</h1>
        <div class = "box-login">
            <div class="form-group">
                <label for="exampleInputEmail1"  class="col-sm-2 col-form-label" >Nama</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" disabled>
            </div>
            <div class="form-group">
                <label for="inputPassword" class="col-sm-2 col-form-label" >Kontak</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" disabled>
            </div>
        </div>
        <div class = "box-login-2">
            <div class="form-group">
                <label for="exampleInputEmail1"  class="col-sm-2 col-form-label" >Alamat</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" disabled>
            </div>
        </div>
    </div>
    <div id = "paragraft2">
        <div id = "border">
            <img src = "laundryResource/border.png">
        </div>
        <h1>Konfirmasi Pick-up Laundry</h1>
        <h2>Ketentuan :</h2>
        <h3>Barang yang sudah di pick up tidak dapat dibatalkan</h3>
        <div id = "button">
            <div id = "image">
                <img src = "laundryResource/Protect2.png">
            </div>
            <div id = 'ajukan'> <a>Ajukan Pickup</a> </div>
        </div>
    </div>
</section>

@endsection
