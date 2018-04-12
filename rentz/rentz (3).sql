-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 12, 2018 at 01:25 PM
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
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`, `status`) VALUES
(1, 'vishal', 'vishal', '0');

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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`book_id`, `cars_id`, `cust_id`, `book_date`, `comments`, `status`) VALUES
(24, 20, '456', '2018-04-12 09:05:34', '', 0),
(25, 19, '456', '2018-04-12 09:10:19', '', 0),
(26, 21, '456', '2018-04-12 09:23:09', '', 0),
(27, 22, '123', '2018-04-12 09:35:45', '', 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cars`
--

INSERT INTO `tbl_cars` (`id`, `car_pro_id`, `car_company_name`, `car_rcbook`, `car_model`, `car_colour`, `car_model_year`, `car_seat_capacity`, `car_catagory`, `car_policy_expdate`, `car_image`, `car_ac`, `car_at`, `car_music`, `car_regno`, `car_milage`, `car_sts`, `car_charge`) VALUES
(19, '155495', 'Ritz', 'uploads/images/rentz_4233460.jpg', 'Maruti Suzuki', 'Red', '', 5, 'racing', '2018-04-26', 'uploads/images/rentz_6103028.jpg', 0, 0, 1, '101010', 20, 1, 20),
(20, '955495', 'Benz', 'uploads/images/rentz_4770936.jpg', 'Honda', 'Blue', '2011', 8, 'official', '2018-04-20', 'uploads/images/rentz_6919312.jpg', 1, 1, 1, '101020', 50, 0, 500),
(21, '155495', 'Porsche', 'uploads/images/rentz_3387330.jpg', 'Porsche', 'Red', '2011', 4, 'rece', '2018-04-27', 'uploads/images/rentz_7440735.jpg', 1, 1, 1, '101020', 3, 1, 33),
(22, '955495', 'Maruthi', 'uploads/images/rentz_3104554.jpg', 'Fiat', 'BlueBird', '2014', 10, '10', '2018-04-27', 'uploads/images/rentz_7083497.jpg', 1, 1, 1, '101010', 1, 1, 10);

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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `category`, `firstname`, `lastname`, `address`, `mobno`, `licenceno`, `licencephoto`, `idphoto`, `password`, `status`) VALUES
(18, 0, 'Bivin', 'Vinod', 'KANIYAMPOIKAYIL(H),\r\nCHALICITY', '9447155495', '155495', 'uploads/images/rentz_3507142.jpg', 'uploads/images/rentz_7432374.jpg', '155495', 0),
(19, 0, 'Bivin', 'Vinod', 'KANIYAMPOIKAYIL(H),\r\nCHALICITY', '9447155495', '955495', 'uploads/images/rentz_4132508.jpg', 'uploads/images/rentz_6625611.jpg', '955495', 0),
(20, 1, 'vishal', 'Mathew', 'Vishal@vishalHOuse', '996199619961', '456', 'uploads/images/rentz_4643372.jpg', 'uploads/images/rentz_7816651.jpg', '456', 0),
(21, 1, 'Rubin', 'Rubin', 'Rubin@RubinHome', '9999999999', '123', 'uploads/images/rentz_4473084.jpg', 'uploads/images/rentz_6086304.jpg', '123', 0);

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
