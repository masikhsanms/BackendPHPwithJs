-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 Mar 2018 pada 05.38
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_item`
--

CREATE TABLE `tb_item` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_item`
--

INSERT INTO `tb_item` (`id`, `id_kategori`, `stok`, `nama`) VALUES
(1, 0, 0, ''),
(2, 1, 60, 'pensil'),
(3, 3, 2, 'kursi'),
(4, 3, 10, 'mouse'),
(10, 2, 21, 'kasur'),
(11, 3, 4, 'meja'),
(13, 2, 20, 'flashdisk'),
(18, 4, 8, 'sepatu'),
(19, 1, 30, 'kertas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id`, `kategori`) VALUES
(1, 'atk'),
(2, 'electronik'),
(3, 'furniture'),
(4, 'perlengkapan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'd7afde3e7059cd0a0fe09eec4b0008cd'),
(4, 'ykdigital', 'd41d8cd98f00b204e9800998ecf8427e'),
(5, 'ikhsan', 'e654e25830cf9cc2fc87b2ee1e4533bc'),
(6, 'coba', '84396cd511048f251194319806bc9177'),
(15, 'kkk', 'c4dfad2c49dc4f244bcddbe32a3ee0ef'),
(16, 'mansur', 'ec6a6536ca304edf844d1d248a4f08dc'),
(29, 'oke', 'ad79e2cd5fd5ae53547d991007344847'),
(30, 'q', '0305d718926ac8776a442023509c21ce'),
(31, 's', 'd7afde3e7059cd0a0fe09eec4b0008cd'),
(33, 'kl', '0305d718926ac8776a442023509c21ce');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_item`
--
ALTER TABLE `tb_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_item`
--
ALTER TABLE `tb_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
