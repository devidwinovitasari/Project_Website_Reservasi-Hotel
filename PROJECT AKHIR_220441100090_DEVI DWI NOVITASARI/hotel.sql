-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2023 at 11:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bayar`
--

CREATE TABLE `bayar` (
  `nama` varchar(50) NOT NULL,
  `no_rek` varchar(50) NOT NULL,
  `metode_pembayaran` varchar(50) NOT NULL,
  `no_rek_tujuan` varchar(50) NOT NULL,
  `nominal` varchar(50) NOT NULL,
  `id_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bayar`
--

INSERT INTO `bayar` (`nama`, `no_rek`, `metode_pembayaran`, `no_rek_tujuan`, `nominal`, `id_bayar`) VALUES
('Arum Rahmadhani', '17890276627', 'BCA', '6860790054', '950000', 7),
('DEVI DWI NOVITASARI', '662', 'BNI', '21', '212', 8),
('Tri Ayuningtyas', '66699', 'BNI', '666', '333', 9),
('Tri Ayuningtyas', '212212', 'BCA', '22221', '0291218', 10),
('Shafira Adelia', '02999281', 'MANDIRI', '281882881', '57000000', 11),
('DEVI DWI NOVITASARI', '7883288238', 'MANDIRI', '7328238288', '57000000', 12),
('Rozikhin', '44444', 'BTN', '78978', '30000', 13),
('Devi Dwi Novitasari', '220441100090', 'MANDIRI', '0700000899992', '1140000', 14),
('Devi Dwi Novitasari', '220399299392', 'BCA', '6860790054', '1190000', 15),
('Devi Dwi Novitasari', '5555', 'BCA', '4444', '1111', 16);

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `id_daftar` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `umur` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id_daftar`, `nama`, `nik`, `umur`, `jenis_kelamin`, `no_hp`, `email`, `alamat`) VALUES
(18, 'Arum Rahmadhani', '220441100074', '18', 'perempuan', '089627729087', 'devidwi1809@gmail.com', 'Pasuruan'),
(19, 'Arum Rahmadhani', '2121221', '18', 'perempuan', '0389299392', 'devidwi1809@gmail.com', 'Pasuruan'),
(20, 'DEVI DWI NOVITASARI', '2888283', '18', 'perempuan', '0892172727', 'devidwi1809@gmail.com', 'lamongan'),
(21, 'Shafira Adelia', '2204411090', '20', 'perempuan', '0182992992', 'devidwi1809@gmail.com', 'Sidoarjo'),
(22, 'DEVI DWI NOVITASARI', '220441100090', '18', 'perempuan', '089529775235', 'devidwi1809@gmail.com', 'LAMONGAN'),
(23, 'Devi Pebiyanti', '220441100145', '19', 'perempuan', '089529775235', 'devidwi1809@gmail.com', 'Lamongan'),
(24, 'Tri Ayuningtyas', '28993892', '18', 'perempuan', '9283923891', 'alim@gm.com', 'Mojokerto'),
(25, 'Rozikhin', '220441100003', '18', 'lakilaki', '089529775235', 'Rozikhin@gmail.com', 'Pamekasan'),
(26, 'Devi Dwi Novitasari', '220441100090', '18', 'perempuan', '089529775235', 'devidwi1809@gmail.com', 'Lamongan'),
(27, 'Devi Dwi Novitasari', '220441100090', '18', 'perempuan', '089529775235', 'devidwi1809@gmail.com', 'Surabaya'),
(28, 'DEVI DWI NOVITASARI', '44', '777', 'perempuan', '88', 'devidwi1809@gmail.com', 'ggg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `email`) VALUES
(1, 'sbabs', 'devidwi1809@gmail.com'),
(2, 'sbabs', 'devidwi1809@gmail.com'),
(3, 'sbbsbb', 'alim@gm.com'),
(4, 'hhhh', 'devidwi1809@gmail.com'),
(5, 'Devi', 'devidwi1809@gmail.com'),
(6, 'Rozikhin', 'Rozikhin@gmail.com'),
(7, 'Rozikhin', 'Rozikhin@gmail.com'),
(8, 'Devi Dwi Novitasari', 'devidwi1809@gmail.com'),
(9, 'Devi Dwi Novitasari', 'devidwi1809@gmail.com'),
(10, 'Devi Dwi Novitasari', 'devidwi1809@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesan` int(11) NOT NULL,
  `tgl_pesan` varchar(50) NOT NULL,
  `harga_total` varchar(50) NOT NULL,
  `diskon` varchar(50) NOT NULL,
  `total_bayar` varchar(50) NOT NULL,
  `bonus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesan`, `tgl_pesan`, `harga_total`, `diskon`, `total_bayar`, `bonus`) VALUES
(9, '2023-05-31', '1000000', '50000', '950000', 'Handuk'),
(10, '2023-05-31', '3200000', '160000', '3040000', 'Handuk'),
(11, '2023-06-01', '60000000', '3000000', '57000000', 'Handuk'),
(12, '2023-06-10', '60000000', '3000000', '57000000', 'Handuk'),
(13, '2023-05-31', '18000000', '1800000', '16200000', 'Handuk + Selimut + Peralatan Mandi'),
(14, '2023-06-02', '12000000', '1200000', '10800000', 'Handuk + Selimut + Peralatan Mandi'),
(15, '2023-05-02', '1600000', '16000', '1584000', 'Tidak mendapatkan Bonus'),
(16, '2023-06-01', '1200000', '60000', '1140000', 'Handuk'),
(17, '2023-06-01', '2000000', '100000', '1900000', 'Handuk'),
(18, '2023-06-01', '2000000', '100000', '1900000', 'Handuk');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id_register` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ulangi_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id_register`, `username`, `email`, `password`, `ulangi_password`) VALUES
(1, 'Devi', 'devidwi1809@gmail.com', 'twtwgqgw', 'whqhwhhhwqn'),
(2, 'sbbsbb', 'alim@gm.com', 'wwwwwww', 'assssss'),
(3, 'Rozikhin', 'Rozikhin@gmail.com', 'ichan', 'ichan'),
(4, 'Devi Dwi Novitasari', 'devidwi1809@gmail.com', 'devidwi', 'devidwi'),
(5, 'DEVI DWI NOVITASARI', 'devidwi1809@gmail.com', 'DEVI', 'DEVI'),
(6, 'Devi Dwi Novitasari', 'devidwi1809@gmail.com', 'devi', 'devi'),
(7, 'ggg', 'devidwi1809@gmail.com', '777', '777');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bayar`
--
ALTER TABLE `bayar`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id_register`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bayar`
--
ALTER TABLE `bayar`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id_register` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
