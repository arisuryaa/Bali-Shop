<?php

session_start();

$id = $_GET["id"];

if(isset($_SESSION['cart'])) {

for($i = 0; $i < count($_SESSION["cart"]); $i++) {
    if($_SESSION['cart'][$i]['id'] == $id) {
        unset($_SESSION['cart'][$i]);
        $_SESSION['cart'] = array_values($_SESSION['cart']);
        break; 
    }
}

if (count($_SESSION['cart']) < 1) {
    unset($_SESSION['cart']);
}

}

echo "
    <script>
        document.location.href= 'keranjang.php';
    </script>
";


?>