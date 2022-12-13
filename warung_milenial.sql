-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2022 at 09:24 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warung_milenial`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(50) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `total_belanja` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `tanggal_pemesanan`, `total_belanja`) VALUES
(54, '2022-08-18', 45000),
(56, '2022-08-22', 5000),
(57, '2022-08-22', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan_produk`
--

CREATE TABLE `pemesanan_produk` (
  `id_pemesanan_produk` int(50) NOT NULL,
  `id_pemesanan` int(50) NOT NULL,
  `id_menu` varchar(50) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `id_user` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan_produk`
--

INSERT INTO `pemesanan_produk` (`id_pemesanan_produk`, `id_pemesanan`, `id_menu`, `jumlah`, `id_user`) VALUES
(39, 49, '6', 1, 0),
(40, 50, '6', 1, 0),
(41, 51, '24', 1, 0),
(42, 52, '24', 1, 0),
(43, 52, '25', 1, 0),
(44, 52, '26', 1, 0),
(45, 53, '26', 1, 0),
(46, 53, '24', 1, 0),
(47, 54, '24', 2, 0),
(48, 54, '25', 1, 0),
(49, 55, '24', 1, 0),
(50, 55, '25', 1, 0),
(51, 56, '26', 1, 0),
(52, 57, '26', 1, 0),
(53, 57, '25', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_menu` int(50) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `jenis_menu` varchar(50) NOT NULL,
  `stok` int(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `deskripsi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_menu`, `nama_menu`, `jenis_menu`, `stok`, `harga`, `gambar`, `deskripsi`) VALUES
(25, 'Bakso Gede', '', 10, 15000, 'bakso.jpeg', 'Bakso Ternikmat Seindramayu Dan Warung Milenial Menyediakan Bakso Paling Enak'),
(26, 'Es Jeruk', 'Makanan', 10, 5000, 'esjeruk.jpg', ''),
(27, 'Ayam Bakar', 'Makanan', 10, 20000, 'ayambakar.jpg', ''),
(28, 'Es Teh Manis', 'Minuman', 10, 5000, 'tehobeng.jpg', ''),
(29, 'Mie Ayam Bakso', 'Makanan', 10, 10000, 'mieayambakso.jpg', ''),
(30, 'Aqua', 'Minuman', 10, 5000, 'sanford.jpg', ''),
(32, 'Nasi Putih ', 'Makanan', 10, 5000, 'nasi.jpeg', ''),
(45, 'Nasi Goreng', 'Makanan', 10, 12000, 'nasgor.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `hp` varchar(25) NOT NULL,
  `status` enum('admin','user','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `hp`, `status`) VALUES
(7, 'riski', 'riski123', 'riski ahmad ilham', 'Laki-Laki', '2022-07-23', 'indramayu', '0895341206291', 'user'),
(13, 'admin1', 'admin', 'admin ganteng', 'laki laki', '2022-08-08', 'indramayu', '089534126921', 'admin'),
(14, 'admin2', 'd033e22ae348aeb5660fc2140', 'debi', 'laki laki', '2002-08-02', 'indramayu', '089534126921', 'user'),
(17, 'debi', 'debi123', 'debi nabilah', 'Perempuan', '2022-08-19', 'indramayu', '081923123', 'user'),
(19, 'roy', 'roy123', 'roy kiyoshi', 'Laki-Laki', '2022-08-21', 'indramayu', '0895341206291', 'user'),
(20, 'aam', 'aam123', 'aam rozali', 'Laki-Laki', '2022-08-22', 'indramayu', '123123123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `pemesanan_produk`
--
ALTER TABLE `pemesanan_produk`
  ADD PRIMARY KEY (`id_pemesanan_produk`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `pemesanan_produk`
--
ALTER TABLE `pemesanan_produk`
  MODIFY `id_pemesanan_produk` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_menu` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
