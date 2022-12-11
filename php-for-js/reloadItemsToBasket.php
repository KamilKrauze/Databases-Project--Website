<?php
include '../db.php';

session_start();

$productData = array();

$fetch_product_name = "SELECT productName FROM v_products WHERE productID=?";

if (count($_SESSION['cart']) != 0) {

    for ($i = 0; $i < count($_SESSION['cart']); $i++) {
        $stmt = $mysql->prepare($fetch_product_name);
        $stmt->bind_param("i", $_SESSION['cart'][$i]);
        $stmt->execute();

        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        $productName = $row['productName'];

       $productData[] = array(
            "id" => $_SESSION['cart'][$i],
            "name" => $productName,
            "quantity" => $_SESSION['quantities'][$i],
            "cost" => (float)$_SESSION['prices'][$i]
       );
    }

    print_r(json_encode($productData));
    
} else {
    echo "EMPTY_BASKET";
}
?>