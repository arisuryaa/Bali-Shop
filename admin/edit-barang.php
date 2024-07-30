<?php 
include "layout/header.php";
include "config/app.php";

$idBarang = $_GET["id_barang"];
$dataBarang = select("SELECT * FROM barang WHERE id_barang = $idBarang")[0];

if(isset($_POST["submit"])) {

    if(editBarang($_POST) > 0 ) {
        echo "<script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "kontol";
    }
}


?>



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Barang</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Data Barang</a></li>
                        <li class="breadcrumb-item active">Edit Barang</li>
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
                    <input type="hidden" name="id_barang" value="<?= $dataBarang["id_barang"]; ?>">
                    <input type="hidden" name="foto_barang" value="<?= $dataBarang["foto_barang"]; ?>">
                    <label for="nama" class="form-label">Nama Barang</label>
                    <input required type="text" class="form-control" id="nama" placeholder="Nama Barang"
                        name="nama_barang" value="<?= $dataBarang["nama_barang"] ?>">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Barang</label>
                    <input required type="number" class="form-control" id="harga" placeholder="harga Barang"
                        name="harga_barang" value="<?= $dataBarang["harga_barang"] ?>">
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok Barang</label>
                    <input required type="number" class="form-control" id="stok" placeholder="stok Barang"
                        name="stock_barang" value="<?= $dataBarang["stock_barang"] ?>">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">deskripsi Barang</label>
                    <input required type="text" class="form-control" id="deskripsi" placeholder="deskripsi Barang"
                        name="deskripsi_barang" value="<?= $dataBarang["deskripsi_barang"] ?>">
                </div>

                <div class="mb-3 ">
                    <label for="kategori" class="form-label">Kategori Barang</label>
                    <select class="form-control" name="kategori_barang" id="kategori" required>
                        <option value="">--Pilih Kategori--</option>
                        <option value="Elektronik"
                            <?= $dataBarang["kategori_barang"] == "Elektronik" ? 'selected' : null  ?>>Elektronik
                        </option>
                        <option value="Software"
                            <?= $dataBarang["kategori_barang"] == "Software" ? 'selected' : null  ?>>
                            Software</option>
                        <option value="Es Teh" <?= $dataBarang["kategori_barang"] == "Es Teh" ? 'selected' : null  ?>>Es
                            Teh</option>
                    </select>
                </div>
                <div class=" mb-3">
                    <label for="foto" class="form-label">foto</label>
                    <input type="file" class="form-control" id="foto" placeholder="foto" name="foto_barang"
                        onchange="preview()">
                    <img src="" alt="" class="img-thumbnail img-preview" width="100px">
                </div>

                <button type="submit" name="submit" class="btn btn-primary">submit</button>
            </form>

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php include "layout/footer.php";?>