-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2010 at 11:18 AM
-- Server version: 5.1.37
-- PHP Version: 5.2.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `solyme_diskillisible`
--

-- --------------------------------------------------------

--
-- Table structure for table `demande_devis`
--

CREATE TABLE `form_command` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contact_civilite` char(5),
  `contact_fname` varchar(255),
  `contact_lname` varchar(255),
  `contact_company` varchar(255) DEFAULT NULL,
  `contact_phone` varchar(255) DEFAULT NULL,
  `contact_mobile` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `contact_address_street` varchar(255) DEFAULT NULL,
  `contact_address_more` varchar(255) DEFAULT NULL,
  `contact_address_zip` varchar(255) DEFAULT NULL,
  `contact_address_state` varchar(255) DEFAULT NULL,
  `contact_address_city` varchar(255) DEFAULT NULL,
  `contact_address_country` varchar(255) DEFAULT NULL,
  `mat_type` char(10) DEFAULT NULL,
  `mat_brand` varchar(255) DEFAULT NULL,
  `mat_model` varchar(255) DEFAULT NULL,
  `mat_serial` varchar(255) DEFAULT NULL,
  `mat_buydate` varchar(255) DEFAULT NULL,
  `mat_buyplace` varchar(255) DEFAULT NULL,
  `date_send` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

--
-- Dumping data for table `demande_devis`
--