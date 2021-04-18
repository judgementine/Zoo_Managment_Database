create database mydb;

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

DROP TABLE IF EXISTS `mydb`.`Shops` ;

DROP TABLE IF EXISTS `mydb`.`Shops` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Shops` (
  `Name` INT NOT NULL,
  `Schedule` VARCHAR(45) NOT NULL,
  `items` VARCHAR(45) NOT NULL,
  `item_name` VARCHAR(45) NOT NULL,
  `item_price` VARCHAR(45) NOT NULL,
  `number_of_sales` INT NOT NULL,
  `ShopType` VARCHAR(45) NOT NULL,
  `Location` VARCHAR(45) NOT NULL,
  `Dname` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Name`),
  INDEX `Department` (`Dname` ASC),
  CONSTRAINT `fk_Department_shop`
    FOREIGN KEY (`Dname`)
    REFERENCES `mydb`.`Department` (`Name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

DROP TABLE IF EXISTS `mydb`.`Employee` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Employee` (
  `ID_Number` INT NOT NULL,
  `Job_Title` VARCHAR(45) NOT NULL,
  `Salary` INT NOT NULL,
  `Phone_Number` INT NOT NULL,
  `cell_phone` INT NOT NULL,
  `home_phone` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `first_name` VARCHAR(45) NOT NULL,
  `last_name` VARCHAR(45) NOT NULL,
  `middle_initial` VARCHAR(45) NOT NULL,
  `animal_animal_ID` INT NOT NULL,
  `Attractions_Site_ID` INT NOT NULL,
  PRIMARY KEY (`ID_Number`),
  INDEX `fk_Employee_animal_idx` (`animal_animal_ID` ASC),
  INDEX `fk_Employee_Attractions1_idx` (`Attractions_Site_ID` ASC),
  CONSTRAINT `fk_Employee_animal`
    FOREIGN KEY (`animal_animal_ID`)
    REFERENCES `mydb`.`animal` (`animal_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Employee_Attractions1`
    FOREIGN KEY (`Attractions_Site_ID`)
    REFERENCES `mydb`.`Attractions` (`Site_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Department`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`Department` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Department` (
  `Name` VARCHAR(45) NOT NULL,
  `Location` VARCHAR(45) NOT NULL,
  `Dnumber` INT NOT NULL,
  `Shops_Name` INT NOT NULL,
  `Employee_ID_Number` INT NOT NULL,
  PRIMARY KEY (`Name`),
  INDEX `fk_Department_Shops1_idx` (`Shops_Name` ASC),
  INDEX `fk_Department_Employee1_idx` (`Employee_ID_Number` ASC),
  CONSTRAINT `fk_Department_Shops1`
    FOREIGN KEY (`Shops_Name`)
    REFERENCES `mydb`.`Shops` (`Name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Department_Employee1`
    FOREIGN KEY (`Employee_ID_Number`)
    REFERENCES `mydb`.`Employee` (`ID_Number`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

DROP TABLE IF EXISTS `mydb`.`Finance` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Finance` (
  `Sales` INT NOT NULL,
  `Expenses` INT NOT NULL,
  `Earnings` INT NOT NULL,
  `Admissions` INT NOT NULL,
  `quarter` INT NOT NULL,
  `year` INT NOT NULL,
  `month` INT NOT NULL,
  `Department_Name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Earnings`),
  INDEX `fk_Finance_Department1_idx` (`Department_Name` ASC),
  CONSTRAINT `fk_Finance_Department1`
    FOREIGN KEY (`Department_Name`)
    REFERENCES `mydb`.`Department` (`Name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

DROP TABLE IF EXISTS `mydb`.`Attractions` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Attractions` (
  `Supervisor_ID` INT NOT NULL,
  `Location` VARCHAR(45) NOT NULL,
  `Site_ID` INT NOT NULL,
  `Price_of_admittance` DECIMAL(2) NOT NULL,
  `Number_of_sales` INT NOT NULL,
  `Schedule` VARCHAR(45) NOT NULL,
  `Department_Name` VARCHAR(45) NOT NULL,
  `Finance_Earnings` INT NOT NULL,
  `AttractionType` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Site_ID`),
  INDEX `fk_Attractions_Department1_idx` (`Department_Name` ASC),
  INDEX `fk_Attractions_Finance1_idx` (`Finance_Earnings` ASC),
  CONSTRAINT `fk_Attractions_Department1`
    FOREIGN KEY (`Department_Name`)
    REFERENCES `mydb`.`Department` (`Name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Attractions_Finance1`
    FOREIGN KEY (`Finance_Earnings`)
    REFERENCES `mydb`.`Finance` (`Earnings`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

DROP TABLE IF EXISTS `mydb`.`animal` ;

CREATE TABLE IF NOT EXISTS `mydb`.`animal` (
  `enclosure_ID` INT NOT NULL,
  `feeding` VARCHAR(45) NOT NULL,
  `Animal_species` VARCHAR(45) NOT NULL,
  `Sub_species` VARCHAR(45) NOT NULL,
  `animal_DOB` DATE NOT NULL,
  `animal_ID` INT NOT NULL,
  `Health` VARCHAR(45) NOT NULL,
  `Breeding` VARCHAR(45) NOT NULL,
  `Spec_instructions` VARCHAR(128) NOT NULL,
  `In_Exhibit` VARCHAR(45) NOT NULL,
  `Attractions_Site_ID` INT NOT NULL,
  PRIMARY KEY (`animal_ID`),
  INDEX `fk_animal_Attractions1_idx` (`Attractions_Site_ID` ASC),
  CONSTRAINT `fk_animal_Attractions1`
    FOREIGN KEY (`Attractions_Site_ID`)
    REFERENCES `mydb`.`Attractions` (`Site_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

DROP TABLE IF EXISTS `mydb`.`Customer` ;

CREATE TABLE IF NOT EXISTS `mydb`.`Customer` (
  `Amount_Paid` INT NOT NULL,
  `Ticket_Number` INT NOT NULL,
  `Items_Bought` INT NOT NULL,
  `Item_price` INT NOT NULL,
  `Item_name` VARCHAR(45) NOT NULL,
  `Amount_bought` INT NOT NULL,
  `Emergency_contact` INT NOT NULL,
  `Finance_Earnings` INT NOT NULL,
  PRIMARY KEY (`Ticket_Number`),
  INDEX `fk_Customer_Finance1_idx` (`Finance_Earnings` ASC),
  CONSTRAINT `fk_Customer_Finance1`
    FOREIGN KEY (`Finance_Earnings`)
    REFERENCES `mydb`.`Finance` (`Earnings`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `mydb`;

DELIMITER $$

USE `mydb`$$
DROP TRIGGER IF EXISTS `mydb`.`Shops_AFTER_INSERT` $$
USE `mydb`$$
CREATE DEFINER = CURRENT_USER TRIGGER `mydb`.`Shops_AFTER_INSERT` AFTER INSERT ON `Shops` FOR EACH ROW
BEGIN
DECLARE threshold INT;
    SET threshold = 50;
	IF (Shops.number_of_sales>threshold) THEN
		SELECT concat('We are running out of ', Shops.item_name, 'Please refill stock on')
        FROM Shops;
        	END IF;

END$$


USE `mydb`$$
DROP TRIGGER IF EXISTS `mydb`.`Shops_AFTER_UPDATE` $$
USE `mydb`$$
CREATE DEFINER = CURRENT_USER TRIGGER `mydb`.`Shops_AFTER_UPDATE` AFTER UPDATE ON `Shops` FOR EACH ROW
BEGIN
DECLARE threshold INT;
    SET threshold = 50;
	IF (Shops.number_of_sales>threshold) THEN
		SELECT concat('We are running out of ', Shops.item_name, 'Please refill stock on')
        FROM Shops;
        	END IF;
	
END$$


USE `mydb`$$
DROP TRIGGER IF EXISTS `mydb`.`Employee_AFTER_INSERT` $$
USE `mydb`$$
$$


USE `mydb`$$
DROP TRIGGER IF EXISTS `mydb`.`animal_AFTER_INSERT` $$
USE `mydb`$$
CREATE DEFINER = CURRENT_USER TRIGGER `mydb`.`animal_AFTER_INSERT` AFTER INSERT ON `animal` FOR EACH ROW
BEGIN
	IF (animal.Animal_species <> animal.In_Exhibit) THEN
		SELECT concat("That's incorrect, applying correctional changes.");
		INSERT INTO animal(In_Exhibit)
        SELECT 	Animal_species
        FROM	animal;
	ELSE 
		SELECT concat("THATS RIGHT");
	END IF;
END$$


USE `mydb`$$
DROP TRIGGER IF EXISTS `mydb`.`animal_AFTER_UPDATE` $$
USE `mydb`$$
CREATE DEFINER = CURRENT_USER TRIGGER `mydb`.`animal_AFTER_UPDATE` AFTER UPDATE ON `animal` FOR EACH ROW
BEGIN
	IF (animal.Animal_species <> animal.In_Exhibit) THEN
		SELECT concat("That's incorrect, applying correctional changes.");
		INSERT INTO animal(In_Exhibit)
        SELECT 	Animal_species
        FROM	animal;
	ELSE 
		SELECT concat("THATS RIGHT");
	END IF;
END$$


USE `mydb`$$
DROP TRIGGER IF EXISTS `mydb`.`Customer_AFTER_INSERT` $$
USE `mydb`$$
CREATE DEFINER = CURRENT_USER TRIGGER `mydb`.`Customer_AFTER_INSERT` AFTER INSERT ON `Customer` FOR EACH ROW
BEGIN
DECLARE threshold INT;
SET threshold = 300;

IF ( COUNT(Customer.Ticket_Number) > 300 ) THEN
	SELECT concat('Out of capacity!')
        FROM Customer;
        	END IF;
END$$


USE `mydb`$$
DROP TRIGGER IF EXISTS `mydb`.`Customer_AFTER_INSERT` $$
USE `mydb`$$
CREATE DEFINER = CURRENT_USER TRIGGER `mydb`.`Customer_AFTER_INSERT` AFTER INSERT ON `Customer` FOR EACH ROW
BEGIN
DECLARE threshold INT;
SET threshold = 300;

IF ( COUNT(Customer.Ticket_Number) > 300 ) THEN
	SELECT concat('Out of capacity!')
        FROM Customer;
        	END IF;
END$$


DELIMITER ;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;







