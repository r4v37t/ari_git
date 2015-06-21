-- phpMyAdmin SQL Dump
-- version 2.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 18, 2015 at 10:08 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `smpn9`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_album`
--

CREATE TABLE `blog_album` (
  `album_id` int(11) NOT NULL auto_increment,
  `nama` varchar(255) NOT NULL,
  `ref` int(11) NOT NULL,
  PRIMARY KEY  (`album_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `blog_album`
--

INSERT INTO `blog_album` (`album_id`, `nama`, `ref`) VALUES
(1, 'Album Pertama', 2),
(2, 'Kegiatan PMR', 6),
(3, 'Kegiatan Pramuka', 7);

-- --------------------------------------------------------

--
-- Table structure for table `blog_anggota`
--

CREATE TABLE `blog_anggota` (
  `anggota_id` int(11) NOT NULL auto_increment,
  `nis` varchar(10) NOT NULL,
  `ref` int(11) NOT NULL,
  PRIMARY KEY  (`anggota_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `blog_anggota`
--

INSERT INTO `blog_anggota` (`anggota_id`, `nis`, `ref`) VALUES
(4, '3131', 6),
(5, '3132', 6),
(6, '3133', 6),
(7, '3134', 6),
(8, '3167', 7),
(9, '3180', 7),
(10, '3186', 7),
(11, '3165', 7);

-- --------------------------------------------------------

--
-- Table structure for table `blog_buku`
--

CREATE TABLE `blog_buku` (
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

CREATE TABLE `blog_foto` (
  `foto_id` int(11) NOT NULL auto_increment,
  `album_id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY  (`foto_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `blog_foto`
--

INSERT INTO `blog_foto` (`foto_id`, `album_id`, `foto`) VALUES
(1, 1, 'blog/1.png'),
(3, 2, 'blog/pmr.jpg'),
(4, 3, 'blog/DSC_0108.JPG'),
(5, 3, 'blog/peserta ulang janji.jpg'),
(6, 3, 'blog/peserta 2.jpg'),
(7, 2, 'blog/6736_1134260682112_1395158573_30517714_2469001_n.jpg'),
(8, 2, 'blog/6736_1133275057472_1395158573_30514357_5347063_n.jpg'),
(9, 2, 'blog/dsc00066.jpg'),
(10, 2, 'blog/PMR 1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog_konten`
--

CREATE TABLE `blog_konten` (
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
('visimisi:3', 'ini visimisi'),
('sambutan:5', 'Welcome To PMR'),
('struktur:5', 'ini struktur'),
('visimisi:5', 'ini visimisi'),
('sambutan:6', '<p style="text-align:justify">Tujuan pendidikan nasional adalah mencerdaskan kehidupan bangsa dan mengembangkan manusia seutuhnya, yaitu manusia yang beriman dan bertakwa kepada Tuhan Yang Maha Esa dan berbudi pekerti luhur, memiliki pengetahuan dan keterampilan, kesehatan jasmani dan rohani , keperibadian yang mantap dan mandiri serta memiliki rasa tanggung jawab terhadab masayarakat ,bangsa ,Negara dan agama.<br />\r\nPembinaan dan pengembangan jiwa dan semangat kemanusiaan di kalangan siswa dapat di laksanakan dengan pembinaan dan pengenbangan kepalang merahan kepada siswa , Palang Merah Remaja (PMR) yang merupakan dagian dari Palang Merah Indonesia (PMI) adalah salah satu wadah pembinaan dan pengembangan kepalang merahan kepada siswa , karena PMR mendidik siswa menjadi manusia yang memiliki kepribadian yang luhur dan mempersiapkan kader PMI yang baik dan mampu membantu melaksanakan tugas &ndash; tugas kemanusiaan.<br />\r\nSilihat dari misi dan tugas PMR tersebut maka PMR&nbsp;&nbsp;di sekolah harus dapat dilaksanakan dengan sebaik &ndash; naiknya&nbsp;&nbsp;dan benar , agar tujuan PMR di sekolah dapat memberikan arahan bagi pihak &ndash;pihak yang berkepentingan dalam pembinaan dan pengembangan di sekolah</p>\r\n\r\n<ol>\r\n	<li style="text-align:justify">Undang &ndash; Undang Republik Indonesia&nbsp;&nbsp;Nomor 20 tahun 2003 tentang system pendidikan Nasional</li>\r\n	<li style="text-align:justify">Perjanjian kerja sama Departemen Pendidikan dan Kebudayaan RI dengan Palang Merah Indonesia Nomor&nbsp;&nbsp;0118/U/1995: Nomor 0090 KEP/PP/V/95, tentang pembinaan dan pengembangan kepalang merahan di kalangan siswa , wajib belajar dan mahasiswa.</li>\r\n	<li style="text-align:justify">Keputusan mentri Pendidikan dan Kebudayaan RI Nomor : 0461/U/1984 tanggal 18 Oktober 1984 tentang pembinaan kesiswaan.</li>\r\n	<li style="text-align:justify">Keputusan bersama Departemen Pendidikan dan Kebudayaan RI dengan Palang Merah Indonesia Nomor D119/U/1996: Nomor 0320A KEP/PP/96 tanggal 7 Mei 1996 tentang tim pembinaan dan pengembangan kepalang merahan di kalangan siswa wajib belajar dan mahasiswa.</li>\r\n	<li style="text-align:justify">Keputusan Direktur Jendrak Pendidikan Dasar dan Menengah, Nomor :226/C/KEP/O/1992 tentang pedoman pembinaan kesiswaan</li>\r\n	<li style="text-align:justify">Surat edaran Direktur Jendral Pendidikan Nomor :1.1-52,1974, tanggal 20 Juni 1974 tentang pembentukan PMR di sekolah.</li>\r\n</ol>\r\n'),
('struktur:6', 'upload_blog/PMR STRUKTUR.jpg'),
('visimisi:6', '<p>VISI<br />\r\nMenciptakan manusia/remaja yang memiliki rasa kepedulian terhadap sesama sesuai 7 prinsip dasar gerakan palang merah dan bula sabit merah internasional serta Tri Bakti PMR.</p>\r\n\r\n<p>MISI</p>\r\n\r\n<ol>\r\n	<li>Misi kemanusiaan, berupa kerelaan menolong sesama tanpa membedakan yang satu dengan yang lain.</li>\r\n	<li>Misi pendidikan, dimana melalui kegiatan PMR iin kita dapat menciptakan suatu generasi penerus yang dapat dijadikan tauladan dan pemimpin bangsa.</li>\r\n</ol>\r\n'),
('sambutan:7', '<p style="text-align:justify"><span style="color:rgb(0, 0, 0); font-family:times new roman,serif; font-size:16px">Seiring dengan diberlakukannya kurikulum 2013 di tahun 2015. Pramuka ditetapkan sebagai extra kurikuler wajib yang harus dilaksanakan di setiap jenjang sekolah SD/MI, SMP/MTs, SMA/MA/SMK. Orientasi pengembangan kurikulum 2013 adalah tercapainya kompetensi yang berimbang antara sikap, keterampilan, dan pengetahuan, disamping cara pembelajarannya yang holistik dan menyenangkan. Kurikulum 2013 disiapkan untuk mencetak generasi yang siap di dalam menghadapi masa depan dengan kata lain untuk mengantisipasi perkembangan masa depan. Pertimbangan yang mendasar adalah akibat fenomena alam, sosial, seni, dan budaya.</span></p>\r\n'),
('struktur:7', 'upload_blog/PRAMUKA STRUKTUR.jpg'),
('visimisi:7', '<p style="text-align: center;"><strong>VISI</strong></p>\r\n\r\n<p style="text-align: justify;"><br />\r\nTantangan utama yang dihadapi oleh Gerakan Pramuka sebagai organisasi pendidikan nonformal yang turut berperan dalam pendidikan kaum muda Indonesia adalah bagaimana menempatkan organisasi dan kegiatan kepramukaan sebagai kegiatan yang menarik dalam kehidupan kaum muda.</p>\r\n\r\n<p style="text-align: justify;">Melalui kegiatan Gerakan Pramuka diharapkan karakter dan kepribadian kaum muda dapat dibina dan dikembangkan guna turutserta dalam pembangunan nasional, dalam hal ini Gerakan Pramuka menjadi wadah pembentukan karakter dan kepribadian kaum muda. Berdasarkan hal tersebut, ditetapkan Visi Gerakan Pramuka Tahun 2014&ndash;2019&nbsp;sebagai berikut:</p>\r\n\r\n<p style="text-align: center;"><strong>&rdquo;GERAKAN PRAMUKA MENJADI PILIHAN UTAMA&nbsp;BAGI PEMBENTUKAN KARAKTER KAUM MUDA&rdquo;</strong></p>\r\n\r\n<p style="text-align: center;">&nbsp;</p>\r\n\r\n<p style="text-align: justify;">&nbsp;</p>\r\n\r\n<p style="text-align: center;"><strong>MISI</strong></p>\r\n\r\n<p style="text-align: justify;">Gerakan Pramuka berkewajiban untuk memberikan peran dan kontribusinya kepada pembangunan masyarakat, bangsa dan negara. Berdasarkan hal tersebut, ditetapkan&nbsp;Misi Gerakan Pramuka sebagai berikut:</p>\r\n\r\n<ol>\r\n	<li style="text-align: justify;">MEWUJUDKAN GERAKAN PRAMUKA YANG MANDIRI DAN BERMUTU.</li>\r\n	<li style="text-align: justify;">MEMANTAPKAN SISTEM PENDIDIKAN GERAKAN PRAMUKA YANG MENANAMKAN NILAI-NILAI KEPRAMUKAAN BAGI KAUM MUDA.</li>\r\n</ol>\r\n'),
('sambutan:8', 'ini sambutan'),
('struktur:8', 'ini struktur'),
('visimisi:8', 'ini visimisi'),
('sambutan:14', 'ini sambutan'),
('struktur:14', 'ini struktur'),
('visimisi:14', 'ini visimisi');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
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
('sia', '07af7e75676eab410d1f83937d7afb62', 'Admin SIA', 20, 0),
('pkn', '83b35feb6cfbc930c181bf16ce1adc55', 'Yuspin M. Ntuna, S.Pd, MM', 50, 5),
('web', '2567a5ec9705eb7ac2c984033e06189d', 'Admin Website', 10, 0),
('pramuk', '0468e6e27d8cbfa296312b563371639e', 'Drs. Moh. Na`im', 30, 14),
('pmr', '2baba74f3ab8c4f508ce57085c17cd62', 'Rustika, S.Pd', 30, 8),
('agama', 'b89e3f1608494459a67d52199b89f450', 'Drs. Moh. Na`im', 50, 4),
('vii-a', '095551771f625cf39d64fe23c057bcb3', 'Drs. Moh. Na`im', 40, 10);

-- --------------------------------------------------------

--
-- Table structure for table `sia_absensi`
--

CREATE TABLE `sia_absensi` (
  `absensi_id` int(11) NOT NULL auto_increment,
  `kelas_id` int(11) NOT NULL,
  `semes_id` int(11) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `ijin` int(11) NOT NULL,
  `sakit` int(11) NOT NULL,
  `alpha` int(11) NOT NULL,
  PRIMARY KEY  (`absensi_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `sia_absensi`
--

INSERT INTO `sia_absensi` (`absensi_id`, `kelas_id`, `semes_id`, `nis`, `ijin`, `sakit`, `alpha`) VALUES
(22, 10, 2, '3132', 0, 0, 0),
(20, 10, 2, '3131', 2, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sia_detail`
--

CREATE TABLE `sia_detail` (
  `detail_id` int(11) NOT NULL auto_increment,
  `kelas_id` int(11) NOT NULL,
  `semes_id` int(11) NOT NULL,
  `mapel_id` int(11) NOT NULL,
  `nip` bigint(18) NOT NULL,
  PRIMARY KEY  (`detail_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `sia_detail`
--

INSERT INTO `sia_detail` (`detail_id`, `kelas_id`, `semes_id`, `mapel_id`, `nip`) VALUES
(27, 10, 2, 4, 196211101998021001),
(28, 10, 2, 5, 196505201986012005);

-- --------------------------------------------------------

--
-- Table structure for table `sia_ekstra`
--

CREATE TABLE `sia_ekstra` (
  `ekstra_id` int(11) NOT NULL auto_increment,
  `nama` varchar(100) NOT NULL,
  `nip` bigint(18) NOT NULL,
  PRIMARY KEY  (`ekstra_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `sia_ekstra`
--

INSERT INTO `sia_ekstra` (`ekstra_id`, `nama`, `nip`) VALUES
(8, 'PMR', 196906041995122001),
(14, 'PRAMUKA', 196211101998021001);

-- --------------------------------------------------------

--
-- Table structure for table `sia_guru`
--

CREATE TABLE `sia_guru` (
  `nip` bigint(18) NOT NULL,
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
(196211101998021001, 'Drs. Moh. Na`im', 'Jl. Sapan I B No. 065', 'Banyuwangi', '1962-11-10', 'sia_upload/naim.jpg'),
(196505201986012005, 'Yuspin M. Ntuna, S.Pd, MM', 'Jl. Cumi-Cumi No. 238', 'Gorontalo', '1965-05-20', 'sia_upload/yuspin.jpg'),
(196906041995122001, 'Rustika, S.Pd', 'Jl. Tangkalasa III No.3', 'Pendahara', '1969-06-04', 'sia_upload/IMG_0123 edit.jpg'),
(196506171991032011, 'Kafilah, S.Pd', 'Jl. Pilau No. 12', 'Tapin', '1965-06-17', 'sia_upload/kafilah.jpg'),
(197209081995032003, 'Yatini, S.Pd', 'Jl. Manyar III No.12', 'Palangkaraya', '1969-06-04', 'sia_upload/icon-female-teacher-2-hi.png'),
(195703051984031015, 'Manca, S. Pd', 'Jl. Penarung', 'Palangka Raya', '1957-03-20', 'sia_upload/manca.jpg'),
(196502111988032010, 'Darmatasiah, S.Pd', 'Jl. Hiu Putih VIII No.112', 'Palangka Raya', '1965-02-11', 'sia_upload/darma.jpg'),
(196811051994032011, 'Nina Kirana, S.Pd', 'Jl. Rajawali III No. 40', 'Palangka Raya', '1968-11-05', 'sia_upload/nina kirana.jpg'),
(196504161988122002, 'Salie, S.Pd', 'Jl. Jati', 'Buntok', '1965-04-16', 'sia_upload/salie.jpg'),
(196411061995121002, 'Drs. Arifin', 'Jl. Danau Rangas No.15', 'Palangka Raya', '1964-11-06', 'sia_upload/arifin.jpg'),
(196305161986032020, 'Yukasih, S.Pd', 'Jl. Arwana III', 'Sampit', '1963-05-16', 'sia_upload/yukasih.jpg'),
(196804091995122003, 'Norhapni, S.Pd', 'Jl. W. Coendert No. 121 A', 'Barito Selatan', '1968-04-09', 'sia_upload/icon-female-teacher-2-hi.png'),
(196011131988121001, 'Tindong, S.Pd', 'Jl. Sejahtera III', 'Palangkaraya', '1960-11-13', 'sia_upload/boy_icon.png'),
(196506271986012002, 'Udang Rusiana, S.Pd', 'Jl. Puas III', 'Palangka Raya', '1965-06-27', 'sia_upload/udang.jpg'),
(197103081992032008, 'Elisa Marlin, S.Pd', 'Jl. Arwana V', 'Palangka Raya', '1971-03-08', 'sia_upload/elisa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sia_kelas`
--

CREATE TABLE `sia_kelas` (
  `kelas_id` int(11) NOT NULL auto_increment,
  `nama` varchar(30) NOT NULL,
  PRIMARY KEY  (`kelas_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `sia_kelas`
--

INSERT INTO `sia_kelas` (`kelas_id`, `nama`) VALUES
(11, 'Kelas VII-B'),
(10, 'Kelas VII-A'),
(12, 'Kelas VII-C');

-- --------------------------------------------------------

--
-- Table structure for table `sia_mapel`
--

CREATE TABLE `sia_mapel` (
  `mapel_id` int(11) NOT NULL auto_increment,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY  (`mapel_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

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

CREATE TABLE `sia_nilai` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `sia_nilai`
--

INSERT INTO `sia_nilai` (`nilai_id`, `detail_id`, `nis`, `k1k2`, `k1k2desk`, `k3`, `k3desk`, `k4`, `k4desk`, `valid`) VALUES
(25, '28', '3131', 'SB', 'Sangat Baik', 'A', 'Tuntas', 'A', 'Tuntas', 1),
(24, '27', '3131', 'SB', 'tes', 'A', 'tes', 'A', 'tes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sia_semes`
--

CREATE TABLE `sia_semes` (
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

CREATE TABLE `sia_siswa` (
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
('3131', 'Ahmad Gibra Maulana', 'Kuala Kapuas', '2002-05-25', 'Laki-laki', 'Islam', 'Anak Kandung', '2', 'Jl. Hiu Putih VII No.19', '0812 91 255 777', 'SDN 1 Menteng Palangka Raya', 'VII', '2014-07-21', 'Ahmad Maulana', 'Fatimah', 'Jl. Hiu Putih VII No.19', 'PNS', 'PNS', '-', '-', '-', '-', 'sia_upload/aaaaaaaaaaaaaaaaaaaaa.jpg', 'Y'),
('3132', 'Alex Jaya Saputra', 'Palangka Raya', '2001-01-31', 'Laki-laki', 'Islam', 'Anak Kandung', '2', 'Jl. Danau Rangas Km 6.5', '0853 4575 2345', 'SDN 5 Bukit Tunggal', 'VII', '2014-07-21', 'Tampir S.I', 'Liyana', 'Jl. Danau Rangas Km 6.5', 'SWASTA', 'SWASTA', '-', '-', '-', '-', 'sia_upload/yoko.png', 'Y'),
('3133', 'Dede Yusuf', 'Tewang Kantang', '2002-09-14', 'Laki-laki', 'Kristen Protestan', 'Anak Kandung', '1', 'Jl. Bandeng No.170', '0853 4575 4456', 'SDN 5 Bukit Tunggal', 'VII', '2014-07-21', 'Yopi Z.', 'Maria', 'Jl. Bandeng No.170', 'SWASTA', 'SWASTA', '-', '-', '-', '-', 'sia_upload/siswa-m.png', 'Y'),
('3134', 'Devani Agusta Reatiyana', 'Palangka Raya', '2002-03-08', 'Perempuan', 'Islam', 'Anak Kandung', '2', 'Jl. Danau Rangas Km 6.5', '0813 5567 9901', 'SDN 1 Bukit Tunggal', 'VII', '2014-07-21', 'Suryono', 'Marni', 'Jl. Danau Rangas Km 6.5', 'SWASTA', 'SWASTA', '-', '-', '-', '-', 'sia_upload/siswa-f.png', 'Y'),
('3167', 'Arjun Priyanto', 'Bolongsari', '2002-09-09', 'Laki-laki', 'Islam', 'Anak Kandung', '2', 'Jl. Danau Rangas Km 6.5', '0536 3231163', 'MIN Langkai', 'VII', '2014-07-21', 'Muhammad Arya', 'Evi Riani', 'Jl. Danau Rangas Km 6.5', 'PNS', 'PNS', '-', '-', '-', '-', 'sia_upload/siswa-m.png', 'Y'),
('3180', 'Oktrie Kristiani', 'Palangka Raya', '2002-10-28', 'Perempuan', 'Kristen Protestan', 'Anak Kandung', '3', 'Jl. Rajawali VII No. 12', '0812 87 333 125', 'SDN 1 Bukit Tunggal', 'VII', '2014-07-21', 'Togap', 'Erni', 'Jl. Jl. Rajawali VII No. 12', 'SWASTA', 'SWASTA', '-', '-', '-', '-', 'sia_upload/siswa-f.png', 'Y'),
('3186', 'Taufik Rahman', 'Palangka Raya', '2002-07-21', 'Laki-laki', 'Islam', 'Anak Kandung', '3', 'Jl. Kutilang No. 04', '0536 3232167', 'MIN Langkai', 'VII', '2014-07-21', 'M. Iskandar', 'Tina', 'Jl. Kutilang No.04', 'PNS', 'SWASTA', '-', '-', '-', '-', 'sia_upload/siswa-m.png', 'Y'),
('3165', 'Andreas Aan Saputra', 'Palangka Raya', '2002-03-01', 'Laki-laki', 'Kristen Protestan', 'Anak Kandung', '2', 'Jl. Hiu Putih VII No.01', '0536 3231235', 'SDN 1 Menteng Palangka Raya', 'VII', '2014-07-21', 'Andreas', 'Isara', 'Jl. Hiu Putih VII No.01', 'PNS', 'PNS', '-', '-', '-', '-', 'sia_upload/siswa-m.png', 'Y'),
('3181', 'Roseta Nurjanika', 'Palangka Raya', '2002-01-18', 'Perempuan', 'Islam', 'Anak Kandung', '2', 'Jl. Badak Raya No. 114', '0812 5432 0345', 'SDN 5 Bukit Tunggal', 'VII', '2014-07-21', 'Muhammad Derry', 'Retnowati', 'Jl. Baday Raya No. 114', 'PNS', 'PNS', '-', '-', '-', '-', 'sia_upload/siswa-f.png', 'Y'),
('3169', 'Bagus Budi Dermawan', 'Tumbang Jutuh', '2002-08-31', 'Laki-laki', 'Islam', 'Anak Kandung', '2', 'Jl. Danau Rangas Km 6.5', '0536 3231246', 'SDN 5 Bukit Tunggal', 'VII', '2014-07-21', 'Yusuf Budiman', 'Desi Ratnasari', 'Jl. Danau Rangas Km 6.5', 'PNS', 'PNS', '-', '-', '-', '-', 'sia_upload/siswa-m.png', 'Y'),
('3187', 'Tiara Putri Maharani', 'Jakarta', '2002-12-10', 'Perempuan', 'Islam', 'Anak Kandung', '2', 'Jl. Puas Raya No. 45', '0536 3231876', 'SDN Pulau Harapan 01 Pagi', 'VII', '2014-07-21', 'Ahmad Fanani', 'Nana Maryana', 'Jl. Paus Raya No.45', 'PNS', 'SWASTA', '-', '-', '-', '-', 'sia_upload/siswa-f.png', 'Y'),
('3168', 'Axel Nathaniel', 'Palangka Raya', '2001-01-12', 'Laki-laki', 'Kristen Protestan', 'Anak Kandung', '2', 'Jl. Hiu Putih', '0536 3231663', 'SDN 1 Menteng Palangka Raya', 'VII', '2014-07-21', 'Jhon Franklin', 'Rosena', 'Jl. Hiu Putih', 'SWASTA', 'SWASTA', '-', '-', '-', '-', 'sia_upload/siswa-m.png', 'Y'),
('3163', 'Ahmad Afandi', 'Palangka Raya', '2002-06-30', 'Laki-laki', 'Islam', 'Anak Kandung', '2', 'Jl. Tangkalasa III No.15', '0813 5270 9255', 'SDN 1 Bukit Tunggal', 'VII', '2014-07-21', 'Arif Santosa', 'Malisa Wulandari', 'Jl. Tangkalasa III No.15', 'PNS', 'PNS', '-', '-', '-', '-', 'sia_upload/siswa-m.png', 'Y'),
('3162', 'Adrian Ari Pratama', 'Kuala Kapuas', '2002-01-18', 'Laki-laki', 'Islam', 'Anak Kandung', '3', 'Jl. Tingang No.45', '0536 3231866', 'MIN Langkai', 'VII', '2014-07-21', 'Willy Pratama', 'Ayu Aprina', 'Jl. Tingang No.45', 'PNS', 'PNS', '-', '-', '-', '-', 'sia_upload/siswa-m.png', 'Y'),
('3177', 'Kevin Carlos', 'Palangka Raya', '2002-02-10', 'Laki-laki', 'Kristen Protestan', 'Anak Kandung', '2', 'Jl. Podang No.75', '0536 3231145', 'SDN 5 Bukit Tunggal', 'VII', '2014-07-21', 'Kilat Kasangan', 'Ester Mariana', 'Jl. Podang No.75', 'PNS', 'PNS', '-', '-', '-', '-', 'sia_upload/siswa-m.png', 'Y'),
('2967', 'Alfaiz Faroko', 'Palangka Raya', '1992-05-21', 'Laki-laki', 'Islam', 'Anak Kandung', '1', 'Jl. Bandeng No.122', '0536 3231612', 'MIN Langkai', 'VII', '2004-07-21', 'Muhammad Rifa`i', 'Lailatun', 'Jl. Bandeng No.122', 'PNS', 'PNS', '-', '-', '-', '-', 'sia_upload/siswa-m.png', 'N'),
('2953', 'Ari Nur Fajarullah', 'Palangka Raya', '1992-02-03', 'Laki-laki', 'Islam', 'Anak Kandung', '1', 'Jl. Sapan I B No. 12', '0536 3231121', 'MIN Langkai', 'VII', '2004-07-21', 'Hairullah', 'Siti Fatimah', 'Jl. Sapan I B No. 12', 'PNS', 'PNS', '-', '-', '-', '-', 'sia_upload/siswa-m.png', 'N'),
('2941', 'Eviana', 'Kuala Kapuas', '1991-09-04', 'Perempuan', 'Islam', 'Anak Kandung', '1', 'Jl. Merak No.14', '0536 3231161', 'SDN 1 Bukit Tunggal', 'VII', '2004-07-21', 'Fachri Masigid', 'Nurul Jannah', 'Jl. Merak No.14', 'PNS', 'PNS', '-', '-', '-', '-', 'sia_upload/siswa-f.png', 'N'),
('1234', 'Ari Hidayatullah', 'Kuala Kapuas', '2015-06-01', 'Laki-laki', 'Islam', 'Anak Kandung', '1', 'Jl. Sapan I B No. 065', '0812 91 255 777', 'SDN 1 Menteng Palangka Raya', 'VII', '2014-07-21', 'Ahmad Maulana', 'Marni', 'Jl. Hiu Putih VII No.19', 'PNS', 'PNS', '-', '-', '-', '-', 'sia_upload/siswa-m.png', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `sia_thnpel`
--

CREATE TABLE `sia_thnpel` (
  `thnpel_id` int(11) NOT NULL auto_increment,
  `nama` varchar(50) NOT NULL,
  `mulai` date NOT NULL,
  `akhir` date NOT NULL,
  PRIMARY KEY  (`thnpel_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sia_thnpel`
--

INSERT INTO `sia_thnpel` (`thnpel_id`, `nama`, `mulai`, `akhir`) VALUES
(2, '2015/2016', '2015-05-01', '2016-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `sia_walikelas`
--

CREATE TABLE `sia_walikelas` (
  `kelas_id` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  PRIMARY KEY  (`kelas_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sia_walikelas`
--

INSERT INTO `sia_walikelas` (`kelas_id`, `nip`) VALUES
(10, '196211101998021001'),
(11, '196505201986012005'),
(12, '196906041995122001');

-- --------------------------------------------------------

--
-- Table structure for table `web_album`
--

CREATE TABLE `web_album` (
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

CREATE TABLE `web_alumni` (
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

INSERT INTO `web_alumni` (`nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `lulus`) VALUES
('2941', 'Eviana', 'Kuala Kapuas', '1991-09-04', '2007-05-06'),
('2953', 'Ari Nur Fajarullah', 'Palangka Raya', '1992-02-03', '2007-05-06'),
('2967', 'Alfaiz Faroko', 'Palangka Raya', '1992-05-21', '2007-05-06');

-- --------------------------------------------------------

--
-- Table structure for table `web_fasilitas`
--

CREATE TABLE `web_fasilitas` (
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

CREATE TABLE `web_foto` (
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

CREATE TABLE `web_konten` (
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
('struktur', 'upload/struktur smp9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `web_kurikulum`
--

CREATE TABLE `web_kurikulum` (
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

CREATE TABLE `web_pengda` (
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

CREATE TABLE `web_profil` (
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
