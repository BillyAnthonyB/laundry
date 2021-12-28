{{-- untuk menghubungkan isi konten laundryku ke template --}}
@extends('layout.in')

{{-- mengisi value title ke template --}}
@section('title', 'Laundryku')

@section('content')
<div>
    <table border='1'>
        <tr>
            <th>ID_TRANSAKSI</th>
            <th>ID_MEMBERSHIP</th>
            <th>ID_CUSTOMER</th>
            <th>HARGA</th>
            <th>BERAT</th>
            <th>STATUS_CUCI</th>
            <th>STATUS_BAYAR</th>
            <th>PAKET</th>
            <th>TANGGAL</th>
        </tr>
        @foreach($semuaTransaksi as $transaksi)
        <tr>
            <td>{{ $transaksi->ID_TRANSAKSI }}</td>
            <td>{{ $transaksi->ID_MEMBERSHIP }}</td>
            <td>{{ $transaksi->ID_CUSTOMER }}</td>
            <td>{{ $transaksi->HARGA }}</td>
            <td>{{ $transaksi->BERAT }}</td>
            <td>{{ $transaksi->STATUS_CUCI }}</td>
            <td>{{ $transaksi->STATUS_BAYAR }}</td>
            <td>{{ $transaksi->PAKET }}</td>
            <td>{{ $transaksi->TANGGAL }}</td>
        </tr>
        @endforeach
</div>
@endsection
