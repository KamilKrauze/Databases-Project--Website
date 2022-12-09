<?php
session_start();

if (isset($_POST['itemID'])) {
    $item = $_POST['itemID'];
    echo $item;

    $index = array_search($item, $_SESSION['cart']);
    array_splice($_SESSION['cart'], $index, 1);
    array_splice( $_SESSION['quantites'], $index,1);
    array_splice($_SESSION['prices'], $index,1);

}
?>