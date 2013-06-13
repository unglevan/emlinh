-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 13, 2013 at 09:37 AM
-- Server version: 5.1.68-cll
-- PHP Version: 5.3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `garmentv_0`
--

-- --------------------------------------------------------

--
-- Table structure for table `Catalog`
--

CREATE TABLE IF NOT EXISTS `Catalog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NameVN` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `NameEN` varchar(50) NOT NULL,
  `SubNameVN` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SubNameEn` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `Catalog`
--

INSERT INTO `Catalog` (`id`, `NameVN`, `NameEN`, `SubNameVN`, `SubNameEn`) VALUES
(1, 'Nam', 'Man', 'Áo Phông', 'T-Shirts'),
(2, 'Nữ', 'Woman', 'Áo Phông', 'T-Shirts'),
(3, 'Bé Trai', 'Boy', 'Áo Phông', 'T-Shirts'),
(4, 'Bé Trai', 'Boy', 'Quần Jeans', 'Jeans');

-- --------------------------------------------------------

--
-- Table structure for table `customerEmail`
--

CREATE TABLE IF NOT EXISTS `customerEmail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `File` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Color` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `ColorEN` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Kind` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ProductID` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `File`, `Color`, `ColorEN`, `Kind`, `ProductID`) VALUES
(1, '../Image/Product/83439520_02.jpg', 'đen', 'black', 'body', 1),
(2, '../Image/Product/83439761_02_B.jpg', 'đen', 'black', 'nobody', 1),
(3, '../Image/Product/83439520_02_R.jpg', 'đen', 'black', 'other', 1),
(4, '/Image/Product/83439761_0Q.jpg', 'đỏ', 'red', 'body', 2),
(5, '/Image/Product/83439520_ND.jpg', 'da', 'Da', 'body', 3);

-- --------------------------------------------------------

--
-- Table structure for table `Location`
--

CREATE TABLE IF NOT EXISTS `Location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nameVN` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nameEN` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Location`
--

INSERT INTO `Location` (`id`, `nameVN`, `nameEN`) VALUES
(1, 'Hà Nội', 'Ha Noi'),
(2, 'Đà Nẵng', 'Da Nang'),
(3, 'Hồ Chí Minh', 'Ho Chi Minh');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_vi` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(50) NOT NULL,
  `content_vi` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content_en` text NOT NULL,
  `datepost` date NOT NULL,
  `type` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE IF NOT EXISTS `Product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NameVN` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `NameEN` varchar(50) NOT NULL,
  `DescriptionVN` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DescriptionEN` text NOT NULL,
  `PriceVND` float NOT NULL,
  `PriceUSD` float NOT NULL,
  `CatalogID` int(11) NOT NULL,
  `LocationID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Size` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`id`, `NameVN`, `NameEN`, `DescriptionVN`, `DescriptionEN`, `PriceVND`, `PriceUSD`, `CatalogID`, `LocationID`, `Date`, `Size`) VALUES
(1, 'áo phông tribal', 'Tribal-Tshirt', 'kzjkcjkxjkxkvksjkdjfkjskjfksmxcmnmcxnvmnxmcnvmxcnvmnvxmnvmxnc', 'enkksdjfksdjkfksd', 100000, 10, 1, 1, '2013-06-05', 'XL'),
(2, 'Áo Phông echo', 'Echo T-Shirt', 'sđjfhjsdhfjncxmn n', 'jdshjh jhdjc', 100000, 9.8, 1, 1, '2013-06-05', 'L'),
(3, 'Áo Phông Khỉ Đột', 'Money T-Shirt', 'mdkfnkdnfksdnmfnjshdfj', 'skjdfksdkfjksdfjds', 100000, 9.8, 1, 1, '2013-06-05', 'S');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
