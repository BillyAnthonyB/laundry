<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <title>Admin</title>
</head>
<body>

</body>
</html>

@if (Session::has('login'))

<section id='admin'>
    <div id= "flex">
        <div id = "imageadmin">
            <img src = "laundryResource/logo.png">
        </div>
        <div id = "judul">
            <h3>Luxury Bubble: Laundry Service Admin Page</h3>
            <h1>Edit Pesanan</h1>
        </div>
        <div id = "exit">
            <img src ="LaundryResource/exit.png"><a href="/logout">Keluar</a>
        </div>
    </div>

    <div id = "kotak">
        <!-- <div id = "text"> -->
            <!-- <div id = "paragraf">
                <div class="mb-3 row">
                    <label for="exampleInputEmail1"  class="col-sm-2 col-form-label" > Modify Order &nbsp &nbsp </label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search by transaction code">
                    </div>
                </div>
            </div> -->
            <!-- <form action="/action_page.php">
                    <select name="tanggal" id="tanggal">
                    <option value="Januari">Januari</option>
                    <option value="Februari">Februari</option>
                    <option value="Maret">Maret</option>
                    <option value="April">April</option>
                    <option value="Mei">Mei</option>
                    <option value="Juni">Juni</option>
                    <option value="Juli">Juli</option>
                    <option value="Agustus">Agustus</option>
                    <option value="September">September</option>
                    <option value="Oktober">Oktober</option>
                    <option value="November">November</option>
                    <option value="Desember">Desember</option>
                    </select>
            </form> -->
        <!-- </div> -->
        <br>
        {{-- dsni pasang tabel --}}
        <table id="adminTable">
            <tr>
              <th>Tanggal</th>
              <th>Nama</th>
              <th>Kontak</th>
              <th>Alamat</th>
              <th>Paket Komplit</th>
              <th>Paket Bed</th>
              <th>Paket Formal</th>
              <th>Paket Sepatu</th>
              <th>Status Cuci</th>
              <th>Status Bayar</th>
              <th>Harga (Rp.)</th>
              <th>Edit Pesanan</th>

            </tr>

            @foreach ($transaksiAdmin as $admin)
            <tr>
                <td>{{$admin->TANGGAL}}</td>
                <td>{{$admin->NAMA_CUSTOMER}}</td>
                <td>{{$admin->PHONE}}</td>
                <td>{{$admin->ALAMAT}}</td>
                <td>{{$admin->JUMLAH_KOMPLIT}}</td>
                <td>{{$admin->JUMLAH_BED}}</td>
                <td>{{$admin->JUMLAH_FORMAL}}</td>
                <td>{{$admin->JUMLAH_SEPATU}}</td>
                @if ($admin->STATUS_CUCI== 0)
                    <td><img src="laundryResource/proses.png" width="88%"></td>
                @else
                <td><img src="laundryResource/selesai.png" width="88%"></td>
                @endif

                <form method="post">
                    {{ csrf_field() }}
                    {{-- <td><input type="text" class="form-control" name = 'tboxKomplit' id="exampleInputEmail1"  value="{{$admin->JUMLAH_KOMPLIT}}"></td>
                    <td><input type="text" class="form-control" name = 'tboxBed' id="exampleInputEmail1"  value="{{$admin->JUMLAH_BED}}"></td>
                    <td><input type="text" class="form-control" name = 'tboxFormal' id="exampleInputEmail1"  value="{{$admin->JUMLAH_FORMAL}}"></td>
                    <td><input type="text" class="form-control" name = 'tboxSepatu' id="exampleInputEmail1"  value="{{$admin->JUMLAH_SEPATU}}"></td>
                    <td><input type="text" class="form-control" name = 'tboxHarga' id="exampleInputEmail1"  value="{{$admin->STATUS_CUCI}}"></td>
                 --}}

                {{-- button href ke page baru buat masukin value tbox --}}

                @if ($admin->STATUS_BAYAR== 0)
                <td><img src="laundryResource/pending.png" width="88%"></td>
                @else
                <td><img src="laundryResource/lunas.png" width="88%"></td>
                @endif

                {{-- <td><input type="text" class="form-control" name = 'tboxHarga' id="exampleInputEmail1"  value="{{$admin->HARGA}}" disabled></td> --}}

                <td>{{$admin->HARGA}}</td>
                <td><div id = 'button' type="submit"> <a href="/adminedit/{{$admin->id_transaksi}}">EDIT</a> </div></td>

                </form>

                {{-- debug --}}
                {{-- <td>{{ $admin->id_transaksi}}</td> --}}
                {{-- <td><div id = 'button' type="submit"> <a href="/admin/update/{{$admin->id_transaksi}}">EDIT</a> </div></td> --}}


            </tr>

            @endforeach

        </table>
        <div id = "textpage">
            {{-- <h2>Halaman &nbsp &nbsp &nbsp: {{$transaksiAdmin->currentpage()}}</h2>
            <h3>Jumlah data : {{$transaksiAdmin->total()}}</h3> --}}
            <div id = "tengah">
                <h4>{!! $transaksiAdmin->links() !!}</h4>
            </div>
        </div>
    </div>
</section>

@else
<meta http-equiv="Refresh" content="0; url='/login'" />
@endif

<style type="text/css">
    body {
           overflow:hidden;
         }
</style>
