-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2021 pada 16.20
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yusuf_311910617`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(4, 'dwi', 'dwiajakokrepot@gmail.com', '202cb962ac59075b964b07152d234b70', '2020-12-09 11:38:53'),
(5, 'dwi', 'dwiajakokrepot@gmail.com', '202cb962ac59075b964b07152d234b70', '2020-12-09 11:44:20'),
(6, 'ada', 'ada2@gmail.com', '202cb962ac59075b964b07152d234b70', '2020-12-13 13:52:06'),
(7, 'yusuf', 'yusuf@gmail.com', '5518e997714638a77faf0ca53534c5dd', '2021-06-30 08:40:59'),
(8, 'ahmad', 'ahmad@gmail.com', '54b7a3221f83ca9d17f3fb072738904f', '2021-07-01 16:18:48'),
(9, 'santoso', 'santoso@gmail.com', '5518e997714638a77faf0ca53534c5dd', '2021-07-02 15:46:05'),
(10, 'tono', 'santoso@gmail.com', 'c27cd12c8034c739304c22a3a3748e39', '2021-07-02 15:56:48');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
