-- phpMyAdmin SQL Dump
-- version 4.1.2
-- http://www.phpmyadmin.net
--
-- Host: ServerIP
-- Server version: 5.6.15
-- PHP Version: 5.6.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE skitter_jang;

USE skitter_jang;

--
-- Database: 'skitter_jang'
--

-- --------------------------------------------------------

--
-- Table structure for table "skits"
--
CREATE TABLE IF NOT EXISTS `skits` (
	`skit_id` int(11) NOT NULL AUTO_INCREMENT,
	`user_id_from` int(11) NOT NULL,
	`text` text NOT NULL,
	PRIMARY KEY (`skit_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

-- --------------------------------------------------------

--
-- Inserting "skits" into table "skits"
--
-- INSERT INTO 'skits'
-- ('skit_id', 'user_id_from', 'text') VALUES
-- (1, 1, 'Hi yall my name is Jonathan and I am new to Skitter!')
-- (2, 2, 'Hi I am Paul and I am new to Skitter!')
-- (3, 3, 'Its Sarah! Im new to Skitter!')
-- (4, 4, 'My name is Justin and I am new to Skitter!')
-- (5, 1, 'GOOD GAME TODAY BOYS! THATS HOW WE GET THE W! #finals #warriorsforthewin')
-- (6, 2, 'I cant wait to go watch Black Panther');

-- --------------------------------------------------------

--
-- Table structure for table "profiles"
--
CREATE TABLE IF NOT EXISTS `profiles` (
	`profile_id` int(11) NOT NULL AUTO_INCREMENT,
	`user_id` int(11) NOT NULL,
	`picture_url` varchar(255) NOT NULL,
	PRIMARY KEY (`profile_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

-- --------------------------------------------------------

--
-- Inserting "profiles" into table "profiles"
--
-- INSERT INTO `profiles` (`profile_id`, `user_id`, `picture_url`, `following`) VALUES
-- (1, 1, `images/new_user.png`, `1`)
-- (2, 2, `images/new_user.png`, `2`)
-- (3, 3, `images/new_user.png`, `3`)
-- (4, 4, `images/new_user.png`, `4`);

-- --------------------------------------------------------

--
-- Table structure for table "users"
--
CREATE TABLE IF NOT EXISTS `users` (
	`user_id` int(11) NOT NULL AUTO_INCREMENT,
	`email` varchar(64) NOT NULL,
	`password` varchar(64) NOT NULL,
 	`firstname` varchar(25) NOT NULL,
	`lastname` varchar(25) NOT NULL,
	PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

-- --------------------------------------------------------

--
-- Inserting "users" into table "users"
--
-- INSERT INTO `users` (`user_id`, `email`, `password`, `firstname`, `lastname`) VALUES
-- (1, `jon@jang.com`, `password`, `Jonathan`, `Jang`)
-- (2, `paul@g.com`, `password`, `Paul`, `Doe`)
-- (3, `sarah@g.com`, `password`, `Sarah`, `Doe`)
-- (4, `Justin@g.com`, `password`, `Justin`, `Doe`);
