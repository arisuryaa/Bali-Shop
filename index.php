<?php

include "admin/config/app.php";

include "Layout/Navbar.php";

$dataBarang = select("SELECT * FROM barang");

if (isset($_GET['submit'])) {
    $keyword = $_GET['cari'];
    $dataBarang = searchBarang($keyword);
    $noResults = empty($dataBarang);
} else {
    $dataBarang = select("SELECT * FROM barang LIMIT 6");
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>Bali Shop</title>
    <link rel="icon" href="asset/img/logo2.png" type="image/png" />
</head>

<body>

    <!--hero-->

    <section class="hero" id="hr">
        <div class="slides">
            <img src="asset/img/Frame2.png" alt="Frame1">
            <img src="asset/img/Frame3.png" alt="Frame2">
        </div>
    </section>

    <!--tipe produk-->

    <section class="box" id="tipe">

        <div class="judul-kategori">
            <h1>KATEGORI</h1>
        </div>

        <div class="isi-box">

            <a href="produk.php?submit=xasdahr&cari=mouse" class="box-container">
                <img src="asset/img/ilustrasi-mousee.svg">
                <h1>Mouse</h1>
                <!-- <p>5 Produk</p> -->
            </a>

            <a href="produk.php?submit=koeade&cari=monitor" class="box-container">
                <img src="asset/img/ilustrasi-monitor1.svg">
                <h1>Monitor</h1>
                <!-- <p>5 Produk</p> -->
            </a>

            <a href="produk.php?submit=suk4ry4&cari=headset" class="box-container">
                <img src="asset/img/ilustrasi-headset.svg">
                <h1>Headset</h1>
                <!-- <p>5 Produk</p> -->
            </a>

            <a href="produk.php?submit=oasdsk&cari=keyboard" class="box-container">
                <img src="asset/img/ilustrasi-keyboard.svg">
                <h1>Keyboard</h1>
                <!-- <p>5 Produk</p> -->
            </a>

        </div>
    </section>

    <!--discount-->

    <section id="discount" class="disc">
        <div class="disc-container">
            <div class="gambar">
                <img src="asset/img/discount-mockup.svg">
            </div>

            <div class="disc-des">
                <h1>50% OFF</h1>
                <h3>UNTUK SEMUA KOLEKSI TERBARU</h3>
                <a href="" class="beli-sekarang">Beli Sekarang</a>
            </div>
        </div>
        </div>
    </section>

    <!--produk unggulan-->

    <section id="produk" class="produk1">
        <h1>PRODUK UNGGULAN</h1>
        <div class="pro-container">
            <?php foreach($dataBarang as $barang) : ?>
            <div class="pro">
                <img src="admin/assets/img/<?= $barang["foto_barang"] ?>">
                <div class="deskripsi">
                    <div class="">
                        <span><?= $barang["kategori_barang"] ?></span>
                        <h5><?= $barang["nama_barang"] ?></h5>
                    </div>
                    <p><?= (str_word_count($barang["deskripsi_barang"]) > 5 ? substr($barang["deskripsi_barang"],0,30)."..." : $barang["deskripsi_barang"]) ?>
                    </p>
                    <div class="harga">
                        <h4>Rp<?= number_format($barang['harga_barang'],0,',','.') ?></h4>
                        <a href="singgle-produk.php?id_barang=<?= $barang["id_barang"] ?>" class="beli">BELI
                            SEKARANG</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!--service-->

    <section id="service" class="srvc">
        <div class="ser-container">
            <img src="asset/img/service.svg">
        </div>
    </section>

    <!--footer-->

    <section id="footer" class="ft">
        <h1>BALI SHOP</h1>
        <div class="foot-container">
            <ul>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
            </ul>
            <p>© 2024 BALI SHOP. All Rights Reserved.</p>
        </div>
    </section>

    <script>
    var currentIndex = 0;
    var slides = document.querySelector('.slides');
    var images = document.querySelectorAll('.slides img');
    var totalImages = images.length;

    function showNextImage() {

        currentIndex = (currentIndex + 1) % totalImages;

        slides.style.transform = 'translateX(' + (-currentIndex * 100) + '%)';
    }

    setInterval(showNextImage, 5000);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>