-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 03, 2021 at 05:54 PM
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
-- Database: `p_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_berita`
--

CREATE TABLE `table_berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_berita`
--

INSERT INTO `table_berita` (`id_berita`, `judul`, `image`, `isi`, `tanggal`) VALUES
(2, 'gotoroyomg mesjid', 'dd864d59f4feb87d8e7717cf110472b5.PNG', 'ok', '30-07-2021, 17:32:23'),
(3, 'gotoroyomg mesjid', '0cbfda9b17bff6d6c40de654fe3ebc25.PNG', 'mesjid mesjid mesjid mesjid mesjid mesjid mesjid mesjid mesjid mesjid mesjid mesjid mesjid mesjid mesjid mesjid ', '31-07-2021, 00:40:30'),
(4, 'ketaping malalo', 'a62b1d3d04211ac36d0edf32a3b014b5.PNG', ' mesjid mesjid mesjid duo koto', '31-07-2021, 00:42:09'),
(5, 'lomab juara satu tingkat profinsi sumtra se smutra barat', '61de3eb5b56017346393130dd238aa33.PNG', 'ada yang buisa lomba di padang panjnag dan sekolah tersebt emenangkan lomba tersebut,, dan di akan menlanggeng ke tinmglat profinsi dan tingkat nasional, semoga anak kita selalu di beri hidayah oleh allah . amin ya allah.', '31-07-2021, 02:08:09'),
(6, 'tidak turun hujan', '1676d557d6e606224afc4ef020e6ad82.PNG', 'padang tidak akan hujan dlama beberapa hari ini', '31-07-2021, 02:25:04'),
(7, 'puasa ok ok', '8be0bbe21eaa5b961232ddd7bb0c426f.PNG', 'ada yang buisa lomba di padang panjnag dan sekolah tersebt emenangkan lomba tersebut,, dan di akan menlanggeng ke tinmglat profinsi dan tingkat nasional, semoga anak kita selalu di beri hidayah oleh allah . amin ya allah.', '31-07-2021, 02:25:30'),
(8, 'belajar bersama', 'aea10da5200139f018bf03e931aab596.PNG', 'ada yang buisa lomba di padang panjnag dan sekolah tersebt emenangkan lomba tersebut,, dan di akan menlanggeng ke tinmglat profinsi dan tingkat nasional, semoga anak kita selalu di beri hidayah oleh allah . amin ya allah. ada yang buisa lomba di padang panjnag dan sekolah tersebt emenangkan lomba tersebut,, dan di akan menlanggeng ke tinmglat profinsi dan tingkat nasional, semoga anak kita selalu di beri hidayah oleh allah . amin ya allah.', '31-07-2021, 02:25:42'),
(9, 'puasa ok ok', '6d813eb2d6072b4958b4ad4c71ed802e.PNG', 'ada yang buisa lomba di padang panjnag dan sekolah tersebt emenangkan lomba tersebut,, dan di akan menlanggeng ke tinmglat profinsi dan tingkat nasional, semoga anak kita selalu di beri hidayah oleh allah . amin ya allah.', '31-07-2021, 02:25:55'),
(10, 'awal tarawih puasa 2021', 'ca55105fe9115933f3502128232e7ce6.PNG', 'ada yang buisa lomba di padang panjnag dan sekolah tersebt emenangkan lomba tersebut,, dan di akan menlanggeng ke tinmglat profinsi dan tingkat nasional, semoga anak kita selalu di beri hidayah oleh allah . amin ya allah.ada yang buisa lomba di padang panjnag dan sekolah tersebt emenangkan lomba tersebut,, dan di akan menlanggeng ke tinmglat profinsi dan tingkat nasional, semoga anak kita selalu di beri hidayah oleh allah . amin ya allah.ada yang buisa lomba di padang panjnag dan sekolah tersebt emenangkan lomba tersebut,, dan di akan menlanggeng ke tinmglat profinsi dan tingkat nasional, semoga anak kita selalu di beri hidayah oleh allah . amin ya allah.ada yang buisa lomba di padang panjnag dan sekolah tersebt emenangkan lomba tersebut,, dan di akan menlanggeng ke tinmglat profinsi dan tingkat nasional, semoga anak kita selalu di beri hidayah oleh allah . amin ya allah.', '31-07-2021, 02:26:10'),
(11, 'belajar bersama', 'da0e941cd0cfda0d37559301d3d52d1a.PNG', 'ada yang buisa lomba di padang panjnag dan sekolah tersebt emenangkan lomba tersebut,, dan di akan menlanggeng ke tinmglat profinsi dan tingkat nasional, semoga anak kita selalu di beri hidayah oleh allah . amin ya allah.ada yang buisa lomba di padang panjnag dan sekolah tersebt emenangkan lomba tersebut,, dan di akan menlanggeng ke tinmglat profinsi dan tingkat nasional, semoga anak kita selalu di beri hidayah oleh allah . amin ya allah.', '31-07-2021, 02:26:24'),
(12, 'belajar bersama', '94b558a2aa5252e08ecd7131c56143c8.PNG', ' ada yang buisa lomba di padang panjnag dan sekolah tersebt emenangkan lomba tersebut,, dan di akan menlanggeng ke tinmglat profinsi dan tingkat nasional, ', '31-07-2021, 02:26:38'),
(16, 'tes', '3293e8f60f219b8451c30b03905321b2.PNG', 'tes', '31-07-2021, 04:03:00');

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
(21, '07/18/2021 7:36 PM sampai 07/15/2021 7:36 PM', '100', '41');

