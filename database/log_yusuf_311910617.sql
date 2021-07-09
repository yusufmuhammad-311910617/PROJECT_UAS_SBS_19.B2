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
-- Struktur dari tabel `log_yusuf_311910617`
--

CREATE TABLE `log_yusuf_311910617` (
  `id_log` int(10) NOT NULL,
  `nim` int(10) DEFAULT NULL,
  `nama_mhs` varchar(30) DEFAULT NULL,
  `jurusan_mhs_lama` varchar(20) DEFAULT NULL,
  `jurusan_mhs_baru` varchar(20) DEFAULT NULL,
  `waktu` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `log_yusuf_311910617`
--

INSERT INTO `log_yusuf_311910617` (`id_log`, `nim`, `nama_mhs`, `jurusan_mhs_lama`, `jurusan_mhs_baru`, `waktu`) VALUES
(1, 1010106, 'dani', 'teknik informatika', 'teknik informatika', '2021-06-30'),
(2, 1010106, 'dani', 'teknik informatika', 'teknik informatika', '2021-07-01'),
(3, 1010105, 'joko', 'teknik informatika', 'teknik informatika', '2021-07-02'),
(4, 311910619, 'dani', 'teknik industri', 'teknik informatika', '2021-07-02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `log_yusuf_311910617`
--
ALTER TABLE `log_yusuf_311910617`
  ADD PRIMARY KEY (`id_log`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `log_yusuf_311910617`
--
ALTER TABLE `log_yusuf_311910617`
  MODIFY `id_log` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
