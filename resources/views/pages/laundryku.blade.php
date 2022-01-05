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
            $adaAlamat = "http://localhost:8000/payment";
            $tidakAdaAlamat = "http://localhost:8000/updateprofile";
            if ($hasilCekAlamat->ALAMAT == '-')
            {
                // echo "<div id = 'button'> <a href=".$tidakAdaAlamat.">Bayar Sekarang</a> </div> ";
            }
            else
            {
                echo "<h2>Cucian saya</h2>";
                echo "<div id = 'button'> <a href=".$adaAlamat.">Bayar Sekarang</a> </div>";
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
                <h6>Paket {{$transaksi->PAKET}} - Berat {{ $transaksi->BERAT }} kg</h6>
                <h6 id = "accordionHarga">
                    <?php
                        if ($transaksi->STATUS_CUCI == 1)
                        {
                        echo "Pesanan selesai";
                        }
                        else
                        {
                        echo "Rp.$transaksi->HARGA";
                        }
                        ?>
                    </h6>
            </div>
        </button>
        <div class="panel">
            <div id = "statusL">
                <p><br>Status: </p>
                <p id = "statusLBold"><br>
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
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "</div>";
        }
        else {

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
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
</script>
@else
<meta http-equiv="Refresh" content="0; url='/login'" />
@endif
@endsection

