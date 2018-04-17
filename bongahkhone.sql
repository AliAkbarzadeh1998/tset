-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2018 at 10:00 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bongahkhone`
--

-- --------------------------------------------------------

--
-- Table structure for table `khone_admin`
--

CREATE TABLE `khone_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `khone_agahi`
--

CREATE TABLE `khone_agahi` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `discription` text COLLATE utf8_persian_ci NOT NULL,
  `rooms` int(11) NOT NULL,
  `addres` text COLLATE utf8_persian_ci NOT NULL,
  `pics` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `metraj` int(11) NOT NULL,
  `typeHome` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `parking` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `tedadVahed` int(11) NOT NULL,
  `otherOptions` text COLLATE utf8_persian_ci NOT NULL,
  `timeEmpty` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khone_frosh`
--

CREATE TABLE `khone_frosh` (
  `id` int(11) NOT NULL,
  `id_agahi` int(11) NOT NULL,
  `sanad` int(11) NOT NULL,
  `gheymat` int(11) NOT NULL,
  `gheymat1metr` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khone_rahn`
--

CREATE TABLE `khone_rahn` (
  `id` int(11) NOT NULL,
  `id_agahi` int(11) NOT NULL,
  `rahn` int(11) NOT NULL,
  `ejare` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khone_user`
--

CREATE TABLE `khone_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `phoneNumber` varchar(14) COLLATE utf8_persian_ci NOT NULL,
  `addres` text COLLATE utf8_persian_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khone_useragahi`
--

CREATE TABLE `khone_useragahi` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_agahi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khone_useragahilike`
--

CREATE TABLE `khone_useragahilike` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_agahi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `khone_admin`
--
ALTER TABLE `khone_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khone_agahi`
--
ALTER TABLE `khone_agahi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khone_rahn`
--
ALTER TABLE `khone_rahn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khone_user`
--
ALTER TABLE `khone_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khone_useragahi`
--
ALTER TABLE `khone_useragahi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `khone_useragahilike`
--
ALTER TABLE `khone_useragahilike`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `khone_admin`
--
ALTER TABLE `khone_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `khone_agahi`
--
ALTER TABLE `khone_agahi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `khone_rahn`
--
ALTER TABLE `khone_rahn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `khone_user`
--
ALTER TABLE `khone_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `khone_useragahi`
--
ALTER TABLE `khone_useragahi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `khone_useragahilike`
--
ALTER TABLE `khone_useragahilike`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
