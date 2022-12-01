ALTER TABLE stock
	ADD CONSTRAINT fk_prod
    FOREIGN KEY (productID) REFERENCES product (productID);