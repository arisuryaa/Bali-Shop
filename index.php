<?php

include "admin/config/app.php";

$dataBarang = select("SELECT * FROM barang");

if (isset($_POST["submit"]) ) {
    $dataBarang = submit($_POST["cari"]);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Bali Shop</title>
</head>

<body>

    <!--navbar-->

    <nav class="navbar">
    <div class="top-section">
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
    
    <div class="bottom-section">
        <div class="left-nav">
            <a href="produk.php">SEMUA PRODUK</a>
        </div>
        <div class="right-nav">
            <p>Hubungi Kami: +62 877 5081 7501</p>
        </div>
    </div>
</nav>

    <!--hero-->

    <section class="hero" id="hr">
<<<<<<< HEAD
        <div class="slides">
            <img src="asset/img/Frame 2.png" alt="Scroll1">
            <img src="asset/img/Frame 3 .png" alt="Scroll2">
=======
        <div class="slides">    
            <img src="asset/img/frame 2.svg" alt="Frame1">
            <img src="asset/img/frame 3.svg" alt="Frame2">
>>>>>>> 88e7689f1ec4e5c3dde2d1da4f71a8cadf5d379e
        </div>
    </section>

    <!--tipe produk-->

    <section class="box" id="tipe">
        <div class="box-left">
            <img src="asset/img/monitor.svg">
            <h1>MONITOR</h1>
            <p>Monitor kami menghadirkan visual tajam dan performa optimal untuk pengalaman tampilan yang menakjubkan.</p>
            <a href="" class="tombol-box">Lihat Semua</a>
        </div>

        <div class="box-right">
            <img src="asset/img/vr-mockup.svg">
            <div class="text">
                <h1>VR</h1>
                <p>VR kami menawarkan pengalaman imersif yang mendalam dengan grafis yang memukau dan interaksi yang intuitif.</p>
                <a href="" class="tombol-box">Lihat Semua</a>
            </div>
        </div>
    </section>

    <!--discount-->

    <section id="discount" class="disc">
        <div class="disc-container">
            <div class="gambar">
                <img src="asset/img/monitor.svg">
            </div>

            <div class="disc-des">
                <h1>50% OFF</h1>
                <h3>MONITOR ASUS 240HZ</h3>
                <a href="" class="beli-sekarang">Beli Sekarang</a>
            </div>
        </div>
        </div>
    </section>

    <!--produk unggulan-->

    <section id="produk1" class="prd">
        <h1>PRODUK UNGGULAN</h1>
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
<<<<<<< HEAD
                    <h4>Rp.<?= $barang["harga_barang"] ?></h4>
                    <a href="#" class="beli">+KERANJANG</a>
                </div>
=======
                    <h4>Rp. <?= number_format($barang['harga_barang'],0,',','.') ?></h4>
                <a href="singgle-produk.php ?id_barang=<?= $barang["id_barang"]; ?>" class="beli">BELI SEKARANG</a>
>>>>>>> 88e7689f1ec4e5c3dde2d1da4f71a8cadf5d379e
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

</body>

</html>