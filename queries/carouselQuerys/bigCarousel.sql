SELECT productID, productName, retailPrice, artist, musicFormat
FROM product 
LEFT JOIN musicspec
ON product.catNo = musicspec.catNo
ORDER BY RAND()
lIMIT 5;