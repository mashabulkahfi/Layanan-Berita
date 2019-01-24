-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2018 at 03:10 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berita`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(10) NOT NULL,
  `judul_berita` text NOT NULL,
  `tanggal_publish_berita` date NOT NULL,
  `nama_penulis_berita` text NOT NULL,
  `photo_berita` varchar(255) NOT NULL,
  `konten_berita` text NOT NULL,
  `kategori_berita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `tanggal_publish_berita`, `nama_penulis_berita`, `photo_berita`, `konten_berita`, `kategori_berita`) VALUES
(1, 'Jago Serang Server Musuh, Mahasiswa ITB Pertahankan Juara di Cyber Jawara 2018\r\n', '2018-10-16', 'Anne Rufaidah\r\n', '1.jpg\r\n', 'BANDUNG, LK -  Setelah sebelumnya sempat menjuarai Cyber Jawara di 2017, tim mahasiswa Institut Teknologi Bandung (ITB) yang tergabung dalam tim JAV, akhirnya mampu mempertahankan gelar juaranya di Cyber Jawara 2018, pada laga final di CodeBali, 12 Oktober 2018 lalu. Kompetisi jenis capture the flag ini adalah sejenis lomba information security, dimana tim diuji kemampuannya untuk menyerang celah keamanan tim lain, serta mempertahankan tim sendiri dari serangan tim lainnya. “Penilaian juri bersifat objektif, yaitu jumlah successful attack dan successful defense terhadap masing-masing aplikasi yang diberikan,” ujar salah seorang anggota tim JAV, Jason Jeremy Iman. \r\n', 'Lomba\r\n'),
(2, 'Membangun Karir di Industri E-Commerce bersama Bhinneka.com', '2018-10-16', 'Anne Rufaidah', '2.jpg', 'BANDUNG, LK ? Sudah tiba saatnya para lulusan perguruan tinggi untuk berkontribusi pada negeri, baik dari segi statusnya sebagai seorang tenaga kerja baru, maupun sebagai individu di era milenial dengan tantangan dunia kerja yang serba cepat dan akurat. Perusahaan e-commerce Bhinneka.com mengajak lulusan Institut Teknologi Bandung (ITB) untuk berkarir dan berkarya menyiapkan segudang strategi pengembangan bisnis. Melalui event Bhinneka Campus Zone 2018 yang digelar di Auditorium Campus Center Timur ITB (16/10/2018), Bhinneka mengadakan seminar bertajuk ?How Can Young Generation Impact\'s Company??, dimana mereka menantang kaum muda ITB agar mau bergabung dan membuat perubahan dan pengembangan dalam dunia kerja e-commerce.', 'Seminar'),
(3, 'Transformasi Kepemimpinan Versi Ignasius Jonan', '2018-10-17', 'Anne Rufaidah', '3.jpg', 'BANDUNG, LK ?  Menteri Energi dan Sumber Daya Mineral (ESDM) Republik Indonesia, Ignasius Jonan memberikan kuliah umum pada Studium Generale KU 4078 yang digelar di Aula Barat Kampus ITB (17/10/2018). Pada kesempatan tersebut, mantan Direktur Utama  PT Kereta Api Indonesia (KAI) itu menyampaikan paparan mengenai pentingnya sebuah kepemimpinan yang logis dan bertanggung jawab. ?Sekolah itu mengajarkan kita cara berpikir yang sistematis, logis, dan berdasarkan data empiris. Namun dibalik itu semua, apapun yang kita lakukan sebagai pemimpin, kita harus menjalankannya dengan akal sehat,?ujarnya.', 'Seminar'),
(4, 'Parade Wisuda Oktober 2018, Ajang Apresiasi Massa Kampus ITB Untuk Para Wisudawan', '2018-10-20', 'Anne Rufaidah', '4.jpg', 'BANDUNG, LK ? Lebih dari 1600 mahasiswa Sarjana ITB telah diwisuda pagi ini (20/10/2018) di Sasana Budaya Ganesha ITB. Proses wisuda yang telah dilewati pun dimeriahkan dengan tradisi rutin mahasiswa ITB yakni Parade Wisuda Oktober 2018, berupa arak-arakan wisudawan beserta himpunannya masing-masing di seputar Kampus ITB.', 'Kegiatan/Acara'),
(5, 'Ribuan Calon Pekerja Padati ITB Integrated Career Days 2018', '2018-10-27', 'Anne Rufaidah', '5.jpg', 'BANDUNG, LK ? Ribuan pencari kerja memadati event ITB Integrated Career Days 2018 yang digelar pada 27-28 Oktober 2018 di Aula Timur dan Aula Barat Kampus ITB, jalan Ganesha no. 10 Bandung. Acara ini dibuka oleh Wakil Rektor Bidang Akademik dan Kemahasiswaan ITB, Prof. Dr. Ir. Berwami Priyatna Iskandar M.Sc., Ph.D dan perwakilan dari perusahaan yang turut menjadi peserta event seperti Shopee Indonesia, Astra International, Paragon, Shimizu, Bank BTN, Tokopedia, dan lainnya. Direktur ITB Career Center, Dr. Eng. Bambang Setia Budi menuturkan, perusahaan yang bergabung pada event kali ini cukup beragam. Namun, menurutnya paling banyak adalah pekerjaan yang berkaitan dengan digital, dimana hal ini sesuai dengan kondisi dan perkembangan saat ini.', 'Internship'),
(6, 'Beasiswa Hankook Bentuk Apresiasi Bagi Mahasiswa ITB', '2018-10-30', 'Nuru Fitry', '6.jpg', 'Mendukung salah satu program Corporate Social Responsibility (CSR)-nya, PT Hankook Tire Indonesia berikan beasiswa bagi 15 mahasiswa ITB. Berupa uang kuliah sebesar Rp 8 juta setiap mahasiswa, beasiswa ini berlaku selama satu semester. Tak hanya melihat kondisi ekonomi, beasiswa ini diberikan kepada para mahasiswa dengan prestasi yang baik. Kegiatan penyerahan beasiswa dan penandatanganan kerjasama berlangsung di Ruang Rapat Lembaga Kemahasiswaan ITB, Senin (29/10/2018). Presiden Direktur PT Hankook Tire Indonesia, Kim Jae Hee mengatakan senang dan bangga bisa bertemu dengan para penerima beasiswa.', 'Beasiswa'),
(7, 'ITB Raih Juara 2 dan Juara 3 dalam Kompetisi Bisnis Nasional 2018', '2018-11-12', 'Anne Rufaidah', '7.jpg', 'BANDUNG, LK ? Mahasiswa Institut Teknologi Bandung (ITB) berhasil meraih juara 2 dan juara 3 untuk kategori analisis riset investasi, di ajang Kompetisi Bisnis Nasional (KBN) 2018, yang diselenggarakan oleh Sekolah Bisnis Manajemen ITB dan didukung oleh Ditjen Pembelajaran dan Kemahasiswaan Kemenristek Dikti, pada 8-9 November 2018 lalu. Kompetisi yang mengusung tema Innovation for Humanity ini, mengadu tim-tim handal di bidang bisnis dan management dari berbagai perguruan tinggi di Indonesia. Mereka bersaing dalam beberapa kategori diantaranya analisis riset invenstasi, analisis kasus bisnis humas resources-knowledge management, dan perencanaan bisnis dengan aspek social berkelanjutan.', 'Lomba'),
(8, 'Aksantara ITB Raih Juara 2 di Kontes Robot Terbang Indonesia 2018', '2018-11-14', 'Anne Rufaidah', '8.jpg', 'BANDUNG, LK- Organisasi Kemahasiswaan Institut Teknologi Bandung (ITB) yakni Tim Aksantara, berhasil memboyong beberapa juara dalam kompetisi nasional bergengsi Kontes Robot Terbang Indonesia (KRTI) 2018 di Kota Baru Lampung pada 5-9 November 2018 lalu. Tim tersebut berhasil meraih juara 2 untuk kategori Fixed Wing, dan juara 2 kategori Technology Development.  Ketua Tim Aksantara, Nathan, mengungkapkan kompetisi ini adalah ajang kompetisi pesawat tanpa awak skala nasional yang diselenggarakan oleh Kemenristek Dikti sejak tahun 2013.  Tiap tahunnya, Aksantara ITB selalu mengirimkan tim di seluruh divisi yang tersedia. Tahun ini, KRTI 2018 yang diikuti oleh 8 tim dari 38 universitas di seluruh tanah air. ITB sendiri mengirimkan total 4 tim yang terdiri dari divisi Fixed Wing (FW), Racing Plane (RP), Technology Development (TD), dan Vertical Take Off Landing (VTOL).', 'Lomba'),
(9, 'Berkembang Pesat Bersama ABB Jurgen Dormann Foundation', '2018-11-16', 'Anne Rufaidah', '9.jpg', 'BANDUNG, LK- Meniti karir di perusahaan internasional  adalah impian banyak orang. Mahasiswa Institut Teknologi Bandung (ITB) memiliki kesempatan yang luas untuk berkiprah di perusahaan semacam ini, salah satunya di ABB Jurgen Dormann Foundation. Melalui program Graduate Engineering Program (GEP), mahasiswa ITB secara terbuka bisa mendapatkan kesempatan untuk memulai karirnya di kancah internasional. Talent Partner PT. ABB Sakti Industri, Fifi Familianti menuturkan, program GEP bertujuan untuk mencari leader baru bagi ABB agar mampu mengembangkan sisi bisnis secara lebih meluas. Posisi leader ini pun tidak hanya pada tatara staf saja, melainkan juga untuk managerial level. Mereka yang baru lulus dan mengikuti program GEP ABB ini pun akan dibina dan diberikan program pelatihan dengan kurikulum yang jelas dan terarah.', 'Beasiswa'),
(10, 'Miliki Rumah Impian dengan Investasi Sejak Dini', '2018-11-16', 'Anne Rufaidah', '10.jpg', 'BANDUNG, LK- Memiliki rumah adalah impian semua orang, tidak terkecuali mereka yang masih mengenyam pendidikan atau berstatus mahasiswa. Untuk meraih impian tersebut, diperlukan konsistensi dalam management keuangan, termasuk memiliki investasi sejak dini. Dalam mendukung hal tersebut maka Kementrian Pekerjaan Umum dan Perumahan Rakyat bersama BNI Asset Management, BNI Securitas serta Lembaga Kemahasiswaan ITB menggelar seminar Rumahku Impianku di Ruang Multi-Purpose Gedung CRCS Kampus ITB pada 13 November 2018 lalu.', 'Seminar'),
(11, 'Memaksimalkan Sinergitas Pengembangan Kegiatan Kemahasiswaan ITB', '2018-11-16', 'Anne Rufaidah', '11.jpg', 'BANDUNG, LK ? Dalam rangka meningkatkan sinergitas antara Lembaga Kemahasiswaan dengan Unit Kegiatan Kemahasiswaan (UKM) ITB maka digelar Workshop Pengembangan dan Evaluasi Unit Kegiatan Kemahasiswaan ITB di The Jayakarta Bandung Suite Hotel and Resort, pada 15 November 2018, kemarin. Wakil Rektor Bidang Akademik dan Kemahasiswaan ITB, Prof. Ir. Bermawi Priyatna Iskandar,M.Sc., Ph.D mengungkapkan, ada sekitar 130 wadah kegiatan kemahasiswaan di ITB, dan 87  diantaranya merupakan unit kegiatan mahasiswa di luar himpunan. Dengan jumlah mahasiswa ITB yang begitu banyak, ia menyebutkan sekitar 70 persen mahasiswa melakukan kegiatan di UKM  dan himpunan tersebut. Keaktifan mahasiswa ITB disambut baik dengan dana yang cukup besar untuk setiap kegiatannya.', 'Seminar'),
(12, 'Pagupon 2018, Ajang Unjuk Gigi Para Pelaksana Pengmas', '2018-11-23', 'Anne Rufaidah', '12.jpg', 'BANDUNG, LK ?  Untuk mengapresiasi mahasiswa maupun lembaga yang turut mendorong terlaksananya kegiatan Pengabdian Masyarakat (pengmas), Kabinet Keluarga Mahasiswa Institut Teknologi Bandung (KM-ITB) bersama Lembaga Kemahasiswaan ITB menggelar acara Pagupon 2018 di Lapangan Basket ITB pada 16 November 2018 lalu. Dalam acara yang digelar selama satu hari penuh itu turut hadir kelompok-kelompok mahasiswa yang telah melaksanakan pengmas di berbagai daerah. Kelompok-kelompok tersebut menyajikan laporan pengmas dalam bentuk visualisasi yang tertata di setiap booth yang disediakan.', 'Kegiatan/Acara'),
(13, 'Nyoman Nuarta : Lebih dari Sekedar Patung, GWK Adalah Identitas Indonesia', '2018-11-27', 'Anne Rufaidah', '13.jpg', 'BANDUNG, LK ? Pembangunan patung Garuda Wisnu Kencana (GWK) di Bali menghabiskan waktu sekitar 28 tahun. Waktu yang terbilang sangat lama, mengingat patung tersebut bahkan dibangun melewati beberapa era pergantian kepresidenan Republik Indonesia. Sang senimn yang membangun patung tersebut, Nyoman Nuarta, menuturkan kisah suka maupun duka saat menjalani proses pembuatan patung GWK di hadapan ratusan mahasiswa Institut Teknologi Bandung (ITB) dalam acara Studium Generale KU 4078 yang digelar di Aula Barat Kampus ITB Ganesha, beberapa waktu lalu.', 'Seminar'),
(14, 'Tommy dan Grace, Juara 1 Kompetisi Stem Cell di Jepang', '2018-11-27', 'Anne Rufaidah', '14.jpg', 'BANDUNG,LK ? Dua mahasiswa Institut Teknologi Bandung (ITB) berhasil meraih Juara1 dalam ajang kuis stem cell dan regenerative medicine di Shibaru Institute of Technology, Jepang, belum lama ini. Tommy Octavianus Soetrisno dan Grace Aprilia Heleaa, berhasil nenyisihkan puluhan peserta lain yang berasal dari berbagai negara. ?Pada awalnya kami mengetahui lomba ini dari kakak tingkat kami di prodi Biologi. Saat itu, kami ingin ikut kuis ini dan hanya sekedar coba-coba saja, namun ternyata kami pun tidak menyangka bisa lolos hingga babak final di Jepang,? ujar Tommy.', 'Lomba');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `pilihan_kategori` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `pilihan_kategori`) VALUES
(1, 'Muhammad Ashabul Kahfi', 'mashabulkahfi8@gmail.com', 'kahfi1234', 'Beasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
