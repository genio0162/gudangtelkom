-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 02:53 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gudtel`
--

-- --------------------------------------------------------

--
-- Table structure for table `area_gudang`
--

CREATE TABLE `area_gudang` (
  `id` int(11) NOT NULL,
  `namaso` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area_gudang`
--

INSERT INTO `area_gudang` (`id`, `namaso`) VALUES
(1, 'WH JEMBER'),
(2, 'SO INV TANGGUL INNER'),
(3, 'SO INV TANGGUL OUTTER'),
(4, 'SO INV JEMBER KOTA INNER'),
(5, 'SO INV JEMBER KOTA OUTTER'),
(6, 'SO INV JEMBER'),
(7, 'SO INV GENTENG'),
(8, 'SO INV BANYUWANGI'),
(9, 'SO INV BONDOWOSO'),
(10, 'SO INV SITUBONDO');

-- --------------------------------------------------------

--
-- Table structure for table `barang_baru`
--

CREATE TABLE `barang_baru` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(1000) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `pengirim` varchar(1000) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_baru`
--

INSERT INTO `barang_baru` (`id`, `tanggal`, `id_barang`, `nama`, `jenis`, `pengirim`, `jumlah`, `keterangan`) VALUES
(1, '04/14/2021', '0', 'Nokia_G340', 'ONT', '', 50, ''),
(2, '04/14/2021', '0', 'Nokia_G340', 'ONT', '', 40, ''),
(3, '04/17/2021', '0', 'Nokia_G340', 'ONT', '', 100, ''),
(4, '04/17/2021', '0', 'Nokia_G340', 'ONT', '', 50, ''),
(5, '04/17/2021', '0', 'Nokia_G340', 'ONT', '', 100, ''),
(6, '04/17/2021', '0', 'Nokia_G340', 'ONT', '', 100, ''),
(7, '04/19/2021', '0', 'apa', 'ONT', '', 10, ''),
(8, '04/19/2021', '0', 'Nokia_G340', 'ONT', '', 10, ''),
(9, '04/19/2021', '0', 'Nokia_G340', 'ONT', '', 10, ''),
(10, '04/19/2021', '0', 'Nokia_G340', 'ONT', '', 50, ''),
(11, '04/19/2021', '0', 'Nokia_G340', 'ONT', '', 50, ''),
(12, '04/19/2021', '0', 'Nokia_G340', 'ONT', '', 50, ''),
(13, '04/21/2021', '0', 'Nokia_G340', 'STB', '', 10, ''),
(14, '04/21/2021', '0', 'Nokia_G340', 'STB', '', 0, ''),
(15, '04/21/2021', '0', 'Nokia_G340', 'STB', '', 0, ''),
(16, '04/21/2021', '0', 'Nokia_G340', 'STB', '', 0, ''),
(17, '04/21/2021', '0', 'ZTE_140', 'STB', '', 50, ''),
(18, '04/21/2021', '0', 'Nokia_G340', 'ONT', '', 50, ''),
(19, '04/24/2021', '0', 'Nokia_G340', '', '', 100, ''),
(20, '04/24/2021', '0', 'ZTE_140', 'STB', '', 100, ''),
(21, '04/24/2021', '0', 'Nokia_G340', 'ONT', '', 100, ''),
(22, '04/24/2021', '0', 'Nokia_G340', 'ONT', '', 100, ''),
(23, '04/24/2021', '0', 'BR000001', 'ONT', '', 10, ''),
(24, '2021-05-03', '', 'Nokia_G340', 'ONT', '', 10, 'pengadaan'),
(25, '2021-05-03', '', 'Nokia_G340', 'ONT', '', 10, 'pengadaan'),
(26, '2021-05-03', '', 'Nokia_G340', 'ONT', '', 10, 'pengadaan'),
(27, '2021-05-03', '', 'Nokia_G340', 'ONT', '', 10, 'pengadaan'),
(28, '2021-05-03', '', 'Nokia_G340', 'ONT', '', 20, 'pengadaan'),
(29, '2021-05-03', 'BR000001', 'Nokia_G340', 'ONT', '', 20, 'pengadaan'),
(30, '2021-05-03', 'BR000001', 'Nokia_G340', 'ONT', '', 10, 'pengadaan'),
(31, '2021-05-03', 'BR000001', 'Nokia_G340', 'ONT', '', 10, 'pengadaan'),
(32, '2021-05-03', 'BR000001', 'Nokia_G340', 'ONT', '', 50, 'pengadaan'),
(33, '2021-05-22', 'BR000001', 'Nokia_G340', 'ONT', '', 100, 'baru'),
(34, '2021-05-22', 'BR000002', 'ZTE_140', 'STB', '', 100, 'baru'),
(35, '2021-05-27', 'BR000001', 'Nokia_G340', 'ONT', '', 100, 'pengadaan'),
(36, '2021-05-27', 'BR000001', 'Nokia_G340', 'ONT', '', 100, 'pengadaan'),
(37, '2021-05-27', 'BR000001', 'Nokia_G340', 'ONT', '', 100, 'pengadaan'),
(38, '2021-06-01', 'BR000002', 'ZTE_140', 'STB', '', 100, 'pengadaan'),
(39, '2021-06-05', 'BR000001', 'Nokia_G340', 'ONT', '', 1, 'kirim'),
(40, '2021-06-05', 'BR000001', 'Nokia_G340', 'ONT', '', 1, 'kirim'),
(41, '2021-06-05', 'BR000001', 'Nokia_G340', 'ONT', '', 1, 'kirim'),
(42, '2021-06-05', 'BR000001', 'Nokia_G340', 'ONT', '', 1, 'kirim'),
(43, '2021-06-05', 'BR000001', 'Nokia_G340', 'ONT', '', 1, 'kirim'),
(44, '2021-06-14', 'BR000001', 'PRECON 50 METER', 'BH', '', 100, 'pengadaan'),
(45, '2021-06-15', 'BR000001', 'PRECON 50 METER', 'BH', 'Vendor', 100, 'pengadaan');

-- --------------------------------------------------------

--
-- Table structure for table `barang_baru2`
--

CREATE TABLE `barang_baru2` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(1000) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `pengirim` varchar(1000) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_baru2`
--

