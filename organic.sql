-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2024 at 11:21 AM
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
-- Database: `organic`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminreg`
--

CREATE TABLE `adminreg` (
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminreg`
--

INSERT INTO `adminreg` (`name`, `address`, `email`, `phone`, `username`, `password`) VALUES
('Rajesh Chaudhari', 'Satara', 'rajesh@gmail.com', '9393225609', 'Admin123', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `buy_id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`buy_id`, `username`, `product_id`, `category`, `product_name`, `price`, `quantity`, `amount`) VALUES
(1, 'raj', 10, 'fruit', 'Grapes', 80, 3, 240),
(2, 'raj', 11, 'fruit', 'Guava', 50, 2, 100),
(3, 'raj', 3, 'vegetable', 'Tomato', 50, 3, 150),
(4, 'raj', 2, 'vegetable', 'Lady Finger', 40, 3, 120),
(5, 'raj', 3, 'vegetable', 'Tomato', 50, 3, 150),
(6, 'raj', 11, 'fruit', 'Guava', 50, 0, 0),
(7, 'raj', 19, 'dryfruit', 'Pista', 360, 1, 360),
(8, 'Sakshi', 2, 'vegetable', 'Lady Finger', 40, 2, 80),
(9, 'Sakshi', 12, 'fruit', 'Banana', 60, 3, 180);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `contact`, `message`) VALUES
('Riya Sharma', 'riyaa@gmail.com', '9122344545', 'Need some details if you want any employee');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `odt` varchar(500) NOT NULL,
  `username` varchar(100) NOT NULL,
  `mode` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `cardnumber` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`odt`, `username`, `mode`, `amount`, `cardnumber`) VALUES
('03-03-2024', 'yogita1199', 'COD', '100', '0'),
('03-03-2024', '', 'COD', '250', '01234567'),
('03-03-2024', 'raj', 'COD', '360', '01234567'),
('03-03-2024', 'neha', 'CreditCard', '360', '01234567'),
('04-03-2024', 'neha', 'CreditCard', '360', '01234567'),
('04-03-2024', 'Sakshi', 'COD', '40', '012457690'),
('04-03-2024', 'Sakshi', 'COD', '250', '054687935'),
('04-03-2024', 'Sakshi', 'DebitCard', '200', '034523'),
('04-03-2024', 'Sakshi', 'CreditCard', '200', '01234567'),
('05-03-2024', '', '--select payment mode--', '0', '0'),
('05-03-2024', 'raj', 'CreditCard', '100', '100'),
('05-03-2024', 'raj', 'COD', '150', '150'),
('06-03-2024', 'raj', 'CreditCard', '120', '12345'),
('07-03-2024', 'raj', 'CreditCard', '150', ' 546678'),
('08-03-2024', 'Sakshi', 'COD', '80', ' 546678'),
('08-03-2024', 'Sakshi', 'COD', '180', ' 34546678');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` varchar(50) NOT NULL,
  `product_category` varchar(30) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `product_img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_category`, `product_name`, `price`, `product_img`) VALUES
('1', 'vegetable', 'Carrot', 20, 'v1.png'),
('10', 'fruit', 'Grapes', 80, 'fr6.jpg'),
('11', 'fruit', 'Guava', 50, 'fr5.jpg'),
('12', 'fruit', 'Banana', 60, 'b.png'),
('13', 'fruit', 'Strawberry', 100, 'fr3.jpg'),
('14', 'fruit', 'Mango', 200, 'fr1.jpg'),
('15', 'fruit', 'Pineapple', 120, 'fr7.jpg'),
('16', 'fruit', 'Orange', 90, 'fr8.jpg'),
('17', 'dryfruit', 'Cashew', 200, 'dr1.jpg'),
('18', 'dryfruit', 'Almond', 250, 'dr2.webp'),
('19', 'dryfruit', 'Pista', 360, 'dr3.jpg'),
('2', 'vegetable', 'Lady Finger', 40, 'vege3.jpg'),
('20', 'dryfruit', 'Figs', 60, 'dr4.webp'),
('21', 'dryfruit', 'Walnut', 200, 'dr6.webp'),
('22', 'dryfruit', 'Dried Cherry', 200, 'dr8.jpg'),
('3', 'vegetable', 'Tomato', 50, 't.png'),
('4', 'vegetable', 'Coriander', 30, 'vege7.png'),
('5', 'vegetable', 'Bell Paper', 30, 'vege6.jpg'),
('6', 'vegetable', 'Potato', 60, 'vege4.jpg'),
('7', 'vegetable', 'Coliflower', 30, 'vege1.jpg'),
('8', 'vegetable', 'Pumpkin', 50, 'vege2.jpg'),
('9', 'fruit', 'Apple', 50, 'fr4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `address`, `email`, `phone`, `username`, `password`) VALUES
('Geeta Chaudhari', 'Satara', 'geeta@gmail.com', '9822232323', 'Geeta', 'abcd'),
('neha sane', 'pune', 'neha@gmail.com', '9811991199', 'neha', '12345'),
('Raj Shirke', 'Satara', 'raj@gmail.com', '9911991199', 'raj', '123'),
('Sakshi', 'Desai', 'sakshi@gmail.com', '9911991188', 'Sakshi', 'abc'),
('Sanvi', 'Shinde', 'Sanvi@gmail.com', '9130451156', 'Sanuuu', '123'),
('yogita', 'satara', 'yogitashelkande85@gmail.com', '9834302334', 'yogita1199', 'yogita1199');

-- --------------------------------------------------------

--
-- Table structure for table `userrating`
--

CREATE TABLE `userrating` (
  `username` varchar(30) NOT NULL,
  `rating` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userrating`
--

INSERT INTO `userrating` (`username`, `rating`, `title`, `comment`) VALUES
('raj', '5', 'Fruits Review', 'Good quality, fresh fruits. I loved your products. '),
('neha', '4', 'Dryfruit Review', 'It was absolutely good. Everyone should by it.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`buy_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `buy_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
