-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 29, 2021 at 09:25 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stock`
--
CREATE DATABASE IF NOT EXISTS `sql6422177` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sql6422177`;

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE IF NOT EXISTS `stocks` (
  `sl_no` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `current` float NOT NULL,
  `market` float NOT NULL,
  `stock` float NOT NULL,
  `dividend` float NOT NULL,
  `roce` float NOT NULL,
  `roe` float NOT NULL,
  `debt_to_equity` float NOT NULL,
  `eps` float NOT NULL,
  `reserves` float NOT NULL,
  `debt` float NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`sl_no`, `name`, `current`, `market`, `stock`, `dividend`, `roce`, `roe`, `debt_to_equity`, `eps`, `reserves`, `debt`) VALUES
(1, 'Bhansali Engg.', 158.25, 2625.46, 7.86, 0.63, 86.18, 20.21, 0, 20.13, 664.76, 0),
(2, 'Coal India', 147.45, 90869.4, 7.13, 8.48, 73.08, 74.9, 0.13, 20.69, 30920.8, 4808.98),
(3, 'IOL Chemicals', 617.15, 3623.01, 7.88, 0.65, 68.87, 69.54, 0.02, 78.78, 1036.08, 24.55),
(4, 'Dolat Investment', 72.5, 1276, 8.7, 0.21, 59.64, 38.37, 0.31, 8.34, 346.11, 114.32),
(5, 'NDTV', 79.8, 514.51, 7.26, 0, 52.92, 27.17, 0.45, 11, 125.88, 68.27),
(6, 'Balmer Law. Inv.', 480.25, 1066.16, 12.57, 7.81, 49.81, 48.39, 0, 38.21, 153.22, 0),
(7, 'Ebixcash World', 681.25, 758.09, 14.63, 0, 43.76, -1.04, 0.2, 46.58, 156.64, 32.81),
(8, 'Mangalam Organic', 706.5, 605.08, 8.79, 0.14, 43.65, 78.9, 0, 75.66, 180.64, 0.47),
(9, 'INEOS Styrolut.', 1321.75, 2324.96, 8.3, 0, 43.41, 4.27, 0.09, 159.35, 871.19, 78.25),
(10, 'Expleo Solutions', 620.45, 636.12, 12.61, 0, 39.24, 27.41, 0, 49.2, 191.61, 0),
(11, 'Sh. Jagdamba Pol', 637.65, 558.45, 13.65, 0.04, 38.3, 34.66, 0.28, 46.71, 131.9, 37.21),
(12, 'Godawari Power', 955.9, 3368.23, 5.28, 0.52, 37.04, 13.65, 0.42, 181.17, 2001.48, 852.45),
(13, 'Cigniti Tech.', 422.9, 1184.97, 11.25, 0.59, 36.36, 58.18, 0.12, 37.6, 344.33, 45.67),
(14, 'Kirl. Ferrous', 245.2, 3392.94, 11.23, 0.82, 34.58, 16.36, 0.21, 21.84, 930.2, 213.83),
(15, 'Rites', 246.7, 5928.25, 13.67, 6.49, 34.27, 20.25, 0.01, 17.51, 2451.95, 33.48),
(16, 'Guj.St.Petronet', 272.05, 15349.4, 9.76, 0.74, 34.25, 35.23, 0.37, 27.88, 4926.22, 2037.96),
(17, 'Ester Industries', 143.5, 1196.7, 8.42, 1.74, 33.27, 27.52, 0.33, 17.04, 474.91, 172.54),
(18, 'Anjani Portland', 305.1, 771.47, 9.08, 1.64, 32.69, 15.65, 0.01, 33.61, 321.02, 2.8),
(19, 'Venky''s (India)', 2298.75, 3238.33, 12.1, 0, 32.05, -3.23, 0.16, 190.06, 1090.33, 177.82),
(20, 'Heritage Foods', 341.05, 1582.4, 10.61, 0.73, 31.7, -25.44, 0.06, 32.16, 572.63, 35.98),
(21, 'SIS', 393.8, 5844.57, 10.17, 0.51, 31.66, 17.09, 0.64, 24.64, 1756.61, 1164.56),
(22, 'GTPL Hathway', 146.4, 1646.46, 8.75, 2.05, 31.53, 16.5, 0.16, 16.73, 767.67, 140.96),
(23, 'Welspun Corp', 144.75, 3777.24, 7.02, 7.25, 29.6, -1.53, 0.11, 20.64, 3256.75, 365.75),
(24, 'I G Petrochems', 598.8, 1844, 9.78, 0.33, 29.58, 3.14, 0.15, 61.08, 791.2, 125.94),
(25, 'Geojit Fin. Ser.', 68, 1621.07, 13.16, 2.21, 29.12, 9.65, 0.06, 5.17, 568.14, 36.47),
(26, 'Sasken Technol.', 971.8, 1462.64, 12.77, 3.09, 28.84, 13.22, 0, 76.11, 549.5, 0),
(27, 'Engineers India', 84.15, 4729.59, 13.76, 6.12, 28.78, 15.73, 0, 5.44, 2119.81, 3.57),
(28, 'Petronet LNG', 236.2, 35430, 13.25, 5.29, 28.14, 22.26, 0.28, 17.83, 9990.19, 3218.22),
(29, 'Saksoft', 508.4, 533.31, 11.74, 0.89, 26.35, 20.16, 0.14, 43.32, 196.24, 28.46),
(30, 'Polyplex Corpn', 1187.2, 3726.91, 7.28, 12.38, 26.3, 8.67, 0.25, 163.04, 2996.69, 758);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`) VALUES
(1, 'Bhansali Engg.', 'Bhansali Engg.'),
(2, 'Coal India', 'Coal India');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
