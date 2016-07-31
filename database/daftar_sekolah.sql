-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2016 at 04:08 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daftar_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama_admin`, `password`) VALUES
(1, 'frans', '31cf2b3561b2aed60bf8c02414cc955a'),
(2, 'raden defi', '81c296c01cabc0a11f2fa3e80a9f2326'),
(3, 'dedep', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `bukti_transfer`
--

CREATE TABLE `bukti_transfer` (
  `id` int(11) NOT NULL,
  `id_pendaftar` int(11) NOT NULL,
  `nama_pendaftar` varchar(100) NOT NULL,
  `nama_bank` varchar(100) NOT NULL,
  `bukti_transfer` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bukti_transfer`
--

INSERT INTO `bukti_transfer` (`id`, `id_pendaftar`, `nama_pendaftar`, `nama_bank`, `bukti_transfer`, `status`) VALUES
(1, 4, 'raden defi', 'BCA Raden defi megantari', 'img/bukti_transfer/cara transfer uang melalui internet banking bca sesama bca4.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_orangtua`
--

CREATE TABLE `data_orangtua` (
  `id` int(11) NOT NULL,
  `nama_pendaftar` varchar(100) NOT NULL,
  `id_pendaftar` int(11) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `nama_wali` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kodepos` varchar(100) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `email_ortu` varchar(100) NOT NULL,
  `pendidikan_ayah` varchar(100) NOT NULL,
  `pendidikan_ibu` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `penghasilan_ortu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_orangtua`
--

INSERT INTO `data_orangtua` (`id`, `nama_pendaftar`, `id_pendaftar`, `nama_ayah`, `nama_ibu`, `nama_wali`, `alamat`, `provinsi`, `kota`, `kecamatan`, `kodepos`, `nohp`, `email_ortu`, `pendidikan_ayah`, `pendidikan_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `penghasilan_ortu`) VALUES
(6, 'frans chaniago', 2, 'asd', 'dada', '', 'sda', 'sulawesiutara', 'da', 'da', '242', '4242342', '', 's2', 'd3', 'pns', 'pns', '3-5jt');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id` int(11) NOT NULL,
  `id_pendaftar` int(11) NOT NULL,
  `nama_pendaftar` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `ktp` varchar(100) NOT NULL,
  `akte` varchar(100) NOT NULL,
  `ijazah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id`, `id_pendaftar`, `nama_pendaftar`, `foto`, `ktp`, `akte`, `ijazah`) VALUES
(2, 4, 'raden defi', 'img/dokumen/foto/2x3.jpg', 'img/dokumen/ktp/60-75.jpg', 'img/dokumen/akte/80.jpg', 'img/dokumen/ijazah/60.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `formulir_mhs`
--

CREATE TABLE `formulir_mhs` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `no_jaket` varchar(5) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tgl_daftar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formulir_mhs`
--

INSERT INTO `formulir_mhs` (`id`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `no_hp`, `alamat`, `provinsi`, `no_jaket`, `email`, `tgl_daftar`) VALUES
(2, 'frans chaniago', 'lebak', '1995-11-04', 'laki-laki', 'islam', '08982002243', 'pasarkemis', 'banten', 'm', 'franschaniago5@gmail.com', '2016-06-11'),
(4, 'raden defi', 'tangerang', '2011-06-16', 'Perempuan', 'islam', '08982002243', 'binong permai', 'banten', 's', 'radendefi@gmail.com', '11-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(11) NOT NULL,
  `nama_pendaftar` varchar(100) NOT NULL,
  `id_pendaftar` int(11) NOT NULL,
  `status_slta` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `nama_slta` varchar(100) NOT NULL,
  `no_ijazah` varchar(100) NOT NULL,
  `tahun lulus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `nama_pendaftar`, `id_pendaftar`, `status_slta`, `kota`, `kecamatan`, `kode_pos`, `nama_slta`, `no_ijazah`, `tahun lulus`) VALUES
(3, 'frans chaniago', 2, 'negeri', 'jakarta', 'cengkareng', '15589', 'SMP 2 Cengkareng', '687678578579', '2013');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukti_transfer`
--
ALTER TABLE `bukti_transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_orangtua`
--
ALTER TABLE `data_orangtua`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulir_mhs`
--
ALTER TABLE `formulir_mhs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_lengkap` (`nama_lengkap`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `bukti_transfer`
--
ALTER TABLE `bukti_transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_orangtua`
--
ALTER TABLE `data_orangtua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `formulir_mhs`
--
ALTER TABLE `formulir_mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
