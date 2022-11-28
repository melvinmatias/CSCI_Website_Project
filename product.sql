-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 28, 2022 at 01:36 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csci250-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Keven Magnussen Topps Now Racing Card', '1.jpg', 14.99),
(2, 'Bowman Chrome Baseball Starter Box', '2.jpg', 24.99),
(3, '2022 World Series Jose Altuve Card', '3.jpg', 19.99),
(4, 'John Tavares Hockey Card', '4.jpg', 14.99),
(5, 'Aaron Judge 2022 MVP Yankees Card ', '5.jpg', 24.99),
(6, 'Frank Robinson Outfielder Card Balt Orioles', '6.jpg', 19.99),
(7, 'Roansy Contreras Pittsburgh Pirates Card', '7.jpg', 19.99),
(8, 'Heritage Baseball 2022 Collectors Box', '8.jpg', 99.99),
(9, '2022 Archives Baseball Card Box', '9.jpg', 74.99),
(10, '2022 Topps Chrome Card Pack', '10.jpg', 24.99),
(11, 'Topps Season Two Catalog', '11.jpg', 49.99),
(12, 'Topps Season One Catalog', '12.jpg', 49.99),
(13, 'Heritage 2022 Autograph Card Box', '13.jpg', 199.99),
(14, 'Zack Wheeler Phillies Card', '14.jpg', 9.99),
(15, 'Zack Greinke Astros Card', '15.jpg', 9.99),
(16, 'Welcome To The Show Molina Cardinals Poster', '16.jpg', 19.99),
(17, 'Stars of MLB Yadier Molina Poster', '17.jpg', 19.99),
(18, 'Yadier Molina Card', '18.jpg', 9.99),
(19, 'Willi Castro Card', '19.jpg', 9.99),
(20, 'Will Smith Dodgers Card', '20.jpg', 14.99),
(21, 'Will Smith Rare Dodgers Card', '21.jpg', 49.99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
