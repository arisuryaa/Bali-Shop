<?php 

include "layout/header.php";
include 'config/app.php';
$id_barang =(int)$_GET["id_barang"];

$detailBarang = SELECT("SELECT * FROM barang WHERE id_barang = $id_barang")[0];

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 ">
                <div class="col-sm-6">
                    <ol class="breadcrumb ">
                        <li class="breadcrumb-item"><a href="index.php">Data Barang</a></li>
                        <li class="breadcrumb-item active">Detail Barang <?= $detailBarang["nama_barang"] ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="">
                <h1>Detail Barang <?=$detailBarang["nama_barang"] ?></h1>
                <hr>
                <table class="table table-bordered table-hover">
                    <tr>
                        <td>Nama Barang</td>
                        <td><?= $detailBarang["nama_barang"] ?></td>
                    </tr>
                    <tr>
                        <td>harga</td>
                        <td><?= $detailBarang["harga_barang"] ?></td>
                    </tr>
                    <tr>
                        <td>stok Barang</td>
                        <td><?= $detailBarang["stock_barang"] ?></td>
                    </tr>
                    <tr>
                        <td>kategori barang</td>
                        <td><?= $detailBarang["kategori_barang"] ?></td>
                    </tr>
                    <tr>
                        <td>deskripsi barang</td>
                        <td><?= $detailBarang["deskripsi_barang"] ?></td>
                    </tr>
                    <tr>
                        <td>Foto</td>
                        <td>
                            <img src="assets/img/<?= $detailBarang["foto_barang"] ?>"
                                alt="<?= $detailBarang["foto_barang"] ?>" class="w-25 h-auto">
                            <img src="assets/img/<?= $detailBarang["foto_barang2"] ?>"
                                alt="<?= $detailBarang["foto_barang2"] ?>" class="w-25 h-auto">
                            <img src="assets/img/<?= $detailBarang["foto_barang3"] ?>"
                                alt="<?= $detailBarang["foto_barang3"] ?>" class="w-25 h-auto">
                            <img src="assets/img/<?= $detailBarang["foto_barang4"] ?>"
                                alt="<?= $detailBarang["foto_barang4"] ?>" class="w-25 h-auto">
                            <img src="assets/img/<?= $detailBarang["foto_barang5"] ?>"
                                alt="<?= $detailBarang["foto_barang5"] ?>" class="w-25 h-auto">
                        </td>
                    </tr>
                </table>
                <a href="index.php" class="mt-2 btn btn-primary mb-5" style="float-right">Kembali</a>
            </div>

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php include "layout/footer.php";?>