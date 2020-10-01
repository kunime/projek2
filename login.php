<!-- disini butuh koneksi -->
<?php
session_start();
include_once 'koneksi.php';
$database = new database();

if (isset($_SESSION['is_login'])) {
  header('location:admin.php');
}

if (isset($_COOKIE['username'])) {
  $database->relogin($_COOKIE['username']);
  header('location:admin.php');
}

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  if (isset($_POST['remember'])) {
    $remember = true;
  } else {
    $remember = false;
  }

  if ($database->login($username, $password, $remember)) {
    header('location:admin.php');
  }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="images/logo.jpg">
    <title>PKL SRIKANDI</title>
    <style type="text/css">
    body {

        background-image: url("images/bg.jpeg");

    }
    </style>
</head>

<body>
    <div class="jumbotron pr-5 pl-10">
        <div class="container col-md-5" style="background-color : #6a99ff">
            <form class="form-signin" method="post" action=""><br>
                <center>
                    <h1 class="h3 mb-3 font-weight-normal">Silahkan Login</h1>
                </center>
                <br>
                <span class="badge badge-danger">
                    <?php if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "gagal") {
              echo "Login gagal! username dan password salah!";
            }
          }
          ?>
                </span>
                <br>
                <br>
                <center>
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" id="username" class="form-control" placeholder="Username" name="username"
                        required autofocus></center><br>
                <center>
                    <p>
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" id="password" class="form-control" placeholder="Password" name="password"
                            required></p>
                    <button class="btn btn-secondary text-light mb-10" type="submit" name="login">LOGIN</button>
                    <a href="tampil.php" class="btn btn-secondary">Kembali</a><br>
            </form><br>
        </div>
    </div>
</body>

</html>
