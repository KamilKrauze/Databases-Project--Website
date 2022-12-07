CREATE TABLE `musicspec` (
  `catNo` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `yearRelease` varchar(4) DEFAULT NULL,
  `musicFormat` varchar(255) NOT NULL,
  `size` varchar(255) DEFAULT NULL,
  `speedRPM` int(11) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  PRIMARY KEY (`catNo`),
  UNIQUE KEY `catNo` (`catNo`)
)
