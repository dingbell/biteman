-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2016-11-21 00:38:06
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
-- 表的结构 `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `name` varchar(255) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `restid` int(10) NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=303 ;

--
-- 转存表中的数据 `food`
--

INSERT INTO `food` (`name`, `id`, `restid`, `price`, `picture`) VALUES
('Sushi', 101, 1, 5.99, 'http://foodiefruitie.com/img/gallery/7.jpg'),
('Pulled Noodles', 102, 1, 8.99, 'http://foodiefruitie.com/img/gallery/2.jpg'),
('Pulled Noodles ', 201, 2, 8.99, 'http://newyork.seriouseats.com/assets_c/2011/06/20110604-hand-pulled-noodles-primary-thumb-625xauto-166194.jpg'),
('Oreo Milk Tea', 301, 3, 4.99, 'http://i.telegraph.co.uk/multimedia/archive/03284/oreo-mug-cake_3284058k.jpg'),
('Mint Italian Soda', 302, 3, 5.49, 'https://s3-ap-southeast-1.amazonaws.com/photo.wongnai.com/photos/2014/10/02/4337c5cd00ea419dba11646d1d26e374.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
