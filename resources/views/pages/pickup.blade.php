{{-- untuk menghubungkan isi konten request sent ke template --}}
@extends('layout.in')

{{-- mengisi value title ke template --}}
@section('title', 'Pick Up')

@section('content')
<section id='pickup'>
    <div id = "paragraft">
        <h1>Request Pick Up</h1>
        <div class = "box-login">
            <div class="form-group">
                <label for="exampleInputEmail1"  class="col-sm-2 col-form-label" >Nama</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            </div>
            <div class="form-group">
                <label for="inputPassword" class="col-sm-2 col-form-label">Kontak</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            </div>
        </div>
        <div class = "box-login-2">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div>
    </div>
    <div id = "paragraft2">
        <div id = "border">
            <img src = "laundryResource/border.png">
        </div>
        <h1>Konfirmasi Pick-up Laundry</h1>
        <h2>ketentuan</h2>
        <h3>Barang yang sudah di pick up tidak dapat dibatalkan</h3>

    </div>
</section>

@endsection
