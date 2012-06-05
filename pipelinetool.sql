-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Vært: localhost
-- Genereringstid: 05. 06 2012 kl. 12:55:05
-- Serverversion: 5.5.9
-- PHP-version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pipelinetool`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `kunder`
--

CREATE TABLE `kunder` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `kundenavn` text COLLATE utf8_danish_ci,
  `kundenummer` int(11) DEFAULT NULL,
  `highriselink` text COLLATE utf8_danish_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci AUTO_INCREMENT=3 ;

--
-- Data dump for tabellen `kunder`
--

INSERT INTO `kunder` VALUES(2, 'Storebælt', NULL, '#');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `tender`
--

CREATE TABLE `tender` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `kundeid` int(11) DEFAULT NULL,
  `projekt` text COLLATE utf8_danish_ci,
  `status` text COLLATE utf8_danish_ci NOT NULL,
  `kd` tinytext COLLATE utf8_danish_ci,
  `pl` tinytext COLLATE utf8_danish_ci,
  `tag` text COLLATE utf8_danish_ci,
  `pipelineejer` tinytext COLLATE utf8_danish_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci AUTO_INCREMENT=2 ;

--
-- Data dump for tabellen `tender`
--

INSERT INTO `tender` VALUES(1, NULL, 'Søgemaskine', '1', 'JP', 'JP', 'Diverse', 'JP');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `tenderrevision`
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

--
-- Data dump for tabellen `tenderrevision`
--

