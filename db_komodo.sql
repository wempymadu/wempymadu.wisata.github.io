-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 30, 2016 at 04:24 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_komodo`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` smallint(6) NOT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `keterangan` text,
  `aktif` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--


-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE IF NOT EXISTS `counter` (
  `id` int(10) NOT NULL,
  `jml_pengunjung` int(10) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--


-- --------------------------------------------------------

--
-- Table structure for table `ms_album`
--

CREATE TABLE IF NOT EXISTS `ms_album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_album` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `ms_album`
--

INSERT INTO `ms_album` (`id`, `nama_album`) VALUES
(1, 'Wisata Komodo'),
(6, 'LIANG BUA'),
(7, 'Labuan Bajo');

-- --------------------------------------------------------

--
-- Table structure for table `ms_berita`
--

CREATE TABLE IF NOT EXISTS `ms_berita` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `tgl_jam` datetime DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `deskripsi` longtext,
  `file` varchar(225) DEFAULT NULL,
  `aktif` char(1) NOT NULL DEFAULT '1',
  `gambar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `ms_berita`
--

INSERT INTO `ms_berita` (`id`, `judul`, `tgl_jam`, `id_kategori`, `deskripsi`, `file`, `aktif`, `gambar`) VALUES
(13, 'Apa lagi yang menarik di Pulau Komodo?', '2016-07-20 06:37:40', 1, 'Di pulau ini terdapat satu pantai yang sangat unik yaitu Pink Beach. Pantai ini juga dikenal dengan nama Pantai Merah Muda, namun warga sekitar lebih suka menyebutnya sebagai Pantai Merah. Pantai Merah Muda ini memiliki pasir pantai yang berwarna merah muda, warna tersebut akan semakin terlihat jelas pada saat pasir basah oleh ombak.\r\n\r\nMenurut penelitian, warna merah muda di pantai ini disebabkan oleh serpihan koral yang hancur dan bercampur dengan pasir pantai. Di dunia tercatat hanya terdapat tujuh pantai dengan pasir berwarna merah muda dan yang berada di Pulau Komodo ini adalah salah satunya.\r\n\r\nKeindahan pantai ini bukan hanya pada warna pasirnya yang unik. Alam bawah laut di sini juga terkenal indah. Pantai ini juga seringkali dijadikan lokasi menyelam dan snorkeling.\r\n\r\n ', NULL, '1', 'Pantai-Pink-Pulau-Komodo.jpg'),
(14, 'Komodo Berasal Dari Mana', '2016-07-20 06:40:36', 1, 'Siapa saja yang pernah datang ke kebun binatang pasti pernah mengenal nama komodo. Menurut sejarah kepurbakalaan, komodo telah hidup di hutan-hutan di Indonesia sekitar 700.000 tahun lalu. Berperawakan besar, bertenaga kuat dan agresif, para komodo ini merupakan rajanya dunia perkadalan.\r\n\r\nAwalnya komodo diduga berasal dari Australia sebelum bermigrasi ke Indonesia. Namun dengan ditemukannya jejak-jejak komodo kuno di Afrika, beberapa waktu lalu ternyata meruntuhkan dugaan tersebut. Binatang vertebrata Afrika yang berusia sekitar 30 juta tahun itu terkait dengan komodo yang masih hidup saat ini dan juga 50 jenis kadal lain dari genus Varanus.\r\n\r\nKetika jenis kadal kuno tersebut hidup di Afrika, benua itu masih dikelilingi lautan dan betul-betul terputus dari daratan yang menghubungkannya dengan benua lain, apakah itu Asia, Eropa ataupun Indonesia. Jejak kadal Afrika ditemukan di sebuah wilayah yang dulunya merupakan danau. Temuan ini menunjukkan bahwa komodo merupakan perenang tangguh, seperti juga turunannya yang ada saat ini.\r\n\r\n\r\nKomodo (Varanus komodoensis) selaku " penguasa di Pulau Komodo " merupakan kadal terbesar yang panjangnya bisa mencapai 3 meter dan beratnya sekitar 70 - 90 kg. Satwa ini hanya terdapat di Nusa Tenggara di Pulau Komodo, Padar dan Rinca serta beberapa pulau kecil di selat antara Sumbawa dan pesisir barat serta utara Flores. Komodo senang tinggal di dalam liang-liang tanah, kadang di bawah batu atau susunan akar pohon. Reptil ini dapat bergerak dengan cepat / lari dengan perut tanpa menyentuh tanah tapi juga dapat berenang di air.\r\nMelihat penampilannya di Pulau Komodo saat ini, ternyata kadal kuno-kadal kuno itu panjangnya sekitar 1,5 meter. Mereka diduga hanya berenang untuk jarak pendek. Namun kemungkinan binatang ini bisa menyeberangi lautan tetaplah terbuka. Yang pasti upaya untuk mengungkap misteri migrasi komodo yang sampai ke Indonesia masih terus berlanjut meninggalkan jejak misteri yang belum terpecahkan sampai saat ini.', NULL, '1', 'komodo.jpg'),
(15, 'Pulau Komodo', '2016-07-20 06:42:01', 1, 'Pulau Komodo terletak di Kepulauan Nusa Tenggara. Pulau Komodo dikenal sebagai habitat asli hewan komodo. Pulau ini juga merupakan kawasan Taman Nasional Komodo . Pulau Komodo berada di sebelah barat Pulau Sumbawa, yang dipisahkan oleh Selat Sape, termasuk wilayah Kecamatan Komodo, Kabupaten Manggarai Barat, Provinsi Nusa Tenggara Timur, Indonesia. Pulau Komodo merupakan ujung paling barat Provinsi Nusa Tenggara Timur, berbatasan dengan Provinsi Nusa Tenggara Barat.\r\n\r\nPulau Komodo, tempat hewan komodo hidup dan berkembang biak dengan baik. Hingga Agustus 2009, di pulau ini terdapat sekitar 1300 ekor komodo. Ditambah dengan pulau lain, seperti Pulau Rinca dan dan Pulau Gili Motang, jumlah keseluruhan mencapai sekitar 2500 ekor. diperkirakan sekitar 100 ekor komodo di Cagar Alam Wae Wuul di daratan Pulau Flores tapi tidak termasuk wilayah Taman Nasional Komodo.\r\n\r\nSelain komodo, pulau ini juga menyimpan eksotisme flora yang beragam, pohon kayu sepang yang oleh warga sekitar digunakan sebagi obat dan bahan pewarna pakaian, pohon nitak (sterculia oblongata) ini di yakini berguna sebagai obat dan bijinya gurih dan enak seperti kacang polong\r\n\r\nPulau Komodo  sangat mengesankan , menelusuri pulau yang eksotis, menyelami birunya laut, dan bermandikan cahaya mentari sambil melihat jejak-jejak kehidupan masa lalu yang terpelihara dan akan  menjadi bagian dari ragam keindahan Indonesia.', NULL, '1', 'pulau-komodo.jpg'),
(16, 'Taman Nasional Komodo', '2016-07-20 06:43:10', 1, 'Meliputi Pulau Komodo, Rinca and Padar, ditambah pulau-pulau lain seluas 1.817 persegi adalah habitat asli komodo.\r\nTaman Nasional Komodo didirikan pada 1980 untuk melindungi kelestarian komodo. Tak hanya hewan langka tersebut, Taman Nasional Komodo juga untuk melindungi berbagai macam tumbuh-tumbuhan dan satwa, termasuk binatang-binatang laut.\r\nUNESCO mengakui sebagai Situs Warisan Dunia pada 1986. Bersama dua pulau besar lainnya, yakni Pulau Rinca dan Padar, Pulau Komodo dan beberapa pulau kecil di sekitarnya terus dipelihara sebagai habitat asli reptil yang dijuluki “Komodo”.', NULL, '1', 'taman-komodo.png'),
(17, 'Sejarah Komodo Dragon', '2016-07-20 06:44:07', 1, 'Komodo yang dijuluki Komodo dragon atau Varanus Komodoensis atau nama lokal “Ora”, kadal raksasa ini menurut cerita dipublikasikan pertama kali pada tahun 1912 di harian nasional Hindia Belanda. Peter A. Ouwens, direktur Museum Zoologi di Bogor adalah orang yang telah mengenalkan komodo kepada dunia lewat papernya itu. Semenjak itu, ekspedisi dan penelitian terhadap spesies langka ini terus dilakukan, bahkan dikabarkan sempat menginspirasi Film KingKong di tahun 1933. Menyadari perlunya perlindungan terhadap Komodo di tengah aktivitas manusia di habitat aslinya itu, pada tahun 1915 Pemerintah Belanda mengeluarkan larangan perburuan dan pembunuhan komodo.\r\n\r\nPulau Komodo masuk 28 finalis yang dipilih oleh sebuah panel ahli dari 77 nominasi. Sebelumnya ada 261 lokasi di dunia yang dicalonkan menjadi salah satu dari tujuh keajaiban dunia.\r\nPulau Komodo, yang jadi andalan Indonesia dalam ajang New7Wonders of Nature punya keunggulan di banding lokasi-lokasi lainnya, apalagi kalau bukan komodo, satwa langka yang dipercaya sebagai ‘dinosaurus terakhir di muka bumi’.\r\nKampanye ini diharapkan dapat meningkatkan pengetahuan mengenai alam, tak hanya yang ada di lingkungan kita tapi juga di seluruh dunia. serta didedikasikan untuk generasi di masa depan.\r\n\r\n\r\n \r\nKomodo yang dikenal dengan nama ilmiah Varanus komodoensis adalah spesies kadal terbesar di dunia yang hidup di pulau Komodo, Rinca, Flores, Gili Motang, dan Gili Dasami di Nusa Tenggara. Oleh penduduk setempat, komodo kerap disebut Ora.\r\nTermasuk anggota famili biawak Varanidae, dan klad Toxicofera, komodo merupakan kadal terbesar di dunia, dengan rata-rata panjang 2-3 m. Ukurannya yang besar ini berhubungan dengan gejala gigantisme pulau, yakni kecenderungan meraksasanya tubuh hewan-hewan tertentu yang hidup di pulau kecil terkait dengan tidak adanya mamalia karnivora di pulau tempat hidup komodo, dan laju metabolisme komodo yang kecil. Karena besar tubuhnya, kadal ini menduduki posisi predator puncak yang mendominasi ekosistem tempatnya hidup.\r\n\r\nKomodo ditemukan pada 1910. Tubuhnya yang besar dan reputasinya yang mengerikan membuat mereka populer di kebun binatang. Habitat komodo di alam bebas telah menyusut dan karenanya IUCN memasukkan komodo sebagai spesies yang rentan terhadap kepunahan. Biawak besar ini kini dilindungi di bawah peraturan pemerintah Indonesia dan sebuah taman nasional didirikan untuk melindungi mereka.\r\n\r\n\r\n \r\nSebenarnya daya tarik Taman Nasional Komodo tidak semata-mata oleh kehadiran Komodo belaka. Seperti yang saya kutip dari situs resmi Kementerian Kehutanan yang mengelola situs Taman Nasional Komodo ini, panorama savana dan pemandangan bawah laut merupakan daya tarik pendukung yang potensial. Wisata bahari misalnya, memancing, snorkeling, diving, kano, bersampan. Sedangkan di daratan, potensi wisata alam yang bisa dilakukan adalah pengamatan satwa, hiking, dan camping. Mengunjungi Taman Nasional Komodo dan menikmati pemandangan alam yang sangat menawan merupakan pengalaman yang tidak akan pernah terlupakan.', NULL, '1', 'komo.jpg'),
(18, 'Pulau Komodo Resmi Menjadi Tujuh Keajaiban Dunia', '2016-07-20 06:45:49', 1, 'Pulau Komodo resmi sebagai salah satu dari tujuh keajaiban warisan alam yang ada di dunia. Pulau Komodo ditetapkan sebagai salah satu keajaiban dunia oleh organisasi Ne7Wonders. Enam keajaiban lainnya adalah Halong Bay (Vietnam), Amazon (Amerika Latin), Pulau Jeju (Korea Selatan), Table Mountain (Afrika Selatan), air terjun Iguazu (Amerika Latin), dan Puerto Princea Underground River (Filipina).\r\n\r\nAcara penetapan Pulau Komodo sebagai tujuh keajaiban dunia dilakukan di Taman Nasional Komodo, Pulau Komodo, Labuan Bajo, Kabupaten Manggarai Barat, Nusa Tenggara Timur, Jumat (13/9) siang. Acara itu disaksikan\r\nPresiden Susilo Bambang Yudhoyono (SBY) dan ibu negara Ani Yudhoyono.\r\nPenetapan dilakukan oleh Presiden Yayasan New Seven Wonder Bernard Weber berupa pembukaan prasasti Seven Wonder oleh Bernard bersama Ketua Pembina Yayasan Komodo Yusuf Kalla.\r\n\r\nPresiden SBY menyampaikan terima kasih kepada Jusuf Kalla dan tim yang telah berjuang sehingga Pulau Komodo ditetapkan sebagai salah satu keajaiban alam dunia. Dia mengajak semua pihak agar melanjutkan kerja sama dalam memajukan pariwisata Indonesia, khususnya taman wisata Pulau Komodo.\r\nKetua Dewan Pembima Tim Pemenangan Pulau Komodo Jusuf Kalla menjelaskan bahwa sebetulnya kotingen Indonesia juga mengajukan Danau Toba sebagai salah satu kandidat penerima. Namun seiring proses seleksi, hanya tinggal Pulau Komodo yang bertahan hingga final.\r\n\r\n"Awalnya 400 peserta. Kemudian turun menjadi 200 peserta, lalu susut ke 28 peserta. Dari situ baru masuk ke tujuh keajaiban dunia," tuturnya.', NULL, '1', '7-komodo.jpg'),
(19, '3 Keajaiban Pulau Komodo', '2016-07-20 06:50:03', 1, 'Mungkin kita sudah sering mendengar berbagai berita tentang Pulau Komodo. Apalagi tahun lalu pulau yang terletak di Kepulauan Nusa Tenggara ini sempat masuk menjadi nominasi 7 Keajaiban Dunia. \r\n\r\nTapi sebenarnya ada apa saja sih di dalam Pulau Komodo itu? Kok sampai sebegitu menariknya? Eiittss, lihat deh 3 hal menarik berikut ini, dan kamu pasti langsung pengin untuk pergi ke sana.\r\n\r\nPink Beach\r\nKalau biasanya kita bermain di pantai yang berpasir cokelat atau putih, kali ini kita akan menemukan pantai dengan pasir berwarna pink! Hanya ada 7 buah pantai berpasir pink di dunia ini, salah satunya di Pulau Komodo. Pasir pink ini berkat campuran pasir putih dan merah. Warna merah sendiri konon katanya berasal dari serpihan koral merah yang hancur. Yang jelas, pantai ini masih sangat bersih dan indah!\r\n\r\nTaman Nasional Komodo\r\nDi sini kita bisa melihat 277 spesies hewan yang merupakan perpaduan hewan yang berasal dari Asia dan Australia. Selain itu, buat kita yang hobi snorkeling, di sini juga surganya ikan dan terumbu karang. Setidaknya terdapat 253 spesies karang pembentuk terumbu, 70 spesies sponge, dan 1.000 spesies ikan. Di sanalah tempat hidup dugong, hiu, 14 jenis paus, lumba-lumba, dan kura-kura. \r\n\r\nHewan Purba Varanus Komodoensis alias Komodo\r\nKadal raksasa yang termasuk hewan purba ini pertama kali ditemukan tahun 1910 oleh Peter Ouwens, direktur Museum Zoologi Bogor. Dan saat ini populasi komodo hanya bisa ditemukan di Indonesia. Di Pulau Komodo terdapat sekitar 2.500 ekor komodo yang masuk dalam IUCN Red List of Threatened Species. ', NULL, '1', 'Pulau-Komodo-Pulau-Pink-3-Gama-Anantara.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ms_bukutamu`
--

CREATE TABLE IF NOT EXISTS `ms_bukutamu` (
  `id` smallint(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tgl` datetime DEFAULT NULL,
  `pesan` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `ms_bukutamu`
--

INSERT INTO `ms_bukutamu` (`id`, `nama`, `email`, `tgl`, `pesan`) VALUES
(4, 'faid', 'faid@yahoo.com', NULL, 'Mantap!!'),
(7, 'Kiki', 'ok@gmail', NULL, 'baik mas'),
(8, 'test1', 'test1@gmail.com', NULL, 'pesan 1'),
(9, 'test2', 'test2@gmail.com', NULL, 'Pesan 2'),
(10, 'test3', 'test3@gmail.com', NULL, 'Test 3'),
(11, 'test4', 'test4@gmail.com', NULL, 'pesan 4'),
(12, 'test 5', 'test5@gmail.com', NULL, 'Test 5'),
(13, 'Yoki', 'admin@yakami.com', NULL, 'Kami sangat puas dengan pelayanan dari Sribu dan juga hasil desain yang kami terima dari kontes ini. Hanya dalam beberapa hari kami telah menerima banyak sekali desain yang berkualitas untuk bisnis kami. Untuk memilih salah satu desain yang terbaik untuk bisnis kami sangatlah susah. Thanks a lot Sribu!'),
(14, 'faid', 'email', NULL, 'turrr'),
(15, 'wil', 'wil@yahoo.com', NULL, 'selamat  karya ini sangat bagus banget di  kembnagkan , saya yakin ini sangat bagus klo di kembangkan , oleh karena itu, admin harussemangat untuk sering update berita terbaru ya'),
(16, 'Madu', 'madu@yahoo.com', NULL, 'Semoga Website ini Berguna bagi Kita Semua!\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `ms_content`
--

CREATE TABLE IF NOT EXISTS `ms_content` (
  `id` smallint(6) NOT NULL,
  `deskripsi` longtext,
  `id_menu` smallint(6) DEFAULT NULL,
  `aktif` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_content`
--


-- --------------------------------------------------------

--
-- Table structure for table `ms_foto`
--

CREATE TABLE IF NOT EXISTS `ms_foto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_album` int(11) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `ms_foto`
--

INSERT INTO `ms_foto` (`id`, `id_album`, `foto`) VALUES
(23, 1, 'komodo1.jpg'),
(24, 1, '_pulau-komodo.jpg'),
(25, 1, 'komodo.jpg'),
(26, 1, 'komodo3.jpg'),
(27, 1, '2107488wisatawan-komodo780x390.jpg'),
(28, 6, 'kom2.jpg'),
(29, 6, 'kom6.jpg'),
(30, 6, 'kom15.jpg'),
(31, 6, 'pintu kom.jpg'),
(32, 7, '14.png');

-- --------------------------------------------------------

--
-- Table structure for table `ms_kategoriberita`
--

CREATE TABLE IF NOT EXISTS `ms_kategoriberita` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) DEFAULT NULL,
  `aktif` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ms_kategoriberita`
--

INSERT INTO `ms_kategoriberita` (`id`, `nama_kategori`, `aktif`) VALUES
(1, 'Internal', '1'),
(2, 'Eksternal', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ms_user`
--

CREATE TABLE IF NOT EXISTS `ms_user` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `user` varchar(10) DEFAULT NULL,
  `pass` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `ms_user`
--

INSERT INTO `ms_user` (`id`, `user`, `pass`) VALUES
(16, 'admin', 'admin'),
(17, 'wempi', 'wempi'),
(18, 'faid', 'faid');

-- --------------------------------------------------------

--
-- Table structure for table `polling`
--

CREATE TABLE IF NOT EXISTS `polling` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `pertanyaan` varchar(100) DEFAULT NULL,
  `jawab_a` varchar(20) DEFAULT NULL,
  `hasil_a` tinyint(2) DEFAULT NULL,
  `jawab_b` varchar(20) DEFAULT NULL,
  `hasil_b` tinyint(2) DEFAULT NULL,
  `jawab_c` varchar(20) DEFAULT NULL,
  `hasil_c` tinyint(2) DEFAULT NULL,
  `jawab_d` varchar(20) DEFAULT NULL,
  `hasil_d` tinyint(2) DEFAULT NULL,
  `jawab_e` varchar(20) DEFAULT NULL,
  `hasil_e` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `polling`
--

INSERT INTO `polling` (`id`, `pertanyaan`, `jawab_a`, `hasil_a`, `jawab_b`, `hasil_b`, `jawab_c`, `hasil_c`, `jawab_d`, `hasil_d`, `jawab_e`, `hasil_e`) VALUES
(10, 'Bagaimana Pendapat Anda Tentang Website ini?...', 'Baik Sekali', 9, 'Baik', 6, 'Cukup', 5, 'Kurang', 7, 'Kurang Sekali', 7);
