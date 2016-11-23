-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2016-11-21 00:38:22
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
  `index` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `restInfo`
--

INSERT INTO `restInfo` (`Name`, `id`, `Add1`, `Add2`, `Region`, `Prov`, `index`) VALUES
('Foodie Fruitie', 1, '203 Lester St', 'Unit 7', 'Waterloo', 'ON', 1),
('Sogo', 2, '170 University Ave W', '', 'Waterloo', 'On', 2),
('Sugar Marmalade', 3, '203 Lester Street', 'Unit 5', 'Waterloo', 'ON', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
