-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2024 at 06:42 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `administration_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `role` varchar(50) NOT NULL,
  `pekerjaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`id`, `image`, `nama`, `status`, `role`, `pekerjaan`) VALUES
(1, 'avatar.png', 'Alfreds Futterkiste', 'Active', 'Product Desainer', 4),
(2, 'avatar.png', 'Alfreds Futterkiste', 'Active', 'Product Desainer', 4),
(3, 'avatar.png', 'Alfreds Futterkiste', 'Active', 'Product Desainer', 4),
(4, 'avatar.png', 'Alfreds Futterkiste', 'Active', 'Product Desainer', 4),
(5, 'avatar.png', 'Alfreds Futterkiste', 'Active', 'Product Desainer', 4),
(6, 'avatar.png', 'Alfreds Futterkiste', 'Active', 'Product Desainer', 4);

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nama_tugas` varchar(100) NOT NULL,
  `deskripsi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `tanggal`, `image`, `nama`, `nama_tugas`, `deskripsi`) VALUES
(1, '1 Januari 2024', 'avatar.png', 'Alfreds Futterkiste', 'Nama Tugas', 'Lorem ipsum dolor sit amet consectetur. Viverra volutpat scelerisque id vitae.'),
(2, '1 Januari 2024', 'avatar.png', 'Alfreds Futterkiste', 'Nama Tugas', 'Lorem ipsum dolor sit amet consectetur. Viverra volutpat scelerisque id vitae.'),
(3, '1 Januari 2024', 'avatar.png', 'Alfreds Futterkiste', 'Nama Tugas', 'Lorem ipsum dolor sit amet consectetur. Viverra volutpat scelerisque id vitae.'),
(4, '1 Januari 2024', 'avatar.png', 'Alfreds Futterkiste', 'Nama Tugas', 'Lorem ipsum dolor sit amet consectetur. Viverra volutpat scelerisque id vitae.'),
(5, '1 Januari 2024', 'avatar.png', 'Alfreds Futterkiste', 'Nama Tugas', 'Lorem ipsum dolor sit amet consectetur. Viverra volutpat scelerisque id vitae.'),
(6, '1 Januari 2024', 'avatar.png', 'Alfreds Futterkiste', 'Nama Tugas', 'Lorem ipsum dolor sit amet consectetur. Viverra volutpat scelerisque id vitae.'),
(7, '1 Januari 2024', 'avatar.png', 'Alfreds Futterkiste', 'Nama Tugas', 'Lorem ipsum dolor sit amet consectetur. Viverra volutpat scelerisque id vitae.'),
(8, '1 Januari 2024', 'avatar.png', 'Alfreds Futterkiste', 'Nama Tugas', 'Lorem ipsum dolor sit amet consectetur. Viverra volutpat scelerisque id vitae.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `peran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `image`, `nama`, `tanggal_lahir`, `email`, `no_telp`, `peran`) VALUES
(1, 'avatar.png', 'Alfreds Futterkiste', '2000-01-01', 'username@email.com', '081234567890', 'Admin'),
(2, 'avatar.png', 'Alfreds Futterkiste', '2000-01-01', 'username@email.com', '081234567890', 'Admin'),
(3, 'avatar.png', 'Alfreds Futterkiste', '2000-01-01', 'username@email.com', '081234567890', 'Admin'),
(4, 'avatar.png', 'Alfreds Futterkiste', '2000-01-01', 'username@email.com', '081234567890', 'Admin'),
(5, 'avatar.png', 'Alfreds Futterkiste', '2000-01-01', 'username@email.com', '081234567890', 'Admin'),
(6, 'avatar.png', 'Alfreds Futterkiste', '2000-01-01', 'username@email.com', '081234567890', 'Admin'),
(7, 'avatar.png', 'Alfreds Futterkiste', '2000-01-01', 'username@email.com', '081234567890', 'Admin'),
(8, 'avatar.png', 'Alfreds Futterkiste', '2000-01-01', 'username@email.com', '081234567890', 'Admin'),
(9, 'avatar.png', 'Alfreds Futterkiste', '2000-01-01', 'username@email.com', '081234567890', 'Admin'),
(10, 'avatar.png', 'Alfreds Futterkiste', '2000-01-01', 'username@email.com', '081234567890', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
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
-- AUTO_INCREMENT for table `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;