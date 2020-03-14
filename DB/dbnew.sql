-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 14, 2020 at 03:01 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(3) NOT NULL AUTO_INCREMENT,
  `admin_fullname` varchar(100) NOT NULL,
  `admin_password` varchar(16) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_fullname`, `admin_password`, `admin_email`) VALUES
(1, 'Ahmad', '1910', 'ahmad@admin.com'),
(2, 'Slameh Yaseen', '159753', 'slameh@admin.com'),
(3, 'as', 'saf', 'sami@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(3) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) NOT NULL,
  `cat_img` text NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_img`) VALUES
(1, 'Royal', 'work-2.png'),
(2, 'Fayrouz', 'work-1.jpg'),
(3, 'Bal Snak', 'work-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `job_id` int(3) NOT NULL AUTO_INCREMENT,
  `job_name` varchar(100) NOT NULL,
  `job_desc` text NOT NULL,
  `job_qual` text NOT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `job_name`, `job_desc`, `job_qual`) VALUES
(1, 'Developer', 'A Java, C#, .Net, C, Sybase and Oracle Software Developer is generally responsible for the development, design and implementation of new or modified software products or ongoing business projects.\r\nTypically sitting within the IT team of a business, a Software Developer will be involved in liaising with the Business Analysts and Development Managers to ensure software projects meet requirements.', 'Software Developer duties and responsibilities of the job\r\nA standard Software Developer job description should include, but not be limited to:\r\nResearching, designing, implementing and managing software programs\r\nTesting and evaluating new programs\r\nIdentifying areas for modification in existing programs and subsequently developing these modifications\r\nWriting and implementing efficient code\r\nDetermining operational practicality\r\nDeveloping quality assurance procedures\r\nDeploying software tools, processes and metrics\r\nMaintaining and upgrading existing systems\r\nTraining users\r\nWorking closely with other developers, UX designers, business and systems analysts\r\nSoftware Developer job qualifications and requirements\r\nA degree and a technical background should be required to gain a Software Developer role. Degrees in the following subjects should be highlighted as particularly advantageous:\r\nComputer Science\r\nComputer Software Engineering\r\nSoftware Programming and Development\r\nEngineering\r\nMathematics\r\nElectronics\r\nPhysics\r\nAs well as formal qualifications, a Software Developer job description should highlight the following qualities:\r\nKnowledge and interest in computer systems and the latest technologies\r\nThe ability to learn new technologies quickly\r\nAn analytical mind\r\nThe ability to communicate complex procedures to other colleagues\r\nCommercial and business awareness\r\nGood communication skills â€“ both written and verbal\r\nAttention to detail and desire to probe further into data\r\nAre you looking for an Software Developer role? View our latest Software Developer jobs here.\r\nLooking for an Software Developer job or IT and Technology specific salary information? Head over to our Software Developer Salary Guide for insights and trends.'),
(11, 'slameh', 'Architects work in the construction industry designing new buildings and the spaces in and around them. They also help restore and conserve old buildings, and develop new ways of using existing buildings. They are involved in construction projects from the earliest stages right through to completion.', 'nfjladskvnkl\r\nsdnv\r\nldnasv\r\nklnva\r\nslvn\r\naslnvads\r\nlkvnslaknvdsklvn\r\nn\r\nlksdnkl\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(3) NOT NULL AUTO_INCREMENT,
  `news_name` varchar(100) NOT NULL,
  `news_date` date NOT NULL,
  `news_img` text NOT NULL,
  `news_desc` varchar(400) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_name`, `news_date`, `news_img`, `news_desc`) VALUES
(1, 'Ahmad', '2020-03-02', 'image_2.jpg', 'image_2'),
(2, 'Admin', '2020-03-04', 'image_1.jpg', 'Why Lead Generation is Key for Business Growth'),
(3, 'Slameh', '2020-03-19', 'image_3.jpg', 'image_3'),
(4, 'Sami', '2020-03-23', 'image_4.jpg', 'image_4'),
(5, 'Alaa', '2020-03-24', 'image_5.jpg', 'image_5'),
(6, 'Admin', '2020-03-18', 'image_6.jpg', 'image_6'),
(7, 'Anas', '2020-03-17', 'image_7.jpg', 'nkjbveww'),
(8, 'Yazan', '2020-03-16', 'image_8.jpg', 'njksdb');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

DROP TABLE IF EXISTS `partners`;
CREATE TABLE IF NOT EXISTS `partners` (
  `par_id` int(3) NOT NULL AUTO_INCREMENT,
  `par_name` varchar(100) NOT NULL,
  `par_logo` text NOT NULL,
  PRIMARY KEY (`par_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`par_id`, `par_name`, `par_logo`) VALUES
(2, 'Jo_Petrol', 'person_9.jpg'),
(3, 'Umniah', 'person_2.png'),
(4, 'Zain', 'person_1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `pro_id` int(3) NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(100) NOT NULL,
  `pro_desc` varchar(400) NOT NULL,
  `pro_img` text NOT NULL,
  `cat_id` int(3) NOT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `pro_desc`, `pro_img`, `cat_id`) VALUES
(1, 'Fayrouz', 'Fayrouz is not your average drink', 'fay2.png', 2),
(2, 'Royal', 'Fayrouz is not your average drink', 'work-8.jpg', 1),
(3, 'Bal Sank', 'Fayrouz is not your average drink', 'work-7.jpg', 3),
(4, 'Fayrouz', 'Fayrouz is not your average drink', 'fay3.jpg', 2),
(5, 'Fayrouz', 'Fayrouz is not your average drink', 'fay1.png', 2),
(6, 'Royal products', 'Fayrouz is not your average drink', 'work-9.jpg', 1),
(7, 'Royal', 'Fayrouz is not your average drink', 'work-4.jpg', 1),
(8, 'Bal Sank', 'Fayrouz is not your average drink', 'work-6.jpg', 3),
(9, 'Bal Sank', 'Fayrouz is not your average drink', 'work-5.jpg', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
