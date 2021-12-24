-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2021 at 03:37 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik2`
--

-- --------------------------------------------------------

--
-- Table structure for table `khs`
--

CREATE TABLE `khs` (
  `NIM` int(50) NOT NULL,
  `KodeMK` int(10) NOT NULL,
  `Nilai` int(50) NOT NULL,
  `nama_matakuliah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khs`
--

INSERT INTO `khs` (`NIM`, `KodeMK`, `Nilai`, `nama_matakuliah`) VALUES
(1900018111, 8, 99, 'Interaksi Manusia & Komputer'),
(1900018181, 9, 91, 'Digital Forensik'),
(1900018222, 4, 80, 'Teori Bahasa Otomata\r\n'),
(1900018239, 10, 96, 'Pemrograman Mobile'),
(1900018244, 1, 98, 'Akhlak'),
(1900018246, 3, 96, 'Keamanan Komputer'),
(1900018267, 5, 92, 'B. Inggris Profesional'),
(1900018626, 6, 100, 'fiqih'),
(1900018735, 2, 93, 'Sistem Pendukung Keputusan'),
(1900018766, 7, 88, 'keamanan komputer');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nama` varchar(1000) NOT NULL,
  `nim` int(50) NOT NULL,
  `jkel` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tgllhr` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nama`, `nim`, `jkel`, `alamat`, `tgllhr`) VALUES
('Raihan Juyo', 1900018111, 'Laki-Laki', 'Sumedang', '30-09-2000'),
('Neneng Juminten', 1900018181, 'Perempuan', 'Pangandaran', '11-01-2000'),
('annisa anggara', 1900018222, 'Perempuan', 'Bandung', '01-02-2000'),
('Suhendri', 1900018239, 'Laki-Laki', 'Depok', '12-03-2000'),
('rizki kuliombro', 1900018244, 'Laki-Laki', 'Bekasi', '12-12-2000'),
('fakhira stevanus', 1900018246, 'Perempuan', 'Tasikmalaya', '15-08-2000'),
('Lala Ulala', 1900018262, 'Perempuan', 'Bekasi', '12-08-2000'),
('zahra nugroho', 1900018267, 'Perempuan', 'Ciamis', '20-04-2000'),
('Jumanis haseum', 1900018626, 'Perempuan', 'Papua', '18-05-2000'),
('hanif sutisna', 1900018735, 'Perempuan', 'Garut', '19-11-2000'),
('Sumanto Kolo', 1900018766, 'Laki-Laki', 'Flores', '21-04-2000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `khs`
--
ALTER TABLE `khs`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `khs`
--
ALTER TABLE `khs`
  MODIFY `NIM` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1900018767;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
