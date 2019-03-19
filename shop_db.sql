-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 19, 2019 at 03:40 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `disc` varchar(1000) NOT NULL,
  `pic` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `header`, `price`, `type`, `disc`, `pic`) VALUES
(2, 'Apple_MackBook_pro 15', '1,21,000', 'laptop', 'Apple The MacBook is a brand of notebook computers', 'uploads/Apple_Macbook_Pro_15_35781448-4070.jpg'),
(3, 'apple_logo_laptop_skin', '29,000', 'laptop', 'Apple The MacBook is a brand of notebook computers', 'uploads/apple-logo-laptop-skin.jpeg'),
(4, 'Ashus Laptop 23', '1,02,000', 'laptop', 'Ashus pro is a brand of laptops and mobiles.', 'uploads/Ashus Laptop E402Ss.jpeg'),
(5, 'Zenbook_Ashus', '98,000', 'laptop', 'Taiwanese multinational computer hardware and electronics company was founded in 1989 in Taiwan', 'uploads/asus-zenbook-notebook-pc.jpg'),
(6, 'Vivo 5 phone', '43,000', 'mobile', 'Ram : 3 gb, Rom : 32 gb, Battery : 3000mah, Processor: 2.4Ghz', 'uploads/bluvivo5rofficial.png'),
(7, 'dell-lat-13', '43,000', 'laptop', 'Ram : 4 gb, Rom : 1 tb, Processor: 2.4Ghz', 'uploads/dell-lat-13-7370-main.jpg'),
(8, 'dell-xps-13', '39,000', 'laptop', 'Ram : 6 gb, Rom : 1 tb,  Processor: 2.4Ghz i3', 'uploads/dell-xps-13-screen-lid1-1500x1000.jpg'),
(9, 'HP 14-s007', '67,000', 'laptop', 'Ram : 8 gb, Rom : 2tb Processor: 2.4Ghz i5', 'uploads/HP 14-bs007(i5-7200)fd.jpg'),
(10, 'HP-laptop 5', '23,000', 'laptop', 'Ram : 4 gb, Rom : 1 tb, Processor: 2.9Ghz', 'uploads/HP laptop-15.png'),
(11, 'HP-pavilion_15', '34,000', 'laptop', 'Ram : 4 gb, Rom : 1 tb Processor: 2.1Ghz', 'uploads/HP_Pavilion_15-CB092TX_15inch_i7_Gaming_Laptop_-_Black.jpg'),
(12, 'iphone7', '69,000', 'mobile', 'Ram : 3 gb, Rom : 32 gb, Battery : 4000mah, Processor: 2.4Ghz', 'uploads/iphone7.png'),
(13, 'I-phoneX', '79,000', 'mobile', 'Ram : 4 gb, Rom : 64 gb, Battery : 5000mah, Processor: 2.8Ghz', 'uploads/new_phone.jpg'),
(14, 'OPPO R 15', '45,000', 'mobile', 'Ram : 3 gb, Rom : 32 gb, Battery : 3000mah, Processor: 2.4Ghz', 'uploads/OPPO R 15.png'),
(15, 'OPPO f1s', '24,000', 'mobile', 'Ram : 3 gb, Rom : 32 gb, Battery : 3000mah, Processor: 2.4Ghz', 'uploads/oppo-f1s-6651.jpg'),
(16, 'OPPO-R9', '29,999', 'mobile', 'Ram : 6 gb, Rom : 32 gb, Battery : 3000mah, Processor: 2.4Ghz', 'uploads/OPPO-R9-R9S-Plus-Case-3.jpg'),
(17, 'Oppo r9s case back', '4000', 'mobile', 'Ram : 3 gb, Rom : 32 gb, Battery : 3000mah, Processor: 2.4Ghz', 'uploads/oppo-r9s-case-back-cover-fashion-luxury-thin.jpg'),
(18, 'Samsang Galaxy J3', '34,000', 'mobile', 'Ram : 3 gb, Rom : 32 gb, Battery : 5000mah, Processor: 2.4Ghz', 'uploads/Samsang Galaxy J3.jpeg'),
(19, 'Samsang Galaxy J7', '43,999', 'mobile', 'Ram : 3 gb, Rom : 32 gb, Battery : 3000mah, Processor: 2.4Ghz', 'uploads/Samsang Galaxy J7.jpeg'),
(20, 'Samsang Galaxy S8', '76,999', 'mobile', 'Ram : 3 gb, Rom : 32 gb, Battery : 3000mah, Processor: 2.4Ghz', 'uploads/Samsung_Galaxy_S8_black_lrg1.png'),
(21, 'S7 samsung', '56,999', 'mobile', 'Ram : 3 gb, Rom : 32 gb, Battery : 3000mah, Processor: 2.4Ghz', 'uploads/SMG S7_edge_102116.jpg'),
(22, 'Vivo y83', '12,999', 'mobile', 'Ram : 3 gb, Rom : 32 gb, Battery : 3000mah, Processor: 2.4Ghz', 'uploads/vivo y83.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders_table`
--

DROP TABLE IF EXISTS `orders_table`;
CREATE TABLE IF NOT EXISTS `orders_table` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_address` varchar(600) NOT NULL,
  `order_disc` varchar(600) NOT NULL,
  `order_pic` varchar(200) NOT NULL,
  `order_total` varchar(20) NOT NULL,
  `order_date` varchar(50) NOT NULL,
  `order_phone` varchar(15) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_table`
--

INSERT INTO `orders_table` (`order_id`, `order_address`, `order_disc`, `order_pic`, `order_total`, `order_date`, `order_phone`) VALUES
(10, 'B-561 sangam vihar new Delhi  S S public School 110080India', 'Apple_MackBook_pro 15<br> Apple The MacBook is a brand of notebook computers', 'uploads/Apple_Macbook_Pro_15_35781448-4070.jpg', '605000', '23/08/2018', '8800181589'),
(7, 'B-561 sangam vihar new Delhi  S S public School 110080India', 'I-phoneX<br> Ram : 4 gb, Rom : 64 gb, Battery : 5000mah, Processor: 2.8Ghz', 'uploads/new_phone.jpg', '158000', '23/08/2018', '8920397458'),
(19, '56-C Saket, South Delhi 1100** Saket Metro Station 110029India', 'Ashus Laptop 23<br> Ashus pro is a brand of laptops and mobiles.', 'uploads/Ashus Laptop E402Ss.jpeg', '102000', '25/08/2018', '337373737373'),
(11, 'B-561 sangam vihar new Delhi  S S public School 110080India', 'OPPO R 15<br> Ram : 3 gb, Rom : 32 gb, Battery : 3000mah, Processor: 2.4Ghz', 'uploads/OPPO R 15.png', '180000', '23/08/2018', '8800181589'),
(12, 'C-3838 sangam vihar New Delhi and many thing Tinu Public School 110090India', 'Apple_MackBook_pro 15<br> Apple The MacBook is a brand of notebook computers', 'uploads/Apple_Macbook_Pro_15_35781448-4070.jpg', '121000', '23/08/2018', '8802890519'),
(16, '56-C Saket, South Delhi 1100** Saket Metro Station 110029India', 'apple_logo_laptop_skin<br> Apple The MacBook is a brand of notebook computers', 'uploads/apple-logo-laptop-skin.jpeg', '58000', '25/08/2018', '337373737373');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `country` varchar(20) NOT NULL,
  `landmark` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `address`, `pincode`, `country`, `landmark`, `phone`) VALUES
(16, 'Ajay yadav', 'ajayyadavexpo@gmail.com', '1234', 'Male', '56-C Saket, South Delhi 1100**', '110029', 'India', 'Saket Metro Station', '337373737373');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
