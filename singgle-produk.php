<?php
include "admin/config/app.php";

$idBarang = $_GET["id_barang"];

$dataBarang = select("SELECT * FROM barang WHERE id_barang = $idBarang")[0];

$barangLain =select("SELECT * FROM barang");

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style2.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
    <nav>
        <div class="logo">
            <img src="asset/img/logo.svg">
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

    <section id="mainProduk">
        <div class="container2">
            <div class="foto">
                <img src="admin/assets/img/<?=$dataBarang["foto_barang"] ?>"
                    alt="admin/assets/img/<?=$dataBarang["foto_barang"] ?>">
                <div class="fotoDetail">
                    <img src="admin/assets/img/<?=$dataBarang["foto_barang2"] ?>"
                        alt="admin/assets/img/<?=$dataBarang["foto_barang2"] ?>">
                    <img src="admin/assets/img/<?=$dataBarang["foto_barang3"] ?>"
                        alt="admin/assets/img/<?=$dataBarang["foto_barang3"] ?>">
                    <img src="admin/assets/img/<?=$dataBarang["foto_barang4"] ?>"
                        alt="admin/assets/img/<?=$dataBarang["foto_barang4"] ?>">
                    <img src="admin/assets/img/<?=$dataBarang["foto_barang5"] ?>"
                        alt="admin/assets/img/<?=$dataBarang["foto_barang5"] ?>">
                </div>
            </div>

            <div class="deskripsi">
                <h1 class="judul"><?= $dataBarang["nama_barang"] ?></h1>
                <p><?= $dataBarang["deskripsi_barang"] ?></p>
                <h1><?= $dataBarang["harga_barang"] ?></h1>
            </div>
        </div>

    </section>

    <section id="produk" class="produk1">
        <h1>PRODUK LAINNYA</h1>
        <?php foreach($barangLain as $barang) : ?>
        <div class="pro-container">
            <div class="pro">
                <img src="admin/assets/img/<?= $barang["foto_barang"] ?>">
                <div class="deskripsi">
                    <span><?= $barang["kategori_barang"] ?></span>
                    <h5><?= $barang["nama_barang"] ?></h5>
                    <p><?= (str_word_count($barang["deskripsi_barang"]) > 5 ? substr($barang["deskripsi_barang"],0,50)."..." : $barang["deskripsi_barang"]) ?>
                    </p>
                    <h4>Rp.<?= $barang["harga_barang"] ?></h4>
                </div>
                <a href="singgle-produk.php?id_barang=<?= $barang["id_barang"] ?>" class="beli">+KERANJANG</a>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
</body>

</html>