-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2023 at 04:46 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`id`, `nama`, `gambar`, `harga`) VALUES
(1, 'ITB EST 1920', 'https://alisatia.000webhostapp.com/upload/baju1.jpg', '150.000'),
(2, 'ITB Floral', 'https://alisatia.000webhostapp.com/upload/baju2.jpg', '150.000'),
(3, 'ITB C59 Bold Inner', 'https://alisatia.000webhostapp.com/upload/baju3.jpg', '140.000'),
(6, 'ITB C59 Inner', 'https://alisatia.000webhostapp.com/upload/baju4.jpg', '130.000'),
(7, 'ITB C59 Sun Compas', 'https://alisatia.000webhostapp.com/upload/baju5.jpg', '140.000'),
(8, 'Oversize Astronout', 'https://alisatia.000webhostapp.com/upload/baju6.jpg', '220.000'),
(9, 'Oversize Institum', 'https://alisatia.000webhostapp.com/upload/baju7.jpg', '210.000'),
(10, 'Oversize Zeer', 'https://alisatia.000webhostapp.com/upload/baju8.jpg', '230.000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`email`, `username`, `password`, `id`, `name`) VALUES
('ali@gmail.com', 'ali', '123', 1, 'ali'),
('', 'test', '111', 2, 'test'),
('', '123', '123', 3, '123'),
('111', '1111', '1', 4, ''),
('ali', 'ali', '1', 5, ''),
('satia@gmail.com', 'satia', 'ali', 6, ''),
('123', '123', '123', 7, ''),
('alis@gmail.com', 'ali', 'ali', 8, ''),
('alii', 'ali', '111', 9, ''),
('itb3@gmail.com', 'itbpress', 'asd', 10, ''),
('asd', 'itbpress', '123', 11, ''),
('123213', '12321', '123', 12, '');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `jk` char(1) NOT NULL,
  `status` char(1) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id_user`, `nama`, `alamat`, `email`, `agama`, `jk`, `status`, `created_date`, `modified_date`) VALUES
(1, 'edi sutanto    ', 'Jakarta', 'edisutanto007@gmail.com', 'Islam', 'L', 'A', '2015-12-24 20:00:00', '2015-12-26 20:45:53'),
(2, 'Alex', 'Lampung', 'aaaa@gmail.com', 'Kristen', 'L', 'A', '2015-12-26 21:35:28', NULL),
(3, 'Dewi', 'Bekasi', 'ddd@gmail.com', 'Katolik', 'P', 'T', '2015-12-26 21:35:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `age`, `email`) VALUES
(1, 'ali', 11, 'ali@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
