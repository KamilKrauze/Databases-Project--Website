CREATE TABLE Store (
    storeNo int NOT NULL AUTO_INCREMENT,
    addr varchar(255) NOT NULL,
    postCode varchar(255) NOT NULL,
    phoneNo varchar(11) NOT NULL,
    branchName varchar(255) NOT NULL,

    PRIMARY KEY (storeNo),
    UNIQUE (storeNo)
);
