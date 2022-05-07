-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2022 at 04:51 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eduwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nidn` varchar(25) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `status_kerja` varchar(100) NOT NULL,
  `kota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `nidn`, `pendidikan`, `status_kerja`, `kota`) VALUES
(1, 'Ibnu Emil Wardoyo', '2009017502', 'S3 Doctoral', 'Dosen Tetap', 'bandung'),
(2, 'Sri Hartanti', '2009017505', 'S2 Magister', 'Dosen Tidak Tetap', 'jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `kota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `email`, `jurusan`, `kota`) VALUES
(1, 'Dennis Eka Putra', '19111440023', 'deniseka@gmail.com', 'Teknik Informatika', 'jakarta'),
(2, 'khosyi aufa', '191223450322', 'khosyiaufa@gmail.com', 'Teknik Industri', 'Bandung'),
(4, 'Friskey Hardin Halawa', '191223450314', 'friskeyhardin@gmail.com', 'Teknik Industri', 'jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `id` int(11) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `kategori`, `nama`, `deskripsi`, `harga`, `gambar`) VALUES
(1, 'pizza\r\n           ', 'Meat Lover', 'Irisan sosis sapi, daging sapi cincang, burger sapi, sosis ayam.', '49500', 'meat-lover.jpg'),
(2, 'pizza', 'Super Supreme', 'Daging ayam dan sapi asap, daging sapi cincang, burger sapi, jamur, paprika merah dan paprika hijau.\",', '49500', 'supreme.jpg'),
(3, 'pizza', 'Tuna Melt', 'Irisan daging ikan tuna, butiran jagung, saus mayonnaise.', '49500', 'tuna-melt.jpg'),
(4, 'pizza', 'American Favourite', 'Pepperoni sapi, daging sapi cincang, jamur.', '49500', 'american-favourite.jpg'),
(5, 'pasta', 'Beef Spaghetti', 'Pepperoni sapi, daging sapi cincang, jamur.', '43000', 'beef-spaghetti.jpg'),
(6, 'pasta', 'Beef Lasagna', 'Dipanggang, daging sapi cincang. krim putih lembut di tiap lapisan.', '48000', 'beef-lasagna.jpg'),
(7, 'pasta', 'Creamy Beef Fettuccine', 'Daging sapi asap dan jamur, ditumis dengan saus krim lembut.', '43000', 'creamy-beef-fettuccine.jpg'),
(8, 'nasi', 'Black Pepper Chicken', 'Ayam dengan saus lada hitam.', '40000', 'black-pepper-chicken.jpg'),
(9, 'nasi', 'Oriental Chicken', 'Daging ayam berpadu dengan saus oriental.', '40000', 'oriental-chicken.jpg'),
(10, 'minuman', 'Choco Mint', 'minuman Choco Dengan rasa mint', '24000', 'choco-mint.jpg'),
(11, 'minuman', 'Toffee Coffee', 'minuman toffee coffee', '24000', 'toffee-coffee.jpg'),
(12, 'minuman', 'Green Tea Shake', 'Minuman Teh Hijau ', '24000', 'green-tea-shake.jpg'),
(13, 'minuman', 'Strawberry Milkshake', 'Minuman dengan campuran susu murni dan strawberry pilihan', '24000', 'strawberry-milkshake.jpg'),
(14, 'minuman', 'Chocolate Milkshake', 'Minuman dengan campuran susu murni dan coklat pilihan', '24000', 'chocolate-milkshake.jpg'),
(15, 'nasi', 'Meatballs Beef Mushroom', 'Bola daging sapi dengan saus daging sapi cincang dan jamur.', '40000', 'meatballs-beef-mushroom.jpg'),
(25, 'nasi', 'nasi goreng zimbabwe', 'Nasi Goreng Dengan campuran daging onta pilihan. daging onta spesial dari asia timur', '121231', '621ee4852b176.jpg'),
(32, 'minman', 'Cohoco Drink Sawit', 'MInuman Sari Kelapa Muda dengan campuran kelapa sawit', '150000', '621ee96e00e95.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `fk_pembimbing` FOREIGN KEY (`id`) REFERENCES `mahasiswa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
