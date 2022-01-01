<?
session_start();
$server = "139.255.11.84";
$user = "student";
$password = "isbmantap";
$db_name = "laundry_service";

$conn = mysqli_connect($server, $user, $password, $db_name);

if( !$conn ){
    die("Gagal terhubung ke database: ".mysqli_connect_error());
}
if(isset($_SESSION['login'])) {
    header('Location: home.blade.php');
    exit;

    if(isset($_POST['login'])) {
        $username = $_POST['email'];
        $password = $_POST['password'];

        $cek_username = "SELECT * FROM customer WHERE EMAIL = '$username'";
        $result = mysqli_query($conn, $cek_username);

        if(mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if(password_verify($password, $row['password'])) {
                $_SESSION['login'] = true;

                echo "<script>
                    alert('! BERHASIL LOGIN !');
                    document.location.href = 'index.php';
                </script>";
            }
        }
    }
}
?>
<link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">

<section id= 'login'>
    <div id = "imageLogin">
        <img src = "laundryResource/logoFull.png">
    </div>
    <form>
        <div class = "box-login">
            <div class="mb-3 row">
                <label for="email"  class="col-sm-2 col-form-label" >Email</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" name = 'email' id="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" name = 'password' id="password" aria-describedby="emailHelp" placeholder="Enter password">
                </div>
            </div>
            <button type="submit" name = 'login' class="btn btn-primary">Masuk</button>
            <div class = "box-akun">
                <h6>Apakah belum memiliki akun ? <a href="signup">Buat Akun</a><br><a href="recovery">Lupa Password</a></h6>
            </div>
        </div>
    </form>
</section>
