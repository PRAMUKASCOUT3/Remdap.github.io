-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 14, 2023 at 01:14 PM
-- Server version: 8.0.30
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_bidan`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int UNSIGNED NOT NULL DEFAULT '0',
  `data` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `imunisasi`
--

CREATE TABLE `imunisasi` (
  `id_imunisasi` int NOT NULL,
  `id_pasien` int DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `nama_bayi` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date NOT NULL,
  `nama_orang_tua` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_imunisasi` varchar(100) NOT NULL,
  `pengobatan` varchar(100) NOT NULL,
  `keterangan` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `imunisasi`
--

INSERT INTO `imunisasi` (`id_imunisasi`, `id_pasien`, `tanggal`, `nama_bayi`, `tanggal_lahir`, `nama_orang_tua`, `alamat`, `jenis_imunisasi`, `pengobatan`, `keterangan`) VALUES
(45, 37, '1979-07-13', NULL, '2022-08-03', 'Non laborum Aut eiu', 'Ut vel ex sunt quisq', 'Voluptatem similique', 'Adipisicing repellen', 90),
(46, 35, '2014-05-09', NULL, '1982-06-19', 'Irure ', 'Eos omnis in incidu', 'Est et eum aut saepe', 'Incididunt pariatur', 100),
(50, 36, '2017-12-23', NULL, '2001-01-24', 'Occaecat vel quia la', 'Eos duis quia nesciu', 'Alias in et corporis', 'Quis numquam mollit ', 33),
(51, 41, '1996-08-20', NULL, '1998-02-05', 'Dolore quibusdam dol', 'Voluptas velit sint', 'Vero ut ipsum consec', 'Alias est in quod ul', 83),
(52, 45, '2022-09-07', NULL, '1984-02-11', 'kankkkk', 'Eu deleniti minima a', 'Laboris distinctio ', 'Lorem sed perspiciat', 28),
(54, 58, '2023-01-17', NULL, '2023-10-09', 'Mahda', 'RT 45 EKA JAYA', 'DPT 2 POLIO 3', '-', 1),
(55, 59, '2023-01-17', NULL, '1997-03-12', 'ijal', 'Pasir Putih', 'Caten', '-', 29),
(56, 60, '2023-01-27', NULL, '1989-04-12', 'paija', 'Pasir Putih', 'Caten', '-', 18),
(57, 61, '2023-01-28', NULL, '2022-06-22', 'pahtiza', 'RT 42 Eka Jaya', 'DPT 3 POLIO 4', '-', 6),
(58, 62, '2023-01-31', NULL, '1997-03-05', 'SITI', 'rt 04 eka jaya', 'Caten', '-', 28),
(59, 63, '2023-02-19', NULL, '2022-09-20', 'Rita', 'rt 38 kasang pudak', 'DPT 2 POLIO 3', '-', 4),
(60, 64, '2023-03-04', NULL, '2023-01-09', 'FEBRINA', 'RT 57 Eka Jaya', 'DPT 1 POLIO 2', '-', 6),
(61, 65, '2023-03-06', NULL, '2023-10-27', 'SALEM', 'rt 04 eka jaya', 'DPT 2 POLIO 3', '-', 4),
(62, 66, '2023-03-08', NULL, '2023-01-09', 'RUMIATI', 'RT 57 Eka Jaya', 'DPT 2 POLIO 3', '-', 3),
(63, 67, '2023-03-09', NULL, '2022-11-06', 'Elisa', 'rt 03 eka jaya', 'DPT 2 POLIO 3', '-', 3),
(64, 68, '2023-04-07', NULL, '2023-10-22', 'SALEM', 'rt 03 tungkal', 'DPT 2 POLIO 3', '-', 1),
(65, 69, '2023-04-08', NULL, '2023-01-03', 'Rina', 'rt 01 tangkit', 'DPT 2 POLIO 3', '-', 3),
(66, 70, '2023-04-20', NULL, '2023-01-06', 'Fransiska ', 'rt 02 eka jaya', 'DPT 2 POLIO 3', '-', 3),
(67, 71, '2023-04-28', NULL, '2023-04-28', 'novita', 'rt 29 tb', 'DPT 1 POLIO 2', '-', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kb`
--

CREATE TABLE `kb` (
  `id_kb` int NOT NULL,
  `tanggal` date NOT NULL,
  `no_regis` varchar(50) NOT NULL,
  `nama_istri` varchar(100) NOT NULL,
  `nama_suami` varchar(100) NOT NULL,
  `umur_istri` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `TD` int NOT NULL,
  `BB` int NOT NULL,
  `metode` varchar(50) NOT NULL,
  `kunjungan_ulang` date NOT NULL,
  `NIK_NO_HP` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `kb`
--

INSERT INTO `kb` (`id_kb`, `tanggal`, `no_regis`, `nama_istri`, `nama_suami`, `umur_istri`, `alamat`, `TD`, `BB`, `metode`, `kunjungan_ulang`, `NIK_NO_HP`, `keterangan`) VALUES
(3, '2023-04-12', 'BARU', 'puput', 'suherman', '41', 'RT 11 eka jaya', 110, 45, 'SUNTIK', '2023-05-10', '15710245017500061', 'ANAK 2 (KI)'),
(5, '2023-04-12', 'BARU', 'Eti', 'Mulfarizon', '43', 'RT 43 Eka Jaya', 12070, 77, 'SUNTIK', '2023-05-10', '1571074508790121', 'anak 1 (ka)'),
(6, '2023-04-12', 'LAMA', 'Desmawati', 'Aldi', '29', 'RT 16 Candra', 9060, 46, 'SUNTIK', '2023-05-10', '2147483647', 'anak 2 (KA)'),
(7, '2023-04-12', 'LAMA', 'Ade ', 'solikin', '43', 'RT 57 Eka Jaya', 11070, 57, 'SUNTIK', '2023-05-10', '2147483647', 'anak 4 (KI)'),
(8, '2023-04-12', 'LAMA', 'Chanda', 'Donny', '30', 'RT 01 Eka Jaya', 11070, 60, 'SUNTIK', '2023-05-10', '2147483647', 'ANAK 2 (KI)'),
(9, '2023-04-12', 'LAMA', 'Dwi Nur Oktavia', 'Supono', '26', 'RT 48 Eka Jaya', 10080, 64, 'SUNTIK', '2023-05-10', '2147483647', 'anak 1 (ka)'),
(10, '2023-02-14', 'LAMA', 'Sri Wahyuni', 'Darpin', '39', 'RT 49 Bakung Jaya', 11070, 64, 'SUNTIK', '2023-05-10', '2147483647', 'anak 4 (KI)'),
(11, '2023-04-13', 'LAMA', 'lena', 'irwan', '34', 'RT 45 EKA JAYA', 110, 60, 'SUNTIK', '2023-05-11', '2147483647', 'anak 4 (ka)'),
(12, '2023-04-13', 'LAMA', 'herlina', 'rian', '30', 'rt 24 eka jaya', 110, 70, 'SUNTIK', '2023-05-11', '0', 'anak 2 (ki)'),
(13, '2023-04-13', 'LAMA', 'pipit', 'teguh', '39', 'rt 08 eka jaya', 100, 64, 'SUNTIK', '2023-05-11', '0', 'ANAK 2 (KI)'),
(14, '2023-04-13', 'LAMA', 'santi', 'riski', '29', 'rt 03 eka jaya', 110, 50, 'SUNTIK', '2023-05-11', '2147483647', 'anak 1 (ka)'),
(15, '2023-04-13', 'LAMA', 'tutik ', 'amri', '38', 'rt 12 talang bakung', 120, 69, 'SUNTIK', '2023-05-11', '2147483647', 'anak 3. ki'),
(16, '2023-04-13', 'LAMA', 'reka', 'setiabudi', '39', 'RT 35 Eka Jaya', 120, 60, 'SUNTIK', '2023-05-11', '0', 'anak 3. ki'),
(17, '2023-05-14', 'LAMA', 'maryati', '-', '43', 'RT 05 Eka Jaya', 120, 70, 'SUNTIK', '2023-05-12', '2147483647', 'A2.KA'),
(18, '2023-04-14', 'LAMA', 'SARI', 'SUGIONO', '37', 'RT 42 TALANG BAKUNG', 110, 53, '', '2023-05-12', '2147483647', 'A2.KI');

-- --------------------------------------------------------

--
-- Table structure for table `lahiran`
--

CREATE TABLE `lahiran` (
  `id_lahiran` int NOT NULL,
  `tanggal` date NOT NULL,
  `nama_istri` varchar(50) NOT NULL,
  `nama_suami` varchar(50) NOT NULL,
  `umur_istri` int NOT NULL,
  `umur_suami` int NOT NULL,
  `alamat` text NOT NULL,
  `No_telpon` text,
  `pekerjaan_istri` varchar(50) NOT NULL,
  `pekerjaan_suami` varchar(50) NOT NULL,
  `keluhan` text NOT NULL,
  `tindakan` text NOT NULL,
  `TD` varchar(50) NOT NULL,
  `S` varchar(50) NOT NULL,
  `BB` varchar(50) NOT NULL,
  `TFU` varchar(50) NOT NULL,
  `DJJ` varchar(50) NOT NULL,
  `PD` varchar(50) NOT NULL,
  `porsio1` enum('KERAS','LUNAK') NOT NULL,
  `porsio2` enum('TEBAL','TIPIS') NOT NULL,
  `ketuban` varchar(50) DEFAULT NULL,
  `penurunan_HOD` varchar(10) NOT NULL,
  `bayi_lahir` date NOT NULL,
  `pukul` time NOT NULL,
  `berat_badan` varchar(50) NOT NULL,
  `PB` varchar(50) NOT NULL,
  `JK` varchar(50) NOT NULL,
  `anus` enum('+','-') NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `lahiran`
--

INSERT INTO `lahiran` (`id_lahiran`, `tanggal`, `nama_istri`, `nama_suami`, `umur_istri`, `umur_suami`, `alamat`, `No_telpon`, `pekerjaan_istri`, `pekerjaan_suami`, `keluhan`, `tindakan`, `TD`, `S`, `BB`, `TFU`, `DJJ`, `PD`, `porsio1`, `porsio2`, `ketuban`, `penurunan_HOD`, `bayi_lahir`, `pukul`, `berat_badan`, `PB`, `JK`, `anus`, `keterangan`) VALUES
(28, '2023-01-09', 'Rumiati', 'Sohidin', 26, 26, 'RT 57 Eka Jaya', '085215431968', 'irt', 'wiraswasta', 'keluar lendir bercampur darah dari jalan lahir', '', '110/70 MmHg', '35,4\'C', '68 Kg', '30 cm', '132x/i', '2', 'LUNAK', 'TIPIS', '+', 'hogde 1', '2023-01-09', '11:30:00', '4000 gram', '53 ', 'PEREMPUAN', '+', 'Pasien telah pulang'),
(29, '2023-01-10', 'syuriani', 'Rinto Januar', 28, 28, 'Rt 14 Posos II', '082237512785', 'irt', 'Swasta', 'keluar lendir bercampur darah dari jalan lahir', '', '120/80 MmHg', '35,3\'C', '68 Kg', '29 cm', '133x/i', '2', 'LUNAK', 'TIPIS', '+', 'hogde 1', '2023-01-10', '09:10:00', '3000 gram', '49', 'PEREMPUAN', '+', 'Pasien telah pulang'),
(30, '2023-01-10', 'Selly', 'Roby', 29, 29, 'Rt.01 Payo Selincah', '082297587081', 'irt', 'Swasta', 'keluar lendir bercampur darah dari jalan lahir', '', '120/80 MmHg', '36,4\'C', '56 Kg', '30 cm', '148x/i', '8', 'LUNAK', 'TIPIS', '-', 'hodge III', '2023-01-11', '02:36:00', '3500 gram', '49', 'LAKI-LAKI', '+', 'Terpasang infus dan pasien telah pulang'),
(31, '2023-01-15', 'dewi', 'tri', 38, 38, 'Rt. 10 Eka Jaya', '0895329368977', 'Wirasawasta', 'Honor', 'keluar lendir bercampur darah dari jalan lahir', '', '110/70 MmHg', '35,3\'C', '62 Kg', '29 cm', '143x/i', '7', 'LUNAK', 'TIPIS', '-', 'hodge II +', '2023-01-15', '21:40:00', '3000 gram', '40 ', 'LAKI-LAKI', '+', 'Terpasang infus dan pasien telah pulang'),
(32, '2023-01-15', 'Syafrida', 'Dika', 36, 36, 'RT 43 Eka Jaya', '085289366869', 'Pedagang', 'Pedagang', 'keluar lendir bercampur darah dari jalan lahir', '', '120/80 MmHg', '36,4\'C', '52 Kg', '30 cm', '140x/mnt (ki)', '7', 'LUNAK', 'TIPIS', '+', 'hodge II +', '2023-01-16', '00:00:00', '4000 gram', '46', 'LAKI-LAKI', '+', 'Terpasang infus dan pasien telah pulang'),
(33, '2023-01-16', 'Tita Nunil', 'Ruslan Abdul', 27, 27, 'RT 42 Eka Jaya', '081221588088', 'irt', 'Pedagang', 'keluar lendir bercampur darah dari jalan lahir', '', '100/60 MmHg', '36\'C', '58 Kg', '27 Cm', '140x/mnt', '7', 'LUNAK', 'TIPIS', '-', 'hodge II +', '2023-01-16', '22:00:00', '3500 gram', '49', 'LAKI-LAKI', '+', 'Terpasang infus dan pasien telah pulang'),
(34, '2023-01-18', 'Rika Asmaini', 'Sudirman', 43, 43, 'Rt 04 Kerinci', '085368961699', 'irt', 'Swasta', 'keluar lendir bercampur darah dari jalan lahir', '', '120/80 MmHg', '35,3\'C', '79 Kg', '29 cm', '137x/i ', '6', 'LUNAK', 'TIPIS', '+', 'hodge II +', '2023-01-19', '00:45:00', '4000 gram', '49', 'PEREMPUAN', '+', 'Terpasang infus dan pasien telah pulang'),
(35, '2023-01-20', 'wahyu', 'supriyadi', 30, 30, 'RT 35 Eka Jaya', '085325235202', 'irt', 'Swasta', 'keluar lendir bercampur darah dari jalan lahir', '', '110/70 MmHg', '36,4\'C', '52 Kg', '27 Cm', '140x/mnt', '5', 'LUNAK', 'TIPIS', '+', 'Hodge II', '2023-01-20', '23:05:00', '3600 Gram', '49', 'LAKI-LAKI', '+', 'Pasien telah pulang'),
(36, '2023-01-27', 'Indira', 'Syah', 38, 38, 'RT 13 Pasir Putih', '082266661585', 'irt', 'Guru', 'keluar lendir bercampur darah dari jalan lahir', '', '110/70 MmHg', '36\'C', '56 Kg', '29 cm', '132x/i', '2', 'LUNAK', 'TEBAL', '+', 'hogde 1', '2023-01-27', '20:13:00', '3500 gram', '53 ', 'LAKI-LAKI', '+', 'Pasien telah pulang'),
(37, '2023-01-28', 'Dewi', 'Slamet', 44, 44, 'RT 10 Pakuan Baru', '081367961768', 'irt', 'Buruh', 'keluar lendir bercampur darah dari jalan lahir', '', '120/70 MmHg', '36\'C', '55 Kg', '27 Cm', '140x/mnt (ki)', '7', 'LUNAK', 'TIPIS', '+', 'hodge III', '2023-01-28', '18:45:00', '3500 gram', '49', 'PEREMPUAN', '+', 'Terpasang infus dan pasien telah pulang'),
(38, '2023-02-01', 'Nurlela', 'Siswandi', 31, 31, 'RT 52 Eka Jaya', '082346373131', 'irt', 'wiraswasta', 'keluar lendir bercampur darah dari jalan lahir', '', '110/70 MmHg', '36\'C', '57 Kg', '25 cm', '140x/mnt', '5', 'KERAS', 'TIPIS', '+', 'hodge II +', '2023-02-01', '07:10:00', '3000 gram', '50', 'LAKI-LAKI', '+', 'Terpasang infus dan pasien telah pulang'),
(39, '2023-02-08', 'Nini Oktavia', 'Dedi Prasetya', 44, 44, 'RT 09 Eka Jaya', '081366868558', 'irt', 'Pedagang', 'keluar lendir bercampur darah dari jalan lahir', '', '110/80 MmHg', '35,3\'C', '76 Kg', '31 Cm', '136x/menit', '3', 'LUNAK', 'TIPIS', '+', 'Hodge II', '2023-02-08', '09:25:00', '3100 gram', '53 ', 'PEREMPUAN', '+', 'Terpasang infus dan pasien telah pulang'),
(40, '2023-02-19', 'Evi Rahma', 'Wira', 26, 26, 'RT 01 Eka Jaya', '082318217393', 'irt', 'Pedagang', 'keluar lendir bercampur darah dari jalan lahir', '', '120/80 MmHg', '36\'C', '75 Kg', '26 cm', '148x/i', '6', 'LUNAK', 'TIPIS', '+', 'hodge III', '2023-02-19', '16:25:00', '3500 gram', '51', 'LAKI-LAKI', '+', 'Terpasang infus dan pasien telah pulang'),
(41, '2023-02-19', 'Gusti', 'Mondrianto', 36, 36, 'RT 42 Eka Jaya', '082387123500', 'irt', 'Buruh', 'keluar lendir bercampur darah dari jalan lahir', '', '100/60 MmHg', '36,4\'C', '64 Kg', '29 cm', '144x/menit', '7', 'LUNAK', 'TIPIS', '+', 'hodge III', '2023-02-19', '11:45:00', '64 Kg', '48 ', 'LAKI-LAKI', '+', 'Terpasang infus dan pasien telah pulang'),
(42, '2023-03-09', 'Mariani', 'Supriadi', 35, 35, 'RT 30 Posos II', '085366726646', 'IRT', 'supir', 'keluar lendir bercampur darah dari jalan lahir', '', '100/70 MmHg', '36\'C', '59 Kg', '29 cm', '139x/menit', '4', 'LUNAK', 'TIPIS', '+', 'Hodge II', '2023-03-09', '23:35:00', '3800 gram', '50', 'PEREMPUAN', '+', 'Pasien telah pulang'),
(43, '2023-03-10', 'Murni Mahira', 'Togar Mulia Jaya Harahap', 43, 43, 'RT 35 Lingkar Timur', '081368339446', 'IRT', 'Buruh', 'keluar lendir bercampur darah dari jalan lahir', '', '120/80 MmHg', '36\'C', '56 Kg', '27 Cm', '134x/menit', '3', 'LUNAK', 'TEBAL', '+', 'Hodge I +', '2023-03-10', '12:30:00', '3800 gram', '49', 'PEREMPUAN', '+', 'Terpasang infus dan pasien telah pulang'),
(44, '2023-04-04', 'Sri Wahyuni', 'Doddy', 38, 38, 'RT 33 Talang Bakung', '083171128826', 'IRT', 'Swasta', 'keluar lendir bercampur darah dari jalan lahir', '', '110/70 MmHg', '36\'C', '90 kg', '28 cm', '153x/menit', '10', 'LUNAK', 'TIPIS', '-', 'hhodge IV', '2023-04-04', '23:50:00', '3400 GRAM', '48 ', 'PEREMPUAN', '+', 'Terpasang infus dan pasien telah pulang'),
(45, '2023-04-30', 'Ika', 'Ramadan', 34, 34, 'RT 55 Eka Jaya', '082289966278', 'PNS', 'Honor', 'keluar lendir bercampur darah dari jalan lahir', '', '110/70 MmHg', '35,3\'C', '58 Kg', '32 cm', '143x/menit', '7', 'LUNAK', 'TIPIS', '+', 'hodge III', '2023-04-30', '17:23:00', '3600 Gram', '48 ', 'LAKI-LAKI', '+', 'Terpasang infus dan pasien telah pulang'),
(46, '2023-05-02', 'Rosanna Ria', 'Sinaga', 25, 25, 'RT 05 Eka Jaya', '085817066711', 'IRT', 'wiraswasta', 'keluar lendir bercampur darah dari jalan lahir', '', '110/70 MmHg', '36\'C', '67 Kg', '27 Cm', '140x/menit', '5', 'LUNAK', 'TIPIS', '+', 'hodge II +', '2023-05-02', '07:25:00', '3500 gram', '49', 'PEREMPUAN', '+', 'Pasien telah pulang');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `jenis_obat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `jenis_obat`) VALUES
(2, 'amoxicilin', 'antibiotik'),
(3, 'dexametason', 'anti radang'),
(4, 'paracetamol', 'analgesik'),
(5, 'alpara tab', 'batuk, pilek, demam'),
(6, 'metronidazole tab', 'antibiotik  mencret'),
(7, 'cholorampenicol tab', 'meriang'),
(8, 'amlodipine', 'darah tinggi'),
(9, 'simvastatin', 'kolestrol'),
(10, 'piroxicam', 'asam urat'),
(11, 'glibenclamide', 'gula tinggi'),
(12, 'soldextam', 'radang + alergi'),
(13, 'methylprednisone', 'antiradang tensi tinggi'),
(14, 'prednisone', 'antiradang tensi tinggi'),
(15, 'omeprazole', 'antibiotik lambung'),
(16, 'ranitidine', 'lambung'),
(17, 'hufamag plus', 'obat kunyah magh'),
(18, 'ciprolacaxin tab', 'antibiotik selaput'),
(19, 'norvom tab', 'muntah'),
(20, 'etabion tab', 'vit penambah darah'),
(21, 'licokalk', 'kalsium ibu hamil'),
(23, 'flutop C syr', 'batuk, pilek, demam'),
(24, 'flutop C syr', 'batuk, pilek, demam'),
(25, 'zink tablet', 'mencret'),
(26, 'inj. omeprazole', 'suntik'),
(27, 'zenirex syr', 'batuk, pilek, demam'),
(28, 'cefadroxil syr', 'antibiotik batuk'),
(29, 'Hufabetamin Syrup', 'anti radang'),
(30, 'paraflu tab', 'analgesic campuran'),
(31, 'neurobion Inj.', 'vitamin'),
(32, 'ambroxol syr', 'syr');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int NOT NULL,
  `nama_pasien` varchar(50) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `umur` varchar(10) DEFAULT NULL,
  `alamat` text NOT NULL,
  `NIK` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `jenis_kelamin`, `umur`, `alamat`, `NIK`) VALUES
