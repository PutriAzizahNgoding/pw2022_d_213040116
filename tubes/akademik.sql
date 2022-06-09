-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 12:28 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id_guru` int(11) NOT NULL,
  `nip` char(18) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `alamat_guru` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_telp` varchar(20) NOT NULL,
  `foto_guru` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`id_guru`, `nip`, `nama_guru`, `alamat_guru`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `no_telp`, `foto_guru`) VALUES
(2, '1918438657', 'Naila Putri', 'Jalan Pahlawan', 'wanita', 'Bandung', '2003-12-02', '089736258462', '629b1357693e8.png'),
(8, '1918439145', 'Nia Putri', 'Jalan Setiabudhi', 'wanita', 'Denpasar', '1993-02-18', '081312903647', 'pp3.png'),
(25, '1918438968', 'Yusuf Putra Daffa', 'Jalan Antapani', 'pria', 'Bandung', '2002-02-02', '087683562735', '629b136b81a2b.png'),
(27, '1918438786', 'Eka Putri', 'Jalan Gegerkalong', 'wanita', 'Demak', '2002-02-02', '087925346342', '629b13828325d.png'),
(28, '1918235472', 'Dian Putra', 'Jalan Tamansari', 'pria', 'Ciamis', '1993-12-13', '089726357345', '629b139e2335d.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `hari` varchar(10) DEFAULT NULL,
  `jam_masuk` time DEFAULT NULL,
  `jam_keluar` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id_jadwal`, `id_guru`, `id_mapel`, `id_kelas`, `hari`, `jam_masuk`, `jam_keluar`) VALUES
(26, 27, 1, 1, 'Senin', '08:07:03', '11:30:00'),
(29, 28, 2, 1, 'Selasa', '10:30:00', '12:00:00'),
(30, 8, 13, 1, 'Rabu', '07:00:00', '12:00:00'),
(31, 2, 11, 1, 'Kamis', '07:00:00', '10:00:00'),
(32, 25, 16, 1, 'Sabtu', '07:00:00', '10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` int(11) NOT NULL,
  `kode_kelas` char(10) NOT NULL,
  `nama_kelas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `kode_kelas`, `nama_kelas`) VALUES
(1, 'KLS-001', 'VII-A'),
(2, 'KLS-002', 'VII-B'),
(3, 'KLS-003', 'VII-C'),
(12, 'KLS-004', 'VII-D');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mapel`
--

CREATE TABLE `tbl_mapel` (
  `id_mapel` int(11) NOT NULL,
  `kode_mapel` char(10) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mapel`
--

INSERT INTO `tbl_mapel` (`id_mapel`, `kode_mapel`, `nama_mapel`, `semester`) VALUES
(1, 'MP-001', 'Pendidikan Agama', 1),
(2, 'MP-002', 'Pendidikan Kewarganegaraan', 1),
(3, 'MP-003', 'Bahasa Indonesia', 1),
(10, 'MP-004', 'Bahasa Inggris', 1),
(11, 'MP-005', 'Matematika', 1),
(12, 'MP-006', 'Ilmu Pengetahuan Alam', 1),
(13, 'MP-007', 'Ilmu Pengetahuan Sosial', 1),
(16, 'MP-008', 'Seni Budaya ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mengajar`
--

CREATE TABLE `tbl_mengajar` (
  `id_mengajar` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mengajar`
--

INSERT INTO `tbl_mengajar` (`id_mengajar`, `id_guru`, `id_mapel`) VALUES
(37, 27, 1),
(40, 28, 2),
(41, 8, 13),
(42, 2, 11),
(43, 25, 16);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` char(10) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `foto_siswa` varchar(30) DEFAULT NULL,
  `password_siswa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `nis`, `nama_siswa`, `jenis_kelamin`, `alamat`, `id_kelas`, `foto_siswa`, `password_siswa`) VALUES
(13, '1819024367', 'Fitriani', 'wanita', 'Jalan Gerlong', 1, '629dd50204b5e.png', '1234'),
(16, '1819025361', 'Febriansyah Putra ', 'pria', 'Jalan Tamansari', 1, '629dd9998caf8.png', 'febri');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` char(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`) VALUES
(1, 'putri', '123'),
(25, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `tbl_mengajar`
--
ALTER TABLE `tbl_mengajar`
  ADD PRIMARY KEY (`id_mengajar`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `tbl_mengajar_ibfk_2` (`id_mapel`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `tbl_siswa_ibfk_1` (`id_kelas`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_mengajar`
--
ALTER TABLE `tbl_mengajar`
  MODIFY `id_mengajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD CONSTRAINT `tbl_jadwal_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `tbl_guru` (`id_guru`),
  ADD CONSTRAINT `tbl_jadwal_ibfk_2` FOREIGN KEY (`id_mapel`) REFERENCES `tbl_mapel` (`id_mapel`),
  ADD CONSTRAINT `tbl_jadwal_ibfk_3` FOREIGN KEY (`id_kelas`) REFERENCES `tbl_kelas` (`id_kelas`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_mengajar`
--
ALTER TABLE `tbl_mengajar`
  ADD CONSTRAINT `tbl_mengajar_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `tbl_guru` (`id_guru`),
  ADD CONSTRAINT `tbl_mengajar_ibfk_2` FOREIGN KEY (`id_mapel`) REFERENCES `tbl_mapel` (`id_mapel`);

--
-- Constraints for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD CONSTRAINT `tbl_siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `tbl_kelas` (`id_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
