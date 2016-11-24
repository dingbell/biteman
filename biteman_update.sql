-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2016-11-24 00:53:19
-- 服务器版本: 5.5.50-0ubuntu0.14.04.1
-- PHP 版本: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `biteman`
--

-- --------------------------------------------------------

--
-- 表的结构 `cust`
--

CREATE TABLE IF NOT EXISTS `cust` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `cust`
--

INSERT INTO `cust` (`id`, `username`, `hash`, `status`) VALUES
(1, 'andi', '$2y$10$c.e4DK7pVyLT.stmHxgAleWq4yViMmkwKz3x8XCo4b/u3r8g5OTnS', 0),
(2, 'caesar', '$2y$10$0p2dlmu6HnhzEMf9UaUIfuaQP7tFVDMxgFcVs0irhGqhOxt6hJFaa', 0),
(3, 'eli', '$2y$10$COO6EnTVrCPCEddZyWeEJeH9qPCwPkCS0jJpusNiru.XpRN6Jf7HW', 0),
(4, 'hdan', '$2y$10$o9a4ZoHqVkVHSno6j.k34.wC.qzgeQTBHiwa3rpnLq7j2PlPJHo1G', 0),
(5, 'jason', '$2y$10$ci2zwcWLJmSSqyhCnHKUF.AjoysFMvlIb1w4zfmCS7/WaOrmBnLNe', 0),
(6, 'john', '$2y$10$dy.LVhWgoxIQHAgfCStWietGdJCPjnNrxKNRs5twGcMrQvAPPIxSy', 0),
(7, 'levatich', '$2y$10$fBfk7L/QFiplffZdo6etM.096pt4Oyz2imLSp5s8HUAykdLXaz6MK', 0),
(8, 'rob', '$2y$10$3pRWcBbGdAdzdDiVVybKSeFq6C50g80zyPRAxcsh2t5UnwAkG.I.2', 0),
(9, 'skroob', '$2y$10$395b7wODm.o2N7W5UZSXXuXwrC0OtFB17w4VjPnCIn/nvv9e4XUQK', 1),
(10, 'zamyla', '$2y$10$UOaRF0LGOaeHG4oaEkfO4O7vfI34B1W23WqHr9zCpXL68hfQsS3/e', 0),
(11, '1234', '$2y$10$7CgJN2c2MOS6n.mmvnFiVeg.3WJxz828S0DnFdz4fdeio971rMr06', 1),
(13, 'smpatw', '$2y$10$wSNao1kxuR2IEgFvDdQwYe12DZBYPs3.IBcLjxc3OKFK0yPq0PxV.', 1),
(14, 'tony12', '$2y$10$2cMeevQAAM2k0CPTwp6h0uFsgsEBpDZ8xQ5otsyXnbbVL8JAPdATS', 1),
(15, 'yu', '$2y$10$G510fjLCxCteIhqIfPEh5.gH/meTFpkCTMMp4G1L4wLV7MpxJkcIW', 1),
(16, 'test', '$2y$10$nDQPAElZy3GR/sItkNf0fOVX/TveM71mjAnXobw4ElJsh89mU1dZu', 1),
(17, 'test1', '$2y$10$/aTsVcOch5xTNkeoa7NwauEKO0OxUAJYKdwFKFyUduq0FVPkdEaT.', 1);

-- --------------------------------------------------------

--
-- 表的结构 `custInfo`
--

