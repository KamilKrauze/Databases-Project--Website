CREATE TABLE Wishlist (
    wishlistID int NOT NULL,
    wishlistName varchar(255) NOT NULL,
    customerNo int NOT NULL,

    PRIMARY KEY (wishlistID),
    UNIQUE(wishlistID),
    FOREIGN KEY (customerNo) REFERENCES Customer(customerNo)
);