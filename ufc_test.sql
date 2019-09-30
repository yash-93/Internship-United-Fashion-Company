-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2019 at 06:41 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ufc_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `img` varchar(150) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `img`, `title`) VALUES
(1, 'https://isundei.com/wp-content/uploads/2018/02/3-18.jpg', 'BACKPACK'),
(2, 'https://isundei.com/wp-content/uploads/2019/04/2-8.jpg', 'TRAVEL BAG'),
(3, 'https://isundei.com/wp-content/uploads/2019/04/cooler-bag-back.jpg', 'COLLER BAG'),
(4, 'https://isundei.com/wp-content/uploads/2019/04/solar-backpack-side.jpg', 'SOLAR BACKPACK'),
(5, 'https://isundei.com/wp-content/uploads/2019/04/tool-bag-2.jpg', 'TOOL BAGS'),
(6, 'https://isundei.com/wp-content/uploads/2019/04/promotional-bag-1.jpg', 'PROMOTIONAL BAGS');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
