-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2024 at 11:04 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ls_queue`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_numq`
--

CREATE TABLE `tb_numq` (
  `id` int(11) NOT NULL,
  `q_chn1` int(11) NOT NULL,
  `q_chn2` int(11) NOT NULL,
  `q_chn3` int(11) NOT NULL,
  `chk_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_numq`
--

INSERT INTO `tb_numq` (`id`, `q_chn1`, `q_chn2`, `q_chn3`, `chk_date`) VALUES
(1, 303, 302, 300, '2024-06-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_numq`
--
ALTER TABLE `tb_numq`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_numq`
--
ALTER TABLE `tb_numq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
