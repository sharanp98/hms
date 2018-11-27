-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.36-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for hms
CREATE DATABASE IF NOT EXISTS `hms` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `hms`;

-- Dumping structure for table hms.login_details
CREATE TABLE IF NOT EXISTS `login_details` (
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table hms.login_details: ~1 rows (approximately)
/*!40000 ALTER TABLE `login_details` DISABLE KEYS */;
REPLACE INTO `login_details` (`Username`, `Password`) VALUES
	('1', '1');
/*!40000 ALTER TABLE `login_details` ENABLE KEYS */;

-- Dumping structure for table hms.login_timestamp
CREATE TABLE IF NOT EXISTS `login_timestamp` (
  `username` varchar(50) DEFAULT NULL,
  `login_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table hms.login_timestamp: ~0 rows (approximately)
/*!40000 ALTER TABLE `login_timestamp` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_timestamp` ENABLE KEYS */;

-- Dumping structure for table hms.patients
CREATE TABLE IF NOT EXISTS `patients` (
  `pno` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(50) DEFAULT '0',
  `proom` varchar(50) DEFAULT '0',
  `phistory` mediumtext,
  `pmonthno` int(11) DEFAULT '0',
  `pmonth` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`pno`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

-- Dumping data for table hms.patients: ~21 rows (approximately)
/*!40000 ALTER TABLE `patients` DISABLE KEYS */;
REPLACE INTO `patients` (`pno`, `pname`, `proom`, `phistory`, `pmonthno`, `pmonth`) VALUES
	(1, 'Santhosh', '101', 'Cough', 1, 'JAN'),
	(2, 'Vivek', '102', 'Fever', 12, 'DEC'),
	(3, 'LMSR', '103', 'Malaria', 12, 'DEC'),
	(4, 'ABCD', '201', NULL, 3, 'MAR'),
	(9, 'Santhosh', '101', 'Cough', 1, 'JAN'),
	(10, 'Santhosh', '101', 'Cough', 1, 'JAN'),
	(11, 'Vivek', '102', 'Fever', 12, 'DEC'),
	(15, 'Vivek', '102', 'Fever', 12, 'DEC'),
	(16, 'Vivek', '102', 'Fever', 12, 'DEC'),
	(17, 'Vivek', '102', 'Fever', 12, 'DEC'),
	(20, 'Santhosh', '101', 'Cough', 1, 'JAN'),
	(23, 'Sharan', '201', 'ads', 2, 'FEB'),
	(24, '0ASD', '132', NULL, 4, 'APR'),
	(25, 'Sharan', '201', 'ads', 2, 'FEB'),
	(26, 'Sharan', '201', 'ads', 2, 'FEB'),
	(27, 'ABCD', '201', NULL, 3, 'MAR'),
	(28, '0ASD', '132', NULL, 4, 'APR'),
	(29, '0ASD', '132', NULL, 4, 'APR'),
	(30, '0ASD', '132', NULL, 4, 'APR'),
	(31, '0ASD', '132', NULL, 4, 'APR'),
	(32, '0ASD', '132', NULL, 4, 'APR');
/*!40000 ALTER TABLE `patients` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
