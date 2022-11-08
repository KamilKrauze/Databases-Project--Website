-- Active: 1667902226832@@127.0.0.1@3306@alternatetake
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