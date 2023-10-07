-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 07, 2023 at 02:59 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb_2023_b_213040047`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `penulis` varchar(200) NOT NULL,
  `tahun_terbit` year NOT NULL,
  `penerbit` varchar(200) NOT NULL,
  `gambar` varchar(65) NOT NULL,
  `kategori_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `penulis`, `tahun_terbit`, `penerbit`, `gambar`, `kategori_id`) VALUES
(1, 'Komet', 'Tere Liye', 2018, 'Gramedia Pustaka Utama', 'komet.jpg', 1),
(2, 'Laskar Pelangi', 'Andrea Hirata', 2005, 'Bentang Pustaka', 'laskar.jpg', 1),
(3, 'Pulang-Pergi', 'Tere Liye', 2021, 'Sabak Grip Nusantara', 'pulangpergi.jpeg', 1),
(4, 'Doraemon', 'Fujiko F. Fujio', 1969, 'Shogakukan', 'doraemon.jpg', 2),
(5, 'Naruto', 'Masashi Kishimoto', 1999, 'Shueisha', 'naruto.jpg', 2),
(6, 'Detective Conan', 'Gosho Aoyama', 1994, 'Shogakukan', 'conan.jpg', 2),
(7, 'One Piece', 'Eiichiro Oda', 1997, 'Shueisha', 'onepiece.jpg', 2),
(8, 'Steve Jobs', 'Walter Isaacson', 2011, 'Simon & Schuster', 'stavejobs.jpg', 3),
(9, 'Leonardo da Vinci', 'Walter Isaacson', 2017, 'Simon & Schuster', 'leonardo.jpg', 3),
(10, 'Becoming', 'Michelle Obama', 2018, 'Crown Publishing Group', 'becoming.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'novel'),
(2, 'komik'),
(3, 'biografi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id_kategori`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
