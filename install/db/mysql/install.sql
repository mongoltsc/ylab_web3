CREATE TABLE IF NOT EXISTS `ylab_fruit` (
	`ID` INT NOT NULL AUTO_INCREMENT,
	`TITLE` VARCHAR(255) DEFAULT NULL,
	PRIMARY KEY (`ID`)
);
INSERT INTO ylab_fruit(ID, TITLE) VALUES("1", "apple");
INSERT INTO ylab_fruit(ID, TITLE) VALUES("2", "apricot");
INSERT INTO ylab_fruit(ID, TITLE) VALUES("3", "orange");
INSERT INTO ylab_fruit(ID, TITLE) VALUES("4", "pineapple");
INSERT INTO ylab_fruit(ID, TITLE) VALUES("5", "watermelon");