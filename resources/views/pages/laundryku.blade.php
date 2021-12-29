{{-- untuk menghubungkan isi konten laundryku ke template --}}
@extends('layout.in')

{{-- mengisi value title ke template --}}
@section('title', 'Laundryku')

@section('content')

<div id = "accordionLaundryku">
    <br>
    <div id = "accordionButton">
        <h2>Cucian saya</h2>
        <div id = 'button'> <a>Bayar Sekarang</a> </div>
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
                <h6 id = "accordionHarga">Rp.{{ $transaksi->HARGA }}</h6>
                {{-- dsni image --}}
            </div>
        </button>
        <div class="panel">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <br>

    @endforeach
</div>

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

@endsection
