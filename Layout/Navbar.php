<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>Bali Shop</title>
</head>

<body>

    <!--navbar-->

    <nav class="navbar">
        <div class="top-section">
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
                <a href="myaccount.php"><i class="fa-solid fa-user"></i></a>
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