(46, 'fatir', 'L', '13', 'rt 03 eka jaya', '-'),
(47, 'Aisyah', 'P', '3', 'RT 09 Eka Jaya', ''),
(48, 'Syakira', 'P', '2', 'RT 35 Eka Jaya', ''),
(49, 'Ikhsan ', 'L', '82', 'RT 30 Eka Jaya', ''),
(50, 'Aluna', 'P', '0', 'RT 05 Eka Jaya', ''),
(51, 'Rubina', 'P', '0', 'RT 16 Eka Jaya', ''),
(52, 'Nur Hasna', 'P', '82', 'RT 08 Eka Jaya', ''),
(53, 'Alsha Izora', 'P', '5', 'RT 09 Eka Jaya', ''),
(54, 'khaira', 'P', '5', 'rt 04 eka jaya', '-'),
(55, 'Habibi', 'L', '2', 'rt 04 eka jaya', '-'),
(56, 'Kartini', 'P', '75', 'RT 49 Bakung Jaya', '-'),
(57, 'novi', 'P', '39', 'Rt 63 Eka Jaya', '-'),
(58, 'M. Zaki', 'L', '0', 'RT 45 EKA JAYA', '-'),
(59, 'Kamesing', 'P', '26', 'rt 04 eka jaya', '-'),
(60, 'Tina', 'P', '20', 'Pasir Putih', '-'),
(61, 'Rifka Asyifa', 'P', '0', 'RT 42 Eka Jaya', '-'),
(62, 'Ayu Tri Lestari', 'P', '33', 'rt 04 eka jaya', '-'),
(63, 'Muhammad Ridho', 'L', '0', 'rt 38 kasang pudak', '-'),
(64, 'Nadira', 'P', '0', 'rt 01 tangkit', '-'),
(65, 'devano', 'L', '0', 'rt 04 eka jaya', '-'),
(66, 'Arini nayara razeta', 'P', '0', 'RT 57 Eka Jaya', '-'),
(67, 'Dafasyah', 'P', '0', 'rt 03 eka jaya', '-'),
(68, 'Damian Elvano  Silitonga', 'L', '0', 'rt 03 tungkal', '1506012210220001'),
(69, 'Nadira Shezan ', 'P', '0', 'rt 01 tangkit', '1505084302230001'),
(70, 'Joana Naumi Putri Lubis', 'P', '0', 'rt 02 eka jaya', '-'),
(71, 'Anindya Putri', 'P', '0', 'rt 29 tb', '-'),
(72, 'maya rama soraya', 'P', '26', 'RT 01 Eka Jaya', ''),
(73, 'Nafiah', 'P', '3', 'Kasang', ''),
(74, 'Lala', 'P', '4', 'RT 27 Eka Jaya', ''),
(75, 'Lala', 'P', '4', 'RT 27 Eka Jaya', ''),
(76, 'Nofia', 'P', '34', 'RT 27 Eka Jaya', ''),
(77, 'Anwar', 'L', '7', 'RT 29 Eka Jaya', ''),
(78, 'Zia', 'P', '10', 'RT 58 Eka Jaya', ''),
(79, 'Alifa', 'P', '4', 'RT 29 Eka Jaya', ''),
(80, 'Mila ', 'P', '23', 'RT 30 Bakung Jaya', ''),
(81, 'khalid', 'L', '8', 'RT 09 Eka Jaya', ''),
(82, 'syafii', 'L', '30', 'RT 39 Eka Jaya', ''),
(83, 'siti', 'P', '44', 'RT 32 Eka Jaya', ''),
(84, 'atan ', 'L', '0', 'RT 14 Eka Jaya', ''),
(85, 'Marpaung', 'P', '55', 'RT 03 Eka Jaya', ''),
(86, 'Moraldo', 'L', '46', 'RT 21 Eka Jaya', ''),
(87, 'M. Syatir', 'L', '0', 'RT 04 Bakung Jaya', ''),
(88, 'adelia', 'P', '4', 'RT 04 Bakung Jaya', ''),
(89, 'derma', 'P', '48', 'RT 04 Eka Jaya', ''),
(90, 'zapy', 'L', '5', 'RT 43 Eka Jaya', ''),
(91, 'sopyan', 'L', '73', 'RT 30 Eka Jaya', ''),
(92, 'Indo Asse\'', 'P', '43', 'RT 01 Eka Jaya', ''),
(93, 'Rayanza', 'L', '0', 'RT 49 Eka Jaya', ''),
(94, 'Azka', 'L', '1', 'RT 01 Eka Jaya', ''),
(95, 'Abil', 'L', '4', 'Talang Bakung', ''),
(96, 'Pernawati', 'P', '45', 'RT 15 EJ', '-'),
(97, 'Mama Dina ', 'P', '67', 'rt 01 ej', '-'),
(98, 'Mbah kandi', 'L', '64', 'rt 42 ej', '-'),
(99, 'Meka ', 'P', '1', 'RT 32 Eka Jaya', ''),
(100, 'Ahlan', 'L', '1', 'RT 05 Eka Jaya', ''),
(101, 'Alifia', 'P', '4', 'RT 05 Eka Jaya', ''),
(102, 'muamar', 'L', '1', 'RT 45 Eka Jaya', ''),
(103, 'Fatih', 'L', '8', 'RT 27 Eka Jaya', ''),
(104, 'Erna', 'P', '70', 'RT 03 Eka Jaya', ''),
(105, 'Khanza', 'P', '4', 'RT 24 Eka Jaya', ''),
(106, 'Arya', 'L', '16', 'RT 44 Eka Jaya', ''),
(107, 'adiba', 'P', '10', 'RT 13 Marene', ''),
(108, 'Alya', 'P', '6', 'liposos 2', ''),
(109, 'yanti', 'P', '41', 'Liposos 2', ''),
(110, 'Nabila', 'P', '18', 'Perum Tj. Permata Eka Jaya', ''),
(111, 'Anugrah', 'P', '19', 'Liposos 2', ''),
(112, 'Yasmin', 'P', '0', 'Eka Jaya', ''),
(113, 'Vania', 'P', '1', 'RT 21 Bakung Jaya', ''),
(114, 'Baffa', 'P', '16', 'eka jaya', '');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `umur` int NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `no_telpon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `tempat_lahir`, `tanggal_lahir`, `umur`, `jenis_kelamin`, `alamat`, `no_telpon`) VALUES
(26, 'Fitri Hidayah, S.Tr.Keb', 'Jambi', '1998-01-31', 25, 'perempuan', 'Korem Telanai', '081278637891'),
(27, 'Hermita Rasti Sari, Amd.Keb', 'Jambi', '2000-10-25', 22, 'perempuan', 'Jerambah Bolong', '085268452571'),
(28, 'Annisa Puspa Handayani, A.Md. Keb', 'Jambi', '2000-01-18', 23, 'perempuan', 'Komplek Uka', '089628500215'),
(29, 'Wulan Ayu Guswandira Bs. Str.Keb', 'Jambi', '1997-08-10', 25, 'perempuan', 'Jl. Sersan Daarpin RT 22 Bakung Jaya', '082362856486'),
(30, 'Dian Rahayu, A.Md. Keb', 'Jambi', '2001-05-09', 22, 'perempuan', 'Eka Jaya', '088287671013');

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `id_pemeriksaan` int NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `id_pasien` varchar(50) NOT NULL,
  `keluhan` text NOT NULL,
  `diagnosa` text NOT NULL,
  `id_obat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`id_pemeriksaan`, `tanggal_lahir`, `id_pasien`, `keluhan`, `diagnosa`, `id_obat`) VALUES
