CREATE TABLE `supplier` (
  `supplierID` int(11) NOT NULL,
  `supplierName` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNo` varchar(11) NOT NULL,
  `contactTitle` varchar(255) NOT NULL,
  `contactFirstName` varchar(255) NOT NULL,
  `contactLastName` varchar(255) NOT NULL,
  PRIMARY KEY (`supplierID`),
  UNIQUE KEY `supplierID` (`supplierID`)
);
