-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2023 at 04:32 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `adm`
--

CREATE TABLE IF NOT EXISTS `adm` (
  `Id` int(11) NOT NULL DEFAULT '0',
  `Name` varchar(30) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `remarks` varchar(1) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adm`
--

INSERT INTO `adm` (`Id`, `Name`, `DOB`, `email`, `Password`, `remarks`) VALUES
(0, 'Kirandeep Kaur', '26-09-2000', 'kirandeepdhanju@gmail.com', '1313@', '0');

-- --------------------------------------------------------

--
-- Table structure for table `annou`
--

CREATE TABLE IF NOT EXISTS `annou` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prod` varchar(100) NOT NULL,
  `rate` varchar(50) NOT NULL,
  `drate` varchar(50) NOT NULL,
  `eve` varchar(100) NOT NULL,
  `rem` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `annou`
--

INSERT INTO `annou` (`id`, `prod`, `rate`, `drate`, `eve`, `rem`) VALUES
(2, 'Tractor', '12,00,000', '12%', 'Diwali', '0'),
(3, 'Combine', '25,00,000', '25%', 'Chirstmas', '0'),
(4, 'Rotavator', '1,50,000', '15%', 'Chirstmas', '0'),
(5, 'Happy Seeder', '3,50,000', '35%', 'Raksha badhan', '0'),
(6, 'super seeder', '7,50,000', '17%', 'Dussehra', '0'),
(7, 'Maize seeder', '3,70,000', '30%', 'Eid', '0');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `msg` varchar(60) NOT NULL,
  `remark` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `name`, `mobile`, `email`, `msg`, `remark`) VALUES
(1, 'Kirandeep Kaur', '9897866543', 'kiran12@gmail.com', 'This website is very helpfull.....', 0),
(2, 'Karanbir Singh', '9876543210', 'Karan@gmail.com', 'I want the service from Kissan Argo firm', 0),
(3, 'Ramandeep Kaur', '8765432190', 'Raman@gmail.com', 'This firm is eco friendly.', 0),
(4, 'Anjali Gill', '7654321189', 'Anjali@gmail.com', 'This firm works with natural ways. ', 0),
(5, 'Jasmeen Kaur', '7689893400', 'jas@gmail.com', 'I want services from this firm. ', 0),
(6, 'Arshdeep Singh', '8765568900', 'Arsh@gmail.com', 'I get great services from this firm at less rates.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE IF NOT EXISTS `enquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `enquiry` varchar(500) NOT NULL,
  `remarks` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `gender`, `mobile`, `email`, `enquiry`, `remarks`) VALUES
(1, 'Kirandeep Kaur', 'Female', '8796754545', 'kirandeep32@gmail.com', 'About Services', 'about services....'),
(2, 'Simranjit Kaur', 'Female', '9876756543', 'ksimran@gmail.com', 'About Tractor', 'Is This Tractor Provide Good Mileage?'),
(3, 'Ramandeep Kaur', 'Female', '8789087789', 'Raman@gmail.com', 'Others', 'I want to know about rates'),
(4, 'Sukhraj Singh', 'Male', '9876546456', 'Sukhraj@gmail.com ', 'About Combine', 'I want to get this product service in this wheat season.'),
(5, 'Karanbir Singh', 'Male', '986787878', 'Karan@gmail.com', 'About Happy Seeder', 'Is this Machine is eco friendly....?'),
(6, 'Kbir Handa', 'Male', '9898980807', 'Kbir@gmail.com', 'About Combine', 'is this product affordable for all....?'),
(7, 'Harpreet Singh', 'Male', '9898943344', 'Happy@gmail.com', 'About Services', 'Is Amount on per service is affordable? '),
(8, 'Kamalpreet Kaur', 'Male', '7676899990', 'kamal@gmail.com', 'About Combine', ' which types crops are harvested by this combine?'),
(9, 'Anmol singh', 'Male', '9890954678', 'Anmol@gmail.com', 'Others', 'can I get service from super seeder.'),
(10, 'Rajwant kaur ', 'Male', '7699034567', 'Rajwant@gmail.com', 'About Happy Seeder', 'Is this machine is better than super seeder?'),
(11, 'Rajpreet Singh', 'Male', '987656899', 'Raj@gmail.com', 'About Tractor', 'Is this product is doing good work?');

-- --------------------------------------------------------

--
-- Table structure for table `nprod`
--

