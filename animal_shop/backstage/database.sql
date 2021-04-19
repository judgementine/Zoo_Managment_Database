-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2021-04-16 21:06:23
-- 服务器版本： 5.7.26
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `make_20210416_test`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- 表的结构 `animal`
--

CREATE TABLE `animal` (
  `id` int(11) NOT NULL,
  `AmountPaid` varchar(128) DEFAULT NULL,
  `TicketNumber` varchar(128) DEFAULT NULL,
  `ItemsBought` varchar(128) DEFAULT NULL,
  `ItemPrice` varchar(128) DEFAULT NULL,
  `ItemName` varchar(128) DEFAULT NULL,
  `AmountBought` varchar(128) DEFAULT NULL,
  `EmergencyContact` varchar(128) DEFAULT NULL,
  `FinanceEarnings` varchar(128) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `animal`
--

INSERT INTO `animal` (`id`, `AmountPaid`, `TicketNumber`, `ItemsBought`, `ItemPrice`, `ItemName`, `AmountBought`, `EmergencyContact`, `FinanceEarnings`) VALUES
(1, '123', '123', '123', '123', '112323', '123', '1231', '23123'),
(2, '22', '222', '222', '22', '2', '2', '2', '2'),
(3, '2', '2', '2', '2', '2', '2', '2', '2'),
(4, '22', '2', '2', '2', '2', '2', '2', '2'),
(5, '1', '1', '1', '1', '1', '1', '1', '1'),
(6, '1', '1', '1', '1', '1', '1', '1', '1'),
(7, '1', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- 表的结构 `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `AmountPaid` varchar(128) DEFAULT NULL,
  `TicketNumber` varchar(128) DEFAULT NULL,
  `ItemsBought` varchar(128) DEFAULT NULL,
  `ItemPrice` varchar(128) DEFAULT NULL,
  `ItemName` varchar(128) DEFAULT NULL,
  `AmountBought` varchar(128) DEFAULT NULL,
  `EmergencyContact` varchar(128) DEFAULT NULL,
  `FinanceEarnings` varchar(128) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `customer`
--

INSERT INTO `customer` (`id`, `AmountPaid`, `TicketNumber`, `ItemsBought`, `ItemPrice`, `ItemName`, `AmountBought`, `EmergencyContact`, `FinanceEarnings`) VALUES
(1, '2', '2', '2', '2', '2', '2', '2', '2'),
(2, '3', '3', '3', '3', '3', '3', '3', '3'),
(3, '2', '3', '3', '3', '3', '3', '3', '3'),
(4, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- 表的结构 `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `AmountPaid` varchar(128) DEFAULT NULL,
  `TicketNumber` varchar(128) DEFAULT NULL,
  `ItemsBought` varchar(128) DEFAULT NULL,
  `ItemPrice` varchar(128) DEFAULT NULL,
  `ItemName` varchar(128) DEFAULT NULL,
  `AmountBought` varchar(128) DEFAULT NULL,
  `EmergencyContact` varchar(128) DEFAULT NULL,
  `FinanceEarnings` varchar(128) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `department`
--

INSERT INTO `department` (`id`, `AmountPaid`, `TicketNumber`, `ItemsBought`, `ItemPrice`, `ItemName`, `AmountBought`, `EmergencyContact`, `FinanceEarnings`) VALUES
(1, '1', '11', '1', '1', '1', '1', '1', '1'),
(2, 'b', 'b ', 'b', 'b', 'b', 'bv', 'bv', 'c');

-- --------------------------------------------------------

--
-- 表的结构 `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `AmountPaid` varchar(128) DEFAULT NULL,
  `TicketNumber` varchar(128) DEFAULT NULL,
  `ItemsBought` varchar(128) DEFAULT NULL,
  `ItemPrice` varchar(128) DEFAULT NULL,
  `ItemName` varchar(128) DEFAULT NULL,
  `AmountBought` varchar(128) DEFAULT NULL,
  `EmergencyContact` varchar(128) DEFAULT NULL,
  `FinanceEarnings` varchar(128) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `employee`
--

INSERT INTO `employee` (`id`, `AmountPaid`, `TicketNumber`, `ItemsBought`, `ItemPrice`, `ItemName`, `AmountBought`, `EmergencyContact`, `FinanceEarnings`) VALUES
(1, '1', '1', '1', '1', '1', '1', '1', '1'),
(2, 'asd', 'asda', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd');

-- --------------------------------------------------------

--
-- 表的结构 `finance`
--

CREATE TABLE `finance` (
  `id` int(11) NOT NULL,
  `AmountPaid` varchar(128) DEFAULT NULL,
  `TicketNumber` varchar(128) DEFAULT NULL,
  `ItemsBought` varchar(128) DEFAULT NULL,
  `ItemPrice` varchar(128) DEFAULT NULL,
  `ItemName` varchar(128) DEFAULT NULL,
  `AmountBought` varchar(128) DEFAULT NULL,
  `EmergencyContact` varchar(128) DEFAULT NULL,
  `FinanceEarnings` varchar(128) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `finance`
--

INSERT INTO `finance` (`id`, `AmountPaid`, `TicketNumber`, `ItemsBought`, `ItemPrice`, `ItemName`, `AmountBought`, `EmergencyContact`, `FinanceEarnings`) VALUES
(1, '2', '2', '2', '2', '2', '2', '2', '2'),
(2, '2', '2', '2', '2', '2', '2', '2', '2'),
(3, '11', '2', '1', '1', '1', '1', '11', '1'),
(4, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- 表的结构 `shops`
--

CREATE TABLE `shops` (
  `id` int(11) NOT NULL,
  `AmountPaid` varchar(128) DEFAULT NULL,
  `TicketNumber` varchar(128) DEFAULT NULL,
  `ItemsBought` varchar(128) DEFAULT NULL,
  `ItemPrice` varchar(128) DEFAULT NULL,
  `ItemName` varchar(128) DEFAULT NULL,
  `AmountBought` varchar(128) DEFAULT NULL,
  `EmergencyContact` varchar(128) DEFAULT NULL,
  `FinanceEarnings` varchar(128) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `shops`
--

INSERT INTO `shops` (`id`, `AmountPaid`, `TicketNumber`, `ItemsBought`, `ItemPrice`, `ItemName`, `AmountBought`, `EmergencyContact`, `FinanceEarnings`) VALUES
(1, '11', '1', '1', '1', '1', '1', '1', '11'),
(2, '2', '2', '2', '2', '2', '2', '2', '2'),
(3, 'asd', 'asdc', 'ccs', 'dsd', 'asdw', 'asd', 'asd', 'asd');

--
-- 转储表的索引
--

--
-- 表的索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `finance`
--
ALTER TABLE `finance`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `animal`
--
ALTER TABLE `animal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 使用表AUTO_INCREMENT `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `finance`
--
ALTER TABLE `finance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
