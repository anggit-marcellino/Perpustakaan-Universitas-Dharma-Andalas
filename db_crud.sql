-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Mar 2020 pada 17.16
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_crud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_buku`
--

CREATE TABLE `table_buku` (
  `nobuku` int(39) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `status_pinjam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `table_buku`
--

INSERT INTO `table_buku` (`nobuku`, `judul`, `penerbit`, `status_pinjam`) VALUES
(1234, 'OPP 3', 'ERLANGGA', 'Dipinjam Dan Di Bawa Pulang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_pinjam`
--

CREATE TABLE `table_pinjam` (
  `id_pinjam` int(39) NOT NULL,
  `id_tamu` int(40) NOT NULL,
  `nobuku` int(40) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `jumlah_pinjam` int(30) NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `table_pinjam`
--

INSERT INTO `table_pinjam` (`id_pinjam`, `id_tamu`, `nobuku`, `tgl_pinjam`, `jumlah_pinjam`, `tgl_kembali`) VALUES
(1234, 1, 1234, '2020-03-11', 1, '2020-03-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_tamu`
--

CREATE TABLE `table_tamu` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `table_tamu`
--

INSERT INTO `table_tamu` (`id`, `nama`, `tanggal`, `instansi`, `kategori`, `jurusan`) VALUES
(1, 'Anggit Marcellino', '2020-03-11', '', 'Mahasiswa', 'S1 SISTEM INFORMASI');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `table_buku`
--
ALTER TABLE `table_buku`
  ADD PRIMARY KEY (`nobuku`);

--
-- Indeks untuk tabel `table_pinjam`
--
ALTER TABLE `table_pinjam`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `id_tamu` (`id_tamu`),
  ADD KEY `nobuku` (`nobuku`);

--
-- Indeks untuk tabel `table_tamu`
--
ALTER TABLE `table_tamu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `table_tamu`
--
ALTER TABLE `table_tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `table_pinjam`
--
ALTER TABLE `table_pinjam`
  ADD CONSTRAINT `c_buku` FOREIGN KEY (`nobuku`) REFERENCES `table_buku` (`nobuku`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `c_tamu` FOREIGN KEY (`id_tamu`) REFERENCES `table_tamu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