INSERT INTO `barang_baru2` (`id`, `tanggal`, `id_barang`, `nama`, `jenis`, `pengirim`, `jumlah`, `keterangan`) VALUES
(1, '2021-06-05', 'BR000001', 'Nokia_G340', 'ONT', '', 3, 'kirim');

-- --------------------------------------------------------

--
-- Table structure for table `barang_baru3`
--

CREATE TABLE `barang_baru3` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(1000) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `pengirim` varchar(1000) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barang_baru4`
--

CREATE TABLE `barang_baru4` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(1000) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `pengirim` varchar(1000) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barang_baru5`
--

CREATE TABLE `barang_baru5` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(1000) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `pengirim` varchar(1000) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barang_baru6`
--

CREATE TABLE `barang_baru6` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(1000) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `pengirim` varchar(1000) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barang_baru7`
--

CREATE TABLE `barang_baru7` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(1000) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `pengirim` varchar(1000) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barang_baru8`
--

CREATE TABLE `barang_baru8` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(1000) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `pengirim` varchar(1000) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barang_baru9`
--

CREATE TABLE `barang_baru9` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(1000) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `pengirim` varchar(1000) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barang_baru10`
--

CREATE TABLE `barang_baru10` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(1000) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `pengirim` varchar(1000) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(1000) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tujuan` varchar(1000) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_keluar`
--

INSERT INTO `barang_keluar` (`id`, `tanggal`, `id_barang`, `nama`, `jenis`, `jumlah`, `tujuan`, `keterangan`) VALUES
(1, '2021-05-03', 'BR000001', 'Nokia_G340', 'ONT', 10, 'SO INV TANGGUL INNER', ''),
(2, '2021-05-04', 'BR000001', 'Nokia_G340', 'ONT', 50, 'SO INV TANGGUL INNER', 'pengadaan'),
(3, '2021-05-02', 'BR000002', 'ZTE_140', 'STB', 10, 'SO INV JEMBER KOTA OUTTER', 'kirim'),
(4, '2021-06-05', 'BR000001', 'Nokia_G340', 'ONT', 4, 'WH JEMBER', 'kirim');

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar2`
--

