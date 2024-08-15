<?php 

include "config/app.php";

$get = $_GET["id_pesanan"];

hapusPesanan($get);

echo "<script>
        alert('data pesanan berhasil dihapus');
        document.location.href = 'pesanan.php';
</script>";


?>