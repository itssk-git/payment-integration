-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 02:18 PM
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
-- Database: `brocade`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `deliver_place` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `product_id`, `user_id`, `payment_id`, `deliver_place`) VALUES
(16, 8, 1, 'Av4LLsZpfJjoP6QThBwe3c', 'Kathmandu'),
(17, 4, 1, 'xTcks23AnNcRuzdTn4z8CF', 'Kathmandu');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` int(11) NOT NULL,
  `ImageURL` varchar(255) DEFAULT NULL,
  `ProductName` varchar(100) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ImageURL`, `ProductName`, `Price`, `Quantity`, `Description`) VALUES
(2, '1.jpg', 'Yellow Hoodie', 2999.00, 9, 'This stylish yellow hoodie is a must-have addition to your casual wardrobe. Made from soft and comfortable cotton blend fabric, it offers warmth and coziness during cooler days. The vibrant yellow color adds a pop of brightness to your look, perfect for adding a cheerful touch to any outfit. Featuring a classic pullover style with a hood and front kangaroo pocket, this hoodie combines comfort and functionality effortlessly. '),
(3, '2.jpg', 'Jacket Premium', 5999.00, 10, 'This versatile jacket is designed to keep you stylish and warm in any weather. Crafted from high-quality materials, it offers both durability and comfort. Featuring a sleek design with a zip-up front and multiple pockets, this jacket is perfect for everyday wear or outdoor adventures.'),
(4, '3.jpg', 'Track Set', 4999.00, 10, 'Elevate your sporty style with this trendy trackset for both comfort and performance, this trackset is perfect for workouts, runs, or just lounging around. The lightweight and breathable fabric ensure maximum comfort, while the stylish design adds a touch of urban flair. The trackset features a zip-up jacket with a stand-up collar and matching track pants with an elastic waistband for a customizable fit. Whether you\'re hitting the gym or running errands, this trackset will keep you looking and feeling great.'),
(5, '4.jpg', 'Premium Stripe Jacket', 12000.00, 10, 'This versatile jacket is designed to keep you stylish and warm in any weather. Crafted from high-quality materials, it offers both durability and comfort. Featuring a sleek design with a zip-up front and multiple pockets, this jacket is perfect for everyday wear or outdoor adventures.'),
(6, '5.jpg', 'Women Overcoat', 5999.00, 10, 'Step out in style and sophistication with this classic overcoat. Crafted from premium wool-blend fabric, this overcoat offers both warmth and elegance. Its timeless design features a tailored silhouette with notched lapels and a single-breasted front closure. Perfect for chilly days and formal occasions, this overcoat effortlessly elevates any outfit. '),
(7, '6.jpg', 'Sweatshirt', 800.00, 0, 'Stay cozy and stylish with this comfortable sweatshirt. Made from soft and breathable cotton fabric, this sweatshirt is perfect for lounging at home or running errands around town. Its relaxed fit and ribbed cuffs provide a comfortable and snug feel, while the classic crewneck design adds a timeless touch. '),
(8, '7.jpg', 'Zip-up shirt', 5099.00, 10, 'This versatile jacket is designed to keep you stylish and warm in any weather. Crafted from high-quality materials, it offers both durability and comfort. Featuring a sleek design with a zip-up front and multiple pockets, this jacket is perfect for everyday wear or outdoor adventures.Perfect for layering over a t-shirt or wearing as a standalone piece, this zip-up shirt is a stylish choice for any occasion. Whether paired with jeans for a casual look or dressed up with chinos for a more polished ensemble, this shirt effortlessly blends comfort and style.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Name`, `Phone`, `Email`, `Password`) VALUES
(1, 'Sachin Karki', '9813068622', 'chinsaw0class@gmail.com', 'sachin'),
(2, 'Diwa Ghimire', '9845658452', 'diwa@gmail.com', 'diwa123'),
(3, 'Nirman Shrestha', '9845621234', 'nirman@gmail.com', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Phone` (`Phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`ProductID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
