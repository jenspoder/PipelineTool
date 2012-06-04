-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 04, 2012 at 11:30 AM
-- Server version: 5.5.9
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `pipelinetool`
--

-- --------------------------------------------------------

--
-- Table structure for table `kunder`
--

CREATE TABLE `kunder` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `kundenavn` text COLLATE utf8_danish_ci,
  `kundenummer` int(11) DEFAULT NULL,
  `highriselink` text COLLATE utf8_danish_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tender`
--

CREATE TABLE `tender` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `kundeid` int(11) DEFAULT NULL,
  `projekt` text COLLATE utf8_danish_ci,
  `status` text COLLATE utf8_danish_ci NOT NULL,
  `kd` varchar(11) COLLATE utf8_danish_ci DEFAULT NULL,
  `pl` varchar(11) COLLATE utf8_danish_ci DEFAULT NULL,
  `tag` text COLLATE utf8_danish_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tenderrevision`
--

CREATE TABLE `tenderrevision` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tenderid` int(11) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `sandsynlighed` int(11) DEFAULT NULL,
  `andel1` int(11) DEFAULT NULL,
  `andel2` int(11) DEFAULT NULL,
  `andel3` int(11) DEFAULT NULL,
  `andel4` int(11) DEFAULT NULL,
  `andel5` int(11) DEFAULT NULL,
  `start` date DEFAULT NULL,
  `slut` date DEFAULT NULL,
  `opdateret` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci AUTO_INCREMENT=1 ;