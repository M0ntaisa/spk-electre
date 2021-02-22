-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 21, 2021 at 03:56 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spk_electre`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_alternatif`
--

CREATE TABLE `tb_alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `kd_alternatif` varchar(12) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama` varchar(124) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telepon` varchar(24) DEFAULT NULL,
  `sertifikat` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `id_anggota` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `nama_anggota` varchar(255) DEFAULT NULL,
  `ttl` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `st_perkawinan` varchar(255) DEFAULT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_history`
--

CREATE TABLE `tb_detail_history` (
  `id_detail` int(11) NOT NULL,
  `kd_history` varchar(25) DEFAULT NULL,
  `kd_alternatif` varchar(25) DEFAULT NULL,
  `point` varchar(8) DEFAULT NULL,
  `rank` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_evaluasi`
--

CREATE TABLE `tb_evaluasi` (
  `id_evaluasi` int(11) NOT NULL,
  `kd_alternatif` varchar(8) NOT NULL,
  `id_kriteria` varchar(8) NOT NULL,
  `kd_subkriteria` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_history`
--

CREATE TABLE `tb_history` (
  `id_history` int(11) NOT NULL,
  `kd_history` varchar(25) DEFAULT NULL,
  `time_proc` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_info_user`
--

CREATE TABLE `tb_info_user` (
  `id_info` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama_kelp` varchar(124) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telepon` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelompok`
--

CREATE TABLE `tb_kelompok` (
  `id_kelompok` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama_klp` varchar(255) DEFAULT NULL,
  `prop_klp` varchar(128) DEFAULT NULL,
  `akta_pengukuhan` varchar(128) DEFAULT NULL,
  `akta_notaris` varchar(128) DEFAULT NULL,
  `foto_kandang` varchar(128) DEFAULT NULL,
  `sk_terdaftar` varchar(128) DEFAULT NULL,
  `ss_lokasi` varchar(128) DEFAULT NULL,
  `sertifikat` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kd_kriteria` varchar(8) DEFAULT NULL,
  `nm_kriteria` varchar(124) DEFAULT NULL,
  `weight` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `kd_kriteria`, `nm_kriteria`, `weight`) VALUES
(1, 'KRT001', 'Status Kelompok', 3),
(2, 'KRT002', 'Sertifikat Ternak', 4),
(3, 'KRT003', 'Sistem Pemeliharaan', 4),
(4, 'KRT004', 'Pelayanan Kesehatan', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_subkriteria`
--

CREATE TABLE `tb_subkriteria` (
  `id_subkriteria` int(11) NOT NULL,
  `kd_subkriteria` varchar(8) DEFAULT NULL,
  `kd_kriteria` varchar(8) DEFAULT NULL,
  `nm_subkriteria` varchar(124) DEFAULT NULL,
  `value` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_subkriteria`
--

INSERT INTO `tb_subkriteria` (`id_subkriteria`, `kd_subkriteria`, `kd_kriteria`, `nm_subkriteria`, `value`) VALUES
(1, 'SUB001', 'KRT001', 'Kelas Pemula', 1),
(2, 'SUB002', 'KRT001', 'Kelas Lanjut', 2),
(3, 'SUB003', 'KRT001', 'Kelas Madya', 3),
(4, 'SUB004', 'KRT001', 'Kelas Mandiri', 4),
(5, 'SUB005', 'KRT002', 'Punya', 2),
(6, 'SUB006', 'KRT002', 'Tidak Punya', 1),
(9, 'SUB007', 'KRT003', 'Intensif', 1),
(10, 'SUB008', 'KRT003', 'Semi-intensif', 2),
(11, 'SUB009', 'KRT003', 'Ekstensif', 3),
(12, 'SUB010', 'KRT004', 'Vaksin / 1 tahun sekali', 3),
(13, 'SUB012', 'KRT004', 'Obat cacing / 6 bulan', 2),
(14, 'SUB013', 'KRT004', 'Vitamin / 3x sebulan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_token`
--

CREATE TABLE `tb_token` (
  `id_token` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id_users` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` enum('admin','users') DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id_users`, `nama`, `email`, `username`, `password`, `level`, `status`, `created`) VALUES
(1, 'Administrator', 'adminadmin@gmail.com', 'admin', '$2y$10$Z6xWgkm9R7q2TsQ32ZFzK.QAiNORJjkQYN1znc0ACX3dwzMgnrPZa', 'admin', 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  ADD PRIMARY KEY (`id_alternatif`,`kd_alternatif`) USING BTREE,
  ADD KEY `kd_alternatif` (`kd_alternatif`),
  ADD KEY `alt_to_user` (`id_user`);

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `anggota_to_user` (`id_user`);

--
-- Indexes for table `tb_detail_history`
--
ALTER TABLE `tb_detail_history`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `kd_history` (`kd_history`),
  ADD KEY `kd_alternatif` (`kd_alternatif`) USING BTREE;

--
-- Indexes for table `tb_evaluasi`
--
ALTER TABLE `tb_evaluasi`
  ADD PRIMARY KEY (`id_evaluasi`),
  ADD KEY `kd_subkriteria` (`kd_subkriteria`),
  ADD KEY `kd_alternatif` (`kd_alternatif`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `tb_history`
--
ALTER TABLE `tb_history`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `kd_history` (`kd_history`);

--
-- Indexes for table `tb_info_user`
--
ALTER TABLE `tb_info_user`
  ADD PRIMARY KEY (`id_info`),
  ADD KEY `info_user` (`id_user`);

--
-- Indexes for table `tb_kelompok`
--
ALTER TABLE `tb_kelompok`
  ADD PRIMARY KEY (`id_kelompok`),
  ADD KEY `klp_to_infuser` (`id_user`);

--
-- Indexes for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`),
  ADD KEY `kd_kriteria` (`kd_kriteria`);

--
-- Indexes for table `tb_subkriteria`
--
ALTER TABLE `tb_subkriteria`
  ADD PRIMARY KEY (`id_subkriteria`),
  ADD KEY `kd_subkriteria` (`kd_subkriteria`),
  ADD KEY `kd_kriteria` (`kd_kriteria`);

--
-- Indexes for table `tb_token`
--
ALTER TABLE `tb_token`
  ADD PRIMARY KEY (`id_token`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_detail_history`
--
ALTER TABLE `tb_detail_history`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_evaluasi`
--
ALTER TABLE `tb_evaluasi`
  MODIFY `id_evaluasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tb_history`
--
ALTER TABLE `tb_history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_info_user`
--
ALTER TABLE `tb_info_user`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_kelompok`
--
ALTER TABLE `tb_kelompok`
  MODIFY `id_kelompok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_subkriteria`
--
ALTER TABLE `tb_subkriteria`
  MODIFY `id_subkriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_token`
--
ALTER TABLE `tb_token`
  MODIFY `id_token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  ADD CONSTRAINT `alt_to_user` FOREIGN KEY (`id_user`) REFERENCES `tb_users` (`id_users`) ON DELETE CASCADE;

--
-- Constraints for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD CONSTRAINT `anggota_to_user` FOREIGN KEY (`id_user`) REFERENCES `tb_users` (`id_users`) ON DELETE CASCADE;

--
-- Constraints for table `tb_detail_history`
--
ALTER TABLE `tb_detail_history`
  ADD CONSTRAINT `kd_alternatif1` FOREIGN KEY (`kd_alternatif`) REFERENCES `tb_alternatif` (`kd_alternatif`) ON DELETE CASCADE,
  ADD CONSTRAINT `kd_history` FOREIGN KEY (`kd_history`) REFERENCES `tb_history` (`kd_history`) ON DELETE CASCADE;

--
-- Constraints for table `tb_evaluasi`
--
ALTER TABLE `tb_evaluasi`
  ADD CONSTRAINT `kd_alternatif` FOREIGN KEY (`kd_alternatif`) REFERENCES `tb_alternatif` (`kd_alternatif`) ON DELETE CASCADE,
  ADD CONSTRAINT `kd_subkriteria` FOREIGN KEY (`kd_subkriteria`) REFERENCES `tb_subkriteria` (`kd_subkriteria`) ON DELETE CASCADE;

--
-- Constraints for table `tb_info_user`
--
ALTER TABLE `tb_info_user`
  ADD CONSTRAINT `info_user` FOREIGN KEY (`id_user`) REFERENCES `tb_users` (`id_users`) ON DELETE CASCADE;

--
-- Constraints for table `tb_kelompok`
--
ALTER TABLE `tb_kelompok`
  ADD CONSTRAINT `klp_to_infuser` FOREIGN KEY (`id_user`) REFERENCES `tb_info_user` (`id_user`) ON DELETE CASCADE;

--
-- Constraints for table `tb_subkriteria`
--
ALTER TABLE `tb_subkriteria`
  ADD CONSTRAINT `subkrit_to_krit` FOREIGN KEY (`kd_kriteria`) REFERENCES `tb_kriteria` (`kd_kriteria`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
