-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2021 at 07:31 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis_klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `id_user`, `nip`, `nama`, `jk`, `alamat`, `no_hp`, `foto`) VALUES
(1, 2, '3242342', 'panji', 'laki laki', 'kari', '2322', '94836065c7f745877961af98bac2d958.jpg'),
(3, 4, '324211', 'dede', 'laki laki', 'kari', '12356356', '72ebf9e42382459625aad84912ef7014.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `klinik`
--

CREATE TABLE `klinik` (
  `id_klinik` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `dr_penanggung_jawab` varchar(100) NOT NULL,
  `izin_operasional` varchar(100) NOT NULL,
  `kp_rj` varchar(100) NOT NULL,
  `kp_ri` varchar(100) NOT NULL,
  `ku_rj` varchar(100) NOT NULL,
  `ku_ri` varchar(100) NOT NULL,
  `spesialis` varchar(100) NOT NULL,
  `bersalin` varchar(100) NOT NULL,
  `jp` varchar(100) NOT NULL,
  `wp` varchar(100) NOT NULL,
  `kepemilikan` varchar(100) NOT NULL,
  `dikeluarkan` date NOT NULL,
  `koordinat` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klinik`
--

INSERT INTO `klinik` (`id_klinik`, `nama`, `alamat`, `dr_penanggung_jawab`, `izin_operasional`, `kp_rj`, `kp_ri`, `ku_rj`, `ku_ri`, `spesialis`, `bersalin`, `jp`, `wp`, `kepemilikan`, `dikeluarkan`, `koordinat`, `status`) VALUES
(3, 'panji', 'QWEQWE', 'QWEQWE', 'QWEQWE', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'YA', 'YA', 'UMUM', '24 JAM', 'PEMDA', '2021-07-29', '3241234124', 'AKTIF'),
(4, 'panji', 'QWEQWE', 'QWEQWE', 'QWEQWE', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'YA', 'YA', 'UMUM', '24 JAM', 'PEMDA', '2021-07-29', '3241234124', 'AKTIF'),
(5, 'KLINIK UTAMA K.MEDIKA', 'JL. Tuanku Tambusai dsn. Topan, Desa Koto Teluk', 'dr.Juliansef,Sp.PD', '16/DPMPTSPK-KU/X/2017', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'YA', 'YA', 'UMUM', '24 JAM', 'PERSEORANGAN', '2017-12-10', '3241231', 'AKTIF'),
(7, 'KLINIK PT.DUTA FALAMA SEI .KUKO', 'Deasa Banjar Benai', 'dr.Reza Tjahyadi', '06/DPMPTSPK-KP/III/2017', 'TIDAK', 'YA', 'TIDAK', 'TIDAK', 'TIDAK', 'YA', 'UMUM', '24 JAM', 'YAYASAN', '2017-03-21', '123123', 'AKTIF');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `id_tentang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tentang` longtext NOT NULL,
  `visi` longtext NOT NULL,
  `misi` longtext NOT NULL,
  `organisasi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`id_tentang`, `id_user`, `tentang`, `visi`, `misi`, `organisasi`) VALUES
(6, 3, 'medika', 's', 'k', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `password`, `role`) VALUES
(1, 'panji anugrah', 'panji', 'pa971203@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'ADMIN'),
(2, 'milano', 'milano', 'milano@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'KLINIK'),
(3, 'kuantan_medika', 'kuantan_medika', 'kuantan_medika@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'KLINIK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `klinik`
--
ALTER TABLE `klinik`
  ADD PRIMARY KEY (`id_klinik`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id_tentang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `klinik`
--
ALTER TABLE `klinik`
  MODIFY `id_klinik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id_tentang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
