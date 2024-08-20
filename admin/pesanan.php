<?php
include "config/app.php";
include "layout/header.php";

$data_barang = select("SELECT * FROM barang");
$data_pesanan = select("SELECT * FROM pesanan");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="fs-6 fw-bold">DATA PESANAN</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Data Barang</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>


        <section class="content">
            <div class="container-fluid">
                <section class="content">
                    <div class="">
                        <div class="mt-3">
                            <div class="">
                                <div class="card">
                                    <div class="card-body">

                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Customer</th>
                                                    <th>No.Telp</th>
                                                    <th>Barang</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1; ?>
                                                <?php foreach($data_pesanan as $pesanan) : ?>
                                                <tr>
                                                    <td><?= $no ?></td>
                                                    <td><?= $pesanan['nama_pemesan'] ?></td>
                                                    <td><?= $pesanan["nomor_telpon"] ?></td>
                                                    <td><?= $pesanan['nama_barang'] ?></td>
                                                    <td><?= $pesanan['status'] ?></td>
                                                    <td>
                                                        <a href="konfirmasi-barang.php?id_pesanan=<?= $pesanan['id_pesanan']; ?>"
                                                            class="btn btn-success ">Selesai</a>
                                                        <a href="delete-pesanan.php?id_pesanan=<?= $pesanan['id_pesanan']; ?>"
                                                            class="btn btn-danger ">Hapus</a>
                                                        <a href="detail-pesanan.php?id_pesanan=<?= $pesanan['id_pesanan']; ?>"
                                                            class="btn btn-secondary ">Detail</a>
                                                    </td>
                                                </tr>
                                                <?php $no++ ?>
                                                <?php endforeach; ?>
                                            </tbody>

                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->


                            </div><!-- /.container-fluid -->
                </section>
            </div>
            <!-- /.content-wrapper -->

            <?php include "layout/footer.php";?>

</body>

</html>