-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2023 at 07:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloudthink`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `adminname` varchar(40) NOT NULL,
  `adminemail` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `adminname`, `adminemail`, `password`) VALUES
(1, 'Lans The Prodigy', 'lanstheprodigy@gmail', '123'),
(2, 'Admin Name', 'admin@admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `donatur`
--

CREATE TABLE `donatur` (
  `donatur_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `jenis_pakaian` varchar(20) NOT NULL,
  `size` varchar(5) NOT NULL,
  `tanggal` date DEFAULT current_timestamp(),
  `time` time NOT NULL,
  `status` int(11) NOT NULL,
  `unique_code` varchar(20) NOT NULL,
  `ongkir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donatur`
--

INSERT INTO `donatur` (`donatur_id`, `name`, `email`, `phone`, `jenis_pakaian`, `size`, `tanggal`, `time`, `status`, `unique_code`, `ongkir`) VALUES
(58, 'Lans The Prodigy', '123@123', '123', 'Kemeja', 'L', '2023-04-12', '11:32:31', 1, 'INV/20230704/680960', 13608),
(60, 'Alan', 'alan@gmail.com', '1234', 'Celana', 'M', '2023-05-04', '11:33:25', 1, 'INV/20230704/946956', 37853),
(64, 'Ini Donate', 'donate@64', '64', 'Kaos', 'XL', '2023-06-22', '11:38:35', 1, 'INV/20230704/288071', 26279),
(66, 'Lans The Prodigy', 'index@final123', '123', 'Celana', 'XL', '2023-06-14', '11:41:28', 1, 'INV/20230704/535471', 33559);

-- --------------------------------------------------------

--
-- Table structure for table `lembagadonasi`
--

CREATE TABLE `lembagadonasi` (
  `lembaga_id` int(11) NOT NULL,
  `lembaga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lembagadonasi`
--

INSERT INTO `lembagadonasi` (`lembaga_id`, `lembaga`) VALUES
(16, 'Hay Studio'),
(17, 'Panti Kasih'),
(18, 'Kita Bisa'),
(19, 'Peduli Tsunami'),
(20, 'Pasar Senen');

-- --------------------------------------------------------

--
-- Table structure for table `pakaian`
--

CREATE TABLE `pakaian` (
  `pakaian_id` int(11) NOT NULL,
  `jenis_pakaian` varchar(20) NOT NULL,
  `size` varchar(5) NOT NULL,
  `donatur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pakaian`
--

INSERT INTO `pakaian` (`pakaian_id`, `jenis_pakaian`, `size`, `donatur_id`) VALUES
(42, 'Kemeja', 'L', 58),
(43, 'Celana', 'M', 60),
(44, 'Kaos', 'XL', 64),
(45, 'Celana', 'XL', 66);

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `pengajuan_id` int(11) NOT NULL,
  `lembaga` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `jumlah_butuh` int(11) NOT NULL,
  `jenis_pakaian` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `lembaga_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`pengajuan_id`, `lembaga`, `alamat`, `jumlah_butuh`, `jenis_pakaian`, `status`, `lembaga_id`) VALUES
(20, 'Panti Kasih', 'Kalimantan', 1249, 'Kemeja', 1, 17),
(21, 'Kita Bisa', 'Sumatera', 4820, 'Celana', 1, 18),
(22, 'Peduli Tsunami', 'Aceh', 1230, 'Kaos', 1, 19),
(23, 'Pasar Senen', 'Jakarta', 3201, 'Kaos', 1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `testimoni_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `testimonial` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`testimoni_id`, `name`, `location`, `testimonial`, `image`) VALUES
(6, 'Hayhasan', 'Mertoyudan, Magelanng, Jawa Tengah', 'well godhek', 'WIN_20230521_02_58_58_Pro.jpg'),
(7, 'Lans The Prodigy', '1', '1', 'WIN_20230521_02_58_58_Pro.jpg'),
(9, 'Bara Bere', 'Bekasi', 'Saya sangat terbantu', 'WIN_20230521_02_58_58_Pro.jpg'),
(10, 'William', 'Majapahit', 'Baju nya pas bgt di badanku. aku suka aku suka aku suka', 'WIN_20230521_02_58_58_Pro.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `useremail` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `profile_picture` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `useremail`, `password`, `profile_picture`) VALUES
(1, 'Gupong Ganteng', 'lanstheprodigy@gmail', '12345678', '1111.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`donatur_id`);

--
-- Indexes for table `lembagadonasi`
--
ALTER TABLE `lembagadonasi`
  ADD PRIMARY KEY (`lembaga_id`);

--
-- Indexes for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`pakaian_id`),
  ADD KEY `donatur_id` (`donatur_id`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`pengajuan_id`),
  ADD KEY `lembaga_id` (`lembaga_id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`testimoni_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donatur`
--
ALTER TABLE `donatur`
  MODIFY `donatur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `lembagadonasi`
--
ALTER TABLE `lembagadonasi`
  MODIFY `lembaga_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `pakaian_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `pengajuan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `testimoni_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD CONSTRAINT `pakaian_ibfk_1` FOREIGN KEY (`donatur_id`) REFERENCES `donatur` (`donatur_id`);

--
-- Constraints for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD CONSTRAINT `pengajuan_ibfk_1` FOREIGN KEY (`lembaga_id`) REFERENCES `lembagadonasi` (`lembaga_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
