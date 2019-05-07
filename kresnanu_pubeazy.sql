-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06 Mei 2019 pada 20.08
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kresnanu_pubeazy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account_bank`
--

CREATE TABLE `account_bank` (
  `kode_bank` int(3) NOT NULL,
  `rekening` int(50) DEFAULT NULL,
  `nama_bank` varchar(100) DEFAULT NULL,
  `atas_nama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `account_bank`
--

INSERT INTO `account_bank` (`kode_bank`, `rekening`, `nama_bank`, `atas_nama`) VALUES
(1, 861213121, 'Bank Mandiri', 'Muhammad Jerry Permana '),
(3, 123456789, 'Bank BNI', 'Jerry Permana');

-- --------------------------------------------------------

--
-- Struktur dari tabel `conference`
--

CREATE TABLE `conference` (
  `konferensi_id` int(11) NOT NULL,
  `nama_konferensi` varchar(250) DEFAULT NULL,
  `penyelenggara` varchar(250) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `ruang_id` int(11) DEFAULT NULL,
  `show_dashboard` smallint(1) DEFAULT '0',
  `input_date` date DEFAULT NULL,
  `last_update` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `conference`
--

INSERT INTO `conference` (`konferensi_id`, `nama_konferensi`, `penyelenggara`, `start_date`, `end_date`, `ruang_id`, `show_dashboard`, `input_date`, `last_update`) VALUES
(8, 'Annual Conference On Health And Food Science Technology', 'Universitas NU Surabaya', '2019-07-10', '2019-08-09', 5, 1, '2019-05-04', '2019-05-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` smallint(2) NOT NULL,
  `contact_title` varchar(50) DEFAULT NULL,
  `contact_text` varchar(100) DEFAULT NULL,
  `address_title` varchar(50) DEFAULT NULL,
  `address_text` varchar(150) DEFAULT NULL,
  `phone_title` varchar(50) DEFAULT NULL,
  `phone_text` varchar(100) DEFAULT NULL,
  `email_title` varchar(50) DEFAULT NULL,
  `email_text` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `contact_title`, `contact_text`, `address_title`, `address_text`, `phone_title`, `phone_text`, `email_title`, `email_text`) VALUES
(1, 'Contact Us', 'Nihil officia ut sint molestiae tenetur.', 'Address', 'Universitas NU Surabaya', 'Phone Number', '(031) 8479070', 'Email', 'pubeazy@kresnanusantara.ac.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `homepage`
--

CREATE TABLE `homepage` (
  `id` int(10) NOT NULL,
  `about_title` varchar(100) NOT NULL,
  `about_text` text NOT NULL,
  `location_title` varchar(100) NOT NULL,
  `location_text` text NOT NULL,
  `when_title` varchar(100) NOT NULL,
  `when_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `homepage`
--

INSERT INTO `homepage` (`id`, `about_title`, `about_text`, `location_title`, `location_text`, `when_title`, `when_text`) VALUES
(1, 'PubEazy Conference', 'In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam porro. ', 'Event Location', 'Universitas NU Surabaya', 'When', '10 - 09 August 2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_jam`
--

CREATE TABLE `jadwal_jam` (
  `jam_id` int(11) NOT NULL,
  `jam` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal_jam`
--

INSERT INTO `jadwal_jam` (`jam_id`, `jam`) VALUES
(6, '08.00-09.00 WIB'),
(7, '09.00-10.00 WIB'),
(8, '10.00-12.00 WIB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `loa`
--

CREATE TABLE `loa` (
  `loa_id` int(11) NOT NULL,
  `paper_id` int(11) NOT NULL,
  `status` smallint(1) DEFAULT '0',
  `tanggal_verifikasi` date DEFAULT NULL,
  `input_date` date DEFAULT NULL,
  `last_update` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `loa`
--

INSERT INTO `loa` (`loa_id`, `paper_id`, `status`, `tanggal_verifikasi`, `input_date`, `last_update`) VALUES
(6, 4, 1, '2019-05-04', '2019-05-04', '2019-05-04'),
(7, 5, 1, '2019-05-04', '2019-05-04', '2019-05-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `realname` varchar(100) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `group_session` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`admin_id`, `email`, `realname`, `password`, `group_session`) VALUES
(1, 'admin@gmail.com', 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'admin@gmail.com', 'Jerry Permana', 'c20ad4d76fe97759aa27a0c99bff6710', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `loi`
--

CREATE TABLE `loi` (
  `id_loi` int(11) NOT NULL,
  `paper_id` int(11) NOT NULL,
  `status` smallint(1) DEFAULT NULL,
  `tanggal_verifikasi` date DEFAULT NULL,
  `input_date` date DEFAULT NULL,
  `last_update` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `loi`
--

INSERT INTO `loi` (`id_loi`, `paper_id`, `status`, `tanggal_verifikasi`, `input_date`, `last_update`) VALUES
(6, 4, 1, '2019-05-04', '2019-05-04', '2019-05-04'),
(7, 5, 1, '2019-05-04', '2019-05-04', '2019-05-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_email`
--

CREATE TABLE `mst_email` (
  `email_id` smallint(1) NOT NULL,
  `SMTP_Host` varchar(100) NOT NULL,
  `SMTP_User` varchar(100) NOT NULL,
  `SMTP_Pass` varchar(100) NOT NULL,
  `SMTP_Port` int(11) NOT NULL,
  `Mail_Protocol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mst_email`
--

INSERT INTO `mst_email` (`email_id`, `SMTP_Host`, `SMTP_User`, `SMTP_Pass`, `SMTP_Port`, `Mail_Protocol`) VALUES
(1, 'smtp.gmail.com', 'pubeazy.conf@gmail.com', 'blackberry123456', 465, 'smtp');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_keyword`
--

CREATE TABLE `mst_keyword` (
  `keyword_id` int(11) NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `input_date` date NOT NULL,
  `last_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mst_keyword`
--

INSERT INTO `mst_keyword` (`keyword_id`, `keyword`, `input_date`, `last_update`) VALUES
(45, 'KANKER', '2019-05-04', '2019-05-04'),
(46, 'OSTEOPOROSIS', '2019-05-04', '2019-05-04'),
(47, 'FISIKA', '2019-05-04', '2019-05-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_ruang`
--

CREATE TABLE `mst_ruang` (
  `ruang_id` int(11) NOT NULL,
  `nama_ruang` varchar(255) DEFAULT NULL,
  `kuota` int(5) DEFAULT NULL,
  `input_date` date DEFAULT NULL,
  `last_update` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mst_ruang`
--

INSERT INTO `mst_ruang` (`ruang_id`, `nama_ruang`, `kuota`, `input_date`, `last_update`) VALUES
(5, 'AAC Dayan Dawod', 100, '2019-05-04', '2019-05-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_subject`
--

CREATE TABLE `mst_subject` (
  `subject_id` int(11) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `input_date` date DEFAULT NULL,
  `last_update` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mst_subject`
--

INSERT INTO `mst_subject` (`subject_id`, `subject`, `input_date`, `last_update`) VALUES
(17, 'PHILOSOPHY', '2019-05-06', '2019-05-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_konferensi`
--

CREATE TABLE `paket_konferensi` (
  `paket_id` int(11) NOT NULL,
  `nama_paket` varchar(100) DEFAULT NULL,
  `biaya` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket_konferensi`
--

INSERT INTO `paket_konferensi` (`paket_id`, `nama_paket`, `biaya`) VALUES
(3, 'Full Package', '1.000.000'),
(4, 'Full Package ', '500.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paper`
--

CREATE TABLE `paper` (
  `paper_id` int(11) NOT NULL,
  `konferensi_id` int(11) NOT NULL,
  `id_presenter` bigint(11) NOT NULL,
  `type_presentation` smallint(1) DEFAULT NULL,
  `judul` text,
  `abstrak` text,
  `komentar` text,
  `file_paper` varchar(255) DEFAULT NULL,
  `file_fullpaper` varchar(255) DEFAULT NULL,
  `file_ppt` varchar(250) DEFAULT NULL,
  `full_paper` smallint(1) NOT NULL DEFAULT '0',
  `v_paper` smallint(1) DEFAULT NULL,
  `v_akhir` smallint(1) NOT NULL DEFAULT '0',
  `input_date` date DEFAULT NULL,
  `last_update` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paper`
--

INSERT INTO `paper` (`paper_id`, `konferensi_id`, `id_presenter`, `type_presentation`, `judul`, `abstrak`, `komentar`, `file_paper`, `file_fullpaper`, `file_ppt`, `full_paper`, `v_paper`, `v_akhir`, `input_date`, `last_update`) VALUES
(5, 8, 2, 1, 'ANALISIS BIAYA PASOKAN LIQUIFIED PETROLEUM GAS 3 KG BERSUBSIDI MENGGUNAKAN METODE PROGRAMA LINIER.', 'sifat fisika dan kimia tanah serta produksi berbagai jenis rumput yang ditanam pada lahan datar dan berlereng. tesis, program pascasarjana universitas syiah kuala, dibawah bimbingan hairul basri dan samadi. abstrak penelitian ini bertujuan untuk mengkaji karakteristik sifat fisika dan kimia tanah pada lahan datar dan berlereng terhadap produktivitas rumput. penelitian ini dilaksanakan dengan menggunakan metode deskriptif, melalui survei tanah dan pengamatan langsung di lapangan sedangkan untuk pengamatan produksi rumput dilakukan dengan cara mengambil ubinan pada berbagai jenis rumput, yakni sampel tanah diambil berukuran 2 x 2 meter. pengamatan didasarkan pada lahan datar dan berlereng pada berbagai jenis rumput selama 6 minggu. secara umum, hasil analisis laboratorium sifat fisika tanah dan kimia tanah menunjukkan pada lahan datar lebih baik dari lahan berlereng. pertumbuhan dan perkembangan rumput lampung lebih tinggi pada lahan datar dibandingkan dengan jenis', 'Masukkan Full Paper', 'Abstrak_2019-05-04_RJI-1-0001.docx ', 'FullPaper_2019-05-04_ RJI-1-0001.docx', NULL, 1, 1, 1, '2019-05-04', '2019-05-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paper_jadwal`
--

CREATE TABLE `paper_jadwal` (
  `jadwal_id` int(11) NOT NULL,
  `paper_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `jam_id` int(11) DEFAULT NULL,
  `kuota` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paper_jadwal`
--

INSERT INTO `paper_jadwal` (`jadwal_id`, `paper_id`, `date`, `jam_id`, `kuota`) VALUES
(10, 4, '2019-05-05', 7, 100),
(11, 5, '2019-07-11', 7, 50);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paper_keyword`
--

CREATE TABLE `paper_keyword` (
  `paper_id` int(11) NOT NULL,
  `keyword_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paper_keyword`
--

INSERT INTO `paper_keyword` (`paper_id`, `keyword_id`) VALUES
(4, 45),
(4, 46),
(5, 47),
(5, 48);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paper_subject`
--

CREATE TABLE `paper_subject` (
  `paper_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paper_subject`
--

INSERT INTO `paper_subject` (`paper_id`, `subject_id`) VALUES
(4, 15),
(5, 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int(11) NOT NULL,
  `member_id` varchar(20) DEFAULT NULL,
  `realname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `gender` smallint(1) DEFAULT NULL,
  `instansi` varchar(250) DEFAULT NULL,
  `no_hp` varchar(25) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `group_session` varchar(25) DEFAULT NULL,
  `input_date` date DEFAULT NULL,
  `last_update` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `member_id`, `realname`, `email`, `address`, `gender`, `instansi`, `no_hp`, `password`, `image`, `group_session`, `input_date`, `last_update`) VALUES
(3, 'RJI-2-0001', 'Muhammad Jerry Permana', 'jerrypermanaa@gmail.com', 'Banda Aceh', 1, 'Universitas Syiah Kuala ', '085277772698', 'c20ad4d76fe97759aa27a0c99bff6710', NULL, 'peserta', '2019-05-04', '2019-05-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `presenter`
--

CREATE TABLE `presenter` (
  `id_presenter` int(11) NOT NULL,
  `member_id` varchar(20) NOT NULL,
  `realname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` smallint(1) NOT NULL,
  `address` varchar(250) DEFAULT NULL,
  `instansi` varchar(250) DEFAULT NULL,
  `afiliasi` varchar(50) DEFAULT NULL,
  `negara_afiliasi` varchar(50) DEFAULT NULL,
  `alamat_afiliasi` varchar(250) DEFAULT NULL,
  `url_orcid` varchar(250) DEFAULT NULL,
  `url_profil` varchar(250) DEFAULT NULL,
  `no_hp` varchar(25) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `group_session` varchar(25) NOT NULL,
  `input_date` date NOT NULL,
  `last_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `presenter`
--

INSERT INTO `presenter` (`id_presenter`, `member_id`, `realname`, `email`, `gender`, `address`, `instansi`, `afiliasi`, `negara_afiliasi`, `alamat_afiliasi`, `url_orcid`, `url_profil`, `no_hp`, `image`, `password`, `group_session`, `input_date`, `last_update`) VALUES
(1, 'RJI-1-0001', 'Mochammad Tanzil Multazam', 'tanzilmultazam@umsida.ac.id', 1, 'Sidoarjo', 'Universitas Muhammadiyah Sidoarjo ', NULL, NULL, NULL, NULL, NULL, '087859698383', NULL, 'e10adc3949ba59abbe56e057f20f883e', 'presenter', '2019-05-04', '2019-05-04'),
(2, 'RJI-1-0001', 'Jerry Permana', 'jerrypermanaa@gmail.com', 1, 'Banda Aceh', 'Universitas Syiah Kuala ', 'Jakarta', 'Indonesia', 'Banda Aceh', 'http://localhost/pubeazy/pages/index.php?p=edit-presenter', 'http://localhost/pubeazy/pages/index.php?p=edit-presenter', '085277772698', 'IMAGE_RJI-1-0001.jpg', '25d55ad283aa400af464c76d713c07ad', 'presenter', '2019-05-04', '2019-05-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reviewer`
--

CREATE TABLE `reviewer` (
  `reviewer_id` int(11) NOT NULL,
  `realname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `status_active` smallint(1) DEFAULT NULL,
  `group_session` varchar(50) DEFAULT NULL,
  `input_date` date DEFAULT NULL,
  `last_update` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reviewer`
--

INSERT INTO `reviewer` (`reviewer_id`, `realname`, `email`, `password`, `status_active`, `group_session`, `input_date`, `last_update`) VALUES
(5, 'Muhammad Yasir Al', 'al@gmail.com', '25d55ad283aa400af464c76d713c07ad', 1, 'reviewer', '2019-05-04', '2019-05-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `speakers`
--

CREATE TABLE `speakers` (
  `speaker_id` smallint(2) NOT NULL,
  `speaker_name` varchar(100) DEFAULT NULL,
  `institution` varchar(100) DEFAULT NULL,
  `about_speaker` text,
  `sequance` smallint(2) DEFAULT NULL,
  `image_speaker` varchar(100) DEFAULT NULL,
  `input_date` date DEFAULT NULL,
  `last_update` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `speakers`
--

INSERT INTO `speakers` (`speaker_id`, `speaker_name`, `institution`, `about_speaker`, `sequance`, `image_speaker`, `input_date`, `last_update`) VALUES
(2, 'Prof. Dr. Prayitno, M.Sc. Ed', 'Universitas Negeri Padang, Indonesia', '<p>\r\n\r\nProf. Dr. Prayitno, M.Sc. Ed. is an Emeritus Professor in Department of Guidance and Counseling at Universitas Negeri Padang, Indonesia. He got master and doctoral degree from Indiana University (US). He also joined the non-degree of <em>Colombo Plan </em>(SCAEP) in education planning and curriculum development at Macquarie University, &nbsp; Sydney, Australia. He is a member of American Counseling Association (ACA). Besides writing books and journal, he has presented paper and workshop in national and international conference in Indonesia, Malaysia, etc. Some of his publications are: Buku Saku Butir â€“ Butir Nilai Karakter â€“ Cerdas (2011); Sosok Keilmuan Ilmu Pendidikan (2011); Pembelajaran Karakter-Cerdas : Format Klasikal dan Non-Klasikal / Kelompok) (2012); Seri Pemandu Pengembangan Penghayatan dan Pengamalan Nilai-nilai Karakter-Cerdas (P3N-KC) (2012); Materi Karakter-Cerdas dalam Pembelajaran (Modul Sertifikasi Guru Dalam Jabatan) (2012); Modul Kependidikan Pendidikan Profesi Pendidik : Kaidah Keilmuan Pendidikan dalam Belajar dan Pembelajaran (JILID 1 dan 2) (2012); Kumpulan Pidato Pengukuhan Guru Besar IKIP Padang / UNP (2012); Kumpulan Pidato Rektor IKIP Padang / UNP (2012); Konseling Integritas (2013); Pembelajaran Melalui Pelayanan Bimbingan dan Konseling di Satuan â€“ Satuan Pendidikan (2013); Keluhuran IQRAâ€™ untuk Kehidupan (2015); Pelayanan Konseling Profesional yang Berhasil (2015); He involve in various trauma healing in Aceh after the Tsunami, West Sumatera. He has numerous publication that can be visited at <a target=\"_blank\" rel=\"nofollow\" href=\"https://scholar.google.co.id/citations?user=gaPfOkYAAAAJ&amp;hl=en\">Google Scholar</a>.\r\n\r\n<br></p>', 1, 'Speakers_1.jpg', '2019-05-03', '2019-05-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `status_id` int(2) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`status_id`, `status`) VALUES
(1, 'Accepted'),
(2, 'Reject'),
(3, 'Revision Required');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_peserta`
--

CREATE TABLE `transaksi_peserta` (
  `transfer_id` int(11) NOT NULL,
  `id_peserta` int(11) DEFAULT NULL,
  `konferensi_id` int(11) DEFAULT NULL,
  `paket_id` int(11) DEFAULT NULL,
  `nama_transfer` varchar(250) DEFAULT NULL,
  `jumlah_transfer` varchar(50) DEFAULT NULL,
  `kode_bank` int(4) DEFAULT NULL,
  `tgl_transfer` date DEFAULT NULL,
  `v_transfer` smallint(1) NOT NULL DEFAULT '0',
  `file_bukti` varchar(250) DEFAULT NULL,
  `input_date` date DEFAULT NULL,
  `last_update` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi_peserta`
--

INSERT INTO `transaksi_peserta` (`transfer_id`, `id_peserta`, `konferensi_id`, `paket_id`, `nama_transfer`, `jumlah_transfer`, `kode_bank`, `tgl_transfer`, `v_transfer`, `file_bukti`, `input_date`, `last_update`) VALUES
(3, 3, 8, 4, 'Jerry', '800.000', 1, '2019-05-10', 1, 'Transfer_2019-05-04_3.jpg', '2019-05-04', '2019-05-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_presenter`
--

CREATE TABLE `transaksi_presenter` (
  `transfer_id` int(11) NOT NULL,
  `paper_id` int(11) NOT NULL,
  `biaya_conf` varchar(50) DEFAULT NULL,
  `nama_transfer` varchar(250) DEFAULT NULL,
  `jumlah_transfer` varchar(50) DEFAULT NULL,
  `from_bank` varchar(50) DEFAULT NULL,
  `kode_bank` int(4) DEFAULT NULL,
  `tgl_transfer` date DEFAULT NULL,
  `v_transfer` smallint(1) DEFAULT '0',
  `file_bukti` varchar(250) DEFAULT NULL,
  `input_date` date DEFAULT NULL,
  `last_update` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi_presenter`
--

INSERT INTO `transaksi_presenter` (`transfer_id`, `paper_id`, `biaya_conf`, `nama_transfer`, `jumlah_transfer`, `from_bank`, `kode_bank`, `tgl_transfer`, `v_transfer`, `file_bukti`, `input_date`, `last_update`) VALUES
(30, 5, '800.000', 'Jerry', '800.000', 'BNI', 1, '2019-05-04', 1, 'Transfer_2019-05-04_RJI-1-0001.jpg', '2019-05-04', '2019-05-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_bank`
--
ALTER TABLE `account_bank`
  ADD PRIMARY KEY (`kode_bank`);

--
-- Indexes for table `conference`
--
ALTER TABLE `conference`
  ADD PRIMARY KEY (`konferensi_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_jam`
--
ALTER TABLE `jadwal_jam`
  ADD PRIMARY KEY (`jam_id`);

--
-- Indexes for table `loa`
--
ALTER TABLE `loa`
  ADD PRIMARY KEY (`loa_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `loi`
--
ALTER TABLE `loi`
  ADD PRIMARY KEY (`id_loi`);

--
-- Indexes for table `mst_email`
--
ALTER TABLE `mst_email`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `mst_keyword`
--
ALTER TABLE `mst_keyword`
  ADD PRIMARY KEY (`keyword_id`);

--
-- Indexes for table `mst_ruang`
--
ALTER TABLE `mst_ruang`
  ADD PRIMARY KEY (`ruang_id`);

--
-- Indexes for table `mst_subject`
--
ALTER TABLE `mst_subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `paket_konferensi`
--
ALTER TABLE `paket_konferensi`
  ADD PRIMARY KEY (`paket_id`);

--
-- Indexes for table `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`paper_id`);

--
-- Indexes for table `paper_jadwal`
--
ALTER TABLE `paper_jadwal`
  ADD PRIMARY KEY (`jadwal_id`);

--
-- Indexes for table `paper_keyword`
--
ALTER TABLE `paper_keyword`
  ADD PRIMARY KEY (`paper_id`,`keyword_id`);

--
-- Indexes for table `paper_subject`
--
ALTER TABLE `paper_subject`
  ADD PRIMARY KEY (`paper_id`,`subject_id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `presenter`
--
ALTER TABLE `presenter`
  ADD PRIMARY KEY (`id_presenter`);

--
-- Indexes for table `reviewer`
--
ALTER TABLE `reviewer`
  ADD PRIMARY KEY (`reviewer_id`);

--
-- Indexes for table `speakers`
--
ALTER TABLE `speakers`
  ADD PRIMARY KEY (`speaker_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `transaksi_peserta`
--
ALTER TABLE `transaksi_peserta`
  ADD PRIMARY KEY (`transfer_id`);

--
-- Indexes for table `transaksi_presenter`
--
ALTER TABLE `transaksi_presenter`
  ADD PRIMARY KEY (`transfer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_bank`
--
ALTER TABLE `account_bank`
  MODIFY `kode_bank` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `conference`
--
ALTER TABLE `conference`
  MODIFY `konferensi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` smallint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jadwal_jam`
--
ALTER TABLE `jadwal_jam`
  MODIFY `jam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `loa`
--
ALTER TABLE `loa`
  MODIFY `loa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loi`
--
ALTER TABLE `loi`
  MODIFY `id_loi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mst_email`
--
ALTER TABLE `mst_email`
  MODIFY `email_id` smallint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mst_keyword`
--
ALTER TABLE `mst_keyword`
  MODIFY `keyword_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `mst_ruang`
--
ALTER TABLE `mst_ruang`
  MODIFY `ruang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mst_subject`
--
ALTER TABLE `mst_subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `paket_konferensi`
--
ALTER TABLE `paket_konferensi`
  MODIFY `paket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `paper`
--
ALTER TABLE `paper`
  MODIFY `paper_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `paper_jadwal`
--
ALTER TABLE `paper_jadwal`
  MODIFY `jadwal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `presenter`
--
ALTER TABLE `presenter`
  MODIFY `id_presenter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reviewer`
--
ALTER TABLE `reviewer`
  MODIFY `reviewer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `speakers`
--
ALTER TABLE `speakers`
  MODIFY `speaker_id` smallint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi_peserta`
--
ALTER TABLE `transaksi_peserta`
  MODIFY `transfer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi_presenter`
--
ALTER TABLE `transaksi_presenter`
  MODIFY `transfer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
