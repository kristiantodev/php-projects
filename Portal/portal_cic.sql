-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2019 at 04:48 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal_cic`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(11) NOT NULL,
  `nm_agenda` varchar(50) NOT NULL,
  `tgl_agenda` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `waktu_agenda` varchar(50) NOT NULL,
  `tempat_agenda` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `status_after` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `nm_agenda`, `tgl_agenda`, `tgl_selesai`, `waktu_agenda`, `tempat_agenda`, `status`, `status_after`) VALUES
(13117, 'Bina Keluarga Kampus 2019 \"Create Your Passion\"', '2019-10-05', '2019-10-07', '08:00 s/d Selesai', 'Bumi Perkemahan Palutungan, Kuningan', 'Publish', 'Selesai'),
(13882, 'Seminar Nasional \"Create Your Startup\"', '0000-00-00', '2019-10-12', '08:00 s/d Selesai', 'Auditorium Universitas CIC', 'Publish', 'Selesai'),
(17964, 'Wisuda ke XXI Universitas Catur Insan Cendekia Cir', '0000-00-00', '2019-12-14', '08:00 s/d Selesai', 'Hotel Pangeran Cirebon', 'Publish', 'Selesai'),
(18727, 'Penyerahan SK Universitas CIC Oleh Kemenristekdikt', '0000-00-00', '2019-10-21', '13:00 s/d Selesai', 'Auditorium Universitas CIC', 'Publish', 'Selesai'),
(20596, 'Upacara Peringatan Hari Sumpah Pemuda', '0000-00-00', '2019-10-28', '07:00 s/d Selesai', 'Lapangan Upacara Universitas CIC', 'Publish', 'Selesai'),
(32629, 'Upacara Peringatan Hari Pahlawan', '0000-00-00', '2019-11-10', '07:00 s/d Selesai', 'Lapangan Upacara Universitas CIC', 'Publish', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `judul_artikel` varchar(155) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `slug` varchar(155) NOT NULL,
  `tgl_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(10) NOT NULL,
  `author` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_user`, `judul_artikel`, `foto`, `id_kategori`, `slug`, `tgl_post`, `status`, `author`, `isi`) VALUES
(1496, 'Admin', 'Kejuaraan Super Soccer Battle Campus 2019', '1496.jpg', '24747', 'kejuaraan-super-soccer-battle-campus-2019.html', '2019-11-22 01:30:25', 'Ya', 'Admin', '<p>Dua Tim Futsal Kampus CIC yang terdiri dari Tim Hamdalah CIC (Toto dkk) &amp; Tim Informatics CIC (Rizky dkk) kemarin telah mengikuti Kejuaraan Super Soccer Battle Campus 2019..<br />\r\nTim Hamdalah CIC berhasil keluar sebagai Juara 2 &amp; Tim Informatics CIC Juara 4 ??<br />\r\nSelamat ya guysss, Terus Berprestasi&nbsp;</p>'),
(3392, 'Admin', 'Perubahan AP CIC dan STMIK CIC menjadi universitas CIC', '3392.jpg', '24747', 'perubahan-ap-cic-dan-stmik-cic-menjadi-universitas-cic.html', '2019-11-22 01:08:53', 'Ya', 'Admin', '<p>Akademi Perdagangan dan Sekolah Tinggi Manajemen Informatika (STMIK) CIC Cirebon, resmi berubah status menjadi universitas. Peresmian ditandai dengan penyerahan Surat Keputusan (SK) Lembaga Layanan Pendidikan Tinggi (LLDIKTI) Wilayah IV kepada Ketua CIC Chandra Lukita, Senin (21/10).</p>\r\n\r\n<p>Perubahan status dirayakan mahasiswa dan dosen. Mereka bersyukur atas capaian tersebut. Papan nama di depan kampus yang sebelumnya bertuliskan STMIK CIC, seketika dilepas dan dirubah menjadi Universitas CIC. Selain itu, Universitas CIC juga menambahkan 2 program sarjanah baru. Yakni manajemen dan akuntansi.</p>\r\n\r\n<p>Kepala LLDIKTI Wilayah IV Prof Dr Uman Suherman AS MPd menyampaikan, perubahan status tersebut merupakan bentuk apresiasi pemerintah kepada Yayasan Catur Insan Cendekia atas kesungguhan dalam upaya melakukan perubahan dari Akademi Perdagangan dan STMIK menjadi sebuah Universitas.</p>\r\n\r\n<p>LLDIKTI memberikan rekomendasi menjadi sebuah universitas bukan hanya mengenai kebijakan pemerintah. Tetapi, menekankan kepada sebuah kesungguhan tata kelola yang dibangun oleh Akademi Perdagangan dan STMIK CIC, dan juga kesungguhan yayasan pada saat memiliki komitmen dan integritas yang kuat untuk membangun Cirebon.</p>\r\n\r\n<p>&ldquo;Cirebon yang bukan hanya terkenal dengan kota perdagangannya. Tetapi CIC juga mampu menghasilkan sumber daya manusia yang bergerak dalam bidang perdagangan yang merupakan salah satu kebanggan dari LL Dikti Jawa Barat dan Banten,&rdquo; tuturnya<em>.</em></p>\r\n\r\n<p>Meskipun telah ada universitas di Cirebon, Uman berharap CIC memiliki keunggulan. Sehingga, CIC harus menjadi pusat keunggulan dari berbagai bidang yang tidak membuat ragu orang tua untuk menitipkan putra dan putrinya di CIC, sebagai investasi terbaik bagi bangsa Indonesia.</p>\r\n\r\n<p>&ldquo;Bukan hanya menghasilkan sumber daya yang berkualitas untuk Cirebon, tetapi mudah-mudahan untuk nasional. Universitas CIC boleh dikatakan baru hari ini (kemarin,&nbsp;<em>red</em>) izin operasional. Tetapi kan sudah punya pengalaman sebagai sekolah tinggi dan akademi dulunya,&rdquo; cakapnya.</p>\r\n\r\n<p>Sementara itu, Ketua Universitas CIC Chandra Lukita merasa bersyukur dan mengucapkan terimakasih kepada Kementrian Ristekdikti yang telah memberikan kepercayaan kepada CIC. Baginya, kepercayaan yang besar sejalan dengan rasa tanggung jawab yang harus dijalani dan diemban.</p>'),
(32049, 'Admin', 'Mahasiswa Universitas CIC menjuarai Short Video Santri Contest', '32049.jpg', '24747', 'mahasiswa-universitas-cic-menjuarai-short-video-santri-contest.html', '2019-11-22 01:42:01', 'Ya', 'Admin', '<p>Kabar membanggakan juga datang dari salah satu Mahasiswa Universitas CIC yang beberapa waktu lalu sempat mengikuti &quot;Short Video Santri Contest&quot; dalam Rangka memperingati Hari Santri Nasional 2019 yang diselenggarakan oleh Salah Satu Pondok Pesantren Ternama di Cirebon..<br />\r\n.<br />\r\n.<br />\r\nSelamat kepada Denis Maulana (DKV 1/7) yang berhasil meraih Gelar Juara Pertama&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `background`
--

CREATE TABLE `background` (
  `id_background` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `background`
--

INSERT INTO `background` (`id_background`, `foto`) VALUES
('bg', 'bg.png');

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `id_tamu` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `subjek` varchar(60) NOT NULL,
  `pesan` text NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `tgl_tamu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku_tamu`
--

INSERT INTO `buku_tamu` (`id_tamu`, `nama`, `email`, `subjek`, `pesan`, `id_user`, `tgl_tamu`) VALUES
(8707, 'Andreas Oktafian', 'Andreasokok07@gmail.com', 'Kritik & Saran', 'Analisis sistem adalah kegiatan untuk melihat sistem yang sudah berjalan, melihat bagaimana yang bagus dan tidak bagus, dan kemudian mendokumentasikan kebutuhan yang akan dipenuhi dalam sistem yang baru (Rosa dan M. Shalahudin, 2014, p14). Dalam bagian ini akan diuraikan analisa dari objek studi kasus di Program Studi Teknik Informatika STMIK CIC Cirebon  untuk mengidentifikasi, mengevaluasi permasalahan, serta menganalisis sistem yang sedang berjalan pada saat ini. Dengan hasil analisis, penulis memberikan usulan perbaikan dan pengembangan  sistem yang baru agar dapat menjadi sistem yang lebih efektif dan efisien.', 'Admin', '2019-07-09'),
(14859, 'Syifa Ulkarim', 'syifaulkarim@gmail.com', 'Tugas', 'Keren website Blognya....', 'kusnadi', '2019-06-01'),
(16616, 'Syifa Ulkarim', 'syifaulkarim@gmail.com', 'Skripsi', 'Pak bimbingan bagaimana', 'ridho-taufiq', '2019-06-01'),
(20801, 'captcha', 'wkwk@gmail.com', 'Materi Kuliah', 'g', 'ridho-taufiq', '2019-06-23'),
(23138, 'KRISTIANTO', 'kristiantorpl@gmail.com', 'Pendaftaran Seminar Proyek', 'Pendaftaran Seminar Proyek Dibuka kapan ya?', 'Admin', '2019-06-14'),
(24748, 'Kristianto', 'kristiantorpl@gmail.com', 'Materi Kuliah', 'Materi SO gaada pak. mohon update', 'kusnadi', '2019-06-02'),
(28435, 'Kristianto', 'kristiantorpl@gmail.com', 'Pendaftaran Seminar Proyek', 'Besok semi', 'Admin', '2019-08-13');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id_download` int(11) NOT NULL,
  `nm_download` varchar(120) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `id_user`, `foto`, `tgl_input`, `ket`) VALUES