CREATE TABLE `barang_keluar2` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(1000) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tujuan` varchar(1000) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_keluar2`
--

INSERT INTO `barang_keluar2` (`id`, `tanggal`, `id_barang`, `nama`, `jenis`, `jumlah`, `tujuan`, `keterangan`) VALUES
(1, '2021-06-05', 'BR000002', 'ZTE_140', 'STB', 2, 'WH JEMBER', 'kirim'),
(2, '2021-06-05', 'BR000001', 'Nokia_G340', 'ONT', 10, 'SO INV GENTENG', '');

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar3`
--

CREATE TABLE `barang_keluar3` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(1000) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tujuan` varchar(1000) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar4`
--

CREATE TABLE `barang_keluar4` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(1000) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tujuan` varchar(1000) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar5`
--

CREATE TABLE `barang_keluar5` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(1000) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tujuan` varchar(1000) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar6`
--

CREATE TABLE `barang_keluar6` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(1000) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tujuan` varchar(1000) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar7`
--

CREATE TABLE `barang_keluar7` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(1000) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tujuan` varchar(1000) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar8`
--

CREATE TABLE `barang_keluar8` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(1000) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tujuan` varchar(1000) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar9`
--

CREATE TABLE `barang_keluar9` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(1000) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tujuan` varchar(1000) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar10`
--

CREATE TABLE `barang_keluar10` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(1000) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tujuan` varchar(1000) NOT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `db_stok_gudang`
--

