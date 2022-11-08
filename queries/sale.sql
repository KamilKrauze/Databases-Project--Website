CREATE TABLE Sale (
    saleID int NOT NULL,
    storeNo int NOT NULL,
    staffNo int,
    customerNo int,
    totalCost real NOT NULL,
    dateAndTime DATETIME NOT NULL,

    PRIMARY KEY (saleID),
    UNIQUE (saleID),
    FOREIGN KEY (storeNo) REFERENCES Store(storeNo),
    FOREIGN KEY (staffNo) REFERENCES Staff(staffNo),
    FOREIGN KEY (customerNo) REFERENCES Customer(customerNo)
);