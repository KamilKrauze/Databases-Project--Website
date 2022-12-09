CREATE TABLE `product` (
  `productID` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(255) NOT NULL,
  `productType` varchar(255) NOT NULL,
  `supplierCost` double NOT NULL,
  `retailPrice` double NOT NULL,
  `supplierID` int(11) NOT NULL,
  `catNo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`productID`),
  UNIQUE KEY `productID` (`productID`),
  KEY `supplierID` (`supplierID`),
  KEY `catNo` (`catNo`),
  CONSTRAINT `product_ibfk_2` FOREIGN KEY (`supplierID`) REFERENCES `supplier` (`supplierID`),
  CONSTRAINT `product_ibfk_3` FOREIGN KEY (`catNo`) REFERENCES `musicspec` (`catNo`)
)
