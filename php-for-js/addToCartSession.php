<?php
session_start();

if (isset($_POST['itemID'])) {
    $itemID = $_POST['itemID'];

    array_push($_SESSION['cart'], $itemID);
}
?>