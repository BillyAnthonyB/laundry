{{-- untuk menghubungkan isi konten update profile ke template --}}
@extends('layout.main')

{{-- mengisi value title ke template --}}
@section('title', 'Perbarui Profil')

@section('content')
@if (Session::has('login'))
        {{-- ini navbar udah login --}}
        @if (Session::has('success'))
            <div class="alertalert-successalert-block">
                <span class="button" onclick="this.parentElement.style.display='none';">&times;</span>
                <strong>{{ Session::get('success') }}</strong>
            </div>
        @endif

        @if (Session::get('alamat') == '-')
             @if (Session::has('alamat'))
            <div class="alertalert-dangeralert-block">
                <span class="button" onclick="this.parentElement.style.display='none';">&times;</span>
                <strong>{{ Session::get('danger') }}</strong>
            </div>
            @endif
        @endif

<div id = "profil">
    <form action="/updateprofile" method="post">
        @csrf
    <h1> Perbarui Profil</h1>
        <div class = "box-login">
            <div class="form-group">
                <label for="exampleInputEmail1"  class="col-sm-2 col-form-label" >Nama</label>
                <input type="text" class="form-control" name = 'updatename' id="exampleInputEmail1" aria-describedby="emailHelp" required value=" {{Session() -> get('nama')}}">
            </div>
            <div class="form-group">
                <label for="inputPassword" class="col-sm-2 col-form-label">No Telepon</label>
                <input type="text" class="form-control" name = 'updatephone' id="exampleInputEmail1" aria-describedby="emailHelp" required value=" {{Session() -> get('hp')}}">
            </div>
            <div class="form-group">
                <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
                <input type="text" class="form-control" name = 'updateaddress' id="exampleInputEmail1" aria-describedby="emailHelp" required value=" {{Session() -> get('alamat')}}">
            </div>
        </div>
        <div id = "button">
            <button type="submit" id="simpan">Simpan</button>
           <!-- <div id = 'batal'> <a>Batal</a> </div> -->
           <!-- <div id = 'simpan'> <a>Simpan</a> </div> -->
        </div>
    </form>
    <div id = "box-gambar">
        <div id = "textmembership">
            <h6>Laundry membershipKu</h6>
        </div>
        <div id = "imageupdateprofile">
            <div id = "container">
                <div id = "card">
                    @foreach($cekMembership as $idmembership)
                    <?php
                    $Platinum  = "<img src ='laundryResource/Platinum.png'>";
                    $Reguler = "<img src ='laundryResource/Reguler.png'>";
                    $Silver = "<img src ='laundryResource/Silver.png'>";
                    if ($idmembership->ID_MEMBERSHIP == "REGU")
                    {
                        echo $Reguler;
                    }
                    if ($idmembership->ID_MEMBERSHIP == "SILV")
                    {
                        echo $Silver;
                    }
                    if ($idmembership->ID_MEMBERSHIP == "PLAT")
                    {
                        echo $Platinum ;
                    }
                    ?>
                    @endforeach
                </div>
            </div>
        </div>
        <div id = "memberupdate">
            <h3>Perbarui Membership</h3>
            <div id = 'Perbarui'> <a href = "/membership">Perbarui</a> </div>
        </div>
    </div>
</div>

<script src="app.js"></script>
@else
<meta http-equiv="Refresh" content="0; url='/login'" />
@endif
@endsection
