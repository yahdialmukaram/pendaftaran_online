-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 11, 2021 at 07:00 AM
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
-- Table structure for table `table_jadwal`
--

CREATE TABLE `table_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `jadwal` varchar(255) NOT NULL,
  `kouta` varchar(255) NOT NULL,
  `kouta_terisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_jadwal`
--

INSERT INTO `table_jadwal` (`id_jadwal`, `jadwal`, `kouta`, `kouta_terisi`) VALUES
(16, '07/10/2021 2:36 PM sampai 07/10/2021 2:36 PM', '25', '25'),
(18, '07/10/2021 7:20 PM sampai 07/10/2021 8:20 PM', '66', '2'),
(19, '07/10/2021 8:21 PM sampai 07/10/2021 9:21 PM', '20', '0'),
(20, '07/14/2021 10:58 AM sampai 07/11/2021 12:58 PM', '33', '0');

-- --------------------------------------------------------

--
-- Table structure for table `table_nilai`
--

CREATE TABLE `table_nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tes_qiroah` varchar(255) NOT NULL,
  `wawancara_ortu` varchar(255) NOT NULL,
  `paquyuban` varchar(255) NOT NULL,
  `nilai_akhir` varchar(255) NOT NULL,
  `rangking` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_sekolah`
--

CREATE TABLE `table_sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `id_jadwal` varchar(255) NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `sk_domisili` varchar(255) NOT NULL,
  `akta_kelahiran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_sekolah`
--

INSERT INTO `table_sekolah` (`id_sekolah`, `id_user`, `id_jadwal`, `nama_sekolah`, `sk_domisili`, `akta_kelahiran`) VALUES
(28, '24', '16', 'SDIT Qurrata A\'yun Batusangkar', 'a991fe6b5c5153669584ede1c994d524.pdf', '89ccd6df02c9eb9be3bb62c15bfdee88.pdf'),
(29, '19', '18', 'SDIT Qurrata A\'yun Batusangkar', 'd11b7599b10e37a02c466db8969cbb44.pdf', '364c79e254e7172d201ac577822e773c.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `table_siswa`
--

CREATE TABLE `table_siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_registrasi` varchar(255) NOT NULL,
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

INSERT INTO `table_siswa` (`id_siswa`, `id_user`, `no_registrasi`, `nik`, `nama`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `anak_ke`, `jumlah_keluarga`, `bahasa_dirumah`, `jarak_tempuh`, `golongan_darah`, `keadaan_fisik`, `penyakit`, `penyakit_diderita`, `bakat`, `hafalan`, `kemampuan_baca`, `kewarganegaraan`, `nama_ayah`, `no_hp_ortu`, `agama`, `status_perkawinan`, `alamat_orang_tua`, `status_rumah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `nama_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`) VALUES
(24, 19, '510072021001', '1771070307960001', 'sri', 'padang', 'padang panjang', '1996-07-03', 'Perempuan', '1', '2', 'minang', '1-2 km', 'a', 'normal', 'tidak ada', 'tidak ada', 'lomba tikat provinsi', '2 juz', 'fasih', 'Indonesia', 'kaka', '082169074845', 'Islam', 'Menikah', 'padang', 'Kontrakan', 'SD', 'Tni/Polri', 'Rp. 1000.000.00 perbulan', 'nadia', 'SD', 'Pedagang', 'Rp. 500.000.00 perbulan'),
(25, 21, '510072021002', '1771070307960002', 'nadia', 'malalo', 'padang panjang', '13.10.2020', 'Perempuan', '6', '3', 'indinesia', '5-6 km', 'o', 'normal', 'tidak ada', 'tidak ada', 'lomba tikat provinsi', '2 juz', 'fasih', 'Indonesia', 'arjalis', '082169074845', 'Islam', 'Menikah', 'padang', 'Kontrakan', 'SD', 'Tni/Polri', 'Rp. 500.000.00 perbulan', 'kaka', 'SD', 'Pedagang', 'Rp. 500.000.00 perbulan'),
(26, 24, '510072021003', '1771070307960003', 'mama', 'padang', 'padang', '16.10.2020', 'Laki Laki', '4', '3', 'indinesia', '1-2 km', 'a', 'normal', 'tidak ada', 'tidak ada', 'lomba tikat provinsi', '2 juz', 'fasih', 'Indonesia', 'paralis', '082169074845', 'Islam', 'Menikah', 'padang', 'Kontrakan', 'SD', 'Tni/Polri', 'Rp. 500.000.00 perbulan', 'nadia', 'SD', 'Pedagang', 'Rp. 500.000.00 perbulan'),
(27, 22, '511072021004', '1771070307960004', 'nana', 'padang', 'padang panjang', '1999-07-08', 'Perempuan', '2', '2', 'inggris', '1-2 km', 'o', 'non disabilitas', 'tidak ada', 'tidak ada', 'lomba tikat provinsi', '2 juz', 'fasih', 'Indonesia', 'paralis', '082169074845', 'Islam', 'Menikah', 'padang', 'Kontrakan', 'SD', 'Tni/Polri', 'Rp. 500.000.00 perbulan', 'nadia', 'SD', 'Pedagang', 'Rp. 500.000.00 perbulan');

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
(6, 'yahdi', 'yahdialmukaram03@gmail.com', '58d432c74ad12fc7d0f30300771bec18', '08-07-2021, 23:39:29', 'admin'),
(13, 'almukaram', 'almukaram@gmail.com', 'ad39e69e28010c11ce8c9bc5997a8473', '09-07-2021, 00:38:38', 'siswa'),
(19, 'sri', 'sri@gmail.com', 'd1565ebd8247bbb01472f80e24ad29b6', '09-07-2021, 16:48:54', 'siswa'),
(20, 'anggi', 'anggi@gmail.com', '4a283e1f5eb8628c8631718fe87f5917', '10-07-2021, 01:39:53', 'siswa'),
(21, 'nadia', 'nadia@gmail.com', 'a2e8cea3392da09d1d31be3fca68efed', '10-07-2021, 08:51:56', 'siswa'),
(22, 'nana', 'nana@gmail.com', '518d5f3401534f5c6c21977f12f60989', '10-07-2021, 17:16:00', 'siswa'),
(23, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '10-07-2021, 17:17:39', 'admin'),
(24, 'mama', 'mama@gmail.com', 'eeafbf4d9b3957b139da7b7f2e7f2d4a', '10-07-2021, 21:35:54', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_jadwal`
--
ALTER TABLE `table_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `table_nilai`
--
ALTER TABLE `table_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `table_sekolah`
--
ALTER TABLE `table_sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

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
-- AUTO_INCREMENT for table `table_jadwal`
--
ALTER TABLE `table_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `table_nilai`
--
ALTER TABLE `table_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_sekolah`
--
ALTER TABLE `table_sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `table_siswa`
--
ALTER TABLE `table_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
