<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">


<section id='admin'>
    <div id= "flex">
        <div id = "imageadmin">
            <img src = "laundryResource/logoFull.png">
        </div>
        <div class = "judulku">
            <div class = "kotak"></div>
        </div>
    </div>

    <div id = "kotak">
        <div id = "judul">
            <h1>Check Order</h1><br>
        </div>
        <div id = "text">
            <div id = "paragraf">
                <div class="mb-3 row">
                    <label for="exampleInputEmail1"  class="col-sm-2 col-form-label" > Modify Order &nbsp &nbsp </label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search by transaction code">
                    </div>
                </div>
            </div>
            <form action="/action_page.php">
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
            </form>
        </div>
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
              <th>Harga</th>
              <th>Status Cuci</th>
              <th>Status Bayar</th>




            </tr>
            <tr>
              <td>Alfreds Futterkiste</td>
              <td>Maria Anders</td>
              <td>Germany</td>
            </tr>
          </table>
    </div>
</section>
