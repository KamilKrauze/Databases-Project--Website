CREATE VIEW products
AS
SELECT
s.quantity,
p.productName, p.productType, p.retailPrice, p.catNo,
ms.artist, ms.label, ms.yearRelease, ms.musicFormat, ms.size, ms.speedRPM, ms.country, ms.genre
FROM
	stock s LEFT JOIN product p
    ON
    s.productID = p.productID
    LEFT JOIN musicspec ms
	ON
    p.productName = ms.title;
    
SELECT * FROM 22ac3d06.products;
    