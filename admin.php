<?php
session_start();
require_once('koneksi/auth.php');

onlyAdmin();

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

<div class="admin-container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3><span class="text-primary"> Admin</span></h3>

                    <p>Hallo, <?= getUserLogin('username'); ?> selamat datang di halaman admin</p>
                </div>
            </div>
        </div>  
    </div>

</body>

</html>
<?php 
    mysqli_close($connectDb);