(16, '2020-01-01', 'Aisyah', 'Gatal-Gatal, Merah', 'kuman', 'amoxicilin'),
(17, '2023-02-01', 'Syakira', 'Tindik', 'Tindik', ''),
(18, '1953-01-01', 'Ikhsan ', 'Gatal-Gatal, Merah', 'Biduran', 'dexametason'),
(19, '2022-11-01', 'Aluna', 'demam', 'os febris', 'paracetamol'),
(20, '2022-10-01', 'Rubina', 'Bersin, Batuk, Pilek', 'Flu', 'amoxicilin'),
(21, '1941-01-01', 'Nur Hasna', 'lemas', 'anemia', 'etabion tab'),
(22, '2017-06-06', 'Alsha Izora', 'Sakit Tenggorokan,batuk,pilek', 'Faringitis (Radang Tenggorokan)', 'amoxicilin'),
(23, '2013-05-30', '54', 'demam,pusing', 'demam', '7'),
(24, '2021-02-14', 'Habibi', 'Bersin, Batuk, Sariawan', 'kuman', 'flutop C syr'),
(25, '1948-02-12', 'Kartini', 'mencret', 'kuman', 'metronidazole tab'),
(26, '1984-03-30', 'novi', 'mual, pusing, muntah', 'kuman', 'alpara tab'),
(27, '2022-12-01', '', 'syafa adinda humairah', 'demam,batuk,pilek', ''),
(28, '2018-01-01', 'khaira', 'demam, pusing', 'demam', 'cefadroxil syr'),
(29, '1933-01-01', '', 'lemas, demam, pusing', 'demam', ''),
(30, '1997-01-01', 'maya rama soraya', 'demam batuk pilek', 'flu, obs febris', 'methylprednisone'),
(31, '2020-02-01', 'Nafiah', 'gatal-gatal', 'gatal-gatal', 'Hufabetamin Syrup'),
(32, '2019-01-01', 'Lala', 'demam batuk pilek', 'obs febris flu', 'flutop C syr'),
(33, '1989-01-01', 'Nofia', 'meriang, batuk, pilek, lemas', 'Flu', 'alpara tab'),
(34, '2018-01-01', 'Anwar', 'demam, batuk, pilek', 'flu', 'zenirex syr'),
(35, '2013-01-01', 'Zia', 'demam, batuk, pusing', 'obs febris', 'zenirex syr'),
(36, '2018-01-01', 'Alifa', 'bentol merah, gatal', 'kaligato (utikaria)', 'Hufabetamin Syrup'),
(37, '2000-01-01', 'Mila ', 'pusing, meriang, batuk berdahak', 'flu', 'ciprolacaxin tab'),
(38, '2015-01-01', 'khalid', 'bentol berair di seluruh tubuh, demam', 'varicella', 'Hufabetamin Syrup'),
(39, '1993-01-01', 'syafii', 'gatal-gatal', 'alergi', 'dexametason'),
(40, '2019-12-01', 'atan ', 'demam', '0bs febris', 'flutop C syr'),
(41, '1987-05-12', 'Marpaung', 'menggigil, batuk, pilek, radang, demam', 'flu', 'cholorampenicol tab'),
(42, '1976-06-15', 'Moraldo', 'demam, menggigil, pilek', 'meruang', 'cholorampenicol tab'),
(43, '2022-11-12', 'M. Syatir', 'demam batuk pilek', 'flu', 'ambroxol syr'),
(44, '2022-11-12', 'M. Syatir', 'demam batuk pilek', 'flu', 'ambroxol syr'),
(45, '2019-02-01', 'adelia', 'demam batuk pilek', 'flu', 'zenirex syr'),
(46, '1975-09-08', 'derma', 'demam batuk pilek', 'batuk', 'alpara tab'),
(47, '2018-04-23', 'zapy', 'demam batuk', 'demam', 'paracetamol'),
(48, '1965-10-07', 'sopyan', 'bahu sakit', 'pegal linu', 'simvastatin'),
(49, '1979-03-22', 'Indo Asse\'', 'pegal', 'linu', 'ciprolacaxin tab'),
(50, '2022-12-12', 'Rayanza', 'demam batuk pilek', 'flu', 'amoxicilin'),
(51, '2022-01-12', 'Azka', 'gatal, demam', 'gatal', 'Hufabetamin Syrup'),
(52, '2018-03-21', 'Abil', 'demam batuk pilek', 'flu', 'flutop C syr'),
(53, '1976-06-21', 'Pernawati', 'cek kkolestrol, asam urat (normal), batuk', 'batuk', 'alpara tab'),
(54, '1969-03-12', 'Mama Dina ', 'mual muntah', 'magh', 'inj. omeprazole'),
(55, '1958-03-12', 'Mbah kandi', 'gatal gatal', 'gatal', 'dexametason'),
(56, '2022-02-01', 'Meka ', 'Gatal-gatal', 'pruritus', 'Hufabetamin Syrup'),
(57, '2022-01-01', 'Ahlan', 'gatal-gatal', 'pruritus', 'Hufabetamin Syrup'),
(58, '2019-01-01', 'Alifia', 'gatal-gatal', 'pruritus', 'Hufabetamin Syrup'),
(59, '2022-01-01', 'muamar', 'gatal-gatal', 'pruritus', 'Hufabetamin Syrup'),
(60, '2015-01-01', 'Fatih', 'sakit perut', 'masuk angin', 'norvom tab'),
(61, '1953-01-01', 'Erna', 'nyeri ulu hati, pusing, batuk berdahak, pilek, bersin-bersin', 'flu, gerd', 'paraflu tab'),
(62, '2019-01-01', 'Khanza', 'batuk, pilek, demam', 'flu', 'zenirex syr'),
(63, '2007-01-01', 'Arya', 'post jatuh dari motor', 'kula jatuh ', 'paracetamol');

