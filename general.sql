-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 06:00 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `general`
--

-- --------------------------------------------------------

--
-- Table structure for table `anubhavcart`
--

CREATE TABLE `anubhavcart` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `src` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(5) NOT NULL,
  `soldby` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `src` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(5) NOT NULL,
  `soldby` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `src`, `price`, `quantity`, `soldby`, `description`) VALUES
(1, 'Iron Man', 'img/image1.jpg', 15, 1, 'Marvel', 'Toy'),
(8, 'Easy Puzzle', 'img/puzzle-1261138__340.jpg', 12, 1, 'John', 'This is one of the easiest puzzles. You will enjoy each and every moment!');

-- --------------------------------------------------------

--
-- Table structure for table `product1`
--

CREATE TABLE `product1` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `src` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `stock` int(5) NOT NULL,
  `soldby` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product1`
--

INSERT INTO `product1` (`id`, `name`, `src`, `price`, `stock`, `soldby`, `description`) VALUES
(7, 'Jigsaw Puzzel', 'img/Jigsaw-Puzzle.jpg', 15, 50, 'Smith', 'Solve this puzzle and enjoy your free time with fun!'),
(8, 'Easy Puzzle', 'img/puzzle-1261138__340.jpg', 12, 50, 'John', 'This is one of the easiest puzzles. You will enjoy each and every moment!'),
(9, 'Baby Puzzle', 'img/babycrop.jpg', 15, 70, 'John', 'Solve this puzzle and create your new best friends!'),
(10, 'Serene Puzzle', 'img/SERENITYcrop.png', 20, 50, 'John', 'Solve the puzzle and the enjoy the serenity with it!'),
(11, 'Dice Puzzle', 'img/dice.jpg', 15, 90, 'Lara', 'Solve this funny puzzle and the enjoy the moment with it!'),
(12, 'Penguine Puzzle', 'img/penguine-crop.jpg', 10, 98, 'Lara', 'Create the Penguine and spend your time with them!');

-- --------------------------------------------------------

--
-- Table structure for table `product2`
--

CREATE TABLE `product2` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `src` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `stock` int(5) NOT NULL,
  `soldby` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product2`
--

INSERT INTO `product2` (`id`, `name`, `src`, `price`, `stock`, `soldby`, `description`) VALUES
(13, 'Captain America', 'img/captain.jpeg', 25, 50, 'Roger', 'Here is the First Avenger for you!'),
(14, 'Hulk', 'img/GUEST_6d7496ea-26a6-4786-b94b-6af8daf1dbff.jpg', 25, 50, 'Roger', 'Hulk- the strongest avenger!'),
(15, 'Dreadpool', 'img/dreadpool.jpeg', 20, 30, 'Jackson', 'Buy your favorite Dreadpool!'),
(16, 'Thor', 'img/thor.jpg', 25, 80, 'Jackson', 'Here is the God of Thunder for you!'),
(17, 'Iron Man', 'img/ironman.jpg', 24, 50, 'Lara', 'Buy your favourite Iron Man suit!'),
(18, 'Doctor Strange', 'img/doctor1.jpg', 25, 95, 'Brandon', 'Play some magic tricks with the magician!');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `src` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `stock` int(5) NOT NULL,
  `soldby` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `src`, `price`, `stock`, `soldby`, `description`) VALUES
(1, 'Iron Man', 'img/image1.jpg', 15, 25, 'Marvel', 'Toy'),
(2, 'Alita', 'img/image2.jpg', 9.99, 25, 'DC', 'Toy'),
(3, 'AquaMan', 'img/image3.jpg', 15.99, 25, 'DC', 'Toy'),
(4, 'Black Widow', 'img/image4.jpg', 15.99, 25, 'Marvel', 'Toy'),
(5, 'Batman', 'img/image5.jpg', 15.99, 25, 'DC', 'Toy'),
(6, 'Star-trooper', 'img/image6.jpg', 15.99, 25, 'Disney', 'Toy');

-- --------------------------------------------------------

--
-- Table structure for table `sauravcart`
--

CREATE TABLE `sauravcart` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `src` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(5) NOT NULL,
  `soldby` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE `useraccounts` (
  `uname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `salt` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`uname`, `email`, `password`, `salt`) VALUES
('Anubhav Rawal', 'anubhav.rawal@wmich.edu', 'b79315b5c934a1dbf7c1ac225664ec49', 'abcd1'),
('sadasd', 'asdas@gmail.com', 'd6f12972bbcd253da74deba238eed900', 'abcd1'),
('saurav rawal', 'rawal.saurav@gmail.com', 'a531ff9f42a9de0625113578bce05876', 'abcd1'),
('Saurav', 'saurav.rawal@gmail.com', 'b79315b5c934a1dbf7c1ac225664ec49', 'abcd1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anubhavcart`
--
ALTER TABLE `anubhavcart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product1`
--
ALTER TABLE `product1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product2`
--
ALTER TABLE `product2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sauravcart`
--
ALTER TABLE `sauravcart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useraccounts`
--
ALTER TABLE `useraccounts`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
