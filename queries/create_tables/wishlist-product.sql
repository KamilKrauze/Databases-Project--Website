CREATE TABLE WishlistProduct (
	wishlistItemID int NOT NULL,
	wishlistID int NOT NULL,
	productID int NOT NULL,
	quantity int NOT NULL,
	
	PRIMARY KEY (wishlistItemID),
	UNIQUE (wishlistItemID),
	FOREIGN KEY (wishlistID) REFERENCES Wishlist(wishlistID),
	FOREIGN KEY (productID) REFERENCES Product(productID)
);