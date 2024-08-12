<?php
include "admin/config/app.php";

$idBarang = $_GET["id_barang"];

$dataBarang = select("SELECT * FROM barang WHERE id_barang = $idBarang")[0];
$barangLain =select("SELECT * FROM barang");

if (isset($_POST["submit"])) {
    var_dump($_POST);
}

var_dump($dataBarang["foto_barang"])

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style2.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

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

    <section id="mainProduk">
        <div class="container2">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="admin/assets/img/<?=$dataBarang["foto_barang"] ?>" alt="">
                    </div>
                    <div class="swiper-slide"><img src="admin/assets/img/<?=$dataBarang["foto_barang2"] ?>" alt="">
                    </div>
                    <div class="swiper-slide"><img src="admin/assets/img/<?=$dataBarang["foto_barang3"] ?>" alt="">
                    </div>
                    <div class="swiper-slide"><img src="admin/assets/img/<?=$dataBarang["foto_barang4"] ?>" alt="">
                    </div>
                    <div class="swiper-slide"><img src="admin/assets/img/<?=$dataBarang["foto_barang5"] ?>" alt="">
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="deskripsi">
                <div class="judulBarang">
                    <h1 class="judul"><?= $dataBarang["nama_barang"] ?></h1>
                    <h2 class="">Stok Tersedia : <?= $dataBarang["stock_barang"] ?></h2>
                </div>
                <div class="deskripsiBarang">
                    <p><?= $dataBarang["deskripsi_barang"] ?></p>
                    <h1>Rp. <?= number_format($dataBarang['harga_barang'],0,',','.') ?></h1>
                </div>
                <div class="quantity">
                    <button id="minus-btn"><i class="fa-solid fa-minus"></i></button>
                    <h1 id="quantity">1</h1>
                    <button id="plus-btn"><i class="fa-solid fa-plus"></i></button>
                </div>
                <form action="pemesanan.php" method="POST" onsubmit="setQuantityValue()">
                    <input type="hidden" name="judul_barang" value="<?= $dataBarang["nama_barang"] ?>">
                    <input type="hidden" name="id_barang" value="<?= $idBarang ?>">
                    <input type="hidden" name="harga_barang" value="<?= $dataBarang["harga_barang"] ?>">
                    <input type="hidden" id="quantityInput" name="quantity_barang" value="">
                    <button type="submit" name="submit">Beli Sekarang</button>
                </form>
            </div>

        </div>

        </div>


    </section>


    <section id="produk" class="produk1">
        <h1>PRODUK LAINNYA</h1>
        <div class="pro-container">
            <?php foreach($barangLain as $barang) : ?>
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
                        <h4>Rp.<?= number_format($barang['harga_barang'],0,',','.') ?></h4>
                        <a href="singgle-produk.php?id_barang=<?= $barang["id_barang"] ?>" class="beli">BELI
                            SEKARANG</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </section>
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

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
    var swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
        },
    });

    function setQuantityValue() {
        var quantityValue = document.getElementById("quantity").innerText;

        // Set nilai tersebut ke input hidden dengan name="quantity_barang"
        document.getElementById("quantityInput").value = quantityValue;
    }


    document.addEventListener("DOMContentLoaded", function() {
        var quantity1 = document.getElementById("quantity");
        var plusBtn = document.getElementById("plus-btn");
        var minusBtn = document.getElementById("minus-btn");

        // Tambahkan event listener untuk tombol plus
        plusBtn.addEventListener("click", function() {
            var currentQuantity = parseInt(quantity1.innerText);
            quantity1.innerText = currentQuantity + 1;
        });

        // Tambahkan event listener untuk tombol minus
        minusBtn.addEventListener("click", function() {
            var currentQuantity = parseInt(quantity1.innerText);
            if (currentQuantity > 1) {
                quantity1.innerText = currentQuantity - 1;
            }
        });
    });
    </script>
</body>



</html>