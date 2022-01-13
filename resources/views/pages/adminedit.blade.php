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
    <div id = "text">
        <h3>
        Paket Komplit<br><br>
        Paket Bed<br><br>
        Paket Formal<br><br>
        Paket Sepatu<br><br>
        </h3>
    </div>
    @foreach ($selectTableEdit as $tableEdit)
    <input type="text" class="form-control" name = 'tboxKomplit' id="exampleInputEmail1"  value="{{$tableEdit->JUMLAH_KOMPLIT}}"><br><br>
    <input type="text" class="form-control" name = 'tboxBed' id="exampleInputEmail1"  value="{{$tableEdit->JUMLAH_BED}}"><br><br>
    <input type="text" class="form-control" name = 'tboxFormal' id="exampleInputEmail1"  value="{{$tableEdit->JUMLAH_FORMAL}}"><br><br>
    <input type="text" class="form-control" name = 'tboxSepatu' id="exampleInputEmail1"  value="{{$tableEdit->JUMLAH_SEPATU}}"><br><br>
    <input type="text" class="form-control" name = 'tboxHarga' id="exampleInputEmail1"  value="{{$tableEdit->STATUS_CUCI}}"><br><br>
    {{$tableEdit->id_transaksi}}
    @endforeach

    {{-- hitung harga --}}
    <?php
    $komplit = $tableEdit->JUMLAH_KOMPLIT * 5000;
    $bed = $tableEdit->JUMLAH_BED * 17000;
    $formal = $tableEdit->JUMLAH_FORMAL * 15000;
    $sepatu = $tableEdit->JUMLAH_SEPATU * 15000;

    $total = $komplit + $bed + $formal + $sepatu;
    echo $total;
?>

</section>
</body>
</html>

<style>
    *{
        font-family: Nunito;
    }
    #adminedit #flex img {
    width: auto;
    height: 10%;
    position: absolute;
    margin-left: 1vw;
    margin-top: 1vh;
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
    }
    #adminedit #flex #judul h3{
    font-size: 16px;
    font-family: nunito;
    }
    #adminedit #flex #exit{
    display: flex;
    }
    #adminedit #flex #exit img{
    margin-left: 63vw;
    height: 4%;
    margin-top: 3.5vh;
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
</style>
