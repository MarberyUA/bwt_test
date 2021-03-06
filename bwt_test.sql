SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "UTC";


CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NOT NULL,
  `surname` VARCHAR(50) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `birthday` date NOT NULL,
  `gender` VARCHAR(15) NOT NULL,
  `password` VARCHAR(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `users_callbacks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` VARCHAR(50) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `message` TEXT(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;