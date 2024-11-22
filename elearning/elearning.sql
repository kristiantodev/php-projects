-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Mar 2022 pada 14.43
-- Versi server: 10.1.39-MariaDB
-- Versi PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban`
--

CREATE TABLE `jawaban` (
  `id` int(11) NOT NULL,
  `kode_quiz` varchar(100) NOT NULL,
  `kode_materi` varchar(50) NOT NULL,
  `soal` text NOT NULL,
  `jawaban` text NOT NULL,
  `no_induk` varchar(100) NOT NULL,
  `siswa` varchar(100) NOT NULL,
  `nilai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jawaban`
--

INSERT INTO `jawaban` (`id`, `kode_quiz`, `kode_materi`, `soal`, `jawaban`, `no_induk`, `siswa`, `nilai`) VALUES
(7, 'QUIZ-01', 'MTK-01', 'jelaskan isi aljabar', 'adada', '061530800610', 'Yusuf Andika', '89'),
(8, 'QUIZ-04', 'MTK-01', 'nifakhf', 'tidak bisa', '061530800610', 'Yusuf Andika', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id` int(11) NOT NULL,
  `kode_mapel` varchar(100) NOT NULL,
  `mapel` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id`, `kode_mapel`, `mapel`, `status`) VALUES
(1, 'MTK', 'Matematika', 'Aktif'),
(2, 'BIN', 'Bahasa Indonesia', 'Aktif'),
(3, 'SJR', 'Sejarah', 'Aktif'),
(4, 'BIG', 'Bahasa Inggris', 'Aktif'),
(7, 'PKN', 'Pendidikan Kewarganegaraan', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `kode_materi` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `mapel` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `guru` varchar(100) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `pdf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id`, `kode_materi`, `judul`, `mapel`, `isi`, `guru`, `kelas`, `pdf`) VALUES
(2, 'MTK-01', 'Pengenalan Aljabar', 'Matematika', 'Aljabar merupakan salah satu cabang ilmu matematika yang banyak dipelajari dan dikembangkan, selain teori bilangan, geometri, dan analisis matematika. Secara garis besar, aljabar merupakan sebuah ilmu yang mempelajari mengenai cara dan metode memanipulasi bilangan dan simbol.', 'Intan Ratu Kartika', 'VIII', 'Kartu_Pendaftaran_El-Nilein2.pdf'),
(4, 'dnka', 'fkq', 'Matematika', 'fjqk', 'Dinda Chika Maharani', 'VII', ''),
(5, 'fanfk', 'nfan', 'Matematika', 'vankbfk kn', 'Dinda Chika Maharani', 'VII', 'Materi_Pengantar_Manajemen_Ke_dua_.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `kode_quiz` varchar(100) NOT NULL,
  `kode_materi` varchar(50) NOT NULL,
  `soal` text NOT NULL,
  `pembuat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `quiz`
--

INSERT INTO `quiz` (`id`, `kode_quiz`, `kode_materi`, `soal`, `pembuat`) VALUES
(1, 'QUIZ-01', 'MTK-01', 'jelaskan isi aljabar', 'intan'),
(5, 'QUIZ-03', 'MTK-01', 'Apa', 'intan'),
(6, 'QUIZ-04', 'MTK-01', 'nifakhf', 'dinda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `no_induk` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_lahir` varchar(100) NOT NULL,
  `jenkel` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `no_induk`, `nama`, `tgl_lahir`, `jenkel`, `kelas`, `status`, `pic`) VALUES
(1, '061530800610', 'Yusuf Andika', '1997-05-10', 'Laki-laki', 'VIII', '', ''),
(2, '061530800609', 'Yuliani', '1997-07-09', 'Perempuan', 'VIII', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `level`, `pic`) VALUES
(1, 'admin', 'admin', 'Yusuf Andika', 'Administrator', ''),
(2, 'dody', 'dody', 'Muhammad Dody Daryanto', 'Administrator', ''),
(4, 'ardi', 'ardi', 'Muhammad Ardiansyah', 'Administrator', ''),
(5, 'agung', 'agung', 'Agung Wahyudi Syahputra', 'Administrator', ''),
(6, 'heru', 'heru', 'Heru Zulistian', 'Administrator', ''),
(7, 'intan', 'intan', 'Intan Ratu Kartika', 'Guru', ''),
(8, 'dinda', 'dinda', 'Dinda Chika Maharani', 'Guru', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
