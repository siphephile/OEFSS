CREATE DATABASE IF NOT EXISTS `unisys`;
USE `unisys`;


CREATE TABLE `examoutput` (
  `TransactionID` varchar(13) NOT NULL,
  `StudentNumber` varchar(8) NOT NULL,
  `StartTime` time NOT NULL,
  `UploadTime` time NOT NULL,
  `ModuleCode` varchar(7) NOT NULL
);

CREATE TABLE `examsetup` (
  `ModuleCode` varchar(7) NOT NULL,
  `DateExam` date NOT NULL,
  `ExamPaperPDF` varchar(120) NOT NULL
);

CREATE TABLE `moduleinfo` (
  `ModuleCode` varchar(7) NOT NULL,
  `Description` varchar(100) NOT NULL
);

CREATE TABLE `moduleleader` (
  `ModuleCode` varchar(7) NOT NULL,
  `StaffNumber` varchar(10) NOT NULL
);

CREATE TABLE `staffinfo` (
  `StaffNumber` varchar(10) NOT NULL,
  `StaffName` varchar(100) NOT NULL,
  `StaffPassword` varchar(100) NOT NULL,
  `StaffEmail` varchar(100) NOT NULL
);

CREATE TABLE `studentinfo` (
  `StudentNumber` varchar(8) NOT NULL,
  `StudentName` varchar(120) NOT NULL,
  `StudentEmail` varchar(200) NOT NULL,
  `StudentPassword` varchar(200) NOT NULL
);

CREATE TABLE `studentmodule` (
  `StudentNumber` varchar(8) NOT NULL,
  `ModuleCode` varchar(7) NOT NULL
);

ALTER TABLE `examoutput`
  ADD PRIMARY KEY (`TransactionID`),
  ADD UNIQUE KEY `FOREIGN` (`StudentNumber`,`ModuleCode`),
  ADD KEY `ModuleCode` (`ModuleCode`);

ALTER TABLE `examsetup`
  ADD PRIMARY KEY (`ExamPaperPDF`);

ALTER TABLE `moduleinfo`
  ADD PRIMARY KEY (`ModuleCode`);

ALTER TABLE `moduleleader`
  ADD PRIMARY KEY (`ModuleCode`,`StaffNumber`);

ALTER TABLE `staffinfo`
  ADD PRIMARY KEY (`StaffNumber`);

ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`StudentNumber`);

ALTER TABLE `studentmodule`
  ADD UNIQUE KEY `FOREIGN` (`StudentNumber`,`ModuleCode`);