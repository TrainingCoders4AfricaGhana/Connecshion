SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


-- -----------------------------------------------------
-- Table `Category`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Category` ;

CREATE  TABLE IF NOT EXISTS `Category` (
  `CategoryId` INT NOT NULL AUTO_INCREMENT ,
  `CategoryName` VARCHAR(45) NULL ,
  `Description` VARCHAR(200) NULL ,
  `Picture` VARCHAR(200) NULL ,
  `Active` SMALLINT NULL DEFAULT 1 ,
  PRIMARY KEY (`CategoryId`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `User`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `User` ;

CREATE  TABLE IF NOT EXISTS `User` (
  `UserId` INT NOT NULL AUTO_INCREMENT ,
  `FirstName` VARCHAR(50) NULL ,
  `LastName` VARCHAR(50) NULL ,
  `Email` VARCHAR(200) NULL ,
  `EmailVerified` SMALLINT NULL DEFAULT 0 ,
  `Zip` VARCHAR(45) NULL ,
  `Username` VARCHAR(50) NULL ,
  `Password` CHAR(200) NULL ,
  `Country` VARCHAR(45) NULL ,
  `City` VARCHAR(45) NULL ,
  `Guid` VARCHAR(200) NULL ,
  `UserType` VARCHAR(45) NULL ,
  PRIMARY KEY (`UserId`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Connection`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Connection` ;

CREATE  TABLE IF NOT EXISTS `Connection` (
  `UserId1` INT NOT NULL ,
  `UserId2` INT NOT NULL ,
  `DateConnection` DATETIME NULL ,
  `TypeConnection` VARCHAR(45) NULL ,
  `IsFavorite` SMALLINT NULL DEFAULT 0 ,
  `UserId` INT NOT NULL ,
  `UserId3` INT NOT NULL ,
  PRIMARY KEY (`UserId1`, `UserId2`, `UserId`, `UserId3`) ,
  INDEX `fk_Connection_User1_idx` (`UserId` ASC) ,
  INDEX `fk_Connection_User2_idx` (`UserId3` ASC) ,
  CONSTRAINT `fk_Connection_User1`
    FOREIGN KEY (`UserId` )
    REFERENCES `User` (`UserId` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Connection_User2`
    FOREIGN KEY (`UserId3` )
    REFERENCES `User` (`UserId` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Pub`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Pub` ;

CREATE  TABLE IF NOT EXISTS `Pub` (
  `PubId` INT NOT NULL AUTO_INCREMENT ,
  `TypePub` VARCHAR(45) NULL ,
  `Url` VARCHAR(45) NOT NULL ,
  `DateStart` DATETIME NULL ,
  `DateEnd` DATETIME NULL ,
  `UserId` INT NOT NULL ,
  PRIMARY KEY (`PubId`) ,
  INDEX `fk_Pub_User1_idx` (`UserId` ASC) ,
  CONSTRAINT `fk_Pub_User1`
    FOREIGN KEY (`UserId` )
    REFERENCES `User` (`UserId` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Genre`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Genre` ;

CREATE  TABLE IF NOT EXISTS `Genre` (
  `GenreId` INT NOT NULL AUTO_INCREMENT ,
  `Description` VARCHAR(200) NOT NULL ,
  `Picture` VARCHAR(45) NULL ,
  `Active` SMALLINT NULL DEFAULT 1 ,
  PRIMARY KEY (`GenreId`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ProductGroup`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ProductGroup` ;

CREATE  TABLE IF NOT EXISTS `ProductGroup` (
  `ProductGroupId` INT NOT NULL AUTO_INCREMENT ,
  `Description` VARCHAR(200) NULL ,
  `Active` SMALLINT NULL DEFAULT 1 ,
  PRIMARY KEY (`ProductGroupId`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Product`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Product` ;

CREATE  TABLE IF NOT EXISTS `Product` (
  `ProductId` INT NOT NULL AUTO_INCREMENT ,
  `ProductName` VARCHAR(45) NULL ,
  `Active` SMALLINT NULL DEFAULT 1 ,
  `GenreId` INT NOT NULL ,
  `ProductGroupId` INT NOT NULL ,
  `CategoryId` INT NOT NULL ,
  `UserId` INT NOT NULL ,
  PRIMARY KEY (`ProductId`) ,
  INDEX `fk_Product_Genre1_idx` (`GenreId` ASC) ,
  INDEX `fk_Product_ProductGroup1_idx` (`ProductGroupId` ASC) ,
  INDEX `fk_Product_Category1_idx` (`CategoryId` ASC) ,
  INDEX `fk_Product_User1_idx` (`UserId` ASC) ,
  CONSTRAINT `fk_Product_Genre1`
    FOREIGN KEY (`GenreId` )
    REFERENCES `Genre` (`GenreId` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Product_ProductGroup1`
    FOREIGN KEY (`ProductGroupId` )
    REFERENCES `ProductGroup` (`ProductGroupId` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Product_Category1`
    FOREIGN KEY (`CategoryId` )
    REFERENCES `Category` (`CategoryId` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Product_User1`
    FOREIGN KEY (`UserId` )
    REFERENCES `User` (`UserId` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Picture`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Picture` ;

CREATE  TABLE IF NOT EXISTS `Picture` (
  `PictureId` INT NOT NULL AUTO_INCREMENT ,
  `Url` VARCHAR(45) NULL ,
  `Deleted` SMALLINT NULL ,
  `Alt` VARCHAR(45) NULL ,
  `ProductId` INT NOT NULL ,
  PRIMARY KEY (`PictureId`) ,
  INDEX `fk_Picture_Product1_idx` (`ProductId` ASC) ,
  CONSTRAINT `fk_Picture_Product1`
    FOREIGN KEY (`ProductId` )
    REFERENCES `Product` (`ProductId` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Event`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Event` ;

CREATE  TABLE IF NOT EXISTS `Event` (
  `EventId` INT NOT NULL AUTO_INCREMENT ,
  `DateEvent` DATETIME NULL ,
  `Description` TEXT NULL ,
  `Picture` VARCHAR(200) NULL ,
  `UserId` INT NOT NULL ,
  `Country` VARCHAR(45) NULL ,
  `City` VARCHAR(45) NULL ,
  PRIMARY KEY (`EventId`) ,
  INDEX `fk_Event_User1_idx` (`UserId` ASC) ,
  CONSTRAINT `fk_Event_User1`
    FOREIGN KEY (`UserId` )
    REFERENCES `User` (`UserId` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Video`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Video` ;

CREATE  TABLE IF NOT EXISTS `Video` (
  `VideoId` INT NOT NULL AUTO_INCREMENT ,
  `Url` VARCHAR(200) NULL ,
  `Description` VARCHAR(200) NULL ,
  `Active` SMALLINT NULL DEFAULT 1 ,
  `UserId` INT NOT NULL ,
  `EventId` INT NOT NULL ,
  PRIMARY KEY (`VideoId`) ,
  INDEX `fk_Video_User1_idx` (`UserId` ASC) ,
  INDEX `fk_Video_Event1_idx` (`EventId` ASC) ,
  CONSTRAINT `fk_Video_User1`
    FOREIGN KEY (`UserId` )
    REFERENCES `User` (`UserId` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Video_Event1`
    FOREIGN KEY (`EventId` )
    REFERENCES `Event` (`EventId` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Rate`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Rate` ;

CREATE  TABLE IF NOT EXISTS `Rate` (
  `RateId` INT NOT NULL AUTO_INCREMENT ,
  `Rate` SMALLINT NULL ,
  `DateRating` DATETIME NULL ,
  `ProductId` INT NOT NULL ,
  `RaterId` INT NOT NULL ,
  PRIMARY KEY (`RateId`) ,
  INDEX `fk_Rate_Product1_idx` (`ProductId` ASC) ,
  INDEX `fk_Rate_User1_idx` (`RaterId` ASC) ,
  CONSTRAINT `fk_Rate_Product1`
    FOREIGN KEY (`ProductId` )
    REFERENCES `Product` (`ProductId` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Rate_User1`
    FOREIGN KEY (`RaterId` )
    REFERENCES `User` (`UserId` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Endorse`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Endorse` ;

CREATE  TABLE IF NOT EXISTS `Endorse` (
  `EndorseId` INT NOT NULL AUTO_INCREMENT ,
  `DateEndorsment` VARCHAR(45) NULL ,
  `EndorserId` INT NOT NULL ,
  `EndorsedId` INT NOT NULL ,
  PRIMARY KEY (`EndorseId`) ,
  INDEX `fk_Endorse_User1_idx` (`EndorserId` ASC) ,
  INDEX `fk_Endorse_User2_idx` (`EndorsedId` ASC) ,
  CONSTRAINT `fk_Endorse_User1`
    FOREIGN KEY (`EndorserId` )
    REFERENCES `User` (`UserId` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Endorse_User2`
    FOREIGN KEY (`EndorsedId` )
    REFERENCES `User` (`UserId` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Inbox`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Inbox` ;

CREATE  TABLE IF NOT EXISTS `Inbox` (
  `InboxId` INT NOT NULL AUTO_INCREMENT ,
  `Message` TEXT NULL ,
  `Read` SMALLINT NULL DEFAULT 1 ,
  `DateSent` DATETIME NULL ,
  `DateRead` DATETIME NULL ,
  `ConversationId` INT NULL ,
  `SenderId` INT NOT NULL ,
  `ReceiverId` INT NOT NULL ,
  PRIMARY KEY (`InboxId`) ,
  INDEX `fk_Inbox_User1_idx` (`SenderId` ASC) ,
  INDEX `fk_Inbox_User2_idx` (`ReceiverId` ASC) ,
  CONSTRAINT `fk_Inbox_User1`
    FOREIGN KEY (`SenderId` )
    REFERENCES `User` (`UserId` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Inbox_User2`
    FOREIGN KEY (`ReceiverId` )
    REFERENCES `User` (`UserId` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `AlertType`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `AlertType` ;

CREATE  TABLE IF NOT EXISTS `AlertType` (
  `AlertTypeId` INT NOT NULL AUTO_INCREMENT ,
  `Name` VARCHAR(50) NULL ,
  PRIMARY KEY (`AlertTypeId`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Alert`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Alert` ;

CREATE  TABLE IF NOT EXISTS `Alert` (
  `AlertId` INT NOT NULL AUTO_INCREMENT ,
  `Message` TEXT NULL ,
  `IsHidden` SMALLINT NULL ,
  `DateNotification` DATETIME NULL ,
  `UserId` INT NULL ,
  `AlertTypeId` INT NOT NULL ,
  PRIMARY KEY (`AlertId`) ,
  INDEX `fk_Alert_AlertType_idx` (`AlertTypeId` ASC) ,
  CONSTRAINT `fk_Alert_AlertType`
    FOREIGN KEY (`AlertTypeId` )
    REFERENCES `AlertType` (`AlertTypeId` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Participate`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Participate` ;

CREATE  TABLE IF NOT EXISTS `Participate` (
  `EventId` INT NOT NULL ,
  `UserId` INT NOT NULL ,
  `DateResponse` DATETIME NULL ,
  `Response` VARCHAR(45) NULL ,
  PRIMARY KEY (`EventId`, `UserId`) ,
  INDEX `fk_Participate_User1_idx` (`UserId` ASC) ,
  CONSTRAINT `fk_Participate_Event1`
    FOREIGN KEY (`EventId` )
    REFERENCES `Event` (`EventId` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Participate_User1`
    FOREIGN KEY (`UserId` )
    REFERENCES `User` (`UserId` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `EventInvitation`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `EventInvitation` ;

CREATE  TABLE IF NOT EXISTS `EventInvitation` (
  `InvitationId` INT NOT NULL AUTO_INCREMENT ,
  `UserId` INT NULL ,
  `InviterId` INT NULL ,
  `DateInvitation` DATETIME NULL ,
  `Responded` SMALLINT NULL DEFAULT 0 ,
  `Guid` VARCHAR(45) NULL ,
  `EventId` INT NOT NULL ,
  PRIMARY KEY (`InvitationId`) ,
  INDEX `fk_EventInvitation_Event1_idx` (`EventId` ASC) ,
  CONSTRAINT `fk_EventInvitation_Event1`
    FOREIGN KEY (`EventId` )
    REFERENCES `Event` (`EventId` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `FriendInvitations`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `FriendInvitations` ;

CREATE  TABLE IF NOT EXISTS `FriendInvitations` (
  `InvitationId` INT NOT NULL AUTO_INCREMENT ,
  `AccountId` INT NULL ,
  `Email` VARCHAR(200) NULL ,
  `GUID` VARCHAR(200) NULL ,
  `CreatedDate` DATETIME NULL ,
  `BecameAccountId` SMALLINT NULL ,
  PRIMARY KEY (`InvitationId`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PrivacyFlagType`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `PrivacyFlagType` ;

CREATE  TABLE IF NOT EXISTS `PrivacyFlagType` (
  `PrivacyFlagTypeId` INT NOT NULL AUTO_INCREMENT ,
  `FieldName` VARCHAR(100) NULL ,
  `SortOrder` SMALLINT NULL ,
  PRIMARY KEY (`PrivacyFlagTypeId`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `PrivacyFlag`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `PrivacyFlag` ;

CREATE  TABLE IF NOT EXISTS `PrivacyFlag` (
  `PrivacyFlagId` INT NOT NULL AUTO_INCREMENT ,
  `VisibilityLevelId` INT NULL ,
  `CreatedDate` DATETIME NULL ,
  `PrivacyFlagTypeId` INT NOT NULL ,
  `UserId` INT NOT NULL ,
  PRIMARY KEY (`PrivacyFlagId`) ,
  INDEX `fk_PrivacyFlag_PrivacyFlagType1_idx` (`PrivacyFlagTypeId` ASC) ,
  INDEX `fk_PrivacyFlag_User1_idx` (`UserId` ASC) ,
  CONSTRAINT `fk_PrivacyFlag_PrivacyFlagType1`
    FOREIGN KEY (`PrivacyFlagTypeId` )
    REFERENCES `PrivacyFlagType` (`PrivacyFlagTypeId` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PrivacyFlag_User1`
    FOREIGN KEY (`UserId` )
    REFERENCES `User` (`UserId` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Role`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Role` ;

CREATE  TABLE IF NOT EXISTS `Role` (
  `RoleId` INT NOT NULL AUTO_INCREMENT ,
  `RoleName` VARCHAR(45) NOT NULL ,
  `Enabled` SMALLINT NOT NULL DEFAULT 1 ,
  PRIMARY KEY (`RoleId`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `UserRole`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `UserRole` ;

CREATE  TABLE IF NOT EXISTS `UserRole` (
  `DateUserRole` DATETIME NULL ,
  `UserId` INT NOT NULL ,
  `RoleId` INT NOT NULL ,
  PRIMARY KEY (`UserId`, `RoleId`) ,
  INDEX `fk_UserRole_Role1_idx` (`RoleId` ASC) ,
  CONSTRAINT `fk_UserRole_User1`
    FOREIGN KEY (`UserId` )
    REFERENCES `User` (`UserId` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_UserRole_Role1`
    FOREIGN KEY (`RoleId` )
    REFERENCES `Role` (`RoleId` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
