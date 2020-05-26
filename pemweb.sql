-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2020 pada 12.41
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemweb`
--

DELIMITER $$
--
-- Prosedur
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_Login` (IN `userName` VARCHAR(10), IN `passWord` VARCHAR(4))  BEGIN
  SELECT * FROM mahasiswa u
  WHERE u.username = userName AND u.password = passWord;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIM` varchar(15) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `ALAMAT` varchar(255) NOT NULL,
  `UPLOAD_FOTO` varchar(255) NOT NULL,
  `USERNAME` varchar(10) NOT NULL,
  `PASSWORD` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `NAMA`, `ALAMAT`, `UPLOAD_FOTO`, `USERNAME`, `PASSWORD`) VALUES
('175150700111001', 'Gladys Wahyu', 'Jl. Bukit Dieng', '07052019230859glad.png', 'gladys', '4567'),
('175150700111006', 'Linda Nur Malasari', 'Jl. Sumbersari', '08052019020048lind.png', 'lindanm', '$2y$'),
('175150700111008', 'Reinata Devi', 'Jl. Bandara', '07052019232237rei.png', 'reinata', '$2y$'),
('175150700111009', 'jason ajax', 'jl banteng', '08052019042234jason.png', 'jas', '$2y$'),
('175150700111024', 'Grezyta Novarizka', 'Jl. Griyashanta', '08052019021635gre.png', 'grezy', '$2y$');

-- --------------------------------------------------------

--
-- Struktur dari tabel `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `NIM` varchar(15) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `PASSWORD` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabelartikel`
--

CREATE TABLE `tabelartikel` (
  `id_artikel` int(5) NOT NULL,
  `judul_artikel` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `isi_artikel` text COLLATE latin1_general_ci NOT NULL,
  `tgl_artikel` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `tabelartikel`
--

INSERT INTO `tabelartikel` (`id_artikel`, `judul_artikel`, `isi_artikel`, `tgl_artikel`) VALUES
(29, 'HURAY', 'xdfestgtrdt', '2019-05-08 00:00:00'),
(25, 'testinggg', 'ALHAMDULILLAHHH BISA DIEDIT GUYSSS', '2019-05-08 00:00:00'),
(24, 'busy', 'haiss', '2019-05-08 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`) VALUES
(6, 'admin', '$2y$10$hS//w54TyQUxPWGA4R3EH.kmn4JcEUM0/m2ybaQHnTv/NpHJZXL2u', 'nurmala'),
(7, 'user', '$2y$10$RQfjPTy.yVDgGPzD.Fnw8.VJ3VUMFhSDz8eJRdK7GpowXIOxiRNVu', 'sari'),
(8, 'adm', '$2y$10$9owsFpsMchVFs/STEAlJjejEqDyrTIenEG4CwbxjRZqtO.kUVhbi6', 'linda'),
(9, 'lindanurmm', '$2y$10$Mo7kRwCzFpjvMVt8wWVqWOWP5dW2fbzYybcC2uADSWCkwsEfmwAtG', 'lindut.'),
(10, 'webpro', '$2y$10$a7rKlUfsC4QS20wR.s2d5.B2N41ScRygG6P.LgXR89PwfSBO7X6jq', 'webpro');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`);

--
-- Indeks untuk tabel `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `tabelartikel`
--
ALTER TABLE `tabelartikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabelartikel`
--
ALTER TABLE `tabelartikel`
  MODIFY `id_artikel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
