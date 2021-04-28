-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 28, 2021 at 12:57 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id16706090_cjdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `Brand`
--

CREATE TABLE `Brand` (
  `Brand_ID` int(11) NOT NULL,
  `Brand_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Brand`
--

INSERT INTO `Brand` (`Brand_ID`, `Brand_Name`) VALUES
(2, 'Apple'),
(3, 'budi'),
(4, 'KINGLINK'),
(5, 'Mobigo'),
(1, 'Samsung');

-- --------------------------------------------------------

--
-- Table structure for table `Colour`
--

CREATE TABLE `Colour` (
  `colour_ID` int(11) NOT NULL,
  `colour` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Colour`
--

INSERT INTO `Colour` (`colour_ID`, `colour`) VALUES
(1, 'Black'),
(2, 'White'),
(3, 'Red'),
(4, 'Silver'),
(5, 'Gray'),
(6, 'None'),
(7, 'Yellow'),
(8, 'Pink');

-- --------------------------------------------------------

--
-- Table structure for table `Model`
--

CREATE TABLE `Model` (
  `Model_ID` int(11) NOT NULL,
  `B_ID` int(11) NOT NULL,
  `Model_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Model`
--

INSERT INTO `Model` (`Model_ID`, `B_ID`, `Model_Name`) VALUES
(2, 2, 'iPad Pro 10.5'),
(6, 3, 'Accessories'),
(7, 4, 'Accessories'),
(8, 5, 'Accessories'),
(9, 2, 'iPad Air2'),
(10, 1, 'Galaxy S9'),
(11, 1, 'Galaxy S20'),
(12, 1, 'Note 9'),
(13, 1, 'Note 10'),
(14, 2, 'iPhone 11');

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `P_ID` int(255) NOT NULL,
  `Brand` int(11) NOT NULL,
  `Model` int(11) NOT NULL,
  `P_Name` varchar(100) NOT NULL,
  `P_Price` float NOT NULL,
  `Description` text DEFAULT NULL,
  `Tage` text DEFAULT NULL,
  `Image` varchar(100) NOT NULL,
  `Specification` text NOT NULL,
  `Date` date NOT NULL,
  `Colour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`P_ID`, `Brand`, `Model`, `P_Name`, `P_Price`, `Description`, `Tage`, `Image`, `Specification`, `Date`, `Colour`) VALUES
(4, 2, 9, 'iPad Air 2 LCD Assembly', 155, '- High Quality LCD Assembly for iPad Air 2.\r\n- iPad LCD Assembly comes with LCD Screen and Digitizer with glass.\r\n- Every iPad LCD Displays are tested before shipping. \r\n- We recommend professional installation.', '', 'iPad_Air2_LCD_Assembly.jpg', 'None', '2021-04-27', 1),
(5, 2, 9, 'iPad Air 2 LCD FPC Connector', 1.5, '- Professional for motherboard maintenance.\r\n- Repair/Replace old, damaged and faulty LCD FPC Connector with this replacement part.\r\n- Every part is tested before shipping.\r\n- Highly recommended for professional installation.', NULL, 'iPad_Air2_LCD_FPC_Connector.jpg', 'None', '2021-04-27', 6),
(6, 2, 9, 'iPad Air 2 Power Management IC', 32.4, '- Professional for motherboard maintenance.\r\n- Repair/Replace old, damaged and faulty Power Management IC with this replacement part.\r\n- Every part is tested before shipping.\r\n- Highly recommended for professional installation.', NULL, 'iPad_Air2_Power_Management_IC.jpg', 'None', '2021-04-07', 6),
(7, 2, 2, 'iPad Pro 10.5 Front Camera', 8.6, '- If front camera cannot capture photo and video that means your front camera is not working. This is the best choice of replacement part.\r\n- This front camera can solve problems like camera failed to open, blurry photos and video.\r\n- This replacement part is made from quality materials and precision machining.\r\n- Every part is tested before shipping.\r\n- Highly recommended for professional installation', NULL, 'iPad_Pro10.5_Front_Camera.jpg', 'None', '2021-04-01', 6),
(8, 2, 2, 'iPad Pro 10.5 inch LCD Assembly', 195, 'Pro 10.5 and Air 3 LCD Assembly are very similiar, make sure you look up the correct part and model before buying.', NULL, 'iPad_Pro10.5_LCD_Assembly.png', 'None', '2021-03-09', 6),
(9, 2, 2, 'iPad Pro 10.5 Power Button and Volume Button Flex Cable', 3.7, '- Repair your broken or faulty Power Button and Volume Button for your phone with our brand new part.\r\n- It’s made from A-grade material.\r\n- Every part is tested before shipping.\r\n- Highly recommended for professional installation.', NULL, 'iPad_Pro10.5_Power_Button_and_Volume_Button_Flex_Cable.jpg', 'None', '2021-04-16', 6),
(10, 2, 14, 'iPhone 11 Pro Max Rear Camera', 91.7, '- If rear camera cannot capture photo and video that means your rear camera is not working. This is the best choice of replacement part\r\n- This rear camera can solve problems like camera failed to open, blurry photos and video\r\n- This replacement part is made from quality materials and precision machining.\r\n- Every part is tested before shipping.\r\n- Highly recommended for professional installation', NULL, 'iPhone11_Pro_Rear_Camera.jpg', 'None', '2021-04-13', 6),
(11, 2, 14, 'iPhone 11 Rear Camera Lens', 5, 'Rear Camera Lens Glass Only for iPhone 11 Pro / 11 Pro Max (3 PCS)', NULL, 'iPhone11_Rear_Camera_Lens.jpg', 'None', '2021-04-25', 6),
(12, 1, 10, 'Samsung Galaxy S9 G960F Rear Camera', 26.99, 'Features:\r\n- Brand New High Quality\r\n- 100% Perfect fit', NULL, 'Samsung_Galaxy_S9_G960F_Rear_Camera.jpg', 'Compatibility: Samsung Galaxy S9 G960F\r\nPacket content: 1 x Samsung Galaxy S9 G960F Rear Camera', '2021-04-13', 6),
(13, 1, 10, 'Samsung Galaxy S9 LCD Flex', 12, '- Samsung Galaxy S9 Main Flex.\r\n- It\'s made from A-grade material.\r\n- Highly recommended for professional installation.', NULL, 'Samsung_Galaxy_S9_LCD_Flex.jpg', 'None', '2021-04-10', 6),
(14, 1, 10, 'Samsung Galaxy S9 Battery', 59.9, 'Our Lithium-Ion Battery, exclusively for Samsung Smartphones, offers longer battery life, is reliable and safe, having gone through an exhausting testing and certification process. For long journeys or extended use, have the peace of mind of an extra Genuine Samsung battery on hand when you need it.\r\n\r\nThis battery is equipped with an NFC antenna, allowing your handset to communicate with other devices and accessories equipped with NFC technology.', NULL, 'Samsung_Galaxy_S9_Battery.png', 'Compatible with\r\n     -  Samsung Galaxy S9+ SM-G965\r\n     -  Samsung Galaxy S9+ SM-G965F\r\n     -  Samsung Galaxy S9+ SM-G965FD/S\r\n     -  Samsung Galaxy S9+ SM-G965U \r\n     -  Samsung Galaxy S9+ SM-G965W\r\n     -  Samsung Galaxy S9+ SM-G9650  \r\n\r\n- EB-BG965ABE\r\n- Rechargeable lithium-ion polymer battery\r\n- 3500 mAh\r\n- No memory affect\r\n- No soldering required', '2021-04-13', 6),
(15, 1, 10, 'Samsung S9 LCD Assembly', 240, 'Replacement part for Samsung Galaxy [Service Pack] S9 Plus SM-965 LCD Screen Digitizer Assembly with Frame - Black\r\nThis item includes the following components:\r\n\r\n1.LCD Screen;\r\n2.Digitizer Touch Screen;\r\n3.Front Housing;\r\n4.Ear Speaker;\r\n5.Side Button.\r\n\r\nNotes: Please test the functionality of this item before installation.\r\n\r\nFeatures:\r\nThis Galaxy S9 Plus LCD assembly does include the frame.\r\nThis Galaxy S9 Plus LCD and digitizer assembly is a brand new original replacement.\r\nThis screen replacement is compatible with all Samsung Galaxy S9 Plus models.\r\nHow to Install / Tips:\r\n\r\nSpecial repairing tools are required for assembling or disassembling, as the Galaxy S9 Plus LCD display and digitizer are hermetically attached.\r\nHandle the vulnerable and fragile flex cable ribbon carefully.\r\nPlease try to handle the repair or replacement work in a dry and dust free environment without direct sunlight.\r\nThe installation of any new part should be done by a qualified person. We are not responsible for any damage caused during installation.', NULL, 'Samsung_S9_LCD_Assembly.jpg', 'Size: 5.8 inches Resolution: 1440 x 2960 pixels, 570 ppi pixel density\r\nMaterial: AMOLED capacitive touchscreen, 16M colors\r\nProtective Material: Corning Gorilla Glass 4\r\nCompatibility: Samsung Galaxy S9 Plus', '2021-04-27', 6),
(16, 1, 11, 'Galaxy S20 Charging Port', 22, 'Galaxy S20 Charging Port', NULL, 'Galaxy_S20_Charging_Port.jpeg', 'None', '2021-04-17', 6),
(17, 1, 11, 'Galaxy S20 Compatible Battery', 14.79, 'Galaxy S20 Galaxy S20 / S20 5G (SM-G980 / G981) Compatible Battery.', NULL, 'Galaxy_S20_Compatible_Battery.jpeg', 'None', '2021-04-20', 6),
(18, 1, 11, 'Galaxy S20 G981 Battery Back Cover', 21.15, 'Galaxy S20 / S20 5G (SM-G980 / G981) Battery Back Cover', NULL, 'Galaxy_S20_G981_Battery_Back_Cover.jpeg', 'None', '2021-03-12', 5),
(19, 1, 12, 'Samsung Note 9 N960F S Pen Yellow', 34, 'Features:\r\n- Fits All US Carriers At&t, Verizon, T-Mobile, Sprint, US- Cellular\r\n- Rubber tip won\'t scratch or damage screen during use\r\n- Maximum efficiency and precision control\r\n- High quality, durable materials\r\n\r\nCompatibility:\r\nSamsung Galaxy Note 9\r\nModel Number: N960F', NULL, 'Samsung_Note9_N960F_S_Pen_yellow.jpg', 'None', '2021-04-26', 7),
(20, 1, 12, 'Samsung Note 9 N960F Volume Button Flex Cable', 1.5, '- Repair your broken or faulty Volume Button for your phone with our brand new part.\r\n- It’s made from A-grade material.\r\n- Every part is tested before shipping.\r\n- Highly recommended for professional installation.', NULL, 'Samsung_Note9_N960F_Volume_Button_Flex_Cable.jpg', 'None', '2021-04-23', 6),
(21, 1, 13, 'Galaxy Note 10 Plus Charging Port Board', 13.87, 'Galaxy Note 10 Plus Charging Port Board', NULL, 'Galaxy_Note10_Charging_Port_Board.jpeg', 'None', '2021-04-09', 6),
(22, 1, 13, 'Galaxy Note 10 Plus Dual Sim Card Holder', 3.95, 'Galaxy Note 10 Plus Dual Sim Card Holder', '', 'Galaxy_Note10_Plus_Dual_Sim_Card_Holder.jpeg', 'None', '2021-03-09', 2),
(23, 1, 13, 'Galaxy Note 10 Plus LCD Screen Digitizer Assembly Service Pack', 451, 'Galaxy Note 10 Plus LCD Screen Digitizer Assembly Service Pack with Frame', NULL, 'Galaxy_Note10_Plus_LCD_Screen_Digitizer_Assembly_Service_Pack.jpeg', 'None', '2021-04-03', 6);

-- --------------------------------------------------------

--
-- Table structure for table `Review`
--

CREATE TABLE `Review` (
  `review_ID` int(255) NOT NULL,
  `P_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Review` text COLLATE utf8_unicode_ci NOT NULL,
  `Rate` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `ID` int(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `PhoneNumber` int(10) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Account` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Account_LV` int(15) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`ID`, `FirstName`, `LastName`, `PhoneNumber`, `Address`, `Email`, `Account`, `Password`, `Account_LV`) VALUES
(1, 'Leo', 'Chen', 400123123, '38 roselane ', 'john@example.com', 'user', '123', 1),
(2, 'jack', 'chen', 422335511, 'king st', 'jack@gmIL.COM', 'JACK', '1234', 1),
(3, 'test', 'test 123', 123456789, 'gsdbnd', 'bnhdnnty', 'rrrrr', 'rrrrr', 1),
(4, '123', '123', 123, '123', '123', '123', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `VIP`
--

CREATE TABLE `VIP` (
  `VIP_LV` int(5) NOT NULL,
  `Rank` varchar(30) NOT NULL,
  `Discount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `VIP`
--

INSERT INTO `VIP` (`VIP_LV`, `Rank`, `Discount`) VALUES
(1, 'new', 0),
(2, 'normal', 0),
(3, 'shop', 10),
(4, 'flagship ', 15),
(5, 'gold', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Brand`
--
ALTER TABLE `Brand`
  ADD PRIMARY KEY (`Brand_ID`),
  ADD KEY `Brand_Name` (`Brand_Name`);

--
-- Indexes for table `Colour`
--
ALTER TABLE `Colour`
  ADD PRIMARY KEY (`colour_ID`);

--
-- Indexes for table `Model`
--
ALTER TABLE `Model`
  ADD PRIMARY KEY (`Model_ID`),
  ADD KEY `Model_Name` (`Model_Name`),
  ADD KEY `B_ID` (`B_ID`);

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`P_ID`),
  ADD KEY `Brand` (`Brand`,`Model`),
  ADD KEY `Model` (`Model`),
  ADD KEY `Colour` (`Colour`);

--
-- Indexes for table `Review`
--
ALTER TABLE `Review`
  ADD PRIMARY KEY (`review_ID`),
  ADD KEY `P_ID` (`P_ID`,`User_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Account_LV` (`Account_LV`);

--
-- Indexes for table `VIP`
--
ALTER TABLE `VIP`
  ADD PRIMARY KEY (`VIP_LV`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Brand`
--
ALTER TABLE `Brand`
  MODIFY `Brand_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Colour`
--
ALTER TABLE `Colour`
  MODIFY `colour_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `Model`
--
ALTER TABLE `Model`
  MODIFY `Model_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `Product`
--
ALTER TABLE `Product`
  MODIFY `P_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `Review`
--
ALTER TABLE `Review`
  MODIFY `review_ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `VIP`
--
ALTER TABLE `VIP`
  MODIFY `VIP_LV` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Model`
--
ALTER TABLE `Model`
  ADD CONSTRAINT `Model_ibfk_1` FOREIGN KEY (`B_ID`) REFERENCES `Brand` (`Brand_ID`);

--
-- Constraints for table `Product`
--
ALTER TABLE `Product`
  ADD CONSTRAINT `Product_ibfk_1` FOREIGN KEY (`Model`) REFERENCES `Model` (`Model_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Product_ibfk_2` FOREIGN KEY (`Brand`) REFERENCES `Brand` (`Brand_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Product_ibfk_3` FOREIGN KEY (`Colour`) REFERENCES `Colour` (`colour_ID`);

--
-- Constraints for table `Review`
--
ALTER TABLE `Review`
  ADD CONSTRAINT `Review_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `Product` (`P_ID`),
  ADD CONSTRAINT `Review_ibfk_2` FOREIGN KEY (`User_ID`) REFERENCES `User` (`ID`);

--
-- Constraints for table `User`
--
ALTER TABLE `User`
  ADD CONSTRAINT `User_ibfk_1` FOREIGN KEY (`Account_LV`) REFERENCES `VIP` (`VIP_LV`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
