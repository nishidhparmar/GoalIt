-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2020 at 05:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goaltracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `name`, `password`) VALUES
(79, 'Nishidh parmar', '13101999'),
(80, 'nishidh', '123');

-- --------------------------------------------------------

--
-- Table structure for table `usertask`
--

CREATE TABLE `usertask` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `day1` longtext DEFAULT NULL,
  `day2` longtext DEFAULT NULL,
  `day3` longtext DEFAULT NULL,
  `day4` longtext DEFAULT NULL,
  `day5` longtext DEFAULT NULL,
  `day6` longtext DEFAULT NULL,
  `day7` longtext DEFAULT NULL,
  `day8` longtext DEFAULT NULL,
  `day9` longtext DEFAULT NULL,
  `day10` longtext DEFAULT NULL,
  `day11` longtext DEFAULT NULL,
  `day12` longtext DEFAULT NULL,
  `day13` longtext DEFAULT NULL,
  `day14` longtext DEFAULT NULL,
  `day15` longtext DEFAULT NULL,
  `day16` longtext DEFAULT NULL,
  `day17` longtext DEFAULT NULL,
  `day18` longtext DEFAULT NULL,
  `day19` longtext DEFAULT NULL,
  `day20` longtext DEFAULT NULL,
  `day21` longtext DEFAULT NULL,
  `day22` longtext DEFAULT NULL,
  `day23` longtext DEFAULT NULL,
  `day24` longtext DEFAULT NULL,
  `day25` longtext DEFAULT NULL,
  `day26` longtext DEFAULT NULL,
  `day27` longtext DEFAULT NULL,
  `day28` longtext DEFAULT NULL,
  `day29` longtext DEFAULT NULL,
  `day30` longtext DEFAULT NULL,
  `day31` longtext DEFAULT NULL,
  `day32` longtext DEFAULT NULL,
  `day33` longtext DEFAULT NULL,
  `day34` longtext DEFAULT NULL,
  `day35` longtext DEFAULT NULL,
  `day36` longtext DEFAULT NULL,
  `day37` longtext DEFAULT NULL,
  `day38` longtext DEFAULT NULL,
  `day39` longtext DEFAULT NULL,
  `day40` longtext DEFAULT NULL,
  `day41` longtext DEFAULT NULL,
  `day42` longtext DEFAULT NULL,
  `day43` longtext DEFAULT NULL,
  `day44` longtext DEFAULT NULL,
  `day45` longtext DEFAULT NULL,
  `day46` longtext DEFAULT NULL,
  `day47` longtext DEFAULT NULL,
  `day48` longtext DEFAULT NULL,
  `day49` longtext DEFAULT NULL,
  `day50` longtext DEFAULT NULL,
  `day51` longtext DEFAULT NULL,
  `day52` longtext DEFAULT NULL,
  `day53` longtext DEFAULT NULL,
  `day54` longtext DEFAULT NULL,
  `day55` longtext DEFAULT NULL,
  `day56` longtext DEFAULT NULL,
  `day57` longtext DEFAULT NULL,
  `day58` longtext DEFAULT NULL,
  `day59` longtext DEFAULT NULL,
  `day60` longtext DEFAULT NULL,
  `login` varchar(20) DEFAULT '0',
  `date` varchar(20) DEFAULT NULL,
  `goaldays` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertask`
--

INSERT INTO `usertask` (`id`, `name`, `day1`, `day2`, `day3`, `day4`, `day5`, `day6`, `day7`, `day8`, `day9`, `day10`, `day11`, `day12`, `day13`, `day14`, `day15`, `day16`, `day17`, `day18`, `day19`, `day20`, `day21`, `day22`, `day23`, `day24`, `day25`, `day26`, `day27`, `day28`, `day29`, `day30`, `day31`, `day32`, `day33`, `day34`, `day35`, `day36`, `day37`, `day38`, `day39`, `day40`, `day41`, `day42`, `day43`, `day44`, `day45`, `day46`, `day47`, `day48`, `day49`, `day50`, `day51`, `day52`, `day53`, `day54`, `day55`, `day56`, `day57`, `day58`, `day59`, `day60`, `login`, `date`, `goaldays`) VALUES
(33, 'Nishidh parmar', 'work', 'work,gym', 'study', 'work,gym,study', 'work,gym,study', 'work,study', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2020-07-03', '7'),
(34, 'nishidh', 'work,gym', 'work,gym', 'work,gym', 'work,gym', 'work,gym', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2020-07-04', '6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertask`
--
ALTER TABLE `usertask`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `usertask`
--
ALTER TABLE `usertask`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
