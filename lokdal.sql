-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2021 at 12:48 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lokdal`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `img4` text NOT NULL,
  `img5` text NOT NULL,
  `img6` text NOT NULL,
  `t1` text NOT NULL,
  `t2` text NOT NULL,
  `t3` text NOT NULL,
  `t4` text NOT NULL,
  `t5` text NOT NULL,
  `t6` text NOT NULL,
  `s1` text NOT NULL,
  `s2` text NOT NULL,
  `s3` text NOT NULL,
  `s4` text NOT NULL,
  `s5` text NOT NULL,
  `s6` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `title`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `t1`, `t2`, `t3`, `t4`, `t5`, `t6`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `date`) VALUES
(28, 'Dharna Protest', 'img/activity/dharna1.jpeg', 'img/activity/dharna2.jpg', 'img/activity/dharna3.jpeg', 'img/activity/dharna4.jpg', 'img/activity/dharna5.jpeg', 'img/activity/dharna6.jpg', 'Dharna Pradershan', 'Protest Bus', 'Group Protest', 'Walking protest on Road', 'Group Protest', 'Walking protest on Road', 'By Chaudhary Sunil Singh', 'By Chaudhary Sunil Singh', 'By Chaudhary Sunil Singh', 'By Chaudhary Sunil Singh', 'By Chaudhary Sunil Singh', 'By Chaudhary Sunil Singh', '2021-07-02 14:25:23'),
(33, 'T-20 Championship', 'img/activity/1.JPG', 'img/activity/2.JPG', 'img/activity/3.JPG', 'img/activity/4.JPG', 'img/activity/5.JPG', 'img/activity/7.JPG', 'Cash Prize Distribution', 'Bike Prize for winner', 'Trophies Distribution', 'Game Play', 'Committee Members', 'Cricket Match', 'Cricket Match', 'T-20 Match', 'By Chaudhary Sunil Singh', 'Cricket Match', 'Cricket Match', 'T-20 Championship', '2021-07-03 15:02:15');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `msg` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `msg`, `time`) VALUES
('abc', 'efg', 'lmn', '2021-06-15 11:09:50'),
('Kartik Kaushik', 'kartik14101997@gmail.com', 'asas', '2021-06-15 11:09:50'),
('abhijeet', 'kartik14101997@gmail.com', 'asas', '2021-06-15 11:09:50'),
('abhijeet', 'kartik14101997@gmail.com', 'asas', '2021-06-15 11:09:50'),
('abhijeet', 'kartik14101997@gmail.com', 'asas', '2021-06-15 11:09:50'),
('abhijeet', 'kartik14101997@gmail.com', 'asas', '2021-06-15 11:09:50'),
('Kartik Kaushik', 'kartik14101997@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaaaaa', '2021-06-15 11:09:50'),
('Kartik Kaushik', 'kartik14101997@gmail.com', 'aaahi I am Kartik', '2021-06-15 11:09:50'),
('Viren', 'kartik14101997@gmail.com', 'Holaaa', '2021-06-15 11:09:50'),
('Viren', 'kartik14101997@gmail.com', 'Holaaa', '2021-06-15 11:09:50'),
('Viren', 'kartik14101997@gmail.com', 'Holaaa', '2021-06-15 11:09:50'),
('Kartik Kaushik', 'kartik14101997@gmail.com', 'ascasc', '2021-06-15 11:09:50'),
('Ram Kumar', 'ram@abc.com', 'Hi I am Ram', '2021-06-15 11:10:19'),
('Kartik Kaushik', 'kartik14101997@gmail.com', 'hi Kartik This side !!', '2021-06-17 04:27:56'),
('Neeraj Singh', 'Neeraj@123.com', 'Holaa Neeraj', '2021-06-17 06:50:01'),
('Kartik Kaushik', 'kartik14101997@gmail.com', 'aaaaaaaaaaaa', '2021-06-21 07:45:36');

-- --------------------------------------------------------

--
-- Table structure for table `daily_update`
--

CREATE TABLE `daily_update` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daily_update`
--

INSERT INTO `daily_update` (`id`, `title`, `description`, `img`, `date`) VALUES
(14, 'Art 3', 'Art 3', 'img/update/Art2.jpg', '2021-06-29 10:49:59'),
(35, 'Art 1', 'Artist 1', 'img/update/Art1.jpg', '2021-07-03 16:45:31'),
(36, 'Art 2', 'Artist 2', 'img/update/Art3.jpg', '2021-07-03 16:45:51');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `contact` text NOT NULL,
  `amount` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`name`, `email`, `contact`, `amount`, `time`) VALUES
