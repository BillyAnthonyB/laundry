<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">

@if(session()->has('succes'))

<div class="alert alert-succes alert-dismissible fade show" role="alert">
    {{ session('succes') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"
    aria-label="close"></button>
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
    <form action="/login" method="post">
        @csrf
        <div class = "box-login">
            <div class="mb-3 row">
                <label for="email"  class="col-sm-2 col-form-label" >Email</label>
                <div class="col-sm-10">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name = 'email' id="email" aria-describedby="emailHelp" placeholder="email" required value="{{ old('email') }}">
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
                <input type="password" class="form-control" name = 'password' id="password" aria-describedby="emailHelp" placeholder="password" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Masuk</button>
            <div class = "box-akun">
                <h6>Apakah belum memiliki akun ? <a href="signup">Buat Akun</a><br><a href="recovery">Lupa Password</a></h6>
            </div>
        </div>
    </form>
</section>