CREATE TABLE IF NOT EXISTS `nprod` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prod` varchar(50) NOT NULL,
  `ldt` varchar(30) NOT NULL,
  `des` varchar(500) NOT NULL,
  `eprice` varchar(40) NOT NULL,
  `rem` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `nprod`
--

INSERT INTO `nprod` (`id`, `prod`, `ldt`, `des`, `eprice`, `rem`) VALUES
(2, 'Tractor', '15-11-2023', 'These tractors gives you more mileage than others.', '12,00,000', '0'),
(3, 'Combines', '21-09-2023', 'These are 4 by 4 combines machines. these  have sharp crop cutters as well as large storing tanks.', '25,00,000', '0'),
(4, 'Rotavator', '21-12-2023', 'These are good for the crops waste to mix in soil.', '1,50,000', '0'),
(5, 'Happy Seeder', '12-09-2023', 'These machines are helpful for to bowing the wheat seeds in the fields ', '3,50,000', '0'),
(6, 'Super Seeder', '26-09-2023', 'These are more helpful than happy seeder.in machines wheat bowing with the help of pressure.', '7,50,000', '0'),
(7, 'plough', '14-09-2023', 'These are good for the cultivation. ', '4,50,000', '0'),
(8, 'Potato Seeder', '21-07-2023', 'These are good for bowing the potato seeds.', '4,75,000', '0'),
(9, 'Carrrot Seeder', '23-07-2023', 'These are helpful in bowing the seeds of carrot', '1,90,000', '0'),
(10, 'Maize Seeder', '09-02-2024', 'this machine is helpful to bowing the maize seeds in fields.', '3,70,000', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(50) NOT NULL,
  `FNAME` varchar(50) NOT NULL,
  `GENDER` varchar(20) NOT NULL,
  `CATEGORY` varchar(20) NOT NULL,
  `DOB` varchar(40) NOT NULL,
  `ADDRESS` varchar(60) NOT NULL,
  `MOBILE` varchar(10) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `QUESTION` varchar(20) NOT NULL,
  `ANS` varchar(25) NOT NULL,
  `REMARKS` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `NAME`, `FNAME`, `GENDER`, `CATEGORY`, `DOB`, `ADDRESS`, `MOBILE`, `EMAIL`, `PASSWORD`, `QUESTION`, `ANS`, `REMARKS`) VALUES
(2, 'Onkar Singh', 'Sukhdev Singh', 'Male', 'GEN', '13-03-1989', 'Dulowal', '9815831952', 'sardar.onkar@gmail.com', 'Singh@123', 'Favourite Place', 'GNITS', '0'),
(3, 'Kirandeep Kaur', 'Davindr Singh', 'female', 'OBC', '26/09/2000', 'Sultanpur Lodhi', '9876543210', 'Kirandeepdhanju@gmail.com', '1234', 'Birth Place', 'Sultanpur Lodhi', '0'),
(4, 'Jaspal Kaur', 'Gurmukh singh', 'female', 'SC', '11/02/1999', 'Goindwal sahib', '9876543210', 'Jass@gmail.com', '098765', 'Birth Place', 'Goindwal sahib', '0'),
(5, 'Arpandeep Kaur', 'Avtar Singh', 'female', 'OBC', '08/02/2002', 'Sultanpur Lodhi', '0987654321', 'Arpan@gmail.com', '0987654', 'Favourite Place', 'Sultanpur Lodhi', '0'),
(6, 'Jasmeen Kaur', 'Suba singh', 'female', 'OBC', '27/09/2000', 'Kapurthala', '8765432190', 'Jasmeen@gmail.com', '09876543', 'Nick Name', 'meenu', '0'),
(7, 'Amritroop Handa', 'Charanjit Singh', 'female', 'OBC', '22/11/2011', 'Kapurthala', '7654321789', 'Amritroop@gmail.com', '12349', 'Birth Place', 'Kapurthala', '0'),
(8, 'Arshdeep Singh', 'Suba Singh', 'Male', 'OBC', '13/07/2003', 'Kapurthala', '0987654345', 'Arsh@gmail.com', '098', 'Nick Name', 'Arsh', '0'),
(9, 'Shubhkarman Singh Handa', 'Charanjit Singh', 'Male', 'OBC', '22/12/2014', 'Kapurthala', '6543217890', 'Shubh@gmail.com', '09878', 'Birth Place', 'Kapurthala', '0'),
(10, 'Amandeep Kaur', 'Gurnam Singh', 'female', 'OBC', '07/12/1985', 'Kapurthal', '6543217890', 'Aman@gmail.com', '0987678', 'Birth Place', 'Sultanpur Lodhi ', '0'),
(11, 'Kuljeet Kaur', 'Gurnam Singh', 'female', 'OBC', '10/04/1993', 'Sultanpur Lodhi', '7654321678', 'Happy@gmail.com', '98789', 'Nick Name', 'happy', '0'),
(12, 'Anjali Gill', 'Balwant Singh', 'female', 'GEN', '30/12/2000', 'Sultanpur Lodhi', '7654334567', 'Ankiratjot@gmail.com', '0909', 'Birth Place', 'Sultanpur Lodhi', '0'),
(13, 'Harmanpreet Kaur', 'Dilbagh Singh', 'female', 'GEN', '20-7-2000', 'Goindwal Sahib', '8778745324', 'harmanpreet@gmail.com', '1234', 'Birth Place', 'Goindwal Sahib', '0'),
(14, 'Kiranjeet Kaur', 'Amreek Singh', 'female', 'SC', '11-12-2003', 'Chhanna Sher Singh', '9653829895', 'kiran@gmail.com', '1212@', 'Birth Place', 'Chhanna', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
