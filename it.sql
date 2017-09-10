-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2017 at 04:02 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin123', 'admin1234', ''),
(4, 'admin1', 'admin1', 'priyank22259@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `admin_req`
--

CREATE TABLE `admin_req` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `emp_no` int(7) NOT NULL,
  `mob_no` int(12) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `status` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_req`
--

INSERT INTO `admin_req` (`id`, `name`, `email`, `emp_no`, `mob_no`, `reason`, `status`) VALUES
(5, 'Priyank', 'priyank22259@gmail.com', 123467, 2147483647, 'hgfvcbnj', 'set');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `uid` varchar(64) NOT NULL,
  `emp_number` int(8) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `validity` int(2) NOT NULL,
  `cost` int(5) NOT NULL,
  `avatar` varchar(68) NOT NULL,
  `photo` int(2) NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`uid`, `emp_number`, `name`, `gender`, `validity`, `cost`, `avatar`, `photo`, `start_date`) VALUES
('S59935e73516cb', 123123, 'Neymar', 'male', 1, 100, 'S59935e73516cb.jpg', 1, '2017-09-05 12:46:01'),
('S59935e8268519', 123123, 'Rooney', 'male', 1, 100, 'S59935e8268519.png', 1, '2017-09-05 12:46:01'),
('S59935e8a92126', 123123, 'Ozil', 'male', 3, 250, 'S59935e8a92126.png', 1, '2017-09-05 12:46:01'),
('S59af9774499ea', 123456, 'Danial', 'male', 2, 175, 'S59af9774499ea.png', 1, '2017-09-06 06:37:14'),
('S59af977b76628', 123456, 'Khan', 'male', 3, 250, 'S59af977b76628.jpg', 1, '2017-09-06 06:37:19'),
('S59af99952426b', 222259, 'Danial', 'male', 2, 175, 'S59af99952426b.jpg', 1, '2017-09-06 06:45:54'),
('S59af999bc401f', 222259, 'Khan', 'male', 3, 250, 'S59af999bc401f.png', 1, '2017-09-06 06:46:02'),
('S59aff639353af', 147258, 'Mesut Ozil', 'male', 1, 100, 'S59aff639353af.jpg', 1, '2017-09-06 13:26:17');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `emp_no` int(8) NOT NULL,
  `payment_id` varchar(60) NOT NULL,
  `payment_request_id` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `emp_no`, `payment_id`, `payment_request_id`) VALUES
(1, 147258, 'MOJO7906005A57824793', '1f82f642d8744d3084368716ba2eb468');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `emp_number` int(7) NOT NULL,
  `emp_fname` varchar(20) NOT NULL,
  `emp_lname` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `status` varchar(6) NOT NULL,
  `no_members` int(5) NOT NULL,
  `photo` varchar(6) NOT NULL,
  `paid` varchar(4) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `emp_number`, `emp_fname`, `emp_lname`, `password`, `gender`, `status`, `no_members`, `photo`, `paid`) VALUES
(1, 123123, 'Priyank', 'Tyagi', 'priyank21', 'male', 'set', 3, 'set', 'yes'),
(2, 123456, 'Priyamk', 'Tyagi', '1234567', 'male', 'set', 2, 'set', 'yes'),
(3, 222259, 'Danial', 'Khan', '1234567', 'male', 'set', 2, 'set', 'yes'),
(4, 147258, 'Mesut', 'Ozil', '1234567', 'male', 'set', 1, 'set', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_req`
--
ALTER TABLE `admin_req`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `admin_req`
--
ALTER TABLE `admin_req`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
