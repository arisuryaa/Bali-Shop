<?php

$data_barang = $_POST;

// var_dump($data_barang);

// if(isset($_POST["submit"])) {
//     var_dump($_POST);
// }

$harga = (int)$data_barang['harga_barang'];
$quantity = (int)$data_barang['quantity_barang'];

$subtotal = $harga * $quantity; 

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
    <nav>
        <div class="logo">
            <a href="index.php"><img src="asset/img/logo.svg" alt="Logo"></a>
        </div>

        <div class="search">
            <input type="text" placeholder="Cari Produk...">
            <button type="submit"><i class="fas fa-search"></i></button>
        </div>

        <div class="nav-kiri">
            <a href=""><i class="fa-solid fa-bag-shopping"></i></a>
            <a href=""><i class="fa-solid fa-user"></i></a>
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
                            <input type="text" name="nama" id="nama">
                        </div>
                        <div class="nomorCust">
                            <label for="nomor">Nomor Telpon</label>
                            <input type="number" name="telpon" id="nomor">
                        </div>
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
                                <h1>Rp. <?= $subtotal ?></h1>
                            </div>
                        </div>
                    </div>
                    <button>Buat Nomor Pesanan</button>
                </div>

            </div>
        </form>

    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>