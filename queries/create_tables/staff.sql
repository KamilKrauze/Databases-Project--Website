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

-- INSERT INTO Staff (staffNo, position, contractType, title, firstName, lastName, salary, addr, phoneNo)
-- VALUES
--     (1,'Warehouse','Permanent','Mr','Jackson','Michael', '£9.90', '4 A94, Balbeggie, Perth PH2 6HA','03847798278'),
--     (2,'Till','Part time','Mr','Jean','Billie','£9.90','1 Strathmore St, Dundee DD3 7NG','07824732853'),
--     (3,'Manager','Part time','Mr','Joel','Billie','£90.90','40 Coupar Angus Rd, Dundee DD2 3HY','01723687287'),
--     (4,'Till','Seasonal','Mx','Cyrus','Billy','£9.90','410 Louisville Ave, Aberdeen AB10 6NR','08493593473'),
--     (5,'Till','Permanent','Mr','Jonas','Nick','£9.90','16 Park Rd Ct, Park Rd, Aberdeen AB24 5NZ','01224733197'),
--     (6,'Warehouse','Permanent','Mr','Allen','Lily','£9.90','48 Provost Watt Dr, Kincorth, Aberdeen AB12 5NA','08374824374'),
--     (7,'Warehouse','Internship','Ms','Presley','Elvis','£0','4 The Terrace, Saint Ives TR26 2BL','02737837377'),
--     (8,'Till','Permanent','Mr','Lennon','John','£9.90','2 Church Rd, London N6 4QT','01237647744'),
--     (9,'Till','Part time','Mrs','Taylor','Toger','£9.90','8 St Sunniva St, Lerwick, Shetland ZE1 0HL','01783278387'),
--     (10,'Till','Part time','Mr','John','Eltion','£9.90','17 Charlotte St, Lerwick, Shetland ZE1 0JL','09374878473'),
--     (11,'Accountant','Part time','Mr','Lewis','Leona','£12.90','2 Burghmuir Dr, Inverurie AB51 4GY','02341329817'),
--     (12,'HR','Seasonal','Miss','Faith','Paloma','£12.90','3 Ury Dl, Inverurie AB51 3XW','08429283893');