-- --------------------------------------------------------

--
-- Table structure for table `periksa_kehamilan`
--

CREATE TABLE `periksa_kehamilan` (
  `id_periksa` int NOT NULL,
  `Tanggal` date NOT NULL,
  `nama_istri` varchar(50) NOT NULL,
  `nama_suami` varchar(50) NOT NULL,
  `umur_istri` int NOT NULL,
  `umur_suami` int NOT NULL,
  `alamat` text NOT NULL,
  `no_telpon` text NOT NULL,
  `Gravida` int NOT NULL,
  `Partus` int NOT NULL,
  `Abortus` int NOT NULL,
  `HPHT` date NOT NULL,
  `TP` date NOT NULL,
  `pemeriksaan` text NOT NULL,
  `keluhan` text NOT NULL,
  `terapi` text NOT NULL,
  `LILA` text NOT NULL,
  `BB` text NOT NULL,
  `TD` text NOT NULL,
  `HAMIL` text NOT NULL,
  `TFU` text NOT NULL,
  `LETAK_JANIN` text NOT NULL,
  `DJJ` text NOT NULL,
  `LAB/HB` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `periksa_kehamilan`
--

INSERT INTO `periksa_kehamilan` (`id_periksa`, `Tanggal`, `nama_istri`, `nama_suami`, `umur_istri`, `umur_suami`, `alamat`, `no_telpon`, `Gravida`, `Partus`, `Abortus`, `HPHT`, `TP`, `pemeriksaan`, `keluhan`, `terapi`, `LILA`, `BB`, `TD`, `HAMIL`, `TFU`, `LETAK_JANIN`, `DJJ`, `LAB/HB`, `keterangan`) VALUES
(17, '2023-04-12', 'Nur Azizah', 'Abdurrahman', 34, 34, 'RT 60 Eka Jaya', '083845140814', 2, 1, 0, '2023-02-12', '2023-11-20', '', 'pusing, mual', 'asam folat, B6. B1, Amlodipine', '28', '65', '160/100', '8-9 minggu', 'ballotemen +', 'belum teraba', '-', '-', 'G2P1A0 dengan emesis gravidarum'),
(18, '2023-04-12', 'leni apriyanti', 'beny wika', 32, 32, 'RT 19 Tangkit', '081367047864', 1, 0, 0, '2022-11-05', '2023-08-12', '', 'kesemutan', 'dexamethasone, Etabion, B1', '32', '71', '120/80', '22-23', 'sepusat', 'kep', '140x/mnt (ki)', '13.9', 'Ny. L 27th G1P0A0 hamil 22-23 mgg '),
(19, '2023-04-12', 'Riska Meyliana', 'Syahri Ramadhan', 23, 23, 'Kasang Kumpeh RT 10 Kumpeh Ulu', '08982000038', 1, 0, 0, '2022-12-03', '2023-09-10', '', '-', 'asam folat, calcium', '27', '45', '120/70', '18-19 mgg', '2 jari dibawah pusat', 'kep', '147x/i', '-', 'Ny. L 27th G1P0A0 hamil 18-19 mgg '),
(20, '2023-04-13', 'WIDYA', 'FERDIAN', 27, 27, 'RT 30 Eka Jaya', '089562203808', 2, 1, 0, '2023-02-05', '2023-11-15', '', 'ASAM LAMBUNG, MUAL', 'VIT B1, PCT', '27', '57', '110/80', '9-10 MG', '2 JARI DIATAS PUSAT', '-', '-', '-', '-'),
(21, '2023-04-13', 'LONA PUTRI', 'ABU BAKAR ASIDIQ', 25, 25, 'RT O9 MAYANG', '082280494972', 2, 0, 1, '2022-07-14', '2023-04-20', '', 'SAKIT PERUT MENJALAR KE PINGGANG', '-', '26', '58', '90/70', '38-39', '32', 'KEP', '140X/i', 'HB:14,4', 'BUKA 1CM');

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `id_rekam_medis` int NOT NULL,
  `tanggal` date NOT NULL,
  `id_pasien` int NOT NULL,
  `id_pegawai` int NOT NULL,
  `id_pemeriksaan` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`id_rekam_medis`, `tanggal`, `id_pasien`, `id_pegawai`, `id_pemeriksaan`) VALUES
