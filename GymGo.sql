-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 20, 2016 at 12:26 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `GymGo`
--

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE IF NOT EXISTS `issues` (
  `id` int(63) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `exercise_name` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`id`, `user_name`, `exercise_name`, `created_at`, `updated_at`) VALUES
(1, 'steven', 'squats', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `registered_trainers`
--

CREATE TABLE IF NOT EXISTS `registered_trainers` (
  `id` int(63) NOT NULL AUTO_INCREMENT,
  `trainer` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `trainer` (`trainer`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `registered_trainers`
--

INSERT INTO `registered_trainers` (`id`, `trainer`, `created_at`, `updated_at`) VALUES
(1, 'steven', '2016-02-20 08:09:38', '2016-02-20 08:09:38'),
(3, 'john', '2016-02-20 13:45:41', '2016-02-20 13:45:41');

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE IF NOT EXISTS `registered_users` (
  `id` int(63) NOT NULL AUTO_INCREMENT,
  `google_id` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `google_id`, `user`, `updated_at`, `created_at`) VALUES
(7, '11029394112', 'steven', '2016-02-20 07:55:23', '2016-02-20 07:55:23');

-- --------------------------------------------------------

--
-- Table structure for table `trainer_preferences`
--

CREATE TABLE IF NOT EXISTS `trainer_preferences` (
  `id` int(63) NOT NULL AUTO_INCREMENT,
  `user_id` int(63) NOT NULL,
  `trainer_id` int(63) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `trainer_preferences`
--

INSERT INTO `trainer_preferences` (`id`, `user_id`, `trainer_id`, `updated_at`, `created_at`) VALUES
(1, 1, 2, '', ''),
(2, 1, 1, '2016-02-20 13:47:35', '2016-02-20 13:47:35');

-- --------------------------------------------------------

--
-- Table structure for table `workouts`
--

CREATE TABLE IF NOT EXISTS `workouts` (
  `id` int(63) NOT NULL AUTO_INCREMENT,
  `user_id` int(63) NOT NULL,
  `exercise_name` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `workouts`
--

INSERT INTO `workouts` (`id`, `user_id`, `exercise_name`, `created_at`, `updated_at`) VALUES
(1, 3, 'Squats', '2016-02-20 14:29:18', '2016-02-20 14:29:18');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
