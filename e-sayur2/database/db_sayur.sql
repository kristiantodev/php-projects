-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jan 2023 pada 12.04
-- Versi server: 5.7.21-log
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sayur`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nm_kategori` varchar(75) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nm_kategori`, `deleted`) VALUES
(1, 'Sayuran', 0),
(2, 'wkwk', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_user` varchar(30) NOT NULL,
  `id_sayur` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `deleted` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_user`, `id_sayur`, `status`, `deleted`, `qty`, `id_transaksi`) VALUES
(1, '6360599b81dcc', 2, 2, 0, 6, 216956834),
(2, '6360599b81dcc', 1, 2, 0, 2, 1384098440),
(4, '636121a25eb8c', 1, 2, 0, 12, 366782223),
(5, '636121a25eb8c', 1, 2, 0, 0, 2081637598),
(6, '636121a25eb8c', 2, 2, 0, 0, 896729961),
(7, '636121a25eb8c', 1, 1, 0, 0, 0),
(8, '636121a25eb8c', 2, 1, 0, 0, 0),
(9, '1', 2, 2, 0, 3, 1164310003),
(10, '1', 1, 2, 0, 1, 1164310003),
(11, '1', 1, 1, 1, 1, 0),
(13, '1', 1, 2, 0, 1, 118273299),
(14, '1', 1, 2, 0, 1, 181928038);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sayur`
--

CREATE TABLE `sayur` (
  `id_sayur` int(11) NOT NULL,
  `nm_sayur` varchar(60) NOT NULL,
  `foto` varchar(60) NOT NULL,
  `keterangan` text NOT NULL,
  `deleted` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sayur`
--

INSERT INTO `sayur` (`id_sayur`, `nm_sayur`, `foto`, `keterangan`, `deleted`, `id_kategori`, `harga`) VALUES
(1, 'Jagung', '986810490.jpg', 'Jagung (Zea mays ssp. mays) adalah salah satu tanaman pangan penghasil karbohidrat yang terpenting di dunia, selain gandum dan padi.', 0, 1, 12500),
(2, 'Bayam', '1240330230.jpg', 'sayur sehat', 0, 1, 7500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tgl_transaksi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_user` varchar(30) NOT NULL,
  `status` int(11) NOT NULL,
  `file_pembayaran` varchar(60) DEFAULT NULL,
  `hp` varchar(20) DEFAULT NULL,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tgl_transaksi`, `id_user`, `status`, `file_pembayaran`, `hp`, `alamat`) VALUES
(114385034, '2023-01-25 10:27:30', '1', 0, NULL, NULL, NULL),
(118273299, '2023-01-25 11:02:10', '1', 0, NULL, NULL, NULL),
(181928038, '2023-01-25 11:03:20', '1', 0, NULL, NULL, NULL),
(216956834, '2022-11-02 03:57:59', '6360599b81dcc', 2, '766102270.pdf', NULL, NULL),
(366782223, '2023-11-02 03:45:57', '636121a25eb8c', 0, NULL, NULL, NULL),
(428769179, '2023-01-25 10:33:47', '1', 0, NULL, NULL, NULL),
(649812974, '2023-01-25 10:29:48', '1', 0, NULL, NULL, NULL),
(896729961, '2021-12-17 05:08:31', '636121a25eb8c', 0, NULL, '08990657546', 'jl. Kinatagama Desa Kaliwulu Kecamatan Plered kabupaten Cirebon'),
(1164310003, '2023-01-25 10:34:36', '1', 0, NULL, NULL, NULL),
(1194487527, '2023-01-25 10:29:53', '1', 0, NULL, NULL, NULL),
(1384098440, '2022-11-01 12:24:38', '6360599b81dcc', 0, NULL, NULL, NULL),
(2081637598, '2021-12-13 11:45:13', '636121a25eb8c', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nm_user` varchar(75) NOT NULL,
  `level` varchar(20) NOT NULL,
  `foto` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nm_user`, `level`, `foto`, `created_at`) VALUES
('1', 'admin', '$2y$10$Yu1ziUFIrjktqeBPpLtfiO5mWh9XXdhdwHIpYT8ThaGTXl13NJa1q', 'Admin', 'Administrator', '1.jpg', '2022-10-31 15:05:16'),
('6360595f4fad9', 'kris', '$2y$10$tm8nVz3ZwKD7lHoGpVRaxO2gfsgmavRDoZj2efnxDZ6xS7c/47obu', 'Kristianto', 'Konsumen', '1.jpg', '2022-10-31 23:25:19'),
('6360599b81dcc', 'amal', '$2y$10$LTvATGelc90Zr3KwhO71YOfkirNal9rzV.InEpOUgAa7ULBW4IJCu', 'Ikhlasul Amal', 'Konsumen', '1.jpg', '2022-10-31 23:26:19'),
('636121a25eb8c', 'april', '$2y$10$KMRCr2AGJL5DY66reEP62et5XEdxQ4cKKhIEnLWalbCLVF/tZgwnO', 'Aprilia Hasanah', 'Konsumen', '1.jpg', '2022-11-01 13:39:46');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indeks untuk tabel `sayur`
--
ALTER TABLE `sayur`
  ADD PRIMARY KEY (`id_sayur`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `sayur`
--
ALTER TABLE `sayur`
  MODIFY `id_sayur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
