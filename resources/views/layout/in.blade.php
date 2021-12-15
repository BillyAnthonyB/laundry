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
            <div class="logo"><a href="home"><img src = "laundryResource/Logo.png" width="70%"> </a></div>
            <ul class="menu">
                <li><a href="laundryku" class="menu-btn">Laundryku</a></li>
                <li><a href="paket" class="menu-btn">Paket Laundry</a></li>
                <li><a href="membership" class="menu-btn">Membership</a></li>
                <li><a href="pickup" class="menu-btn">Pick-Up</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
    {{-- user profile dropdown --}}
    <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
    </li>
    </section> -->


    <div class = "itemdropdown">
        <div class="profile" onclick="menuToggle();">
            <img src = "LaundryResource/fotoprofil.png">
        </div>
        <div class = "menu-profile">
            <h3>Laundry<br><span>Luxury Bubble</span></h3>
            <ul>
                <li><img src ="LaundryResource/profileee.png"><a href="#">Profil</a></li>
                <li><img src ="LaundryResource/payment.png"><a href="#">Pembayaran</a></li>
                <li><img src ="LaundryResource/exit.png"><a href="#">Keluar</a></li>
            </ul>
        </div>
    </div>
    <script>
        function menuToggle(){
            const toggleMenu = document.querySelector('.menu-profile');
            toggleMenu.classList.toggle('active')
        }
    </script>


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
