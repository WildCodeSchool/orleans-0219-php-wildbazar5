CREATE DATABASE `wildbazar`;
USE `wildbazar`;

DROP TABLE IF EXISTS `wildbazar`.`f_product`;

CREATE TABLE `wildbazar`.`figurines_product` (
        `id` INT NOT NULL AUTO_INCREMENT,
        `title` VARCHAR(255) NOT NULL,
        `short_title` VARCHAR(100) NOT NULL,
        `price` FLOAT NOT NULL,
        `summary` TEXT NOT NULL,
        `picture` VARCHAR(255) NULL,
        `weight` FLOAT NOT NULL,
        `char_size` FLOAT NOT NULL,
        `char_color` VARCHAR(100) NOT NULL,
        `char_reference` VARCHAR(100) NOT NULL,
        PRIMARY KEY (`id`)
                                      );
