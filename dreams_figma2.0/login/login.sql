-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2023 at 01:43 AM
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
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `name`, `age`, `phone_no`, `email`, `pwd`) VALUES
(1, 'Hargraves', 38, 7879879879, 'Mph@msn.com', '123'),
(2, 'Hill', 37, 1234698741, 'SophcYN7381qMe8lRqK@aol.com', '123'),
(3, 'Onio', 32, 1472589630, 'xE@msn.com', '123'),
(4, 'Boni', 31, 6546598798, 'WduR0o0@comcast.net', '123'),
(5, 'Mitchell', 35, 7987979879, 'walHI9cmWJIBKvy0@aol.com', '123'),
(6, 'Chu', 38, 1236987450, 'OoececBAnkd@yahoo.com', '123'),
(7, 'Bartlett', 38, 1234567890, '5BzoRFTP6tdHfs@hotmail.com', '123'),
(8, 'Obinna', 35, 5481545511, 'BHyROtaYxz2ix11@comcast.net', '123'),
(9, 'Jesse', 33, 7896547433, 'KMBMKcI60@gmail.com', '123'),
(10, 'Waltuh ', 33, 9945687023, 'v4oFiwefIEWJguk@msn.com', '123'),
(11, 'Bearce', 40, 6347854756, 'EGmvTx@yahoo.com', '123'),
(12, 'Andrews', 27, 7896542361, 'hOTxWSnanALfSiv@gmail.com', '123'),
(13, 'Kay', 33, 8543122767, 'uqCdy@hotmail.com', '123'),
(14, 'Chin', 42, 7348525445, 'qmdV2@yahoo.com', '123'),
(15, 'Scott', 29, 8390282983, 'Gb6du3vhnGVhT5alS1y@yahoo.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
