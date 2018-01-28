-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-12-18 12:10:54
-- 服务器版本： 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smaison`
--

-- --------------------------------------------------------

--
-- 表的结构 `callback`
--

CREATE TABLE `callback` (
  `CALLBACKID` int(11) NOT NULL,
  `SENSORID` int(11) NOT NULL,
  `TIME` datetime(6) NOT NULL,
  `STATUS` varchar(45) NOT NULL,
  `USERID` varchar(45) NOT NULL,
  `DATA` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `callback`
--

INSERT INTO `callback` (`CALLBACKID`, `SENSORID`, `TIME`, `STATUS`, `USERID`, `DATA`) VALUES
(10001111, 10111, '2017-12-14 15:45:01.000000', '1', '101', '20'),
(10001112, 10111, '2017-12-14 15:40:01.000000', '1', '101', '19'),
(10001113, 10111, '2017-12-14 15:35:01.000000', '1', '101', '18'),
(10001211, 10121, '2017-12-14 15:45:01.000000', '1', '101', '39%'),
(10001212, 10121, '2017-12-14 15:40:01.000000', '1', '101', '40%'),
(10001213, 10121, '2017-12-14 15:35:01.000000', '1', '101', '41%');

-- --------------------------------------------------------

--
-- 表的结构 `room`
--

CREATE TABLE `room` (
  `USERID` int(11) NOT NULL,
  `ROOMID` int(11) NOT NULL,
  `ROOMSIZE` int(11) NOT NULL,
  `ROOMTYPE` varchar(45) NOT NULL,
  `APP.ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `room`
--

INSERT INTO `room` (`USERID`, `ROOMID`, `ROOMSIZE`, `ROOMTYPE`, `APP.ID`) VALUES
(101, 1011, 10, 'bedroom1', 101),
(101, 1012, 20, 'bedroom2', 101),
(101, 1013, 50, 'living', 101),
(101, 1014, 20, 'kitchen', 101),
(101, 1015, 10, 'bathroom', 101),
(101, 1016, 20, 'dining', 101);

-- --------------------------------------------------------

--
-- 表的结构 `sensors`
--

CREATE TABLE `sensors` (
  `id` int(11) NOT NULL,
  `USERID` int(11) NOT NULL,
  `type` varchar(45) NOT NULL,
  `ROOMID` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `sensors`
--

INSERT INTO `sensors` (`id`, `USERID`, `type`, `ROOMID`, `name`) VALUES
(10111, 101, '1', 1011, 'TEMP1'),
(10112, 101, '1', 1012, 'TEMP2'),
(10113, 101, '1', 1013, 'TEMP3'),
(10114, 101, '1', 1014, 'TEMP4'),
(10115, 101, '1', 1015, 'TEMP5'),
(10121, 101, '2', 1011, 'HUMI1'),
(10122, 101, '2', 1012, 'HUMI2'),
(10123, 101, '2', 1013, 'HUMI3'),
(10124, 101, '2', 1014, 'HUMI4'),
(10125, 101, '2', 1015, 'HUMI5'),
(10131, 101, '3', 1011, 'BRIG1'),
(10132, 101, '3', 1012, 'BRIG2'),
(10133, 101, '3', 1013, 'BRIG3'),
(10134, 101, '3', 1014, 'BRIG4'),
(10135, 101, '3', 1015, 'BRIG5'),
(10141, 101, '4', 1011, 'SMOK1'),
(10142, 101, '4', 1012, 'SMOK2'),
(10143, 101, '4', 1013, 'SMOK3'),
(10144, 101, '4', 1014, 'SMOK4'),
(10145, 101, '4', 1015, 'SMOK5');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `mail` varchar(45) NOT NULL,
  `APP.NO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`idusers`, `username`, `password`, `mail`, `APP.NO`) VALUES
(101, 'test1', '123456', '455827010@qq.com', 101),
(102, 'test2', '123456', '455827011@qq.com', 102);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `callback`
--
ALTER TABLE `callback`
  ADD PRIMARY KEY (`CALLBACKID`),
  ADD UNIQUE KEY `CALLBACKID_UNIQUE` (`CALLBACKID`),
  ADD KEY `SENSORID_idx` (`SENSORID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`ROOMID`),
  ADD UNIQUE KEY `ROOMID_UNIQUE` (`ROOMID`),
  ADD KEY `APP.ID_idx` (`APP.ID`);

--
-- Indexes for table `sensors`
--
ALTER TABLE `sensors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `SENSORID_UNIQUE` (`id`),
  ADD KEY `USERID_idx` (`USERID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`,`APP.NO`),
  ADD UNIQUE KEY `idusers_UNIQUE` (`idusers`),
  ADD UNIQUE KEY `APP.NO_UNIQUE` (`APP.NO`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `callback`
--
ALTER TABLE `callback`
  MODIFY `CALLBACKID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10001214;

--
-- 使用表AUTO_INCREMENT `room`
--
ALTER TABLE `room`
  MODIFY `ROOMID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1017;

--
-- 使用表AUTO_INCREMENT `sensors`
--
ALTER TABLE `sensors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000146;

--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10003;

--
-- 限制导出的表
--

--
-- 限制表 `callback`
--
ALTER TABLE `callback`
  ADD CONSTRAINT `SENSORID` FOREIGN KEY (`SENSORID`) REFERENCES `sensors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `APP.ID` FOREIGN KEY (`APP.ID`) REFERENCES `users` (`APP.NO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `sensors`
--
ALTER TABLE `sensors`
  ADD CONSTRAINT `USERID` FOREIGN KEY (`USERID`) REFERENCES `users` (`idusers`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
