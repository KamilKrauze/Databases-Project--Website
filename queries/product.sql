CREATE TABLE Product (
	productID int NOT NULL,
	stockID int NOT NULL,
	productName varchar(255) NOT NULL,
	productType varchar(255) NOT NULL,
	supplierCost real NOT NULL,
	retailPrice real NOT NULL,
	supplierID int NOT NULL,
	catNo varchar(255),
	
	PRIMARY KEY (productID),
	UNIQUE (productID),
	FOREIGN KEY (stockID) REFERENCES stock(stockID),
	FOREIGN KEY (supplierID) REFERENCES supplier(supplierID),
	FOREIGN KEY (catNo) REFERENCES MusicSpec(catNo)
);