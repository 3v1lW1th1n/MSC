-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2019 at 03:51 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectpkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `JudulBerita` varchar(50) NOT NULL,
  `IsiBerita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `JudulBerita`, `IsiBerita`) VALUES
(1, 'Apa Itu Malang Smart City??', 'Ide mengenai smart city ialah kota cerdas/pintar yang inovatif menggunakan teknologi informasi dan komunikasi (TIK) yang berkelanjutan dalam membantu masyarakat mengelola sumber daya yang ada, memberikan informasi yang tepat, efisiensi operasi perkotaan, jasa, dan daya saing seiring dengan pemenuhan kebutuhan generasi saat ini dan setelahnya. Pada konsepnya, kota cerdas harus memungkinkan warga masyarakat untuk berperan secara aktif dalam pengelolaan kota dengan memberikan umpan balik kepada penyedia layanan, baik dari sektor privat maupun publik.');

-- --------------------------------------------------------

--
-- Table structure for table `einap`
--

CREATE TABLE `einap` (
  `DT_RowId` int(11) NOT NULL,
  `Alamat` text NOT NULL,
  `Telp` varchar(15) NOT NULL,
  `NamaRS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `einap`
--

INSERT INTO `einap` (`DT_RowId`, `Alamat`, `Telp`, `NamaRS`) VALUES
(1, 'Jl. Panglima Sudirman No.65, Karangploso, Girimoyo, Karangploso, Malang, Jawa Timur 65152', '(0341) 461634', 'Puskesmas Karangploso'),
(2, 'JL. Tohjoyo, No. III/1, Pangetan, Pagentan, Singosari, Malang, Jawa Timur 65153', '(0341) 458961', 'Puskesmas Singosari'),
(3, 'Jl. Dorowati, Ampelgading, Mulyoarjo, Lawang, Malang, Jawa Timur 65251', '', 'Puskesmas Lawang'),
(4, 'Jl. Setiawan No.227, Bokor III, Bokor, Tumpang, Malang, Jawa Timur 65156', '(0341) 787231', 'Puskesmas Tumpang'),
(5, 'Jl. Kusnan Marjuki No.101, Robyong, Wonomulyo, Poncokusumo, Malang, Jawa Timur 65175', '(0341) 787792', 'Puskesmas Poncokusumo'),
(6, 'Jl. Raya Kemantren No.40, Putuk Rejo, Kemantren, Jabung, Malang, Jawa Timur 65155', '(0341) 793141', 'Puskesmas Jabung'),
(7, 'Jl. Raya Pakis No.69, Krajan Barat, Pakisjajar, Pakis, Malang, Jawa Timur 65154', '(0341) 791549', 'Puskesmas Pakis'),
(10, 'Jl. Raya Ardimulyo No.2, Karangjati, Ardimulyo, Singosari, Malang, Jawa Timur 65153', '(0341) 458388', 'Puskesmas Ardimulyo'),
(12, 'Jl. Raya Sengkaling No.212, Sengkaling, Mulyoagung, Dau, Malang, Jawa Timur 65151', '(0341) 462123', 'Puskesmas Dau'),
(13, 'Jl. Brigjend Abd Manan Wijaya, Gesingan, Pujon Lor, Pujon, Malang, Jawa Timur 65391', '(0341) 624048', 'Puskesmas Pujon'),
(14, 'Jl. Raya Ngantang No.47, Prabon II, Kaumrejo, Ngantang, Malang, Jawa Timur 65392', '(0341) 521097', 'Puskesmas Ngantang'),
(15, 'Jl. Raya Kasembon No. 21 Kecamatan Kasembon, Bululawang, Malang, Jawa Timur 65171 ', '(0354) 326264', 'Puskesmas Kasembon'),
(16, 'Jl. Jatirejoyoso No.4, Dawukan, Jatirejoyoso, Kepanjen, Malang, Jawa Timur 65163', '(0341) 396726', 'Puskesmas Kepanjen'),
(17, 'Jl. Jend. Sudirman No.2, Dusun Pakel, Sumberpucung, Sumber Pucung, Malang, Jawa Timur 65165', '(0341) 385230', 'Puskesmas Sumber Pucung'),
(18, 'Jl. Nailun Utara, Kec. Kromengan, Kab Malang, Jawa Timur 65165', '(0341) 384273', 'Puskesmas Kromengan'),
(19, 'Jl. Raya Pakisaji No.19, Jatirejo, Pakisaji, Malang, Jawa Timur 65162', '(0341) 802932', 'Puskesmas Pakisaji'),
(20, 'Jl. Ahmad Yani No.18, Ngajum, Malang, Jawa Timur 65164', '(0341) 398100', 'Puskesmas Ngajum'),
(21, 'Bumireja Kidul, Kebobang, Wonosari, Malang, Jawa Timur 65164', '(0341) 370114', 'Puskesmas Wonosari'),
(22, 'Jl. Raya Jedong, Krobyokan, Jedong, Wagir, Malang, Jawa Timur 65158', '(0341) 7660353', 'Puskesmas Wagir'),
(23, 'Jl. Hamid Rusdi No.84, Sumbernongko, Pagak, Malang, Jawa Timur 65168', '(0341) 311002', 'Puskesmas Pagak'),
(24, 'Jl. Ahmad Yani, Kulon Kali, Sumbermanjing Kulon, Pagak, Malang, Jawa Timur 65168', '', 'Puskesmas Sumbermanjing Kulon'),
(25, 'Jl Raya No.343, Donomulyo, Dono Mulyo, Donomulyo, Malang, Jawa Timur 65167', '(0341) 881113', 'Puskesmas Donomulyo'),
(26, 'Jl. Raya Kalipare No.210, Kalipare, Malang, Jawa Timur 65166', '(0341) 311118', 'Puskesmas Kalipare'),
(27, 'Jl. Raya Bantur, Banturkrajan, Bantur, Malang, Jawa Timur 65179', '(0341) 841113', 'Puskesmas Bantur'),
(28, 'Jl. Raya Wonokerto - Bantur, RT.4/RW.1, Wonokerto Krajan, Wonokerto, Bantur, Malang, Jawa Timur 67381', '(0341) 879495', 'Puskesmas Wonokerto'),
(29, 'Jl. A. Yani No.330, Megersari, Gedangan, Kabupaten Sidoarjo, Jawa Timur 61254', '(031) 8533726', 'Puskesmas Gedangan'),
(30, 'Jl. Diponegoro No.62, Krajan Satu, Gondanglegi Kulon, Gondanglegi, Malang, Jawa Timur 65174', '(0341) 879223', 'Puskesmas Gondanglegi'),
(31, 'Jl. Raya Ketawang No.13, Krajan, Ketawang, Gondanglegi, Malang, Jawa Timur 65174', '(0341) 879009', 'Puskesmas Ketawang'),
(32, 'Jl. St. No.11-13, Bululawang, Malang, Jawa Timur 65171', '(0341) 833021', 'Puskesmas Bululawang'),
(33, 'Jl. Panglima Sudirman No.161, Wajak, Malang, Jawa Timur 65173', '(0341) 824804', 'Puskesmas Wajak'),
(34, 'Jalan Sriwangi No. 1, Tajinan, Malang, Jawa Timur 65172', '(0341) 751380', 'Puskesmas Tajinan'),
(35, 'Jl. Panglima Sudirman No.210, Kesatrian, Blimbing, Kota Malang, Jawa Timur 65111', '(0341) 824214', 'Puskesmas Turen'),
(36, 'Jl. Semeru Sel. No.4, Dampit, Malang, Jawa Timur 65181', ' (0341) 896309', 'Puskesmas Dampit'),
(37, 'Jl. Ahmad Yani No.68, Pamotan, Dampit, Malang, Jawa Timur 65181', '(0341) 8591117', 'Puskesmas Pamotan'),
(38, 'Jl. Magenda, Krajan, Harjokuncaran, Sumbermanjing, Malang, Jawa Timur 65176', '(0341) 871141', 'Puskesmas Sumbermanjing Wetan'),
(39, 'Jl. Raya Sitiarjo No.11, Palung, Sitiarjo, Sumbermanjing, Malang, Jawa Timur 65176', '(0341) 8570485', '	Puskesmas Sitiarjo'),
(40, 'Bahroto, Tirtomarto, Ampelgading, Malang, Jawa Timur 65183', '(0341) 851076', 'Puskesmas Ampelgading'),
(41, 'Jl. Raya Dampit-Lumajang No.16, Tangsi, Bumirejo, Dampit, Malang, Jawa Timur 65181', '(0341) 897201', 'Puskesmas Tirtoyudo'),
(42, 'Jl. Raya Sidorejo No.39, Ardirejo, Sidorejo, Pagelaran, Malang, Jawa Timur 65174', '(0341) 875262', 'Puskesmas Pagelaran'),
(43, 'Jl. Raya No.17, Kendal Payak, Kendalpayak, Pakisaji, Malang, Jawa Timur 65162', '(0341) 837777', 'RS BEN MARI'),
(44, 'Jl. Kartini No.5, Lawang, Malang, Jawa Timur 65211', '(0341) 426072', 'RSUD LAWANG'),
(45, 'Jl. Protokol Baturetno No.30, Damean, Tamanharjo, Singosari, Malang, Jawa Timur 65153', '(0341) 456383', 'RSAU dr. M.MUNIR'),
(46, 'Jl. Raya Bulupayung No.1B, Bulupayung, Krebet, Bululawang, Malang, Jawa Timur 65171', '(0341) 805183', 'RSU MITRA DELIMA'),
(47, 'Jl. Hayam Wuruk No.66, Krajan, Gondanglegi Wetan, Gondanglegi, Malang, Jawa Timur 65174', '(0341) 879047', 'RS ISLAM GONDANGLEGI'),
(48, 'Jalan Panji No.100, Panggungrejo, Kepanjen, Krajan, Panggungrejo, Kepanjen, Malang, Jawa Timur 65163', '(0341) 395041', 'RSUD KANJURUHAN'),
(49, 'Jl. Panglima Sudirman No.73, Ketawang, Dilem, Kepanjen, Malang, Jawa Timur 65163', '(0341) 396273', 'RS TEJA HUSADA'),
(50, 'Jl. Ps. Baru, Dampit Wetan, Dampit, Malang, Jawa Timur 65181', '(0341) 897607', 'RSB PERMATA HATI DAMPIT'),
(51, 'Jalan Raya Sukosari No.32 RT.3/RW.2 Besuk, Besuk, Sukosari, Kasembon, Malang, Jawa Timur 65393', '(0354) 328144', 'RSU ISLAM MADINAH KASEMBON'),
(52, 'Jalan Doktor Cipto No. 8, Bedali, Lawang, Sengkkrajan, Bedali, Lawang, Malang, Jawa Timur 65215', '(0341) 420888', 'RS LAWANG MEDIKA'),
(53, 'Jl. Raya Mondoroko KM 09, Singosari, Ngentong, Purwoasri, Ngentong, Purwoasri, Singosari, Malang, Jawa Timur 65153', '(0341) 458974', 'RSU MARSUDI WALUYO'),
(54, 'Jl. Raya Ngijo Karangploso No.25, Kendalsari, Ngijo, Karangploso, Malang, Jawa Timur 65152', '(0341) 460558', 'RS PRASETYA HUSADA'),
(55, 'Jl. Raya Tlogomas No.45, Dusun Rambaan, Tlogomas, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144', '(0341) 561666', 'RSU UNIVERSITAS MUHAMMADIYAH MALANG'),
(56, 'Jl. Raya Jatikerto No.305, Cupak, Jatikerto, Kromengan, Malang, Jawa Timur 65165', '(0341) 397333', 'RS SALSABILA'),
(57, 'Jl. Jenderal Ahmad Yani, Turen, Purwodadi, Blimbing, Malang, Jawa Timur 65126', '(0341) 363653', 'RS BALA KESELAMATAN TUREN'),
(58, 'Jalan Mondoroko, Mondoroko, Banjararum, Singosari, Malang, Jawa Timur 65153', '(0341) 458679', 'RS PRIMAHUSADA'),
(59, 'Jl. Sumber Waras no.32, Lawang\r\nMalang, Jawa Timur, Indonesia 65216', '(0341) 426579', 'Rumkitban Lawang'),
(60, 'Jalan A Yani, Sumber Porong, Lawang, Krajan Utara, Sumber Porong, Lawang, Malang, Jawa Timur 65216', '(0341) 426015', 'RS DR. Radjiman W'),
(61, 'Jl. Raya Kebonsari No.221, Kebonsari, Tumpang, Malang, Jawa Timur 65156', '(0341) 787233', 'RS Sumber Sentosa'),
(62, 'Jl. Doktor Wahidin No.101, Kalirejo, Lawang, Krajan, Kalirejo, Lawang, Malang, Jawa Timur 65215', '(0341) 426057', 'RSB St.Miriam'),
(63, 'Jl. Panglima Sudirman No.99A, Lemah Duwur, Dilem, Kepanjen, Malang, Jawa Timur 65163', '(0341) 393000', 'RS Wava Husada'),
(64, 'Jl. Bromo No.98-100, Sukun, Kepanjen, Malang, Jawa Timur 65163', '(0341) 399499', 'RS Khusus Bedah Hasta Husada'),
(65, 'Desa Sembaluh, Pujon, Jurangrejo, Ngroto, Pujon, Malang, Jawa Timur 65391', '(0341) 524206', 'RS. Wikarta mandala'),
(66, 'JL. Raya Sengkaling, No. 245 Rt. 004/004, Kel. Mulyo Agung, Kec. Dau, 65151, Pendem, Junrejo, Kota Batu, Jawa Timur 65233', '0816-506-802', 'RS Hayunanto');

