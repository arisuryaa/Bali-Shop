<?php 


include "admin/config/app.php";
include "layout/navbar.php";

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
                <h3>BALI SHOP</h3><br>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae deserunt quae reiciendis at laborum
                    dolore nam facere inventore repudiandae.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas, atque earum? Maiores nisi maxime
                    repudiandae assumenda facilis
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