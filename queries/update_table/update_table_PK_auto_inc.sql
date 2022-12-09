SET FOREIGN_KEY_CHECKS = 0;

ALTER TABLE wishlistproduct
	MODIFY wishlistItemID int(11) NOT NULL auto_increment;
    
SET FOREIGN_KEY_CHECKS = 1;