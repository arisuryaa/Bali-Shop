<?php 


include "admin/config/app.php";
include "Layout/Navbar.php";

$dataBarang = select("SELECT * FROM barang");

if (isset($_GET['submit'])) {
    $keyword = $_GET['cari'];
    $dataBarang = searchBarang($keyword);
    $noResults = empty($dataBarang);
} else {
    $dataBarang = select("SELECT * FROM barang");
    $noResults = false;
}

var_dump($noResults);

$total = count($dataBarang);

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

    <section id="all" class="all-produk">
        <div class="container <?php echo $noResults ? 'no-results' : ''; ?>">
            <div class="sidebar">
                <div class="">
                    <div class="logo">
                        <img src="asset/img/logo3.png" alt="">
                    </div>
                    <h2>Kategori Terlaris </h2>
                    <div class="kategori">
                        <li><a href="produk.php?submit=koeade&cari=monitor">Monitor</a></li>
                        <li><a href="produk.php?submit=xasdahr&cari=mouse">Mouse</a></li>
                        <li><a href="produk.php?submit=xasdahr&cari=Headset">Headset</a></li>
                        <li><a href="produk.php?submit=xasdahr&cari=keyboard">Keyboard</a></li>
                    </div>
                </div>
                <div class="contact">
                    <h2>Contact</h2>
                    <div class="icon">
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
            </div>

            <div class="content">
                <?php if (!$noResults && !empty($keyword)): ?>
                <p class="info-pencarian">Menampilkan 1-<?= $total ?> barang dari total untuk
                    <strong><?= htmlspecialchars($keyword) ?></strong>.
                </p>
                <?php endif; ?>

                <?php if ($noResults): ?>
                <p class="tidak-ada-hasil">Tidak ada produk yang ditemukan dengan kata kunci
                    <strong><?= htmlspecialchars($keyword) ?></strong>.
                </p>
                <?php else: ?>
                <div class="pro-container">
                    <?php foreach($dataBarang as $barang) : ?>
                    <div class="pro">
                        <a href="singgle-produk.php?id_barang=<?= $barang["id_barang"] ?>">
                            <img src="admin/assets/img/<?= $barang["foto_barang"] ?>">
                            <div class="deskripsi">
                                <span><?= $barang["kategori_barang"] ?></span>
                                <h5><?= $barang["nama_barang"] ?></h5>
                                <h4>Rp<?= number_format($barang['harga_barang'],0,',','.') ?></h4>
                            </div>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
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