-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 24, 2023 at 02:01 PM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

DROP TABLE IF EXISTS `discussion`;
CREATE TABLE IF NOT EXISTS `discussion` (
  `discussion_id` int NOT NULL AUTO_INCREMENT,
  `topic` varchar(240) NOT NULL,
  `starter_id` int NOT NULL,
  `content` text NOT NULL,
  `post_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `group_id` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`discussion_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `discussion`
--

INSERT INTO `discussion` (`discussion_id`, `topic`, `starter_id`, `content`, `post_date`, `group_id`) VALUES
(1, 'Mathematics', 11, 'Suite de Fibonnaci', '2023-07-12 20:54:01', 1),
(2, 'Mathematics', 11, 'Suite de Fibonnaci', '2023-07-12 20:57:06', 1),
(3, 'Mathematics', 11, 'hhhhhh', '2023-07-12 20:57:21', 1),
(4, 'Mathematics', 11, 'kkkk', '2023-07-12 20:58:37', 1),
(5, 'Mathematics', 11, 'kkkk', '2023-07-12 20:59:21', 1),
(6, 'Mathematics', 11, 'alefa', '2023-07-12 21:00:37', 1),
(7, 'Electronics', 11, 'I love It', '2023-07-14 22:58:12', 1),
(8, 'gg', 11, 'gg', '2023-07-14 22:59:37', 1),
(9, 'Mathematics', 22, 'How to calculate the pgcd of 2 numbers?', '2023-07-22 18:34:14', 1),
(10, 'Mathematics', 22, 'jjkjlaljjj,l', '2023-07-24 14:54:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `groupe`
--

DROP TABLE IF EXISTS `groupe`;
CREATE TABLE IF NOT EXISTS `groupe` (
  `group_id` int NOT NULL AUTO_INCREMENT,
  `creater_id` int NOT NULL DEFAULT '1',
  `creation_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `descriptiones` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `topic` varchar(240) NOT NULL,
  `visibility` varchar(240) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'visible',
  `group_name` varchar(240) NOT NULL,
  `accesibilty` varchar(240) NOT NULL DEFAULT 'public',
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `groupe`
--

INSERT INTO `groupe` (`group_id`, `creater_id`, `creation_date`, `descriptiones`, `topic`, `visibility`, `group_name`, `accesibilty`) VALUES
(8, 21, '2023-07-22 11:46:56', 'n,bj,', 'Electronics', 'visibe', 'Elite', 'private'),
(11, 22, '2023-07-22 14:35:36', 'Description mba mlay', '', 'visibe', 'crew', 'public'),
(9, 21, '2023-07-22 14:26:16', 'jjj', 'fafan', 'visibe', 'ffana', 'public');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `like_id` int NOT NULL AUTO_INCREMENT,
  `discussion_id` int NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`like_id`),
  UNIQUE KEY `likesUnique` (`discussion_id`,`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`like_id`, `discussion_id`, `user_id`) VALUES
(1, 0, 22),
(2, 10, 0),
(3, 10, 22);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `member_id` int NOT NULL AUTO_INCREMENT,
  `group_id` int NOT NULL DEFAULT '0',
  `user_id` int NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `group_id`, `user_id`) VALUES
(8, 1, 12),
(7, 6, 12),
(6, 6, 14),
(5, 6, 13),
(9, 1, 13);

-- --------------------------------------------------------

--
-- Table structure for table `memberrequest`
--

DROP TABLE IF EXISTS `memberrequest`;
CREATE TABLE IF NOT EXISTS `memberrequest` (
  `request_id` int NOT NULL AUTO_INCREMENT,
  `group_id` int NOT NULL,
  `user_id` int NOT NULL,
  `request_state` varchar(244) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Unviewed',
  `mes` varchar(240) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `memberrequest`
--

INSERT INTO `memberrequest` (`request_id`, `group_id`, `user_id`, `request_state`, `mes`) VALUES
(3, 11, 23, 'Accepted', 'mba ampidiro ohh , stp   serieux'),
(2, 11, 23, 'Accepted', 'mba ampidiro ohh , stp');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

DROP TABLE IF EXISTS `replies`;
CREATE TABLE IF NOT EXISTS `replies` (
  `replies_id` int NOT NULL AUTO_INCREMENT,
  `replier_id` int NOT NULL,
  `discussion_id` int NOT NULL,
  `replies_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content` text NOT NULL,
  PRIMARY KEY (`replies_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`replies_id`, `replier_id`, `discussion_id`, `replies_date`, `content`) VALUES
(12, 22, 9, '2023-07-22 18:35:01', 'I think , I should use an iterative method'),
(11, 0, 8, '2023-07-22 11:34:56', 'hhhh');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` bigint NOT NULL AUTO_INCREMENT,
  `nam` varchar(240) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mail` varchar(240) NOT NULL,
  `passwor` varchar(240) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `mail` (`mail`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `nam`, `mail`, `passwor`) VALUES
(20, 'Vahiniaina', 'god@mail.kami', '$2y$10$bFta8VYVESzt1m.fDUssQeirVNDFmCbINyyZSBn.VZt.uIBu4VD/S'),
(12, 'Vahiniaina RANRiANJATOVO', 'mail@gmail.com', '$2y$10$x6LO.RY42.4SxZGvjcoyBulpmyKUCkrpuf49QEpiPUF2BZnBuJihy'),
(23, 'Aina', 'aina@mail.com', '$2y$10$sK/NGJjPmYxg7ergJyKDIeW2go5.hs3h438g41gZ0uSpMY0pJPXpq'),
(21, 'Vahiniaina', 'VV', '$2y$10$p20/3BQzCNQyU0vtrcCRYeoPkvmBwcC9yWDNJDTiGhhAE/nwhqNfq'),
(22, '11', '11', '$2y$10$LpwMiBrsqP9ZwVIKN3lCdOc7OUx4WMgYbiqDnSnn7DB343n8ncwj2');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

DROP TABLE IF EXISTS `views`;
CREATE TABLE IF NOT EXISTS `views` (
  `views_id` int NOT NULL AUTO_INCREMENT,
  `discussion_id` int NOT NULL,
  `viewer_id` int NOT NULL,
  `view_date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`views_id`),
  UNIQUE KEY `viewsUnique` (`discussion_id`,`viewer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`views_id`, `discussion_id`, `viewer_id`, `view_date`) VALUES
(2, 0, 0, '2023-07-24 14:54:31'),
(3, 10, 22, '2023-07-24 14:56:27'),
(4, 8, 22, '2023-07-24 14:56:43'),
(5, 7, 22, '2023-07-24 14:58:41'),
(6, 9, 22, '2023-07-24 14:58:54'),
(7, 10, 0, '2023-07-24 15:09:18'),
(8, 0, 22, '2023-07-24 15:25:39');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
