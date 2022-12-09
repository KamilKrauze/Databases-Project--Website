<?php
session_start();

if (isset($_POST['itemID'])) {
    $itemID = $_POST['itemID'];
    $quantity = $_POST['quantity'];
    $price = $_POST['itemPrice'];

    array_push($_SESSION['cart'], $itemID);
    array_push($_SESSION['quantites'], $quantity);
    array_push($_SESSION['prices'], $price);
}
?>