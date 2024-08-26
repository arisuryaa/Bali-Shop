<?php

include "admin/config/app.php";
include "layout/navbar.php";
session_start();
include "admin/config/security.php";


$data_barang = $_POST;


var_dump($_SESSION['cart']);
var_dump(count($data_barang));

if (!isset($_SESSION['cart']) && count($data_barang) < 1  ) {
    echo "<script>
        document.location.href = 'index.php';
    </script>";
}

$harga = (int)$data_barang['harga_barang'];
$quantity = (int)$data_barang['quantity_barang'];

$subtotal = $harga * $quantity; 

if(isset($_POST["pesanKeranjang"])) {
    if(pesananKeranjang($_POST) > 0 ) {
        echo "<script>
            document.location.href = 'thankyou.php';
        </script>";
    } else {
        "<script>
            alert('gagal');
            document.location.href = 'index.php';
        </script>";
    }
}
if(isset($_POST["pesan"])) {
    if(pesanan($_POST) > 0 ) {
        echo "<script>
            document.location.href = 'thankyou.php';
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
    <title>Bali Shop</title>
    <style>

    </style>
</head>

<body>

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
                            <label for="nomor">Nomor Telepon</label>
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
                                <?php if(isset($_SESSION['cart']) && count($data_barang) < 1) : ?>
                                <?php foreach($_SESSION['cart'] as $barang) : ?>
                                <div class="produk">
                                    <h1><?= $barang["name"] ?></h1>
                                    <h1> x<?= $barang["quantity"] ?></h1>
                                </div>
                                <?php endforeach ?>
                                <?php endif; ?>

                                <?php if(count($data_barang) > 0) : ?>
                                <div class="produk">
                                    <h1><?= $data_barang["judul_barang"] ?></h1>
                                    <h1> x<?= $data_barang["quantity_barang"] ?></h1>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="totalProduk">
                            <div class="total">
                                <h1>Subtotal</h1>
                            </div>
                            <div class="dataTotal">
                                <?php if(isset($_SESSION['cart']) && count($data_barang) < 1) : ?>
                                <?php foreach($_SESSION['cart'] as $barang) : ?>
                                <h1>Rp. <?=  number_format($barang['quantity'] * $barang["price"],0,',','.') ?></h1>
                                <?php endforeach ?>
                                <?php endif; ?>

                                <?php if(count($data_barang) > 0) : ?>
                                <h1>Rp. <?=  number_format($subtotal,0,',','.') ?></h1>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                    <?php if(count($data_barang) > 0) : ?>
                    <input type="hidden" name="namaBarang" value="<?= $data_barang["judul_barang"] ?>">
                    <input type="hidden" name="quantityBarang" value="<?= $data_barang["quantity_barang"] ?>">
                    <input type="hidden" name="hargaBarang" value="<?= $data_barang["harga_barang"] ?>">
                    <input type="hidden" name="subtotal" value="<?= $subtotal ?>">
                    <input type="hidden" name="id" value="<?= $data_barang["id"] ?>">
                    <button type="submit" name="pesan">Buat Nomor Pesanan</button>
                    <?php endif; ?>


                    <?php if(isset($_SESSION['cart']) && count($data_barang) < 1) : ?>
                    <button type="submit" name="pesanKeranjang">Buat Nomor Pesanan</button>
                    <?php endif; ?>

                </div>

            </div>
        </form>

    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>