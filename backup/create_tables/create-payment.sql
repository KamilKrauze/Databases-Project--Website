CREATE TABLE `payment` (
  `paymentID` int(11) NOT NULL AUTO_INCREMENT,
  `cardNo` varchar(19) DEFAULT NULL,
  `securityCode` varchar(3) NOT NULL,
  `expiry` varchar(5) DEFAULT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `customerNo` int(11) DEFAULT NULL,
  PRIMARY KEY (`paymentID`),
  UNIQUE KEY `paymentID` (`paymentID`),
  KEY `customerNo` (`customerNo`),
  CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`customerNo`) REFERENCES `customer` (`customerNo`)
)
