-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2019 at 07:38 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafe_rizky`
--
CREATE DATABASE IF NOT EXISTS `cafe_rizky` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cafe_rizky`;

-- --------------------------------------------------------

--
-- Table structure for table `detail_orderan`
--

CREATE TABLE `detail_orderan` (
  `id_detail_orderan` int(15) NOT NULL,
  `id_orderan` int(5) NOT NULL,
  `id_masakan` varchar(15) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `status_detail_order` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_orderan`
--

INSERT INTO `detail_orderan` (`id_detail_orderan`, `id_orderan`, `id_masakan`, `keterangan`, `status_detail_order`) VALUES
(1, 1, '4', '-', 'DIPESAN');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(5) NOT NULL,
  `nama_level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'administrator'),
(2, 'waiter'),
(3, 'kasir'),
(4, 'owner'),
(5, 'pelanggan');

-- --------------------------------------------------------

--
-- Table structure for table `masakan`
--

CREATE TABLE `masakan` (
  `id_masakan` varchar(15) NOT NULL,
  `nama_masakan` varchar(30) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `status_masakan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masakan`
--

INSERT INTO `masakan` (`id_masakan`, `nama_masakan`, `harga`, `status_masakan`) VALUES
('1', 'Cappucino Venezuela', '25k', 'Tersedia'),
('2', 'Pancake', '30k', 'Tersedia'),
('3', 'Kopi Hitam ', '25k', 'Tersedia'),
('4', 'Teh Herbal', '25k', 'Tersedia'),
('5', 'Teh Kopi', '25k', 'Tersedia'),
('6', 'Roti Kukus', '25k', 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `orderan`
--

CREATE TABLE `orderan` (
  `id_orderan` int(5) NOT NULL,
  `no_meja` varchar(15) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `id_user` varchar(15) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `status_order` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderan`
--

INSERT INTO `orderan` (`id_orderan`, `no_meja`, `tanggal`, `id_user`, `keterangan`, `status_order`) VALUES
(1, '2', '17 januari 2019', '1pelanggan', '-', 'DIPESAN'),
(18, '1', '17 januari 2019', '1pelanggan', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(15) NOT NULL,
  `id_user` varchar(15) NOT NULL,
  `id_orderan` int(5) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `total_bayar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `id_level` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`, `id_level`) VALUES
('1admin', 'mydearest1', '123', 'rizki', 1),
('1kasir', 'mydearest3', '123', 'rizki', 3),
('1owner', 'mydearest4', '123', 'rizki', 4),
('1pelanggan', 'mydearest5', '123', 'rizki', 5),
('1waiter', 'mydearest2', '123', 'rizki', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_orderan`
--
ALTER TABLE `detail_orderan`
  ADD PRIMARY KEY (`id_detail_orderan`),
  ADD KEY `id_masakan` (`id_masakan`),
  ADD KEY `id_orderan` (`id_orderan`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `masakan`
--
ALTER TABLE `masakan`
  ADD PRIMARY KEY (`id_masakan`);

--
-- Indexes for table `orderan`
--
ALTER TABLE `orderan`
  ADD PRIMARY KEY (`id_orderan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_orderan` (`id_orderan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_orderan`
--
ALTER TABLE `detail_orderan`
  MODIFY `id_detail_orderan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orderan`
--
ALTER TABLE `orderan`
  MODIFY `id_orderan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(15) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_orderan`
--
ALTER TABLE `detail_orderan`
  ADD CONSTRAINT `detail_orderan_ibfk_1` FOREIGN KEY (`id_masakan`) REFERENCES `masakan` (`id_masakan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_orderan_ibfk_2` FOREIGN KEY (`id_orderan`) REFERENCES `orderan` (`id_orderan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orderan`
--
ALTER TABLE `orderan`
  ADD CONSTRAINT `orderan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`id_orderan`) REFERENCES `orderan` (`id_orderan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
