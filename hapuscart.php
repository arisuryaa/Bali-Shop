<?php

session_start();

$id = $_GET["id"];

for($i = 0; $i < count($_SESSION["cart"]); $i++) {
    if($_SESSION['cart'][$i]['id'] == $id) {
        unset($_SESSION['cart'][$i]);
        $_SESSION['cart'] = array_values($_SESSION['cart']);
        break; 
    }
}

echo "
    <script>
        document.location.href= 'keranjang.php';
    </script>
";


?>