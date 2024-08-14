<?php 


include "admin/config/app.php";

$dataBarang = select("SELECT * FROM barang");

if (isset($_GET['submit'])) {
    $keyword = $_GET['cari'];
    $dataBarang = searchBarang($keyword);
    $noResults = empty($dataBarang);
} else {
    $dataBarang = select("SELECT * FROM barang");
    $noResults = false;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Semua Produk</title>
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
            <a href=""><i class="fa-solid fa-user"></i></a>
        </div>
    </div>
</nav>

    <section id="all" class="all-prduk">

        <?php if ($noResults): ?>
                <p class="tidak-ada-hasil">Tidak ada produk yang ditemukan.</p>
        <?php else: ?>

        <?php foreach($dataBarang as $barang) : ?>
        <div class="pro-container">
            <div class="pro">
                <img src="admin/assets/img/<?= $barang["foto_barang"] ?>">

                <div class="deskripsi">
                    <span><?= $barang["kategori_barang"] ?></span>
                    <h5><?= $barang["nama_barang"] ?></h5>
                    <p><?= (str_word_count($barang["deskripsi_barang"]) > 5 ? substr($barang["deskripsi_barang"],0,50)."..." : $barang["deskripsi_barang"]) ?>
                    </p>
                    <h4>Rp. <?= number_format($barang['harga_barang'],0,',','.') ?></h4>
                </div>
                <a href="singgle-produk.php?id_barang=<?= $barang["id_barang"] ?>" class="beli">+KERANJANG</a>
            </div>
            <?php endforeach; ?>

            <?php endif; ?>
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