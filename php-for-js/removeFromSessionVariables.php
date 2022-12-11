<?php
session_start();

if (isset($_POST['itemID'])) {
    $item = $_POST['itemID'];

    $index = array_search($item, $_SESSION['cart']);
    array_splice($_SESSION['cart'], $index, 1);
    array_splice($_SESSION['quantities'], $index,1);
    array_splice($_SESSION['prices'], $index,1);

    $length = count($_SESSION['cart']);
    echo $length;

    for ($i=0; $i<$length; $i++) {
        $ID = $_SESSION['cart'][$i];
        $quantity = $_SESSION['quantities'][$i];
        $price = $_SESSION['prices'][$i];

        echo "ID: {$ID}\n Quantity: {$quantity}\n Price: {$price}\n";
    }
}
?>