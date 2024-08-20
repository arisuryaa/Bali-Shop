<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
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

    <div class="hero2">
        <h1>My Account</h1>
    </div>

    <div class="main">
        <div class="fotoUser">
            <img src="asset/img/ikan.png" alt="">
            <h1>Username</h1>
            <button>Ubah Foto Profile</button>
        </div>
        <div class="dataUser">
            <div class="bio">
                <h1>Biodata Diri</h1>
                <div class="containerBio">
                    <div class="judulBio">
                        <h2>Nama</h2>
                        <h2>Tanggal Lahir</h2>
                        <h2>Jenis Kelamin</h2>
                    </div>
                    <div class="deskripsiBio">
                        <h2>Nama User</h2>
                        <a href="">Tambah Tanggal Lahir</a>
                        <a href="">Tambah Jenis Kelamin</a>
                    </div>
                </div>
            </div>
            <div class="kontak">
                <h1>Kontak</h1>
                <div class="containerKontak">
                    <div class="judulKontak">
                        <h2>Email</h2>
                        <h2>Nomor Telpon</h2>
                    </div>
                    <div class="deskripsiKontak">
                        <h2>email@gmail.com</h2>
                        <a href="">Tambah Nomor Telpon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="back">
        <i class="fa fa-arrow-left" aria-hidden="true"></i>
        <a href="index.php">Kembali ke Halaman Depan</a>
    </div>


</body>

</html>