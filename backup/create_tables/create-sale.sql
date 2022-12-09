CREATE TABLE `sale` (
  `saleID` int(11) NOT NULL AUTO_INCREMENT,
  `storeNo` int(11) DEFAULT NULL,
  `staffNo` int(11) DEFAULT NULL,
  `customerNo` int(11) DEFAULT NULL,
  `totalCost` double NOT NULL,
  `dateAndTime` datetime NOT NULL,
  `isOnline` bit(1) DEFAULT NULL,
  PRIMARY KEY (`saleID`),
  UNIQUE KEY `saleID` (`saleID`),
  KEY `storeNo` (`storeNo`),
  KEY `staffNo` (`staffNo`),
  KEY `customerNo` (`customerNo`),
  CONSTRAINT `sale_ibfk_1` FOREIGN KEY (`storeNo`) REFERENCES `store` (`storeNo`),
  CONSTRAINT `sale_ibfk_2` FOREIGN KEY (`staffNo`) REFERENCES `staff` (`staffNo`),
  CONSTRAINT `sale_ibfk_3` FOREIGN KEY (`customerNo`) REFERENCES `customer` (`customerNo`)
);
