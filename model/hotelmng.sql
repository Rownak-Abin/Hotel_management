-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 11:12 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelmng`
--

-- --------------------------------------------------------

--
-- Table structure for table `cusrequests`
--

CREATE TABLE `cusrequests` (
  `id` int(50) NOT NULL,
  `CusName` varchar(500) NOT NULL,
  `CusPhn` varchar(500) NOT NULL,
  `CusEmail` varchar(500) NOT NULL,
  `room` varchar(500) NOT NULL,
  `checkin` date NOT NULL,
  `nights` varchar(500) NOT NULL,
  `status` varchar(500) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cusrequests`
--

INSERT INTO `cusrequests` (`id`, `CusName`, `CusPhn`, `CusEmail`, `room`, `checkin`, `nights`, `status`) VALUES
(2, 'Meraj khan', '0145445484', 'me@gmail.com', 'King Deluxe', '2021-04-08', '3', 'Rejected'),
(10, 'Nasir', '014554684', 'nasir@gmail.com', 'Double Regular', '2021-04-02', '3', 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `roomlist`
--

CREATE TABLE `roomlist` (
  `id` int(50) NOT NULL,
  `roomname` varchar(500) NOT NULL,
  `type` varchar(500) NOT NULL,
  `size` varchar(500) NOT NULL,
  `floor` varchar(500) NOT NULL,
  `price` int(50) NOT NULL,
  `pic` varchar(500) NOT NULL,
  `Complementary` varchar(5000) NOT NULL,
  `description` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roomlist`
--

INSERT INTO `roomlist` (`id`, `roomname`, `type`, `size`, `floor`, `price`, `pic`, `Complementary`, `description`) VALUES
(1, 'Super Deluxe', 'AC', 'Single', 'Ground', 2000, 'imgs/h1.jpg', 'Water, NewsPaper, Toiletries', 'Super Deluxe room The key features are not all, of course. The rooms should also be described in a detailed form available on the per room view. This is what you can really do your word-magic. Unfortunately, around 70% of them do not take the opportunity and provide only sketchy descriptions.'),
(2, 'King Deluxe', 'Non-AC', 'Couple', 'Second', 2500, 'imgs/h2.jpg', 'Water, NewsPaper, Coffee, Toiletries', 'King Deluxe The key features are not all, of course. The rooms should also be described in a detailed form available on the per room view. This is what you can really do your word-magic. Unfortunately, around 70% of them do not take the opportunity and provide only sketchy descriptions.'),
(3, 'Family Suit', 'AC', 'Family', 'Third', 3500, 'imgs/h3.jpg', 'Breakfast, Water, NewsPaper, Coffee, Toiletries', 'Family Suit The key features are not all, of course. The rooms should also be described in a detailed form available on the per room view. This is what you can really do your word-magic. Unfortunately, around 70% of them do not take the opportunity and provide only sketchy descriptions.'),
(4, 'Single Super Deluxe', 'AC', 'Single', 'Second', 2500, 'imgs/h4.jpg', 'Water, NewsPaper, Coffee, Toiletries', 'Single Super Deluxe The key features are not all, of course. The rooms should also be described in a detailed form available on the per room view. This is what you can really do your word-magic. Unfortunately, around 70% of them do not take the opportunity and provide only sketchy descriptions.'),
(5, 'Single Room', 'Non-AC', 'Single', 'Ground', 1500, 'imgs/h14.jpg', 'Water, Toiletries', 'Single Room The key features are not all, of course. The rooms should also be described in a detailed form available on the per room view. This is what you can really do your word-magic. Unfortunately, around 70% of them do not take the opportunity and provide only sketchy descriptions.'),
(6, 'Double Deluxe', 'AC', 'Couple', 'Third', 3000, 'imgs/h6.jpg', 'Water, NewsPaper, Coffee, Toiletries', 'Double Deluxe The key features are not all, of course. The rooms should also be described in a detailed form available on the per room view. This is what you can really do your word-magic. Unfortunately, around 70% of them do not take the opportunity and provide only sketchy descriptions.'),
(7, 'Double Regular', 'Non-AC', 'Couple', 'Second', 2500, 'imgs/h7.jpg', 'Water, NewsPaper, Coffee, Toiletries', 'Double Regular The key features are not all, of course. The rooms should also be described in a detailed form available on the per room view. This is what you can really do your word-magic. Unfortunately, around 70% of them do not take the opportunity and provide only sketchy descriptions.'),
(8, 'Family Deluxe', 'AC', 'Family', 'Third', 4500, 'imgs/h12.jpg', 'Breakfast, Water, NewsPaper, Coffee, Toiletries', 'Family Deluxe The key features are not all, of course. The rooms should also be described in a detailed form available on the per room view. This is what you can really do your word-magic. Unfortunately, around 70% of them do not take the opportunity and provide only sketchy descriptions.'),
(9, 'Family Super Deluxe', 'AC', 'Family', 'Second', 5000, 'imgs/h13.jpg', 'Breakfast, Water, NewsPaper, Coffee, Toiletries', 'Family Super Deluxe The key features are not all, of course. The rooms should also be described in a detailed form available on the per room view. This is what you can really do your word-magic. Unfortunately, around 70% of them do not take the opportunity and provide only sketchy descriptions.'),
(10, 'Couple AC Deluxe', 'AC', 'Couple', 'Second', 3500, 'imgs/h5.jpg', 'Breakfast, Water, NewsPaper, Coffee, Toiletries', 'Couple AC Deluxe The key features are not all, of course. The rooms should also be described in a detailed form available on the per room view. This is what you can really do your word-magic. Unfortunately, around 70% of them do not take the opportunity and provide only sketchy descriptions.'),
(11, 'Family Regular', 'Non-AC', 'Family', 'Ground', 2500, 'imgs/h11.jpg', 'Water, Coffee, Toiletries', 'Family Regular The key features are not all, of course. The rooms should also be described in a detailed form available on the per room view. This is what you can really do your word-magic. Unfortunately, around 70% of them do not take the opportunity and provide only sketchy descriptions.'),
(12, 'Single Super View', 'AC', 'Single', 'Third', 2000, 'imgs/h16.jpg', 'Water, Coffee, Toiletries', 'Single Super View The key features are not all, of course. The rooms should also be described in a detailed form available on the per room view. This is what you can really do your word-magic. Unfortunately, around 70% of them do not take the opportunity and provide only sketchy descriptions.'),
(13, 'Single Mini Room', 'Non-AC', 'Single', 'Third', 1500, 'imgs/h18.jpg', 'Water, Toiletries', 'Single Mini Room The key features are not all, of course. The rooms should also be described in a detailed form available on the per room view. This is what you can really do your word-magic. Unfortunately, around 70% of them do not take the opportunity and provide only sketchy descriptions.'),
(14, 'Budget Couple Room', 'AC', 'Couple', 'Ground', 1700, 'imgs/h19.jpg', 'Water, NewsPaper, Toiletries', 'Couple Budget Room The key features are not all, of course. The rooms should also be described in a detailed form available on the per room view. This is what you can really do your word-magic. Unfortunately, around 70% of them do not take the opportunity and provide only sketchy descriptions.'),
(15, 'Couple Deluxe Room', 'AC', 'Couple', 'Ground', 1800, 'imgs/h20.jpg', 'Water, NewsPaper, Coffee, Toiletries', 'Couple Deluxe Room The key features are not all, of course. The rooms should also be described in a detailed form available on the per room view. This is what you can really do your word-magic. Unfortunately, around 70% of them do not take the opportunity and provide only sketchy descriptions.'),
(16, 'Couple Cheap Room', 'Non-AC', 'Couple', 'Ground', 1200, 'imgs/h21.jpg', 'Breakfast, Water', 'Couple Cheap Room The key features are not all, of course. The rooms should also be described in a detailed form available on the per room view. This is what you can really do your word-magic. Unfortunately, around 70% of them do not take the opportunity and provide only sketchy descriptions.'),
(17, 'Family Luxurious Room', 'AC', 'Family', 'Second', 4500, 'imgs/h22.jpg', 'Water, NewsPaper, Coffee, Toiletries', 'Family Luxurious Room The key features are not all, of course. The rooms should also be described in a detailed form available on the per room view. This is what you can really do your word-magic. Unfortunately, around 70% of them do not take the opportunity and provide only sketchy descriptions.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `cName` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `type` varchar(500) NOT NULL DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `cName`, `email`, `phone`, `password`, `type`) VALUES
(1, 'Sakib Al Hasan', 'sa@gmail.com', '017111222333', 'sak123', 'customer'),
(2, 'Mushfiqur rahim', 'mushi@gmail.com', '0123456789', 'mus123', 'customer'),
(3, 'Nasir', 'nasir@gmail.com', '014554684', 'nas123', 'customer'),
(4, 'Nazmul Papon', 'pap@gmail.com', '0145852485', 'pap123', 'admin'),
(5, 'Meraj khan', 'me@gmail.com', '0145445484', 'sdfsfsfs', 'customer'),
(6, 'Shommo Sarker', 'som@gmail.com', '01454465468', 'som123', 'customer'),
(9, 'Koushiq', 'koushiq@gmail.com', '01715684864', 'kou123', 'customer'),
(10, 'siam', 'saim@gmail.com', '0198478464', 'sm123', 'customer'),
(13, 'reja', 'reja@gmail.com', '01686541654', 'reja123', 'customer'),
(14, 'Hasib', 'hasib@gmail.com', '0168484645', 'has123', 'customer'),
(15, 'Suba', 'suba@gmail.com', '0145445484', 'suba123', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cusrequests`
--
ALTER TABLE `cusrequests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomlist`
--
ALTER TABLE `roomlist`
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
-- AUTO_INCREMENT for table `cusrequests`
--
ALTER TABLE `cusrequests`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `roomlist`
--
ALTER TABLE `roomlist`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
