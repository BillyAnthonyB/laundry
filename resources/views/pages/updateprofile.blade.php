{{-- untuk menghubungkan isi konten update profile ke template --}}
@extends('layout.in')

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
           <div id = 'batal'> <a>batal</a> </div>
           <div id = 'simpan'> <a>simpan</a> </div>
        </div>
        <div id = "memberupdate">
            <h3>Perbarui Membership</h3>
        <div id = 'perbarui'> <a>perbarui</a> </div>
    </div>
    </form>
    <div id = "imageupdateprofile">
        <img src = "laundryResource/update.png">
    </div>
</div>

@endsection
