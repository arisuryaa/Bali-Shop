<?php

include "layout/header.php"; 
include 'config/app.php';

if (isset($_POST['submit'])) {
 
    if ($_POST > 0) {
        addBarang($_POST);
        echo "<script>
        alert('Data Barang Berhasil Ditambahkan');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Barang Gagal Ditambahkan');
        document.location.href = 'index.php';
        </script>";
    }
}



?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Barang</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Data Barang</a></li>
                        <li class="breadcrumb-item active">Tambah Barang</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Main content -->
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Barang</label>
                    <input required type="text" class="form-control" id="nama" placeholder="Nama Barang"
                        name="namaBarang">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Barang</label>
                    <input required type="number" class="form-control" id="harga" placeholder="harga Barang"
                        name="hargaBarang">
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok Barang</label>
                    <input required type="number" class="form-control" id="stok" placeholder="stok Barang"
                        name="stokBarang">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">deskripsi Barang</label>
                    <input required type="text" class="form-control" id="deskripsi" placeholder="deskripsi Barang"
                        name="deskripsiBarang">
                </div>

                <div class="mb-3 ">
                    <label for="kategori" class="form-label">Kategori Barang</label>
                    <select class="form-control" name="kategori" id="kategori" required>
                        <option value="">--Pilih Kategori--</option>
                        <option value="Elektronik">Elektronik</option>
                        <option value="Software">Software</option>
                        <option value="Es Teh">Es Teh</option>
                    </select>
                </div>
                <div class=" mb-3">
                    <label for="foto" class="form-label">foto</label>
                    <input type="file" class="form-control" id="foto" placeholder="foto" name="foto"
                        onchange="preview()">
                    <img src="" alt="" class="img-thumbnail img-preview" width="100px">
                </div>

                <button type="submit" name="submit" class="btn btn-primary">submit</button>
            </form>

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php include "layout/footer.php";?>