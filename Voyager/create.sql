CREATE TABLE `voyager`.`trip` ( `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY , `name` VARCHAR(100) NULL , `description` VARCHAR(350) NULL , `start_date` DATE NULL , `end_date` DATE NULL , `link` VARCHAR(50) NULL ) ENGINE = InnoDB;

CREATE TABLE `voyager`.`place` ( `id` INT NOT NULL AUTO_INCREMENT ,  `name` VARCHAR(100) NULL ,  `location` VARCHAR(50) NULL ,  `start_date` DATE NULL ,  `end_date` DATE NULL ,  `trip_id` INT NULL ,    PRIMARY KEY  (`id`) ,    UNIQUE  (`id`), FOREIGN KEY (trip_id) REFERENCES trip(id) ) ENGINE = InnoDB;

CREATE TABLE `voyager`.`person` ( `id` INT NOT NULL AUTO_INCREMENT ,  `first_name` VARCHAR(100) NULL ,  `last_name` VARCHAR(100) NULL ,  `dob` DATE NULL ,  `email` VARCHAR(150) NULL ,  PRIMARY KEY  (`id`) ,    UNIQUE  (`id`)) ENGINE = InnoDB;

CREATE TABLE `voyager`.`place_person` ( `place_id` INT NOT NULL ,  `person_id` INT NOT NULL, FOREIGN KEY (place_id) REFERENCES place(id), FOREIGN KEY (person_id) REFERENCES person(id)) ENGINE = InnoDB;