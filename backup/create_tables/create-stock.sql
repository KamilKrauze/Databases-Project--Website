CREATE TABLE `stock` (
  `stockID` int(11) NOT NULL,
  `storeNo` int(11) DEFAULT NULL,
  `productID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`stockID`),
  UNIQUE KEY `stockID` (`stockID`),
  KEY `storeNo` (`storeNo`),
  KEY `fk_prod` (`productID`),
  CONSTRAINT `fk_prod` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`),
  CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`storeNo`) REFERENCES `store` (`storeNo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
