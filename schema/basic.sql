-- Syed Abidur Rahman on 11/03/2012 --
SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


CREATE TABLE IF NOT EXISTS `admin_users` (
  `admin_user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `password` varchar(45) NOT NULL,
  `level` varchar(5) NOT NULL,
  PRIMARY KEY (`admin_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `departments` (
  `department_id` int(11) NOT NULL,
  `code` varchar(5) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `head` varchar(255) DEFAULT NULL,
  `faculty_id` tinyint(11) DEFAULT NULL,
  PRIMARY KEY (`department_id`),
  KEY `faculty_id` (`faculty_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `department_programs` (
  `department_program_id` int(11) NOT NULL AUTO_INCREMENT,
  `program_name` text,
  `faculty_id` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`department_program_id`),
  KEY `faculty_id` (`faculty_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_title` text NOT NULL,
  `event_details` text,
  `event_date` text,
  `event_type` int(11) DEFAULT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `faculties` (
  `faculty_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`faculty_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `files` (
  `file_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `type` text,
  `page_id` int(11) NOT NULL,
  PRIMARY KEY (`file_id`),
  KEY `page_id` (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `images` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8,
  `caption` text CHARACTER SET utf8,
  `type` text CHARACTER SET utf8,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `lists` (
  `list_id` int(11) NOT NULL AUTO_INCREMENT,
  `item` text,
  `title` text,
  `item_id` int(11) NOT NULL,
  PRIMARY KEY (`list_id`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8 NOT NULL,
  `detail` text CHARACTER SET utf8,
  `date` text CHARACTER SET utf8,
  `time` text CHARACTER SET utf8,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `pages` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `meta` text NOT NULL,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `page_items` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `detail` text,
  `page_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_id`),
  KEY `page_id` (`page_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


ALTER TABLE `departments` ADD CONSTRAINT `departments_ibfk_1` FOREIGN KEY (`faculty_id`)
    REFERENCES `faculties` (`faculty_id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `department_programs` ADD CONSTRAINT `department_programs_ibfk_1` FOREIGN KEY (`faculty_id`)
    REFERENCES `faculties` (`faculty_id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `lists` ADD CONSTRAINT `lists_ibfk_1` FOREIGN KEY (`item_id`)
    REFERENCES `page_items` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `page_items` ADD CONSTRAINT `page_items_ibfk_1` FOREIGN KEY (`page_id`)
    REFERENCES `pages` (`page_id`) ON DELETE CASCADE ON UPDATE CASCADE;


SET FOREIGN_KEY_CHECKS=1;