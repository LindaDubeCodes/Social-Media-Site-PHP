-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2023 at 11:12 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thecavedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(255) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(31, 869296775, 1260509156, 'Linda why do people think that I\'m you maah'),
(32, 1260509156, 869296775, 'I think you know'),
(33, 869296775, 1260509156, 'No I don\'t mahn'),
(34, 1260509156, 869296775, 'Yes you do.....why would anyone possibly confuse you with me?'),
(35, 869296775, 1260509156, 'I don\'t........ know'),
(36, 1260509156, 869296775, 'you got it?'),
(37, 869296775, 1260509156, 'No........'),
(38, 1260509156, 869296775, 'say it!!'),
(39, 869296775, 1260509156, 'because .........we are the same person'),
(40, 1260509156, 869296775, 'exactly'),
(41, 869296775, 1260509156, 'I don\'t understand this'),
(42, 869296775, 1260509156, '.....'),
(43, 1260509156, 869296775, 'You were looking for a way to change your life'),
(44, 1260509156, 869296775, 'you could not do this on your own'),
(45, 1260509156, 869296775, 'all the ways you wish you could be, that\'s me!!'),
(46, 1260509156, 869296775, 'I look like you wanna look, I fuck like you wanna fuck, I am smart, capable and most importantly, I\'m free in all the ways that you are not '),
(47, 869296775, 1260509156, 'you have a house Mahn'),
(48, 1260509156, 869296775, 'Rented in your name'),
(49, 869296775, 1260509156, 'You\'re fucking Marla Tyler!!'),
(50, 1260509156, 869296775, 'Technically, you\'re fucking her, but its all the same to her'),
(51, 869296775, 1260509156, 'oh my Goddd!!!!!!!!!!'),
(52, 1260509156, 869296775, 'go fuck yourself');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_ID` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `picture` varchar(400) NOT NULL,
  `user_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_ID`, `fname`, `lname`, `user_email`, `user_password`, `picture`, `user_status`) VALUES
(21, 869296775, 'Linda', 'Dube', 'crazyrealindividual123@gmail.com', '8e28be3f382ae2c53d42bcd118604f2b', '16760189091.jpg', 'online'),
(23, 1260509156, 'muzi', 'dlamini', 'linda@gmail.com', 'eaf450085c15c3b880c66d0b78f2c041', '16760231503.jpg', 'online');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