('Kartik Kaushik', 'kartik14101997@gmail.com', '8800253602', 200, '2021-06-21 10:49:59'),
('Neeraj Singh', 'Neeraj@123.com', '78956855245', 5000, '2021-06-21 10:49:59'),
('Kartik Kaushik', 'kartik14101997@gmail.com', '+918800253602', 15000, '2021-06-21 10:49:59');

-- --------------------------------------------------------

--
-- Table structure for table `executives`
--

CREATE TABLE `executives` (
  `name` text NOT NULL,
  `f_name` text NOT NULL,
  `mobile` text NOT NULL,
  `village` text NOT NULL,
  `block` text NOT NULL,
  `address` text NOT NULL,
  `id` int(11) NOT NULL,
  `designation` text NOT NULL,
  `region` text NOT NULL,
  `state` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `executives`
--

INSERT INTO `executives` (`name`, `f_name`, `mobile`, `village`, `block`, `address`, `id`, `designation`, `region`, `state`) VALUES
('Kartik Kaushik', 'Sudhir Kaushik', '8800253602', 'GorakPur', 'Bihar Cantonment', ' Jamun ke Ped Vala Ghar', 17, 'Vice- President', 'Sambhal', 'Uttar Pradesh'),
('Kartik', 'sk', '+918800253602', 'GorakPur', 'Bihar Cantonment', '    S-158, Param Puri, Uttam Nagar', 22, 'Vice- President', 'Sambhal', 'Haryana'),
('Kartik Kaushik', 'Sudhir Kaushik', '+918800253602', 'GorakPur', 'Bihar Cantonment', '    S-158, Param Puri, Uttam Nagar', 23, 'Vice- President', 'Bro Code', 'Bihar'),
('Kartik Kaushik', 'sk', '+918800253602', 'Bharal', 'Pani Ki Tanki', '    S-158, Param Puri, Uttam Nagar', 24, 'Vice- President', 'Sambhal', 'Bihar'),
('Kartik Kaushik', 'sk', '+918800253602', 'GorakPur', 'Bihar Cantonment', '  S-158, Param Puri, Uttam Nagar', 25, 'Vice- President', 'Sambhal', 'Bihar');

-- --------------------------------------------------------

--
-- Table structure for table `leaders`
--

CREATE TABLE `leaders` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaders`
--

INSERT INTO `leaders` (`id`, `name`, `img`, `link`) VALUES
(6, 'Chaudhary Charan Singh', 'charan profile.jpg', 'pages/charan.php'),
(7, 'Chaudhary Sunil Singh', 'sunil profile.jpg', 'pages/sunil.php'),
(8, 'Chaudhary Rajinder Singh', 'Rajinder Singh.png', '#');

-- --------------------------------------------------------

--
-- Table structure for table `leader_updates`
--

CREATE TABLE `leader_updates` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leader_updates`
--

INSERT INTO `leader_updates` (`id`, `img`) VALUES
(9, 'img/leader_update/1.jpg'),
(10, 'img/leader_update/2.jpg'),
(11, 'img/leader_update/3.jpg'),
(12, 'img/leader_update/4.jpg'),
(13, 'img/leader_update/5.jpg'),
(15, 'img/leader_update/6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `contact` text NOT NULL,
  `aadhar` text NOT NULL,
  `address` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `tag` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`name`, `email`, `contact`, `aadhar`, `address`, `time`, `tag`) VALUES
('Kartik Kaushik', 'kartik@gmail.com', '8856485124', '224586 6945 2022 3652', 'B/22A City in delhi-110053', '2021-06-19 07:27:21', ''),
('Kartik Kaushik', 'kartik14101997@gmail.com', '8800253602', '3514354165413016584', 'S-158, Param Puri, Uttam Nagar', '2021-06-19 07:51:45', ''),
('Neeraj', 'coolboykartikkaushik@gmail.com', '+918800253602', '3514354165413016584', 'S-158, Param Puri, Uttam Nagar', '2021-06-19 07:52:26', ''),
('Kartik Kaushik', 'kartik14101997@gmail.com', 'a', '3514354165413016584', 'S-158, Param Puri, Uttam Nagar', '2021-06-21 07:44:56', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `pass` text NOT NULL,
  `email` text NOT NULL,
  `contact` text NOT NULL,
  `dp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `pass`, `email`, `contact`, `dp`) VALUES
(23, 'admin', 'admin', 'admin@lokdal.com', '+918800253602', 'img/users/sunil profile.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daily_update`
--
ALTER TABLE `daily_update`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `executives`
--
ALTER TABLE `executives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaders`
--
ALTER TABLE `leaders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leader_updates`
--
ALTER TABLE `leader_updates`
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
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `daily_update`
--
ALTER TABLE `daily_update`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `executives`
--
ALTER TABLE `executives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `leaders`
--
ALTER TABLE `leaders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `leader_updates`
--
ALTER TABLE `leader_updates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
