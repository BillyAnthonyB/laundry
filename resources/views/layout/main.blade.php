<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<body>
    {{-- navbar --}}
    <section id = "sectionNavbar">
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="home"><img src = "laundryResource/Logo.png" width="60%"> </a></div>
            <ul class="menu">
                <li><a href="paket" class="menu-btn">Paket Laundry</a></li>
                <li><a href="membership" class="menu-btn">Membership</a></li>
                <li><a href="pickup" class="menu-btn">Pick-Up</a></li>
                <li id = 'buttonMasuk'><a>Masuk</a> </li>
                <li id = 'buttonDaftar'><a>Daftar</a> </li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        {{-- button login dan sign up --}}
    </nav>

    </section>



    {{-- bagian content yang bisa ganti-ganti --}}
    <section id = webContent>
    @yield('content')
    </section>

    {{-- footer --}}
    <section id = "sectionFooter">
    <hr color="#18a4fc">
    <footer>
        <a href="tentang-kami" class = "footer">Copyright <span>&copy;</span> 2021 Luxury Bubble: Laundry Service. All right reserved.</a><br>
        <a href="tentang-kami" class="footer">Customer Service</a>
        <a href="faq" class="footer">FAQ</a>
    </footer>
    </section>


</body>
</html>
