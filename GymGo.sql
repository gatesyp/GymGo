-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 20, 2016 at 11:35 PM
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
  `gender` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `google_id`, `user`, `gender`, `updated_at`, `created_at`) VALUES
(7, '11029394112', 'Steven', 'men', '2016-02-20 07:55:23', '2016-02-20 07:55:23'),
(8, '1412341231', 'Matt', 'men', '2016-02-21 00:01:37', '2016-02-21 00:01:37'),
(9, '15231314', 'Aaron', 'men', '2016-02-21 00:02:03', '2016-02-21 00:02:03'),
(10, '15231314', 'Noah', 'men', '2016-02-21 00:02:24', '2016-02-21 00:02:24'),
(11, '123156745', 'Aliya', 'women', '2016-02-21 00:02:41', '2016-02-21 00:02:41'),
(12, '8243572', 'Megan', 'women', '2016-02-21 00:02:50', '2016-02-21 00:02:50'),
(13, '0912840523', 'Sammy', 'women', '2016-02-21 00:03:03', '2016-02-21 00:03:03'),
(14, '0912840523', 'Daisy', 'women', '2016-02-21 00:04:18', '2016-02-21 00:04:18'),
(15, '0912840523', 'Bernie', 'men', '2016-02-21 00:04:41', '2016-02-21 00:04:41'),
(16, '0912840523', 'Sanders', 'men', '2016-02-21 00:04:51', '2016-02-21 00:04:51'),
(17, '0912840523', 'Ted', 'men', '2016-02-21 00:05:09', '2016-02-21 00:05:09'),
(18, '0912840523', 'Emerson', 'men', '2016-02-21 00:05:13', '2016-02-21 00:05:13'),
(19, '0912840523', 'Alex', 'men', '2016-02-21 00:05:41', '2016-02-21 00:05:41'),
(20, '0912840523', 'Grace', 'women', '2016-02-21 00:05:44', '2016-02-21 00:05:44'),
(21, '0912840523', 'Russel', 'men', '2016-02-21 00:05:48', '2016-02-21 00:05:48'),
(22, '0912840523', 'Trevor', 'men', '2016-02-21 00:05:53', '2016-02-21 00:05:53'),
(23, '0912840523', 'Kayla', 'women', '2016-02-21 00:05:58', '2016-02-21 00:05:58'),
(24, '0912840523', 'Laqiusha', 'women', '2016-02-21 00:06:26', '2016-02-21 00:06:26'),
(25, '0912840523', 'Lateesha', 'women', '2016-02-21 00:06:37', '2016-02-21 00:06:37'),
(26, '0912840523', 'Lashonda', 'women', '2016-02-21 00:06:40', '2016-02-21 00:06:40'),
(27, '0912840523', 'Samantha', 'women', '2016-02-21 00:07:10', '2016-02-21 00:07:10'),
(28, '0912840523', 'Ronda', 'women', '2016-02-21 00:07:13', '2016-02-21 00:07:13'),
(29, '0912840523', 'Bill', 'men', '2016-02-21 00:07:17', '2016-02-21 00:07:17'),
(30, '0912840523', 'Nick', 'men', '2016-02-21 00:07:29', '2016-02-21 00:07:29'),
(31, '0912840523', 'Shelby', 'women', '2016-02-21 00:08:20', '2016-02-21 00:08:20');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `workouts`
--

INSERT INTO `workouts` (`id`, `user_id`, `exercise_name`, `created_at`, `updated_at`) VALUES
(1, 3, 'Squats', '2016-02-20 14:29:18', '2016-02-20 14:29:18'),
(2, 3, 'Deadlift', '', ''),
(3, 3, 'Benching', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
