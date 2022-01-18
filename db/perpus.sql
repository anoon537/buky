-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 03:44 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(15) NOT NULL,
  `judul` varchar(150) DEFAULT NULL,
  `pengarang` varchar(50) DEFAULT NULL,
  `penerbit` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `pengarang`, `penerbit`) VALUES
('B001', 'Pendidikan Agama Islam untuk Perguruan Tinggi', 'Dr. Mardani', 'PRENADAMEDIA GROUP'),
('B002', 'A-Z Psikologi : Berbagai kumpulan topik Psikologi', 'Zainul Anwar', 'Andi Offset'),
('B003', 'Bangsa gagal ; Mencari identitas kebangsaan', 'Nasruddin Anshoriy', 'LKiS'),
('B004', 'Buku Ajar Tumbuh Kembang Remaja &amp; Permasalahanya', 'Soetjiningsih', 'Sagung Seto'),
('B005', 'Etnografi Pengobatan; Praktik Budaya peramuan &amp; sugesti komunitas adat Tau Taa Vana', 'Alie Humaedi', 'LKiS'),
('B006', 'Aplikasi Praktis Asuhan Keperawatan Keluarga', 'Komang Ayu Heni', 'Sagung Seto'),
('B007', 'Kolaborasi PHP 5 dan Mysql untuk pengembangan website + cd', 'Eko Priyo Utomo', 'Andi Offset'),
('B008', 'Kuasa Wanita Jawa', 'Christina S Handayani', 'LKiS'),
('B009', 'Kumpulan Undang undang Sistem peradilan Pidana', 'Lincon Arsyad', 'Andi Offset'),
('B010', 'Langsung Praktik Komputerisasi Akuntansi Dengan MYOB', 'Wahana Komputer', 'Andi Offset');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` varchar(4) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama`, `alamat`, `no_telp`) VALUES
('M001', 'Wiliam', 'Cilacap, Jawa Tengah', '082221172827'),
('M002', 'Agus', 'Purwokerto, Jawa Tengah', '082221122824'),
('M003', 'Imam ', 'Purbalingga, Jawa Tengah', '081289253905'),
('M005', 'Dimas', 'Jakarta', '0812345678'),
('M006', 'Siti', 'Yogyakarta', '0812345678');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(10) UNSIGNED NOT NULL,
  `id_buku` varchar(15) NOT NULL,
  `id_member` varchar(4) NOT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `transaksi_FKIndex1` (`id_member`),
  ADD KEY `transaksi_FKIndex2` (`id_buku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
