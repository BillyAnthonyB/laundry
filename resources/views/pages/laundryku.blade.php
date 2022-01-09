{{-- untuk menghubungkan isi konten laundryku ke template --}}
@extends('layout.main')

{{-- mengisi value title ke template --}}
@section('title', 'Laundryku')

@section('content')
@if (Session::has('login'))
<div id = "accordionLaundryku">
    <br>
    <div id = "accordionButton">
        @foreach ($cekAlamat as $hasilCekAlamat)
        <?php
            $adaAlamat = "/payment";
            $tidakAdaAlamat = "/updateprofile";
            if ($hasilCekAlamat->ALAMAT == '-')
            {
                // echo "<div id = 'button'> <a href=".$tidakAdaAlamat.">Bayar Sekarang</a> </div> ";
            }
            else
            {
                echo "<h2 id = 'textLaundryku1'>Cucian saya</h2>";
                //kalau udah bayar, button jangan di display
                foreach ($semuaTransaksi as $transaksi2)
                {
                    if ($transaksi2->STATUS_BAYAR == 0)
                    {
                        echo "<div id = 'button'> <a href=".$adaAlamat.">Bayar Sekarang</a> </div>";
                        break;
                    }
                }

            }
        ?>
        @endforeach
    </div>
    <br>

    @foreach($semuaTransaksi as $transaksi)
        {{-- <tr>
            <td>{{ $transaksi->ID_TRANSAKSI }}</td>
            <td>{{ $transaksi->ID_MEMBERSHIP }}</td>
            <td>{{ $transaksi->ID_CUSTOMER }}</td>
            <td>{{ $transaksi->HARGA }}</td>
            <td>{{ $transaksi->BERAT }}</td>
            <td>{{ $transaksi->STATUS_CUCI }}</td>
            <td>{{ $transaksi->STATUS_BAYAR }}</td>
            <td>{{ $transaksi->PAKET }}</td>
            <td>{{ $transaksi->TANGGAL }}</td>
        </tr> --}}
        <button class="accordionL">
            <div id = "accordionJudul">
                {{-- if logic buat check jumlah per paket --}}

                <h6>
                    <?php
                        if ($transaksi->STATUS_BAYAR == 0)
                        {
                        echo "&nbsp Lakukan pembayaran untuk melanjutkan pesanan";
                        }
                        else
                        {
                            if($transaksi->STATUS_CUCI == 1)
                            {
                                echo "&nbsp Pesanan telah selesai";
                            }
                            else
                            {
                                echo "&nbsp Pesanan sedang diproses";
                            }
                        }
                        ?>
                </h6>
                <h6 id = "accordionHarga">
                    <?php
                        if ($transaksi->STATUS_CUCI == 1)
                        {
                            echo "Rp.&nbsp$transaksi->HARGA";
                        }
                        else
                        {
                            echo "Rp.&nbsp$transaksi->HARGA";
                        }
                        ?>
                    </h6>
            </div>
        </button>
        <div class="panel">
            <div id = "statusL">
                {{-- <p><br>Detail Pesanan: &nbsp</p> --}}
                <p id = "statusLBold"><br>

                    <?php
                    if ($transaksi->JUMLAH_KOMPLIT != 0)
                    {
                        echo "Komplit: $transaksi->JUMLAH_KOMPLIT kg <br> ";
                    }
                    if ($transaksi->JUMLAH_BED != 0)
                    {
                        echo "Bed: $transaksi->JUMLAH_BED kg <br> ";
                    }
                    if ($transaksi->JUMLAH_SEPATU != 0) {
                        echo "Sepatu: $transaksi->JUMLAH_SEPATU pasang <br> ";
                    }
                    if ($transaksi->JUMLAH_FORMAL != 0) {
                        echo "Formal: $transaksi->JUMLAH_FORMAL pcs <br> ";
                    }
                ?>
                </p>
            </div>
            <div id = "tanggalL">
                <p><br>Tanggal Pemesanan: &nbsp</p>
                <p id = "tanggalLBold"><br>{{$transaksi->TANGGAL}}</p>
            </div>
        </div>
        <br>

    @endforeach


    @foreach ($cekAlamat as $hasilCekAlamat)
        <?php
        if ($hasilCekAlamat->ALAMAT == '-')
        {
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<div id = 'Sebelumnya'>";
        echo "<h2>Belum ada laundry sebelumnya</h2>";
        echo "<h3> Lakukan pesanan sekarang semudah menekan tombol</h3>";
        echo "<br>";
        echo "<div id = 'button'> <a href = '/paket'>Pesan</a></div>";
        echo "</div>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "</div>";
        }
        else {
            echo "<br>";
            echo "<br>";

            echo "<p id = 'textLaundryku2'>Menampilkan pesanan dalam 60 hari terakhir</p>";

        }
        ?>
    @endforeach


<script>
    var acc = document.getElementsByClassName("accordionL");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + 29+ "px";
    }
  });
}
</script>
@else
<meta http-equiv="Refresh" content="0; url='/login'" />
@endif
@endsection

