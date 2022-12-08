<?php

include '../db.php';

if (isset($_POST['totalCost']) && isset($_POST['productQuantity']) && isset($_POST['productID'])) {

    $total = $_POST['totalCost'];
    $product_quantity = $_POST['productQuantity'];
    $productID = $_POST['productID'];

    $date = date('Y-m-d h:i:s', time());

    // echo "Date->".$date."\nTotal->".$total."\nQuantity->".$product_quantity."\nID->".$productID."\n\n";

    $insert_to_sales = "INSERT INTO sale (totalCost, dateAndTime, isOnline) VALUES (?, ?, ?)";
    $get_sale_id = "SELECT saleID FROM sale WHERE totalCost=? AND dateAndTime=? AND isOnline=?";
    
    $get_total_stock = "SELECT sum(quantity) AS totalStock FROM stock WHERE productID=?";
    $get_product_name = "SELECT productName FROM product WHERE productID=?";
    $get_stockID_quantity = "SELECT stockID, quantity FROM stock WHERE productID=?" ;
    $update_stock = "UPDATE stock SET quantity=? WHERE stockID=?";
    $insert_into_salestock = "INSERT INTO salestock (stockID, saleID, quantity) VALUES (?,?,?)";

    // Insert into sales
    $stmt=$mysql->prepare($insert_to_sales);
    $stmt->bind_param("dsi", $total, $date, bindec(1));
    $stmt->execute();

    // Get sale ID by total price, date and online purchase
    $stmt2=$mysql->prepare($get_sale_id);
    $stmt2->bind_param("dsi", $total, $date, bindec(1));

    // Get total stock quantity of productID
    $stmt3=$mysql->prepare($get_total_stock);
    $stmt3->bind_param("i", $productID);

    // Get productName by productID
    $stmt4=$mysql->prepare($get_product_name);
    $stmt4->bind_param("i", $productID);

    // Get stockID and Quantity by productID
    $stmt5=$mysql->prepare($get_stockID_quantity);
    $stmt5->bind_param("i", $productID);

    // For stock -  Checking how many products can be sold at maximum
    $stmt3->execute();
    $result2 = $stmt3->get_result();
    $row = $result2->fetch_assoc();
    $totalStock = $row['totalStock'];


    // Get product name by ID.
    $stmt4->execute();
    $result3 = $stmt4->get_result();
    $row = $result3->fetch_assoc();
    $productName = $row['productName'];

    // Check if total stock is available for purchase
    if($product_quantity <= $totalStock) {
        // For sale stock
        $stmt2->execute();
        $result1 = $stmt2->get_result();
        $row = $result1->fetch_assoc();
        $saleID = $row['saleID'];

        $stockIDs_of_quantities = array();
        $quantites_per_stockID = array();
        $sold_stock_amount = (array) null;

        $stmt5->execute();
        $result4 = $stmt5->get_result();
        while ($row = $result4->fetch_assoc()) {
            if($row['quantity'] > 1) {
                $quantites_per_stockID[] = $row['quantity'];
                $stockIDs_of_quantities[] = $row['stockID'];
            }
        }

        // echo count($quantites_per_stockID) . "\n";
        // echo $quantites_per_stockID[0] . "- quantity --" . $quantites_per_stockID[1] . "- quantity\n";
        // echo $stockIDs_of_quantities[0] . "- stockID --" . $stockIDs_of_quantities[1] . "- stockID\n";

        $remaining_product_quantity = $product_quantity;
        $temp_stockIDs_list = $stockIDs_of_quantities;
        
        while ($remaining_product_quantity > 0) {
            $atMaxElement = array_search(max($quantites_per_stockID), $quantites_per_stockID);

            if ($remaining_product_quantity >= $quantites_per_stockID[$atMaxElement]) {
                $remaining_product_quantity -= $quantites_per_stockID[$atMaxElement];
                
                // Store sold amount
                array_push($sold_stock_amount, $quantites_per_stockID[$atMaxElement]);

                // This is for bind_param function - represents the quantity to be set.
                $zero = 0;

                // echo $atMaxElement . " - max Element\n";
                // echo $stockIDs_of_quantities[$atMaxElement] . " - stockID\n";

                // Prepare and execute update
                $stmt6=$mysql->prepare($update_stock);
                $stmt6->bind_param("ii", $zero ,$stockIDs_of_quantities[$atMaxElement]);
                $stmt6->execute();

                // Remove max
                array_splice($quantites_per_stockID, $atMaxElement, 1);
                array_splice($stockIDs_of_quantities, $atMaxElement, 1);
            }
            else if ($quantites_per_stockID[$atMaxElement] > $remaining_product_quantity) {
                $quantites_per_stockID[$atMaxElement] = $quantites_per_stockID[$atMaxElement] - $remaining_product_quantity; 

                // Store sold amount
                array_push($sold_stock_amount, $quantites_per_stockID[$atMaxElement]);

                // echo "\nThe else if is ran!\n";
                // echo "remaining prod quantity-> " .$quantites_per_stockID[$atMaxElement] . "\n";
                // echo "stockIDs of quant -> " . $stockIDs_of_quantities[$atMaxElement];

                $stmt6=$mysql->prepare($update_stock);
                $stmt6->bind_param("ii", $quantites_per_stockID[$atMaxElement] ,$stockIDs_of_quantities[$atMaxElement]);
                $stmt6->execute();
                break;
            }
        }

        // Add to sale stock
        $stmt7=$mysql->prepare($insert_into_salestock);

        for($i=0; $i < count($temp_stockIDs_list); $i+=1) {
            $stmt7->bind_param("iii",$temp_stockIDs_list[$i], $saleID, $sold_stock_amount[$i]);
            $stmt7->execute();
        }
        echo "SUCCESS";
    }
    else {
        echo "NOT_ENOUGH_STOCK_AVAILABLE";
    }


}
else {
echo "COMPLETE_FAILURE";
}
?>