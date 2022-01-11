<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
</head>
<body>
<section id = "recoverypass">
    <div id = "page">
        <h1><b>Luxury Bubble [Lupa Password]</h1><br>
        <h3>Maaf mendengar Anda mengalami masalah saat masuk ke Luxury Bubble. Kami mendapat pesan bahwa Anda lupa kata sandi Anda. Jika ini Anda, Anda dapat langsung kembali ke akun Anda sekarang.</h3><br><br>
        {{-- @foreach ($get_pass as $pass) --}}
            <h3>Password anda adalah {{$Password}}</h3><br><br>
        {{-- @endforeach --}}
        <h3>Jika anda tidak meminta tautan untuk masuk, anda dapat mengabaikan pesan ini </h3>
        <div id = "image">
            <img src = "laundryResource/Logo.png" >
            <h3>2021 LuxuryBubble</h3>
        </div>
    </div>
</section>
</body>
</html>
