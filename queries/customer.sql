CREATE TABLE Customer (
    customerNo int NOT NULL,
    title varchar(5) NOT NULL,
    firstName varchar(255) NOT NULL,
    lastName varchar(255) NOT NULL,
    addr varchar(255) NOT NULL,
    postCode varchar(10) NOT NULL,
    phoneNo varchar(11) NOT NULL,
    email varchar(255) NOT NULL,
    points int NOT NULL DEFAULT 0,

    PRIMARY KEY (customerNo),
    UNIQUE (customerNo)
);

INSERT INTO Customer (customerNo, title, firstName, lastName, addr, postCode, phoneNo, email, points)
VALUES
    (1,'Ms','Jane','Doe','4 Old Halkerton Rd','DD8 1GZ','08493892563','Jane.doe@gmail.com',11),
    (38974987,'Mr','Man','Man','24 Sibell Rd, Golspie','KW10 6RU','03784783737','Man.man@hotmail.com',0),
    (3,'Mr','Billy','Joel','Alastair Munro Court, Alness','IV17 0AA','02839874893','Billy.joel@dundee.ac.uk',0),
    (2,'Mr','Guy','Guy','Keith St, Hamilton','ML3 7BL','02783783723','Guy.guy@yahoo.com',13),
    (398438938,'Mrs','Ellen','Hi','13 Panmure Terrace, Broughty Ferry, Dundee','DD5 2QL','04783778837','Ellen.hi@outlook.com',0),
    (4,'Mr','Alan','Smith','1 E Bay, Mallaig','PH41 4QG','03824738778','Alan.smith@gmail.com',67),
    (38948,'Sir','Duke','Mister','Scottish Natural Heritage, 32 Francis St, Stornoway','HS1 2ND','07487873833','Duke.mister.gmail.com',0),
    (5,'Mr','Smithy','Smith','1 Lovers Walk, Dumfries','DG1 1LR','09237484733','Smithy.smith@gmail.com',99),
    (6,'Miss','River','Road','Candleriggs, Alloa','FK10 1EA','08398749837','River.road@hotmail.com',100),
    (7,'Dr','Roe','Ray','Camaghael Rd, Caol, Fort William','PH33 7NF','03728473844','Roe.ray@gmsil.com',23);