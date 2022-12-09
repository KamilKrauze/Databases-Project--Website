<?php
$productData = array();

session_start();

include '../db.php';

// $_SESSION['cart'] = array();
// $_SESSION['quantites'] = array();
// $_SESSION['prices'] = array();

$get_productName = "SELECT productName FROM v_products WHERE productID=?";


for ($i = 0; $i < count($_SESSION['cart']); $i++) {

    // Prepare and execute fetch
    $stmt=$mysql->prepare($get_productName);
    $stmt->bind_param("i", $_SESSION['cart'][$i]);
    $stmt->execute();

    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $productName = $row['productName'];

    $productData[] = array(
        "id" => $_SESSION['cart'][$i],
        "name" => $productName,
        "quantity" => $_SESSION['quantites'][$i],
        "cost" => $_SESSION['prices'][$i]
    );

    echo json_encode($productData);
}

?>