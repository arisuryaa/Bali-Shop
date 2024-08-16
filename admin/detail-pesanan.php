<?php 

include "layout/header.php";
include 'config/app.php';
$id_pesanan =(int)$_GET["id_pesanan"];

$detailPesanan = select("SELECT * FROM pesanan WHERE id_pesanan = $id_pesanan")[0];

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 ">
                <div class="col-sm-6">
                    <ol class="breadcrumb ">
                        <li class="breadcrumb-item"><a href="pesanan.php">Data Pesanan</a></li>
                        <li class="breadcrumb-item active">Detail Pesanan <?= $detailPesanan["nama_pemesan"] ?></li>
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
                <h1>Detail Pesanan <?=$detailPesanan["nama_pemesan"] ?></h1>
                <hr>
                <table class="table table-bordered table-hover">
                    <tr>
                        <td>Nama Pemesan</td>
                        <td><?= $detailPesanan["nama_pemesan"] ?></td>
                    </tr>
                    <tr>
                        <td>Email Pemesan</td>
                        <td><?= $detailPesanan["email"] ?></td>
                    </tr>
                    <tr>
                        <td>Nomor Telepon</td>
                        <td><?= $detailPesanan["nomor_telpon"] ?></td>
                    </tr>
                    <tr>
                        <td>Catatan Pesanan</td>
                        <td><?= $detailPesanan["catatan_pesanan"] ?></td>
                    </tr>
                    <tr>
                        <td>Nama Barang</td>
                        <td><?= $detailPesanan["nama_barang"] ?></td>
                    </tr>
                    <tr>
                        <td>Quantity barang</td>
                        <td><?= $detailPesanan["quantity_barang"] ?></td>
                    </tr>
                    <tr>
                        <td>Harga barang</td>
                        <td><?= $detailPesanan["harga_barang"] ?></td>
                    </tr>
                    <tr>
                        <td>Subtotal</td>
                        <td><?= $detailPesanan["subtotal"] ?></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td> <?= $detailPesanan["status"] ?></td>
                    </tr>
                </table>
                <a href="pesanan.php" class="mt-2 btn btn-primary mb-5" style="float-right">Kembali</a>
            </div>

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php include "layout/footer.php";?>