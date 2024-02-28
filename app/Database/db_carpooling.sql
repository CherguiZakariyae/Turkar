-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 28 fév. 2024 à 22:28
-- Version du serveur : 5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_carpooling`
--

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicleID` int(11) DEFAULT NULL,
  `filePath` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vehicleID` (`vehicleID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `locations`
--

DROP TABLE IF EXISTS `locations`;
CREATE TABLE IF NOT EXISTS `locations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `enable` tinyint(1) NOT NULL,
  `dateCreate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `locations`
--

INSERT INTO `locations` (`id`, `name`, `enable`, `dateCreate`) VALUES
(1, 'fes', 1, '2024-02-04 16:57:03'),
(4, 'rabat', 1, '2024-02-25 16:46:35');

-- --------------------------------------------------------

--
-- Structure de la table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) DEFAULT NULL,
  `tripID` int(11) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `paymentStatus` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userID` (`userID`),
  KEY `tripID` (`tripID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `requests`
--

DROP TABLE IF EXISTS `requests`;
CREATE TABLE IF NOT EXISTS `requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tripID` int(11) DEFAULT NULL,
  `passengerID` int(11) DEFAULT NULL,
  `status` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `pets` varchar(20) COLLATE utf8_bin NOT NULL,
  `message` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `enable` tinyint(1) NOT NULL,
  `dateCreate` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tripID` (`tripID`),
  KEY `passengerID` (`passengerID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `requests`
--

INSERT INTO `requests` (`id`, `tripID`, `passengerID`, `status`, `pets`, `message`, `enable`, `dateCreate`) VALUES
(1, 2, 3, 'Waiting', 'Dog', 'aaaa', 1, '2024-02-26 01:20:45'),
(2, 2, 3, 'Waiting', 'Cat', 'abbbb', 1, '2024-02-26 01:23:47');

-- --------------------------------------------------------

--
-- Structure de la table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tripID` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `comment` text COLLATE utf8_bin,
  `reviewerID` int(11) DEFAULT NULL,
  `enable` tinyint(1) NOT NULL,
  `dateCreate` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tripID` (`tripID`),
  KEY `reviewerID` (`reviewerID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `trips`
--

DROP TABLE IF EXISTS `trips`;
CREATE TABLE IF NOT EXISTS `trips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `driverId` int(11) DEFAULT NULL,
  `startLocationId` int(11) DEFAULT NULL,
  `endLocationId` int(11) DEFAULT NULL,
  `departureTime` datetime DEFAULT NULL,
  `availableSeats` int(11) DEFAULT NULL,
  `status` varchar(20) COLLATE utf8_bin NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `enable` tinyint(1) NOT NULL,
  `dateCreate` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `driverID` (`driverId`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `trips`
--

INSERT INTO `trips` (`id`, `driverId`, `startLocationId`, `endLocationId`, `departureTime`, `availableSeats`, `status`, `price`, `enable`, `dateCreate`) VALUES
(1, 3, 4, 1, '2024-02-21 14:00:00', 2, 'Processing', 22.00, 1, '2024-02-12 01:15:39'),
(2, 3, 1, 4, '2024-02-14 01:21:00', 3, 'Arrived', 33.00, 1, '2024-02-12 01:21:41'),
(3, 3, 4, 1, '2025-01-01 01:01:00', 2, 'Started', 100.00, 1, '2024-02-12 19:01:29'),
(4, 3, 4, 1, '2024-02-15 21:00:00', 3, 'Soon', 90.00, 1, '2024-02-12 19:07:14'),
(5, 3, 4, 1, '2024-02-22 12:23:00', 3, 'Soon', 120.00, 1, '2024-02-17 12:23:43');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CIN` varchar(20) COLLATE utf8_bin NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `gender` varchar(10) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `status` varchar(20) COLLATE utf8_bin NOT NULL,
  `phone` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `imagePath` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `enable` tinyint(1) NOT NULL,
  `dateCreate` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `CIN` (`CIN`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `CIN`, `username`, `gender`, `email`, `password`, `status`, `phone`, `imagePath`, `birthday`, `enable`, `dateCreate`) VALUES
(3, 'cd283475', 'Ahmad', 'male', 'ahmad@gmail.com', '$2y$10$0i6gGG1X2gO5rNAWewaJ7.GP93UgmsqfLJFN3rMuy4eH8yCYMj4ky', 'user', NULL, 'me.jpg', NULL, 1, '2024-01-29 00:55:03');

-- --------------------------------------------------------

--
-- Structure de la table `vehicles`
--

DROP TABLE IF EXISTS `vehicles`;
CREATE TABLE IF NOT EXISTS `vehicles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ownerID` int(11) DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `brand` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `model` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `plateNumber` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `picture` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `enable` tinyint(1) NOT NULL,
  `dateCreate` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ownerID` (`ownerID`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `vehicles`
--

INSERT INTO `vehicles` (`id`, `ownerID`, `name`, `brand`, `model`, `year`, `plateNumber`, `picture`, `enable`, `dateCreate`) VALUES
(1, 3, 'clio4', 'renault', '4', 2017, 'AAAA', 'clio.jpg', 1, '2024-02-12 18:40:28'),
(20, 3, 'Stepway', 'renault', 'Dacia', 2019, 'qqq', 'dacia.jpg', 1, '2024-02-25 16:11:14');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
