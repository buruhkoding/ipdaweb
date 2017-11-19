-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Nov 2017 pada 13.33
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `noA` varchar(11) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `tmpLahir` varchar(50) NOT NULL,
  `tglLahir` varchar(255) NOT NULL,
  `agama` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `masaBerlaku` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `noA`, `nama`, `pass`, `tmpLahir`, `tglLahir`, `agama`, `jk`, `pekerjaan`, `jabatan`, `alamat`, `masaBerlaku`, `foto`, `status`) VALUES
(1, '123', 'Rahmat', '$2y$10$/I/uEraPtR.9JaNQL9gWDemYVCCjnZYQWJcCzi2B/TpY.Lb0Ljoyq', 'Semarang', '2013-08-20', 'Islam', 'Laki-Laki', 'Programmer', 'CEO', 'Simo', '2036-05-09', '810b1-img-2.png', 'admin'),
(2, '124', 'Test', '$2y$10$.KQdl2VHbq9DPZQkBcafmeX0IgYvU8luuLEdPHC6Kl17mYx0pzhZu', 'Semarang', '2027-05-10', 'Islam', 'Laki-Laki', 'Working Class', 'CEO', '<p>\r\n	Hehe</p>\r\n', '2020-05-09', '2d739-img-6.png', 'user'),
(3, '12345', 'Selena', '$2y$10$m9WY0gacWpcwTnb7mkQRoeSlv', 'Jakarta', '2007-11-01', 'Islam', 'Laki-Laki', 'CEO', 'Penggalang', 'Bulak', '2000-11-30', 'e056e-img-9.png', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
