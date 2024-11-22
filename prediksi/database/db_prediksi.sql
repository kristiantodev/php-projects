-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Agu 2020 pada 16.17
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_prediksi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_akademik`
--

CREATE TABLE `data_akademik` (
  `id_akademik` int(15) NOT NULL,
  `nim` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ipk` int(15) NOT NULL,
  `sks` int(15) NOT NULL,
  `uang` varchar(20) NOT NULL,
  `cuti` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `prediksi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(15) NOT NULL,
  `nim_l` int(15) NOT NULL,
  `nama_l` varchar(20) NOT NULL,
  `id_prodi` varchar(15) NOT NULL,
  `angkatan_l` int(15) NOT NULL,
  `dosen_wali` varchar(20) NOT NULL,
  `ipk_l` double NOT NULL,
  `sks_l` int(15) NOT NULL,
  `keuangan_l` int(15) NOT NULL,
  `cuti_l` int(15) NOT NULL,
  `stat` int(15) NOT NULL,
  `prediksi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `angkatan` int(15) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `dosen_wali` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jk`, `angkatan`, `id_prodi`, `alamat`, `telephone`, `dosen_wali`) VALUES
(2016102001, 'Kristianto', 'Laki-laki', 2019, 1, 'Jl. Kinatagama Desa Kaliwulu Plered Cirebon', '08990657546', 'Ridho Taufiq S, M.Kom.'),
(2016102002, 'Syifa Ulkarim', 'Laki-laki', 2020, 1, 'Gunung Jati', '0895373377029', 'Petrus Sokibi. S.KOM'),
(2016102003, 'Mohamad Rully', 'Laki-laki', 2020, 1, 'Desa Cempaka Plumbon', '089662203577', 'Ridho Taufiq S, M.Kom.'),
(2016102005, 'Irfan Riyadi', 'Laki-laki', 2020, 1, 'MUNDU 1', '08123456789', 'Ridho Taufiq S, M.Kom.'),
(2016102006, 'Wahyu Septiawan', 'Laki-laki', 2019, 1, 'Plered', '0895373377030', 'Ridho Taufiq S, M.Kom.'),
(2016102007, 'Leilly Indahsari', 'Perempuan', 2018, 1, 'Cideng', '0895373377026', 'Kusnadi, M.Kom.'),
(2016102009, 'Sri Apriyani', 'Perempuan', 2020, 1, 'Indramayu', '0895373377028', 'Ridho Taufiq S, M.Kom.'),
(2016102011, 'Arif Maulama', 'Laki-laki', 2020, 1, 'Depok', '0895373377031', 'Kusnadi, M.Kom.'),
(2016102013, 'Farida Trie A', 'Perempuan', 2018, 1, 'Jl. Kalitanjung Barat', '089608543706', 'Petrus Sokibi. S.KOM'),
(2016102014, 'Mochamad Rizky Alvin Fernanda', 'Laki-laki', 2020, 1, 'Jalan Permai Raya 12 No 9', '0895373377024', 'Kusnadi, M.Kom.'),
(2016102019, 'Miawati', 'Perempuan', 2020, 4, 'Jalan Cideng Raya ', '089515060378', 'Kusnadi, M.Kom.'),
(2016102020, 'Sakti Wibawa', 'Laki-laki', 2020, 4, 'Kanoman', '0895373388029', 'Kusnadi, M.Kom.'),
(2016102033, 'Devi Nurjannah', 'Perempuan', 2020, 4, 'Bima', '083167701650', 'Petrus Sokibi. S.KOM'),
(2016102036, 'Puja Irawan', 'Perempuan', 2020, 4, 'Cikedug', '083823586126', 'Petrus Sokibi. S.KOM'),
(2016102037, 'Alfian', 'Laki-laki', 2019, 4, 'Desa Karangwangi, Kec. Karangwareng', '081214674264', 'Petrus Sokibi. S.KOM'),
(2016102038, 'Haevah', 'Perempuan', 2020, 5, 'MUNDU', '0895373377029', 'Kusnadi, M.Kom.'),
(2016102041, 'Rizky Maulana', 'Laki-laki', 2020, 5, 'Perumnas', '089537337333', 'Petrus Sokibi. S.KOM'),
(2016102042, 'Vega Pramudia Sukma', 'Perempuan', 2018, 5, 'Kuningan', '089507689648', 'Kusnadi, M.Kom.'),
(2016102043, 'Nadila Khabiru', 'Perempuan', 2020, 5, 'Jalan Moh Saleh No 33', '089695695839', 'Kusnadi, M.Kom.'),
(2016102049, 'Dimas Aulia Pudjie P', 'Laki-laki', 2020, 5, 'Kr. Mulya Pegambiran No 9', '082298094803', 'Petrus Sokibi, M.Kom.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(20) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ipk` double NOT NULL,
  `sks` int(15) NOT NULL,
  `uang` int(15) NOT NULL,
  `cuti` int(15) NOT NULL,
  `stat` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nim`, `nama`, `ipk`, `sks`, `uang`, `cuti`, `stat`) VALUES
(1, '2016102001', 'Kristianto', 3.7, 128, 100, 100, 100),
(2, '2016102003', 'Mohamad Rully', 2.9, 128, 50, 100, 100),
(3, '2016102005', 'Irfan Riyadi', 3, 128, 100, 100, 100),
(4, '2016102013', 'Farida Trie A', 3.6, 128, 50, 100, 100),
(5, '2016102014', 'Mochamad Rizky Alvin Fernanda', 3.7, 128, 100, 100, 100),
(6, '2016102043', 'Nadila Khabiru', 3.15, 128, 100, 100, 100),
(8, '2016102049', 'Dimas Aulia Pudjie P', 3.4, 128, 100, 50, 100),
(9, '2016102037', 'Alfian', 3.69, 128, 100, 100, 100),
(10, '2016102042', 'Vega Pramudia Sukma', 3.7, 128, 50, 100, 100),
(12, '2016102036', 'Puja Irawan', 3.45, 128, 100, 100, 100),
(13, '2016102033', 'Devi Nurjannah', 3.3, 120, 100, 100, 100),
(14, '2016102060', 'Haevah', 3.9, 128, 100, 100, 50),
(16, '2016102019', 'Miawati', 3.2, 128, 100, 100, 100),
(17, '2016102002', 'Syifa Ulkarim', 3.32, 128, 100, 100, 100),
(18, '2016102006', 'Wahyu Septiawan', 3.2, 128, 100, 100, 100),
(19, '2016102007', 'Leilly Indahsari', 3.4, 128, 100, 100, 100),
(20, '2016102009', 'Sri Apriyani', 3.5, 128, 100, 100, 100),
(21, '2016102011', 'Arif Maulama', 3.34, 128, 100, 100, 100),
(22, '2016102020', 'Sakti Wibawa', 3, 120, 100, 100, 100),
(23, '2016102041', 'Rizky Maulana', 2.5, 128, 100, 100, 100),
(24, '2016102038', 'Haevah', 3.12, 128, 100, 50, 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `prodi`) VALUES
(1, 'Teknik Informatika'),
(2, 'Sistem Informatika'),
(3, 'Desain Komunikasi Visual'),
(4, 'Akuntansi'),
(5, 'Manajemen'),
(6, 'BAAK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nidn` int(15) NOT NULL,
  `nama_u` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nidn`, `nama_u`, `username`, `password`, `jk`, `alamat`, `image`, `id_prodi`, `level`) VALUES
(1, 427077801, 'Sudadi', 'admin', 'admin', 'Laki-laki', 'Perumnas', 'WhatsApp_Image_2020-07-06_at_21_45_52.jpeg', 6, 'Admin'),
(2, 427077802, 'Wanda Ilham', 'wanda', 'ilham', 'Laki-laki', 'Plered', 'WhatsApp_Image_2020-08-04_at_20_13_49.jpeg', 5, 'Kaprodi'),
(3, 427077803, 'Lena Magdalena', 'lena', 'lena', 'Perempuan', 'Jalan Kedawung', 'default.png', 4, 'Kaprodi '),
(4, 427077804, 'Kusnadi', 'kusnadi', 'kusnadi', 'Laki-laki', 'Cirebon', 'WhatsApp_Image_2020-07-06_at_21_45_51.jpeg', 1, 'Kaprodi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_akademik`
--
ALTER TABLE `data_akademik`
  ADD PRIMARY KEY (`id_akademik`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_akademik`
--
ALTER TABLE `data_akademik`
  MODIFY `id_akademik` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
