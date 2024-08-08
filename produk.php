<?php 


include "admin/config/app.php";

$dataBarang = select("SELECT * FROM barang");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Search</title>
</head>
<body>

<nav class="navbar">
    <div class="top-section1">
        <div class="logo">
            <img src="asset/img/logo.svg" alt="Logo">
        </div>
        <div class="search">
            <form action="" method="post">
                <input type="text" name="cari" placeholder="Cari Produk...">
                <button type="submit" name="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="nav-kiri">
            <a href=""><i class="fa-solid fa-bag-shopping"></i></a>
            <a href=""><i class="fa-solid fa-user"></i></a>
        </div>
    </div>
</nav>

<section id="all" class="all-prduk">
        <div class="isi-produk">
            <?php foreach($dataBarang as $barang) :?>
                <div class="pro-container">
                    <div class="pro">
                        <img src="admin/assets/img/<?= $barang["foto_barang"] ?>">
                    </div>

                <div class="deskripsi">
                    <span><?= $barang["kategori_barang"] ?></span>
                    <h5><?= $barang["nama_barang"] ?></h5>
                    <p><?= $barang["deskripsi_barang"] ?></p>
                    <h4>Rp. <?= number_format($barang['harga_barang'],0,',','.') ?></h4>
                <a href="singgle-produk.php ?id_barang=<?= $barang["id_barang"]; ?>" class="beli">+KERANJANG</a>
            </div>
        </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section id="footer-prd" class="ft-prd">
        <h1>BALI SHOP</h1>
        <div class="foot">
            <ul>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
            </ul>
            <p>© 2024 BALI SHOP. All Rights Reserved.</p>
        </div>
    </section>
</body>
</html>