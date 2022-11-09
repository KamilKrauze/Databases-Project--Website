-- Active: 1668019281882@@silva.computing.dundee.ac.uk@3306@kamilkrauzedb
CREATE TABLE Customer (
    customerNo int NOT NULL,
    title varchar(5) NOT NULL DEFAULT "Mr",
    firstName varchar(255) NOT NULL,
    lastName varchar(255) NOT NULL,
    addr varchar(255) NOT NULL,
    postCode varchar(10) NOT NULL,
    phoneNo varchar(11) NOT NULL,
    email varchar(255) NOT NULL,
    points int NOT NULL DEFAULT 0,

    PRIMARY KEY (customerNo),
    UNIQUE (customerNo, phoneNo, email),

    CHECK (title="Mr" OR title="Mrs" OR title="Ms" OR title="Dr")
);