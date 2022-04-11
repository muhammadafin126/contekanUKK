
<?php
include 'koneksi.php';
session_start();

if (isset($_POST['masuk'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($konek, "SELECT * FROM user WHERE username='$username' and password='$password'");
    $data = mysqli_fetch_assoc($query);
    $check = mysqli_num_rows($query);

    if (!$check){
        $_SESSION['error'] = 'username atau password anda salah';
    } else {
        $_SESSION['userid'] = $data['id_user'];
        $_SESSION['nama'] = $data['nama_user'];
        $_SESSION['role'] = $data['role'];

        header('location:dashboard.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- my css -->
    <link rel="stylesheet" href="assets/scss/style.css">
</head>
<body class="autbg">
    <div class="container col-md-4">
        <div class="my-3 form-box">
            <form action="" autocomplete="off" method="post">
                <div class="form-head">
                    <h3 class="text-capitalize fw-bold">login</h3>
                    <p class="text-capitalize">silahkan login</p>
                </div>
                <div class="form-body">
                    <div class="form-group my-3">
                        <label for="" class="text-capitalize">username</label>
                        <input type="text" name="username" placeholder="silahkan masukan username anda" class="text-input">
                    </div>
                    <div class="form-group my-3">
                        <label for="" class="text-capitalize">password</label>
                        <input type="password" name="password" placeholder="silahkan masukan password anda" class="text-input">
                    </div>
                    <div class="form-group my-3 d-flex justify-content-center">
                        <button name="masuk" class="btn-main btn-wide">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
<footer>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</footer>
</html>