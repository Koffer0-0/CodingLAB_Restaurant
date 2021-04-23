-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 18, 2021 at 11:25 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `mail` varchar(128) NOT NULL,
  `number` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `Name`, `mail`, `number`, `message`) VALUES
(7, 'Tima', '201708@astana', '87074467658', ''),
(8, 'Altynbek', '0000@mail.ru', '878757575', 'I  want lagman');

-- --------------------------------------------------------

--
-- Table structure for table `recieps`
--

CREATE TABLE `recieps` (
  `id` int(100) NOT NULL,
  `Title` varchar(200) DEFAULT NULL,
  `Description` text,
  `Data` date NOT NULL,
  `Picture` varchar(255) DEFAULT NULL,
  `Price` int(255) DEFAULT NULL,
  `Ingredients` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recieps`
--

INSERT INTO `recieps` (`id`, `Title`, `Description`, `Data`, `Picture`, `Price`, `Ingredients`) VALUES
(83, 'plov po tashkentsky', 'САМЫЙ ВКУСНЫЙ СОЧНЫ МОЩНЫ ПЛОВ ПО ТАШКЕНТСКИЙ БРАТ РОДНОЙ ГОТОВИЛ ОТ ДУШИ ВКУСНО', '2021-03-18', 'plov.jpg', 2000, 'pilaf'),
(85, 'КОФе лате', 'мммм бодрит лучше чем дедлайн', '2021-03-18', 'coffe.jpg', 400, 'drink'),
(86, 'ААААА Чай берши', 'Ташкенский мультинациональный мультипланетный чефир', '2021-03-23', 'чфи.jpeg', 200, 'drink'),
(87, 'Лагман-суиру', 'ВАЙ ЛАГМАН ПАЛЬЦЫ ОБЛИЖЕШ СОСЕДА ОБЛИЖЕЖ ЛУЧШЕ НЕ НАЙДЕШЬ ', '2021-03-26', 'лагман суйту.jpg', 2600, 'lagman'),
(88, ' Beer', 'P:ivo is good bad bad ', '2021-03-19', 'Yfgbnjr.jpg', 700, 'drink');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `Name` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `Password` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `email`, `Password`) VALUES
(5, 'Tima', 'tima@astanait.edu.kz', '123'),
(7, 'Sanzhar', 'sanzhar@maghan.ru', '123'),
(8, 'Magzhan', '123@gmail.com', '123'),
(9, 'Altynbek', '122@mail.ru', '123'),
(10, 'Renata', 'renata@mail.ru', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recieps`
--
ALTER TABLE `recieps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `recieps`
--
ALTER TABLE `recieps`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
