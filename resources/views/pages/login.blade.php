<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
<link rel="stylesheet" href="style.css">

<body>
@if (Session::has('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ Session::get('error') }}</strong>
            </div>
        @endif


@if(session()->has('loginError'))

<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('loginError') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"
    aria-label="close"></button>
</div>

@endif

<section id= 'login'>
    <div id = "imageLogin">
        <img src = "laundryResource/logoFull.png">
    </div>
    <form action="{{url('/login')}}" method="POST">
        @csrf
        <div class = "box-login">
            <div class="mb-3 row">
                <label for="email"  class="col-sm-2 col-form-label" >Email</label>
                <div class="col-sm-10">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name = 'loginEmail' id="email" aria-describedby="emailHelp" placeholder=" Email" required value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" name = 'loginPassword' id="password"  aria-describedby="emailHelp" placeholder=" Password" required>
                <i class="bi bi-eye-slash" id="togglePassword"></i>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Masuk</button>
            <div class = "box-akun">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Ingat saya
                    </label>
                </div>
                <h6>Apakah belum memiliki akun ? <a href="signup">Buat Akun</a><br><a href="recovery">Lupa Password</a></h6>
            </div>
        </div>
    </form>
</section>
<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
});
</script>
</body>
