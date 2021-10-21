-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Skapad: 05 oktober 2011 kl 16:14
-- Serverversion: 5.1.53
-- PHP-version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `nuancier`
--

-- --------------------------------------------------------

--
-- Struktur för tabell `couleurs`
--

CREATE TABLE IF NOT EXISTS `couleurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `hexadecimal` char(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Data i tabell `couleurs`
--

INSERT INTO `couleurs` (`id`, `nom`, `image`, `hexadecimal`) VALUES
(2, 'Modesty', 'cremesheen_lipstick_med.png', NULL),
(3, 'Lamé', 'lipstick_frost_med.png', NULL),
(4, 'Brick-O-La', 'lipstick_amplified_med.png', NULL),
(5, 'Capricious', 'lipstick_lustre_dark.png', NULL),
(6, 'Midimauve', 'lipstick_lustre_med.png', NULL),
(7, 'On hold', 'cremesheen_lipstick_dark.png', NULL),
(8, 'plesae me', 'lipstick_matte_med.png', NULL),
(9, 'Angel', 'lipstick_frost_angel.png', NULL),
(10, 'costa chic', 'lipstick_frost_costa.png', NULL),
(11, 'politely pink', 'lipstick_lustre_politely.png', NULL),
(12, 'Pink Plaid', 'lipstick_matte_pinkplaid.png', NULL),
(13, 'Full Body', 'lipstick_lustre_fullbody.png', NULL),
(14, 'Victorian', 'lipstick_frost_victorian.png', NULL),
(15, 'Lady Danger', 'lipstick_matte_ladydanger.png', NULL),
(16, 'Spice it up', 'lipstick_lustre_spiceitup.png', NULL),
(17, 'Chili', 'lipstick_matte_chili.png', NULL),
(18, 'Diva', 'lipstick_matte_diva.png', NULL),
(19, 'Lustering', 'lipstick_lustre_lustering.png', NULL),
(20, 'Cyber', 'lipstick_satin_cyber.png', NULL),
(21, 'Modesty', 'cremesheen_lipstick_med.png', 'FF816D'),
(22, 'Modesty', 'cremesheen_lipstick_med.png', 'FF816D');
