-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 19 Nov 2019 pada 18.41
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id10557172_sembilan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(1) NOT NULL,
  `titik_lokasi` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `titik_lokasi`) VALUES
(1, '-5.446425, 107.147386'),
(2, '-4.784897, 108.852706'),
(3, '-5.214075, 110.567001'),
(4, '-6.606754, 109.561760'),
(5, '-6.631651, 126.208911'),
(6, '-4.657813, 128.802792'),
(7, '1.731030, 121.549921'),
(8, '1.912279, 124.703241'),
(9, '2.989249, 118.436898'),
(10, '4.426850, 123.595046');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sensor`
--

CREATE TABLE `sensor` (
  `id_lokasi` int(5) NOT NULL,
  `suhu` int(5) NOT NULL,
  `kec_arus` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `sensor`
--

INSERT INTO `sensor` (`id_lokasi`, `suhu`, `kec_arus`) VALUES
(1, 21, 181),
(2, 45, 15),
(3, 24, 10),
(4, 44, 183),
(5, 15, 6),
(6, 48, 19),
(7, 55, 5),
(8, 12, 233),
(9, 18, 27),
(10, 27, 68);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nm_user` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nm_user`, `email`, `username`, `password`) VALUES
(17, 'rahman', 'rahman', 'rahman', 'rahman'),
(21, 'wahyu', 'wahyu@kevin.com', 'wahyu', 'wahyu'),
(23, 'sandra', 'sandra', 'sandra14', '123'),
(25, 'zulivan', 'zulivan_abdillah@gmail.com', 'zulivan', '123'),
(27, 'kevin', 'muliakevin70@gmail.com', 'benkevin500', '123'),
(29, 'satya', 'satyapradipta55@yahoo.com', 'satya123', 'satya123'),
(32, 'ivan', 'ivan', 'ivan', 'ivan'),
(34, 'teja', 'teja@gmail.com', 'teja4', '123'),
(35, 'ivan', 'ivan', 'ivan', 'ivan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indeks untuk tabel `sensor`
--
ALTER TABLE `sensor`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`,`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
