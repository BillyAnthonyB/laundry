{{-- untuk menghubungkan isi konten faq ke template --}}
@extends('layout.main')

{{-- mengisi value title ke template --}}
@section('title', 'Frequently Asked Questions')


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

@section('content')
<section id = "faq">
  <div class = "judulku">
    <h2>Pertanyaan Umum</h2>
  </div>
  <div class="accordion" id="accordionPanelsStayOpenExample">


    <div class="accordion-item">
      <h2 class="accordion-header" id="panelsStayOpen-headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
          <h6>Apakah aman menggunakan jasa laundry online ?</h6>
        </button>
      </h2>
      <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
        <div class="accordion-body">
          Luxury bubble mengedepankan kejujuran dan proffesional dalam bekerja. semua pakaian anda kami pastikan aman dan nyaman bila di percayakan oleh luxury bubble
        </div>
      </div>
    </div>


    <div class="accordion-item">
      <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
          <h6>Apa saja varian laundry yang ada di luxury bubble ?</h6>
        </button>
      </h2>
      <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
        <div class="accordion-body">
          Untuk saat ini luxury bubble menyediakan 4 jenis paket laundry yaitu, paket komplit, paket sepatu, paket bed, dan paket formal.
        </div>
      </div>
    </div>


    <div class="accordion-item">
      <h2 class="accordion-header" id="panelsStayOpen-headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
          <h6>Bagaimana cara melakukan pembayaran pesanan ?<h6>
        </button>
      </h2>
      <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
        <div class="accordion-body">
          Setelah melakukan request pick - up anda akan diminta membayar pada sejumlah tagihan pesanan anda, masuk menu payment dan pilih dompet digital yang anda gunakan. setelah itu pembayaran akan di konfirmasi
        </div>
      </div>
    </div>


    <div class="accordion-item">
      <h2 class="accordion-header" id="panelsStayOpen-headingFour">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
          <h6>Bagaimana cara melakukan pembayaran pesanan ?<h6>
        </button>
      </h2>
      <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
        <div class="accordion-body">
          Setelah melakukan request pick - up anda akan diminta membayar pada sejumlah tagihan pesanan anda, masuk menu payment dan pilih dompet digital yang anda gunakan. setelah itu pembayaran akan di konfirmasi
        </div>
      </div>
    </div>

</div>
</section>
@endsection
