<?
$server = "139.255.11.84";
$user = "student";
$password = "isbmantap";
$db_name = "laundry_service";

$conn = mysqli_connect($server, $user, $password, $db_name);

if( !$conn ){
    die("Gagal terhubung ke database: ".mysqli_connect_error());
}

if(isset($_POST['signup'])){
    $name = strtolower(stripslashes($_POST['name']));
    $email = strtolower(stripslashes($_POST['email']));
    $no_hp = $_POST['hp'];
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    //cek username
    $cek_username = "SELECT email FROM customer WHERE email = '$email'";
    $temp = mysqli_query($conn, $cek_username);
    $row = mysqli_fetch_assoc($temp);

    if($row) {
        echo "<script>
            alert('! USERNAME TELAH DI PAKAI !');
            document.location.href = 'signup.php';
        </script>";
    } else {
        $insert_sql = "INSERT INTO customer VALUES ('22C00001', 'REG', '$name', '-', '$no_hp', '$email', '$password', '0')";
        mysqli_query($conn, $insert_sql);

        if(mysqli_affected_rows($conn) > 0) {
            echo "<script>
                alert('! REGISTRASI TELAH BERHASIL !');
                document.location.href = 'signup.php';
            </script>";
        } else {
            echo "<script>
                alert('! REGISTRASI GAGAL !');
                document.location.href = 'signup.php';
            </script>";
        }
    }

}
?>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">


<section id='signup'>
    <div id = "image">
        <img src = "laundryResource/logoFull.png">
    </div>
    <form action="" method="post">
        <div class = "box-login">
            <div class="mb-3 row">
                <label for="name"  class="col-sm-2 col-form-label" >Nama</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name = 'name' id="name" aria-describedby="emailHelp" placeholder="">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email"  class="col-sm-2 col-form-label" >Email</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" name = 'email' id="email" aria-describedby="emailHelp" placeholder="">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nohp"  class="col-sm-2 col-form-label" >No. Hp</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name = 'nohp' id="nohp" aria-describedby="emailHelp" placeholder="">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" name = 'password' id="password" aria-describedby="emailHelp" placeholder="">
                </div>
            </div>
            <button type="submit" name = 'signup' class="btn btn-primary">Daftar</button>
            <div class = "box-akun">
                <h6>Sudah memiliki akun ? <a href="login">Masuk</a><br><a href="recovery">Lupa Password</a></h6>
            </div>
        </div>
    </form>
</section>
