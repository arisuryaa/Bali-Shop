<?php 

include "layout/header.php";
include 'config/app.php';
$id_pesanan =(int)$_GET["id_pesanan"];

$detailPesanan = select("SELECT * FROM pesanan WHERE id_pesanan = $id_pesanan")[0];

if (konfirmasiPesanan($detailPesanan) > 0) {
        echo "<script>
        alert('Status Pesanan Berhasil Diubah');
        document.location.href = 'pesanan.php';
        </script>";
    } else {
        echo "<script>
        alert('Status pesanan gagal Diubah');
        document.location.href = 'pesanan.php';
        </script>";
    }



?>