CREATE TABLE `customer` (
  `customerNo` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(6) DEFAULT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `postCode` varchar(10) NOT NULL,
  `phoneNo` varchar(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `points` int(11) NOT NULL DEFAULT '0',
  `username` varchar(30) DEFAULT NULL,
  `pass` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`customerNo`),
  UNIQUE KEY `customerNo` (`customerNo`)
)
