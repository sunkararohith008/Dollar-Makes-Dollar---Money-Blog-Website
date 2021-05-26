-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 20, 2021 at 10:19 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;



-- Database: `moneyblog`
--
CREATE DATABASE IF NOT EXISTS `moneyblog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `moneyblog`;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `topic_id` (`topic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `image`, `body`, `published`, `created_at`) VALUES
(27, 23, 2, 'Post A', '1621544112_pic1.jpg', '&lt;p&gt;This is a sample post.&lt;/p&gt;', 1, '2021-05-20 16:55:12'),
(28, 23, 3, 'Post B', '1621544144_pic3.jpg', '&lt;p&gt;This is a sample post.&lt;/p&gt;', 1, '2021-05-20 16:55:44'),
(29, 23, 4, 'Post C', '1621544163_pic2.jpg', '&lt;p&gt;This is a sample post.&lt;/p&gt;', 1, '2021-05-20 16:56:03'),
(30, 23, 5, 'Post D', '1621544184_pic4.jpg', '&lt;p&gt;This is a sample post.&lt;/p&gt;', 1, '2021-05-20 16:56:24'),
(31, 23, 4, 'Post E', '1621544228_pic2.jpg', '&lt;p&gt;This is a sample post.&lt;/p&gt;', 1, '2021-05-20 16:57:08'),
(32, 23, 2, 'Post F', '1621544252_pic4.jpg', '&lt;p&gt;This is a sample post.&lt;/p&gt;', 1, '2021-05-20 16:57:32');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

DROP TABLE IF EXISTS `topics`;
CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`) VALUES
(2, 'Category Number 1', '<p>test change</p>'),
(3, 'Category Number 2', ''),
(4, 'Category Number 3', ''),
(5, 'Category Number 4', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created_at`) VALUES
(23, 1, 'arshveer', 'arshuppal0708@gmail.com', '$2y$10$y/PtBrSxMv0lCyu7XdFVRuuqcuNs/TrnFLznPVNp8XlOoSPCpDih.', '2021-05-18 07:57:56'),
(24, 1, 'dinesh9199', 'dinesh91990@gmail.com', '$2y$10$w2sD2Pq1LJsRIQxILmKWxOXdcCr47Y7p2Juso.IB3BCApG.iEBJ/q', '2021-05-20 21:42:27');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
