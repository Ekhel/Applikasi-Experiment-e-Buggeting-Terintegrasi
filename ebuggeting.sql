-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2018 at 02:06 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebuggeting`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun_rek_belanja`
--

CREATE TABLE `akun_rek_belanja` (
  `id_rek_belanja` int(14) NOT NULL,
  `id_sub_jenis_belanja` int(14) NOT NULL,
  `kode_3` varchar(128) CHARACTER SET utf8 NOT NULL,
  `akun_rek_belanja` varchar(128) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun_rek_belanja`
--

INSERT INTO `akun_rek_belanja` (`id_rek_belanja`, `id_sub_jenis_belanja`, `kode_3`, `akun_rek_belanja`) VALUES
(1, 1, '5.2.1.01', 'Honorarium PNS'),
(2, 1, '5.2.1.02', 'Honorarium Non PNS'),
(3, 1, '5.2.1.03', 'Uang Lembur'),
(4, 1, '5.2.1.04', 'Belanja Beasiswa Pendidikan PNS'),
(5, 1, '5.2.1.05', 'Belanja Kursus, Pelatihan, Sosialisasi, dan Bimbingan Teknis PNS'),
(6, 2, '5.2.2.01', 'Belanja Bahan Pakai Habis'),
(7, 2, '5.2.2.02', 'Belanja Bahan/Material'),
(8, 2, '5.2.2.03', 'Belanja Jasa Kantor'),
(9, 2, '5.2.2.04', 'Belanja Premi Asuransi'),
(10, 2, '5.2.2.05', 'Belanja Perawatan Kendaraan Bermotor'),
(11, 2, '5.2.2.06', 'Belanja Cetak dan Penggandaan'),
(12, 2, '5.2.2.07', 'Belanja Sewa Rumah/Gedung/Gudang/Parkir'),
(13, 2, '5.2.2.08', 'Belanja Sewa Sarana Mobilitas'),
(14, 2, '5.2.2.09', 'Belanja Sewa Alat Berat'),
(15, 2, '5.2.2.10', 'Belanja Perlengkapan dan Peralatan Kantor'),
(16, 2, '5.2.2.11', 'Belanja Makanan dan Minuman'),
(17, 2, '5.2.2.12', 'Belanja Pakian Dinas dan Atributnya'),
(18, 2, '5.2.2.13', 'Belanja Pakian Kerja'),
(19, 2, '5.2.2.14', 'Belanja Pakian khusus dan hari - hari tertentu'),
(20, 2, '5.2.2.15', 'Belanja Perjalanan Dinas'),
(21, 2, '5.2.2.16', 'Belanja Perjalanan Pindah Tugas'),
(22, 2, '5.2.2.17', 'Belanja Pemulangan Pegawai'),
(23, 3, '5.2.3.01', 'Belanja Modal Pengadaan Tanah'),
(24, 3, '5.2.3.02', 'Belanja Modal Pengadaan Alat - alat Berat'),
(25, 3, '5.2.3.03', 'Belanja Modal Pengadaan Alat - alat Angkutan Darat Bermotor'),
(26, 3, '5.2.3.04', 'Belanja Modal Pengadaan Alat - alat Angkutan Darat Tidak Bermotor'),
(27, 3, '5.2.3.05', 'Belanja Modal Pengadaan Alat - alat Angkutan di atas Air Bermotor'),
(28, 3, '5.2.3.06', 'Belanja Modal Pengadaan Alat - alat Angkutan di atas Air Tidak Bermotor');

-- --------------------------------------------------------

--
-- Table structure for table `belanja`
--

CREATE TABLE `belanja` (
  `id_rek` int(14) NOT NULL,
  `id_renja` int(14) NOT NULL,
  `program` varchar(256) CHARACTER SET utf8 NOT NULL,
  `kegiatan` varchar(256) CHARACTER SET utf8 NOT NULL,
  `uraian` varchar(256) CHARACTER SET utf8 NOT NULL,
  `kode` varchar(256) CHARACTER SET utf8 NOT NULL,
  `id_rek_belanja` int(14) NOT NULL,
  `id_sub_akun_rek` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `belanja`
--

INSERT INTO `belanja` (`id_rek`, `id_renja`, `program`, `kegiatan`, `uraian`, `kode`, `id_rek_belanja`, `id_sub_akun_rek`) VALUES
(10486, 10453, 'Program Pendidikan Anak Usia Dini', 'Pengadaan buku-buku dan alat tulis siswa', 'Honorarium Panitia Pelaksana Kegiatan', '5.2.1.01.01', 1, 1),
(10487, 8819, 'Program Pelayanan Administrasi Perkantoran', 'Penyediaan jasa surat menyurat', 'Honorarium Tenaga Ahli/Instruktur/Narasumber', '5.2.1.02.01', 2, 3),
(10489, 10631, 'Program Pendidikan Anak Usia Dini', 'Pengadaan perlengkapan sekolah', 'Honorarium Tim Pengadaan Barang dan Jasa', '5.2.1.01.02', 1, 2),
(10490, 10631, 'Program Pendidikan Anak Usia Dini', 'Pengadaan perlengkapan sekolah', 'Honorarium Pegawai Honorer/tidak tetap', '5.2.1.02.02', 2, 4),
(10491, 10631, 'Program Pendidikan Anak Usia Dini', 'Pengadaan perlengkapan sekolah', 'Honorarium Tim Pengadaan Barang dan Jasa', '5.2.1.01.02', 1, 2),
(10492, 10453, 'Program Pendidikan Anak Usia Dini', 'Pengadaan buku-buku dan alat tulis siswa', 'Honorarium Tim Pengadaan Barang dan Jasa', '5.2.1.01.02', 1, 2),
(10493, 8975, 'Program Pelayanan Administrasi Perkantoran', 'Penyediaan jasa pemeliharaan dan perizinan kendaraan dinas/operasional', 'Honorarium Pegawai Honorer/tidak tetap', '5.2.1.02.02', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_belanja`
--

CREATE TABLE `jenis_belanja` (
  `id_jenis_belanja` int(14) NOT NULL,
  `kode_1` varchar(128) CHARACTER SET utf8 NOT NULL,
  `jenis_belanja` varchar(128) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_belanja`
--

INSERT INTO `jenis_belanja` (`id_jenis_belanja`, `kode_1`, `jenis_belanja`) VALUES
(1, '5.1', 'BELANJA TIDAK LANGSUNG'),
(2, '5.2', 'BELANJA LANGSUNG');

-- --------------------------------------------------------

--
-- Table structure for table `rab`
--

CREATE TABLE `rab` (
  `id_rab` int(14) NOT NULL,
  `id_rek` int(14) NOT NULL,
  `id_renja` int(14) NOT NULL,
  `ssh` varchar(256) CHARACTER SET utf8 NOT NULL,
  `satuan` varchar(128) CHARACTER SET utf8 NOT NULL,
  `Harga` decimal(15,0) NOT NULL,
  `vol` decimal(14,0) NOT NULL,
  `jumlah` decimal(11,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rab`
--

INSERT INTO `rab` (`id_rab`, `id_rek`, `id_renja`, `ssh`, `satuan`, `Harga`, `vol`, `jumlah`) VALUES
(1, 10489, 10631, 'Kertas A4', 'Rim', '50000', '2', '100000'),
(2, 10489, 10631, 'Matrei 6000', 'Lembar', '6500', '2', '13000'),
(3, 10490, 10631, 'Paku Payung', 'Kg', '12000', '2', '24000'),
(4, 10490, 10631, 'Kertas A3', 'lembar', '75000', '3', '230000'),
(5, 10489, 10631, 'Nasi Ikan', 'Kotak', '85000', '1', '85000');

-- --------------------------------------------------------

--
-- Table structure for table `ssh`
--

CREATE TABLE `ssh` (
  `id_ssh` int(14) NOT NULL,
  `nama` varchar(256) CHARACTER SET utf8 NOT NULL,
  `deskripsi` varchar(256) CHARACTER SET utf8 NOT NULL,
  `satuan` varchar(256) CHARACTER SET utf8 NOT NULL,
  `harga` decimal(14,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ssh`
--

INSERT INTO `ssh` (`id_ssh`, `nama`, `deskripsi`, `satuan`, `harga`) VALUES
(1, 'Paku Payung', 'Paku', 'Kg', '12000'),
(3, 'Kertas F4', 'Kertas Ukuran F4', 'Rim', '45000'),
(4, 'Kertas A4', 'Kertas Ukuran A4', 'Rim', '50000'),
(5, 'Nasi Ikan', 'Nasi Lauk Ikan Mujair', 'Kotak', '85000'),
(6, 'Nasi Ayam', 'Nasi Lauk Ayam', 'Kotak', '35000'),
(7, 'Matrei 6000', 'Matrei 6000', 'Lembar', '6500'),
(8, 'Kertas A3', 'Ukuran (29,7 x 42,0 Cm)', 'lembar', '75000');

-- --------------------------------------------------------

--
-- Table structure for table `sub_akun_rek_belanja`
--

CREATE TABLE `sub_akun_rek_belanja` (
  `id_sub_akun_rek` int(14) NOT NULL,
  `id_rek_belanja` int(14) NOT NULL,
  `kode_4` varchar(128) CHARACTER SET utf8 NOT NULL,
  `sub_akun_rek` varchar(128) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_akun_rek_belanja`
--

INSERT INTO `sub_akun_rek_belanja` (`id_sub_akun_rek`, `id_rek_belanja`, `kode_4`, `sub_akun_rek`) VALUES
(1, 1, '5.2.1.01.01', 'Honorarium Panitia Pelaksana Kegiatan'),
(2, 1, '5.2.1.01.02', 'Honorarium Tim Pengadaan Barang dan Jasa'),
(3, 2, '5.2.1.02.01', 'Honorarium Tenaga Ahli/Instruktur/Narasumber'),
(4, 2, '5.2.1.02.02', 'Honorarium Pegawai Honorer/tidak tetap');

-- --------------------------------------------------------

--
-- Table structure for table `sub_jenis_belanja`
--

CREATE TABLE `sub_jenis_belanja` (
  `id_sub_jenis_belanja` int(14) NOT NULL,
  `id_jenis_belanja` int(14) NOT NULL,
  `kode_2` varchar(128) CHARACTER SET utf8 NOT NULL,
  `sub_jenis_belanja` varchar(128) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_jenis_belanja`
--

INSERT INTO `sub_jenis_belanja` (`id_sub_jenis_belanja`, `id_jenis_belanja`, `kode_2`, `sub_jenis_belanja`) VALUES
(1, 2, '5.2.1', 'BELANJA PEGAWAI'),
(2, 2, '5.2.2', 'BELANJA BARANG DAN JASA'),
(3, 2, '5.2.3', 'BELANJA MODAL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun_rek_belanja`
--
ALTER TABLE `akun_rek_belanja`
  ADD PRIMARY KEY (`id_rek_belanja`);

--
-- Indexes for table `belanja`
--
ALTER TABLE `belanja`
  ADD PRIMARY KEY (`id_rek`);

--
-- Indexes for table `jenis_belanja`
--
ALTER TABLE `jenis_belanja`
  ADD PRIMARY KEY (`id_jenis_belanja`);

--
-- Indexes for table `rab`
--
ALTER TABLE `rab`
  ADD PRIMARY KEY (`id_rab`);

--
-- Indexes for table `ssh`
--
ALTER TABLE `ssh`
  ADD PRIMARY KEY (`id_ssh`);

--
-- Indexes for table `sub_akun_rek_belanja`
--
ALTER TABLE `sub_akun_rek_belanja`
  ADD PRIMARY KEY (`id_sub_akun_rek`);

--
-- Indexes for table `sub_jenis_belanja`
--
ALTER TABLE `sub_jenis_belanja`
  ADD PRIMARY KEY (`id_sub_jenis_belanja`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun_rek_belanja`
--
ALTER TABLE `akun_rek_belanja`
  MODIFY `id_rek_belanja` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `belanja`
--
ALTER TABLE `belanja`
  MODIFY `id_rek` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10494;
--
-- AUTO_INCREMENT for table `jenis_belanja`
--
ALTER TABLE `jenis_belanja`
  MODIFY `id_jenis_belanja` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rab`
--
ALTER TABLE `rab`
  MODIFY `id_rab` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ssh`
--
ALTER TABLE `ssh`
  MODIFY `id_ssh` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sub_akun_rek_belanja`
--
ALTER TABLE `sub_akun_rek_belanja`
  MODIFY `id_sub_akun_rek` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sub_jenis_belanja`
--
ALTER TABLE `sub_jenis_belanja`
  MODIFY `id_sub_jenis_belanja` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