-- --------------------------------------------------------

--
-- Table structure for table `table_nilai`
--

CREATE TABLE `table_nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `qiroah` varchar(255) NOT NULL,
  `wawancara_ortu` varchar(255) NOT NULL,
  `paquyuban` varchar(255) NOT NULL,
  `nilai_akhir` varchar(255) NOT NULL,
  `status_sms` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_nilai`
--

INSERT INTO `table_nilai` (`id_nilai`, `id_user`, `qiroah`, `wawancara_ortu`, `paquyuban`, `nilai_akhir`, `status_sms`) VALUES
(18, 21, '100', '55', '55', '70', '0'),
(20, 19, '60', '77', '78', '71.66666666666667', '0'),
(30, 38, '90', '80', '80', '83.333333333333', '0'),
(31, 13, '88', '90', '88', '88.666666666667', '0'),
(32, 43, '89', '20', '66', '58.333333333333', '0'),
(33, 44, '80', '77', '99', '85.333333333333', '0');

-- --------------------------------------------------------

--
-- Table structure for table `table_peringkat`
--

CREATE TABLE `table_peringkat` (
  `id_peringkat` int(11) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `peringkat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_peringkat`
--

INSERT INTO `table_peringkat` (`id_peringkat`, `id_user`, `peringkat`) VALUES
(1, '13', '1'),
(2, '44', '2'),
(3, '38', '3'),
(4, '19', '4'),
(5, '21', '5'),
(6, '43', '6');

-- --------------------------------------------------------

--
-- Table structure for table `table_saran`
--

CREATE TABLE `table_saran` (
  `id_saran` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_saran`
--

INSERT INTO `table_saran` (`id_saran`, `nama`, `email`, `subject`, `message`) VALUES
(1, 'yahdi almukaram', 'yahdialmukaram03@gmail.com', 'masalah login', 'ok');

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
(33, '21', '21', 'SDIT Qurrata A\'yun Batusangkar', 'afb164db37eeb0a0bb630c52e286fec6.pdf', '0ac243fc43dc376d9c6996aea731031c.pdf'),
(35, '19', '21', 'SDIT Qurrata A\'yun 3 Batusangkar', 'd022189bd7414bd36d344bf483453535.pdf', 'b195f67487c6210451d39f71a1a20648.pdf'),
(67, '38', '21', 'SDIT Qurrata A\'yun 2 Lintau', '87f39525ca5133dc79cbf16518a7abc5.pdf', '74229475d3a2b73470e7291828c83119.pdf'),
(68, '13', '21', 'SDIT Qurrata A\'yun 3 Batusangkar', '9334a0339b370c2fe7f0e17505af3be4.pdf', 'fba06ed85ecf049b021ea67c1f73620b.pdf'),
(69, '43', '21', 'SDIT Qurrata A\'yun Batusangkar', '52f798af65845accf86ccf8d428b3784.pdf', 'e09c3237cadb66e014896f4ba72afec4.pdf'),
(70, '44', '21', 'SDIT Qurrata A\'yun Batusangkar', '2fb42971306da91fcf805a65313b3987.pdf', '7722d8203631e2eba96626cdf155cb6a.pdf');

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
(29, 13, '520072021006', '1304041208150012', 'almukaram', '', '', '', 'Laki Laki', '1', '1', 'minang', '1-2 km', 'a', 'non disabilitas', '', '', '', '', '', '', '', '', 'Islam', 'Menikah', '', 'Kontrakan', 'SD', 'Tni/Polri', 'Rp. 500.000.00 perbulan', '', 'SD', 'Pedagang', 'Rp. 500.000.00 perbulan'),
(34, 38, '503082021008', '1304041288150002', 'andre', 'batusangkar', 'padang panjang', '03-08-2021', 'Laki Laki', '1', '1', 'minang', '1-2 km', 'a', 'non disabilitas', 'tidak ada', 'tidak ada', 'lomba tikat provinsi', '3 juz', 'fasih', 'Indonesia', 'paralis', '082169074845', 'Islam', 'Menikah', 'padang', 'Kontrakan', 'SD', 'Tni/Polri', 'Rp. 500.000.00 perbulan', 'darnis', 'SD', 'Pedagang', 'Rp. 500.000.00 perbulan'),
(35, 43, '504082021009', '1772070307960004', 'tuty', 'padang kota', 'padang panjang', '04-08-2021', 'Laki Laki', '1', '1', 'minang', '1-2 km', 'a', 'non disabilitas', 'tidak ada', 'tidak ada', 'lomba tikat provinsi', '3 juz', 'fasih', 'Indonesia', 'paralis', '+6282169074845', 'Islam', 'Menikah', 'padang', 'Kontrakan', 'SD', 'Tni/Polri', 'Rp. 500.000.00 perbulan', 'wewe', 'SD', 'Pedagang', 'Rp. 500.000.00 perbulan'),
(36, 44, '504082021010', '1711070307960004', 'ari', 'padang', 'padang panjang', '04-08-2021', 'Laki Laki', '1', '1', 'minang', '1-2 km', 'a', 'non disabilitas', 'tidak ada', 'tidak ada', 'lomba tikat provinsi', '3 juz', 'fasih', 'Indonesia', 'paralis', '+6282169074845', 'Kristen', 'Cerai mati', 'padang', 'Kontrakan', 'SD', 'Tni/Polri', 'Rp. 500.000.00 perbulan', 'wewe', 'SD', 'Pedagang', 'Rp. 500.000.00 perbulan');

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
  `level` varchar(255) NOT NULL,
  `verifikator` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_user`
--

INSERT INTO `table_user` (`id_user`, `username`, `email`, `password`, `waktu`, `level`, `verifikator`) VALUES
(6, 'yahdi', 'yahdialmukaram03@gmail.com', '58d432c74ad12fc7d0f30300771bec18', '08-07-2021, 23:39:29', 'admin', ''),
(13, 'almukaram', 'almukaram@gmail.com', 'ad39e69e28010c11ce8c9bc5997a8473', '09-07-2021, 00:38:38', 'siswa', ''),
(19, 'sri', 'sri@gmail.com', 'd1565ebd8247bbb01472f80e24ad29b6', '09-07-2021, 16:48:54', 'siswa', ''),
(21, 'nadia', 'nadia@gmail.com', 'a2e8cea3392da09d1d31be3fca68efed', '10-07-2021, 08:51:56', 'siswa', ''),
(23, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '10-07-2021, 17:17:39', 'admin', ''),
(28, 'lala', 'lala@gmail.com', '2e3817293fc275dbee74bd71ce6eb056', '20-07-2021, 17:36:19', 'siswa', ''),
(34, 'wancara', 'wancara@gmail.com', '5254ea2f5b180e8a5ad54df5471158b8', '03-08-2021, 22:04:02', 'guru', 'wawancara_ortu'),
(35, 'paquyuban', 'paquyuban@gmail.com', 'cabf5196d077b8d5911dd08eefef3be3', '03-08-2021, 22:07:19', 'guru', 'paquyuban'),
(36, 'qiroah', 'qiroah@gmail.com', 'c3fcec78442e5abfc6f805dfb13de542', '03-08-2021, 22:11:45', 'guru', 'qiroah'),
(38, 'andre', 'andre@gmail.com', '19984dcaea13176bbb694f62ba6b5b35', '03-08-2021, 22:24:03', 'siswa', ''),
(42, 'sasa', 'sasa@gmail.com', 'f45731e3d39a1b2330bbf93e9b3de59e', '03-08-2021, 23:35:25', 'guru', 'wawancara_ortu'),
(43, 'tuty', 'tuty@gmail.com', '633c1b602d4bf88ed297f58b77e9087a', '04-08-2021, 00:11:26', 'siswa', ''),
(44, 'ari', 'ari@gmail.com', 'fc292bd7df071858c2d0f955545673c1', '04-08-2021, 00:43:00', 'siswa', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_berita`
--
ALTER TABLE `table_berita`
  ADD PRIMARY KEY (`id_berita`);

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
-- Indexes for table `table_peringkat`
--
ALTER TABLE `table_peringkat`
  ADD PRIMARY KEY (`id_peringkat`);

--
-- Indexes for table `table_saran`
--
ALTER TABLE `table_saran`
  ADD PRIMARY KEY (`id_saran`);

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
-- AUTO_INCREMENT for table `table_berita`
--
ALTER TABLE `table_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `table_jadwal`
--
ALTER TABLE `table_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `table_nilai`
--
ALTER TABLE `table_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `table_peringkat`
--
ALTER TABLE `table_peringkat`
  MODIFY `id_peringkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `table_saran`
--
ALTER TABLE `table_saran`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table_sekolah`
--
ALTER TABLE `table_sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `table_siswa`
--
ALTER TABLE `table_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
