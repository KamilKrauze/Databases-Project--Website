<?php

include '../db.php';

if(isset($_POST['itemID']))
{
    $query_param = $_POST['itemID'];

    $fetch_productName = "SELECT DISTINCT productName, retailPrice FROM v_products WHERE productID = ?";

    $stmt=$mysql->prepare($fetch_productName);
    $stmt->bind_param("i", $query_param);
    $stmt->execute();
    $result = $stmt->get_result();

    $row = $result->fetch_assoc();
    $item = $row['productName'];
    $cost = $row['retailPrice'];
    

    // PHP to JS, JSON Encoding
    // Source: https://stackoverflow.com/questions/4240763/sending-php-json-encode-array-to-jquery
    // Data Accessed: 08/12/2022 - 09:00AM

    // Store variables in array
    $itemData = array(
        'name' => $item,
        'price'=> $cost
    );
    
    // Sending response with JSON encoding of array.
    echo json_encode($itemData);
}

?>