-- phpMyAdmin SQL Dump
-- version 4.8.5jeuxvideo
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 13, 2019 at 01:31 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jeuxvideo`
--

-- --------------------------------------------------------

--
-- Table structure for table `jeuxvideo`
--

CREATE TABLE `jeuxvideo` (
  `Id` int(11) NOT NULL,
  `Titre` varchar(255) NOT NULL,
  `Prix (Euros)` float NOT NULL,
  `Date de Sortie` date NOT NULL,
  `Genre` varchar(255) NOT NULL,
  `Origine` varchar(255) NOT NULL,
  `Mode` varchar(255) NOT NULL,
  `Connexion` varchar(255) NOT NULL,
  `Plateforme` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `jeuxvideo`
--

INSERT INTO `jeuxvideo` (`Id`, `Titre`, `Prix (Euros)`, `Date de Sortie`, `Genre`, `Origine`, `Mode`, `Connexion`, `Plateforme`) VALUES
(40, 'Dragon Ball FighterZ', 49.99, '2019-02-08', 'RPG', 'USA', 'Solo', 'Online', 'XBOX,PS4'),
(41, 'Far Cry 5', 49.99, '2018-02-12', 'RPG', 'Japon', 'Solo', 'Online', 'XBOX,PC'),
(43, 'FIFA 19', 39.99, '2019-09-12', 'RPG', 'UK', 'Multi', 'Online', 'PS4,PC'),
(49, 'Monster Hunter World', 69.99, '2019-06-12', 'RPG', 'Japon', 'Solo', 'Online', 'XBOX,PS4'),
(50, 'China Fight', 49.99, '2017-06-12', 'RPG', 'Japon', 'Solo', 'azaz', 'PS4,PC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jeuxvideo`
--
ALTER TABLE `jeuxvideo`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jeuxvideo`
--
ALTER TABLE `jeuxvideo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