-- --------------------------------------------------------

--
-- Table structure for table `info_pdam`
--

CREATE TABLE `info_pdam` (
  `id_info_pdam` int(11) NOT NULL,
  `judul_info` varchar(100) NOT NULL,
  `info` text NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(50) NOT NULL,
  `foto_desc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_pdam`
--

INSERT INTO `info_pdam` (`id_info_pdam`, `judul_info`, `info`, `tanggal`, `foto`, `foto_desc`) VALUES
(1, 'IN HOUSE TRAINING RENCANA PENGAMANAN AIR MINUM PDAM KOTA MALANG', 'PDAM Kota Malang mengadakan In House Training RPAM (Rencana Pengamanan Air Minum) pada tanggal 8 - 11 April 2019, bertempat di ruang Oproom 1 dan 2 PDAM Kota Malang. Sebanyak 100 peserta dari beberapa bagian yang terkait di PDAM Kota Malang ditugaskan untuk mengikuti Pelatihan tersebut. In House Training tersebut bertujuan untuk memenuhi kebutuhan kompetensi dan pengetahuan karyawan dan karyawati PDAM Kota Malang dalam bidang RPAM (Rencana Pengamanan Air Minum). Acara tersebut dibuka secara langsung oleh Direktur Teknik PDAM Kota Malang Ir Ari Mukti, MT. Terdapat beberapa materi yang disampaikan dalam In House Training RPAM, diantaranya ZAMP sebagai implementasi pelaksanaan RPAM dengan pemateri Djaka Setyanta, ST, Kuantitas dan Kontinuitas pendukung Kualitas dengan pemateri Sutjibto, S.Kom, Evaluasi dan Monitoring RPAM dengan pemateri Gigih Yuli Asmara, ST, Pengantar Management Aset dengan pemateri Rahmad Hadi Sasmito, SH, Pengenalan Aplikasi Manajemen Aset dan Implementasi Management Aset di lapangan dengan pemateri Agung Putra Kusuma, S.Kom. M, Nor Muhlas, S.Pd, M.Si  selaku Direktur Utama PDAM Kota Malang berharap \"Dengan adanya In House Training ini, akan menciptakan Inovasi - inovasi baru untuk PDAM Kota Malang, SDM juga merupakan aset yang sangat penting bagi PDAM Kota Malang, jadi harus di tingkatkan keahlianya. Potensi SDM akan berpengaruh secara kolektif, dan hal tersebut akan berpengaruh kepada citra PDAM Kota Malang, kalau kita ramah kepada palanggan maka akan menciptakan citra yang  baik bagi perusahaan\".\r\nKetua RPAM Kota Malang, Subandi, SAB, menyampaikan \"Dengan terseleggaranya pelatihan In House RPAM ini karyawan dan karyawati PDAM Kota dapat memahami lebih dalam mengenai RPAM PDAM Kota Malang baik yang bagian teknik dan bagian administrasi, dan yang terpenting ikut mendukung RPAM Kota Malang\".\r\nSebagai salah satu peserta terbaik di Inhouse Training RPAM PDAM Joefri Mulyana, SE Kota Malang menyampaikan kesan dalam mengikuti pelatihan Inhouse Training RPAM, sangat menghibur, menambah pengetahuan terkait RPAM, Program dan Narasumbernya \"Keren\", dan saya berharap terus diadakan pelatihan seperti ini, dan modul-modulnya lebih di tingkatkan. Harapannya semoga semakin banyak yang tau tentang RPAM PDAM Kota Malang dan semakin besarnya kepedulian karyawan kita terhadap RPAM itu sendiri\".', '2019-04-09', 'berita_1.jpg', 'Malang, 09 April 2019'),
(2, 'PDAM KOTA MALANG GELAR PERTANDINGAN PERSAHABATAN SEPAK BOLA DENGAN PDAM KABUPATEN MALANG', 'Untuk melancarkan sinergi dan kerjasama, PDAM Kota Malang dan PDAM Kabupaten Malang,  melangsungkan pertandingan persahabatan Sepakbola yang digelar di Sumber Puti Wajak, tempatnya di lapangan Wonoayu Kabupaten Malang hari ini Senin, tanggal 22 April 2019.\r\n\r\nIni merupakan kali pertama, PDAM Kota Malang dan PDAM Kabupaten Malang menggelar partai persahabatan sepak bola. Direktur Utama PDAM Kota Malang M. Nor Muhlas, S.Pd, M.Si dan Direktur Utama PDAM Kabupaten Malang  Syamsul Hadi, S.Sos, MM  turut hadir dalam pertandingan ini. PDAM Kota Malang sendiri mengirimkan dua tim untuk menjajal kekuatan tim Sepak Bola PDAM Kabupaten Malang.\r\n\r\nPertandingan Pertama  dimenangkan oleh PDAM Kabupaten Malang dengan Score     5 -1, dan pertandingan kedua di menangkan oleh PDAM Kota Malang denan Score 4 -1. Pertandingan persahabatan sepakbola ini sebagai bentuk persahabatan sesama tukang ledeng yang terus berupaya memberikan pelayanan kebutuhan masyarakat khususnya di Kota Malang dan di Kabupaten Malang. Acara kedua tim larut dalam suasana kekeluargaan dengan diakhiri foto bersama dan saling tukar jersey yang ikut menambah kemeriahan persahabatan tukang ledeng untuk mencairkan suasana.', '2019-04-22', 'berita_2.jpg', 'Kabupaten Malang, 22/4/2019.'),
(3, 'PDAM TURUT SERTA DALAM PAMERAN DAN SYMPOSIUM PELAYANAN PUBLIK JAWA TIMUR 2018 BANYUWANGI', 'Para OPD dari seluruh Jawa Timur masing-masing menciptakan inovasi pelayanan publik agar semakin dekat dan mudah bagi masyarakat. Masing-masing instansi strategis di Jawa Timur dan juga swasta menciptakan inovasi yang bisa memberikan kemudahan layanan bagi masyarakat.\r\nSimposium inovasi pelayanan publik ini dilakukan dalam rangka mewujudkan pelayanan Jawa Timur yang Cepat, Efektif/Efisien, Transparan, Tanggap dan Responsif sesuai tagline Gubernur Jawa Timur Khofifah Indar Parawansa dan Wagub Emil Elestianto Dardak.\r\nKhofifah selaku Gubenur Jawa Timur Mengatakan \"Di Pemerintahan Jawa Timur kita ada CETTAR. Kita ingin bagaimana layanan kita ke masyarakat bisa cepat, efektif, efisien, transparan, tanggap dan responsif,\".<br/><br/>\r\n\r\n\r\nGubernur perempuan pertama Jawa Timur ini melanjutkan pameran dan simposium inovasi pelayanan publik ini akan menjadi tempat untuk saling belajar dan saling memberikan energi positif untuk inovasi-inovasi yang baik untuk masyarakat.<br/>\r\nDi pameran ini kita bisa langsung konfirmasi ke seluruh OPD yang punya inovasi layanan publik. Menurut Khofifah dengan menggelar pameran dan simposium semacam ini setiap daerah dan intansi bisa saling melihat.<br/><br/>\r\n\r\n\r\nKhofifah menambahkan \"Jadi kalau di sini ada, tidak usah studi banding ke luar negeri. Kalau konsulnya di sini kan lebih dekat, apa yang bisa kita ciptakan dari berbagai layanan publik yang inovatif, supaya masing-masing tahu ada update inovasi,\" kata Khofifah.<br/><br/> \r\n\r\nPDAM Kota Malang merupakan salah satu Perwakilan Pemerintah Kota Malang, menampilkan tekhnologi aplikasi yang terintegrasi satu sama lain dalam Portal Aplikasi PDAM Kota Malang yang digunakan dalam sistem bisnisnya PDAM Kota Malang, yang sesuai dengan tema Pameran dan Symposium Jawa Timur 2019 yaitu 4.0 dan Monitoring kelayakan air siap minum (ZAMP) PDAM disetiap daerah yang tersebar di Kota Malang secara live melalui Website PDAM Kota Malang. ', '2019-04-02', 'berita_3.jpg', 'Sebanyak 89 instansi dengan 178 inovasi pelayanan publik mewarnai Pameran dan Simposium Inovasi Pelayanan Publik Jawa Timur 2019  di Taman Blambangan,  Banyuwangi, Rabu (24/4/2019).');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bencana`
--

CREATE TABLE `tb_bencana` (
  `id_bencana` int(15) NOT NULL,
  `nama_pelapor` varchar(100) NOT NULL,
  `telp_pelapor` varchar(50) NOT NULL,
  `alamat_bencana` text NOT NULL,
  `jenis_bencana` varchar(50) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `tgl_bencana` datetime NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `location_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_faskes`
--

CREATE TABLE `tb_faskes` (
  `id_faskes` varchar(15) NOT NULL,
  `jenis_faskes` varchar(200) NOT NULL,
  `id_rs` varchar(15) NOT NULL,
  `status_ketersediaan` int(11) NOT NULL,
  `jml_tersedia` varchar(100) NOT NULL,
  `terpakai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_faskes`
--

INSERT INTO `tb_faskes` (`id_faskes`, `jenis_faskes`, `id_rs`, `status_ketersediaan`, `jml_tersedia`, `terpakai`) VALUES
('FK001', 'Bed Perawatan Perina', 'RS001', 1, '23', 0),
('FK002', 'Bed Perawatan Kebidanan', 'RS001', 1, '23', 0),
('FK003', 'Bed di Ruang HCU', 'RS001', 0, '0', 0),
('FK004', 'Bed di Ruang ICU', 'RS001', 1, '4', 0),
('FK005', 'Bed di Ruang NICU', 'RS001', 1, '4', 0),
('FK006', 'Bed di Ruang PICU', 'RS001', 0, '0', 0),
('FK007', 'Bed di Ruang IGD', 'RS001', 1, '11', 0),
('FK008', 'Bank Darah/PMI', 'RS001', 1, '1', 0),
('FK009', 'Laboratorium', 'RS001', 1, '1', 1),
('FK010', 'Instalasi Radiologi (Rontgen dan USG)', 'RS001', 1, '1', 0),
('FK011', 'Farmasi', 'RS001', 1, '1', 0),
('FK012', 'Ambulance Emergency', 'RS001', 1, '2', 0),
('FK013', 'Tim Emergency', 'RS001', 1, '1', 0),
('FK014', 'Bed Perawatan Perina', 'RS002', 1, '19', 0),
('FK015', 'Bed Perawatan Kebidanan', 'RS002', 1, '21', 0),
('FK016', 'Bed di Ruang HCU', 'RS002', 1, '2', 0),
('FK017', 'Bed di Ruang ICU', 'RS002', 0, '0', 0),
('FK018', 'Bed di Ruang NICU', 'RS002', 0, '0', 0),
('FK019', 'Bed di Ruang PICU', 'RS002', 0, '0', 0),
('FK020', 'Bed di Ruang IGD', 'RS002', 0, '0', 0),
('FK021', 'Bank Darah/PMI', 'RS002', 0, '0', 0),
('FK022', 'Laboratorium', 'RS002', 0, '0', 0),
('FK023', 'Instalasi Radiologi (Rontgen dan USG)', 'RS002', 0, '0', 0),
('FK024', 'Farmasi', 'RS002', 0, '0', 0),
('FK025', 'Ambulance Emergency', 'RS002', 0, '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kanpol`
--

CREATE TABLE `tb_kanpol` (
  `id_kanpol` varchar(15) NOT NULL,
  `jenis_kanpol` varchar(20) NOT NULL,
  `nama_kanpol` varchar(200) NOT NULL,
  `alamat_kanpol` text NOT NULL,
  `telp_kanpol` varchar(50) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `location_status` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kanpol`
--

INSERT INTO `tb_kanpol` (`id_kanpol`, `jenis_kanpol`, `nama_kanpol`, `alamat_kanpol`, `telp_kanpol`, `lat`, `lng`, `location_status`) VALUES
('KP001', 'Polsekta', 'Kepolisian Sektor Kota Klojen', 'Jl. Kelud No.11, Kauman, Klojen, Kota Malang, Jawa Timur 65116', '(0341) 361667', -7.980768, 112.625015, 1),
('KP002', 'Polsek', 'Kepolisian Sektor Lawang', 'Jalan Lawang View Timur I No.11 Malang, Lawang, Malang, Jawa Timur 65211', '(0341) 426624', -7.834312, 112.696907, 1),
('KP003', 'Polsek', 'Kepolisian Sektor Singosari', 'Jalan Kertanegara, Singosari, Candirenggo, Malang, Jawa Timur 65119', '(0341) 458110', -7.890052, 112.667496, 1),
('KP004', 'Polsek', 'Kepolisian Sektor Dau', 'Jl. Mulyo Agung No.238, Sengkaling, Mulyoagung, Dau, Malang, Jawa Timur 65151', '(0341) 460151', -7.912687, 112.584602, 1),
('KP005', 'Polsek', 'Kepolisian Sektor Karangploso', 'Jl. Raya Kertanegara No.1, Ngambon, Girimoyo, Karangploso, Malang, Jawa Timur 65119', '(0341) 461629', -7.893248, 112.595726, 1),
('KP006', 'Polsek', 'Kepolisian Sektor Tumpang', 'Jl. Raya Tumpang No.3, Tumpang I, Tumpang, Malang, Jawa Timur 65156', '(0341) 787310', -8.002792, 112.760040, 1),
('KP007', 'Polsek', 'Kepolisian Sektor Pakis', 'Jl. Raya Pakis No.3, Krajan, Pakisjajar, Pakis, Malang, Jawa Timur 65154', '(0341) 791550', -7.959881, 112.717789, 1),
('KP008', 'Polsek', 'Kepolisian Sektor Jabung', 'Jl. Letjen Sutoyo No.18, Putuk Rejo, Kemantren, Jabung, Malang, Jawa Timur 65155', '-', -7.947195, 112.744896, 1),
('KP009', 'Polsek', 'Kepolisian Sektor Poncokusumo', 'jl. sutomo no. 52 Dsn. wates, Robyong, Wonomulyo, Poncokusumo, Malang, Jawa Timur 65157', '-', -8.041781, 112.766762, 1),
('KP010', 'Polsek', 'Kepolisian Sektor Bululawang', 'Jl. Raya Diponegoro No.15, Bululawang, Malang, Jawa Timur 65171', '(0341) 833110', -8.078198, 112.640076, 1),
('KP011', 'Polsek', 'Kepolisian Sektor Tajinan', 'Jl. Raya Tajinan No.22, Tajinan, Malang, Jawa Timur 65172', '(0341) 751286', -8.050075, 112.682503, 1),
('KP012', 'Polsek', 'Kepolisian Sektor Bantur', 'Banturkrajan, Bantur, Malang, Jawa Timur 65179', '(0341) 841110', -8.311168, 112.581017, 1),
('KP013', 'Polsek', 'Kepolisian Sektor Wajak', 'Jl. Panglima Sudirman No.90, Wajak, Malang, Jawa Timur 65173', '(0341) 823801', -8.102499, 112.730400, 1),
('KP014', 'Polsek', 'Kepolisian Sektor Pagelaran', 'Jl. Raya Pagelaran No.46, Pagelaran, Malang, Jawa Timur 65174', '-', -8.205694, 112.613518, 1),
('KP015', 'Polsek', 'Kepolisian Sektor Kepanjen', 'Jl. Sudirman No. 110, Ardirejo, Kepanjen, Ketawang, Ngadilangkung, Kepanjen, Malang, Jawa Timur 65163', '(0341) 399511', -8.102031, 112.581062, 1),
('KP016', 'Polsek', 'Kepolisian Sektor Batu', 'Jl. Ahmad Yani No.11, Ngaglik, Kec. Batu, Kota Batu, Jawa Timur 65311', '(0341) 591110', -7.871288, 112.523651, 1),
('KP017', 'Polsek', 'Kepolisian Sektor Pakisaji', 'Jl. Kolonel Slamet Supriyadi No.2, Jatirejo, Pakisaji, Malang, Jawa Timur 65162', '-', -8.064190, 112.599548, 1),
('KP018', 'Polsek', 'Kepolisian Sektor Wagir', 'Jl. Parangargo No.97, Wagir, Parangargo, Wagir, Malang, Jawa Timur 65158', '(0341) 804663', -8.013589, 112.594765, 1),
('KP019', 'Polsek', 'Kepolisian Sektor Sumberpucung', 'Jl. Raya Ngebruk No.114, Krajan, Ngebruk, Sumber Pucung, Malang, Jawa Timur 65165', '(0341) 385110', -8.151210, 112.514137, 1),
('KP020', 'Polsek', 'Kepolisian Sektor Ngajum Kab. Malang', 'Ngajum, Malang, Jawa Timur 65164', '-', -8.092466, 112.540527, 1),
('KP021', 'Polsek', 'Kepolisian Sektor Wonosari', 'Jl. Raya Bumirejo No.26, Bumireja, Kebobang, Wonosari, Malang, Jawa Timur 65164', '(0341) 370411', -8.051026, 112.502495, 1),
('KP022', 'Polsek', 'Kepolisian Sektor Kromengan', 'Krandil, Karangrejo, Kromengan, Malang, Jawa Timur 65165', '(0341) 384300', -8.121308, 112.490341, 1),
('KP023', 'Polsek', 'Kepolisian Sektor Pagak', 'Kulon Kali, Sumbermanjing Kulon, Pagak, Malang, Jawa Timur 65168', '(0341) 881210', -8.301713, 112.497078, 1),
('KP024', 'Polsek', 'Kepolisian Sektor Donomulyo', 'Jl. Desa Donomulyo 911, Mulyosari, Dono Mulyo, Donomulyo, Malang, Jawa Timur 65167', '(0341) 881110', -8.285231, 112.428001, 1),
('KP025', 'Polsek', 'Kepolisian Sektor Kalipare', 'Pitrang, Kalipare, Malang, Jawa Timur 65166', '-', -8.207325, 112.465393, 1),
('KP026', 'Polsek', 'Kepolisian Sektor Gedangan', 'Jl. Ahmad Yani No.82, Megersari, Gedangan, Kabupaten Sidoarjo, Jawa Timur 61254', '(031) 8912221', -7.388388, 112.728165, 1),
('KP027', 'Polsek', 'Kepolisian Sektor Turen', 'Jl. Raya Ahmad Yani No. 4, Turen, Malang, Jawa Timur 65175', '(0341) 824110', -8.170120, 112.698883, 1),
('KP028', 'Polsek', 'Kepolisian Sektor Sumbermanjing Wetan', 'Jl. Raya Sumbermanjing Wetan, Sumbermanjing Wetan, Argotirto, Sumbermanjing, Malang, Jawa Timur 65176', '-', -8.278846, 112.690285, 1),
('KP029', 'Polsek', 'Kepolisian Sektor Ampel Gading', 'Jl. Raya Tirtomarto, Bahroto, Tirtomarto, Ampelgading, Malang, Jawa Timur 65183', '(0341) 851110', -8.234444, 112.878769, 1),
('KP030', 'Polsek', 'Kepolisian Sektor Dampit', 'Jl. Semeru Sel., Dampit, Malang, Jawa Timur 65181', '(0341) 896510', -8.211576, 112.748627, 1),
('KP031', 'Polsek', 'Kepolisian Sektor Tirtoyudo', 'Jl. Desa Tirtoyudo 112, Tangsi, Tirtoyudo, Tirto Yudo, Malang, Jawa Timur 65182', '(0341) 896110', -8.230688, 112.804863, 1),
('KP032', 'Polresta', 'Kepolisian Resor Kota Malang', 'Jl. Jaksa Agung Suprapto No.19, Samaan, Klojen, Kota Malang, Jawa Timur 65112', '(0341) 364211', -7.971952, 112.630852, 1),
('KP033', 'Polsek', 'KKepolisian Sektor Blimbing', 'Jl. Raden Intan No.6 Malang', '(0341) 491304', -7.929858, 112.650551, 1),
('KP034', 'Polsek', 'Kepolisian Sektor Kedungkandang', 'Jl. Raya Ki Ageng Gribig No.96, Kedungkandang, Malang, Kota Malang, Jawa Timur 65136', '(0341) 710110', -7.993411, 112.648209, 1),
('KP035', 'Polsek', 'Kepolisian Sektor Lowokwaru', 'Gang 13 Jalan M.T. Haryono No.413, Dinoyo, Kecamatan Lowokwaru, Dinoyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144', '(0341) 570200', -7.941406, 112.609360, 1),
('KP036', 'Polsek', 'Kepolisian Sektor Kota Sukun', 'Jalan Kolonel Sugiono Gang 8 No.82, Ciptomulyo, Sukun, Kota Malang, Jawa Timur 65148', '(0341) 368638', -8.004249, 112.618523, 1),
('KP037', 'Polsek', 'Kepolisian Sektor Ngantang', 'Prabon II, Kaumrejo, Ngantang, Malang, Jawa Timur 65392', '(0341) 521110', -7.856072, 112.369720, 1),
('KP038', 'Polsek', 'Kepolisian Sektor Gondanglegi', 'Jl. Suropati No.22, Krajan, Gondanglegi Wetan, Gondanglegi, Malang, Jawa Timur 65111', '(0341) 879110', -8.176886, 112.640518, 1),
('KP039', 'Polsek', 'Kepolisian Sektor Pujon', 'Jl. Brigjend Abd Manan Wijaya No.8, Jurangrejo, Pandesari, Pujon, Malang, Jawa Timur 65391', '(0341) 524110', -7.849765, 112.479881, 1),
('KP040', 'Polsek', 'Kepolisian Sektor Bumiaji', 'Jl. Raya Punten, Punten, Kec. Batu, Kota Batu, Jawa Timur 65338', '(0341) 595809', -7.839242, 112.527771, 1),
('KP041', 'Polsek', 'Kepolisian Sektor Junrejo', 'Jl. Raya Tlekung No.234, Tlekung, Kec. Batu, Kota Batu, Jawa Timur 65327', '(0341) 464111', -7.912547, 112.550140, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kegawatdaruratan`
--

CREATE TABLE `tb_kegawatdaruratan` (
  `id_jenis` varchar(10) NOT NULL,
  `jenis_kkg` varchar(100) NOT NULL,
  `id_rs` varchar(15) NOT NULL,
  `jml_tersedia` int(11) NOT NULL,
  `status_ketersediaan` int(11) NOT NULL,
  `terpakai` int(11) NOT NULL,
  `status_jenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kegawatdaruratan`
--

INSERT INTO `tb_kegawatdaruratan` (`id_jenis`, `jenis_kkg`, `id_rs`, `jml_tersedia`, `status_ketersediaan`, `terpakai`, `status_jenis`) VALUES
('KKG001', 'Eklamsi', 'RS001', 20, 1, 5, 1),
('KKG002', 'PEB', 'RS001', 15, 1, 5, 1),
('KKG003', 'HPP', 'RS001', 25, 1, 3, 1),
('KKG004', 'HAP', 'RS001', 10, 1, 5, 1),
('KKG005', 'Distosia', 'RS001', 25, 0, 5, 1),
('KKG006', 'Abortus', 'RS001', 30, 0, 2, 1),
('KKG007', 'KET', 'RS001', 20, 1, 3, 1),
('KKG008', 'Inversio Uteri', 'RS001', 5, 1, 2, 1),
('KKG009', 'Febris Puerperalis', 'RS001', 10, 1, 0, 1),
('KKG010', 'Hyperemesis gravidarum dengan dehidrasi', 'RS001', 20, 1, 0, 1),
('KKG011', 'Persalinan kehamilan risiko tinggi dan atau persalinan dengan penyulit', 'RS001', 10, 1, 5, 1),
('KKG012', 'Asfiksia', 'RS001', 10, 1, 5, 2),
('KKG013', 'Bayi Kecil/Prematur/UGR', 'RS001', 20, 1, 0, 2),
('KKG014', 'Infeksi/Sepsis', 'RS001', 10, 1, 3, 2),
('KKG015', 'Ikterus', 'RS001', 10, 1, 5, 2),
('KKG016', 'Cyanotic Spell (penyakit jantung)', 'RS001', 0, 0, 0, 2),
('KKG017', 'Tetanus', 'RS001', 30, 1, 3, 2),
('KKG018', 'Kelainan Kongenital', 'RS001', 20, 1, 15, 2),
('KKG019', 'ACCPD', 'RS001', 10, 1, 2, 2),
('KKG020', 'Hipotermia', 'RS001', 5, 1, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pdam`
--

CREATE TABLE `tb_pdam` (
  `id_pdam` varchar(10) NOT NULL,
  `nama_pdam` varchar(200) NOT NULL,
  `alamat_pdam` text NOT NULL,
  `telp_pdam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pdam`
--

INSERT INTO `tb_pdam` (`id_pdam`, `nama_pdam`, `alamat_pdam`, `telp_pdam`) VALUES
('PDAM001', 'PDAM Kota Malang', 'Jl. Danau Sentani Raya No.100, Madyopuro, Kedungkandang, Kota Malang, Jawa Timur 65142', '(0341) 715103'),
('PDAM002', 'PDAM Tirta Dharma', 'Jl. W.R. Supratman, Rampal Celaket, Klojen, Kota Malang, Jawa Timur 65111', '-'),
('PDAM003', 'MOJOLANGU WATER TANK PDAM KOTA MALANG', 'Mojolangu, Kec. Lowokwaru, Kota Malang, Jawa Timur 65142', '(0341) 715103');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rs`
--

CREATE TABLE `tb_rs` (
  `id_rs` varchar(15) NOT NULL,
  `nama_rs` varchar(200) NOT NULL,
  `alamat_rs` text NOT NULL,
  `telp_rs` varchar(100) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `location_status` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rs`
--

INSERT INTO `tb_rs` (`id_rs`, `nama_rs`, `alamat_rs`, `telp_rs`, `lat`, `lng`, `location_status`) VALUES
('RS001', 'RSUD Balaraja', 'Jl. Rumah Sakit No.88, Tobat, Balaraja, Tangerang, Banten 15126', '021-29508382; 081211608026', 0.000000, 0.000000, 1),
('RS002', 'RSU Selaras', '-', '021-5969145', 0.000000, 0.000000, 1),
('RS003', 'RSIA Harapan Mulia', '-', '021-5991785', 0.000000, 0.000000, 1),
('RS004', 'RS Mulia Insani', '-', '021-5962790', 0.000000, 0.000000, 1),
('RS005', 'RSIA Tiara', '-', '021-59401999', 0.000000, 0.000000, 1),
('RS006', 'RS Permata Hati', 'Jl. Danau Toba Blok E 6 No.16 - 18, Lesanpuro, Kedungkandang, Kota Malang, Jawa Timur 65138', '(0341)718068', -7.980056, 112.660721, 1),
('RS007', 'RS Suci Paramita', '-', '-', 0.000000, 0.000000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `einap`
--
ALTER TABLE `einap`
  ADD PRIMARY KEY (`DT_RowId`);

--
-- Indexes for table `info_pdam`
--
ALTER TABLE `info_pdam`
  ADD PRIMARY KEY (`id_info_pdam`);

--
-- Indexes for table `tb_bencana`
--
ALTER TABLE `tb_bencana`
  ADD PRIMARY KEY (`id_bencana`);

--
-- Indexes for table `tb_faskes`
--
ALTER TABLE `tb_faskes`
  ADD PRIMARY KEY (`id_faskes`),
  ADD KEY `id_rs` (`id_rs`);

--
-- Indexes for table `tb_kanpol`
--
ALTER TABLE `tb_kanpol`
  ADD PRIMARY KEY (`id_kanpol`);

--
-- Indexes for table `tb_kegawatdaruratan`
--
ALTER TABLE `tb_kegawatdaruratan`
  ADD PRIMARY KEY (`id_jenis`),
  ADD KEY `id_rs` (`id_rs`);

--
-- Indexes for table `tb_pdam`
--
ALTER TABLE `tb_pdam`
  ADD PRIMARY KEY (`id_pdam`);

--
-- Indexes for table `tb_rs`
--
ALTER TABLE `tb_rs`
  ADD PRIMARY KEY (`id_rs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bencana`
--
ALTER TABLE `tb_bencana`
  MODIFY `id_bencana` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_faskes`
--
ALTER TABLE `tb_faskes`
  ADD CONSTRAINT `tb_faskes_ibfk_1` FOREIGN KEY (`id_rs`) REFERENCES `tb_rs` (`id_rs`);

--
-- Constraints for table `tb_kegawatdaruratan`
--
ALTER TABLE `tb_kegawatdaruratan`
  ADD CONSTRAINT `tb_kegawatdaruratan_ibfk_1` FOREIGN KEY (`id_rs`) REFERENCES `tb_rs` (`id_rs`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
