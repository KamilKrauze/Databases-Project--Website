
<?php
session_start(); // Start session to have access to defined session variables.

if (isset($_POST['itemID'])) {

    // Fetch data passed from JS.
    $itemID = $_POST['itemID'];
    $quantity = $_POST['quantity'];
    $price = $_POST['itemPrice'];

    // Push data to respective session arrays.
    array_push($_SESSION['cart'], $itemID);
    array_push($_SESSION['quantities'], $quantity);
    array_push($_SESSION['prices'], $price);

    // Debug echo
    echo "ID: {$itemID}\nQuantity: {$quantity}\nPrice: ${price}\n";
}
?>