(1, '2000-05-14', 0, 0, 0),
(2, '1994-08-07', 0, 0, 0),
(3, '2002-11-18', 40, 25, 1),
(4, '2002-11-18', 40, 25, 1),
(5, '2000-11-08', 38, 26, 1),
(6, '2014-08-09', 38, 26, 1),
(7, '2020-07-13', 44, 26, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `hak_akses` enum('asisten','pemilik') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama_lengkap`, `hak_akses`) VALUES
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'bidan metha', 'pemilik'),
(11, 'admin2', 'admin2', 'admin2', 'asisten'),
(12, 'bidanmetha', '31b9ee9cd5dfaf7acf1cf28807a21d4c', 'Bidan Metha Eli Yanti', 'pemilik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imunisasi`
--
ALTER TABLE `imunisasi`
  ADD PRIMARY KEY (`id_imunisasi`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indexes for table `kb`
--
ALTER TABLE `kb`
  ADD PRIMARY KEY (`id_kb`);

--
-- Indexes for table `lahiran`
--
ALTER TABLE `lahiran`
  ADD PRIMARY KEY (`id_lahiran`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`id_pemeriksaan`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indexes for table `periksa_kehamilan`
--
ALTER TABLE `periksa_kehamilan`
  ADD PRIMARY KEY (`id_periksa`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`id_rekam_medis`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_pemeriksaan` (`id_pemeriksaan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imunisasi`
--
ALTER TABLE `imunisasi`
  MODIFY `id_imunisasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `kb`
--
ALTER TABLE `kb`
  MODIFY `id_kb` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `lahiran`
--
ALTER TABLE `lahiran`
  MODIFY `id_lahiran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  MODIFY `id_pemeriksaan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `periksa_kehamilan`
--
ALTER TABLE `periksa_kehamilan`
  MODIFY `id_periksa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  MODIFY `id_rekam_medis` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
