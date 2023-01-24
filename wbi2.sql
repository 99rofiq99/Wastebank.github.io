-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2021 at 03:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wbi2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(256) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tlp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `email`, `tlp`) VALUES
('ahmad123', 'ahmad', 'ahmad@gmail.com', '12131313');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_sampah`
--

CREATE TABLE `jenis_sampah` (
  `kode_jenis` int(150) NOT NULL,
  `nama_jenis` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jual_produk`
--

CREATE TABLE `jual_produk` (
  `harga_beli` int(200) NOT NULL,
  `jumlah_beli` int(200) NOT NULL,
  `kode_beli` int(200) NOT NULL,
  `kode_produk` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jual_sampah`
--

CREATE TABLE `jual_sampah` (
  `harga_beli` int(200) NOT NULL,
  `jumlah_beli` char(150) NOT NULL,
  `kode_beli` int(150) NOT NULL,
  `kode_sampah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nasabah`
--

CREATE TABLE `nasabah` (
  `alamat_nasabah` char(200) NOT NULL,
  `kode_nasabah` int(150) NOT NULL,
  `nama_nasabah` char(200) NOT NULL,
  `tlpn_nasabah` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `gambar_produk` char(200) NOT NULL,
  `harga_produk` char(200) NOT NULL,
  `kode_jual` int(50) NOT NULL,
  `kode_produk` int(100) NOT NULL,
  `kode_supplier` int(100) NOT NULL,
  `nama_produk` char(200) NOT NULL,
  `stok` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `saldo`
--

CREATE TABLE `saldo` (
  `debet` int(11) NOT NULL,
  `kode_setor` int(11) NOT NULL,
  `kode_user` int(11) NOT NULL,
  `kredit` int(11) NOT NULL,
  `tanggal_setor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sampah`
--

CREATE TABLE `sampah` (
  `harga_jual` int(200) NOT NULL,
  `harga_sampah` char(200) NOT NULL,
  `keterangan_sampah` char(150) NOT NULL,
  `kode_jenis` int(100) NOT NULL,
  `kode_sampah` int(100) NOT NULL,
  `nama_sampah` char(200) NOT NULL,
  `stok` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `setor`
--

CREATE TABLE `setor` (
  `berat_setor` varchar(200) NOT NULL,
  `harga_setor` int(150) NOT NULL,
  `kode_sampah` int(150) NOT NULL,
  `kode_setor` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `alamat_supplier` char(200) NOT NULL,
  `kode_supplier` int(100) NOT NULL,
  `nama_supplier` char(150) NOT NULL,
  `tlpn_supplier` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `almt_user` char(200) NOT NULL,
  `kode_user` int(150) NOT NULL,
  `nama_user` char(200) NOT NULL,
  `password` char(100) NOT NULL,
  `tlpn_user` char(100) NOT NULL,
  `username` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_sampah`
--
ALTER TABLE `jenis_sampah`
  ADD PRIMARY KEY (`kode_jenis`);

--
-- Indexes for table `jual_produk`
--
ALTER TABLE `jual_produk`
  ADD PRIMARY KEY (`kode_beli`,`kode_produk`);

--
-- Indexes for table `jual_sampah`
--
ALTER TABLE `jual_sampah`
  ADD PRIMARY KEY (`kode_beli`,`kode_sampah`);

--
-- Indexes for table `nasabah`
--
ALTER TABLE `nasabah`
  ADD PRIMARY KEY (`kode_nasabah`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kode_jual`,`kode_produk`,`kode_supplier`);

--
-- Indexes for table `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`kode_setor`,`kode_user`);

--
-- Indexes for table `sampah`
--
ALTER TABLE `sampah`
  ADD PRIMARY KEY (`kode_jenis`,`kode_sampah`);

--
-- Indexes for table `setor`
--
ALTER TABLE `setor`
  ADD PRIMARY KEY (`kode_sampah`,`kode_setor`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`kode_supplier`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kode_user`,`password`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
