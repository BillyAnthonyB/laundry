<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">


<section id='signup'>
    <div id = "image">
        <img src = "laundryResource/logoFull.png">
    </div>
    <form action="/signup" method="POST">
        @csrf
        <div class = "box-login">
            <div class="mb-3 row">
                <label for="name"  class="col-sm-2 col-form-label" >Nama</label>
                <div class="col-sm-10">
                <input type="text" class="form-control @error('name') is-invalid @enderror" name = 'name'  id="name" aria-describedby="emailHelp" placeholder=" Nama" required value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email"  class="col-sm-2 col-form-label" >Email</label>
                <div class="col-sm-10">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name = 'email' id="email" aria-describedby="emailHelp" placeholder=" Email" required value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror
                </div>
            </div>
            <!-- <div class="mb-3 row">
                <label for="nohp"  class="col-sm-2 col-form-label" >No. Hp</label>
                <div class="col-sm-10">
                <input type="text" class="form-control @error('nohp') is-invalid @enderror" name = 'nohp' id="nohp" aria-describedby="emailHelp" placeholder=" Nomor HP" required value="{{ old('nohp') }}">
                @error('nohp')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror
                </div>
            </div> -->
            <div class="mb-3 row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name = 'password' id="password" aria-describedby="emailHelp" placeholder=" Password" required>
                @error('password')
                    <div class="invalid-feedback">
                    {{$message}}
                    </div>
                @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Daftar</button>
            <div class = "box-akun">
                <h6>Sudah memiliki akun ? <a href="login">Masuk</a><br><a href="recovery"></a></h6>
            </div>
        </div>
    </form>
</section>
