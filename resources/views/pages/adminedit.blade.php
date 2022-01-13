<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <title>Edit Pesanan</title>
</head>
<body>
<section id = "adminedit">
    <div id= "flex">
        <div id = "judul">
            <h3>Luxury Bubble: Laundry Service Admin Page</h3>
            <h1>Edit Pesanan</h1>
        </div>
        <div id = "exit">
            <a href="/logout">Keluar</a>
        </div>
    </div>
    <div id = "konten">
        <div id = "text">
            <h3>
            Paket Komplit<br><br>
            Paket Bed<br><br>
            Paket Formal<br><br>
            Paket Sepatu<br><br>
            Pesanan sudah selesai<br><br>
            </h3>
        </div>
        <div id = "textbox">
        @foreach ($selectTableEdit as $tableEdit)
    <form action="/adminupdate" method="post">
        {{ csrf_field() }}
        <input type="text" class="form-control" name = 'tboxKomplit' id="exampleInputEmail1"  value="{{$tableEdit->JUMLAH_KOMPLIT}}">&nbsp &nbsp kg<br><br>
        <input type="text" class="form-control" name = 'tboxBed' id="exampleInputEmail1"  value="{{$tableEdit->JUMLAH_BED}}"> &nbsp &nbsp kg<br><br>
        <input type="text" class="form-control" name = 'tboxFormal' id="exampleInputEmail1"  value="{{$tableEdit->JUMLAH_FORMAL}}"> &nbsp &nbsp pcs<br><br>
        <input type="text" class="form-control" name = 'tboxSepatu' id="exampleInputEmail1"  value="{{$tableEdit->JUMLAH_SEPATU}}"> &nbsp &nbsp pasang<br><br>
        <input type="text" class="form-control" name = 'tboxStatusCuci' id="exampleInputEmail1"  value="{{$tableEdit->STATUS_CUCI}}"><br><br>'1' jika pesanan selesai, '0' jika pesanan belum selesai
        {{-- <input type="checkbox" name="cboxStatusCuci" value='1'> Pesanan sudah selesai --}}
        {{-- hitung harga --}}
        <?php
        $komplit = $tableEdit->JUMLAH_KOMPLIT;
        $bed = $tableEdit->JUMLAH_BED;
        $formal = $tableEdit->JUMLAH_FORMAL;
        $sepatu = $tableEdit->JUMLAH_SEPATU;

        $total = ($komplit * 5000) + ($bed * 17000) + ($formal * 15000) + ($sepatu * 15000);

        $diskon = $total;
        if($tableEdit->ID_MEMBERSHIP == "PLAT")
        {
            $diskon = $total - ($total * 12 / 100);
        }
        if($tableEdit->ID_MEMBERSHIP == "SILV")
        {
            $diskon = $total - ($total * 8 / 100);
        }
        // echo $total;
        // echo"&nbsp";
        // echo $diskon;


        echo "<input type='text' class='form-control' name = 'tboxMembership' id='exampleInputEmail1' value='{$tableEdit->ID_MEMBERSHIP}' hidden>";

        echo "<input type='text' class='form-control' name = 'tboxId' id='exampleInputEmail1' value='{$tableEdit->id_transaksi}' hidden>";
        echo "<input type='text' class='form-control' name = 'tboxHarga' id='exampleInputEmail1' value='{$diskon}' hidden>";
        ?>
        <br>
        <button type="submit" class="btn btn-primary">simpan</button>
    </form>
    @endforeach
        <div id = "detailcustomer">
            @foreach ($selectTableEdit as $tableEdit2)
            <b>Pesanan : {{$tableEdit2->id_transaksi}} <br><br>
            {{$tableEdit2->NAMA_CUSTOMER}} &nbsp - &nbsp {{$tableEdit2->ID_MEMBERSHIP}} <br><br>
            {{$tableEdit2->ALAMAT}}<br><br>
            {{$tableEdit2->PHONE}}</b><br><br>
            @endforeach
        </div>
    </div>




</section>
</body>
</html>

<style>
    *{
        font-family: Nunito;
    }
    #adminedit #flex {
    display: flex;
    flex-direction: row;
    }
    #adminedit #flex #judul{
    margin-left: 7.5vw;
    margin-top: 2.4vh;
    }
    #adminedit #flex #judul h1{
    font-size: 26px;
    font-family: nunito;
    margin-top: -1vh;
    }
    #adminedit #flex #judul h3{
    font-size: 16px;
    font-family: nunito;
    }
    #adminedit #flex #exit{
    display: flex;
    }
    #adminedit #flex #exit a{
    margin-left: 65.5vw;
    margin-top: 4vh;
    text-decoration: none;
    color: #18a4fc;
    font-weight: bold;
    font-family: nunito;
    }
    #adminedit .form-control{
    padding: 0.5vh;
    border: 2px solid #18a4fc;
    border-radius: 0.4rem;
    width: 50px;
    }
    #adminedit #konten{
        display: flex;
        margin-left: 7.5vw;
        margin-top: 2vh;
    }
    #adminedit #text{
        margin-top: -2vh;
    }
    #adminedit #textbox{
        margin-left: 5vw;
    }
    #adminedit #konten #textbox .btn-primary{
        background-color: #18a4fc;
        font-weight: bold;
        border-color: #18a4fc;
        border: 2px solid #18a4fc;
        color: white;
    }
    #adminedit #konten #textbox .btn{
        padding: 0.375rem 3.75rem;
        border-radius: 0.6rem;
    }
    #adminedit button.btn.btn-primary{
        margin-top: 2vh;
    }
    #adminedit #detailcustomer{
        margin-left: 25vw;
        margin-top: -42vh;
    }
</style>
