CREATE TABLE Stock (
	stockID int NOT NULL,
	storeNo int NOT NULL,
	quantity int NOT NULL,
	
	PRIMARY KEY (stockID),
	UNIQUE (stockID),
	FOREIGN KEY (storeNo) REFERENCES Store(storeNo)
	);