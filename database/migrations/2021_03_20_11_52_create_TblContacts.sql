CREATE TABLE `TblContacts`
(
    `Contacts_ID` INT NOT NULL AUTO_INCREMENT ,
    `Contacts_Name` VARCHAR(50) NOT NULL ,
    `Contacts_Email` VARCHAR(50) NOT NULL ,
    PRIMARY KEY (`Contacts_ID`)
) ENGINE = InnoDB;

INSERT INTO `TblContacts` (`Contacts_ID`, `Contacts_Name`, `Contacts_Email`) VALUES ('1', 'Jeff', 'jeff@codebyjeff.com');