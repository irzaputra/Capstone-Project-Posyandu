-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 02:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posyandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_balita`
--

CREATE TABLE `tb_balita` (
  `id_bayi` int(11) NOT NULL,
  `Nama_bayi` varchar(100) NOT NULL,
  `NIK` varchar(50) NOT NULL,
  `Jenis_kelamin` enum('L','P') NOT NULL,
  `Tempat_lahir` text NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `Berat_badan` int(100) NOT NULL,
  `Tinggi_badan` int(100) NOT NULL,
  `Lingkar_badan` int(100) NOT NULL,
  `Golongan_darah` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_balita`
--

INSERT INTO `tb_balita` (`id_bayi`, `Nama_bayi`, `NIK`, `Jenis_kelamin`, `Tempat_lahir`, `Tanggal_lahir`, `Berat_badan`, `Tinggi_badan`, `Lingkar_badan`, `Golongan_darah`) VALUES
(1, 'Dwi Putra Zainudin Arsyad', '8970986678432098', 'L', 'Jember', '2018-01-23', 9, 110, 75, 'B'),
(2, 'Asep Saputra', '0987795685321089', 'L', 'Bandung', '2018-01-01', 55, 105, 75, 'AB'),
(3, 'Indira Putri Maharani', '1235463258756980', 'P', 'Jakarta', '2018-08-07', 53, 104, 75, 'B'),
(4, 'Rini Ayunda Kusnawati', '0', 'P', 'Situbondo', '2017-09-08', 55, 105, 71, 'A'),
(5, 'Andre Putra', '0', 'L', 'Jakarta', '2017-10-05', 55, 105, 75, 'A'),
(6, 'Jeni Yulia Susanto', '0', 'P', 'Jakarta', '2018-03-24', 53, 110, 71, 'AB'),
(7, 'Pamita Georgia Gunia', '0', 'P', 'Bandung', '2018-04-11', 56, 103, 70, 'B'),
(8, 'Aina Talita Zahrani', '0', 'P', 'Bandung', '2018-10-20', 56, 107, 69, 'AB'),
(9, 'Ainun Mahya', '0', 'P', 'Jember', '2018-11-11', 54, 102, 70, 'B'),
(10, 'Aisha Alifa', '0', 'P', 'Situbondo', '2017-12-01', 52, 110, 69, 'AB'),
(11, 'Sulaiman Satrio Puja', '0', 'L', 'Jember', '2017-02-15', 52, 110, 75, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tb_imunisasi`
--

CREATE TABLE `tb_imunisasi` (
  `id_imunisasi` int(50) NOT NULL,
  `Imunisasi` varchar(200) NOT NULL,
  `Keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_imunisasi`
--

INSERT INTO `tb_imunisasi` (`id_imunisasi`, `Imunisasi`, `Keterangan`) VALUES
(13, '-- Not Selected--', '-'),
(14, 'BCG', 'Imunisasi ini betujuan untuk memberikan kekebalan tubuh terhadap penyakit tubercolocis (TBC).\r\nBila vaksin BCG akan diberikan pada bayi di atas usia 3 bulan, ada baiknya dilakukan dulu uji tuberkulin.'),
(15, 'Hepatitis B', 'Jarak antara dua imunisasi Hepatitis B minimal 4 minggu.\r\nImunisasi ini untuk mencegah penyakit Hepatitis B'),
(17, 'Polio', 'diberikan untuk mencegah poliomielitis yang bisa menyebabkan kelumpuhan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_laporan`
--

CREATE TABLE `tb_laporan` (
  `id_laporan` int(50) NOT NULL,
  `idorangtua` int(50) NOT NULL,
  `id_bayi` int(50) NOT NULL,
  `id_imunisasi` int(50) NOT NULL,
  `id_vitamin` int(50) NOT NULL,
  `tgl_periksa` date NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_laporan`
--

INSERT INTO `tb_laporan` (`id_laporan`, `idorangtua`, `id_bayi`, `id_imunisasi`, `id_vitamin`, `tgl_periksa`, `keterangan`) VALUES
(27, 16, 4, 14, 6, '2022-06-15', 'dsa'),
(28, 16, 4, 17, 6, '2022-06-15', 'dsa'),
(29, 17, 10, 14, 6, '2022-06-15', 'sakit mag'),
(30, 17, 10, 15, 6, '2022-06-15', 'sakit mag');

-- --------------------------------------------------------

--
-- Table structure for table `tb_orangtua`
--

CREATE TABLE `tb_orangtua` (
  `idorangtua` int(11) NOT NULL,
  `Nama_Pasien` varchar(200) NOT NULL,
  `NIK` varchar(30) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Jenis_kelamin` enum('L','P') NOT NULL,
  `Tempat_lahir` text NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `Alamat` text NOT NULL,
  `Telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_orangtua`
--

INSERT INTO `tb_orangtua` (`idorangtua`, `Nama_Pasien`, `NIK`, `Email`, `Jenis_kelamin`, `Tempat_lahir`, `Tanggal_lahir`, `Alamat`, `Telp`) VALUES
(1, 'Aulia Utami Putri Mulia', '1122334455667788', 'auliautami1hi@gmail.com', 'P', 'Bandung', '1989-04-16', 'Perumahan Pondok Indah', '081817265224'),
(2, 'Bayu Fajar', '2376487519568583', 'Bayu12Fajar89@gmail.com', 'L', 'Jember', '1991-12-02', 'Perumahan Jawa Asri', '081756824689'),
(9, 'Putra Cahyono', '1928474518452356', 'PutraCah098@gmail.com', 'L', 'Banyuwangi', '1967-07-24', 'Villa Nusa Indah', '181198756822'),
(11, 'Kevin Susanto', '23599864937534287', 'Kevin123Susanto@gmail.com', 'L', 'Bondowoso', '1990-01-06', 'Perumahan Puri Gading,Jakarta', '089727847354'),
(12, 'Kevin Gunawan', '2138977546083253', 'KevinGunawan123@gmail.com', 'L', 'Jakarta', '1995-08-24', 'Perumahan Pulo Sari ', '089827368562'),
(13, 'Ahmad Wildan Kusuma Poetra', '8927135641037486', 'AhmadPoetraWK@gmail.com', 'L', 'Jember', '1994-03-25', 'Perumahan Jawa Asri Block X nomor X', '087569372189'),
(15, 'Matsu Chihara', '1198276363201864', 'Ma2Chihara@gmail.com', 'P', 'Bandung', '1995-02-23', 'Perumahan Puri Gading', '089286528532'),
(16, 'Caesar Hiren ', '1213564623321354', 'Cae89H@gmail.com', 'L', 'Bondowoso', '1994-04-09', 'Kampung Pulo Suro', '089725783414'),
(17, 'Fandi Kunto', '1198276363201864', 'FandiKunto1@gmail.com', 'L', 'Bandung', '1997-02-04', 'Bandung', '089286528532');

-- --------------------------------------------------------

--
-- Table structure for table `tb_vitamin`
--

CREATE TABLE `tb_vitamin` (
  `id_vitamin` int(50) NOT NULL,
  `Jenis_vitamin` varchar(100) NOT NULL,
  `Keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_vitamin`
--

INSERT INTO `tb_vitamin` (`id_vitamin`, `Jenis_vitamin`, `Keterangan`) VALUES
(3, '--Not Selected--', '-'),
(6, 'Vitamin A', 'Mencagah rabun senja,xeroftalmia,kerusakan pada kornea');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_balita`
--
ALTER TABLE `tb_balita`
  ADD PRIMARY KEY (`id_bayi`);

--
-- Indexes for table `tb_imunisasi`
--
ALTER TABLE `tb_imunisasi`
  ADD PRIMARY KEY (`id_imunisasi`);

--
-- Indexes for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `idorangtua` (`idorangtua`),
  ADD KEY `id_bayi` (`id_bayi`),
  ADD KEY `id_vitamin` (`id_vitamin`),
  ADD KEY `id_imunisasi` (`id_imunisasi`);

--
-- Indexes for table `tb_orangtua`
--
ALTER TABLE `tb_orangtua`
  ADD PRIMARY KEY (`idorangtua`);

--
-- Indexes for table `tb_vitamin`
--
ALTER TABLE `tb_vitamin`
  ADD PRIMARY KEY (`id_vitamin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_balita`
--
ALTER TABLE `tb_balita`
  MODIFY `id_bayi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_imunisasi`
--
ALTER TABLE `tb_imunisasi`
  MODIFY `id_imunisasi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  MODIFY `id_laporan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tb_orangtua`
--
ALTER TABLE `tb_orangtua`
  MODIFY `idorangtua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_vitamin`
--
ALTER TABLE `tb_vitamin`
  MODIFY `id_vitamin` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_laporan`
--
ALTER TABLE `tb_laporan`
  ADD CONSTRAINT `tb_laporan_ibfk_1` FOREIGN KEY (`id_bayi`) REFERENCES `tb_balita` (`id_bayi`),
  ADD CONSTRAINT `tb_laporan_ibfk_2` FOREIGN KEY (`idorangtua`) REFERENCES `tb_orangtua` (`idorangtua`),
  ADD CONSTRAINT `tb_laporan_ibfk_3` FOREIGN KEY (`id_vitamin`) REFERENCES `tb_vitamin` (`id_vitamin`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_laporan_ibfk_4` FOREIGN KEY (`id_imunisasi`) REFERENCES `tb_imunisasi` (`id_imunisasi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
