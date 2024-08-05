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

    <nav>
        <div class="logo">
            <img src="asset/img/logo.svg">
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
    </nav>

    <!--hero-->

    <section class="hero" id="hr">
        <div class="hero-left">
            <h1>LAPTOP GAMING <br> TERKUAT</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ducimus ea non culpa, incidunt cupiditate itaque, optio hic voluptates architecto</p>
            <a href="">Beli Sekarang</a>
        </div>

        <div class="hero-right">
            <div class="slides">
                <img src="asset/img/mockup.svg" alt="Mockup">
                <img src="asset/img/mouse-mockup1.svg" alt="Mouse">
            </div>
        </div>
    </section>

    <!--tipe produk-->

    <section class="box" id="tipe">
        <div class="box-left">
            <img src="asset/img/mouse-mockup1.svg">
            <h1>MOUSE</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro vero ab laborum harum. Nobis quia</p>
        </div>

        <div class="box-right">
            <img src="asset/img/mouse-mockup1.svg">
            <div class="text">
                <h1>MOUSE</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem quod error, ullam magni neque dolores
                    blanditiis</p>
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
                    <h4>Rp.<?= $barang["harga_barang"] ?></h4>
                <a href="#" class="beli">+KERANJANG</a>
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
                <li><a href="#hr">HOME</a></li>
                <li><a href="#tipe">TIPE</a></li>
                <li><a href="#produk1">KOLEKSI</a></li>
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

        setInterval(showNextImage, 4000);
    </script>

</body>
</html>