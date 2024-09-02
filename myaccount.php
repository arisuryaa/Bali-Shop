<?php
include "admin/config/app.php";
include "Layout/Navbar.php";
session_start();



if(!isset($_SESSION["email"]) && !isset($_COOKIE["email"])) {
    echo "
        <script>
            document.location.href = 'login.php';
        </script>
    ";
} elseif(isset($_SESSION["email"])) {
    $email = $_SESSION["email"];
} elseif(isset($_COOKIE["email"])) {
    $_SESSION["email"] = $_COOKIE["email"];
    $email = $_SESSION["email"];
}




$data_akun = select("SELECT * FROM user WHERE email = '$email'")[0];






?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
    <link rel="stylesheet" href="style2.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<div class="hero2">
    <h1>My Account</h1>
</div>

<div class="main">
    <div class="fotoUser">
        <img src="asset/img/admin.webp" alt="">
        <h1><?= $data_akun["nama"] ?></h1>
        <a href="logout.php">Logout</a>
    </div>
    <div class="dataUser">
        <div class="bio">
            <h1>Biodata Diri</h1>
            <div class="containerBio">
                <div class="judulBio">
                    <h2>Nama</h2>
                    <h2>Tanggal Lahir</h2>
                    <h2>Jenis Kelamin</h2>
                </div>
                <div class="deskripsiBio">
                    <h2><?= $data_akun["nama"] ?></h2>
                    <a href="">Tambah Tanggal Lahir</a>
                    <a href="">Tambah Jenis Kelamin</a>
                </div>
            </div>
        </div>
        <div class="kontak">
            <h1>Kontak</h1>
            <div class="containerKontak">
                <div class="judulKontak">
                    <h2>Email</h2>
                    <h2>Nomor Telpon</h2>
                </div>
                <div class="deskripsiKontak">
                    <h2><?= $data_akun["email"] ?></h2>
                    <a href="">Tambah Nomor Telpon</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="back">
    <i class="fa fa-arrow-left" aria-hidden="true"></i>
    <a href="index.php">Kembali ke Halaman Depan</a>
</div>


</body>

</html>