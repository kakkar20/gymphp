-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 16, 2022 at 06:06 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

DROP TABLE IF EXISTS `contact_form`;
CREATE TABLE IF NOT EXISTS `contact_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gym_plan`
--

DROP TABLE IF EXISTS `gym_plan`;
CREATE TABLE IF NOT EXISTS `gym_plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plan_name` varchar(200) NOT NULL,
  `price` int(100) NOT NULL,
  `feature_1` varchar(200) NOT NULL,
  `feature_2` varchar(200) NOT NULL,
  `feature_3` varchar(200) NOT NULL,
  `feature_4` varchar(200) NOT NULL,
  `plan_detail` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gym_plan`
--

INSERT INTO `gym_plan` (`id`, `plan_name`, `price`, `feature_1`, `feature_2`, `feature_3`, `feature_4`, `plan_detail`, `created_at`) VALUES
(1, 'Basic ', 700, 'Cardio', 'Weight Lifting', 'No Instructor', 'No Diet Plan', 'monthly subscription', '2022-04-14 13:44:18'),
(2, 'Recommended ', 1000, 'Cardio', 'Weight Lifting', 'No Instructor', 'Diet Plan', 'monthly subscription', '2022-04-14 14:00:52'),
(3, 'Advanced', 1300, 'Cardio', 'Weight Lifting', 'Instructor', 'Diet Plan', 'monthly subscription', '2022-04-16 19:50:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `plan` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `dob`, `username`, `password`, `plan`, `created_at`) VALUES
(1, 'Lalit', 'Kakkar', 'lalitkakkar@gmail.com', '2000-12-15', 'Kakkarlalit', '$2y$10$3IzI6vgf2XT1muMhRzUmx.51/ShulJGsnA1Efd3Q9BqICXmDQTGP6', 'Recommended', '2022-04-06 20:11:38'),
(2, 'Admin', 'Admin', 'admin@gmail.com', '2000-04-04', 'admin', '$2y$10$ogLricV5k3oQTIfKSIN7sOEJozvXjBZ82U1Ti0h2ADqHS/35SQqdK', 'Recommended ', '2022-04-06 20:28:41'),
(3, 'Abhijeet', 'Anand', 'isthisabhijeet@gmail.com', '1998-04-01', 'isthisabhijeet', '$2y$10$WcwLBa77AUA6MjEA5yApL.13MG/Fxu3pvA4iJZLcfBXg.ikZur8Du', 'Recommended', '2022-04-07 13:57:34'),
(4, 'anoop', 'thakur', 'anoop@gmail.com', '1999-12-15', 'anoop', '$2y$10$KZD91V6tqz7PrHaMgJZdj.F5TgWHYN5SuYvHP0iWKgvL81WR0BSHS', 'Basic ', '2022-04-11 16:51:55');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
