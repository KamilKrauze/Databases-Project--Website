CREATE TABLE MusicSpec (
	catNo varchar(255) NOT NULL,
	title varchar(255) NOT NULL,
	artist varchar(255) NOT NULL,
	label varchar(255) NOT NULL,
	yearRelease date NOT NULL,
	musicFormat varchar(255) NOT NULL,
	size varchar(255) NOT NULL,
	speedRPM int NOT NULL,
	country varchar(255) NOT NULL,
	genre varchar(255) NOT NULL,
	
	PRIMARY KEY (catNo),
	UNIQUE (catNo)
);