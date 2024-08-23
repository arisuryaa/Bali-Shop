<?php

session_start();

if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['id_barang'];
    $product_name = $_POST['judul_barang'];
    $product_price = $_POST['harga_barang'];
    $product_quantity = $_POST['quantity_barang'];

    $cart_item = array(
        'id' => $product_id,
        'name' => $product_name,
        'price' => $product_price,
        'quantity' => $product_quantity,
    );
    

    
    $found = false; 
    if (isset($_SESSION['cart'])) {
        for ($i = 0; $i < count($_SESSION['cart']); $i++) {
            if ($product_id === $_SESSION['cart'][$i]['id']) {
                $_SESSION['cart'][$i]['quantity'] = (int)$_SESSION['cart'][$i]['quantity'] + (int)$product_quantity;
                $found = true;
                break;
            }
        }
        if (!$found) {
            array_push($_SESSION['cart'], $cart_item);
        }
    } else {
        $_SESSION['cart'] = array($cart_item);
    }
    
}

include "Layout/Navbar.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stylekeranjang.css">
</head>

<body>
    <h4>Keranjang Anda</h4>
    <div class="container">
        <table cellspacing="0" cellpadding="0">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>Harga</td>
                    <td>Jumlah</td>
                    <td>Total</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php $subtotal = 0; ?>
                <?php foreach($_SESSION["cart"] as $barang) : ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $barang["name"] ?></td>
                    <td><?= number_format($barang["price"],0,',','.')?></td>
                    <td><?= $barang["quantity"] ?></td>
                    <td><?= number_format((int)$barang["quantity"] * (int)$barang["price"],0,',','.') ?></td>
                    <td><a href="hapuscart.php?id=<?= $barang["id"] ?>"><i class="fa fa-times"
                                aria-hidden="true"></i></a></td>
                </tr>
                <?php $no++ ?>
                <?php $subtotal += $barang["price"] * $barang["quantity"] ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="subtotal">
        <div class="total">
            <h1>Total</h1>
            <div class="harga">
                <h1>Subtotal :</h1>
                <h1><?= number_format($subtotal,0,',','.') ?></h1>
            </div>
            <form action="" method="POST">
                <button>Pesan Sekarang</button>
            </form>
        </div>
    </div>

</body>

</html>