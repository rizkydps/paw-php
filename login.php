<?php
session_start();

require_once('koneksi/database.php');
require_once('koneksi/auth.php');

if (checkLogin()) {
    header('location:index.php');
    exit;
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = sha1($saltDb . $_POST['password']);

    $query = "SELECT * FROM user WHERE username = '{$username}' AND password = '{$password}'";
    $result = mysqli_query($connectDb, $query);
    $data = mysqli_fetch_array($result);

    if ($data) {
        $_SESSION['is_login'] = true;
        $_SESSION['user'] = $data;
        header('location:admin.php?status=sukses');
        exit;
    } else {
        header('location:login.php?status=gagal');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- bOOStap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <!-- FOnt Google -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <!-- VENDOR -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"> -->
  <link href="assets/boostrap/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/boxicons/css/boxicons.min.css" rel="stylesheet">

  <!-- Fontawesome -->
  <script src="https://kit.fontawesome.com/503704af2c.js" crossorigin="anonymous"></script>
  <!-- Main css -->
  <link rel="stylesheet" href="assets/styles/main.css">

  </head>

<body>
<?php include('layout/navbar.php'); ?>
<div class="container card card-about shadow p-3 py-4 my-4">
            <div class="row">
                <div class="col">
                    <h3><span class="text-primary"> Login</span></h3>
                    <form
                        autocomplete="off"
                        action="login.php"
                        method="post"
                        class="needs-validation mt-4"
                        novalidate
                      >
                        <div class="row mb-4">
                          <div class="col-lg-8">
                            <input
                              class="form-control"
                              type="text"
                              id="username"
                              name="username"
                              placeholder="Username"
                              required
                            />
                            <div class="invalid-feedback">Please input your username</div>
                          </div>
                        </div>
                        <div class="row mb-4">
                          <div class="col-lg-8">
                            <input
                              class="form-control"
                              type="password"
                              id="password"
                              name="password"
                              placeholder="Password"
                              required
                            />
                            <div class="invalid-feedback">Please input your password</div>
                          </div>
                        </div>
                        <button class="btn btn-primary" type="submit">
                          Login
                        </button>
                      </form>
                </div>
            </div>
        </div>  

  <!-- <footer>
    <div class="container-fluid p">
      <div class="card-footer">
        <div class="row justify-content-center footer-c">
          <p>2021 Copyright ❤️ RizkyDPS</p>
        </div>
      </div>
    </div>
  </footer> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script type="text/javascript">
        <?php 
        if (isset($_GET['status'])) {
            $status = $_GET['status'];
            if ($status == 'sukses') : ?>
                alert('Login Berhasil.');
            <?php elseif ($status == 'gagal') : ?>
                alert('Login gagal. Username/Password Salah');
            <?php endif;
        }
        ?>
    </script>

</body>

</html>
<?php 
    mysqli_close($connectDb);