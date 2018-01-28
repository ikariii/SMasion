CREATE TABLE `User` (
  `UserId` int(11) NOT NULL,
  `Username` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `Mail` varchar(45) NOT NULL,
  `AppNo` int(11) NOT NULL
);

INSERT INTO `User` (`UserId`, `Username`, `Password`, `Mail`, `AppNo`) VALUES
(101, 'test1', '123456', '455827010@qq.com', 101),
(102, 'test2', '123456', '455827011@qq.com', 102);


CREATE TABLE `Room` (
  `RoomId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `RoomSize` int(11) NOT NULL,
  `RoomType` varchar(45) NOT NULL,
  `AppId` int(11) NOT NULL
);

INSERT INTO `Room` (`UserId`, `RoomId`, `RoomSize`, `RoomType`, `AppId`) VALUES
(101, 1011, 10, 'bedroom', 101),
(101, 1012, 20, 'bedroom', 101),
(101, 1013, 50, 'livingroom', 101),
(101, 1014, 20, 'kitchen', 101),
(101, 1015, 10, 'bathroom', 101),
(101, 1016, 20, 'diningroom', 101);


CREATE TABLE `Sensor` (
  `SensorId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `SensorType` varchar(45) NOT NULL,
  `RoomId` int(11) NOT NULL,
  `SensorName` varchar(45) NOT NULL
);


INSERT INTO `Sensor` (`SensorId`, `UserId`, `SensorType`, `RoomId`, `SensorName`) VALUES
(10111, 101, '1', 1011, 'temperature'),
(10112, 101, '2', 1011, 'smoke'),
(10113, 101, '3', 1011, 'temperature'),
(10114, 101, '4', 1011, 'smoke');

CREATE TABLE `Callback` (
  `CallbackId` int(11) NOT NULL,
  `Data` FLOAT,
  `Time` datetime NOT NULL,
  `Status` varchar(45) NOT NULL,
  `SensorId` int(11) NOT NULL
);

INSERT INTO `Callback` (`CallbackId`, `SensorId`, `Time`, `Status`, `SensorId`, `Data`) VALUES
(101111, 10111, '2017-12-14 15:45:01.000000', '1', '101', '20'),
(101112, 10111, '2017-12-14 15:40:01.000000', '1', '101', '19'),
(101113, 10111, '2017-12-14 15:35:01.000000', '1', '101', '18'),
(101211, 10121, '2017-12-14 15:45:01.000000', '1', '101', '39%'),
(101212, 10121, '2017-12-14 15:40:01.000000', '1', '101', '40%'),
(101213, 10121, '2017-12-14 15:35:01.000000', '1', '101', '41%');

ALTER TABLE `Callback`
  ADD PRIMARY KEY (`CallbackId`),
  ADD UNIQUE KEY `CALLBACKID_UNIQUE` (`CallbackId`),
  ADD KEY `SENSORID_idx` (`SensorId`);

ALTER TABLE `Room`
  ADD PRIMARY KEY (`RoomId`),
  ADD UNIQUE KEY `ROOMID_UNIQUE` (`RoomId`),
  ADD KEY `APPID_idx` (`AppId`);

ALTER TABLE `Sensor`
  ADD PRIMARY KEY (`SensorId`),
  ADD UNIQUE KEY `SENSORID_UNIQUE` (`SensorId`),
  ADD KEY `USERID_idx` (`UserId`);

ALTER TABLE `User`
  ADD PRIMARY KEY (`UserId`),
  ADD UNIQUE KEY `idusers_UNIQUE` (`UserId`);