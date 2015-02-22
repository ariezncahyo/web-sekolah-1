-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 13, 2014 at 03:36 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_smkn1katapang`
--
CREATE DATABASE IF NOT EXISTS `db_smkn1katapang` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_smkn1katapang`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hubin`
--

CREATE TABLE IF NOT EXISTS `tbl_hubin` (
  `nis` varchar(15) NOT NULL,
  `tempat` text NOT NULL,
  `mulai` text NOT NULL,
  `selesai` text NOT NULL,
  `pembimbing` text NOT NULL,
  `nilai` text NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hubin`
--

INSERT INTO `tbl_hubin` (`nis`, `tempat`, `mulai`, `selesai`, `pembimbing`, `nilai`) VALUES
('1112.10.259', 'UPINet', '2013-01-07', '2013-03-31', 'Sarosa Castrena', 'A+'),
('1112.10.261', 'RRI', '2013-01-07', '2013-03-31', 'Prihat Maulana', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kesiswaan`
--

CREATE TABLE IF NOT EXISTS `tbl_kesiswaan` (
  `nis` varchar(15) NOT NULL,
  `ekskul` text NOT NULL,
  `poin` int(11) NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kesiswaan`
--

INSERT INTO `tbl_kesiswaan` (`nis`, `ekskul`, `poin`) VALUES
('1112.10.259', 'IPMI', 0),
('1112.10.261', 'IPMI', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kurikulum_s1`
--

CREATE TABLE IF NOT EXISTS `tbl_kurikulum_s1` (
  `nis` varchar(15) NOT NULL,
  `agama1` float NOT NULL,
  `pkn1` float NOT NULL,
  `indonesia1` float NOT NULL,
  `penjaskes1` float NOT NULL,
  `inggris1` float NOT NULL,
  `matematika1` float NOT NULL,
  `ipa1` float NOT NULL,
  `kkpi1` float NOT NULL,
  `kwu1` float NOT NULL,
  `fisika1` float NOT NULL,
  `kimia1` float NOT NULL,
  `sunda1` float NOT NULL,
  `plh1` float NOT NULL,
  `produktif11` float NOT NULL,
  `produktif21` float NOT NULL,
  `produktif31` float NOT NULL,
  `produktif41` float NOT NULL,
  `produktif51` float NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kurikulum_s1`
--

INSERT INTO `tbl_kurikulum_s1` (`nis`, `agama1`, `pkn1`, `indonesia1`, `penjaskes1`, `inggris1`, `matematika1`, `ipa1`, `kkpi1`, `kwu1`, `fisika1`, `kimia1`, `sunda1`, `plh1`, `produktif11`, `produktif21`, `produktif31`, `produktif41`, `produktif51`) VALUES
('1112.10.259', 98, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90),
('1112.10.261', 91, 89, 89, 89, 89, 89, 89, 89, 89, 89, 89, 89, 89, 89, 89, 89, 89, 89);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kurikulum_s2`
--

CREATE TABLE IF NOT EXISTS `tbl_kurikulum_s2` (
  `nis` varchar(15) NOT NULL,
  `agama2` float NOT NULL,
  `pkn2` float NOT NULL,
  `indonesia2` float NOT NULL,
  `penjaskes2` float NOT NULL,
  `inggris2` float NOT NULL,
  `matematika2` float NOT NULL,
  `ipa2` float NOT NULL,
  `kkpi2` float NOT NULL,
  `kwu2` float NOT NULL,
  `fisika2` float NOT NULL,
  `kimia2` float NOT NULL,
  `sunda2` float NOT NULL,
  `plh2` float NOT NULL,
  `produktif12` float NOT NULL,
  `produktif22` float NOT NULL,
  `produktif32` float NOT NULL,
  `produktif42` float NOT NULL,
  `produktif52` float NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kurikulum_s2`
--

INSERT INTO `tbl_kurikulum_s2` (`nis`, `agama2`, `pkn2`, `indonesia2`, `penjaskes2`, `inggris2`, `matematika2`, `ipa2`, `kkpi2`, `kwu2`, `fisika2`, `kimia2`, `sunda2`, `plh2`, `produktif12`, `produktif22`, `produktif32`, `produktif42`, `produktif52`) VALUES
('1112.10.259', 99, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90),
('1112.10.261', 89, 89, 89, 89, 90, 90, 89, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87, 87);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kurikulum_s3`
--

CREATE TABLE IF NOT EXISTS `tbl_kurikulum_s3` (
  `nis` varchar(15) NOT NULL,
  `agama3` float NOT NULL,
  `pkn3` float NOT NULL,
  `indonesia3` float NOT NULL,
  `penjaskes3` float NOT NULL,
  `inggris3` float NOT NULL,
  `matematika3` float NOT NULL,
  `ipa3` float NOT NULL,
  `kkpi3` float NOT NULL,
  `kwu3` float NOT NULL,
  `fisika3` float NOT NULL,
  `kimia3` float NOT NULL,
  `sunda3` float NOT NULL,
  `senibudaya3` float NOT NULL,
  `ips3` float NOT NULL,
  `produktif13` float NOT NULL,
  `produktif23` float NOT NULL,
  `produktif33` float NOT NULL,
  `produktif43` float NOT NULL,
  `produktif53` float NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kurikulum_s3`
--

INSERT INTO `tbl_kurikulum_s3` (`nis`, `agama3`, `pkn3`, `indonesia3`, `penjaskes3`, `inggris3`, `matematika3`, `ipa3`, `kkpi3`, `kwu3`, `fisika3`, `kimia3`, `sunda3`, `senibudaya3`, `ips3`, `produktif13`, `produktif23`, `produktif33`, `produktif43`, `produktif53`) VALUES
('1112.10.259', 91, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90),
('1112.10.261', 87, 87, 87, 87, 87, 87, 87, 87, 88, 88, 88, 88, 88, 88, 88, 88, 88, 88, 88);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kurikulum_s4`
--

CREATE TABLE IF NOT EXISTS `tbl_kurikulum_s4` (
  `nis` varchar(15) NOT NULL,
  `agama4` float NOT NULL,
  `pkn4` float NOT NULL,
  `indonesia4` float NOT NULL,
  `penjaskes4` float NOT NULL,
  `inggris4` float NOT NULL,
  `matematika4` float NOT NULL,
  `ipa4` float NOT NULL,
  `kkpi4` float NOT NULL,
  `kwu4` float NOT NULL,
  `fisika4` float NOT NULL,
  `kimia4` float NOT NULL,
  `sunda4` float NOT NULL,
  `senibudaya4` float NOT NULL,
  `ips4` float NOT NULL,
  `produktif14` float NOT NULL,
  `produktif24` float NOT NULL,
  `produktif34` float NOT NULL,
  `produktif44` float NOT NULL,
  `produktif54` float NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kurikulum_s4`
--

INSERT INTO `tbl_kurikulum_s4` (`nis`, `agama4`, `pkn4`, `indonesia4`, `penjaskes4`, `inggris4`, `matematika4`, `ipa4`, `kkpi4`, `kwu4`, `fisika4`, `kimia4`, `sunda4`, `senibudaya4`, `ips4`, `produktif14`, `produktif24`, `produktif34`, `produktif44`, `produktif54`) VALUES
('1112.10.259', 93, 97, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90),
('1112.10.261', 88, 88, 88, 88, 88, 88, 88, 88, 88, 88, 88, 88, 88, 88, 88, 88, 88, 88, 88);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kurikulum_s5`
--

CREATE TABLE IF NOT EXISTS `tbl_kurikulum_s5` (
  `nis` varchar(15) NOT NULL,
  `agama5` float NOT NULL,
  `pkn5` float NOT NULL,
  `indonesia5` float NOT NULL,
  `penjaskes5` float NOT NULL,
  `inggris5` float NOT NULL,
  `matematika5` float NOT NULL,
  `ipa5` float NOT NULL,
  `kkpi5` float NOT NULL,
  `kwu5` float NOT NULL,
  `fisika5` float NOT NULL,
  `kimia5` float NOT NULL,
  `senibudaya5` float NOT NULL,
  `ips5` float NOT NULL,
  `jepang5` float NOT NULL,
  `produktif15` float NOT NULL,
  `produktif25` float NOT NULL,
  `produktif35` float NOT NULL,
  `produktif45` float NOT NULL,
  `produktif55` float NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kurikulum_s5`
--

INSERT INTO `tbl_kurikulum_s5` (`nis`, `agama5`, `pkn5`, `indonesia5`, `penjaskes5`, `inggris5`, `matematika5`, `ipa5`, `kkpi5`, `kwu5`, `fisika5`, `kimia5`, `senibudaya5`, `ips5`, `jepang5`, `produktif15`, `produktif25`, `produktif35`, `produktif45`, `produktif55`) VALUES
('1112.10.259', 95, 97, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 98, 90, 90, 90, 90, 97),
('1112.10.261', 88, 88, 88, 88, 88, 88, 88, 88, 88, 88, 88, 88, 88, 88, 88, 88, 88, 88, 88);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tatausaha`
--

CREATE TABLE IF NOT EXISTS `tbl_tatausaha` (
  `nis` varchar(15) NOT NULL,
  `kelas` text NOT NULL,
  `jurusan` text NOT NULL,
  `nama` text NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `agama` text NOT NULL,
  `alamat` text NOT NULL,
  `telp` text NOT NULL,
  `nama_ayah` text NOT NULL,
  `alamat_ayah` text NOT NULL,
  `telp_ayah` text NOT NULL,
  `nama_ibu` text NOT NULL,
  `alamat_ibu` text NOT NULL,
  `telp_ibu` text NOT NULL,
  `sisa_iuran_bulanan` text NOT NULL,
  `sisa_dana_bangunan` text NOT NULL,
  PRIMARY KEY (`nis`),
  KEY `tanggal_lahir` (`tanggal_lahir`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tatausaha`
--

INSERT INTO `tbl_tatausaha` (`nis`, `kelas`, `jurusan`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `telp`, `nama_ayah`, `alamat_ayah`, `telp_ayah`, `nama_ibu`, `alamat_ibu`, `telp_ibu`, `sisa_iuran_bulanan`, `sisa_dana_bangunan`) VALUES
('1112.10.259', 'XII TKJ-1', 'Teknik Komputer Jaringan', 'Dicky Faisal Dramar', 'Bandung', '1996-07-29', 'L', 'Islam', 'Cangkuang', '082115092529', 'Sudrajat', 'Cangkuang', '085220083185', 'Enok Sumarni', 'Cangkuang', '081320360930', '0', '0'),
('1112.10.261', 'XII TKJ-1', 'Teknik Komputer Jaringan', 'Hanif Saiful Malik', 'Bandung', '1995-11-16', 'L', 'Islam', 'Ciwidey', '-', '-', '-', '-', '-', '-', '-', '205000', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `username` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `picture` text,
  `flag` varchar(2) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`username`, `password`, `picture`, `flag`) VALUES
('1112.10.259', '0192023a7bbd73250516f069df18b500', NULL, 'US'),
('1112.10.261', '0192023a7bbd73250516f069df18b500', NULL, 'US'),
('adminhb', 'ce55b9029e444072afcf6627a20657bd', NULL, 'AH'),
('adminkes', 'b5f5053ca6b92df177f3b2c59dcc987e', NULL, 'AK'),
('adminkur', '5729c44046a828f867690c994e8cb270', NULL, 'AU'),
('adminsa', '270b32e9bbb3b63da5694441120f66d0', NULL, 'AN'),
('admintu', 'ba990e75b54b0849f9c6931462cae6b0', NULL, 'AT'),
('root', '0192023a7bbd73250516f069df18b500', NULL, 'SU');

-- --------------------------------------------------------

--
-- Table structure for table `tb_article`
--

CREATE TABLE IF NOT EXISTS `tb_article` (
  `IdBerita` int(10) NOT NULL AUTO_INCREMENT,
  `Judul` varchar(40) NOT NULL,
  `Berita` text NOT NULL,
  `TglBerita` date NOT NULL,
  `JamBerita` time NOT NULL,
  `IdPenulis` varchar(30) NOT NULL,
  PRIMARY KEY (`IdBerita`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_article`
--

INSERT INTO `tb_article` (`IdBerita`, `Judul`, `Berita`, `TglBerita`, `JamBerita`, `IdPenulis`) VALUES
(2, 'Hari Pertama Masuk Sekolah', '<p>Hari pertama masuk sekolah di SMK Negeri 1 Katapang diisi dengan hallal bil hallal dan peringatan <br> Hari Kemerdekaan Republik Indonesia yang ke 67. Tidak lupa mencicipi makanan khas tempo dulu, <br>lomba nasi tumpeng, lomba khas Tujuh Belas Agustus yang diikuti oleh siswa dan guru SMKN 1 Katapang.</p>\r\n<p>\r\nSelamat Hari Raya Idul Fitri 1 Syawal 1433 H. Minal Aidin Wal Faidzin. Mohon Maaf Lahir & Bathin.\r\n</p><p>\r\nMerdeka!</p>\r\n<br>', '2014-03-13', '09:23:27', 'Administrator'),
(3, 'Pelaksanaan Uji Kompetensi Guru', 'UKG hari pertama sepertinya tidak berjalan sesuai rencana. Para guru yang jauh hari telah<br> mempersiapkan diri harus pulang lagi dengan perasaan senang dan kecewa.<br><br>\r\n"Saya berangkat sebelum Subuh, Alhamdulillah tidak jadi." Kata seorang peserta gelombang pertama yang<br> berasal dari SMPN 2 Kertasari Kabupaten Bandung. <br><br>\r\nPenyebabnya server di titik penyelenggara UKG tidak dapat bersinkronisasi dengan server pusat di <br>Jakarta dan di Malang. Hingga jam penyelenggaraan UKG hari pertama usai belum diketahui penyebab <br>tidak dapat bersinkronisasinya antara server di titik penyelenggara UKG (sekolah) dengan server pusat.<br><br>\r\nMudah mudahan hari kedua UKG  (31/07)  tidak terlihat lagi peserta yang pulang dengan perasaan senang dan kecewa.<br><br><br>\r\nUpdate:<br>\r\nHari kedua ternyata dapat berjalan sesuai rencana meskipun soal UKG ada yang tidak sesuai atau tidak lengkap.', '2014-03-13', '09:23:48', 'Administrator'),
(4, 'Uji Kompetensi Guru Murni untuk Pemetaan', ' Bandung --- Menteri Pendidikan dan Kebudayaan, Mohammad Nuh, mengatakan, uji kompetensi guru <br>digunakan sebagai pemetaan untuk peningkatan kemampuan dan perbaikan kualitas pendidikan.<br> Tidak ada hubungannya dengan tunjangan profesi yang telah diterima para guru.<br><br>\r\n \r\nâ€œDengan pemetaan ini bisa terlihat kelemahannya selama ini. Bagaimana bisa meningkatkan kualitas,<br> kalau petanya saja tidak tahu,â€ kata Menteri Nuh usai memberi kuliah utama kepada mahasiswa baru<br> Institut Teknologi Bandung, Sabtu (28/07), di Bandung.<br><br>\r\n \r\nMendikbud mencontohkan, jika ada 1000 guru Matematika di Jawa Barat, tidak akan diketahui kelemahan<br> mereka dalam penguasaan materi pelajaran, jika tidak diuji. â€œKalau kelemahannya sudah diketahui,<br> mereka bisa meningkatkan kualitasnya dengan belajar sendiri atau ikut kursus dan pelatihan<br> yang diselenggarakan oleh pemerintah,â€ katanya.<br><br>\r\n \r\nUji kompetensi guru merupakan salah satu upaya peningkatan kompetensi dan kualitas pendidikan.<br> Dan meningkatkan kualitas pendidikan merupakan amanat undang-undang. Untuk itu, Mendikbud meminta<br> agar semua pihak tidak memperumit proses ujian ini. â€œUKG ini dasarnya ada di peraturan menteri.<br> Hal-hal yang sudah gamblang, tidak perlu diperdebatkan lagi!,â€ tegasnya.<br><br>\r\n \r\nJika nanti guru-guru ini ada yang gagal memenuhi standar kompetensi, Kemdikbud menggandeng LPMP<br> dan pelatihan guru sejenis untuk memberikan pembinaan. Bahkan, guru-guru ini bisa terus <br>mengembangkan diri dengan terarah, karena telah mengetahui kelemahannya. <br>â€œKalau muridnya siap untuk dites, diuji, masa gurunya tidak mau,â€ katanya.\r\n <br><br>\r\nUKG akan dimulai hari Senin (30/07). Mendikbud memastikan ujian tersebut akan tetap berjalan.<br> Menurut laporan terakhir yang diterima Menteri Nuh, semua persiapan telah dilakukan dengan baik.<br>\r\n <br><br>\r\nSumber: Kemendiknas', '2014-03-13', '09:24:11', 'Administrator'),
(5, 'Undangan Seminar STEM', 'Undangan Seminar STEM (Science, Teknologi, Engineering=Rekayasa dan Mathematika ) : TAWURAN BARENG ROBOT. Semoga bermanfaat.<br><br>\r\n\r\n\r\n\r\nKepada Yth :<br><br>\r\n\r\nBapak, Ibu Guru dan Pemerhati Pendidikan.<br><br>\r\n\r\n\r\nDalam rangka Ajang Kompetisi Robot IMAGINE RISTEK 2012 bertema TAWURAN BARENG ROBOT,<br><br>\r\n\r\nDengan semangat STOP Tawuran ber-kekerasan dan AYO Tawuran ber-teknologi untuk mengasah mental <br>menjadi jiwa â€“jiwa  pejuang yang kreatif, inovatif dan sportif.<br><br>\r\n\r\nKami mengundang Bapak, Ibu Guru dan Pemerhati Pendidikan untuk ikut hadir pada SEMINAR STEM yang<br>akan dibawakan oleh Mr. Laurenz Wohlfarth sebagai Direktur fischertechnik GmbH â€“ Jerman pada<br><br>\r\n\r\n          Hari/tgl    : Rabu, 31 Okt 2012<br><br>\r\n\r\n          Jam        : 10.30-12.00<br><br>\r\n\r\n          Tempat   : Plenary Hall â€“ Jakarta Convention Center<br><br>\r\n\r\n\r\nArena Ajang Kompetisi Robot IMAGINE RISTEK 2012<br><br>\r\n\r\nSetelah Seminar akan dilanjutkan dengan Pembukaan Ajang Kompetisi yang akan dilakukan oleh<br><br>\r\n\r\nPejabat dari Kementerian RISTEK. <br><br>\r\n\r\nPeserta akan mendapat Sertifikat dari Kementerian RISTEK dan ditanda tangani juga oleh Mr. Laurenz Wohlfarth. <br><br>\r\n\r\nUntuk masuk Area Jakarta Convention Center, Tidak dipungut biaya, bila membawa Formulir Pendaftaran.<br><br>\r\n\r\nPeserta mendapatkan GoodyBag & Makan siang.  Ajang ini berlangsung di antara Pameran Komputer<br>INDOCOMTECH, JAKARTA GAMES SHOW dan Motorcyle Show.<br><br>\r\n\r\nSalam<br><br>\r\n\r\nLucas C. Gee', '2014-03-13', '09:25:24', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kepegawaian`
--

CREATE TABLE IF NOT EXISTS `tb_kepegawaian` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `title` text NOT NULL,
  `NIP` varchar(20) NOT NULL,
  `guru_diklat` text NOT NULL,
  `Kopetensi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_kepegawaian`
--

INSERT INTO `tb_kepegawaian` (`id`, `nama`, `title`, `NIP`, `guru_diklat`, `Kopetensi`) VALUES
(1, 'H. Asep Rusmana', 'M.M.Pd', '196203201988111001', 'Produktif Elektronika', 'Kepala Sekolah'),
(2, 'Hendi Hadiansah', 'S.Pd', '197303192000031003', 'Produktif TKJ', 'Teknik Komputer Jaringan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_prasarana`
--

CREATE TABLE IF NOT EXISTS `tb_prasarana` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `n_brg` varchar(255) NOT NULL,
  `jml` int(7) NOT NULL,
  `ket` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_prasarana`
--

INSERT INTO `tb_prasarana` (`id`, `n_brg`, `jml`, `ket`) VALUES
(1, 'Access Point', 15, 'Baik');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_hubin`
--
ALTER TABLE `tbl_hubin`
  ADD CONSTRAINT `tbl_hubin_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tbl_kesiswaan` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_kesiswaan`
--
ALTER TABLE `tbl_kesiswaan`
  ADD CONSTRAINT `tbl_kesiswaan_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tbl_tatausaha` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_kurikulum_s1`
--
ALTER TABLE `tbl_kurikulum_s1`
  ADD CONSTRAINT `tbl_kurikulum_s1_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tbl_hubin` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_kurikulum_s2`
--
ALTER TABLE `tbl_kurikulum_s2`
  ADD CONSTRAINT `tbl_kurikulum_s2_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tbl_kurikulum_s1` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_kurikulum_s3`
--
ALTER TABLE `tbl_kurikulum_s3`
  ADD CONSTRAINT `tbl_kurikulum_s3_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tbl_kurikulum_s2` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_kurikulum_s4`
--
ALTER TABLE `tbl_kurikulum_s4`
  ADD CONSTRAINT `tbl_kurikulum_s4_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tbl_kurikulum_s3` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_kurikulum_s5`
--
ALTER TABLE `tbl_kurikulum_s5`
  ADD CONSTRAINT `tbl_kurikulum_s5_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tbl_kurikulum_s4` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
