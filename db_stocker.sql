-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 27, 2014 at 08:47 PM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_stocker`
--

-- --------------------------------------------------------

--
-- Table structure for table `stocker_users`
--

CREATE TABLE IF NOT EXISTS `stocker_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(64) NOT NULL,
  `user_pass_word` varchar(128) NOT NULL,
  `user_email` varchar(128) NOT NULL,
  `user_level` varchar(32) NOT NULL,
  `joined_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `stocker_users`
--

INSERT INTO `stocker_users` (`user_id`, `user_name`, `user_pass_word`, `user_email`, `user_level`, `joined_on`) VALUES
(1, 'admin', 'd8c5b593d28c72a4ac8850bef0bfdc19', 'manishlamichhane@gmail.com', 'admin', '2014-11-27 07:01:25');

-- --------------------------------------------------------

--
-- Table structure for table `stocker_user_session_tracker`
--

CREATE TABLE IF NOT EXISTS `stocker_user_session_tracker` (
  `user_session_id` int(11) NOT NULL AUTO_INCREMENT,
  `stocker_user_id` int(11) NOT NULL,
  `logged_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_session_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `stocker_user_session_tracker`
--

INSERT INTO `stocker_user_session_tracker` (`user_session_id`, `stocker_user_id`, `logged_on`) VALUES
(1, 1, '2014-11-27 07:09:50'),
(2, 1, '2014-11-27 07:15:10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
