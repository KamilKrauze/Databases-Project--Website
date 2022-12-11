<?php
session_start();

$id = $_POST['itemID'];
$quantity = $_POST['quantity'];

$index = array_search($id, $_SESSION['cart']);
$_SESSION['quantities'][$index] = $quantity;

?>