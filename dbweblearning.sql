-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.22-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6462
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table weblearning.tablecustomer
CREATE TABLE IF NOT EXISTS `tablecustomer` (
  `CUSTID` varchar(50) NOT NULL DEFAULT '',
  `CUSTNAME` varchar(100) DEFAULT NULL,
  `CUSTADDR` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`CUSTID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table weblearning.tablecustomer: ~2 rows (approximately)
DELETE FROM `tablecustomer`;
INSERT INTO `tablecustomer` (`CUSTID`, `CUSTNAME`, `CUSTADDR`) VALUES
	('12345', 'John Doe', 'Sesame St');

-- Dumping structure for table weblearning.tablemovie
CREATE TABLE IF NOT EXISTS `tablemovie` (
  `MOVIEID` varchar(50) NOT NULL DEFAULT '',
  `MOVIENAME` varchar(150) DEFAULT NULL,
  `MOVIEGENRE` varchar(50) DEFAULT NULL,
  `MOVIEPRICE` double(22,0) DEFAULT NULL,
  `MOVIEIMG` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`MOVIEID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table weblearning.tablemovie: ~5 rows (approximately)
DELETE FROM `tablemovie`;
INSERT INTO `tablemovie` (`MOVIEID`, `MOVIENAME`, `MOVIEGENRE`, `MOVIEPRICE`, `MOVIEIMG`) VALUES
	('0540EDC135EFB7246E6F22CBB3E0A4B7', 'Dunkirk', 'War', 25000, NULL),
	('12345', 'Inception', 'Action', 25000, NULL),
	('23456', 'Interstellar', 'Sci Fi', 25000, NULL),
	('A4B2CB1A553A651553883877AAEFBD30', 'Tenet', 'Sci Fi', 25000, NULL),
	('B56B9F684F033ACEE8227AF01ACBAA13', 'The Prestige', 'Thriller', 25000, NULL);

-- Dumping structure for table weblearning.tabletrxdetail
CREATE TABLE IF NOT EXISTS `tabletrxdetail` (
  `TRXHEADERID` varchar(50) NOT NULL DEFAULT '',
  `TRXDTLID` varchar(50) NOT NULL DEFAULT '',
  `TRXMOVID` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`TRXHEADERID`,`TRXDTLID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table weblearning.tabletrxdetail: ~1 rows (approximately)
DELETE FROM `tabletrxdetail`;
INSERT INTO `tabletrxdetail` (`TRXHEADERID`, `TRXDTLID`, `TRXMOVID`) VALUES
	('0001', '01', '12345');

-- Dumping structure for table weblearning.tabletrxheader
CREATE TABLE IF NOT EXISTS `tabletrxheader` (
  `TRXID` varchar(50) NOT NULL DEFAULT '',
  `TRXDATEBEGIN` date DEFAULT NULL,
  `TRXDATEEND` date DEFAULT NULL,
  `CUSTID` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`TRXID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table weblearning.tabletrxheader: ~2 rows (approximately)
DELETE FROM `tabletrxheader`;
INSERT INTO `tabletrxheader` (`TRXID`, `TRXDATEBEGIN`, `TRXDATEEND`, `CUSTID`) VALUES
	('0001', '2022-03-29', '2022-04-29', '12345'),
	('0002', '2022-03-29', '2022-04-29', '23456');

-- Dumping structure for table weblearning.tableuser
CREATE TABLE IF NOT EXISTS `tableuser` (
  `UID` varchar(50) DEFAULT NULL,
  `PSW` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table weblearning.tableuser: ~0 rows (approximately)
DELETE FROM `tableuser`;
INSERT INTO `tableuser` (`UID`, `PSW`) VALUES
	('SUPERUSER', '12345');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
