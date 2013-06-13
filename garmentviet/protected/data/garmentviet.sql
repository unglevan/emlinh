-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 13, 2013 at 02:24 PM
-- Server version: 5.1.68
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `garmentviet`
--

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE IF NOT EXISTS `catalog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subNameVN` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `subNameEN` varchar(50) NOT NULL,
  `nameEN` varchar(50) NOT NULL,
  `nameVN` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`id`, `subNameVN`, `subNameEN`, `nameEN`, `nameVN`) VALUES
(1, 'Nam', 'Man', 'T-shirts', 'Áo Phông'),
(2, 'Nữ', 'Woman', 'T-shirts', 'Áo Phông'),
(3, 'Bé Trai', 'Boy', 'Kids Fashion', 'Thời Trang Trẻ Em'),
(5, 'Bé Gái', 'Girl', 'Kids Fashion', 'Thời Trang Trẻ Em'),
(6, 'Túi', 'Bag', 'Hand Stitched Leather', 'Da Khâu Bằng Tay'),
(7, 'Ví', 'Wallet', 'Hand Stitched Leather', 'Da Khâu Bằng Tay'),
(8, 'Thắt Lưng', 'Belt', 'Hand Stitched Leather', 'Da Khâu Bằng Tay');

-- --------------------------------------------------------

--
-- Table structure for table `customeremail`
--

CREATE TABLE IF NOT EXISTS `customeremail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `customeremail`
--


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
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nameVN` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nameEN` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `nameVN`, `nameEN`) VALUES
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

--
-- Dumping data for table `news`
--


-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
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
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `NameVN`, `NameEN`, `DescriptionVN`, `DescriptionEN`, `PriceVND`, `PriceUSD`, `CatalogID`, `LocationID`, `Date`, `Size`) VALUES
(1, 'áo phông tribal', 'Tribal-Tshirt', 'kzjkcjkxjkxkvksjkdjfkjskjfksmxcmnmcxnvmnxmcnvmxcnvmnvxmnvmxnc', 'enkksdjfksdjkfksd', 100000, 10, 1, 1, '2013-06-05', 'XL'),
(2, 'Áo Phông echo', 'Echo T-Shirt', 'sđjfhjsdhfjncxmn n', 'jdshjh jhdjc', 100000, 9.8, 1, 1, '2013-06-05', 'L'),
(3, 'Áo Phông Khỉ Đột', 'Money T-Shirt', 'mdkfnkdnfksdnmfnjshdfj', 'skjdfksdkfjksdfjds', 100000, 9.8, 1, 1, '2013-06-05', 'S');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
