SELECT product.productID, productName, retailPrice, COUNT(salestock.quantity) AS total
FROM product, salestock, stock
WHERE product.productID = stock.productID AND stock.stockID = salestock.stockID AND product.productType = "music"
GROUP BY productID
order by total DESC;