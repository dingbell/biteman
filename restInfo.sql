-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2016-11-20 22:28:29
-- 服务器版本: 5.5.50-0ubuntu0.14.04.1
-- PHP 版本: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `pset7`
--

-- --------------------------------------------------------

--
-- 表的结构 `restInfo`
--

CREATE TABLE IF NOT EXISTS `restInfo` (
  `Name` varchar(255) NOT NULL,
  `id` int(10) NOT NULL,
  `Add1` varchar(255) NOT NULL,
  `Add2` varchar(255) NOT NULL,
  `Region` varchar(255) NOT NULL,
  `Prov` varchar(255) NOT NULL,
  `Postcode` varchar(225) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `restInfo`
--

INSERT INTO `restInfo` (`Name`, `id`, `Add1`, `Add2`, `Region`, `Prov`, `Postcode`, `latitude`, `longitude`) VALUES
('Mr Paninos Beijing House', 2, '106 University Ave W #1', '', 'Waterloo', 'Ontario', 'N2L3E9', 0, 0),
('Mongolian Grill', 3, '170 University Ave W', '', 'Waterloo', 'Ontario', 'N2L3E9', 0, 0),
('Chen''s Restaurant', 4, '170 University Ave W ', '', 'Waterloo', 'Ontario', 'N2L3G1', 0, 0),
('Seoul Soul', 5, '170 University Ave W', '', 'Waterloo', 'Ontario', 'N2L3E9', 43.4726, -80.5389),
('Lotus Barbecue House', 6, '150 University Ave W', '', 'Waterloo', 'Ontario', 'N2L6J3', 0, 0),
('Itamae Sushi', 7, '253 King St N', '', 'Waterloo', 'Ontario', 'N2J2Y8', 0, 0),
('168 Sushi Asian Buffet Bar', 8, '50 Westmount Rd N D4-5', '', 'Waterloo', 'Ontario', 'N2L6N9', 0, 0),
('Biteman', 9, '110 Policeman road', 'Firestation Avenue', 'Waterloo', 'Ontario', 'N2L3G1', 43.4718, -80.5408);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
