-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 07, 2023 at 08:53 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `make`
--

DROP TABLE IF EXISTS `make`;
CREATE TABLE IF NOT EXISTS `make` (
  `id` int NOT NULL AUTO_INCREMENT,
  `make` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `make`
--

INSERT INTO `make` (`id`, `make`) VALUES
(12, 'bmw'),
(13, 'audi'),
(14, 'mercedes'),
(18, 'nissan'),
(25, 'skoda'),
(26, 'kia'),
(27, 'daewoo');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

DROP TABLE IF EXISTS `model`;
CREATE TABLE IF NOT EXISTS `model` (
  `id` int NOT NULL AUTO_INCREMENT,
  `model` varchar(255) NOT NULL,
  `make_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `make_id` (`make_id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`id`, `model`, `make_id`) VALUES
(15, '316', 12),
(16, '750', 12),
(17, '100', 13),
(18, '200', 13),
(19, 's500', 14),
(20, 'sprinter', 14),
(22, 'a3', 13),
(25, 'pathfinder', 18),
(26, 'silvia', 18),
(39, 'octavia', 25),
(40, 'superb', 25),
(41, 'e280', 14),
(42, 'rio', 26),
(43, 'matiz', 27),
(44, 'fabia', 25);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model`
--
ALTER TABLE `model`
  ADD CONSTRAINT `model_ibfk_1` FOREIGN KEY (`make_id`) REFERENCES `make` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
