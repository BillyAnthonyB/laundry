{{-- untuk menghubungkan isi konten payment membership ke template --}}
@extends('layout.main')

{{-- mengisi value title ke template --}}
@section('title', 'Payment Membership')

@section('content')
@if (Session::has('login'))
        {{-- ini navbar udah login --}}
        @if (Session::has('success'))
            <div class="alertalert-successalert-block">
                <span class="button" onclick="this.parentElement.style.display='none';">&times;</span>
                <strong>{{ Session::get('success') }}</strong>
            </div>
        @endif
<section id='paymentreceived'>
    <div id = "image">
        <img src = "laundryResource/logoFull.png">
    </div>
    <div id = "text">
        <div id = "payment">
            <h1>Pembayaran telah diterima !&nbsp</h1>
            <div id = "image">
                <img src = "laundryResource/Protect.png">
            </div>
        </div>
        <h2>Terima kasih atas kepercayaan anda.</h2>
        <div id = 'button'> <a href="http://localhost:8000/">OK</a> </div>
    </div>
</section>
@else
<meta http-equiv="Refresh" content="0; url='/login'" />
@endif
@endsection
