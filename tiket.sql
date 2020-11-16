-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2020 at 03:05 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `tanggal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `id_film`, `username`, `tanggal`) VALUES
(55, 2, 'nando', 1581037583);

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `nama_film` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `genre` varchar(128) NOT NULL,
  `durasi` varchar(128) NOT NULL,
  `sutradara` varchar(128) NOT NULL,
  `rating` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `nama_film`, `gambar`, `genre`, `durasi`, `sutradara`, `rating`) VALUES
(1, 'PEREMPUAN TANAH JAHANAM', 'perempuantanahjahanam.jpg', 'Horror', '1 Jam 46 Menit', 'Joko Anwar', 'D17+'),
(2, 'DUA GARIS BIRU', 'duagarisbiru.jpg', 'Romantic', '1 Jam 53 Menit', 'Gina S. Noer', 'R'),
(3, 'ROMEO RINJANI', 'romeorinjani.jpg', 'Romantic', '1 Jam 25 Menit', 'Fajar Bustomi', 'R'),
(4, 'GUNDALA', 'gundala.jpeg', 'Drama', '2 Jam 3 Menit', 'Joko Anwar', 'RBO'),
(5, 'AJARI AKU ISLAM', 'ajariakuislam.jpg', 'Drama', '1 Jam 33 Menit', 'Deni Pusing', 'R'),
(7, 'LOVE FOR SALE 2', 'loveforsale.jpg', 'Drama', '1 Jam 32 Menit', 'Andibachtiar Yusuf', 'D17+');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(2) NOT NULL,
  `nama_level` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'admin'),
(2, 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(128) NOT NULL,
  `id_level` int(2) NOT NULL,
  `aktif` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `id_level`, `aktif`) VALUES
(1, 'Krisna Hendra', 'krisna', '$2y$10$d/Yy0bqMbidnpg44ax5wAupYvDPuUP6vAn8mybG96kUc2h9o1vUG6', 1, 1),
(2, 'Afif Smart', 'ipid', '$2y$10$VRSRDXe1HH/un3KDhevFa.hbvGWo/qnn5OPwLgd3lpU2M4kan5klG', 2, 1),
(4, 'Risma Yunda', 'risma', '$2y$10$vOg8hwsN6XVfYA1RAllpweqhOSEQtE6ZS4dyXPSWXDr2VXS9adedC', 1, 1),
(5, 'Nando Dwiki', 'nando', '$2y$10$D.fcVehg8Sp9bcbqk8UwO.KVBVwFc1Dq7xkbuzDSlWHfIX7p3Ag7q', 2, 1),
(6, 'Rizky Prasetyo', 'rizkyptas', '$2y$10$U7Y4oRBIpGDr9HoVj6kIBu6AbvbclE.O1eREXwLeI1Hbpa6MKyVO6', 2, 1),
(7, 'Samid Hadwi', 'samid', '$2y$10$LNOOjXCo5IN.91JIXucFeOvJdhFcDdVpp7pd4LdY3T/kix5w9RjaS', 2, 1),
(8, 'Muhammad Fahri', 'fahri', '$2y$10$0YkD2DvlrQXZF4W4ORVKa.8qjgZ4Vrow1IKj3xCcsDTi1FXi3YXf2', 2, 1),
(9, 'Haifa Jahat', 'haifaa', '$2y$10$YUxsnnoEkrW7A0mWAa3fVOvpL6gWRpKv5Aq3PomthhCukOMsjW4NC', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
