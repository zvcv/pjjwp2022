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

-- Dumping structure for table sipbang.detilpenugasan
CREATE TABLE IF NOT EXISTS `detilpenugasan` (
  `IDDETIAL` varchar(50) DEFAULT NULL,
  `IDPENUGASAN` varchar(50) DEFAULT NULL,
  `NIP` varchar(50) DEFAULT NULL,
  `ISKETUA` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sipbang.detilpenugasan: ~0 rows (approximately)
DELETE FROM `detilpenugasan`;

-- Dumping structure for table sipbang.paketpengadaan
CREATE TABLE IF NOT EXISTS `paketpengadaan` (
  `IDPAKET` varchar(50) DEFAULT NULL,
  `NAMAPAKET` varchar(300) DEFAULT NULL,
  `JADWALAWAL` date DEFAULT NULL,
  `JADWALAKHIR` date DEFAULT NULL,
  `PAGU` double DEFAULT NULL,
  `METODEPENGADAAN` varchar(300) DEFAULT NULL,
  `STATUS` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sipbang.paketpengadaan: ~0 rows (approximately)
DELETE FROM `paketpengadaan`;

-- Dumping structure for table sipbang.pengguna
CREATE TABLE IF NOT EXISTS `pengguna` (
  `USERID` varchar(50) NOT NULL DEFAULT '',
  `NIP` varchar(18) DEFAULT NULL,
  `NAMA` varchar(50) DEFAULT NULL,
  `JABATAN` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`USERID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sipbang.pengguna: ~8 rows (approximately)
DELETE FROM `pengguna`;
INSERT INTO `pengguna` (`USERID`, `NIP`, `NAMA`, `JABATAN`) VALUES
	('035149B9DC43228F30B05E8C028F1761', '194508171952102001', 'Mrs Sippi', 'Scuba Diver'),
	('0B7CAC45A3C6664EDB5BC0E3AE35AA7B', '204801102068111001', 'John Doe', 'Professional Procrastinator'),
	('11111', '199507252016121001', 'Joyodipuro II', 'Fungsional Arsiparis'),
	('22222', '190908232000121001', 'Richardson', 'Fungsional Notulis'),
	('33333', '199909212012121001', 'Vladimir', 'Fungsional Strategis'),
	('44444', '200012212020121001', 'Putout', 'Fungsional Oportunis'),
	('7ACB5E270BACC90738288318A0A9B81F', '000000000000000000', 'Mr Rius', 'Secret Admirer'),
	('DADE415E13320A4CB32D725C173D838E', '123456789101112131', 'Pak Otak', 'Tidak Fungsional');

-- Dumping structure for table sipbang.penugasan
CREATE TABLE IF NOT EXISTS `penugasan` (
  `IDPENUGASAN` varchar(50) DEFAULT NULL,
  `IDPAKET` varchar(50) DEFAULT NULL,
  `NAMAKEPANITIAAN` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sipbang.penugasan: ~0 rows (approximately)
DELETE FROM `penugasan`;

-- Dumping structure for table sipbang.tableuser
CREATE TABLE IF NOT EXISTS `tableuser` (
  `uid` varchar(50) DEFAULT NULL,
  `psw` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table sipbang.tableuser: ~2 rows (approximately)
DELETE FROM `tableuser`;
INSERT INTO `tableuser` (`uid`, `psw`) VALUES
	('john doe', '12345'),
	('superuser', '12345');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
