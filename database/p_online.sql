-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 08, 2021 at 09:26 AM
-- Server version: 5.7.24
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_siswa`
--

CREATE TABLE `table_siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `anak_ke` varchar(10) NOT NULL,
  `jumlah_keluarga` varchar(10) NOT NULL,
  `bahasa_dirumah` varchar(50) NOT NULL,
  `jarak_tempuh` varchar(50) NOT NULL,
  `golongan_darah` varchar(50) NOT NULL,
  `keadaan_fisik` varchar(255) NOT NULL,
  `penyakit` varchar(255) NOT NULL,
  `penyakit_diderita` varchar(255) NOT NULL,
  `bakat` varchar(255) NOT NULL,
  `hafalan` varchar(255) NOT NULL,
  `kemampuan_baca` varchar(50) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `no_hp_ortu` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `status_perkawinan` varchar(50) NOT NULL,
  `alamat_orang_tua` varchar(255) NOT NULL,
  `status_rumah` varchar(50) NOT NULL,
  `pendidikan_ayah` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `penghasilan_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `pendidikan_ibu` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `penghasilan_ibu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_siswa`
--

INSERT INTO `table_siswa` (`id_siswa`, `id_user`, `nik`, `nama`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `anak_ke`, `jumlah_keluarga`, `bahasa_dirumah`, `jarak_tempuh`, `golongan_darah`, `keadaan_fisik`, `penyakit`, `penyakit_diderita`, `bakat`, `hafalan`, `kemampuan_baca`, `kewarganegaraan`, `nama_ayah`, `no_hp_ortu`, `agama`, `status_perkawinan`, `alamat_orang_tua`, `status_rumah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `nama_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`) VALUES
(1, 2, '1771070307960005', 'yahdi', 'padang', 'padang panjang', '1996-07-03', 'Laki Laki', '1', '1', 'minang', '1-2 km', 'a', 'normal', 'tidak ada', 'tidak ada', 'lomba tikat provinsi', '2 juz', 'fasih', 'Indonesia', 'paralis', '+6282169074845', 'Kristen', 'Menikah', 'padang', 'Kontrakan', 'SD', 'Tni/Polri', 'Rp. 500.000.00 perbulan', 'kaka', 'SD', 'Pedagang', 'Rp. 500.000.00 perbulan'),
(12, 0, '1771070307960005', '', '', '', '', 'Laki Laki', '1', '1', 'minang', '1-2 km', 'a', 'normal', '', '', '', '', '', '', '', '', 'Islam', 'Menikah', '', 'Kontrakan', 'SD', 'Tni/Polri', 'Rp. 500.000.00 perbulan', '', 'SD', 'Pedagang', 'Rp. 500.000.00 perbulan'),
(13, 5, '1771070307960005', '', '', '', '', 'Laki Laki', '1', '1', 'minang', '1-2 km', 'a', 'normal', '', '', '', '', '', '', '', '', 'Islam', 'Menikah', '', 'Kontrakan', 'SD', 'Tni/Polri', 'Rp. 500.000.00 perbulan', '', 'SD', 'Pedagang', 'Rp. 500.000.00 perbulan');

-- --------------------------------------------------------

--
-- Table structure for table `table_user`
--

CREATE TABLE `table_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_user`
--

INSERT INTO `table_user` (`id_user`, `username`, `email`, `password`, `waktu`, `level`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '', 'admin'),
(2, 'yahdi', 'yahdialmukaram03@gmail.com', '58d432c74ad12fc7d0f30300771bec18', '08-07-2021, 09:53:11', 'siswa'),
(5, 'sri', 'sri@gmail.com', 'd1565ebd8247bbb01472f80e24ad29b6', '08-07-2021, 15:58:34', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_siswa`
--
ALTER TABLE `table_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_siswa`
--
ALTER TABLE `table_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
