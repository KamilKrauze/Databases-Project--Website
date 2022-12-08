CREATE VIEW v_bestSellingMusic
AS
SELECT
p.productID, p.productName, p.retailPrice, COUNT(ss.quantity) AS total
FROM  
salestock ss LEFT JOIN stock s 
ON ss.stockID = s.stockID
LEFT JOIN product p ON s.productID = p.productID 
WHERE p.musicType = "Music"; 