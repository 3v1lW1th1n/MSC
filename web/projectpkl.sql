-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2019 at 07:41 AM
-- Server version: 10.1.28-MariaDB
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
(1, 'Selayang Pandang', 'abupaten Malang adalah salah satu Kabupaten di Indonesia yang terletak di Propinsi Jawa Timur dan merupakan Kabupaten yang terluas kedua wilayahnya setelah Kabupaten Banyuwangi dari 38 Kabupaten/ Kota yang ada di Jawa Timur. Hal ini didukung dengan luas wilayahnya 2.977,05 km²  dan jumlah penduduk sesuai Data Pusat Statistik sebanyak 2.544.315 jiwa (tahun 2015) yang tersebar di 33 kecamatan, 378 Desa, 12 Kelurahan. Kabupaten Malang juga dikenal sebagai daerah yang kaya akan potensi diantaranya dari pertanian, perkebunan, tanaman obat keluarga dan lain sebagainya. Disamping itu juga dikenal dengan obyek-obyek wisatanya.'),
(2, 'Sejarah', 'Ketika kerajaan Singhasari dibawah kepemimpinan Akuwu Tunggul Ametung yang beristrikan Ken Dedes, kerajaan itu dibawah kekuasaan Kerajaan Kediri. Pusat pemerintahan Singhasari saat itu berada di Tumapel. Baru setelah muncul Ken Arok yang kemudian membunuh Akuwu Tunggul Ametung dan menikahi Ken Dedes, pusat kerajaan berpindah ke Malang , setelah berhasil mengalahkan Kerajaan Kediri. Kediri saat itu jatuh ke tangan Singhasari dan turun statusnya menjadi kadipaten. Sementara Ken Arok mengangkat dirinya sebagai raja yang bergelar Prabu Kertarajasa Jayawardhana atau Dhandang Gendhis (1185 - 1222). \r\nKerajaan ini mengalami jatuh bangun. Semasa kejayaan Mataram, kerajaan-kerajaan di Malang jatuh ke tangan Mataram, seperti halnya Kerajaan Majapahit. Sementara pemerintahan pun berpindah ke Demak disertai masuknya agama Islam yang dibawa oleh Wali Songo. Malang saat itu berada di bawah pemerintahan Adipati Ronggo Tohjiwo dan hanya berstatus kadipaten. Pada masa-masa keruntuhan itu, menurut Folklore, muncul pahlawan legendaris Raden Panji Pulongjiwo. Ia tertangkap prajurit Mataram di Desa Panggungrejo yang kini disebut Kepanjen (Kepanji-an). Hancurnya kota Malang saat itu dikenal sebagai Malang Kutho Bedhah. \r\nBukti-bukti lain yang hingga sekarang merupakan saksi bisu adalah nama-nama desa seperti Kanjeron, Balandit, Turen, Polowijen, Ketindan, Ngantang dan Mandaraka. Peninggalan sejarah berupa candi-candi merupakan bukti konkrit seperti :\r\nCandi Kidal di Desa Kidal Kec. Tumpang yang dikenal sebagai tempat penyimpanan jenazah Anusapati.\r\nCandi Singhasari di Kec. Singosari sebagai penyimpanan abu jenazah Kertanegara.\r\nCandi Jago / Jajaghu di Kec. Tumpang merupakan tempat penyimpanan abu jenazah Wisnuwardhana.\r\nPada zaman VOC, Malang merupakan tempat strategis sebagai basis perlawanan seperti halnya perlawanan Trunojoyo (1674 - 1680) terhadap Mataram yang dibantu VOC. Menurut kisah, Trunojoyo tertangkap di Ngantang. Awal abad XIX ketika pemerintahan dipimpin oleh Gubernur Jenderal, Malang seperti halnya daerah-daerah di nusantara lainnya, dipimpin oleh Bupati.\r\nBupati Malang I adalah Raden Tumenggung Notodiningrat I yang diangkat oleh pemerintah Hindia Belanda berdasarkan resolusi Gubernur Jenderal 9 Mei 1820 Nomor 8 Staatblad 1819 Nomor 16. Kabupaten Malang merupakan wilayah yang strategis pada masa pemerintahan kerajaan- kerajaan. Bukti-bukti yang lain, seperti beberapa prasasti yang ditemukan menunjukkan daerah ini telah ada sejak abad VIII dalam bentuk Kerajaan Singhasari dan beberapa kerajaan kecil lainnya seperti Kerajaan Kanjuruhan seperti yang tertulis dalam Prasasti Dinoyo. Prasasti itu menyebutkan peresmian tempat suci pada hari Jum`at Legi tanggal 1 Margasirsa 682 Saka, yang bila diperhitungkan berdasarkan kalender kabisat jatuh pada tanggal 28 Nopember 760. Tanggal inilah yang dijadikan patokan hari jadi Kabupaten Malang. Sejak tahun 1984 di Pendopo Kabupaten Malang ditampilkan upacara Kerajaan Kanjuruhan, lengkap berpakaian adat zaman itu, sedangkan para hadirin dianjurkan berpakaian khas daerah Malang sebagaimana ditetapkan.'),
(3, 'Maskot', 'Habitat jenis fauna burung Cucak Ijo ditengarai berasal dari kawasan Malang Selatan, walaupun di beberapa daerah lain juga terdapat burung sejenis. Didasari dengan latar belakang Chloropsis Sonnerati dan disusul kemudian dengan Surat Bupati Kepala Daerah Tingkat II Malang tanggal 8 Pebruari 1996 bernomor 522.4/429.024/1995 tentang pelestarian flora dan fauna, Burung Cucak Ijo dimunculkan sebagai identitas fauna Kabupaten Malang. Kemudian dikukuhkan pula dengan Surat Keputusan Bupati Kepala Daerah Tingkat II Malang, nomor 180/170/SK/429.013/1997, tentang Penetapan Maskot / Identitas Flora dan FaunaKabupaten Daerah Tingkat II Malang, tertanggal 26 April 1997. Dalam Surat Keputusan Bupati itu, untuk maskot flora ditetapkan Apel Manalagi (Malus Sylvestris Mill). Sedangkan untuk faunanya adalah Burung Cucak Ijo. Maksud penetapan maskot flora dan fauna tersebut sebagai upaya pengenalan sekaligus pelestarian yang didasari keunikan suatu jenis satwa dan tumbuhan tertentu yang terdapat di Kabupaten Malang serta merupakan ciri khas daerah. Penetapan maskot tersebut berperan pula sebagai sarana meningkatkan promosi kepariwisataan, penelitian dan pendidikan. Upaya pelestarian Burung Cucak Ijo ini dilakukan antara lain dengan cara pembangunan penangkaran terbesar yang sedang dibangun di Desa Jeru, Kecamatan Tumpang diatas lahan seluas 9,5 Ha dimana untuk Burung Cucak Ijo disediakan lahan seluas 0,5 Ha sedangkan lahan yang lain digunakan untuk pembudidayaan dan pelestarian flora dan fauna yang lain.');

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
(66, 'JL. Raya Sengkaling, No. 245 Rt. 004/004, Kel. Mulyo Agung, Kec. Dau, 65151, Pendem, Junrejo, Kota Batu, Jawa Timur 65233', '0816-506-802', 'RS Hayunanto'),
(67, 'Puskesmas coba input', 'g', '085xx');

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
('FK025', 'Ambulance Emergency', 'RS002', 0, '0', 0),
('FK026', 'Tim Emergency', 'RS002', 0, '0', 0);

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
('RS001', 'RSUD Balaraja', 'Jl. Rumah Sakit No.88, Tobat, Balaraja, Tangerang, Banten 15126', '021-29508382; 081211608026', -7.986563, 112.624947, 1),
('RS002', 'RSU Selaras', 'ghhg', '021-5969145', -7.965738, 112.637886, 1),
('RS003', 'RSIA Harapan Mulia', 'hhk', '021-5991785', -7.978025, 112.624435, 1),
('RS004', 'RS Mulia Insani', 'kjh', '021-5962790', -7.972410, 112.631706, 1),
('RS005', 'RSIA Tiara', 'ssss', '021-59401999', -7.973070, 112.622330, 1),
('RS006', 'RS Permata Hati', 'Jl. Danau Toba Blok E 6 No.16 - 18, Lesanpuro, Kedungkandang, Kota Malang, Jawa Timur 65138', '(0341) 718068', -7.980056, 112.660721, 1),
('RS007', 'RS Suci Paramita', 'kosong', 'kosong', -7.978080, 112.702332, 1),
('RS009', 'AAA', 'JEMBER', '00000', -7.961085, 112.617699, 1),
('RS010', 'tes dfdddgd', 'malang jjjj', '6668', -7.968650, 112.643791, 1);

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
-- Indexes for table `tb_faskes`
--
ALTER TABLE `tb_faskes`
  ADD PRIMARY KEY (`id_faskes`),
  ADD KEY `id_rs` (`id_rs`);

--
-- Indexes for table `tb_kegawatdaruratan`
--
ALTER TABLE `tb_kegawatdaruratan`
  ADD PRIMARY KEY (`id_jenis`),
  ADD KEY `id_rs` (`id_rs`);

--
-- Indexes for table `tb_rs`
--
ALTER TABLE `tb_rs`
  ADD PRIMARY KEY (`id_rs`);

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
