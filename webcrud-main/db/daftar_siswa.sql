-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Mei 2025
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
 /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
 /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 /*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daftar_siswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tmpt_Lahir` varchar(50) NOT NULL,
  `tgl_Lahir` date NOT NULL,
  `jekel` enum('Laki - Laki','Perempuan') NOT NULL,
  `jurusan` enum('IPA','IPS','Agama','Bahasa') NOT NULL,
  `email` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `tmpt_Lahir`, `tgl_Lahir`, `jekel`, `jurusan`, `email`, `gambar`, `alamat`) VALUES
('2301', 'Rahmat Hidayat', 'Pariaman', '2004-01-12', 'Laki - Laki', 'IPA', 'rahmat.hidayat@example.com', 'rahmat.jpg', 'Lubuk Alung, Padang Pariaman'),
('2302', 'Nur Aisyah', 'Padang', '2004-05-20', 'Perempuan', 'IPS', 'nur.aisyah@example.com', 'aisyah.jpg', 'Sicincin, Padang Pariaman'),
('2303', 'Ahmad Fauzan', 'Bukittinggi', '2004-03-15', 'Laki - Laki', 'Agama', 'fauzan@example.com', 'fauzan.jpg', 'Sungai Geringging, Padang Pariaman'),
('2304', 'Siti Zulaikha', 'Padang Pariaman', '2004-11-30', 'Perempuan', 'Bahasa', 'zulaikha@example.com', 'zulaikha.jpg', 'Nan Sabaris, Padang Pariaman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Indexes
--

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT
--

ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
 /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
 /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
