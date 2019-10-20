-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2019 at 03:25 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'yashdeep', '1397');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(2) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `img`) VALUES
(1, 'img/banner/newww.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `img` varchar(150) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `img`, `title`, `description`) VALUES
(3, 'img/pic.png', 'COLLER BAG', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ultricies non massa vel ultricies. Donec eget mauris tellus. Quisque eget sollicitudin felis, sit amet fermentum est. Nam consequat pellentesque purus at suscipit. Duis eleifend quis neque quis accumsan. Nunc a vulputate massa. Fusce accumsan quam at risus varius, quis facilisis lorem fringilla. Cras porta varius turpis, ut convallis orci maximus eu. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\r\n\r\nMaecenas a dui tempus, dictum enim at, finibus purus. Integer ut cursus sem, nec aliquet est. Praesent ac egestas ligula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus auctor tortor leo, tincidunt consequat sem pulvinar a. Ut vehicula nisl sit amet est semper, in dapibus lectus vehicula. Quisque sed velit diam. Nunc tempus libero ac consequat finibus. Phasellus non est rhoncus dui porttitor hendrerit et et augue. Duis sagittis mauris massa, quis convallis sapien vestibulum fringilla. Mauris eget velit augue. Morbi ac rutrum elit. Pellentesque dui leo, interdum id placerat eu, porttitor nec tellus.\r\n\r\nNunc eu dui at ex cursus laoreet. Praesent ut felis neque. Vivamus in nunc sollicitudin, feugiat metus sit amet, volutpat orci. Cras id lacus pretium neque vulputate molestie a viverra risus. Ut interdum elit ut urna faucibus rhoncus. Nunc fringilla tincidunt accumsan. Vivamus vel odio condimentum quam posuere cursus. Maecenas laoreet fermentum pellentesque. Duis eget auctor nisi. Aenean condimentum diam in turpis laoreet, quis blandit ipsum accumsan.'),
(4, 'img/pic.png', 'SOLAR BACKPACK', 'Vestibulum libero sapien, posuere interdum hendrerit a, maximus eu leo. Aliquam quis elit sollicitudin, consequat mauris quis, luctus erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Cras elementum condimentum massa, at consequat neque semper nec. Quisque vitae varius augue. Sed nec enim non neque scelerisque maximus quis ut enim. Vestibulum vulputate cursus nulla et lacinia. Vivamus sagittis mi non luctus ornare. Praesent tristique ante metus, non sagittis tellus elementum in. Etiam ultrices magna ac nibh bibendum, sed suscipit odio efficitur. Nullam varius orci at ipsum pellentesque, at sodales arcu commodo. Cras lacus risus, semper vitae luctus at, scelerisque sit amet velit. Donec venenatis sed nisi eu placerat.\r\n\r\nMaecenas faucibus erat sit amet bibendum iaculis. Duis ultrices magna eu fermentum eleifend. Cras ornare turpis sit amet suscipit pharetra. Sed lacinia odio sed elit mattis aliquet non at erat. Mauris sed dictum risus. Nullam sed orci id dolor facilisis molestie. Pellentesque cursus velit in dui eleifend, sit amet cursus magna luctus. Pellentesque aliquet, orci hendrerit rhoncus scelerisque, nulla nibh pulvinar augue, ac venenatis sapien ante vitae nisi.'),
(20, 'img/newww.jpg', 'LOGO', 'Etiam viverra facilisis nibh, sit amet dapibus eros commodo vitae. Ut lacinia risus et erat consectetur, ac porttitor ipsum egestas. Nullam ac cursus velit. Cras molestie sit amet ex id viverra. Maecenas vitae nibh at massa sodales lobortis. Suspendisse ac imperdiet tellus. Aenean mollis massa eu bibendum cursus. Duis rhoncus risus ante, eget pulvinar nisi posuere ac. Cras a tellus sit amet velit lobortis pellentesque. Nulla facilisi. Integer vehicula sodales justo blandit sodales. Donec luctus euismod diam nec fringilla. Phasellus malesuada feugiat pharetra. Morbi sed rutrum lacus, eget fringilla ex.\r\n\r\nDonec vehicula at risus sed rhoncus. Mauris tristique felis nisl, et dictum quam pretium sed. Proin in vulputate justo, in ultricies dui. Nullam sodales est sit amet lacinia ullamcorper. Vestibulum at sodales sem, in fermentum enim. Nulla non urna at libero hendrerit molestie. Duis nunc augue, feugiat ultrices dolor sit amet, lobortis vulputate mi. Nulla facilisi. Pellentesque convallis egestas facilisis. Fusce in malesuada enim, vitae efficitur neque. Sed viverra libero vitae commodo placerat. Quisque felis risus, egestas vel luctus id, commodo in odio. Mauris neque dolor, feugiat maximus eros sodales, congue hendrerit ligula.\r\n\r\nDonec vel tincidunt odio, at convallis nisl. Curabitur tincidunt pellentesque dui, non auctor velit dapibus nec. Nulla aliquam felis sit amet ligula faucibus euismod. Quisque posuere lacus nisi. Nullam velit libero, ullamcorper feugiat metus non, efficitur placerat urna. Integer posuere, augue non tempor placerat, sem sem suscipit neque, eget volutpat ipsum tellus ac erat. Fusce facilisis congue malesuada. Morbi quis turpis sit amet nulla mattis imperdiet et sed purus. In finibus, turpis ut luctus sollicitudin, nisi nulla euismod ipsum, ut volutpat tellus massa eget turpis. Nunc feugiat, elit ac vulputate aliquam, diam justo laoreet tortor, non dapibus dolor mi ac nibh. Mauris a dui facilisis, vehicula lectus nec, pharetra dui. Proin sodales nisl ex, consectetur tempor est ornare a. Donec vel est sit amet mi imperdiet ultricies ut eget nibh. Pellentesque dignissim metus nisl, in maximus orci vestibulum sed.\r\n\r\nVestibulum viverra venenatis felis, sed scelerisque massa. Nullam fermentum commodo iaculis. Nullam velit tellus, vehicula ut diam sit amet, pellentesque tempor nisi. Nullam quis odio neque. Curabitur sed magna ut ligula pellentesque gravida nec ac tellus. In quis accumsan mauris. Aliquam erat volutpat. Quisque in nisl id enim elementum laoreet. Nam mi orci, efficitur in dolor non, vehicula molestie neque. Sed dapibus augue est, ut lacinia nibh luctus sed. Etiam molestie, enim eu cursus tincidunt, felis erat feugiat felis, sit amet condimentum orci augue a mi. In hac habitasse platea dictumst. Donec sed feugiat odio, accumsan accumsan nibh. Quisque quis tortor feugiat, feugiat enim eu, sagittis enim. Quisque molestie lectus id congue fringilla.'),
(21, 'img/logo.png', 'TESTING', 'Current check');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
