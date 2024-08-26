<?php
include "admin/config/app.php";
include "layout/navbar.php";


$idBarang = $_GET["id_barang"];

$dataBarang = select("SELECT * FROM barang WHERE id_barang = $idBarang")[0];
$barangLain =select("SELECT * FROM barang LIMIT 6");

session_start();

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

                <form id="orderForm" action="keranjang.php" method="POST" onsubmit="setQuantityValue()">
                    <input type="hidden" name="judul_barang" value="<?= $dataBarang["nama_barang"] ?>">
                    <input type="hidden" name="id_barang" value="<?= $idBarang ?>">
                    <input type="hidden" name="harga_barang" value="<?= $dataBarang["harga_barang"] ?>">
                    <input type="hidden" id="quantityInput" name="quantity_barang" value="">
                    <button type="submit" name="add_to_cart" onclick="setAction('keranjang.php')">Tambah
                        Keranjang</button>
                    <button type="submit" name="buy_now" onclick="setAction('checkout.php')">Beli Sekarang</button>
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
                    <h4>Rp.<?= number_format($barang['harga_barang'],0,',','.') ?></h4>
                    <div class="harga">
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
        let quantityValue = document.getElementById("quantity").innerText;
        document.getElementById("quantityInput").value = quantityValue;
    }

    function setAction(actionUrl) {
        document.getElementById('orderForm').action = actionUrl;
    }

    document.addEventListener("DOMContentLoaded", function() {
        let quantity1 = document.getElementById("quantity");
        let plusBtn = document.getElementById("plus-btn");
        let minusBtn = document.getElementById("minus-btn");

        // Tambahkan event listener untuk tombol plus
        plusBtn.addEventListener("click", function() {
            let currentQuantity = parseInt(quantity1.innerText);
            quantity1.innerText = currentQuantity + 1;
        });

        // Tambahkan event listener untuk tombol minus
        minusBtn.addEventListener("click", function() {
            let currentQuantity = parseInt(quantity1.innerText);
            if (currentQuantity > 1) {
                quantity1.innerText = currentQuantity - 1;
            }
        });
    });
    </script>
</body>



</html>