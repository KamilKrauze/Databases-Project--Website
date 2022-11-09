CREATE TABLE Staff (
    staffNo int NOT NULL,
    position varchar(255) NOT NULL,
    contractType varchar(255) NOT NULL,
    title varchar(5) NOT NULL DEFAULT "Mr",
    firstName varchar(255) NOT NULL,
    lastName varchar(255) NOT NULL,
    salary real NOT NULL,
    addr varchar(255) NOT NULL,
    phoneNo varchar(11) NOT NULL,

    PRIMARY KEY (staffNo),
    UNIQUE (staffNo),
    
    CHECK (title="Mr" OR title="Mrs" OR title="Ms" OR title="Dr")
);