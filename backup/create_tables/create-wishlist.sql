CREATE TABLE `wishlist` (
  `wishlistID` int(11) NOT NULL AUTO_INCREMENT,
  `wishlistName` varchar(255) NOT NULL,
  `customerNo` int(11) NOT NULL,
  PRIMARY KEY (`wishlistID`),
  UNIQUE KEY `wishlistID` (`wishlistID`),
  KEY `customerNo` (`customerNo`),
  CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`customerNo`) REFERENCES `customer` (`customerNo`)
);
