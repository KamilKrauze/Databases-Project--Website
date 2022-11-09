-- Active: 1668019281882@@silva.computing.dundee.ac.uk@3306@kamilkrauzedb
CREATE TABLE payment (
    paymentID int NOT NULL,
    cardNo varchar(16) NOT NULL,
    securityCode varchar(3) NOT NULL,
    expiry date NOT NULL,
    customerNo int NOT NULL,

    PRIMARY KEY (paymentID),
    UNIQUE (paymentID),
    FOREIGN KEY (customerNo) REFERENCES customer(customerNo)
);