CREATE TABLE Supplier (
	supplierID int NOT NULL AUTO_INCREMENT,
	supplierName varchar(255) NOT NULL,
	addr varchar(255) NOT NULL,
	postcode varchar(255) NOT NULL,
	email varchar(255) NOT NULL,
	phoneNo varchar(11) NOT NULL,
	contactTitle varchar(255) NOT NULL DEFAULT "Mr",
	contactFirstName varchar(255) NOT NULL,
	contactLastName varchar(255) NOT NULL,
	
	PRIMARY KEY (supplierID),
	UNIQUE (supplierID),

	CHECK (contactTitle="Mr" OR contactTitle="Mrs" OR contactTitle="Ms" OR contactTitle="Dr")
);