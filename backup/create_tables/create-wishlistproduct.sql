CREATE TABLE `wishlistproduct` (
  `wishlistItemID` int(11) NOT NULL AUTO_INCREMENT,
  `wishlistID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`wishlistItemID`),
  UNIQUE KEY `wishlistItemID` (`wishlistItemID`),
  KEY `wishlistID` (`wishlistID`),
  KEY `productID` (`productID`),
  CONSTRAINT `wishlistproduct_ibfk_1` FOREIGN KEY (`wishlistID`) REFERENCES `wishlist` (`wishlistID`),
  CONSTRAINT `wishlistproduct_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`)
);
