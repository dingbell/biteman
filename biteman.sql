-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2016-11-15 01:55:52
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
CREATE DATABASE IF NOT EXISTS `biteman` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `biteman`;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

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
(13, 'smpatw', '$2y$10$wSNao1kxuR2IEgFvDdQwYe12DZBYPs3.IBcLjxc3OKFK0yPq0PxV.', 1);

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
(11, '123', '$2y$10$WD7SglSCPO7W5SktbpNAbuPHNqgFSDzJ0Jk7APxTMqnIgpLl4j.w.', 0),
(12, 'smpatw', '$2y$10$g8R.YGMJXi1htZfc28I61OAfnnkdUd90zWWccs7R3DvSmMYw/npiu', 0),
(13, 'tony', '$2y$10$qZ3cQPdSu1vt/pVfdKx/E.8.t4FQcsb/CoJbvrS2b3Ar0xKbm0rei', 0),
(14, 'tony12', '$2y$10$lzIaP5Z17ysVhxuOzcfhUueMDmN.zGNTEY1Db8dO41EGc3kdNGaF6', 0);

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
  `Prov` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `restInfo`
--

INSERT INTO `restInfo` (`Name`, `id`, `Add1`, `Add2`, `Region`, `Prov`) VALUES
('Biteman', 9, '110 Policeman road', 'Firestation Avenue', 'Waterloo', 'Canada'),
('', 14, '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
