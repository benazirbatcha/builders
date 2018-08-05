-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2018 at 07:14 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `message` varchar(200) NOT NULL,
  `post_id` varchar(200) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `sent_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message`, `post_id`, `user_id`, `sent_date`) VALUES
(1, 'programming is a intraction with hardware', 'PID1 ', 'UID1', '2018-08-05 15:24:18'),
(2, 'programming is a language ', 'PID1', 'UID2', '2018-08-05 15:24:26'),
(3, 'Hardware is a electronic components', 'PID2', 'UID2', '2018-08-05 15:51:57'),
(4, 'mess about hardware', 'PID2', 'UID1', '2018-08-05 15:52:02'),
(5, 'hills is the big stone', 'PID3', 'UID2', '2018-08-05 15:52:17'),
(6, 'HISL', 'PID3', 'UID2', '2018-08-05 15:24:59'),
(7, 'HILSSSSSS', 'PID3', 'UID1', '2018-08-05 15:52:26'),
(8, 'programmin is good ', 'PID1', 'UID1', '2018-08-05 16:20:49'),
(9, 'this is HD', 'PID2', 'UID1', '2018-08-05 16:28:58'),
(10, 'this is Stone', 'PID3', 'UID1', '2018-08-05 16:29:10'),
(11, 'hhhh', 'PID3', 'UID1', '2018-08-05 16:33:20'),
(12, 'yyyyyy', 'PID4', 'UID1', '2018-08-05 16:33:32'),
(13, 'this is HD', 'PID4', 'UID1', '2018-08-05 16:33:49'),
(14, 'yyyyyy', 'PID5', 'UID1', '2018-08-05 16:33:58'),
(15, 'this is HD', 'PID1', 'UID1', '2018-08-05 16:37:47'),
(16, '', 'PID6', 'UID1', '2018-08-05 17:04:14'),
(17, '', 'PID6', 'UID1', '2018-08-05 17:04:38'),
(18, '', 'PID5', 'UID1', '2018-08-05 17:05:04'),
(19, 'test comment', 'PID6', 'UID1', '2018-08-05 17:05:58'),
(20, 'test comment', 'PID5', 'UID1', '2018-08-05 17:06:08'),
(21, 'dfghjkllkjhgfdsdtyuioiuytrs jhgiuyhjgfdfghjkjhgffghjkjhgfdfghjk dfghjkjhgfddfghjkjhgfd fdsdfghjkjhgfdfgh dfghjkjhgfddfghj dfghjhgfddfghj fghjhgfdftyuiuytrrty rtyuytrrtyui ', 'PID1', 'UID1', '2018-08-05 17:09:24'),
(22, 'dfghjkllkjhgfdsdtyuioiuytrs jhgiuyhjgfdfghjkjhgffghjkjhgfdfghjk dfghjkjhgfddfghjkjhgfd fdsdfghjkjhgfdfgh dfghjkjhgfddfghj dfghjhgfddfghj fghjhgfdftyuiuytrrty rtyuytrrtyui', 'PID1', 'UID1', '2018-08-05 17:09:41');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `post_id` varchar(200) NOT NULL,
  `post_msg` varchar(200) NOT NULL,
  `post_ph` varchar(200) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `post_id`, `post_msg`, `post_ph`, `user_id`, `post_date`) VALUES
(1, 'PID1', 'what is programming?', 'test1.jpg', 'UID1', '2018-08-05 12:03:18'),
(2, 'PID2', 'what is hardware?', 'test2.jpg', 'UID2', '2018-08-05 12:03:25'),
(3, 'PID3', 'what is hills?', 'scan0012.jpg', 'UID1', '2018-08-05 11:35:16'),
(4, 'PID4', 'what is boxing ?', 'scan0010.jpg', 'UID1', '2018-08-05 11:39:31'),
(5, 'PID5', 'what is lemon?', 'scan0011.jpg', 'UID1', '2018-08-05 12:48:34'),
(6, 'PID6', 'test post?', 'scan0005.jpg', 'UID1', '2018-08-05 17:03:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_mobile` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `user_email`, `user_mobile`, `password`, `reg_date`) VALUES
(1, 'UID1', 'RAJA', 'svraja@hotmail.com', '9159190579', '12345678', '2018-08-05 06:21:43'),
(2, 'UID2', 'KAVIN', 'kavin@gmail.com', '9876543210', '12345678', '2018-08-05 06:21:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
