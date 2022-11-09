CREATE TABLE Store (
    storeNo int NOT NULL AUTO_INCREMENT=1,
    addr varchar(255) NOT NULL,
    postCode varchar(255) NOT NULL,
    phoneNo varchar(11) NOT NULL,
    branchName varchar(255) NOT NULL,

    PRIMARY KEY (storeNo),
    UNIQUE (storeNo)
);

-- INSERT INTO Store (storeNo, addr, postCode, phoneNo, branchName)
-- VALUES
-- 	(1,'47 Johnston Gardens West, Peterculter, Aberdeen', 'AB14 0LB', '01224 733926', 'The Vinyl Countdown'),
-- 	(2,'319 Perth Road', 'DD2 1NN', '07348738278', 'Tunesday'),
-- 	(3,'11 Market Pl, Saint Ives', 'TR26 1RZ', '07478538798', 'Discworld'),
-- 	(4,'274 Perth Road', 'DD2 1AE', '09845798479', 'All Night Song'),
-- 	(5,'6 Birch Way, Osprey Village, Inverurie', 'AB51 6AP', '02479858984', 'Vinyl Fantasy'),
-- 	(6,'7 Harrison Square, Esplanade, Lerwick, Shetland', 'ZE1 0LL', '01749872398', 'Cassette-me-not');
