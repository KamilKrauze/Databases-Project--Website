CREATE TABLE `salestock` (
  `saleStockID` int(11) NOT NULL AUTO_INCREMENT,
  `stockID` int(11) NOT NULL,
  `saleID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`saleStockID`),
  UNIQUE KEY `saleStockID` (`saleStockID`),
  KEY `stockID` (`stockID`),
  KEY `saleID` (`saleID`),
  CONSTRAINT `salestock_ibfk_1` FOREIGN KEY (`stockID`) REFERENCES `stock` (`stockID`),
  CONSTRAINT `salestock_ibfk_2` FOREIGN KEY (`saleID`) REFERENCES `sale` (`saleID`)
);
