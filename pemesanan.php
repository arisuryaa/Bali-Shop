<?php

include "admin/config/app.php";
session_start();

include "admin/config/security.php";

$data_barang = $_POST;

if(count($data_barang) <= 0) {
    echo "<script>
        document.location.href = 'index.php';
    </script>";
}

$harga = (int)$data_barang['harga_barang'];
$quantity = (int)$data_barang['quantity_barang'];

$subtotal = $harga * $quantity; 

if(isset($_POST["pesan"])) {
    if(pesanan($_POST) > 0 ) {
        echo "<script>
            alert('pesanan akan segera diproses');
            document.locati`on.href = 'index.php';
        </script>";
    } else {
        "<script>
            alert('gagal');
            document.location.href = 'index.php';
        </script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <title>Bali Shop</title>
    <style>

    </style>
</head>

<body>
    <nav class="navbar">
        <div class="top-section1">
            <div class="logo">
                <a href="index.php"><img src="asset/img/logo.svg" alt="Logo"></a>
            </div>
            <div class="search">
                <form action="produk.php" method="get">
                    <input type="text" name="cari" placeholder="Cari Produk...">
                    <button type="submit" name="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="nav-kiri">
                <a href=""><i class="fa-solid fa-bag-shopping"></i></a>
                <a href="myaccount.php"><i class="fa-solid fa-user"></i></a>
            </div>
        </div>
    </nav>

    <!-- Breadcrumbs -->
    <div class="hero">
        <h1>
            Checkout <br>
        </h1>
        <div class="tombol">
            <a href="index.php">Home</a>
        </div>
    </div>


    <section>
        <form action="" method="POST">
            <div class="container-utama">
                <div class="container-kiri">
                    <h1>Detail Tagihan</h1>
                    <div class="data-customer">
                        <div class="namaCust">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" name="nama" id="nama" required>
                        </div>
                        <div class="nomorCust">
                            <label for="nomor">Nomor Telpon</label>
                            <input type="number" name="telpon" id="nomor" required>
                        </div>
                    </div>
                    <div class="emailCust">
                        <label for="nama">Email</label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div class="catatan">
                        <h1>Informasi Tambahan</h1>
                        <div class="catatanCust">
                            <label for="nama">Catatan Pesanan</label>
                            <input type="text" name="catatan" id="nama">
                        </div>
                    </div>
                </div>

                <div class="container-kanan">
                    <div class="pesananAnda">
                        <h1>Pesanan Anda</h1>
                    </div>
                    <div class="dataPesanan">
                        <div class="namaProduk">
                            <div class="titleProduk">
                                <h1>Produk</h1>
                            </div>
                            <div class="dataProduk">
                                <h1><?= $data_barang["judul_barang"] ?></h1>
                                <h1> x<?= $data_barang["quantity_barang"] ?></h1>
                            </div>
                        </div>
                        <div class="totalProduk">
                            <div class="total">
                                <h1>Subtotal</h1>
                            </div>
                            <div class="dataTotal">
                                <h1>Rp. <?=  number_format($subtotal,0,',','.') ?></h1>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="namaBarang" value="<?= $data_barang["judul_barang"] ?>">
                    <input type="hidden" name="quantityBarang" value="<?= $data_barang["quantity_barang"] ?>">
                    <input type="hidden" name="hargaBarang" value="<?= $data_barang["harga_barang"] ?>">
                    <input type="hidden" name="subtotal" value="<?= $subtotal ?>">
                    <button type="submit" name="pesan">Buat Nomor Pesanan</button>
                </div>

            </div>
        </form>

    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>