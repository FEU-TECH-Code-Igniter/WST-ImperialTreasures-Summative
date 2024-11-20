-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2024 at 01:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `summative`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_promotional`
--

CREATE TABLE `tb_promotional` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_promotional`
--

INSERT INTO `tb_promotional` (`id`, `title`, `content`) VALUES
(1, 'Meow', 'A meow or miaow is a cat vocalization. Meows may have diverse tones in terms of their sound, and what is heard can vary from being chattered to calls, murmurs, and whispers.'),
(2, 'Woof', 'the barking sound made by a dog or a bark'),
(3, 'Imperial Treasury', 'A governmental agency for the Galactic Empire. They were headquartered on the city-spanning world of Coruscant.'),
(4, 'Heresy', 'An opinion, act or promulgation of an ideological doctrine that contradicts the beliefs, theology and the commandments of the Imperial Cult of the God-Emperor of Mankind and the laws of the Imperium of Man.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_promotional`
--
ALTER TABLE `tb_promotional`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_promotional`
--
ALTER TABLE `tb_promotional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
