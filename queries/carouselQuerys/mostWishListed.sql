SELECT product.productID, ProductName, retailPrice, COUNT(wishlistproduct.quantity) AS total
FROM product, wishlistproduct
WHERE wishlistproduct.productID = product.productID 
GROUP BY productID
ORDER BY total DESC;