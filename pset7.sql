--
-- Database: `pset7`
--

CREATE DATABASE IF NOT EXISTS `ece651`;
USE `ece651`;

-- --------------------------------------------------------

--
-- Table structure for table `cust`
--

CREATE TABLE IF NOT EXISTS `cust` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  PRIMARY KEY (`id`), -- can't be null
  UNIQUE KEY `username` (`username`) -- the username must be unique
) ENGINE=InnoDB;

-- Table structure for table `custaurant`
CREATE TABLE IF NOT EXISTS `cust` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `status` boolean NOT NULL,
  PRIMARY KEY (`id`), -- can't be null
  UNIQUE KEY `username` (`username`) -- the username must be unique
) ENGINE=InnoDB;
--
-- Dumping data for table `cust`
--

INSERT INTO `cust` (username, hash) VALUES('andi', '$2y$10$c.e4DK7pVyLT.stmHxgAleWq4yViMmkwKz3x8XCo4b/u3r8g5OTnS');
INSERT INTO `cust` (username, hash) VALUES('caesar', '$2y$10$0p2dlmu6HnhzEMf9UaUIfuaQP7tFVDMxgFcVs0irhGqhOxt6hJFaa');
INSERT INTO `cust` (username, hash) VALUES('eli', '$2y$10$COO6EnTVrCPCEddZyWeEJeH9qPCwPkCS0jJpusNiru.XpRN6Jf7HW');
INSERT INTO `cust` (username, hash) VALUES('hdan', '$2y$10$o9a4ZoHqVkVHSno6j.k34.wC.qzgeQTBHiwa3rpnLq7j2PlPJHo1G');
INSERT INTO `cust` (username, hash) VALUES('jason', '$2y$10$ci2zwcWLJmSSqyhCnHKUF.AjoysFMvlIb1w4zfmCS7/WaOrmBnLNe');
INSERT INTO `cust` (username, hash) VALUES('john', '$2y$10$dy.LVhWgoxIQHAgfCStWietGdJCPjnNrxKNRs5twGcMrQvAPPIxSy');
INSERT INTO `cust` (username, hash) VALUES('levatich', '$2y$10$fBfk7L/QFiplffZdo6etM.096pt4Oyz2imLSp5s8HUAykdLXaz6MK');
INSERT INTO `cust` (username, hash) VALUES('rob', '$2y$10$3pRWcBbGdAdzdDiVVybKSeFq6C50g80zyPRAxcsh2t5UnwAkG.I.2');
INSERT INTO `cust` (username, hash) VALUES('skroob', '$2y$10$395b7wODm.o2N7W5UZSXXuXwrC0OtFB17w4VjPnCIn/nvv9e4XUQK');
INSERT INTO `cust` (username, hash) VALUES('zamyla', '$2y$10$UOaRF0LGOaeHG4oaEkfO4O7vfI34B1W23WqHr9zCpXL68hfQsS3/e');