CREATE TABLE `db_stok_gudang` (
  `id` int(11) NOT NULL,
  `tabel_gud` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_stok_gudang`
--

INSERT INTO `db_stok_gudang` (`id`, `tabel_gud`) VALUES
(1, 'stok_tampil1'),
(2, 'stok_tampil2');

-- --------------------------------------------------------

--
-- Table structure for table `info_user`
--

CREATE TABLE `info_user` (
  `id` int(11) NOT NULL,
  `iduser` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `password2` varchar(200) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `nik` longtext NOT NULL,
  `emaill` varchar(500) NOT NULL,
  `telpon` varchar(100) NOT NULL,
  `wilayah` varchar(500) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `role_id` int(5) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_user`
--

INSERT INTO `info_user` (`id`, `iduser`, `password`, `password2`, `nama`, `alamat`, `nik`, `emaill`, `telpon`, `wilayah`, `foto`, `role_id`, `is_active`) VALUES
(0, 'admin0@telkom.com', '$2y$10$bPE5PleUtkgA6pb2wLM5COBBlynGjjq7ctooqcX5bWIQ73zSAjw/q', '', 'Bot_Com6', 'Unknow', '?', '.@com.com', '??', 'Web Developer', 'download4.jpg', 1, 1),
(1, 'admin1@telkom.com', '$2y$10$3kySiPPXjxg0zUWPdIDvnuvWHldZ0KxWWAoBZbcHDgrmHbib.u.Fu', 'whjember', 'Admin 1', 'tidak tau', '00000001', '1@gmail.com', '0088', 'WH JEMBER', 'default.jpg', 1, 1),
(2, 'admin2@telkom.com', '$2y$10$64EAd/MpP5Es8on8HKaoBeAMbO23.7htCAq4IT5TACzbu8Ovg8ZCS', 'witeljember', 'Admin 2', 'tidak tau', '00000001', '1@gmail.com', '0088', 'WH JEMBER', 'default.jpg', 1, 1),
(3, 'admin3@telkom.com', '$2y$10$BzuhghuQN6Mq7o8ffZUVIepiNYy8HQRdqGLQrGWMUmhYik5JdwFnG', 'soinvjember', 'Admin 3', 'tidak tau', '00000003', '3@gmail.com', '0088', 'SO INV JEMBER', 'default.jpg', 2, 1),
(4, 'admin4@telkom.com', '$2y$10$n8AkZklAr1jG/SXvz6WE0uywH.WUEGTAfj.7kNpDS1xwKO39.op7K', 'soinvjemkotin', 'Admin 4', 'tidak tau', '00000004', '4@gmail.com', '0088', 'SO INV JEMBER KOTA INNER', 'default.jpg', 2, 1),
(5, 'admin5@telkom.com', '$2y$10$E1gGKtyN/eZckTdp0wNBFeeaoJtnkULeHGfUcY0t0uTDJx/5EdY..', 'soinvjemkotout', 'Admin 5', 'tidak tau', '00000005', '5@gmail.com', '0088', 'SO INV JEMBER KOTA OUTTER', 'default.jpg', 2, 1),
(6, 'admin6@telkom.com', '$2y$10$dPOF3ihueMqvP4QC3/hKNeMz5OgKl/yodm7qybDvR5BsMwlFy7saS', 'soinvtguin', 'Admin 6', 'tidak tau', '00000006', '6@gmail.com', '0088', 'SO INV TANGGUL INNER', 'default.jpg', 2, 1),
(7, 'admin7@telkom.com', '$2y$10$zrUkO6RIq05PBkVx7ugdveMVDvz/TzZ4F5DNC/cngz4x1teOFVKia', 'soinvtguout', 'Admin 7', 'tidak tau', '00000007', '7@gmail.com', '0088', 'SO INV TANGGUL OUTTER', 'default.jpg', 2, 1),
(8, 'admin8@telkom.com', '$2y$10$d2DAWzUH/CkdqToa2Flw9e78HLwcxcGY/3xeEpJTvekYqeWiOq7nC', 'soinvbwi', 'Admin 8', 'tidak tau', '00000008', '8@gmail.com', '0088', 'SO INV BANYUWANGI', 'default.jpg', 2, 1),
(9, 'admin9@telkom.com', '$2y$10$JAhup5.smg2XYZNr0rs.d.rgiuNUZmry524rRH8RmD40P/Q5WvElC', 'soinvgen', 'Admin 9', 'tidak tau', '00000009', '9@gmail.com', '0088', 'SO INV GENTENG', 'default.jpg', 2, 1),
(10, 'admin10@telkom.com', '$2y$10$ijkDJfw4XBI1QKBmUPBoCuf2eUugLpGE3IZKxfYbmaexidMEGnHXW', 'soinvbws', 'Admin 10', 'tidak tau', '00000010', '10@gmail.com', '0088', 'SO INV BONDOWOSO', 'default.jpg', 2, 1),
(11, 'admin11@telkom.com', '$2y$10$SVqHVeF/5wTSh48cqkNFGOSKe9XHUs04lDV5NmZk.TvlgVMAfbpHq', 'soinvstb', 'Admin 11', 'tidak tau', '00000011', '11@gmail.com', '0088', 'SO INV SITUBONDO', 'default.jpg', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `id` int(11) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id`, `id_barang`, `nama`, `jenis`, `jumlah`) VALUES
(1, 'BR000001', 'PRECON 50 METER', 'BH', 0),
(2, 'BR000002', 'PRECON 60 METER', 'BH', 0),
(3, 'BR000003', 'PRECON 70 METER', 'BH', 0),
(4, 'BR000004', 'PRECON 80 METER', 'BH', 0),
(5, 'BR000005', 'CLAM S', 'BH', 0),
(6, 'BR000006', 'GUIDERING', 'BH', 0),
(7, 'BR000007', 'PULL STEPRING', 'BH', 0),
(8, 'BR000008', 'FAST CONECTOR ILSINTECH', 'BH', 0),
(9, 'BR000009', 'FAST CONECTOR FUJIKURA', 'BH', 0),
(10, 'BR000010', 'FAST CONECTOR SUMITOMO', 'BH', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `pengumuman` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `pengumuman`) VALUES
(4, 'Belum ada pengumuman');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `id_barang` int(20) NOT NULL,
  `kelas` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `id_barang`, `kelas`) VALUES
(1, 1, 'Admin'),
(2, 2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `stok_tampil1`
--

CREATE TABLE `stok_tampil1` (
  `id` int(11) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_tampil1`
--

INSERT INTO `stok_tampil1` (`id`, `id_barang`, `nama`, `jenis`, `jumlah`) VALUES
(1, 'BR000001', 'PRECON 50 METER', 'BH', 100),
(2, 'BR000002', 'PRECON 60 METER', 'BH', 0),
(3, 'BR000003', 'PRECON 70 METER', 'BH', 0),
(4, 'BR000004', 'PRECON 80 METER', 'BH', 0),
(5, 'BR000005', 'CLAM S', 'BH', 0),
(6, 'BR000006', 'GUIDERING', 'BH', 0),
(7, 'BR000007', 'PULL STEPRING', 'BH', 0),
(8, 'BR000008', 'FAST CONECTOR ILSINTECH', 'BH', 0),
(9, 'BR000009', 'FAST CONECTOR FUJIKURA', 'BH', 0),
(10, 'BR000010', 'FAST CONECTOR SUMITOMO', 'BH', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stok_tampil2`
--

CREATE TABLE `stok_tampil2` (
  `id` int(11) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_tampil2`
--

INSERT INTO `stok_tampil2` (`id`, `id_barang`, `nama`, `jenis`, `jumlah`) VALUES
(1, 'BR000001', 'PRECON 50 METER', 'BH', 0),
(2, 'BR000002', 'PRECON 60 METER', 'BH', 0),
(3, 'BR000003', 'PRECON 70 METER', 'BH', 0),
(4, 'BR000004', 'PRECON 80 METER', 'BH', 0),
(5, 'BR000005', 'CLAM S', 'BH', 0),
(6, 'BR000006', 'GUIDERING', 'BH', 0),
(7, 'BR000007', 'PULL STEPRING', 'BH', 0),
(8, 'BR000008', 'FAST CONECTOR ILSINTECH', 'BH', 0),
(9, 'BR000009', 'FAST CONECTOR FUJIKURA', 'BH', 0),
(10, 'BR000010', 'FAST CONECTOR SUMITOMO', 'BH', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stok_tampil3`
--

CREATE TABLE `stok_tampil3` (
  `id` int(11) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_tampil3`
--

INSERT INTO `stok_tampil3` (`id`, `id_barang`, `nama`, `jenis`, `jumlah`) VALUES
(1, 'BR000001', 'PRECON 50 METER', 'BH', 0),
(2, 'BR000002', 'PRECON 60 METER', 'BH', 0),
(3, 'BR000003', 'PRECON 70 METER', 'BH', 0),
(4, 'BR000004', 'PRECON 80 METER', 'BH', 0),
(5, 'BR000005', 'CLAM S', 'BH', 0),
(6, 'BR000006', 'GUIDERING', 'BH', 0),
(7, 'BR000007', 'PULL STEPRING', 'BH', 0),
(8, 'BR000008', 'FAST CONECTOR ILSINTECH', 'BH', 0),
(9, 'BR000009', 'FAST CONECTOR FUJIKURA', 'BH', 0),
(10, 'BR000010', 'FAST CONECTOR SUMITOMO', 'BH', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stok_tampil4`
--

CREATE TABLE `stok_tampil4` (
  `id` int(11) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_tampil4`
--

INSERT INTO `stok_tampil4` (`id`, `id_barang`, `nama`, `jenis`, `jumlah`) VALUES
(1, 'BR000001', 'PRECON 50 METER', 'BH', 0),
(2, 'BR000002', 'PRECON 60 METER', 'BH', 0),
(3, 'BR000003', 'PRECON 70 METER', 'BH', 0),
(4, 'BR000004', 'PRECON 80 METER', 'BH', 0),
(5, 'BR000005', 'CLAM S', 'BH', 0),
(6, 'BR000006', 'GUIDERING', 'BH', 0),
(7, 'BR000007', 'PULL STEPRING', 'BH', 0),
(8, 'BR000008', 'FAST CONECTOR ILSINTECH', 'BH', 0),
(9, 'BR000009', 'FAST CONECTOR FUJIKURA', 'BH', 0),
(10, 'BR000010', 'FAST CONECTOR SUMITOMO', 'BH', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stok_tampil5`
--

CREATE TABLE `stok_tampil5` (
  `id` int(11) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_tampil5`
--

INSERT INTO `stok_tampil5` (`id`, `id_barang`, `nama`, `jenis`, `jumlah`) VALUES
(1, 'BR000001', 'PRECON 50 METER', 'BH', 0),
(2, 'BR000002', 'PRECON 60 METER', 'BH', 0),
(3, 'BR000003', 'PRECON 70 METER', 'BH', 0),
(4, 'BR000004', 'PRECON 80 METER', 'BH', 0),
(5, 'BR000005', 'CLAM S', 'BH', 0),
(6, 'BR000006', 'GUIDERING', 'BH', 0),
(7, 'BR000007', 'PULL STEPRING', 'BH', 0),
(8, 'BR000008', 'FAST CONECTOR ILSINTECH', 'BH', 0),
(9, 'BR000009', 'FAST CONECTOR FUJIKURA', 'BH', 0),
(10, 'BR000010', 'FAST CONECTOR SUMITOMO', 'BH', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stok_tampil6`
--

CREATE TABLE `stok_tampil6` (
  `id` int(11) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_tampil6`
--

INSERT INTO `stok_tampil6` (`id`, `id_barang`, `nama`, `jenis`, `jumlah`) VALUES
(1, 'BR000001', 'PRECON 50 METER', 'BH', 0),
(2, 'BR000002', 'PRECON 60 METER', 'BH', 0),
(3, 'BR000003', 'PRECON 70 METER', 'BH', 0),
(4, 'BR000004', 'PRECON 80 METER', 'BH', 0),
(5, 'BR000005', 'CLAM S', 'BH', 0),
(6, 'BR000006', 'GUIDERING', 'BH', 0),
(7, 'BR000007', 'PULL STEPRING', 'BH', 0),
(8, 'BR000008', 'FAST CONECTOR ILSINTECH', 'BH', 0),
(9, 'BR000009', 'FAST CONECTOR FUJIKURA', 'BH', 0),
(10, 'BR000010', 'FAST CONECTOR SUMITOMO', 'BH', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stok_tampil7`
--

CREATE TABLE `stok_tampil7` (
  `id` int(11) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_tampil7`
--

INSERT INTO `stok_tampil7` (`id`, `id_barang`, `nama`, `jenis`, `jumlah`) VALUES
(1, 'BR000001', 'PRECON 50 METER', 'BH', 0),
(2, 'BR000002', 'PRECON 60 METER', 'BH', 0),
(3, 'BR000003', 'PRECON 70 METER', 'BH', 0),
(4, 'BR000004', 'PRECON 80 METER', 'BH', 0),
(5, 'BR000005', 'CLAM S', 'BH', 0),
(6, 'BR000006', 'GUIDERING', 'BH', 0),
(7, 'BR000007', 'PULL STEPRING', 'BH', 0),
(8, 'BR000008', 'FAST CONECTOR ILSINTECH', 'BH', 0),
(9, 'BR000009', 'FAST CONECTOR FUJIKURA', 'BH', 0),
(10, 'BR000010', 'FAST CONECTOR SUMITOMO', 'BH', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stok_tampil8`
--

CREATE TABLE `stok_tampil8` (
  `id` int(11) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_tampil8`
--

INSERT INTO `stok_tampil8` (`id`, `id_barang`, `nama`, `jenis`, `jumlah`) VALUES
(1, 'BR000001', 'PRECON 50 METER', 'BH', 0),
(2, 'BR000002', 'PRECON 60 METER', 'BH', 0),
(3, 'BR000003', 'PRECON 70 METER', 'BH', 0),
(4, 'BR000004', 'PRECON 80 METER', 'BH', 0),
(5, 'BR000005', 'CLAM S', 'BH', 0),
(6, 'BR000006', 'GUIDERING', 'BH', 0),
(7, 'BR000007', 'PULL STEPRING', 'BH', 0),
(8, 'BR000008', 'FAST CONECTOR ILSINTECH', 'BH', 0),
(9, 'BR000009', 'FAST CONECTOR FUJIKURA', 'BH', 0),
(10, 'BR000010', 'FAST CONECTOR SUMITOMO', 'BH', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stok_tampil9`
--

CREATE TABLE `stok_tampil9` (
  `id` int(11) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_tampil9`
--

INSERT INTO `stok_tampil9` (`id`, `id_barang`, `nama`, `jenis`, `jumlah`) VALUES
(1, 'BR000001', 'PRECON 50 METER', 'BH', 0),
(2, 'BR000002', 'PRECON 60 METER', 'BH', 0),
(3, 'BR000003', 'PRECON 70 METER', 'BH', 0),
(4, 'BR000004', 'PRECON 80 METER', 'BH', 0),
(5, 'BR000005', 'CLAM S', 'BH', 0),
(6, 'BR000006', 'GUIDERING', 'BH', 0),
(7, 'BR000007', 'PULL STEPRING', 'BH', 0),
(8, 'BR000008', 'FAST CONECTOR ILSINTECH', 'BH', 0),
(9, 'BR000009', 'FAST CONECTOR FUJIKURA', 'BH', 0),
(10, 'BR000010', 'FAST CONECTOR SUMITOMO', 'BH', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stok_tampil10`
--

CREATE TABLE `stok_tampil10` (
  `id` int(11) NOT NULL,
  `id_barang` varchar(20) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jenis` varchar(500) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_tampil10`
--

INSERT INTO `stok_tampil10` (`id`, `id_barang`, `nama`, `jenis`, `jumlah`) VALUES
(1, 'BR000001', 'PRECON 50 METER', 'BH', 0),
(2, 'BR000002', 'PRECON 60 METER', 'BH', 0),
(3, 'BR000003', 'PRECON 70 METER', 'BH', 0),
(4, 'BR000004', 'PRECON 80 METER', 'BH', 0),
(5, 'BR000005', 'CLAM S', 'BH', 0),
(6, 'BR000006', 'GUIDERING', 'BH', 0),
(7, 'BR000007', 'PULL STEPRING', 'BH', 0),
(8, 'BR000008', 'FAST CONECTOR ILSINTECH', 'BH', 0),
(9, 'BR000009', 'FAST CONECTOR FUJIKURA', 'BH', 0),
(10, 'BR000010', 'FAST CONECTOR SUMITOMO', 'BH', 0);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `tipe` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `tipe`) VALUES
(1, 'BH'),
(2, 'METER');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 2, 1),
(7, 2, 2),
(8, 2, 3),
(9, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `menu` varchar(250) NOT NULL,
  `ikon` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `id_menu`, `menu`, `ikon`) VALUES
(1, 1, 'Transaksi', 'nav-icon fas fa-people-carry'),
(2, 2, 'Laporan', 'nav-icon far fa-file-alt'),
(3, 3, 'Cetak', 'nav-icon fas fa-print'),
(4, 4, 'User', 'nav-icon fas fa-user-friends'),
(5, 5, 'Administrator', 'nav-icon fas fa-wrench');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `posisi` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `icon` varchar(200) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `posisi`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 0, 'Pengadaan', 'transaksi/pengadaan', 'nav-icon fas fa-circle', 1),
(2, 1, 0, 'Permintaan', 'transaksi/permintaan', 'nav-icon fas fa-circle', 1),
(3, 5, 0, 'Data Material', 'administrator/data_material', 'nav-icon fas fa-circle', 1),
(4, 2, 0, 'Stok Gudang', 'laporan/stokgud', 'nav-icon fas fa-circle', 1),
(5, 2, 0, 'Lap. Tabel', 'laporan/tabel', 'nav-icon fas fa-circle', 1),
(6, 2, 0, 'Lap. Grafik', 'laporan/grafik', 'nav-icon fas fa-circle', 1),
(7, 3, 0, 'Cetak Lap. Pengadaan', 'cetak/cet_barmas', 'nav-icon fas fa-circle', 1),
(8, 3, 0, 'Cetak Lap. Permintaan', 'cetak/cet_barkel', 'nav-icon fas fa-circle', 1),
(9, 4, 0, 'My Profile', 'user/profile', 'nav-icon fas fa-circle', 1),
(10, 5, 1, 'Kelola User', 'administrator/datauser', 'nav-icon fas fa-circle', 1),
(11, 4, 0, 'Users', 'user/users', 'nav-icon fas fa-circle', 1),
(12, 5, 0, 'Pengumuman', 'administrator/pengumuman', 'nav-icon fas fa-circle', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area_gudang`
--
ALTER TABLE `area_gudang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_baru`
--
ALTER TABLE `barang_baru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_baru2`
--
ALTER TABLE `barang_baru2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_baru3`
--
ALTER TABLE `barang_baru3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_baru4`
--
ALTER TABLE `barang_baru4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_baru5`
--
ALTER TABLE `barang_baru5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_baru6`
--
ALTER TABLE `barang_baru6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_baru7`
--
ALTER TABLE `barang_baru7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_baru8`
--
ALTER TABLE `barang_baru8`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_baru9`
--
ALTER TABLE `barang_baru9`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_baru10`
--
ALTER TABLE `barang_baru10`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_keluar2`
--
ALTER TABLE `barang_keluar2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_keluar3`
--
ALTER TABLE `barang_keluar3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_keluar4`
--
ALTER TABLE `barang_keluar4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_keluar5`
--
ALTER TABLE `barang_keluar5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_keluar6`
--
ALTER TABLE `barang_keluar6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_keluar7`
--
ALTER TABLE `barang_keluar7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_keluar8`
--
ALTER TABLE `barang_keluar8`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_keluar9`
--
ALTER TABLE `barang_keluar9`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_keluar10`
--
ALTER TABLE `barang_keluar10`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_stok_gudang`
--
ALTER TABLE `db_stok_gudang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_user`
--
ALTER TABLE `info_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stok_tampil1`
--
ALTER TABLE `stok_tampil1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stok_tampil2`
--
ALTER TABLE `stok_tampil2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stok_tampil3`
--
ALTER TABLE `stok_tampil3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stok_tampil4`
--
ALTER TABLE `stok_tampil4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stok_tampil5`
--
ALTER TABLE `stok_tampil5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stok_tampil6`
--
ALTER TABLE `stok_tampil6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stok_tampil7`
--
ALTER TABLE `stok_tampil7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stok_tampil8`
--
ALTER TABLE `stok_tampil8`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stok_tampil9`
--
ALTER TABLE `stok_tampil9`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stok_tampil10`
--
ALTER TABLE `stok_tampil10`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area_gudang`
--
ALTER TABLE `area_gudang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `barang_baru`
--
ALTER TABLE `barang_baru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `barang_baru2`
--
ALTER TABLE `barang_baru2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barang_baru3`
--
ALTER TABLE `barang_baru3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barang_baru4`
--
ALTER TABLE `barang_baru4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barang_baru5`
--
ALTER TABLE `barang_baru5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barang_baru6`
--
ALTER TABLE `barang_baru6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barang_baru7`
--
ALTER TABLE `barang_baru7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barang_baru8`
--
ALTER TABLE `barang_baru8`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barang_baru9`
--
ALTER TABLE `barang_baru9`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barang_baru10`
--
ALTER TABLE `barang_baru10`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `barang_keluar2`
--
ALTER TABLE `barang_keluar2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `barang_keluar3`
--
ALTER TABLE `barang_keluar3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barang_keluar4`
--
ALTER TABLE `barang_keluar4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barang_keluar5`
--
ALTER TABLE `barang_keluar5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barang_keluar6`
--
ALTER TABLE `barang_keluar6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barang_keluar7`
--
ALTER TABLE `barang_keluar7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barang_keluar8`
--
ALTER TABLE `barang_keluar8`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barang_keluar9`
--
ALTER TABLE `barang_keluar9`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barang_keluar10`
--
ALTER TABLE `barang_keluar10`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `db_stok_gudang`
--
ALTER TABLE `db_stok_gudang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `info_user`
--
ALTER TABLE `info_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stok_tampil1`
--
ALTER TABLE `stok_tampil1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stok_tampil2`
--
ALTER TABLE `stok_tampil2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stok_tampil3`
--
ALTER TABLE `stok_tampil3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stok_tampil4`
--
ALTER TABLE `stok_tampil4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stok_tampil5`
--
ALTER TABLE `stok_tampil5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stok_tampil6`
--
ALTER TABLE `stok_tampil6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stok_tampil7`
--
ALTER TABLE `stok_tampil7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stok_tampil8`
--
ALTER TABLE `stok_tampil8`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stok_tampil9`
--
ALTER TABLE `stok_tampil9`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stok_tampil10`
--
ALTER TABLE `stok_tampil10`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
