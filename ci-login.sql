-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2018 at 12:54 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci-login`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nidn` int(20) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nidn`, `nama`, `password`) VALUES
(100001, 'M. Farhan Saputra R', 'e10adc3949ba59abbe56e057f20f883e'),
(200001, 'M. Raka Aditya', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `kd_jadwal` int(10) NOT NULL,
  `nama_hari` varchar(6) NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_akhir` time NOT NULL,
  `kd_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`kd_jadwal`, `nama_hari`, `waktu_mulai`, `waktu_akhir`, `kd_kelas`) VALUES
(290919, 'Rabu', '08:39:24', '09:32:15', 'FT-1.2'),
(623782, 'Jumat', '01:01:00', '03:01:00', 'FT-1.2');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kd_kelas` varchar(10) NOT NULL,
  `kapasitas` int(1) NOT NULL,
  `nidn` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kd_kelas`, `kapasitas`, `nidn`) VALUES
('FT-1.2', 5, 100001);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `npm` int(12) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `kelas` varchar(5) NOT NULL,
  `angkatan` varchar(5) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`npm`, `nama`, `kelas`, `angkatan`, `jurusan`, `password`) VALUES
(5520115, 'Dede Rustandi', 'C', '2012', 'Teknik Sipil', 'e10adc3949ba59abbe56e057f20f883e'),
(5520116, 'Finni Rizkia', 'D', '2015', 'Teknik Industri', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `kd_registrasi` int(10) NOT NULL,
  `kd_kelas` varchar(10) NOT NULL,
  `waktu_registrasi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `npm` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`kd_registrasi`, `kd_kelas`, `waktu_registrasi`, `npm`) VALUES
(27, 'FT-1.2', '2018-05-30 09:16:41', 5520116);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nidn`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`kd_jadwal`),
  ADD KEY `kd_kelas` (`kd_kelas`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kd_kelas`),
  ADD KEY `nidn` (`nidn`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`kd_registrasi`),
  ADD KEY `npm` (`npm`),
  ADD KEY `kd_kelas` (`kd_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `kd_jadwal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=712940;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `kd_registrasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`kd_kelas`) REFERENCES `kelas` (`kd_kelas`);

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`nidn`) REFERENCES `dosen` (`nidn`);

--
-- Constraints for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD CONSTRAINT `registrasi_ibfk_1` FOREIGN KEY (`npm`) REFERENCES `mahasiswa` (`npm`),
  ADD CONSTRAINT `registrasi_ibfk_2` FOREIGN KEY (`kd_kelas`) REFERENCES `kelas` (`kd_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
