CREATE TABLE saleStock (
    saleStockID int NOT NULL,
    stockID int NOT NULL,
    saleID int NOT NULL,
    quantity int NOT NULL,

    PRIMARY KEY (saleStockID),
    UNIQUE (saleStockID),
    FOREIGN KEY (stockID) REFERENCES Stock(stockID),
    FOREIGN KEY (saleID) REFERENCES Sale(saleID)
);