(15724, 'Admin', '15724.JPG', '2019-11-22 01:51:22', '<p>Rektor Universitas CIC memberikan hadiah kepada juara 1 pada lomba karya ilmiah inovasi teknologi kategori pelajar SMA/SMK/MA</p>\r\n'),
(16181, 'Admin', '16181.JPG', '2019-11-22 01:55:08', '<p>Penandatanganan MOU antara Universitas CIC dengan Pemerintah Kabupaten Cirebon</p>\r\n'),
(27670, 'Admin', '27670.JPG', '2019-11-22 01:59:08', '<p>Rektor Universitas CIC memberikan seminar tentang IR 4.0</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(17146, 'Kegiatan'),
(24747, 'Berita Kampus');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `judul_kegiatan` varchar(155) NOT NULL,
  `foto` text NOT NULL,
  `slug` varchar(225) NOT NULL,
  `tgl_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(15) NOT NULL,
  `author` varchar(40) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `id_user`, `judul_kegiatan`, `foto`, `slug`, `tgl_post`, `status`, `author`, `isi`) VALUES
(1567, 'Admin', 'Seminar Nasional presented by. Universitas CIC & CIREBON TECHNOPRENEURSHIP', '1567.jpg', 'seminar-nasional-presented-by.-universitas-cic-&-cirebon-technopreneurship.html', '2019-11-22 01:47:01', 'Ya', 'Admin', '<p>Seminar Nasional presented by. Universitas&nbsp;CIC &amp; CIREBON TECHNOPRENEURSHIP<br />\r\n.<br />\r\n.<br />\r\nTema &quot; Create Your Startup&quot;<br />\r\nPembicara :<br />\r\nBapak Dr. Chandra Lukita, S.E., M.M (Rektor Universitas&nbsp;CIC)<br />\r\nBapak Joshua Agasta (Vice President of Investment MDI)<br />\r\n.<br />\r\n.<br />\r\nModerator :<br />\r\nIbu Iis Aisah (CEO Cirebon Technopreneurship)</p>'),
(21625, 'Admin', 'Kegiatan Bina Keluarga Kampus di Universitas CIC', '21625.jpg', 'kegiatan-bina-keluarga-kampus-di-universitas-cic.html', '2019-11-22 01:26:40', 'Ya', 'Admin', '<p>Keseruan kegiatan OUTBOND BKK CIC 2019 ??<br />\r\nRektor Universitas&nbsp;CIC Bapak Dr. Chandra Lukita, S.E., M.M. berfoto bersama Civitas Akademik CIC, Panitia BKK CIC &amp; Mahasiswa Baru&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `link`
--

CREATE TABLE `link` (
  `id_link` int(10) NOT NULL,
  `nama_link` varchar(75) NOT NULL,
  `jenis_link` varchar(20) NOT NULL,
  `url` varchar(150) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `link`
--

INSERT INTO `link` (`id_link`, `nama_link`, `jenis_link`, `url`, `tanggal`) VALUES
(886, 'Sistem Informasi Nilai Akademik Mahasiswa (MyCIC)', 'Internal', 'http://my.cic.ac.id/', '2019-04-05 15:24:33'),
(9990, 'Sistem Informasi Penelitian & Pengabdian kepada Masyarakat (SIMLITABMAS)', 'Eksternal', 'http://simlitabmas.ristekdikti.go.id/', '2019-05-24 04:13:30'),
(11478, 'Sistem Informasi Nilai Proyek & Skripsi Universitas CIC (PROTA)', 'Internal', 'https://prota.cic.ac.id/', '2019-04-12 14:08:08'),
(12547, 'Perpustakaan (E-Library) CIC', 'Internal', 'https://perpustakaan.stmikcic.ac.id/', '2019-05-24 04:28:44'),
(21019, 'LLDIKTI Wilayah IV – Lembaga Layanan Pendidikan Tingkat IV', 'Eksternal', 'https://www.kopertis4.or.id/', '2019-05-24 04:21:14'),
(31575, 'Forlap Dikti', 'Eksternal', 'https://forlap.ristekdikti.go.id/dosen', '2019-04-12 14:09:10');

-- --------------------------------------------------------

--
-- Table structure for table `mhs_berprestasi`
--

CREATE TABLE `mhs_berprestasi` (
  `id_prestasi` int(11) NOT NULL,
  `nm_mhs` varchar(60) NOT NULL,
  `jenis_prestasi` varchar(50) NOT NULL,
  `foto` varchar(40) NOT NULL,
  `detail_prestasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs_berprestasi`
--

INSERT INTO `mhs_berprestasi` (`id_prestasi`, `nm_mhs`, `jenis_prestasi`, `foto`, `detail_prestasi`) VALUES
(3317, 'Nopi Fitrianingsih', 'S1 - Sistem Informasi Komputerisasi Akutansi', '3317.PNG', '<p>Raihan IPK Terbaik dari jurusan Sistem Informasi Komputer Akutansi Angkatan 2016 dengan IPK 3,95</p>\r\n'),
(11776, 'Kristianto', 'S1 - Teknik Informatika', '11776.PNG', '<p>Raihan IPK Terbaik dari jurusan Teknik Informatika Angkatan 2016 dengan IPK 4,00.</p>\r\n'),
(28738, 'Noni Apriliani', 'S1 - Teknik Informatika', '28738.PNG', '<p>Peraih IPK Terbaik dari jurusan Teknik Informatika Angkatan 2017 dengan Raihan IPK 4,00</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `jdl_pengumuman` text NOT NULL,
  `foto` text NOT NULL,
  `slug` text NOT NULL,
  `tgl_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(20) NOT NULL,
  `author` varchar(40) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `id_user`, `jdl_pengumuman`, `foto`, `slug`, `tgl_post`, `status`, `author`, `isi`) VALUES
