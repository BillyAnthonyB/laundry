<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
    {{-- ini navbar blum login --}}
    @if (Session::has('login'))
        {{-- ini navbar udah login --}}
    <section id = "sectionNavbar">
        <nav class="navbar">
            <div class="max-width">
                <div class="logo"><a href="/"><img src = "laundryResource/Logo.png" width="55%"> </a></div>
                <ul class="menu">
                    <li><a href="laundryku" class="menu-btn">LaundryKu</a></li>
                    <li><a href="paket" class="menu-btn">Paket Laundry</a></li>
                    <li><a href="membership" class="menu-btn">Membership</a></li>
                    <li><a href="pickup" class="menu-btn">Pick-Up</a></li>
                </ul>
                <div class="menu-btn">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </nav>

    </section>

    <div class = "itemdropdown">
        <div class="profile" onclick="menuToggle();">
            <img src = "LaundryResource/fotoprofil.png">
        </div>
        <div class = "menu-profile">
            <h3>{{Session() -> get('nama')}}<br><span>Luxury Bubble</span></h3>
            <ul>
                <li><img src ="LaundryResource/profileee.png"><a href="/updateprofile">Profil</a></li>
                <li><img src ="LaundryResource/payment.png"><a href="/laundryku">Pembayaran</a></li>
                <li><img src ="LaundryResource/exit.png"><a href="/logout">Keluar</a></li>
            </ul>
        </div>
    </div>
    <script>
        function menuToggle(){
            const toggleMenu = document.querySelector('.menu-profile');
            toggleMenu.classList.toggle('active')
        }
    </script>
@else
{{-- navbar --}}
<section id = "sectionNavbar">
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="/"><img src = "laundryResource/Logo.png" width="55%"> </a></div>
            <ul class="menu">
                <li><a href="paket" class="menu-btn">Paket Laundry</a></li>
                <li><a href="membership" class="menu-btn">Membership</a></li>
                <li><a href="pickup" class="menu-btn">Pick-Up</a></li>
                <li id = 'buttonMasuk'><a href="http://localhost:8000/login">Masuk</a> </li>
                <li id = 'buttonDaftar'><a href="http://localhost:8000/signup">Daftar</a> </li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        {{-- button login dan sign up --}}
    </nav>
    @endif

    {{-- bagian content yang bisa ganti-ganti --}}
    <section id = webContent>
    @yield('content')
    </section>

    {{-- footer --}}
    <section id = "sectionFooter">
    <br>
    <br>
    <hr>
    <footer>
        <a href="tentang-kami" class="footer">Tentang Kami</a>
        <a href="faq" class="footer">Pertanyaan Umum</a>
        <h6 class = "footer">Copyright <span>&copy;</span> 2021 Luxury Bubble: Laundry Service. All right reserved.</h6><br>
        <br>
    </footer>
    </section>
</body>
</html>
