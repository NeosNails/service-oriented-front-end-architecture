-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.5.50 - MySQL Community Server (GPL)
-- Server OS:                    Linux
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table sofea.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_info_id` int(11) NOT NULL DEFAULT '0',
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `user_info_id` (`user_info_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Dumping data for table sofea.user: ~10 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `user_info_id`, `username`, `password`, `email`, `role`, `status`) VALUES
	(1, 1, 'ikmalhanafi123', '81dc9bdb52d04dc20036dbd8313ed055', 'ikmal@gmail.com', 'Student', 1),
	(2, 2, 'fakhri123', '43f6d2d917a20a8e2a11514f7bdf794b', 'fakhri@djati.com.my', 'student', 1),
	(6, 6, 'faakhri1', '43f6d2d917a20a8e2a11514f7bdf794b', 'fakhri@gmails.com', 'student', 1),
	(7, 7, 'fakhri1', '43f6d2d917a20a8e2a11514f7bdf794b', 'fakhri@gmail.com', 'student', 1),
	(8, 8, 'adf', 'c8bb30c4d7b80e777c3cf5bea3a8b99f', 'afd', 'gadg', 1),
	(9, 9, 'adf', 'c8bb30c4d7b80e777c3cf5bea3a8b99f', 'afdd', 'gadg', 1),
	(10, 10, 'adf', 'c8bb30c4d7b80e777c3cf5bea3a8b99f', 'afddd', 'gadg', 1),
	(11, 11, 'adf', 'c8bb30c4d7b80e777c3cf5bea3a8b99f', 'afddds', 'gadg', 1),
	(12, 12, 'luqman12', '5f4dcc3b5aa765d61d8327deb882cf99', 'luqman@gmail.com', 'Parent', 1),
	(13, 13, 'kamal12', 'e10adc3949ba59abbe56e057f20f883e', 'kamal@gmail.com', 'Student', 1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;


-- Dumping structure for table sofea.user_info
CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) DEFAULT NULL,
  `screenname` varchar(50) DEFAULT NULL,
  `gender` char(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `school_name` varchar(50) DEFAULT NULL,
  `school_level` varchar(50) DEFAULT NULL,
  `class_name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_no` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Dumping data for table sofea.user_info: ~10 rows (approximately)
/*!40000 ALTER TABLE `user_info` DISABLE KEYS */;
INSERT INTO `user_info` (`id`, `fullname`, `screenname`, `gender`, `age`, `school_name`, `school_level`, `class_name`, `address`, `postcode`, `city`, `state`, `email`, `phone_no`) VALUES
	(1, 'Ikmal Hanafi', 'Mohd Fahmi', 'Male', 16, 'SMK Nilai', 'Form 3', '3 Saksama', 'No 3, Jalan Nilai 3/2, Taman Nilai', 71800, 'Nilai', 'Negeri Sembilan', 'ikmal@gmail.com', '0123312213'),
	(2, 'mohd fakhri', 'fakhri', 'male', 13, 'SMK Kerian', 'Form 1', '1 Cekal', 'No 3, Jalan kuning', 23141, 'semenyih', 'selangor', 'fakhri@djati.com.my', '0193312213'),
	(6, 'mohd faakhri', 'fakhri', 'male', 13, 'SMK Kerian', 'Form 1', '1 Cekal', 'No 3, Jalan kuning', 23141, 'semenyih', 'selangor', 'fakhri@gmails.com', '0193312213'),
	(7, 'mohd fakhri', 'fakhri', 'male', 13, 'SMK Kerian', 'Form 1', '1 Cekal', 'No 3, Jalan kuning', 23141, 'semenyih', 'selangor', 'fakhri@gmail.com', '0193312213'),
	(8, 'adf', 'asdg', 'sadfg', 13, 'agf', 'afdg', 'adfg', 'afd', 13424, 'afdg', 'adfg', 'afd', 'afg'),
	(9, 'adf', 'asdg', 'sadfg', 13, 'agf', 'afdg', 'adfg', 'afd', 13424, 'afdg', 'adfg', 'afdd', 'afg'),
	(10, 'adf', 'asdg', 'sadfg', 13, 'agf', 'afdg', 'adfg', 'afd', 13424, 'afdg', 'adfg', 'afddd', 'afg'),
	(11, 'adf', 'asdg', 'sadfg', 13, 'agf', 'afdg', 'adfg', 'afd', 13424, 'afdg', 'adfg', 'afddds', 'afg'),
	(12, 'Luqman Hakim Bin Jamal', 'Luqman', 'Male', 14, 'SMK Kerian', 'Form 2', '2 Cekal', 'No 3, Jalan Kenanga, Taman Kenanga,', 78100, 'Seremban', 'Negeri Sembilan', 'luqman@gmail.com', '0122213312'),
	(13, 'Ahmad Kamal', 'Kamal', 'Male', 12, 'SK Kenanga', 'Standard 6', '6 Cempaka', 'No 3, Jalan Kenanga, Taman Kenanga', 71800, 'Seremban', 'Negeri Sembilan', 'kamal@gmail.com', '0122213313');
/*!40000 ALTER TABLE `user_info` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
