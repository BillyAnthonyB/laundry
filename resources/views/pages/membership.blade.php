{{-- untuk menghubungkan isi konten membership ke template --}}
@extends('layout.main')

{{-- mengisi value title ke template --}}
@section('title', 'Membership')

<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="app.js"></script>

@section('content')
<section id = "members">
    <div id = "container">
        <div id = platinumCard>
            <img src = "laundryResource/Platinum.png" width="25%">
        </div>
    </div>
</section>
@endsection
