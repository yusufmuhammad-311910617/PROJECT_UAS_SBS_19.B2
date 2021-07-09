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
-- Struktur dari tabel `yusuf_311910617`
--

CREATE TABLE `yusuf_311910617` (
  `nim` int(10) NOT NULL,
  `nama_mhs` varchar(30) DEFAULT NULL,
  `alamat_mhs` varchar(20) DEFAULT NULL,
  `jurusan_mhs` varchar(20) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `IPK` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `yusuf_311910617`
--

INSERT INTO `yusuf_311910617` (`nim`, `nama_mhs`, `alamat_mhs`, `jurusan_mhs`, `tgl_lahir`, `IPK`) VALUES
(1010101, 'yusuf', 'pati', 'teknik informatika', '2000-02-21', '3.70'),
(1010102, 'dewi', 'pati', 'teknik informatika', '2001-05-25', '3.12'),
(1010103, 'santoso', 'pati', 'teknik informatika', '1999-04-15', '2.50'),
(1010104, 'irul', 'pati', 'teknik informatika', '2001-06-20', '2.80'),
(1010105, 'joko', 'pati', 'teknik informatika', '2000-05-10', '3.8');

--
-- Trigger `yusuf_311910617`
--
DELIMITER $$
CREATE TRIGGER `update_jurusan_mhs_yusuf_311910617` BEFORE UPDATE ON `yusuf_311910617` FOR EACH ROW BEGIN
INSERT INTO log_yusuf_311910617
set nim = OLD.nim,
nama_mhs = OLD.nama_mhs,
jurusan_mhs_lama = OLD.jurusan_mhs,
jurusan_mhs_baru = NEW.jurusan_mhs,
waktu = NOW();
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `yusuf_311910617`
--
ALTER TABLE `yusuf_311910617`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
