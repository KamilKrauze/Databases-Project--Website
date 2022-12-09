<?php
session_start();

if (isset($_POST['itemID'])) {
    $item = $_POST['itemID'];
    echo $item;

    $index = array_search($item, $_SESSION['cart']);
    array_splice($_SESSION['cart'], $index, 1);

    foreach ($_SESSION['cart'] as $item) {
        echo $item;
    }
}
?>