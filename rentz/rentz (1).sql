-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 25, 2018 at 06:35 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentz`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

DROP TABLE IF EXISTS `tbl_booking`;
CREATE TABLE IF NOT EXISTS `tbl_booking` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `cars_id` int(11) NOT NULL,
  `cust_id` varchar(256) NOT NULL,
  `book_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comments` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`book_id`),
  KEY `cars_id` (`cars_id`),
  KEY `cust_id` (`cust_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`book_id`, `cars_id`, `cust_id`, `book_date`, `comments`, `status`) VALUES
(5, 16, '1234', '2018-03-25 18:31:12', '', 0),
(6, 14, '1234', '2018-03-25 18:32:59', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cars`
--

DROP TABLE IF EXISTS `tbl_cars`;
CREATE TABLE IF NOT EXISTS `tbl_cars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `car_pro_id` varchar(250) NOT NULL,
  `car_company_name` varchar(256) NOT NULL,
  `car_rcbook` varchar(256) NOT NULL,
  `car_model` varchar(256) NOT NULL,
  `car_colour` varchar(100) NOT NULL,
  `car_model_year` varchar(100) NOT NULL,
  `car_seat_capacity` int(11) NOT NULL,
  `car_catagory` varchar(100) NOT NULL,
  `car_policy_expdate` varchar(100) NOT NULL,
  `car_image` varchar(256) NOT NULL,
  `car_ac` tinyint(1) NOT NULL,
  `car_at` tinyint(1) NOT NULL,
  `car_music` tinyint(1) NOT NULL,
  `car_regno` varchar(256) NOT NULL,
  `car_milage` int(11) NOT NULL,
  `car_sts` int(11) NOT NULL,
  `car_charge` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `car_pro_id` (`car_pro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cars`
--

INSERT INTO `tbl_cars` (`id`, `car_pro_id`, `car_company_name`, `car_rcbook`, `car_model`, `car_colour`, `car_model_year`, `car_seat_capacity`, `car_catagory`, `car_policy_expdate`, `car_image`, `car_ac`, `car_at`, `car_music`, `car_regno`, `car_milage`, `car_sts`, `car_charge`) VALUES
(9, '333333333', 'GFDG', 'GFDG', 'DGFG', 'GDFG', 'DGD', 4, 'GDG', 'GDG', 'DGD', 4, 4, 4, '44', 4, 4, 4),
(10, '456', 'rere', 'uploads/images/rentz_4654236.jpg', 'model 1', 'rerere', '2011', 4, '4', '2018-01-06', 'uploads/images/rentz_6507691.jpg', 0, 0, 1, 'ererer', 4, 0, 4),
(14, '1234', 're', 'uploads/images/rentz_3796998.jpg', '1234', 're', '2014', 3, '3', '2018-02-16', 'uploads/images/rentz_6442200.jpg', 0, 0, 1, 're', 3, 0, 3),
(15, '1234', 'Maruthi', 'uploads/images/rentz_3401001.jpg', 'Jeep', 'Red', '2011', 1, '3', '2018-03-23', 'uploads/images/rentz_7321595.jpg', 0, 0, 0, '123321', 33, 0, 33),
(16, '1234', 'Maruthi', 'uploads/images/rentz_4519043.jpg', 'Jeep', 'Red', '2011', 1, '3', '2018-03-23', 'uploads/images/rentz_7650086.jpg', 0, 0, 0, '123321', 33, 0, 33);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) NOT NULL,
  `firstname` varchar(256) NOT NULL,
  `lastname` varchar(256) NOT NULL,
  `address` text NOT NULL,
  `mobno` varchar(256) NOT NULL,
  `licenceno` varchar(256) NOT NULL,
  `licencephoto` varchar(256) NOT NULL,
  `idphoto` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `licenceno_2` (`licenceno`),
  KEY `licenceno` (`licenceno`),
  KEY `licenceno_3` (`licenceno`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `category`, `firstname`, `lastname`, `address`, `mobno`, `licenceno`, `licencephoto`, `idphoto`, `password`, `status`) VALUES
(1, 0, 'faaf', 'fdsa', 'dfadsff', '8888', '1234', 'cxcvcxv', 'vvsdxvxcv', '1234', 0),
(2, 1, 'dafs', 'sdfasf', '', '3333333333333333', '456', 'uploads/images/rentz_2284241.jpg', 'uploads/images/rentz_2284241.jpg', '456', 0),
(4, 1, 'dd', 'dd', '', '4444444444444', '44444444444444444444444444444444444444444444444', 'uploads/images/rentz_2716553.jpg', 'uploads/images/rentz_2716553.jpg', '44444444444444444444', 0),
(13, 0, 'sfs', 'sfsf', 'Bivin', '333', '333333333', 'uploads/images/rentz_3312928.jpg', 'uploads/images/rentz_7910523.jpg', '333', 0),
(14, 0, 'vishal', 'm', 'Address', '99999999', '333333993339', 'uploads/images/rentz_3543213.jpg', 'uploads/images/rentz_7153748.jpg', '44444', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD CONSTRAINT `tbl_booking_ibfk_1` FOREIGN KEY (`cars_id`) REFERENCES `tbl_cars` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_booking_ibfk_2` FOREIGN KEY (`cust_id`) REFERENCES `tbl_user` (`licenceno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_cars`
--
ALTER TABLE `tbl_cars`
  ADD CONSTRAINT `tbl_cars_ibfk_1` FOREIGN KEY (`car_pro_id`) REFERENCES `tbl_user` (`licenceno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
