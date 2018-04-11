-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 21, 2018 at 03:17 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cars`
--

INSERT INTO `tbl_cars` (`id`, `car_pro_id`, `car_company_name`, `car_rcbook`, `car_model`, `car_colour`, `car_model_year`, `car_seat_capacity`, `car_catagory`, `car_policy_expdate`, `car_image`, `car_ac`, `car_at`, `car_music`, `car_regno`, `car_milage`, `car_sts`, `car_charge`) VALUES
(7, '1234', 'jklsjf', 'erer', 'rer', 'ere', 'erer', 3, 'dfdf', 'rere', 'rer', 4, 4, 4, '4', 4, 4, 4),
(8, '1234', 're', 'uploads/images/rentz_4601380.jpg', '1234', 're', '2010', 3, '33', '2018-01-29', 'uploads/images/rentz_7325440.jpg', 0, 0, 1, 're', 33, 0, 33),
(9, '333333333', 'GFDG', 'GFDG', 'DGFG', 'GDFG', 'DGD', 4, 'GDG', 'GDG', 'DGD', 4, 4, 4, '44', 4, 4, 4);

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
(2, 0, 'dafs', 'sdfasf', '', '3333333333333333', '9491155495000', 'uploads/images/rentz_2284241.jpg', 'uploads/images/rentz_2284241.jpg', '', 0),
(4, 1, 'dd', 'dd', '', '4444444444444', '44444444444444444444444444444444444444444444444', 'uploads/images/rentz_2716553.jpg', 'uploads/images/rentz_2716553.jpg', '44444444444444444444', 0),
(13, 0, 'sfs', 'sfsf', 'Bivin', '333', '333333333', 'uploads/images/rentz_3312928.jpg', 'uploads/images/rentz_7910523.jpg', '333', 0),
(14, 0, 'vishal', 'm', 'Address', '99999999', '333333993339', 'uploads/images/rentz_3543213.jpg', 'uploads/images/rentz_7153748.jpg', '44444', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_cars`
--
ALTER TABLE `tbl_cars`
  ADD CONSTRAINT `tbl_cars_ibfk_1` FOREIGN KEY (`car_pro_id`) REFERENCES `tbl_user` (`licenceno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
