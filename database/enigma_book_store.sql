-- MySQL dump 10.13  Distrib 8.0.20, for macos10.15 (x86_64)
--
-- Host: 127.0.0.1    Database: enigma_book_store
-- ------------------------------------------------------
-- Server version	5.7.9

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text,
  `publisher` varchar(45) DEFAULT NULL,
  `year` int(4) NOT NULL,
  `page` int(4) NOT NULL,
  `language` varchar(20) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` VALUES (1,'Asesmen Pembelajaran Berbasis Komputer Dan Android','Implementasi Teknologi Informasi dan Komunikasi (TIK) pada lembaga pendidikan saat ini sudah menjadi keharusan, karena penerapan TIK dapat menjadi salah satu indikator keberhasilan suatu institusi pendidikan. Tidak sedikit dosen yang memanfaatkan kemajuan teknologi tersebut. Tren terbaru dalam dunia e-learning saat ini adalah penggunaan komputer dan media portable seperti smartphone untuk mengakses pembelajaran. Penggunaan perangkat pintar smartphone sebagai penunjang proses belajar mengajar ini dirasa bisa menambah fleksibilitas dalam kegiatan belajar mengajar.\nBuku ini diharapkan dapat menjadi pegangan dalam membangun ujian yang berbasis komputer atau handphone untuk penggunaan ujian dan seleksi. Pembaca diharapkan dapat secara mandiri mengimplementasikannya sesuai dengan kebutuhannya.','\nPrenadamedia Group',2020,238,'Indonesia',40,70000,'https://cdn.gramedia.com/uploads/items/Asesmen_Pembelajaran_Berbasis_Komputer_dan_Android.jpg'),(2,'Fs Mudah Membuat dan Berbisnis Aplikasi Android dengan Android Studio','Mudah Membuat dan Berbisnis Aplikasi Android dengan Android Studio Penulis: Yudha Yudhanto & Ardhi Wijayanto Pengembangan aplikasi digital untuk perangkat mobile (ponsel pintar dan tablet) merupakan salah satu bidang yang prospektif untuk terus dikembangkan. Terutama aplikasi berbasis Android. Karenanya, belajar membuat aplikasi Android dan berbisnis dengannya menjadi hal yang penting. Mudah Membuat dan Berbisnis Aplikasi Android dengan Android Studio berisi panduan langkah demi langkah untuk membuat aplikasi Android dengan Android Studio.','\nElex Media Komputindo',2021,192,'Indonesia',50,48800,'https://cdn.gramedia.com/uploads/items/ID_MMBAA2018MTH05MMBAA.jpg'),(3,'Pemrograman Web Seri Php: Langkah Mudah Dan Praktis Memahami','Saat ini, PHP banyak dipakai untuk membuat program situs web dinamis. Contoh aplikasi program PHP adalah forum (phpBB) dan MediaWiki (software di belakang Wikipedia). Sedangkan, Mambo, Joomla!, Postnuke, Xaraya, dan lain-lain merupakan contoh aplikasi yang lebih kompleks berupa CMS dan dibangun menggunakan PHP.','Start Up',2020,228,'Indonesia',45,49500,'https://cdn.gramedia.com/uploads/items/Pemrograman_WEb_PHP.jpg'),(4,'Mahir Bahasa Pemrograman PHP','Dengan pesatnya perkembangan teknologi saat ini, kita dituntut untuk bisa membuat dan mengembangkan sebuah sistem atau program berbasis web. Pembuatan sebuah sistem berbasis web bisa menggunakan berbagai macam bahasa pemrograman. Namun, pada umumnya orang menggunakan bahasa pemrograman PHP. PHP merupakan salah satu bahasa pemrograman web yang sangat populer. Bahasa pemrograman yang dibuat oleh Rasmus ini wajib dikuasai oleh semua kalangan yang ingin ahli dalam pemrograman web, khususnya web developer. Oleh karena itu, buku ini hadir untuk memaparkan dan memandu cara menguasai pemrograman PHP dengan mudah. Dalam buku ini akan dijelaskan step by step, dimulai dari teori beserta contoh-contoh kode PHP yang mudah dipahami. Buku ini sangat komplet bagi Anda yang ingin menguasai bahasa pemrograman PHP. Pembahasan dimulai dari tingkat dasar hingga Anda benar-benar bisa membuat sebuah program berbasis web menggunakan bahasa pemrograman PHP.','Elex Media Computindo',2019,224,'Indonesia',50,60800,'https://cdn.gramedia.com/uploads/items/9786020498768_Mahir_Bahasa_.jpg'),(5,'Belajar Sendiri Vba Macro Excel Untuk Pemula','Visual Basic for Applications (VBA) atau yang dikenal dengan istilah Macro, merupakan fitur Excel yang sangat populer. VBA Macro dapat digunakan untuk mengotomatisasi pekerjaan sehingga pekerjaan yang bersifat rutin dapat diselesaikan dengan lebih mudah dan cepat. Kecanggihan VBA Macro dalam mengotomatisasi pekerjaan membuat banyak pengguna Excel yang semakin tertarik untuk mempelajarinya. Belajar Sendiri VBA Macro Excel untuk Pemula ini membahas secara lengkap cara menggunakan VBA Macro secara optimal. Pembahasan diberikan secara sederhana, ringan, dan tidak bertele-tele sehingga sangat cocok digunakan oleh pengguna pemula yang ingin mempelajari dan menguasai VBA Macro Excel dalam waktu singkat. Setiap materi pembahasan disertai contoh kasus yang umum dijumpai sehari-hari sehingga Anda akan diajak langsung praktek, tidak hanya dalam batasan teori. Pembahasan dalam buku ini dapat diaplikasikan untuk Excel 2007, 2010, 2013, 2016, 2019, dan Excel 365. Materi pembahasan dilengkapi ratusan file latihan yang dapat di-download secara gratis agar proses belajar menjadi lebih efektif dan efisien. Keterampilan: Pemula, Menengah Kelompok: Aplikasi Perkantoran Jenis buku: Referensi, Tutorial','Elex Media Computindo',2021,392,'Indonesia',20,100000,'https://cdn.gramedia.com/uploads/items/9786230027123_CoverDepan_Belajar_Sendiri_VBA_Macro_Excel_untuk_Pemula.jpg'),(10,'Belajar Sendiri Mengolah Data Dengan Python Dan Pandas','Bagi perusahaan modern, data adalah harta karun berharga. Oleh karena itu, perusahaan seperti ini tidak merasa rugi untuk membayar mahal seorang pengolah data dan analisis data yang mau bekerja meneliti tren di balik data. Oleh karena itu, buku ini hadir untuk membantu Anda memahami bagaimana data-data diolah dan divisualisasikan dengan menggunakan bahasa pemrograman paling populer, yaitu Python dan Pandas. Buku ini tidak memandang apakah Anda sudah pernah bekerja dengan Python atau belum sebab pembahasan dimulai dari level pemula. Selanjutnya, topik-topik unggulan akan Anda peroleh seperti: • Pengenalan data pada Python • Pembuatan Series dan DataFrame • Menggunakan Python, Matplotlib, dan Seaborn untuk menganalisis data. • Bekerja dengan file CSV • Topik-topik Python dasar seperti list, dictionary, kondisional If, perulangan, dan lain sebagainya. • Visualisasi data menggunakan bar chart, pie chart, dan line chart. • Dan lain sebagainya. Jadi jika Anda ingin bekerja dengan bayaran mahal, maka bekerjalah dengan data. Buku ini akan menjelaskan dasar-dasar bagaimana menjadi orang yang sanggup bekerja dengan data. (thinkjubilee)','Elex Media Computindo',2021,232,'Indonesia',20,52000,'https://cdn.gramedia.com/uploads/items/9786230026218_Cov_Belajar_Sendiri_Mengolah_Data_dengan_Python_dan_Pandas.jpg');
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `member`
--

LOCK TABLES `member` WRITE;
/*!40000 ALTER TABLE `member` DISABLE KEYS */;
INSERT INTO `member` VALUES (3,'Jane','Jane','janejane@gmail.com','janejane','password'),(4,'Luke','Aiden','luke.aiden@outlook.co.id','luke129','d0f2de86-1079-11ec-9a48-299a8cee0754'),(5,'Achmada','Fiqri','achmada1998@gmail.com','bni_intern_achmada','password'),(6,'Aithra','Bouty','aithrabouty@gmail.com','bni_intern_aithra','password'),(7,'Alfian','Hidayat','hidayatullohalfian@gmail.com','bni_intern_alfian','password'),(8,'Dimas','Arif','18081010093@student.upnjatim.ac.id','bni_intern_dimas','password'),(9,'Haura','Salka','haura.athaya@gmail.com','bni_intern_haura','password'),(10,'Inez','Amanda','inez.amanda16@gmail.com','bni_intern_inez','password');
/*!40000 ALTER TABLE `member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaction`
--

DROP TABLE IF EXISTS `transaction`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `factur` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `grand_total` int(11) DEFAULT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_member_idx` (`member_id`),
  CONSTRAINT `fk_member` FOREIGN KEY (`member_id`) REFERENCES `member` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaction`
--

LOCK TABLES `transaction` WRITE;
/*!40000 ALTER TABLE `transaction` DISABLE KEYS */;
INSERT INTO `transaction` VALUES (1,'20210912IKZVRFBW','2021-09-12',9,339100,0,0);
/*!40000 ALTER TABLE `transaction` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaction_detail`
--

