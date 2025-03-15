-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2025 at 08:21 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_karen`
--

-- --------------------------------------------------------

--
-- Table structure for table `api_keys`
--

CREATE TABLE `api_keys` (
  `id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `my_key` varchar(50) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` int(1) NOT NULL,
  `is_private_key` int(1) NOT NULL,
  `ip_addresses` text NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `api_keys`
--

INSERT INTO `api_keys` (`id`, `user_id`, `my_key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 0, '@Programmer2013', 0, 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cvsu_enrolled_students`
--

CREATE TABLE `cvsu_enrolled_students` (
  `id` int(12) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `school` varchar(100) NOT NULL,
  `school_address` varchar(100) NOT NULL,
  `control_number` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `remarks` varchar(36) NOT NULL,
  `status` int(11) NOT NULL,
  `form_137` text NOT NULL,
  `category` varchar(36) NOT NULL,
  `date_added` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cvsu_enrolled_students`
--

INSERT INTO `cvsu_enrolled_students` (`id`, `fname`, `lname`, `mname`, `address`, `school`, `school_address`, `control_number`, `program`, `remarks`, `status`, `form_137`, `category`, `date_added`) VALUES
(1, 'Student', '1', 'a', 'Sample', 'Sample', 'Sample', 'Sample1', 'Sample', 'Incomplete', 0, '', 'New', '2025-03-15 15:04:46'),
(2, 'Student', '2', 'a', 'Sample2', 'Sample2', 'Sample2', 'Sample2', 'Sample2', 'Complete', 0, 'Datatables  Codefox - Responsive Admin Dashboard Template (3).pdf', 'Transferee', '2025-03-15 15:04:46'),
(3, '1', '1', '1', '1', '1', '1', '1', '1', 'Incomplete', 0, '', '', '2025-03-15 15:12:53'),
(4, 'dassa', 'dasd', 'asd', 'asd', 'asd', 'asd', 'sd', 'asd', 'Incomplete', 0, '', 'Transferee', '2025-03-15 15:14:35');

-- --------------------------------------------------------

--
-- Table structure for table `cvsu_system_user`
--

CREATE TABLE `cvsu_system_user` (
  `id` int(12) NOT NULL,
  `firstname` varchar(36) NOT NULL,
  `lastname` varchar(36) NOT NULL,
  `role` varchar(36) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(32) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cvsu_system_user`
--

INSERT INTO `cvsu_system_user` (`id`, `firstname`, `lastname`, `role`, `email`, `contact`, `username`, `password`, `date_added`) VALUES
(1, 'Albert', 'Einstien', 'Employee', 'employee@gmail.com', '11111', 'employee', '$2y$10$UQuBPHyB09Bcvqx.8lZZJuBg/Q.3uVSw70DdGedAxPv23WqpP191.', '2024-10-09 04:52:21'),
(8, 'Administrator', 'Administrator', 'Administrator', 'support1@simmate.com', '00000000', 'superadmin', '17c4520f6cfd1ab53d8745e84681eb49', '2024-10-09 04:52:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api_keys`
--
ALTER TABLE `api_keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cvsu_enrolled_students`
--
ALTER TABLE `cvsu_enrolled_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cvsu_system_user`
--
ALTER TABLE `cvsu_system_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api_keys`
--
ALTER TABLE `api_keys`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cvsu_enrolled_students`
--
ALTER TABLE `cvsu_enrolled_students`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cvsu_system_user`
--
ALTER TABLE `cvsu_system_user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
