CREATE VIEW v_onlinesales
AS
SELECT
	sa.saleID, sa.customerNo, sa.totalCost, sa.dateAndTime, sa.isOnline,
    ss.stockID AS ssStockID, ss.quantity AS ssQuantity, sto.stockID as stoStockID, sto.productID, sto.quantity as stoQuantity 
FROM
sale sa LEFT JOIN salestock ss
ON sa.saleID = ss.saleID LEFT JOIN stock sto ON ss.stockID = sto.stockID;