CREATE TABLE IF NOT EXISTS `custInfo` (
  `Name` varchar(255) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `phone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `custInfo`
--

INSERT INTO `custInfo` (`Name`, `id`, `phone`) VALUES
('biteman', 9, '22222222');

-- --------------------------------------------------------

--
-- 表的结构 `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `name` varchar(255) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `restid` int(10) NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=304 ;

--
-- 转存表中的数据 `food`
--

INSERT INTO `food` (`name`, `id`, `restid`, `price`, `picture`) VALUES
('Sushi', 101, 1, 5.99, 'http://foodiefruitie.com/img/gallery/7.jpg'),
('Pulled Noodles ', 201, 2, 8.99, 'http://newyork.seriouseats.com/assets_c/2011/06/20110604-hand-pulled-noodles-primary-thumb-625xauto-166194.jpg'),
('Oreo Milk Tea', 301, 3, 4.99, 'http://i.telegraph.co.uk/multimedia/archive/03284/oreo-mug-cake_3284058k.jpg'),
('Mint Italian Soda', 302, 3, 5.49, 'https://s3-ap-southeast-1.amazonaws.com/photo.wongnai.com/photos/2014/10/02/4337c5cd00ea419dba11646d1d26e374.jpg'),
('1234', 303, 1, 123, 'http://foodiefruitie.com/img/gallery/7.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `orderInfo`
--

CREATE TABLE IF NOT EXISTS `orderInfo` (
  `cust_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `food_id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `barcode` text NOT NULL,
  PRIMARY KEY (`order_id`),
  UNIQUE KEY `order_id` (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `orderInfo`
--

INSERT INTO `orderInfo` (`cust_id`, `quantity`, `food_id`, `order_id`, `status`, `barcode`) VALUES
(13, 2, 101, 2, 0, '2016112353569998'),
(13, 4, 102, 3, 0, '2016112356505056'),
(13, 4, 102, 4, 0, '2016112350981005'),
(13, 3, 101, 5, 0, '2016112397100101'),
(9, 3, 102, 6, 0, '2016112397974855'),
(9, 3, 101, 7, 0, '2016112450519798'),
(9, 3, 301, 8, 0, '2016112410097551'),
(9, 4, 101, 9, 1, '2016112448575348');

-- --------------------------------------------------------

--
-- 表的结构 `rest`
--

CREATE TABLE IF NOT EXISTS `rest` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `rest`
--

INSERT INTO `rest` (`id`, `username`, `hash`, `status`) VALUES
(1, 'skroob', '$2y$10$395b7wODm.o2N7W5UZSXXuXwrC0OtFB17w4VjPnCIn/nvv9e4XUQK', 1),
(2, 'caesar', '$2y$10$0p2dlmu6HnhzEMf9UaUIfuaQP7tFVDMxgFcVs0irhGqhOxt6hJFaa', 0),
(3, 'eli', '$2y$10$COO6EnTVrCPCEddZyWeEJeH9qPCwPkCS0jJpusNiru.XpRN6Jf7HW', 0),
(4, 'hdan', '$2y$10$o9a4ZoHqVkVHSno6j.k34.wC.qzgeQTBHiwa3rpnLq7j2PlPJHo1G', 0),
(5, 'jason', '$2y$10$ci2zwcWLJmSSqyhCnHKUF.AjoysFMvlIb1w4zfmCS7/WaOrmBnLNe', 0),
(6, 'john', '$2y$10$dy.LVhWgoxIQHAgfCStWietGdJCPjnNrxKNRs5twGcMrQvAPPIxSy', 0),
(7, 'levatich', '$2y$10$fBfk7L/QFiplffZdo6etM.096pt4Oyz2imLSp5s8HUAykdLXaz6MK', 0),
(8, 'rob', '$2y$10$3pRWcBbGdAdzdDiVVybKSeFq6C50g80zyPRAxcsh2t5UnwAkG.I.2', 0),
(10, 'zamyla', '$2y$10$UOaRF0LGOaeHG4oaEkfO4O7vfI34B1W23WqHr9zCpXL68hfQsS3/e', 0),
(11, '123', '$2y$10$WD7SglSCPO7W5SktbpNAbuPHNqgFSDzJ0Jk7APxTMqnIgpLl4j.w.', 0),
(12, 'smpatw', '$2y$10$g8R.YGMJXi1htZfc28I61OAfnnkdUd90zWWccs7R3DvSmMYw/npiu', 0),
(13, 'tony', '$2y$10$qZ3cQPdSu1vt/pVfdKx/E.8.t4FQcsb/CoJbvrS2b3Ar0xKbm0rei', 0),
(14, 'tony12', '$2y$10$lzIaP5Z17ysVhxuOzcfhUueMDmN.zGNTEY1Db8dO41EGc3kdNGaF6', 0),
(15, 'andi', '$2y$10$c.e4DK7pVyLT.stmHxgAleWq4yViMmkwKz3x8XCo4b/u3r8g5OTnS', 0);

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
('Biteman', 1, '110 Policeman road', 'Firestation Avenue', 'Waterloo', 'Ontario', 'N2L3G1', 0, 0),
('Mr Paninos Beijing House', 2, '106 University Ave W #1', '', 'Waterloo', 'Ontario', 'N2L3E9', 0, 0),
('Mongolian Grill', 3, '170 University Ave W', '', 'Waterloo', 'Ontario', 'N2L3E9', 0, 0),
('Chen''s Restaurant', 4, '170 University Ave W ', '', 'Waterloo', 'Ontario', 'N2L3G1', 0, 0),
('Seoul Soul', 5, '170 University Ave W', '', 'Waterloo', 'Ontario', 'N2L3E9', 43.4726, -80.5389),
('Lotus Barbecue House', 6, '150 University Ave W', '', 'Waterloo', 'Ontario', 'N2L6J3', 0, 0),
('Itamae Sushi', 7, '253 King St N', '', 'Waterloo', 'Ontario', 'N2J2Y8', 0, 0),
('168 Sushi Asian Buffet Bar', 8, '50 Westmount Rd N D4-5', '', 'Waterloo', 'Ontario', 'N2L6N9', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
