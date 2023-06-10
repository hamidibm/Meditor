-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2022 at 07:09 AM
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
-- Database: `db_meditor`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`username`, `password`) VALUES
('adminmeditor', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `berobat`
--

CREATE TABLE `berobat` (
  `id_berobat` int(16) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `poli` varchar(50) NOT NULL,
  `tgl_berobat` varchar(11) NOT NULL,
  `tindakan` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berobat`
--

INSERT INTO `berobat` (`id_berobat`, `nik`, `poli`, `tgl_berobat`, `tindakan`) VALUES
(219, '121123123', 'Umum', '2022-07-12', 'Menunggu'),
(220, '121123123', 'Umum', '2022-07-12', 'Selesai'),
(221, '1231321', 'Umum', '2022-07-12', 'Menunggu'),
(222, '12342533', 'Ortopedi', '2022-08-31', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_pegawai` int(2) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_pegawai`, `jabatan`, `img`) VALUES
(4, 'Administrasi', '../media/img/administrasi.png'),
(3, 'Apoteker', '../media/img/apoteker.png'),
(1, 'Dokter', '../media/img/dokter.png'),
(6, 'Janitor', '../media/img/janitor.png'),
(5, 'Laboran', '../media/img/labor.png'),
(2, 'Perawat', '../media/img/perawat.png');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelamin` varchar(16) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_lahir` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`nik`, `nama`, `kelamin`, `alamat`, `tgl_lahir`) VALUES
('121123123', 'Bima Al Fatih Duar', 'Pria', 'Jl Sunan Giri No 12, Ngaglik, Sleman, Yogyakarta', '2005-02-12'),
('1231321', 'Nganu', 'Pria', 'Nganu', '2022-06-28'),
('12342533', 'Budiman', 'Pria', 'Surga', '2020-06-10'),
('14031', 'Hamid', 'Wanita', 'Astrib', '2022-07-26'),
('20523154', 'Ilham', 'Pria', 'Sebelah Rumah Pak Gub', '1998-01-21');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `tgl_lahir` varchar(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kelamin` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama`, `jabatan`, `tgl_lahir`, `alamat`, `kelamin`) VALUES
('1000213', 'Dodo', 'Administrasi', '2016-02-20', 'Jakal Km 12', 'Pria'),
('1212', 'Putri', 'Perawat', '2022-06-29', 'JL B', 'Wanita'),
('1231', 'Jihan', 'Apoteker', '2022-06-29', 'JL C', 'Wanita'),
('1234', 'Fuat', 'Laboran', '2022-06-29', 'JL D', 'Pria'),
('2285', 'Rasyid', 'Laboran', '2022-06-29', 'JL Y', 'Pria'),
('3378', 'Felicia', 'Dokter', '2022-06-29', 'JL N', 'Wanita'),
('4401', 'Rafael', 'Janitor', '2022-06-29', 'JL X', 'Pria'),
('4422', 'Marko', 'Dokter', '2022-06-29', 'JL J', 'Pria'),
('4488', 'Tita', 'Perawat', '2022-06-29', 'JL K', 'Wanita'),
('4838', 'Sindi', 'Janitor', '2022-06-29', 'JL V', 'Wanita'),
('5683', 'Yayan', 'Apoteker', '2022-06-29', 'JL P', 'Pria'),
('6432', 'Soleh', 'Dokter', '2022-06-29', 'JL F', 'Pria'),
('6454', 'Rizka', 'Apoteker', '2022-07-13', 'JL T', 'Wanita'),
('6801', 'Rita', 'Perawat', '2022-06-29', 'JL O', 'Wanita'),
('7332', 'Zahra', 'Laboran', '2022-06-29', 'JL Q', 'Wanita'),
('7392', 'Gian', 'Dokter', '2022-06-29', 'JL W', 'Pria'),
('8317', 'Tika', 'Perawat', '2022-06-29', 'JL S', 'Wanita'),
('9629', 'Roy', 'Apoteker', '2022-06-29', 'JL K', 'Pria'),
('9873', 'Satya', 'Dokter', '2022-06-29', 'JL S', 'Pria');

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `id_poli` int(11) NOT NULL,
  `poli` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id_poli`, `poli`, `img`) VALUES
(4, 'Anak', '../media/img/anak.png'),
(7, 'Bedah Umum', '../media/img/bedah.png'),
(6, 'Gigi', '../media/img/gigi.png'),
(5, 'ISPA', '../media/img/ispa.png'),
(2, 'Jantung', '../media/img/jantung.png'),
(8, 'Kesehatan Jiwa', '../media/img/kesehatan jiwa.png'),
(10, 'Kulit Kelamin', '../media/img/kulit kelamin.png'),
(3, 'Mata', '../media/img/mata.png'),
(9, 'OBGYN', '../media/img/obgyn.png'),
(11, 'Ortopedi', '../media/img/orthopaedi.png'),
(12, 'Penyakit Dalam', '../media/img/penyakit dalam.png'),
(13, 'Psikologi', '../media/img/psikologi.png'),
(14, 'Syaraf', '../media/img/syaraf.png'),
(15, 'THT', '../media/img/tht.png'),
(1, 'Umum', '../media/img/umum.png'),
(16, 'VCT', '../media/img/vct.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `berobat`
--
ALTER TABLE `berobat`
  ADD PRIMARY KEY (`id_berobat`),
  ADD KEY `nik` (`nik`),
  ADD KEY `poli` (`poli`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`jabatan`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`poli`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berobat`
--
ALTER TABLE `berobat`
  MODIFY `id_berobat` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
