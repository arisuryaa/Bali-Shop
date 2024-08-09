<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Bali Shop</title>
    <!-- <style>
        .kotak {
    border: 1px solid black;

  }
    </style> -->
</head>
<body>

<!--navbar-->

<nav>
    <div class="logo">
        <img src="asset/img/logo.svg">
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

<!--hero-->

<div class="hero">
    <h1>
        Checkout <br>
    </h1>

    <div class="tombol">
        <a href="index.php">Home</a>
    </div>
</div>

<!--detail tagihan-->

    <!-- <div class="detailtagihan">
        <div class="dt">
             <h1>
                 Detail Tagihan
             </h1>
        </div>
    </div>

    <div class="kotak">
        <div class="kiri">
        <form action="#">
            <div class="row">
                    <div class="mb-3 col-6">
                        <label for="jurusan" class="form-label">Nama Lengkap</label>
                        <input type="text" 
                        class="form-control"
                        id="firstname" name="firstname" placeholder="....">
                    </div>

                    <div class="mb-3 col-6">
                        <label for="jk" class="form-label">Telepon</label>
                        <input type="text" 
                        class="form-control"
                        id="firstname" name="firstname" placeholder="....">
                    </div>
            </div>

            <div class="it">
            <h1>
            Informasi Tambahan
            </h1>
            </div>
            
            <div class="cp">
            <label for="catatan pesanan">Catatan Pesanan (opsional)</label>
            <input type="text" 
            class="form-control"
            id="catatanpesanan" 
            name="catatanpesanan" 
            placeholder="....">
            </div>
        </form>
    </div>

    <div class="kanan">
        <h1>
            Pesanan Anda
        </h1>
        <div class="garis">
            <div class="linekotak">
                <div class="linekotak1">Produk</div>
                <div class="linekotak2">Subtotal</div>
            </div>
            <div class="linebottom">
                <button>
                    Buat Nomor Pesanan
                </button>
            </div>
        </div>
    </div>

    <section id="kanan" class="prd">
    </div>

</div> -->


<section id="home">
    <div class="container-utama">
        <div class="container-kiri">
            <h1>Detail Tagihan</h1>
            <div class="form-kiri">
                <form action="#">
                        <div class="row">
                           <div class="mb-3 col-6">
                                <label for="jurusan" class="form-label">Nama Lengkap</label>
                                <input type="text" 
                                class="form-control"
                                id="firstname" name="firstname" placeholder="....">
                            </div>

                            <div class="mb-3 col-6">
                                <label for="jk" class="form-label">Telepon</label>
                                <input type="text" 
                                class="form-control"
                                id="firstname" name="firstname" placeholder="....">
                            </div>
                      </div>
                                <h1>Informasi Tambahan</h1>
                                <input class="catatan" type="text" placeholder="catatan">
                </form>
            </div>
        </div>
        <div class="container-kanan">
            <h1>Pesanan Anda</h1>
        </div>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>