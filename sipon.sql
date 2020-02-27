-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2020 at 07:53 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipon`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` int(5) NOT NULL,
  `nama_santri` varchar(50) NOT NULL,
  `subuh` int(1) NOT NULL,
  `tahfidz_1` int(1) NOT NULL,
  `tahfidz_2` int(1) NOT NULL,
  `kbm_1` int(1) NOT NULL,
  `duhur` int(1) NOT NULL,
  `kbm_2` int(1) NOT NULL,
  `ashar` int(1) NOT NULL,
  `kbm_3` int(1) NOT NULL,
  `maghrib` int(1) NOT NULL,
  `isya` int(1) NOT NULL,
  `kbm_4` int(1) NOT NULL,
  `keterangan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(3) NOT NULL,
  `title` varchar(250) NOT NULL,
  `subtitle` varchar(250) NOT NULL,
  `isi` text NOT NULL,
  `image` text NOT NULL,
  `sumber` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggaran`
--

CREATE TABLE `pelanggaran` (
  `id` int(3) NOT NULL,
  `nama_santri` varchar(50) NOT NULL,
  `pelanggaran` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggaran`
--

INSERT INTO `pelanggaran` (`id`, `nama_santri`, `pelanggaran`, `tanggal`) VALUES
(1, 'Waliyullah', 'Tidak Sholat Tahajjud & Subuh', '2020-02-10'),
(2, 'Ichsan Yuda', 'Tidak Sholat Tahajjud & Subuh', '2020-02-02'),
(3, 'Farras Hafidz', 'Tidak Puasa', '2020-02-11');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(3) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `metode` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perizinan`
--

CREATE TABLE `perizinan` (
  `id` int(5) NOT NULL,
  `nama_santri` varchar(50) NOT NULL,
  `alasan` varchar(50) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `tanggal_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perpustakaan`
--

CREATE TABLE `perpustakaan` (
  `id` int(2) NOT NULL,
  `pinjaman` varchar(50) NOT NULL,
  `tanggal_minjam` datetime NOT NULL,
  `tanggal_balik` datetime NOT NULL,
  `nama_santri` varchar(50) NOT NULL,
  `plp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perpustakaan`
--

INSERT INTO `perpustakaan` (`id`, `pinjaman`, `tanggal_minjam`, `tanggal_balik`, `nama_santri`, `plp`) VALUES
(1, 'Stop Kontak', '2020-02-25 09:10:00', '2020-02-25 17:10:00', 'Sulaiman', 'Sinematografi'),
(3, 'Stop Kontak', '2020-02-04 08:00:00', '2020-02-04 17:00:00', 'Zhafran', 'Programming Reguler'),
(4, 'Stop Kontak', '2020-02-05 10:00:00', '2020-02-05 20:00:00', 'Waliyullah', 'Aksel Programming');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id` int(2) NOT NULL,
  `nama_santri` varchar(50) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `semester` int(1) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id`, `nama_santri`, `kelas`, `semester`, `tanggal`) VALUES
(1, 'Royyan Ariefiyansyah', 'ODT', 2, '2020-01-14'),
(2, 'Nafis Irfan', 'ODT', 2, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE `santri` (
  `id` int(5) NOT NULL,
  `nis` int(9) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `tempat_lahir` varchar(75) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `wali` varchar(50) NOT NULL,
  `kelas_pondok` varchar(11) NOT NULL,
  `kelas_payung` varchar(11) NOT NULL,
  `semester` varchar(11) NOT NULL,
  `image` text NOT NULL,
  `action` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `santri`
--

INSERT INTO `santri` (`id`, `nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `wali`, `kelas_pondok`, `kelas_payung`, `semester`, `image`, `action`) VALUES
(1, 2147483647, 'Nafis Irfan', 'Kalimantan', '2004-02-01', 'Sangata', 'Jarwo', 'Kelas 1', 'Kelas 1', 'Semester 2', 'nafis.jpg', 0),
(2, 13231324, 'Luthfi Shatara', 'Jakarta', '2005-06-21', 'Jl.Mahkota Putra No 131, Sentul City, Bogor, Jawa Barat', 'Haris', 'Kelas 3', 'Kelas 3', 'Semester 2', 'shatara.jpg', 0),
(3, 2147483647, 'Muhammad Alehandro Narendra Putra', 'Jakarta', '2005-08-19', 'Kampung Rawa Sawah, Jakarta Pusat', 'Nurul', 'Kelas 2', 'Kelas 2', 'Semester 2', 'handro.jpg', 0),
(4, 2147483647, 'Royyan Ariefiyansyah', 'Jakarta', '2006-07-12', 'Bekasi', 'Arief', 'Kelas 1', 'Kelas 1', 'Semester 2', 'ar2.png', 0),
(5, 567936969, 'Rifqi Naufal', 'Jakarta', '2015-03-11', 'Jakarta', 'SOPO', 'Kelas 1', 'Kelas 1', 'Semester 2', 'supriyanto.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tunggakan`
--

CREATE TABLE `tunggakan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nominal` int(11) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tunggakan`
--

INSERT INTO `tunggakan` (`id`, `nama`, `nominal`, `keterangan`) VALUES
(1, 'Joshe Mario', 75000, 'Hutang Mang Karsim'),
(2, 'Kholid', 50000, 'Hutang Kantin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perizinan`
--
ALTER TABLE `perizinan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perpustakaan`
--
ALTER TABLE `perpustakaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tunggakan`
--
ALTER TABLE `tunggakan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pelanggaran`
--
ALTER TABLE `pelanggaran`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perizinan`
--
ALTER TABLE `perizinan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perpustakaan`
--
ALTER TABLE `perpustakaan`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `santri`
--
ALTER TABLE `santri`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tunggakan`
--
ALTER TABLE `tunggakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
