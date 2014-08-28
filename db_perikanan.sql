-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 21, 2014 at 04:42 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_perikanan`
--
CREATE DATABASE IF NOT EXISTS `db_perikanan` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_perikanan`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_adminweb`
--

CREATE TABLE IF NOT EXISTS `tbl_data_adminweb` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(35) DEFAULT '-',
  `password` varchar(100) NOT NULL,
  `decrypt` varchar(35) NOT NULL DEFAULT '-',
  `level` text NOT NULL,
  `Nama` varchar(25) DEFAULT '-',
  `email` varchar(25) DEFAULT '-',
  `Aktif` enum('Aktif','Tidak Aktif','','') NOT NULL DEFAULT 'Aktif',
  `note` varchar(100) NOT NULL DEFAULT '-',
  `access` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_data_adminweb`
--

INSERT INTO `tbl_data_adminweb` (`id`, `username`, `password`, `decrypt`, `level`, `Nama`, `email`, `Aktif`, `note`, `access`) VALUES
(5, 'Administrator', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'Administrator', 'Administrator', 'Mucharomtzaka@yahoo.co.id', 'Aktif', 'Administrator Database ', 1),
(6, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', 'Staff', 'xxx', 'xxx@admin.com', 'Aktif', 'aktif  test\r\n', 0),
(12, 'ferdinan', 'c4ca4238a0b923820dcc509a6f75849b', '1', 'Pengunjung', 'ferdinan', '-', 'Aktif', '-', 0),
(13, 'susilo', '006d2143154327a64d86a264aea225f3', 'qw', 'Staff', 'susilo', '-', 'Aktif', '-', 0),
(9, 'Ayu Lestari', 'b5c0b187fe309af0f4d35982fd961d7e', 'love', 'Staff', 'Ayu Lestari', 'Ayu_Lestari@yahoo.co.id', 'Aktif', 'Staff', 0),
(10, 'Mucharom', '202cb962ac59075b964b07152d234b70', '123', 'Staff', 'Mucharom', '123@yahoo.co.id', 'Aktif', '-', 0),
(11, 'cinta', 'c3653e4408832e6611f37dcd90544de8', 'cinta', 'Staff', 'cinta', 'cinta@yahoo.co.id', 'Aktif', '-', 0),
(14, 'susi', '536931d80decb18c33db9612bdd004d4', 'susi', 'Pengunjung', '-', 'susi@yahoo.com', 'Aktif', '-', 0),
(18, 'sita ayu lestari', '202cb962ac59075b964b07152d234b70', '123', 'Pengunjung', '-', 'sita@yahoo.co.id', 'Aktif', '-', 0),
(16, 'qw', '006d2143154327a64d86a264aea225f3', 'qw', 'Pengunjung', '-', 'qw@yahoo.co.id', 'Aktif', '-', 0),
(19, 'w', 'f1290186a5d0b1ceab27f4e77c0c5d68', 'w', 'Pengunjung', '-', 'we@yahoo.co.id', 'Aktif', '-', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_berita`
--

CREATE TABLE IF NOT EXISTS `tbl_data_berita` (
  `id_berita` int(5) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(5) NOT NULL,
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `judul_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `headline` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `isi_berita` text COLLATE latin1_general_ci NOT NULL,
  `hari` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `dibaca` int(5) NOT NULL DEFAULT '1',
  `tag` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=108 ;

--
-- Dumping data for table `tbl_data_berita`
--

INSERT INTO `tbl_data_berita` (`id_berita`, `id_kategori`, `username`, `judul`, `judul_seo`, `headline`, `isi_berita`, `hari`, `tanggal`, `jam`, `gambar`, `dibaca`, `tag`) VALUES
(106, 1, 'Mucharom', 'Produksi Ikan tawar meningkat', 'Produksi Ikan tawar meningkat', 'Y', 'Produksi Ikan tawar meningkat xxxxx', '-', '2014-08-16', '00:00:00', '-', 1, 'ikan tawar'),
(107, 2, 'Mucharom', 'Pertanian Ikan ', 'Pertanian  Ikan', 'Y', 'ffff', '-', '2014-08-16', '00:00:00', '-', 1, 'ikan tawar');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_daerah`
--

CREATE TABLE IF NOT EXISTS `tbl_data_daerah` (
  `id_daerah` int(11) NOT NULL AUTO_INCREMENT,
  `nama_daerah` varchar(25) NOT NULL,
  PRIMARY KEY (`id_daerah`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_data_daerah`
--

INSERT INTO `tbl_data_daerah` (`id_daerah`, `nama_daerah`) VALUES
(1, 'Sleman'),
(2, 'Yogyakarta'),
(3, 'Kulon Progo'),
(4, 'Wonosari'),
(5, 'Parang tritis'),
(6, 'Turi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_ikan`
--

CREATE TABLE IF NOT EXISTS `tbl_data_ikan` (
  `id_ikan` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_ikan` varchar(25) NOT NULL,
  `nama_ikan` varchar(100) DEFAULT '-',
  `nama_indonesia` varchar(100) DEFAULT '-',
  `nama_inggris` varchar(100) DEFAULT '-',
  `nama_latin_ilmiah` varchar(100) NOT NULL DEFAULT '-',
  `nama_group` varchar(100) DEFAULT '-',
  `id_produksi` int(11) NOT NULL,
  `id_daerah` int(11) NOT NULL,
  `volume_berat` int(11) NOT NULL,
  PRIMARY KEY (`id_ikan`),
  KEY `id_produksi` (`id_produksi`),
  KEY `id_daerah` (`id_daerah`),
  KEY `volume_berat` (`volume_berat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_data_ikan`
--

INSERT INTO `tbl_data_ikan` (`id_ikan`, `jenis_ikan`, `nama_ikan`, `nama_indonesia`, `nama_inggris`, `nama_latin_ilmiah`, `nama_group`, `id_produksi`, `id_daerah`, `volume_berat`) VALUES
(1, 'Bawal', '-', '-', '-', '-', '-', 1, 5, 1),
(2, 'Patin', '-', '-', '-', '-', '-', 0, 0, 0),
(3, 'Tuna', '-', '-', '-', '-', '-', 0, 0, 0),
(4, 'Udang', '-', '-', '-', '-', '-', 0, 0, 0),
(5, 'Lopster', '-', '-', '-', '-', '-', 0, 0, 0),
(6, 'Kepiting', '-', '-', '-', '-', '-', 0, 0, 0),
(7, 'Tenggiri', '-', '-', '-', '-', '-', 0, 0, 0),
(9, 'lele', '-', '-', '-', '-', '-', 0, 0, 0),
(10, 'mujair', 'mujair', 'mujair', 'Mozambique tilapia', 'Oreochromis mossambicus', 'Ikan – Fishes', 0, 0, 0),
(14, 'weder', '-', '-', '-', '-', '-', 0, 0, 0),
(15, 'Nila', 'Nila', 'Nila', 'Nile tilapia', 'Oreochromis niloticus', 'Ikan – Fishes', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_kapal`
--

CREATE TABLE IF NOT EXISTS `tbl_data_kapal` (
  `kode_kapal` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kapal` varchar(35) NOT NULL DEFAULT '-',
  `jenis_kapal` varchar(35) NOT NULL DEFAULT '-',
  `keterangan_lainnya` text,
  PRIMARY KEY (`kode_kapal`),
  UNIQUE KEY `kode_kapal` (`kode_kapal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_data_kapal`
--

INSERT INTO `tbl_data_kapal` (`kode_kapal`, `nama_kapal`, `jenis_kapal`, `keterangan_lainnya`) VALUES
(1, 'kapal bermotor', 'Kapal Kecil', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_kategori`
--

CREATE TABLE IF NOT EXISTS `tbl_data_kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(35) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_data_kategori`
--

INSERT INTO `tbl_data_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'tingkat/besarnya usaha'),
(2, 'Produksi menurut jenis ikan'),
(3, 'Produksi menurut jenis alat'),
(4, 'Daerah Perairan Pantai'),
(5, 'Statistik Unit Penangkapan Ikan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_klasifikasi`
--

CREATE TABLE IF NOT EXISTS `tbl_data_klasifikasi` (
  `kode_klasifikasi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_klasifikasi` varchar(100) NOT NULL,
  PRIMARY KEY (`kode_klasifikasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_data_klasifikasi`
--

INSERT INTO `tbl_data_klasifikasi` (`kode_klasifikasi`, `nama_klasifikasi`) VALUES
(1, 'PERIKANAN TANGKAP DI LAUT'),
(2, 'PERIKANAN TANGKAP DI PERAIRAN UMUM'),
(3, 'STANDAR KLASIFIKASI STATISTIK ALAT PENANGKAPAN IKAN DI LAUT'),
(4, 'STANDAR KLASIFIKASI STATISTIK JENIS IKAN PERIKANAN LAUT'),
(5, 'STANDAR KLASIFIKASI STATISTIK JENIS IKAN PERIKANAN PERAIRAN UMUM'),
(6, 'STANDAR KLASIFIKASI STATISTIK PERLAKUAN PRODUKSI DAN HASIL OLAHAN PERIKANAN TANGKAP'),
(7, 'KLASIFIKASI STATISTIK DAERAH PERAIRAN PANTAI PERIKANAN LAUT');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_menu`
--

CREATE TABLE IF NOT EXISTS `tbl_data_menu` (
  `id` tinyint(3) NOT NULL,
  `parent_id` int(3) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `order` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_data_menu`
--

INSERT INTO `tbl_data_menu` (`id`, `parent_id`, `judul`, `url`, `order`) VALUES
(1, 1, 'Beranda', 'beranda', 1),
(2, 2, 'Profil', 'profil', 2),
(3, 3, 'Berita', 'berita', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_nelayan`
--

CREATE TABLE IF NOT EXISTS `tbl_data_nelayan` (
  `id_nelayan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_nelayan` varchar(25) NOT NULL,
  `id_perairan` int(11) NOT NULL,
  `id_kabupaten` int(11) NOT NULL,
  `jenis_nelayan` enum('Nelayan penuh','Nelayan sambilan utama','Nelayan sambilan tambahan','') NOT NULL DEFAULT 'Nelayan sambilan tambahan',
  `id_tangkap` int(11) NOT NULL,
  `nama_unit` varchar(25) NOT NULL,
  `id_ikan` int(11) NOT NULL,
  `kode_kapal` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL DEFAULT '-',
  `catatan` text,
  PRIMARY KEY (`id_nelayan`),
  KEY `id_ikan` (`id_ikan`),
  KEY `id_kabupaten` (`id_kabupaten`),
  KEY `id_perairan` (`id_perairan`),
  KEY `id_tangkap` (`id_tangkap`),
  KEY `kode_kapal` (`kode_kapal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_data_nelayan`
--

INSERT INTO `tbl_data_nelayan` (`id_nelayan`, `nama_nelayan`, `id_perairan`, `id_kabupaten`, `jenis_nelayan`, `id_tangkap`, `nama_unit`, `id_ikan`, `kode_kapal`, `gambar`, `catatan`) VALUES
(4, 'ARI', 0, 2, 'Nelayan penuh', 1, 'jk', 4, 1, '-', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_olahan`
--

CREATE TABLE IF NOT EXISTS `tbl_data_olahan` (
  `id_olah` int(11) NOT NULL AUTO_INCREMENT,
  `id_produksi` int(11) NOT NULL,
  `pengolahan` text NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(35) DEFAULT NULL,
  `nelayan` int(11) NOT NULL,
  PRIMARY KEY (`id_olah`),
  KEY `id_produksi` (`id_produksi`),
  KEY `nelayan` (`nelayan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_data_olahan`
--

INSERT INTO `tbl_data_olahan` (`id_olah`, `id_produksi`, `pengolahan`, `keterangan`, `gambar`, `nelayan`) VALUES
(1, 3, 'rebus ', 'pindang ', NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_perairan`
--

CREATE TABLE IF NOT EXISTS `tbl_data_perairan` (
  `id_perairan` int(11) NOT NULL,
  `nama_perairan` enum('laut','umum','','') NOT NULL,
  PRIMARY KEY (`id_perairan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_data_perairan`
--

INSERT INTO `tbl_data_perairan` (`id_perairan`, `nama_perairan`) VALUES
(0, 'umum'),
(1, 'laut');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_peta`
--

CREATE TABLE IF NOT EXISTS `tbl_data_peta` (
  `kode_peta` int(11) NOT NULL AUTO_INCREMENT,
  `lokasi` int(11) NOT NULL,
  PRIMARY KEY (`kode_peta`),
  KEY `lokasi` (`lokasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_data_peta`
--

INSERT INTO `tbl_data_peta` (`kode_peta`, `lokasi`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_produksi`
--

CREATE TABLE IF NOT EXISTS `tbl_data_produksi` (
  `id_produksi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_produksi` varchar(25) NOT NULL,
  `jenis_produksi` varchar(25) NOT NULL,
  `jumlah_produksi` double NOT NULL,
  `tahun_produksi` year(4) NOT NULL,
  `jenis_ikan` varchar(35) NOT NULL,
  `sumber_perairan` varchar(25) NOT NULL,
  `kota` varchar(25) NOT NULL,
  `transportasi` varchar(35) NOT NULL,
  `jenis_tangkap` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`id_produksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_data_produksi`
--

INSERT INTO `tbl_data_produksi` (`id_produksi`, `nama_produksi`, `jenis_produksi`, `jumlah_produksi`, `tahun_produksi`, `jenis_ikan`, `sumber_perairan`, `kota`, `transportasi`, `jenis_tangkap`) VALUES
(2, 'produksi tuna', 'Termasuk produksi', 100, 2012, 'tuna', 'laut', 'Yogyakarta', 'kapal', 'jaring'),
(3, 'Produksi Udang', 'Termasuk produksi', 200, 2012, 'udang', 'Laut', 'sleman', 'kapal', 'Jaring'),
(4, 'Bawal Punya', 'Termasuk produksi', 150, 2012, 'Bawal', 'laut', 'Wonosari', 'kapal', 'jaring/jala'),
(6, 'Produksi Ikan Lele', 'Tidak termasuk produksi', 100, 2013, 'lele', 'umum', 'Wonosari', 'Tanpa kapal', 'Pancing'),
(7, 'Produksi Ikan Mujair', 'Termasuk produksi', 200, 2013, 'mujair', 'umum', 'Sleman', 'Tanpa kapal', 'Pancing'),
(8, 'tuna fresh', 'Termasuk produksi', 120, 2012, 'Tuna', 'laut', 'Sleman', 'kapal', 'jala'),
(11, 'Patin Suka', 'Termasuk produksi', 120, 2013, 'Patin', 'laut', 'Sleman', 'tanpa kapal', 'jala'),
(12, 'Pasar raya ikan ', 'Termasuk produksi', 100, 2013, 'tongkol', 'laut', 'Yogyakarta', 'kapan', 'jala'),
(13, 'weder', 'Termasuk produksi', 1, 2012, 'Tenggiri', 'umum', 'Parang tritis', 'tanpa kapal', 'pancing'),
(16, 'Nila', 'Termasuk produksi', 12, 2012, 'Bawal', 'laut', 'Sleman', 'kapal', 'pancing');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_satuanberat`
--

CREATE TABLE IF NOT EXISTS `tbl_data_satuanberat` (
  `id_satuan` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_satuan` varchar(35) NOT NULL,
  PRIMARY KEY (`id_satuan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_data_satuanberat`
--

INSERT INTO `tbl_data_satuanberat` (`id_satuan`, `jenis_satuan`) VALUES
(1, 'Ton'),
(2, 'unit'),
(3, 'buah'),
(4, 'kilo gram'),
(6, 'ons');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tangkap`
--

CREATE TABLE IF NOT EXISTS `tbl_tangkap` (
  `kode_tangkap` int(11) NOT NULL AUTO_INCREMENT,
  `alat_tangkap` varchar(25) NOT NULL,
  PRIMARY KEY (`kode_tangkap`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_tangkap`
--

INSERT INTO `tbl_tangkap` (`kode_tangkap`, `alat_tangkap`) VALUES
(1, 'Pancing'),
(2, 'bubu'),
(3, 'jala'),
(4, 'tambak tali'),
(8, 'jaring'),
(9, 'tombak'),
(10, 'iko'),
(11, 'koiu'),
(12, 'lolo'),
(13, 'pl'),
(14, 'pu');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_data_nelayan`
--
ALTER TABLE `tbl_data_nelayan`
  ADD CONSTRAINT `id_ikan` FOREIGN KEY (`id_ikan`) REFERENCES `tbl_data_ikan` (`id_ikan`),
  ADD CONSTRAINT `id_kabupaten` FOREIGN KEY (`id_kabupaten`) REFERENCES `tbl_data_daerah` (`id_daerah`),
  ADD CONSTRAINT `id_perairan` FOREIGN KEY (`id_perairan`) REFERENCES `tbl_data_perairan` (`id_perairan`),
  ADD CONSTRAINT `kode_kapal` FOREIGN KEY (`kode_kapal`) REFERENCES `tbl_data_kapal` (`kode_kapal`),
  ADD CONSTRAINT `kode_tangkap` FOREIGN KEY (`id_tangkap`) REFERENCES `tbl_tangkap` (`kode_tangkap`);

--
-- Constraints for table `tbl_data_olahan`
--
ALTER TABLE `tbl_data_olahan`
  ADD CONSTRAINT `id_nelayan` FOREIGN KEY (`nelayan`) REFERENCES `tbl_data_nelayan` (`id_nelayan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_produksi` FOREIGN KEY (`id_produksi`) REFERENCES `tbl_data_produksi` (`id_produksi`);

--
-- Constraints for table `tbl_data_peta`
--
ALTER TABLE `tbl_data_peta`
  ADD CONSTRAINT `id_daerah` FOREIGN KEY (`lokasi`) REFERENCES `tbl_data_daerah` (`id_daerah`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
