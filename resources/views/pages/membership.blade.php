{{-- untuk menghubungkan isi konten membership ke template --}}
@extends('layout.main')

{{-- mengisi value title ke template --}}
@section('title', 'Membership')

<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

@section('content')
<section id = "membership">
    <div id = "platinum">
        <div id = "container">
            <div id = "card">
                <img src = "laundryResource/Platinum.png" width="100%">
            </div>
        </div>
        <section id = "platinumDesc">
            <h6>Platinum Membership</h6>
            <p>Keuntungan bergabung dengan Platinum memberhip anda akan mendapat potongan sebesar 12% pada setiap pemesanan laundry</p>
            <div id = "buttonDanHargaPlat">
                <div id = 'button'> <a>Gabung Sekarang!</a> </div>
                <div id= 'hargaPlat'>Rp.100.000</div>
            </div>
        </section>
    </div>
    <div id = "silver">
        <div id = "container">
            <div id = "card">
                <img src = "laundryResource/Silver.png" width="100%">
            </div>
        </div>
        <section id = "silverDesc">
            <h6>Silver Membership</h6>
            <p>Keuntungan bergabung dengan Silver memberhip anda akan mendapat potongan sebesar 8% pada setiap pemesanan laundry</p>
            <div id = "buttonDanHargaSilv">
                <div id = 'button'> <a>Gabung Sekarang!</a> </div>
                <div id = 'hargaSilv'>Rp.50.000</div>
            </div>
        </section>
    </div>
</section>

@endsection
