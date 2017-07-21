-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2017 at 03:59 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurantdb`
--

-- --------------------------------------------------------

--
-- Table structure for table ` rest`
--

CREATE TABLE ` rest` (
  `name` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `review` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table ` rest`
--

INSERT INTO ` rest` (`name`, `type`, `price`, `city`, `country`, `image`, `review`) VALUES
('Grand Estancia ', 'Multi Cuisine', 350, 'Salem', 'India', 'RestaurantsDetails/ge.jpg', 'Everyone has to eat here'),
('Kuchi nd Kream', 'Beverages and Snacks', 100, 'Erode', 'india', 'RestaurantsDetails/knk.jpg', 'Good'),
('Murugan Idly Shop', 'south Indian', 150, 'coimbatore', 'India', 'RestaurantsDetails/mis.jpg', 'Clean and Tasty'),
('Saravana Bhavan', 'Indian', 200, 'chennai', 'india', 'RestaurantsDetails/sb.jpg', 'Decent varieties and price'),
('Tims Bistro', 'European', 250, 'Trichy', 'India', 'RestaurantsDetails/tb.jpg', 'Bad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table ` rest`
--
ALTER TABLE ` rest`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
