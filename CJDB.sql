-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2021 年 04 月 06 日 10:21
-- 伺服器版本： 10.4.18-MariaDB
-- PHP 版本： 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `CJDB`
--

-- --------------------------------------------------------

--
-- 資料表結構 `OrderForm`
--

CREATE TABLE `OrderForm` (
  `O_ID` int(11) NOT NULL,
  `U_ID` int(11) NOT NULL,
  `OrderDate` date NOT NULL DEFAULT current_timestamp(),
  `TrackingＮumber` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `OrderList`
--

CREATE TABLE `OrderList` (
  `OF_ID` int(255) DEFAULT NULL,
  `U_ID` int(255) DEFAULT NULL,
  `P_ID` int(255) DEFAULT NULL,
  `Quantity` int(10) DEFAULT NULL,
  `subtotal` float DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `Product`
--

CREATE TABLE `Product` (
  `P_ID` int(255) NOT NULL,
  `P_Name` varchar(255) NOT NULL,
  `P_Price` float NOT NULL,
  `P_Price2` float NOT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `User`
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
  `Account_LV` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `User`
--

INSERT INTO `User` (`ID`, `FirstName`, `LastName`, `PhoneNumber`, `Address`, `Email`, `Account`, `Password`, `Account_LV`) VALUES
(1, 'Leo', 'Chen', 400123123, '38 roselane ', 'john@example.com', 'user', '123', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `VIP`
--

CREATE TABLE `VIP` (
  `VIP_LV` int(5) NOT NULL,
  `Rank` varchar(5) NOT NULL,
  `Discount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `OrderForm`
--
ALTER TABLE `OrderForm`
  ADD PRIMARY KEY (`O_ID`),
  ADD KEY `U_ID` (`U_ID`);

--
-- 資料表索引 `OrderList`
--
ALTER TABLE `OrderList`
  ADD KEY `OF_ID` (`OF_ID`,`U_ID`,`P_ID`,`Date`),
  ADD KEY `P_ID` (`P_ID`),
  ADD KEY `U_ID` (`U_ID`);

--
-- 資料表索引 `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`P_ID`);

--
-- 資料表索引 `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`ID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `OrderForm`
--
ALTER TABLE `OrderForm`
  MODIFY `O_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `Product`
--
ALTER TABLE `Product`
  MODIFY `P_ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `User`
--
ALTER TABLE `User`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `OrderForm`
--
ALTER TABLE `OrderForm`
  ADD CONSTRAINT `orderform_ibfk_1` FOREIGN KEY (`U_ID`) REFERENCES `User` (`ID`);

--
-- 資料表的限制式 `OrderList`
--
ALTER TABLE `OrderList`
  ADD CONSTRAINT `orderlist_ibfk_1` FOREIGN KEY (`P_ID`) REFERENCES `Product` (`P_ID`),
  ADD CONSTRAINT `orderlist_ibfk_2` FOREIGN KEY (`U_ID`) REFERENCES `User` (`ID`),
  ADD CONSTRAINT `orderlist_ibfk_3` FOREIGN KEY (`OF_ID`) REFERENCES `OrderForm` (`O_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