DROP TABLE IF EXISTS `transaction_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transaction_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `factur` varchar(30) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_book_idx` (`book_id`),
  KEY `fk_transaction_idx` (`factur`),
  CONSTRAINT `fk_book` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaction_detail`
--

LOCK TABLES `transaction_detail` WRITE;
/*!40000 ALTER TABLE `transaction_detail` DISABLE KEYS */;
INSERT INTO `transaction_detail` VALUES (1,'20210912IKZVRFBW',1,70000,2),(2,'20210912IKZVRFBW',2,48800,2),(3,'20210912IKZVRFBW',10,52000,1),(4,'20210912IKZVRFBW',3,49500,1);
/*!40000 ALTER TABLE `transaction_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaction_from_midtrans`
--

DROP TABLE IF EXISTS `transaction_from_midtrans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transaction_from_midtrans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `factur` varchar(45) DEFAULT NULL,
  `payment_type` varchar(120) DEFAULT NULL,
  `bank` varchar(120) DEFAULT NULL,
  `va_number` varchar(120) DEFAULT NULL,
  `biller_code` varchar(120) DEFAULT NULL COMMENT 'for Bank Mandiri',
  `transaction_status` varchar(120) DEFAULT NULL,
  `transaction_time` varchar(120) DEFAULT NULL,
  `pdf_url` varchar(120) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL,
  `date_modified` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaction_from_midtrans`
--

LOCK TABLES `transaction_from_midtrans` WRITE;
/*!40000 ALTER TABLE `transaction_from_midtrans` DISABLE KEYS */;
INSERT INTO `transaction_from_midtrans` VALUES (1,'20210912IKZVRFBW','bank_transfer','bca','45508578358','','pending','2021-09-12 05:01:46','https://app.sandbox.midtrans.com/snap/v1/transactions/57595fd7-1e62-40a0-83f4-69944eab926b/pdf',1631397708,1631397708);
/*!40000 ALTER TABLE `transaction_from_midtrans` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-09-12  5:07:53
