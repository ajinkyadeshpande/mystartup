-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2017 at 10:17 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hr`
--

-- --------------------------------------------------------

--
-- Table structure for table `cbc`
--

CREATE TABLE `cbc` (
  `confirm_code` varchar(65) NOT NULL,
  `id` varchar(10) NOT NULL,
  `area` varchar(20) NOT NULL,
  `cbcmemid` varchar(10) NOT NULL,
  `bcat` varchar(100) NOT NULL,
  `give` varchar(100) NOT NULL,
  `ask` varchar(100) NOT NULL,
  `approved` varchar(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `directory`
--

CREATE TABLE `directory` (
  `uid` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT '',
  `Firm` varchar(100) NOT NULL DEFAULT '',
  `Description` varchar(100) NOT NULL DEFAULT '',
  `Website` varchar(100) NOT NULL,
  `Mobile` varchar(100) DEFAULT NULL,
  `Location` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `workemail` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registered_members`
--

CREATE TABLE `registered_members` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `name` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `country` varchar(65) NOT NULL DEFAULT '',
  `resume` varchar(65) DEFAULT NULL,
  `gender` varchar(7) NOT NULL,
  `dob` varchar(12) NOT NULL,
  `fbid` varchar(200) DEFAULT NULL,
  `linkid` varchar(200) DEFAULT NULL,
  `gplus` varchar(200) DEFAULT NULL,
  `twitter` varchar(200) DEFAULT NULL,
  `profilepic` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `temp_members_db`
--

CREATE TABLE `temp_members_db` (
  `confirm_code` varchar(65) NOT NULL,
  `uid` varchar(40) NOT NULL,
  `name` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `password` varchar(65) NOT NULL,
  `country` varchar(65) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `dob` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_online`
--

CREATE TABLE `user_online` (
  `session` char(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `time` int(11) NOT NULL DEFAULT '0',
  `host` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `directory`
--
ALTER TABLE `directory`
  ADD PRIMARY KEY (`Firm`);

--
-- Indexes for table `registered_members`
--
ALTER TABLE `registered_members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);
ALTER TABLE `registered_members` ADD FULLTEXT KEY `resume` (`resume`);

--
-- Indexes for table `temp_members_db`
--
ALTER TABLE `temp_members_db`
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registered_members`
--
ALTER TABLE `registered_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
