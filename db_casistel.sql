-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2021 at 02:50 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_casistel`
--

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `jml_pemesanan` int(10) NOT NULL,
  `jenis_makanan` varchar(20) NOT NULL,
  `jenis_minuman` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`nama`, `kelas`, `tgl_pemesanan`, `jml_pemesanan`, `jenis_makanan`, `jenis_minuman`) VALUES
('Ika Fathisna', 'XI RPL 6', '2021-11-14', 2, 'Ayam Geprek', 'Es Jeruk'),
('Nisrina Amalia ', 'XI RPL 6', '2021-11-15', 2, 'Soto', 'Air Mineral'),
('Balqies Lintang', 'XI RPL 6', '2021-11-17', 2, 'Mie Ayam', 'Es Teh'),
('Andika Neviantoro', 'XI RPL 6', '2021-11-18', 2, 'Bakso', 'Es Kopi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
