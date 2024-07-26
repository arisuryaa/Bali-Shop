<?php 

include "config/app.php";

$get = $_GET["id_barang"];

hapusbarang($get);

echo "<script>
        document.location.href = 'index.php';
</script>";


?>