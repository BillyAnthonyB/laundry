{{-- untuk menghubungkan isi konten update profile ke template --}}
@extends('layout.main')

{{-- mengisi value title ke template --}}
@section('title', 'update profile')

@section('content')
<div id = "profil">
    <form>
    <h1> Perbarui Profil</h1>
        <div class = "box-login">
            <div class="form-group">
                <label for="exampleInputEmail1"  class="col-sm-2 col-form-label" >Nama</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            </div>
            <div class="form-group">
                <label for="inputPassword" class="col-sm-2 col-form-label">No Telepon</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            </div>
            <div class="form-group">
                <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            </div>
        </div>
        <div id = "button">
           <div id = 'batal'> <a>Batal</a> </div>
           <div id = 'simpan'> <a>Simpan</a> </div>
        </div>
    </form>
    <div id = "box-gambar">
        <div id = "textmembership">
            <h6>Laundry membershipKu</h6>
        </div>
        <div id = "imageupdateprofile">
            <div id = "container">
                <div id = "card">
                    <img src = "laundryResource/Reguler.png">
                </div>
            </div>
        </div>
        <div id = "memberupdate">
            <h3>Perbarui Membership</h3>
            <div id = 'Perbarui'> <a href = "http://localhost:8000/membership">Perbarui</a> </div>
        </div>
    </div>
</div>

<script src="app.js"></script>


@endsection
