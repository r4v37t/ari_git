-- phpMyAdmin SQL Dump
-- version 2.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 25, 2015 at 07:23 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `smpn9`
--
CREATE DATABASE `smpn9` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `smpn9`;

-- --------------------------------------------------------

--
-- Table structure for table `blog_album`
--

CREATE TABLE IF NOT EXISTS `blog_album` (
  `album_id` int(11) NOT NULL auto_increment,
  `nama` varchar(255) NOT NULL,
  `ref` int(11) NOT NULL,
  PRIMARY KEY  (`album_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `blog_album`
--

INSERT INTO `blog_album` (`album_id`, `nama`, `ref`) VALUES
(1, 'Album Pertama', 2);

-- --------------------------------------------------------

--
-- Table structure for table `blog_anggota`
--

CREATE TABLE IF NOT EXISTS `blog_anggota` (
  `anggota_id` int(11) NOT NULL auto_increment,
  `nis` varchar(10) NOT NULL,
  `ref` int(11) NOT NULL,
  PRIMARY KEY  (`anggota_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `blog_anggota`
--

INSERT INTO `blog_anggota` (`anggota_id`, `nis`, `ref`) VALUES
(2, '001', 2);

-- --------------------------------------------------------

--
-- Table structure for table `blog_buku`
--

CREATE TABLE IF NOT EXISTS `blog_buku` (
  `buku_id` int(11) NOT NULL auto_increment,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `web` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tgl` date NOT NULL,
  `status` int(11) NOT NULL,
  `ref` int(11) NOT NULL,
  PRIMARY KEY  (`buku_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `blog_buku`
--

INSERT INTO `blog_buku` (`buku_id`, `nama`, `email`, `web`, `isi`, `tgl`, `status`, `ref`) VALUES
(2, 'nama', 'email@mail.com', 'www.adadeh.com', 'sangat bagus dan informatif', '2015-05-19', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `blog_foto`
--

CREATE TABLE IF NOT EXISTS `blog_foto` (
  `foto_id` int(11) NOT NULL auto_increment,
  `album_id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY  (`foto_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `blog_foto`
--

INSERT INTO `blog_foto` (`foto_id`, `album_id`, `foto`) VALUES
(1, 1, 'blog/1.png');

-- --------------------------------------------------------

--
-- Table structure for table `blog_konten`
--

CREATE TABLE IF NOT EXISTS `blog_konten` (
  `konten_id` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  PRIMARY KEY  (`konten_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_konten`
--

INSERT INTO `blog_konten` (`konten_id`, `isi`) VALUES
('sambutan:2', 'ini kata sambutan blog'),
('sambutan:3', 'ini sambutan'),
('struktur:2', 'upload_blog/groei-zppers.jpg'),
('struktur:3', 'ini struktur'),
('visimisi:2', 'ini halaman visi dan misi'),
('visimisi:3', 'ini visimisi');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  `ref` int(11) NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `nama`, `level`, `ref`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 99, 0),
('inggris', 'cb11dc6d02a426a39c05228fae3111c4', 'Tindong, S.Pd', 50, 7),
('ips', 'de56be8fa19339d679efa6232455f342', 'Manca, S. Pd', 50, 10),
('agama', 'b89e3f1608494459a67d52199b89f450', 'Drs. Moh. Na`im', 50, 4),
('indo', '882838be9bb614de4c630fe8f6ab900c', ' Yatini, S.Pd', 50, 6),
('sia', '07af7e75676eab410d1f83937d7afb62', 'Admin SIA', 20, 0),
('vii-a', '095551771f625cf39d64fe23c057bcb3', 'Drs. Moh. Na`im', 40, 5),
('web', '2567a5ec9705eb7ac2c984033e06189d', 'Admin Website', 10, 0),
('mtk', 'dd78108d2f7283a9534e1de8d74e4c9a', 'Norhapni, S.Pd', 50, 8),
('ipa', 'ae3272062ae7edb666e8dd33eda728be', 'Nina Kirana, S.Pd', 50, 9),
('penjaskes', 'bceb71ef247b970a62fe659ef091b582', ' Rustika, S.Pd', 50, 11),
('seni', '7906899a18b96a3f8142fa93a0da4e74', ' Yuspin M. Ntuna, S.Pd, MM', 50, 12),
('lokal', '4e9f64db8688bef5454711262966a3c9', 'Yukasih, S.Pd', 50, 13),
('pkn', '83b35feb6cfbc930c181bf16ce1adc55', 'Udang Rusiana, S.Pd', 50, 5);

-- --------------------------------------------------------

--
-- Table structure for table `sia_absensi`
--

CREATE TABLE IF NOT EXISTS `sia_absensi` (
  `absensi_id` int(11) NOT NULL auto_increment,
  `walikelas_id` int(11) NOT NULL,
  `semes_id` int(11) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `ijin` int(11) NOT NULL,
  `sakit` int(11) NOT NULL,
  `alpha` int(11) NOT NULL,
  PRIMARY KEY  (`absensi_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `sia_absensi`
--

INSERT INTO `sia_absensi` (`absensi_id`, `walikelas_id`, `semes_id`, `nis`, `ijin`, `sakit`, `alpha`) VALUES
(5, 4, 2, '3132', 0, 0, 0),
(4, 4, 2, '3131', 0, 0, 0),
(6, 4, 2, '3133', 0, 0, 0),
(7, 4, 2, '3134', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sia_detail`
--

CREATE TABLE IF NOT EXISTS `sia_detail` (
  `detail_id` int(11) NOT NULL auto_increment,
  `kelas_id` int(11) NOT NULL,
  `semes_id` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  PRIMARY KEY  (`detail_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `sia_detail`
--

INSERT INTO `sia_detail` (`detail_id`, `kelas_id`, `semes_id`, `mapel_id`, `nip`) VALUES
(5, 5, 2, 10, '19570305 198403 1 015'),
(6, 5, 2, 4, '19621110 199802 1 001'),
(7, 5, 2, 6, '19720908 199503 2 003'),
(8, 5, 2, 7, '19601113 198812 1 001'),
(9, 5, 2, 8, '19680409 199512 2 003'),
(10, 5, 2, 9, '19681105 199403 2 011'),
(11, 5, 2, 11, '19690604 199512 2 001'),
(12, 5, 2, 12, '19650520 198601 2 005'),
(13, 5, 2, 13, '19630516 198603 2 020'),
(14, 5, 2, 5, '19650627 198601 2 002');

-- --------------------------------------------------------

--
-- Table structure for table `sia_ekstra`
--

CREATE TABLE IF NOT EXISTS `sia_ekstra` (
  `ekstra_id` int(11) NOT NULL auto_increment,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(50) NOT NULL,
  PRIMARY KEY  (`ekstra_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sia_ekstra`
--

INSERT INTO `sia_ekstra` (`ekstra_id`, `nama`, `nip`) VALUES
(4, 'Pramuka', '19690604 199512 2 001'),
(5, 'PMR', '19621110 199802 1 001');

-- --------------------------------------------------------

--
-- Table structure for table `sia_guru`
--

CREATE TABLE IF NOT EXISTS `sia_guru` (
  `nip` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY  (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sia_guru`
--

INSERT INTO `sia_guru` (`nip`, `nama`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `foto`) VALUES
('19621110 199802 1 001', 'Drs. Moh. Na`im', 'Jl. Sapan I B No. 065', 'Banyuwangi', '1962-11-10', 'sia_upload/naim.jpg'),
('19650520 198601 2 005', 'Yuspin M. Ntuna, S.Pd, MM', 'Jl. Cumi-Cumi No. 238', 'Gorontalo', '1965-05-20', 'sia_upload/IMG.jpg'),
('19690604 199512 2 001', 'Rustika, S.Pd', 'Jl. Tangkalasa III No.3', 'Pendahara', '1969-06-04', 'sia_upload/IMG_0123 edit.jpg'),
('19650617 199103 2 011', 'Kafilah, S.Pd', 'Jl. Pilau No. 12', 'Tapin', '1965-06-17', 'sia_upload/kafilah.jpg'),
('19720908 199503 2 003', 'Yatini, S.Pd', 'Jl. Manyar III No.12', 'Palangkaraya', '1969-06-04', 'sia_upload/icon-female-teacher-2-hi.png'),
('19570305 198403 1 015', 'Manca, S. Pd', 'Jl. Penarung', 'Palangka Raya', '1957-03-20', 'sia_upload/manca.jpg'),
('19650211 198803 2 010', 'Darmatasiah, S.Pd', 'Jl. Hiu Putih VIII No.112', 'Palangka Raya', '1965-02-11', 'sia_upload/darma.jpg'),
('19681105 199403 2 011', 'Nina Kirana, S.Pd', 'Jl. Rajawali III No. 40', 'Palangka Raya', '1968-11-05', 'sia_upload/icon-female-teacher-2-hi.png'),
('19650416 198812 2 002', 'Salie, S.Pd', 'Jl. Jati', 'Buntok', '1965-04-16', 'sia_upload/icon-female-teacher-2-hi.png'),
('19641106 199512 1 002', 'Drs. Arifin', 'Jl. Danau Rangas No.15', 'Palangka Raya', '1964-11-06', 'sia_upload/arifin.jpg'),
('19630516 198603 2 020', 'Yukasih, S.Pd', 'Jl. Arwana III', 'Sampit', '1963-05-16', 'sia_upload/icon-female-teacher-2-hi.png'),
('19680409 199512 2 003', 'Norhapni, S.Pd', 'Jl. W. Coendert No. 121 A', 'Barito Selatan', '1968-04-09', 'sia_upload/icon-female-teacher-2-hi.png'),
('19601113 198812 1 001', 'Tindong, S.Pd', 'Jl. Sejahtera III', 'Palangkaraya', '1960-11-13', 'sia_upload/boy_icon.png'),
('19650627 198601 2 002', 'Udang Rusiana, S.Pd', 'Jl. Puas III', 'Palangka Raya', '1965-06-27', 'sia_upload/icon-female-teacher-2-hi.png');

-- --------------------------------------------------------

--
-- Table structure for table `sia_kelas`
--

CREATE TABLE IF NOT EXISTS `sia_kelas` (
  `kelas_id` int(11) NOT NULL auto_increment,
  `nama` varchar(30) NOT NULL,
  PRIMARY KEY  (`kelas_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `sia_kelas`
--

INSERT INTO `sia_kelas` (`kelas_id`, `nama`) VALUES
(6, 'Kelas VII-B'),
(5, 'Kelas VII-A'),
(7, 'Kelas VII-C'),
(8, 'Kelas VII-D');

-- --------------------------------------------------------

--
-- Table structure for table `sia_mapel`
--

CREATE TABLE IF NOT EXISTS `sia_mapel` (
  `mapel_id` int(11) NOT NULL auto_increment,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY  (`mapel_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `sia_mapel`
--

INSERT INTO `sia_mapel` (`mapel_id`, `nama`) VALUES
(5, 'PKN'),
(4, 'Agama '),
(6, 'Bahasa Indonesia'),
(7, 'Bahasa Inggris'),
(8, 'Matematika'),
(9, 'IPA'),
(10, 'IPS'),
(11, 'Penjaskes'),
(12, 'Seni Budaya'),
(13, 'Muatan Lokal');

-- --------------------------------------------------------

--
-- Table structure for table `sia_nilai`
--

CREATE TABLE IF NOT EXISTS `sia_nilai` (
  `nilai_id` int(11) NOT NULL auto_increment,
  `detail_id` varchar(2) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `k1k2` varchar(2) NOT NULL,
  `k1k2desk` text NOT NULL,
  `k3` varchar(2) NOT NULL,
  `k3desk` text NOT NULL,
  `k4` varchar(2) NOT NULL,
  `k4desk` text NOT NULL,
  `valid` int(11) NOT NULL,
  PRIMARY KEY  (`nilai_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sia_nilai`
--

INSERT INTO `sia_nilai` (`nilai_id`, `detail_id`, `nis`, `k1k2`, `k1k2desk`, `k3`, `k3desk`, `k4`, `k4desk`, `valid`) VALUES
(1, '1', '001', 'B', 'baik juga', 'A-', 'bagus', 'B+', 'cukup baik', 1),
(2, '3', '001', 'B', 'perlu ditingkatkan lagi', 'A', 'sangat baik', 'A-', 'cukup baik', 1),
(3, '1', '002', 'SB', 'a', 'A', 'a', 'A', 'a', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sia_semes`
--

CREATE TABLE IF NOT EXISTS `sia_semes` (
  `semes_id` int(11) NOT NULL auto_increment,
  `thnpel_id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `mulai` date NOT NULL,
  `akhir` date NOT NULL,
  PRIMARY KEY  (`semes_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sia_semes`
--

INSERT INTO `sia_semes` (`semes_id`, `thnpel_id`, `nama`, `mulai`, `akhir`) VALUES
(2, 2, 'Semester 1', '2015-05-01', '2015-10-01'),
(3, 2, 'Semester 2', '2015-10-01', '2016-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `sia_siswa`
--

CREATE TABLE IF NOT EXISTS `sia_siswa` (
  `nis` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `anak_ke` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `diterima_kelas` varchar(20) NOT NULL,
  `diterima_tgl` date NOT NULL,
  `ayah` varchar(100) NOT NULL,
  `ibu` varchar(100) NOT NULL,
  `alamat_ortu` varchar(100) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `wali` varchar(100) NOT NULL,
  `alamat_wali` varchar(100) NOT NULL,
  `telp_wali` varchar(50) NOT NULL,
  `pekerjaan_wali` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status_siswa` enum('Y','N') NOT NULL,
  PRIMARY KEY  (`nis`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sia_siswa`
--

INSERT INTO `sia_siswa` (`nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jk`, `agama`, `status`, `anak_ke`, `alamat`, `telp`, `asal`, `diterima_kelas`, `diterima_tgl`, `ayah`, `ibu`, `alamat_ortu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `wali`, `alamat_wali`, `telp_wali`, `pekerjaan_wali`, `foto`, `status_siswa`) VALUES
('3131', 'Ahmad Gibra Maulana', 'Kuala Kapuas', '2015-05-25', 'Laki-laki', 'Islam', 'Anak Kandung', '2', 'Jl. Hiu Putih VII No.19', '0812 91 255 777', 'SDN 1 Menteng Palangka Raya', 'VII', '2014-07-21', 'Ahmad Maulana', 'Fatimah', 'Jl. Hiu Putih VII No.19', 'PNS', 'PNS', '-', '-', '-', '-', 'sia_upload/aaaaaaaaaaaaaaaaaaaaa.jpg', 'Y'),
('3132', 'Alex Jaya Saputra', 'Palangka Raya', '2001-01-31', 'Laki-laki', 'Islam', 'Anak Kandung', '2', 'Jl. Danau Rangas Km 6.5', '0853 4575 2345', 'SDN 5 Bukit Tunggal', 'VII', '2014-07-21', 'Tampir S.I', 'Liyana', 'Jl. Danau Rangas Km 6.5', 'SWASTA', 'SWASTA', '-', '-', '-', '-', 'sia_upload/yoko.png', 'Y'),
('3133', 'Dede Yusuf', 'Tewang Kantang', '2002-09-14', 'Laki-laki', 'Kristen Protestan', 'Anak Kandung', '1', 'Jl. Bandeng No.170', '0853 4575 4456', 'SDN 5 Bukit Tunggal', 'VII', '2014-07-21', 'Yopi Z.', 'Maria', 'Jl. Bandeng No.170', 'SWASTA', 'SWASTA', '-', '-', '-', '-', 'sia_upload/siswa-m.png', 'Y'),
('3134', 'Devani Agusta Reatiyana', 'Palangka Raya', '2002-03-08', 'Perempuan', 'Islam', 'Anak Kandung', '2', 'Jl. Danau Rangas Km 6.5', '0813 5567 9901', 'SDN 1 Bukit Tunggal', 'VII', '2014-07-21', 'Suryono', 'Marni', 'Jl. Danau Rangas Km 6.5', 'SWASTA', 'SWASTA', '-', '-', '-', '-', 'sia_upload/siswa-f.png', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `sia_thnpel`
--

CREATE TABLE IF NOT EXISTS `sia_thnpel` (
  `thnpel_id` int(11) NOT NULL auto_increment,
  `nama` varchar(50) NOT NULL,
  `mulai` date NOT NULL,
  `akhir` date NOT NULL,
  PRIMARY KEY  (`thnpel_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sia_thnpel`
--

INSERT INTO `sia_thnpel` (`thnpel_id`, `nama`, `mulai`, `akhir`) VALUES
(2, '2015/2016', '2015-05-01', '2016-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `sia_walikelas`
--

CREATE TABLE IF NOT EXISTS `sia_walikelas` (
  `walikelas_id` int(11) NOT NULL auto_increment,
  `kelas_id` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  PRIMARY KEY  (`walikelas_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `sia_walikelas`
--

INSERT INTO `sia_walikelas` (`walikelas_id`, `kelas_id`, `nip`) VALUES
(5, 6, '19690604 199512 2 001'),
(4, 5, '19621110 199802 1 001'),
(6, 7, '19650617 199103 2 011'),
(7, 8, '19570305 198403 1 015');

-- --------------------------------------------------------

--
-- Table structure for table `web_album`
--

CREATE TABLE IF NOT EXISTS `web_album` (
  `album_id` int(11) NOT NULL auto_increment,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY  (`album_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `web_album`
--

INSERT INTO `web_album` (`album_id`, `nama`) VALUES
(9, 'Guru');

-- --------------------------------------------------------

--
-- Table structure for table `web_alumni`
--

CREATE TABLE IF NOT EXISTS `web_alumni` (
  `nis` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `lulus` date NOT NULL,
  PRIMARY KEY  (`nis`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_alumni`
--


-- --------------------------------------------------------

--
-- Table structure for table `web_fasilitas`
--

CREATE TABLE IF NOT EXISTS `web_fasilitas` (
  `fasilitas_id` int(11) NOT NULL auto_increment,
  `nama` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `kondisi` varchar(100) NOT NULL,
  PRIMARY KEY  (`fasilitas_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `web_fasilitas`
--

INSERT INTO `web_fasilitas` (`fasilitas_id`, `nama`, `jumlah`, `kondisi`) VALUES
(2, 'Ruangan Kelas', 3, 'Bagus');

-- --------------------------------------------------------

--
-- Table structure for table `web_foto`
--

CREATE TABLE IF NOT EXISTS `web_foto` (
  `foto_id` int(11) NOT NULL auto_increment,
  `album_id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY  (`foto_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `web_foto`
--

INSERT INTO `web_foto` (`foto_id`, `album_id`, `foto`) VALUES
(10, 9, 'galeri/IMG_0133 edit.jpg'),
(11, 9, 'galeri/IMG_0125 edit.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `web_konten`
--

CREATE TABLE IF NOT EXISTS `web_konten` (
  `konten_id` varchar(20) NOT NULL,
  `isi` text NOT NULL,
  PRIMARY KEY  (`konten_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_konten`
--

INSERT INTO `web_konten` (`konten_id`, `isi`) VALUES
('contact', '-2.2076975,113.9166855'),
('sambutan', 'Di era dunia tanpa batas (global) saat ini yang menuntut tidak adanya pembatasan antar negara dalam berkompetisi di setiap lini. Tantangan meraih masa depan bangsa semakin kompleks.\r\n\r\nPemanfaatan Teknologi Informasi (TI) secara optimal adalah solusi untuk menghadapinya, sebab Teknologi Informasi (TI) merupakan salah satu sumber daya yang apabila pengelolaannya maksimal mampu mempersempit kesenjangan informasi yang ada.\r\n\r\nHarapan ke depan dengan diluncurkannya situs SMP Negeri 9Palangka Raya ini walau dengan segala kekurangannya mampu mengakomodir kepentingan bersama baik bagi pihak internal sekolah maupun pihak lain (Orang tua siswa, komite sekolah, pemerintah, alumni, LSM, simpatisan/donatur).\r\n\r\nMari kita bangunSMP Neeri 9 Palangka Raya sebagai sekolah yang bermutu demi tercapainya Visi dan Misi Pembangunan Daerah untuk mengangkat dan mengharumkan Citra Bangsa di Mata Dunia.\r\n\r\nHormat Saya,\r\nKepala SMP Negeri 9 Palangka Raya\r\n\r\n\r\nYuspin M. Ntuna, S.Pd, MM'),
('struktur', 'upload/struktur organisasi smp9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `web_kurikulum`
--

CREATE TABLE IF NOT EXISTS `web_kurikulum` (
  `kuri_id` int(11) NOT NULL auto_increment,
  `mapel_id` varchar(11) collate latin1_general_ci NOT NULL,
  `bab` varchar(100) character set latin1 NOT NULL,
  `sub_bab` varchar(200) character set latin1 NOT NULL,
  `kurikulum` varchar(10) character set latin1 NOT NULL,
  PRIMARY KEY  (`kuri_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `web_kurikulum`
--

INSERT INTO `web_kurikulum` (`kuri_id`, `mapel_id`, `bab`, `sub_bab`, `kurikulum`) VALUES
(2, '8', 'Operasi hitung bilangan bulat dan pecahan', 'Menunjukkan perilaku konsisten dan teliti  dalam melakukan aktivitas di rumah, sekolah, dan masyarakat sebagai wujud implementasi pemahaman tentang operasi hitung bilangan bulat dan pecahan', '2013');

-- --------------------------------------------------------

--
-- Table structure for table `web_pengda`
--

CREATE TABLE IF NOT EXISTS `web_pengda` (
  `pengda_id` int(11) NOT NULL auto_increment,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `tipe` int(11) NOT NULL,
  PRIMARY KEY  (`pengda_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `web_pengda`
--

INSERT INTO `web_pengda` (`pengda_id`, `judul`, `isi`, `tanggal`, `tipe`) VALUES
(2, 'Pengumuman Sekolah', 'Pengumuman', '2015-05-01 05:27:20', 1),
(4, 'Agenda Sekolah', 'Agenda', '2015-05-18 14:12:08', 2);

-- --------------------------------------------------------

--
-- Table structure for table `web_profil`
--

CREATE TABLE IF NOT EXISTS `web_profil` (
  `profil_id` int(11) NOT NULL auto_increment,
  `nama` varchar(255) NOT NULL,
  `nss` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kodepos` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `kel` varchar(255) NOT NULL,
  `kec` varchar(255) NOT NULL,
  `kab` varchar(255) NOT NULL,
  `prov` varchar(255) NOT NULL,
  `web` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY  (`profil_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `web_profil`
--

INSERT INTO `web_profil` (`profil_id`, `nama`, `nss`, `alamat`, `kodepos`, `telp`, `kel`, `kec`, `kab`, `prov`, `web`, `email`) VALUES
(1, 'SMP Negeri 9 Palangka Raya', '20.1.14.60.01.009', 'Jl. Hiu Putih', '73112', '0536 3231163', 'Bukit Tunggal', 'Jekan Raya', 'Palangka Raya', 'Kalimantan Tengah', 'www.smpn9pky.sch.id', '-');