(1470, 'Admin', 'Seminar Himatif', '1470.jpg', 'seminar-himatif.html', '2019-11-22 01:35:08', 'Ya', 'Admin', '<p>Himatif Proudly Present ;<br />\r\nSHARING TECHNOLOGY &quot;simplify your day with IOT&quot;<br />\r\n.<br />\r\n.<br />\r\nSabtu, 23 November 2019<br />\r\nMulai pukul 08.00 s/d selesai<br />\r\nBertempat di Auditorium Universitas CIC</p>'),
(8387, 'Admin', 'Wisuda civitas Universitas CIC', '8387.jpg', 'wisuda-civitas-universitas-cic.html', '2019-11-21 08:23:41', 'Ya', 'Admin', '<p>Diberitahukan kepada wisudawan/wisudawati Universitas CIC bahwa pelaksanaan wisuda akan dilakukan pada tanggal 17 Desember 2019</p>');

-- --------------------------------------------------------

--
-- Table structure for table `peristiwa`
--

CREATE TABLE `peristiwa` (
  `id_peristiwa` int(11) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `jdl_peristiwa` text NOT NULL,
  `foto` text NOT NULL,
  `tgl_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(20) NOT NULL,
  `author` varchar(40) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peristiwa`
--

INSERT INTO `peristiwa` (`id_peristiwa`, `id_user`, `jdl_peristiwa`, `foto`, `tgl_post`, `status`, `author`, `isi`) VALUES
(27031, 'Admin', 'Hari Pahlawan', '27031.jpg', '2019-11-22 03:02:05', 'Ya', 'Admin', '<p>UNIVERSITAS CIC &amp; Civitas Akademik CIC mengucapkan Selamat Hari Pahlawan 10 November 2019..<br />\r\n&quot;Bangunlah suatu dunia dimana semua bangsanya hidup dalam damai dan persaudaraan&quot; ?</p>'),
(32257, 'Admin', 'Memperingati Maulid Nabi', '32257.jpg', '2019-11-22 03:02:58', 'Ya', 'Admin', '<p>&nbsp;</p>\r\n\r\n<p>UNIVERSITAS CIC &amp; Civitas Akademik CIC mengucapkan Selamat Hari Maulid Nabi Muhammad SAW</p>');

-- --------------------------------------------------------

--
-- Table structure for table `profil_dosen`
--

CREATE TABLE `profil_dosen` (
  `id_user` varchar(20) NOT NULL,
  `nidn` varchar(30) NOT NULL,
  `nm_lengkap` varchar(60) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `alamat` text NOT NULL,
  `jabatan_struktural` varchar(60) NOT NULL,
  `jabatan_fungsional` varchar(50) NOT NULL,
  `pend_tertinggi` varchar(4) NOT NULL,
  `status_ikatan_kerja` varchar(50) NOT NULL,
  `s1` varchar(60) NOT NULL,
  `s2` varchar(60) NOT NULL,
  `tgl_ditambah` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `foto` varchar(256) NOT NULL,
  `status` varchar(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `foto`, `status`, `keterangan`) VALUES
(904, '904.jpg', 'active', '<p>Gedung Kampus Universitas Catur Insan Cendekia (CIC) Cirebon</p>\r\n'),
(16236, '16236.JPG', '-', '<p>MOU Ketua Program Studi Teknik Informatika</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `id_statistik` int(11) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `id_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistik`
--

INSERT INTO `statistik` (`id_statistik`, `ip`, `tgl_kunjungan`, `id_user`) VALUES
(234, '', '2019-03-06', 'kusnadi'),
(327, '::1', '2019-04-24', 'ridho-taufiq'),
(330, '::1', '2019-04-24', 'Admin'),
(347, '::1', '2019-04-24', 'ridho-taufiq'),
(362, '::1', '2019-04-24', 'kusnadi'),
(394, '::1', '2019-05-24', 'kusnadi'),
(395, '::1', '2019-04-24', 'Admin'),
(399, '::1', '2019-04-25', 'Admin'),
(400, '::1', '2019-03-25', 'Admin'),
(401, '::1', '2019-03-25', 'Admin'),
(402, '::1', '2019-03-25', 'Admin'),
(403, '::1', '2019-05-25', 'Admin'),
(404, '::1', '2019-04-25', 'kusnadi'),
(405, '::1', '2019-04-08', 'Admin'),
(406, '::1', '2019-04-25', 'kusnadi'),
(429, '::1', '2019-05-25', 'kusnadi'),
(437, '::1', '2019-05-25', 'ridho-taufiq'),
(441, '::1', '2019-05-25', 'Admin'),
(442, '::1', '2019-04-17', 'Admin'),
(443, '127.0.0.1', '2019-04-08', 'Admin'),
(444, '::1', '2019-05-26', 'Admin'),
(445, '::1', '2019-05-26', 'Admin'),
(446, '::1', '2019-05-26', 'kusnadi'),
(447, '::1', '2019-05-26', 'Admin'),
(448, '::1', '2019-05-27', 'Admin'),
(449, '::1', '2019-05-27', 'Admin'),
(479, '::1', '2019-05-27', 'Admin'),
(480, '::1', '2019-05-27', 'Admin'),
(481, '::1', '2019-05-28', 'Admin'),
(482, '::1', '2019-05-28', 'kusnadi'),
(483, '::1', '2019-05-28', 'Admin'),
(522, '::1', '2019-05-30', 'ridho-taufiq'),
(537, '::1', '2019-05-31', 'kusnadi'),
(538, '::1', '2019-05-31', 'Admin'),
(539, '::1', '2019-05-31', 'ridho-taufiq'),
(540, '::1', '2019-05-31', 'kusnadi'),
(542, '::1', '2019-06-01', 'kusnadi'),
(544, '::1', '2019-06-01', 'ridho-taufiq'),
(578, '::1', '2019-06-01', 'Admin'),
(579, '::1', '2019-06-02', 'Admin'),
(580, '::1', '2019-06-02', 'kusnadi'),
(581, '::1', '2019-06-02', 'Admin'),
(582, '::1', '2019-06-02', 'kusnadi'),
(583, '::1', '2019-06-02', 'kusnadi'),
(584, '::1', '2019-06-02', 'Admin'),
(615, '::1', '2019-06-03', 'kusnadi'),
(616, '::1', '2019-06-03', 'kusnadi'),
(617, '::1', '2019-06-03', 'ridho-taufiq'),
(618, '::1', '2019-06-03', 'Admin'),
(619, '::1', '2019-06-03', 'kusnadi'),
(620, '::1', '2019-06-03', 'kusnadi'),
(621, '::1', '2019-06-03', 'Admin'),
(622, '::1', '2019-06-04', 'Admin'),
(623, '::1', '2019-06-04', 'kusnadi'),
(624, '::1', '2019-06-05', 'Admin'),
(625, '::1', '2019-06-05', 'Admin'),
(626, '::1', '2019-06-05', 'Admin'),
(627, '::1', '2019-06-05', 'Admin'),
(628, '::1', '2019-06-05', 'Admin'),
(629, '127.0.0.1', '2019-06-06', 'Admin'),
(635, '127.0.0.1', '2019-06-06', 'ridho-taufiq'),
(686, '127.0.0.1', '2019-06-23', 'Admin'),
(687, '::1', '2019-06-23', 'Admin'),
(688, '::1', '2019-06-24', 'Admin'),
(689, '::1', '2019-06-24', 'Admin'),
(693, '::1', '2019-06-24', 'kusnadi'),
(694, '::1', '2019-06-25', 'Admin'),
(695, '::1', '2019-06-25', 'Admin'),
(696, '::1', '2019-06-26', 'Admin'),
(697, '::1', '2019-06-27', 'Admin'),
(698, '::1', '2019-06-27', 'Admin'),
(699, '::1', '2019-06-27', 'Admin'),
(700, '::1', '2019-06-28', 'Admin'),
(701, '::1', '2019-06-28', 'kusnadi'),
(702, '::1', '2019-06-28', 'ridho-taufiq'),
(703, '::1', '2019-06-29', 'Admin'),
(704, '::1', '2019-06-30', 'Admin'),
(705, '::1', '2019-07-01', 'Admin'),
(706, '::1', '2019-07-01', 'kusnadi'),
(707, '::1', '2019-07-02', 'Admin'),
(708, '::1', '2019-07-02', 'kusnadi'),
(709, '', '2019-07-02', 'Admin'),
(710, '::1', '2019-07-03', 'Admin'),
(711, '', '2019-07-03', 'Admin'),
(712, '', '2019-07-03', 'Admin'),
(713, '::1', '2019-07-03', 'kusnadi'),
(714, '::1', '2019-07-04', 'Admin'),
(715, '::1', '2019-07-04', 'Admin'),
(716, '::1', '2019-07-04', 'Admin'),
(717, '::1', '2019-07-04', 'Admin'),
(718, '::1', '2019-07-05', 'Admin'),
(719, '::1', '2019-07-05', 'kusnadi'),
(720, '::1', '2019-07-05', 'ridho-taufiq'),
(721, '::1', '2019-07-06', 'Admin'),
(722, '::1', '2019-07-06', 'kusnadi'),
(723, '::1', '2019-07-06', 'petrus-sokibi'),
(724, '::1', '2019-07-07', 'Admin'),
(725, '::1', '2019-07-07', 'kusnadi'),
(726, '::1', '2019-07-08', 'Admin'),
(727, '::1', '2019-07-08', 'kusnadi'),
(728, '::1', '2019-07-08', 'petrus-sokibi'),
(729, '::1', '2019-07-09', 'Admin'),
(730, '::1', '2019-07-09', 'kusnadi'),
(731, '::1', '2019-07-10', 'Admin'),
(732, '::1', '2019-07-11', 'Admin'),
(733, '::1', '2019-07-12', 'Admin'),
(734, '::1', '2019-07-13', 'Admin'),
(735, '::1', '2019-07-13', 'kusnadi'),
(736, '::1', '2019-07-14', 'Admin'),
(737, '::1', '2019-07-14', 'Admin'),
(738, '::1', '2019-07-15', 'Admin'),
(739, '::1', '2019-07-15', 'kusnadi'),
(740, '::1', '2019-07-16', 'Admin'),
(741, '::1', '2019-07-17', 'Admin'),
(742, '::1', '2019-07-18', 'Admin'),
(743, '::1', '2019-07-19', 'Admin'),
(744, '::1', '2019-07-20', 'Admin'),
(745, '::1', '2019-07-21', 'Admin'),
(746, '::1', '2019-07-21', 'kusnadi'),
(747, '::1', '2019-07-05', 'Admin'),
(748, '::1', '2019-07-05', 'Admin'),
(749, '::1', '2019-07-07', 'Admin'),
(750, '::1', '2019-07-07', 'Admin'),
(751, '::1', '2019-07-09', 'Admin'),
(752, '::1', '2019-07-10', 'Admin'),
(753, '::1', '2019-07-10', 'Admin'),
(754, '::1', '2019-07-12', 'Admin'),
(755, '::1', '2019-07-16', 'Admin'),
(756, '::1', '2019-07-18', 'Admin'),
(757, '::1', '2019-07-22', 'Admin'),
(758, '::1', '2019-07-23', 'Admin'),
(759, '::1', '2019-07-24', 'Admin'),
(760, '::1', '2019-07-25', 'Admin'),
(761, '127.0.0.1', '2019-07-26', 'Admin'),
(762, '::1', '2019-07-26', 'Admin'),
(763, '::1', '2019-07-27', 'Admin'),
(764, '::1', '2019-07-28', 'Admin'),
(765, '::1', '2019-07-29', 'Admin'),
(766, '::1', '2019-07-30', 'Admin'),
(767, '::1', '2019-07-31', 'Admin'),
(768, '::1', '2019-07-31', 'kusnadi'),
(769, '::1', '2019-07-31', 'ridho-taufiq'),
(770, '::1', '2019-08-01', 'Admin'),
(771, '::1', '2019-08-01', 'kusnadi'),
(772, '::1', '2019-08-02', 'Admin'),
(773, '::1', '2019-08-02', 'kusnadi'),
(774, '::1', '2019-08-03', 'Admin'),
(775, '::1', '2019-08-04', 'Admin'),
(776, '::1', '2019-08-04', 'kusnadi'),
(777, '127.0.0.1', '2019-08-06', 'Admin'),
(778, '127.0.0.1', '2019-08-06', 'kusnadi'),
(779, '127.0.0.1', '2019-08-06', 'ridho-taufiq'),
(781, '::1', '2019-08-06', 'kusnadi'),
(782, '::1', '2019-08-06', 'ridho-taufiq'),
(783, '::1', '2019-08-07', 'Admin'),
(784, '::1', '2019-08-08', 'Admin'),
(785, '::1', '2019-08-11', 'Admin'),
(786, '::1', '2019-08-11', 'ridho-taufiq'),
(787, '::1', '2019-08-13', 'Admin'),
(788, '::1', '2019-08-13', 'ridho-taufiq'),
(789, '::1', '2019-08-16', 'Admin'),
(790, '::1', '2019-08-17', 'Admin'),
(791, '::1', '2019-08-17', 'wanda-ilham'),
(792, '::1', '2019-08-17', 'victor-asih'),
(793, '::1', '2019-08-17', 'ridho-taufiq'),
(794, '::1', '2019-08-17', 'kusnadi'),
(795, '::1', '2019-08-17', 'petrus-sokibi'),
(796, '::1', '2019-08-17', 'rinaldi-adam'),
(797, '::1', '2019-08-17', 'widya-lelisa'),
(798, '::1', '2019-08-17', 'taufiq-hidayat'),
(799, '::1', '2019-08-18', 'Admin'),
(800, '::1', '2019-08-18', 'petrus-sokibi'),
(801, '::1', '2019-08-19', 'Admin'),
(802, '::1', '2019-08-19', 'ridho-taufiq'),
(803, '::1', '2019-08-21', 'Admin'),
(804, '::1', '2019-08-21', 'wanda-ilham'),
(805, '::1', '2019-08-21', 'victor-asih'),
(806, '::1', '2019-08-21', 'kusnadi'),
(807, '::1', '2019-08-22', 'Admin'),
(808, '::1', '2019-08-23', 'Admin'),
(809, '::1', '2019-08-23', 'widya-lelisa'),
(810, '::1', '2019-08-24', 'Admin'),
(811, '::1', '2019-08-26', 'Admin'),
(812, '::1', '2019-08-27', 'Admin'),
(813, '::1', '2019-08-28', 'Admin'),
(814, '::1', '2019-08-29', 'Admin'),
(815, '::1', '2019-08-31', 'Admin'),
(816, '::1', '2019-09-01', 'Admin'),
(817, '::1', '2019-09-02', 'Admin'),
(818, '127.0.0.1', '2019-09-03', 'Admin'),
(819, '::1', '2019-09-04', 'Admin'),
(820, '::1', '2019-09-08', 'Admin'),
(821, '::1', '2019-09-09', 'Admin'),
(822, '::1', '2019-09-10', 'Admin'),
(823, '::1', '2019-09-10', 'kusnadi'),
(824, '::1', '2019-09-11', 'Admin'),
(825, '::1', '2019-09-12', 'Admin'),
(826, '::1', '2019-09-13', 'Admin'),
(827, '::1', '2019-09-14', 'Admin'),
(828, '::1', '2019-09-18', 'Admin'),
(829, '::1', '2019-09-20', 'Admin'),
(830, '127.0.0.1', '2019-09-21', 'Admin'),
(831, '::1', '2019-09-22', 'Admin'),
(832, '::1', '2019-09-24', 'Admin'),
(833, '::1', '2019-09-25', 'Admin'),
(834, '::1', '2019-09-28', 'Admin'),
(835, '::1', '2019-09-29', 'Admin'),
(836, '::1', '2019-09-30', 'Admin'),
(837, '::1', '2019-10-01', 'Admin'),
(838, '::1', '2019-10-15', 'Admin'),
(839, '::1', '2019-10-20', 'Admin'),
(840, '::1', '2019-10-20', 'victor-asih'),
(841, '::1', '2019-10-21', 'Admin'),
(842, '::1', '2019-10-21', 'ridho-taufiq'),
(843, '::1', '2019-10-23', 'Admin'),
(844, '::1', '2019-10-23', 'ridho-taufiq'),
(845, '::1', '2019-10-23', 'kusnadi'),
(846, '::1', '2019-10-24', 'Admin'),
(847, '::1', '2019-10-25', 'Admin'),
(848, '::1', '2019-10-26', 'Admin'),
(849, '::1', '2019-10-27', 'Admin'),
(850, '::1', '2019-10-28', 'Admin'),
(851, '::1', '2019-10-29', 'Admin'),
(852, '::1', '2019-10-30', 'Admin'),
(853, '::1', '2019-10-31', 'Admin'),
(854, '::1', '2019-11-01', 'Admin'),
(855, '::1', '2019-11-02', 'Admin'),
(856, '::1', '2019-11-06', 'Admin'),
(857, '::1', '2019-11-07', 'Admin'),
(858, '::1', '2019-11-11', 'Admin'),
(859, '::1', '2019-11-13', 'Admin'),
(860, '::1', '2019-11-14', 'Admin'),
(861, '::1', '2019-11-15', 'Admin'),
(862, '::1', '2019-11-16', 'Admin'),
(863, '::1', '2019-11-21', 'Admin'),
(864, '::1', '2019-11-22', 'Admin'),
(865, '::1', '2019-11-27', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tentang_kami`
--

CREATE TABLE `tentang_kami` (
  `id_profil` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `sambutan_kaprodi` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `tujuan` text NOT NULL,
  `tentang` text NOT NULL,
  `url_gmap` varchar(255) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang_kami`
--

INSERT INTO `tentang_kami` (`id_profil`, `icon`, `sambutan_kaprodi`, `visi`, `misi`, `tujuan`, `tentang`, `url_gmap`, `alamat`) VALUES
(1, '11.png', '<p style=\"text-align:justify\">Assalamu&#39;alaikum Wr.Wb.,&nbsp;<br />\r\nSalam Sejahtera,<br />\r\nPuji syukur ke hadirat Tuhan Yang Maha Esa, yang tidak henti-hentinya mencurahkan Rahmat dan HidayahNya bagi kita semua.</p>\r\n\r\n<p>Kehadiran website Universitas CIC yang mudah diakses, akurat dan informatif, kiranya dapat mempermudah bagi keluarga besar civitas akademika Universitas CIC dan masyarakat luas untuk mendapatkan informasi tentang Universitas CIC, pendaftaran, Beasiswa, Sistem Informasi Manajemen Akademik (SIMAK), perpustakaan, kegiatan Olahraga, Iptek, Seni Budaya, Penelitian dan informasi lainnya.</p>\r\n\r\n<p>Pendirian Universitas CIC diawali dengan berdirinya Lembaga Pendidikan Kursus dan Pelatihan CIC (dahulu Cirebon Institute of Computer) pada tanggal 13 Januari 1984, yang berarti sudah lebih dari 30 tahun secara konsisten dan komitmen berkiprah di dunia pendidikan. Pada tahun 1999 Lembaga Pendidikan CIC mengembangkan diri dengan mendirikan Sekolah Tinggi Manajemen Informatika dan Komputer Catur Insan Cendekia (STMIK CIC) dengan ijin operasional resmi dari Menteri Pendidikan Nasional nomer 123/D/O/1999 dan pada tanggal 21 Oktober 2019 STMIK&nbsp;CIC beralih status menjadi Universitas CIC yang telah disahkan oleh kemenristekdik.&nbsp;</p>\r\n\r\n<p>Konsistensi Universitas CIC sebagai IT (Information Technology) SCHOOL diharapkan mampu memberikan kontribusi positif berupa ilmu pengetahuan berbasis IT kepada dunia usaha dan industri serta mendukung langkah-langkah pemerintah daerah se-karesidenan Cirebon menuju Good Corporate Governance.</p>\r\n\r\n<p>Universitas CIC sejak tahun 2005 telah mendapatkan akreditasi dari BAN-PT(Badan Akreditasi Perguruan Tinggi) untuk 4 (empat) program studi yang ada di lingkungan STMIK CIC,yaitu Program Studi Sistem Informasi, Program Studi Teknik Informatika, Program Studi Manajemen Informatika dan Program Studi Komputerisasi Akuntansi, sehingga STMIK CIC menjadi satu-satunya Perguruan Tinggi Komputer yang semua program studinya terakreditasi oleh BAN-PT dan proaktif untuk terus melakukan re-akreditasi pada setiap program studi yang ada di Universitas CIC.</p>\r\n\r\n<p>Universitas CIC juga menjalankan perannya sebagai Knowledge based dengan melakukan kerjasama-kerjasama dengan dunia usaha dan industri serta pemerintah daerah se-karesidenan Cirebon, baik berupa kajian kurikulum berbasis PBL (Problem Based Learning), pengiriman tenaga praktisi untuk mengajar di Universitas CIC maupun penyaluran mahasiswa/i untuk praktek kerja lapang dan menyerap lulusan Universitas CIC serta menjadikan lulusan Universitas CIC sebagai wirausaha tangguh di era global.</p>\r\n\r\n<p>Insya Allah Universitas CIC mampu menjadi institusi pendidikan tinggi di Cirebon yang mampu menghasilkan sumber daya manusia yang siap bersaing dipasar global sesuai dengan Visi dan Misi Universitas CIC. Kami mohon dukungan dari semua pihak, terima kasih.</p>\r\n\r\n<p style=\"text-align:justify\">Wassalamu&#39;alaikum Wr.Wb.,&nbsp;<br />\r\nRektor Universitas&nbsp;CIC<br />\r\n<br />\r\nDr. Chandra Lukita, S.E., M.M</p>\r\n', '<p style=\"text-align:center\">&quot;Menjadi Perguruan Tinggi yang mencetak sumber daya manusia yang mampu bersaing di Jawa Barat khususnya Ciayumajakuning (Cirebon, Indramayu, Majalengka dan Kuningan) pada tahun 2021&quot;</p>\r\n', '<p style=\"text-align:justify\">- Menyelenggarakan proses belajar yang efektif untuk menghasilkan lulusan yang berbudi luhur dan tepat waktu.</p>\r\n\r\n<p style=\"text-align:justify\">- Membangun dan menjalankan manajemen yang sehat dan kondusif sesuai tata kelola organisasi dan peraturan yang berlaku di Indonesia.</p>\r\n\r\n<p style=\"text-align:justify\">- Melaksanakan penelitian dan kegiatan pengabdian kepada masyarakat dengan mengembangkan hubungan kerja sama dengan pemerintah, institusi pendidikan dan pengguna lulusan.</p>\r\n', '<p>Tujuan strategis institusi dirumuskan dalam Rencana Strategis Perguruan Tinggi CIC 2016-2021, tujuan strategis yang ingin dicapai Universitas CIC adalah :</p>\r\n\r\n<p>- Menghasilkan lulusan yang berkualitas dan kompeten dalam bidang informatika berbasis teknologi informasi dan seni yang mandiri, kreatif, dan adaptif terhadap perubahan serta berbudi pekerti yang luhur.</p>\r\n\r\n<p>- Meningkatkan peran Universitas&nbsp;CIC sebagai Center of Excellence bidang teknologi informasi dan seni di Cirebon dan wilayah sekitarnya.</p>\r\n\r\n<p>- Meningkatkan kemampuan akademik dan non akademik Sumber Daya Manusia (SDM) dengan kualifikasi sesuai dengan kebutuhan saat ini dan masa yang akan datang.</p>\r\n', '', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63394.28430944937!2d108.5504803611298!3d-6.75243745201941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x91385801f5822049!2sSTMIK+CIC!5e0!3m2!1sid!2sid!4v1554192699816!5m2!1sid!2sid', 'Jl. Kesambi No.202, Drajat, Kesambi, Kota Cirebon, Jawa Barat 45133');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(256) NOT NULL,
  `level` varchar(20) NOT NULL,
  `nm_user` varchar(60) NOT NULL,
  `status` varchar(15) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `level`, `nm_user`, `status`, `avatar`) VALUES
('5dccd02b78622', 'prodi_ti', '$2y$10$KG9cemsir8k6rhZI.k1xDORYiur8mgbn2rS5PBgygxnfnorelL8vC', 'Kaprodi', 'Prodi Teknik Informatika', 'Aktif', '5dccd02b78622.jpg'),
('5dccf7fe899a6', 'prodi_si', '$2y$10$KG9cemsir8k6rhZI.k1xDORYiur8mgbn2rS5PBgygxnfnorelL8vC', 'Kaprodi', 'Prodi Sistem Informasi', 'Aktif', '5dccf7fe899a6.jpg'),
('5dcf5acef3c94', 'baak', '$2y$10$3URIdvE86nCu2ye2seAu5u.9F60UA22zEXqJZjlbTaMb5PaNq34ga', 'BAAK', 'Bagian Administrasi Kampus', 'Aktif', '5dcf5acef3c94.jpg'),
('Admin', 'Admin', '$2y$10$aIiqjBbckbZuVQ/KuIRct.40wjVo8X8bV806Qud6b3S.cQ4TvyRCi', 'Administrator', 'Admin', 'Aktif', '2016102001.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `background`
--
ALTER TABLE `background`
  ADD PRIMARY KEY (`id_background`);

--
-- Indexes for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id_download`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id_link`);

--
-- Indexes for table `mhs_berprestasi`
--
ALTER TABLE `mhs_berprestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `peristiwa`
--
ALTER TABLE `peristiwa`
  ADD PRIMARY KEY (`id_peristiwa`);

--
-- Indexes for table `profil_dosen`
--
ALTER TABLE `profil_dosen`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `statistik`
--
ALTER TABLE `statistik`
  ADD PRIMARY KEY (`id_statistik`);

--
-- Indexes for table `tentang_kami`
--
ALTER TABLE `tentang_kami`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `statistik`
--
ALTER TABLE `statistik`
  MODIFY `id_statistik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=866;

--
-- AUTO_INCREMENT for table `tentang_kami`
--
ALTER TABLE `tentang_kami`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
