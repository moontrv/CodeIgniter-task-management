-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2016 at 07:23 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `errand_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_user_id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_body` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_user_id`, `project_name`, `project_body`, `date_created`) VALUES
(6, 11, 'test3', 'test3+1 description', '2016-11-06 15:24:08'),
(5, 11, 'test2', 'test2 description', '2016-11-06 15:23:55'),
(4, 11, 'test1', 'test1 description', '2016-11-06 15:23:47'),
(7, 12, 'minhtest-project', 'this is personal project of minhtest user', '2016-11-19 17:44:08'),
(8, 12, 'minhtest-project2', 'this is minhtest''s property', '2016-11-19 17:51:24');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `task_body` text NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `project_id`, `task_name`, `task_body`, `date_created`) VALUES
(1, 0, 'take PHP course', 'select the best PHP course this week', '2016-11-19 18:53:18'),
(2, 0, 'JavaScript course', 'take the best Javascript course', '2016-11-19 18:53:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `register_date`, `username`, `password`) VALUES
(7, 'rico', 'tez', 'rico@example.com', '2016-11-06 06:51:04', 'rico', '$2y$12$sgjjfLT08grrj7Z1J2mN2ef0FiwhljqwmxuP6iAuHUhrWWYER8v/u'),
(2, '', '', '', '2016-11-05 20:54:11', 'suave', '1234'),
(3, 'peter', 'pan', 'peter@example.com', '2016-11-05 22:19:54', 'peter', '123'),
(8, 'rob', 'text', 'rob@example.com', '2016-11-06 07:06:31', 'rob', '$2y$12$gKVbaqTouOO4v3vEJtMC9.MhoZehJULyExcuBzGl/2HoJENOMxGNW'),
(9, 'nob', 'nob', 'maria@example.com', '2016-11-06 07:09:01', 'nob', '$2y$12$KxgXC3yfCfJZlXth0d9E4usLVQAIx0FU/1qBVY9mmsccO8kvdnPry'),
(10, 'rob', 'rob', 'rob@example.com', '2016-11-06 07:24:39', 'rob', '$2y$12$2GxaKr13VulecXaC001BeuoOZe.SkoGeJLp/0dmU.Ad4IOklQ0Ouq'),
(11, 'man', 'man', 'rob@example.com', '2016-11-06 07:34:52', 'man', '$2y$10$iAfSHZLLoLLarlD6vIPwH.eK3vyFXMLKRQgLmrbs0S6jO1KWDeJu6'),
(12, 'minh', 'nguyen', 'test1@example.com', '2016-11-19 15:56:00', 'minhtest', '$2y$10$/dPlBYkjj9V9VAw7WdZm3ePxsNFg0wvaCC.tIvFH/Ez.IKn5Qf95K');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
