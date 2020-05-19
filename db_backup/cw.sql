-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2020 at 05:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cw`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_address`
--

CREATE TABLE `t_address` (
  `addressid` int(40) NOT NULL,
  `nameid` int(40) NOT NULL,
  `countryid` int(40) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_address`
--

INSERT INTO `t_address` (`addressid`, `nameid`, `countryid`, `phone`, `email`, `address`) VALUES
(1, 1, 20, '00359444444', 'svilen.stoyanov@yohoho.bg', 'Sofia, Mladost'),
(2, 2, 20, '00359886247766', 'dummy@dummy.com', 'Sofia, Iztok'),
(3, 3, 20, '00359222222', 'miky_mouse@mm.bg', 'Kukulandia'),
(4, 4, 20, '00359555555', 'donald_duck@dd.bg', 'Kukulandia'),
(5, 5, 20, '00359 666 666', 'baba_yaga@gorata.com', 'The Dark Forest'),
(6, 6, 20, '00359-886247766', 'yoda@darkside.com', 'Sofia, ul.The Dark Side 11'),
(7, 7, 15, '0886333333', 'lepa@brena.net', 'Serbia'),
(8, 8, 2, '111111111111111111111111', 'baba_yaga@gorata.com', 'The Dark Forest'),
(9, 9, 0, '1111111111111111111111111111', 'pesho@pe.com', 'Sofia'),
(10, 10, 1, '22222222222222222222222222', 'pesho@pe.com', 'Sofia'),
(11, 11, 15, '55555555555555555555555', 'baba_yaga@gorata.com', 'The Dark Forest'),
(12, 12, 20, '0886247766', 'baba_yaga@gorata.com', 'The Dark Forest'),
(13, 13, 2, '00359111111', 'baba_yaga@gorata.com', 'Sofia, kv.Iztok'),
(14, 14, 2, '0886247766', 'baba_yaga@gorata.com', 'Sofia, kv.Iztok'),
(15, 15, 29, '0886247766', 'baba_yaga@gorata.com', 'Sofia, kv.Iztok'),
(16, 16, 29, '0886247766', 'baba_yaga@gorata.com', 'The Dark Forest'),
(17, 17, 20, '0886247766', 'baba_yaga@gorata.com', 'The Dark Forest');

-- --------------------------------------------------------

--
-- Table structure for table `t_country`
--

CREATE TABLE `t_country` (
  `countryid` int(40) NOT NULL,
  `countrycode` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_country`
--

INSERT INTO `t_country` (`countryid`, `countrycode`, `country`) VALUES
(1, '93', 'AFGHANISTAN'),
(2, '355', 'ALBANIA'),
(3, '213', 'ALGERIA'),
(4, '1-684', 'AMERICAN SAMOA'),
(5, '376', 'ANDORA'),
(6, '244', 'ANGOLA'),
(7, '1-264', 'ANGUILLA'),
(8, '672', 'ANTARCTICA'),
(9, '1-268', 'ANTIGUA AND BARBUDA'),
(10, '54', 'ARGENTINA'),
(11, '374', 'ARMENIA'),
(12, '297', 'ARUBA'),
(13, '61', 'AUSTRALIA'),
(14, '43', 'AUSTRIA'),
(15, '994', 'AZERBAIJAN'),
(16, '1-242', 'BAHAMAS'),
(17, '973', 'BAHRAIN'),
(18, '880', 'BANGLADESH'),
(19, '1-246', 'BARBADOS'),
(20, '375', 'BELARUS'),
(21, '32', 'BELGIUM'),
(22, '501', 'BELIZE'),
(23, '229', 'BENIN'),
(24, '1-441', 'BERMUDA'),
(25, '975', 'BHUTAN'),
(26, '591', 'BOLIVIA'),
(27, '387', 'BOSNA AND HERZEGOVINA'),
(28, '267', 'BOTSWANA'),
(29, '55', 'BRAZIL'),
(30, '246', 'BRITISH INDIAN OCEAN TERRITORY'),
(31, '1-284', 'BRITISH VIRGIN ISLAND'),
(32, '673', 'BRUNEI'),
(33, '359', 'BULGARIA'),
(34, '226', 'BURKINA FASO'),
(35, '257', 'BURUNDI'),
(36, '855', 'CAMBODIA'),
(37, '237', 'CAMEROON'),
(38, '1', 'CANADA'),
(39, '238', 'CAPE VERDE'),
(40, '1-345', 'CAYMAN ISLANDS'),
(41, '236', 'CENTRAL AFRICAN REPUBLIC'),
(42, '235', 'CHAD'),
(43, '56', 'CHILE'),
(44, '86', 'CHINA'),
(45, '61', 'CHRISTMAS ISLAND'),
(46, '61', 'COCOS ISLANDS'),
(47, '57', 'COLOMBIA'),
(48, '269', 'COMOROS'),
(49, '682', 'COOK ISLANDS'),
(50, '506', 'COSTA RICA'),
(51, '385', 'CROATIA'),
(52, '53', 'CUBA'),
(53, '599', 'CURACAO'),
(54, '357', 'CYPRUS'),
(55, '420', 'CZECH REPUBLIC'),
(56, '243', 'DEMOCRATIC REPUBLIC OF CONGO'),
(57, '45', 'DENMARK'),
(58, '253', 'DJIBOUTI'),
(59, '1-767', 'DOMINICA'),
(60, '1-809', 'DOMINICAN REPUBLIC'),
(61, '670', 'EAST TIMOR'),
(62, '593', 'ECUADOR'),
(63, '20', 'EGYPT'),
(64, '503', 'EL SALVADOR'),
(65, '240', 'EQUATORIAL GUINEA'),
(66, '291', 'ERITREA'),
(67, '372', 'ESTONIA'),
(68, '251', 'ETHIOPIA'),
(69, '500', 'FALKLAND ISLANDS'),
(70, '298', 'FAROE ISLANDS'),
(71, '679', 'FIJI'),
(72, '358', 'FINLAND'),
(73, '33', 'FRANCE'),
(74, '689', 'FRENCH POLYNESIA'),
(75, '241', 'GABON'),
(76, '220', 'GAMBIA'),
(77, '995', 'GEORGIA'),
(78, '49', 'GERMANY'),
(79, '233', 'GHANA'),
(80, '350', 'GIBRALTAR'),
(81, '30', 'GREECE'),
(82, '299', 'GREENLAND'),
(83, '1-473', 'GRENADA'),
(84, '1-671', 'GUAM'),
(85, '502', 'GUATEMALA'),
(86, '44-1481', 'GUERNSEY'),
(87, '224', 'GUINEA'),
(88, '245', 'GUINEA-BISSAU'),
(89, '592', 'GUYANA'),
(90, '509', 'HAITI'),
(91, '504', 'HONDURAS'),
(92, '852', 'HONG KONG'),
(93, '36', 'HUNGARY'),
(94, '354', 'ICELAND'),
(95, '91', 'INDIA'),
(96, '62', 'INDONESIA'),
(97, '98', 'IRAN'),
(98, '964', 'IRAQ'),
(99, '353', 'IRELAND'),
(100, '44-1624', 'ISLE OF MAN'),
(101, '972', 'ISRAEL'),
(102, '39', 'ITALY'),
(103, '225', 'IVORY COAST'),
(104, '1-876', 'JAMAICA'),
(105, '81', 'JAPAN'),
(106, '44-1534', 'JERSEY'),
(107, '962', 'JORDAN'),
(108, '7', 'KAZAKHSTAN'),
(109, '254', 'KENYA'),
(110, '686', 'KIRIBATI'),
(111, '383', 'KOSOVO'),
(112, '965', 'KUWAIT'),
(113, '996', 'KYRGYZSTAN'),
(114, '856', 'LAOS'),
(115, '371', 'LATVIA'),
(116, '961', 'LEBANON'),
(117, '266', 'LESOTHO'),
(118, '231', 'LIBERIA'),
(119, '218', 'LIBYA'),
(120, '423', 'LIECHTENSTEIN'),
(121, '370', 'LITHUANIA'),
(122, '352', 'LUXEMBOURG'),
(123, '853', 'MACAU'),
(124, '389', 'MACEDONIA'),
(125, '261', 'MADAGASCAR'),
(126, '265', 'MALAWI'),
(127, '60', 'MALAYSIA'),
(128, '960', 'MALDIVES'),
(129, '223', 'MALI'),
(130, '356', 'MALTA'),
(131, '692', 'MARSHALL ISLANDS'),
(132, '222', 'MAURITANIA'),
(133, '230', 'MAURITIUS'),
(134, '262', 'MAYOTTE'),
(135, '52', 'MEXICO'),
(136, '691', 'MICRONESIA'),
(137, '373', 'MOLDOVA'),
(138, '377', 'MONACO'),
(139, '976', 'MONGOLIA'),
(140, '382', 'MONTE NEGRO'),
(141, '1-664', 'MONTSERRAT'),
(142, '212', 'MOROCCO'),
(143, '258', 'MOZAMBIQUE'),
(144, '95', 'MYANMAR'),
(145, '264', 'NAMIBIA'),
(146, '674', 'NAURU'),
(147, '977', 'NEPAL'),
(148, '31', 'NETHERLANDS'),
(149, '599', 'NETHERLANDS ANTILLES'),
(150, '687', 'NEW CALEDONIA'),
(151, '64', 'NEW ZEALAND'),
(152, '505', 'NICARAGUA'),
(153, '227', 'NIGER'),
(154, '234', 'NIGERIA'),
(155, '683', 'NIUE'),
(156, '850', 'NORTH KOREA'),
(157, '1-670', 'NORTHERN MARIANA ISLANDS'),
(158, '47', 'NORWAY'),
(159, '968', 'OMAN'),
(160, '92', 'PAKISTAN'),
(161, '680', 'PALAU'),
(162, '970', 'PALESTINE'),
(163, '507', 'PANAMA'),
(164, '675', 'PAPUA NEW GUINEA'),
(165, '595', 'PARAGUAY'),
(166, '51', 'PERU'),
(167, '63', 'PHILIPPINES'),
(168, '64', 'PITCAIRN'),
(169, '48', 'POLAND'),
(170, '351', 'PORTUGAL'),
(171, '1-787, 1-939', 'PUERTO RICO'),
(172, '974', 'QUATAR'),
(173, '242', 'REPUBLIC OF THE CONGO'),
(174, '262', 'REUNION'),
(175, '40', 'ROMANIA'),
(176, '7', 'RUSSIA'),
(177, '250', 'RWANDA'),
(178, '590', 'SAINT BARTHELEMY'),
(179, '290', 'SAINT HELENA'),
(180, '1-869', 'SAINT KITTS AND NEVIS'),
(181, '1-758', 'SAINT LUCIA'),
(182, '590', 'SAINT MARTIN'),
(183, '508', 'SAINT PIERRE AND MIQUELON'),
(184, '1-784', 'SAINT VINCENT AND THE GRENADINES'),
(185, '685', 'SAMOA'),
(186, '378', 'SAN MARINO'),
(187, '239', 'SAO TOME AND PRINCIPE'),
(188, '966', 'SAUDI ARABIA'),
(189, '221', 'SENEGAL'),
(190, '381', 'SERBIA'),
(191, '248', 'SEYCHELLES'),
(192, '232', 'SIERRA LEONE'),
(193, '65', 'SINGAPORE'),
(194, '1-721', 'SINT MAARTEN'),
(195, '421', 'SLOVAKIA'),
(196, '386', 'SLOVENIA'),
(197, '677', 'SOLOMON ISLANDS'),
(198, '252', 'SOMALIA'),
(199, '27', 'SOUTH AFRICA'),
(200, '82', 'SOUTH KOREA'),
(201, '211', 'SOUTH SUDAN'),
(202, '34', 'SPAIN'),
(203, '94', 'SRI LANKA'),
(204, '249', 'SUDAN'),
(205, '597', 'SURINAME'),
(206, '47', 'SVALBARD AND JAN MAYEN'),
(207, '268', 'SWAZILAND'),
(208, '46', 'SWEDEN'),
(209, '41', 'SWITZERLAND'),
(210, '963', 'SYRIA'),
(211, '886', 'TAIWAN'),
(212, '992', 'TAJIKISTAN'),
(213, '255', 'TANZANIA'),
(214, '66', 'THAILAND'),
(215, '228', 'TOGO'),
(216, '690', 'TOKELAU'),
(217, '676', 'TONGA'),
(218, '1-868', 'TRINIDAD AND TOBAGO'),
(219, '216', 'TUNISIA'),
(220, '90', 'TURKEY'),
(221, '993', 'TURKMENISTAN'),
(222, '1-649', 'TURKS AND CAICOS ISLANDS'),
(223, '688', 'TUVALU'),
(224, '1-340', 'U.S.VIRGIN ISLANDS'),
(225, '256', 'UGANDA'),
(226, '380', 'UKRAINE'),
(227, '971', 'UNITED ARAB EMIRATES'),
(228, '44', 'UNITED KINGDOM'),
(229, '1', 'UNITED STATES'),
(230, '598', 'URUGUAY'),
(231, '998', 'UZBEKISTAN'),
(232, '678', 'VANUATU'),
(233, '379', 'VATICAN'),
(234, '58', 'VENEZUELA'),
(235, '84', 'VIETNAM'),
(236, '681', 'WALLIS AND FUTUNA'),
(237, '212', 'WESTERN SAHARA'),
(238, '967', 'YEMEN'),
(239, '260', 'ZAMBIA'),
(240, '263', 'ZIMBABWE');

-- --------------------------------------------------------

--
-- Table structure for table `t_name`
--

CREATE TABLE `t_name` (
  `nameid` int(40) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_name`
--

INSERT INTO `t_name` (`nameid`, `firstname`, `surname`) VALUES
(1, 'Svilen', 'Stoyanov'),
(2, 'Ivan', 'Andonov'),
(3, 'Miky', 'Mouse'),
(4, 'Donald', 'Duck'),
(5, 'Baba', 'Yaga'),
(6, 'Master', 'Yoda'),
(7, 'Lepa', 'Brena'),
(8, 'Baba', 'Yaga'),
(9, 'Pesho', 'Peshev'),
(10, 'Baba', 'Valcho'),
(11, 'Baba', 'Yaga'),
(12, 'Baba', 'Yaga'),
(13, 'Baba', 'Yaga'),
(14, 'Baba', 'Yaga'),
(15, 'Baba', 'Yaga'),
(16, 'Baba', 'Yaga'),
(17, 'Baba', 'Yaga');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `uid` int(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`uid`, `email`, `pwd`) VALUES
(1, 'svilen@yohoho.bg', '3aa0dffb784311797da8c47c71146caf'),
(2, 'dummy@dummy.com', '275876e34cf609db118f3d84b799a790');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_address`
--
ALTER TABLE `t_address`
  ADD PRIMARY KEY (`addressid`);

--
-- Indexes for table `t_country`
--
ALTER TABLE `t_country`
  ADD PRIMARY KEY (`countryid`);

--
-- Indexes for table `t_name`
--
ALTER TABLE `t_name`
  ADD PRIMARY KEY (`nameid`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_address`
--
ALTER TABLE `t_address`
  MODIFY `addressid` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `t_country`
--
ALTER TABLE `t_country`
  MODIFY `countryid` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT for table `t_name`
--
ALTER TABLE `t_name`
  MODIFY `nameid` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `uid` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
