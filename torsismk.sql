# Host: localhost  (Version 5.5.5-10.1.28-MariaDB)
# Date: 2017-12-27 10:22:22
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "tbl_absensi"
#

DROP TABLE IF EXISTS `tbl_absensi`;
CREATE TABLE `tbl_absensi` (
  `id_absensi` int(225) NOT NULL AUTO_INCREMENT,
  `nip` varchar(100) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `kode_mapel` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `tgl_absensi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_absensi`)
) ENGINE=MyISAM AUTO_INCREMENT=230 DEFAULT CHARSET=latin1;

#
# Data for table "tbl_absensi"
#

/*!40000 ALTER TABLE `tbl_absensi` DISABLE KEYS */;
INSERT INTO `tbl_absensi` VALUES (218,'2761998','10159640','C2-3.1','Hadir','2017-12-26 22:58:20'),(219,'2761998','10159642','C2-3.1','Hadir','2017-12-26 22:58:42'),(220,'2761998','10159643','C2-3.1','Hadir','2017-12-26 22:59:11'),(221,'2761998','10159643','C2-3.1','Hadir','2017-12-26 23:06:08'),(222,'2761998','10159642','C2-3.1','Izin','2017-12-26 23:36:16'),(223,'2761998','10159642','C2-3.1','Sakit','2017-12-26 23:36:30'),(224,'2761998','10159643','C2-3.1','Alpha','2017-12-26 23:36:36'),(225,'2761998','10159647','C2-3.1','Izin','2017-12-26 23:38:41'),(226,'2761998','10159649','C2-3.1','Sakit','2017-12-26 23:38:56'),(227,'2761998','10159650','C2-3.1','Izin','2017-12-26 23:46:25'),(228,'2761998','10159648','C2-3.1','Alpha','2017-12-26 23:46:40'),(229,'2761998','10159649','C2-3.1','Sakit','2017-12-26 23:46:50');
/*!40000 ALTER TABLE `tbl_absensi` ENABLE KEYS */;

#
# Structure for table "tbl_detail_jadwal"
#

DROP TABLE IF EXISTS `tbl_detail_jadwal`;
CREATE TABLE `tbl_detail_jadwal` (
  `id_jadwal` int(225) NOT NULL AUTO_INCREMENT,
  `nip` varchar(100) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `kode_kelas` varchar(100) NOT NULL,
  `kode_mapel` varchar(100) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `img_jadwal` varchar(100) NOT NULL,
  `jam_mulai` varchar(10) NOT NULL DEFAULT '',
  `jam_selesai` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_jadwal`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

#
# Data for table "tbl_detail_jadwal"
#

/*!40000 ALTER TABLE `tbl_detail_jadwal` DISABLE KEYS */;
INSERT INTO `tbl_detail_jadwal` VALUES (40,'1761998','10159650','C2','C3-4.2-PemrMobile','Selasa','ic_jadwal.png','09:20','11:47'),(41,'2761998','10159650','C2','C3-3.2-PemrMobile','Senin','ic_jadwal.png','12:00','14:48'),(42,'3762000','10159650','C2','C3-3.1-PemrMobile','Selasa','ic_jadwal.png','08:00','10:10'),(43,'1761998','10159650','C2','C3-3.1 ','Senin','ic_jadwal.png','08:00','10:10'),(44,'1761998','10159648','C2','C3-3.1 ','Senin','ic_jadwal.png','08:00','10:10'),(45,'1761998','10159649','C2','C3-3.1 ','Senin','ic_jadwal.png','08:00','10:10'),(46,'2761998','10159650','C2','C2-3.1','Senin','ic_jadwal.png','09:00','12:00'),(47,'2761998','10159648','C2','C2-3.1','Senin','ic_jadwal.png','09:00','12:00'),(48,'2761998','10159649','C2','C2-3.1','Senin','ic_jadwal.png','09:00','12:00'),(49,'2761998','10159647','C2','C2-3.1','Senin','ic_jadwal.png','09:00','12:00'),(50,'2761998','10159646','C2','C2-3.1','Senin','ic_jadwal.png','09:00','12:00'),(51,'2761998','10159645','C2','C2-3.1','Senin','ic_jadwal.png','09:00','12:00'),(52,'2761998','10159644','C2','C2-3.1','Senin','ic_jadwal.png','09:00','12:00'),(53,'2761998','10159643','C2','C2-3.1','Senin','ic_jadwal.png','09:00','12:00'),(54,'2761998','10159642','C2','C2-3.1','Senin','ic_jadwal.png','09:00','12:00'),(55,'2761998','10159640','C2','C2-3.1','Senin','ic_jadwal.png','09:00','12:00');
/*!40000 ALTER TABLE `tbl_detail_jadwal` ENABLE KEYS */;

#
# Structure for table "tbl_detail_nilai"
#

DROP TABLE IF EXISTS `tbl_detail_nilai`;
CREATE TABLE `tbl_detail_nilai` (
  `id_nilai` int(225) NOT NULL AUTO_INCREMENT,
  `nip` varchar(100) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `kode_mapel` varchar(100) NOT NULL,
  `nilai_uh` varchar(100) NOT NULL,
  `nilai_tugas` varchar(100) NOT NULL,
  `nilai_uts` varchar(100) NOT NULL,
  `nilai_uas` varchar(100) NOT NULL,
  `nilai_akhir` varchar(100) NOT NULL,
  `img_nilai` varchar(100) NOT NULL,
  `nilai_pengetahuan` varchar(100) NOT NULL DEFAULT '',
  `nilai_keterampilan` varchar(255) NOT NULL DEFAULT '',
  `kkm` varchar(100) NOT NULL DEFAULT '',
  `kompetensi` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_nilai`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

#
# Data for table "tbl_detail_nilai"
#

/*!40000 ALTER TABLE `tbl_detail_nilai` DISABLE KEYS */;
INSERT INTO `tbl_detail_nilai` VALUES (47,'2761998','10159650','C3-3.1 ','80','80','80','80','80','','80','80','70','tercapai'),(48,'3762000','10159648','C3-3.1 ','80','80','80','80','80','','80','80','70','tercapai'),(49,'2761998','10159640','C2-3.1','80','80','80','80','80','','80','80','70',''),(50,'2761998','10159642','C2-3.1','80','80','80','80','80','','80','80','',''),(51,'2761998','10159645','C2-3.1','80','80','80','80','80','','80','80','tidak tercapai',''),(52,'2761998','10159640','C2-3.1','80','80','80','80','80','','80','80','70','tidak tercapai'),(53,'2761998','10159642','C2-3.1','80','80','80','80','80','','80','80','60','tercapai'),(54,'2761998','10159640','C2-3.1','80','80','80','80','80','','80','80','70','tercapai'),(55,'2761998','10159640','C2-3.1','56','56','56','56','56','','56','56','70','tidak tercapai'),(56,'2761998','10159642','C2-3.1','80','80','80','80','80','','80','80','70','tercapai');
/*!40000 ALTER TABLE `tbl_detail_nilai` ENABLE KEYS */;

#
# Structure for table "tbl_detail_ujian"
#

DROP TABLE IF EXISTS `tbl_detail_ujian`;
CREATE TABLE `tbl_detail_ujian` (
  `id_ujian` int(225) NOT NULL AUTO_INCREMENT,
  `kode_kelas` varchar(100) NOT NULL,
  `kode_mapel` varchar(100) NOT NULL,
  `tgl_ujian` varchar(100) NOT NULL,
  `jam_mulai` varchar(100) NOT NULL,
  `jam_selesai` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `img_ujian` varchar(100) NOT NULL,
  `hari` varchar(10) NOT NULL,
  PRIMARY KEY (`id_ujian`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

#
# Data for table "tbl_detail_ujian"
#

/*!40000 ALTER TABLE `tbl_detail_ujian` DISABLE KEYS */;
INSERT INTO `tbl_detail_ujian` VALUES (12,'C2','C3-4.2-PemrMobile','2017-12-18','08:00','10:00','Ulangan Harian','ic_ujian.png',''),(13,'C2','C3-3.1 ','2018-01-03','08:00','09:35','Ujian Tengah Semester','ic_ujian.png','');
/*!40000 ALTER TABLE `tbl_detail_ujian` ENABLE KEYS */;

#
# Structure for table "tbl_guru"
#

DROP TABLE IF EXISTS `tbl_guru`;
CREATE TABLE `tbl_guru` (
  `nip` varchar(100) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `matpel` varchar(100) NOT NULL,
  `gr` varchar(10) NOT NULL,
  `foto` varchar(100) NOT NULL DEFAULT 'ids.jpg',
  PRIMARY KEY (`nip`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

#
# Data for table "tbl_guru"
#

/*!40000 ALTER TABLE `tbl_guru` DISABLE KEYS */;
INSERT INTO `tbl_guru` VALUES ('05762017','Ganjar, S.Kom','Bandung','6651173','123456','','','ids.jpg'),('1078999','Yunisa Pratiwi','Bandung','6651173','345666','','','ids.jpg'),('1761998','Abu Darin, S.Ag','Anggaraja - Cimahi','6651173','202cb962ac59075b964b07152d234b70','','bk','ids.jpg'),('2761998','Heni Mulyani, S.Kom','Cipata - Padalarang','6651173','2768','','','ids.jpg'),('3762000','Razi Rumi K, ST','Kopo Bandung','6651173','827ccb0eea8a706c4c34a16891f84e7b','','guru','ids.jpg'),('4762011','Rifki, S.Kom','Cijerah - Bandung','6651173','12345','','','ids.jpg');
/*!40000 ALTER TABLE `tbl_guru` ENABLE KEYS */;

#
# Structure for table "tbl_kelas"
#

DROP TABLE IF EXISTS `tbl_kelas`;
CREATE TABLE `tbl_kelas` (
  `id_kelas` int(225) NOT NULL AUTO_INCREMENT,
  `kode_kelas` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `sub_kelas` varchar(100) NOT NULL,
  `nip` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

#
# Data for table "tbl_kelas"
#

/*!40000 ALTER TABLE `tbl_kelas` DISABLE KEYS */;
INSERT INTO `tbl_kelas` VALUES (10,'A1','X','RPL1','1761998'),(11,'A2','X','RPL2','2761998'),(12,'B1','XI','RPL1','3762000'),(13,'B2','XI','RPL2','4762011'),(15,'C2','XII','RPL2','7782017');
/*!40000 ALTER TABLE `tbl_kelas` ENABLE KEYS */;

#
# Structure for table "tbl_kelmapel"
#

DROP TABLE IF EXISTS `tbl_kelmapel`;
CREATE TABLE `tbl_kelmapel` (
  `kd_mapel` varchar(10) NOT NULL,
  `mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tbl_kelmapel"
#

INSERT INTO `tbl_kelmapel` VALUES ('C3-7','Pemrograman Perangkat Bergerak'),('C3-1','Pemodelan Perangkat Lunak'),('C3-2','Pemrograman Desktop'),('C3-3','OOP'),('C3-4','Basis Data'),('C3-5','Pemrograman Web Dinamis'),('C3-6','Pemrograman Graphic'),('C3-8','Administrasi Basis Data'),('C3-9','Kerja Proyek'),('C1-10','Fisika'),('C1-11','Pemrograman Dasar'),('C1-12','Sistem Komputer'),('C2-13','Perakitan Komputer'),('C2-14','Simulasi Digital'),('C2-15','Sistem Operasi'),('C2-16','Jaringan Dasar'),('C2-17','Pemrograman Web');

#
# Structure for table "tbl_mapel"
#

DROP TABLE IF EXISTS `tbl_mapel`;
CREATE TABLE `tbl_mapel` (
  `id_mapel` int(225) NOT NULL AUTO_INCREMENT,
  `kode_mapel` varchar(100) NOT NULL,
  `mapel` varchar(100) NOT NULL,
  `jam_mulai` varchar(100) NOT NULL,
  `jam_selesai` varchar(100) NOT NULL,
  `kd_mapel` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_mapel`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

#
# Data for table "tbl_mapel"
#

/*!40000 ALTER TABLE `tbl_mapel` DISABLE KEYS */;
INSERT INTO `tbl_mapel` VALUES (20,'C3-3.1 ','Pemrograman Perangkat Bergerak - Memahami teknologi pengembangan aplikasi mobile','','','C3-7'),(22,'C3-3.2','Pemrograman Perangkat Bergerak - Memahami teknik desain aplikasi mobile','','','C3-7'),(23,'C3-4.2','Pemrograman Perangkat Bergerak - Menyajikan desain aplikasi berbasis mobile','','','C3-7'),(24,'C3-3.3','Pemrograman Perangkat Bergerak - Memahami teknik desain aplikasi multiwindow','','','C3-7'),(25,'C1-3.1','Pemrograman Dasar - Mendeskripsikan Operasi Aritmetika','','','C1-11'),(26,'C1-3.2','Pemrograman Dasar - Mendeskripsikan Operasi Logika','','','C1-11'),(27,'C2-3.1','Sistem Operasi - Sistem Operasi Closed Source','','','C2-15');
/*!40000 ALTER TABLE `tbl_mapel` ENABLE KEYS */;

#
# Structure for table "tbl_orangtua"
#

DROP TABLE IF EXISTS `tbl_orangtua`;
CREATE TABLE `tbl_orangtua` (
  `id_ortu` int(225) NOT NULL AUTO_INCREMENT,
  `nio` int(225) NOT NULL,
  `nama_ortu` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `nis` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id_ortu`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

#
# Data for table "tbl_orangtua"
#

/*!40000 ALTER TABLE `tbl_orangtua` DISABLE KEYS */;
INSERT INTO `tbl_orangtua` VALUES (1,412345,'Bambang Santosa','Malang Sukun Jawa timur','085674555287','2013804390','ortu'),(4,412348,'Sumanto','Malang Kota','086765444324','130403020035','suma'),(6,412345,'Bambang Santosa','Malang Sukun Jawa timur','085674555287','130403020035','ortu'),(7,1602001,'ALIMUDDIN','KAMPUNG TENGAH NONGSA ','081364379550','0012355667','alimuddin'),(9,10171,'Mamat Asikin','Cimahi','6651173','10159650','6612'),(10,10172,'Mahmud','Padalarang','6651173','10159649','6789'),(11,10273,'Ferry','Cimahi','6651173','10159647','999'),(12,10274,'Supardi R','Cimahi','6651173','10159646','8888');
/*!40000 ALTER TABLE `tbl_orangtua` ENABLE KEYS */;

#
# Structure for table "tbl_pengumuman"
#

DROP TABLE IF EXISTS `tbl_pengumuman`;
CREATE TABLE `tbl_pengumuman` (
  `id_p` int(225) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `detail` varchar(1000) NOT NULL,
  `tgl` varchar(100) NOT NULL,
  `img_p` varchar(100) NOT NULL,
  PRIMARY KEY (`id_p`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

#
# Data for table "tbl_pengumuman"
#

/*!40000 ALTER TABLE `tbl_pengumuman` DISABLE KEYS */;
INSERT INTO `tbl_pengumuman` VALUES (21,'Simulasi 2','Simulasi 2 UNBK Tahun 2018, Dilaksanakan Minggu ke-2 bulan Januari 2018','26-12-2017','ic_pengumuman.png'),(22,'Try Out Kelas XII','Try Out ke-2 Dilaksanakan tanggal 3 Januari 2018','26-12-2017','ic_pengumuman.png'),(23,'Uji Kompetensi Kelas XII','Pelaksanaan Uji Kompetensi Kelas XII dilaksanakan selama 3 hari di akhir bula Februari 2018','26-12-2017','ic_pengumuman.png'),(24,'Ujian Praktek Kelas XII','Dilaksanakan pada minggu 3 bulan Maret 2018','26-12-2017','ic_pengumuman.png');
/*!40000 ALTER TABLE `tbl_pengumuman` ENABLE KEYS */;

#
# Structure for table "tbl_siswa"
#

DROP TABLE IF EXISTS `tbl_siswa`;
CREATE TABLE `tbl_siswa` (
  `id_siswa` int(225) NOT NULL AUTO_INCREMENT,
  `nis` varchar(100) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `kode_kelas` varchar(10) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `tgl_lahir` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `img_siswa` varchar(100) NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

#
# Data for table "tbl_siswa"
#

/*!40000 ALTER TABLE `tbl_siswa` DISABLE KEYS */;
INSERT INTO `tbl_siswa` VALUES (25,'10159640','Angga Prawira','C2','6651173','Cimahi','','2000-12-06','4555','windi.png'),(26,'10159642','Arya Febrian','C2','6651173','Cimahi','','1999-12-15','65444','windi.png'),(27,'10159643','Budi Ganjar','C2','6651173','Padalarang','','2000-12-12','4444','windi.png'),(28,'10159644','Danny Putra','C2','6651173','Padalarang','','1999-12-09','555','windi.png'),(29,'10159645','Devi Anggraeni','C2','6651173','Bandung','','2000-12-09','222','windi.png'),(30,'10159646','Eusi Mariah','C2','6651173','Sukamaju - Bandung','','2017-12-05','667','windi.png'),(31,'10159647','Fahry Firmansyah','C2','6651173','Cimahi','','2000-12-11','6667','windi.png'),(32,'10159649','Fredy Darusman','C2','6651173','Bandung','','2000-12-19','1231','windi.png'),(33,'10159648','Ferry Kurniawan','C2','6651173','Bandung','','2001-12-19','667','windi.png'),(34,'10159650','Ghina Siti Nurjanah','C2','6651173','Cimahi','','2001-12-22','6789','windi.png');
/*!40000 ALTER TABLE `tbl_siswa` ENABLE KEYS */;

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `Id_User` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Usergroup_User` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Foto` varchar(150) NOT NULL DEFAULT 'ids.jpg',
  PRIMARY KEY (`Id_User`),
  KEY `FK_user_usergroup` (`Id_Usergroup_User`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

#
# Data for table "user"
#

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,1,'admin','21232f297a57a5a743894a0e4a801fc3','ids.jpg'),(18,2,'098980','$2y$10$25GSpBPnHynFHGafwjdyUeuwy6kF/6/pKLBSVdxk61suyPf5Tsugu','ids.jpg'),(19,3,'D980098','$2y$10$EEvgrytjn7UkxTXtefDx0ux60r.6jGwmo3pYS.2VybRApkvm97rGi','ids.jpg'),(22,2,'DS003','6d80a486cfb336b087bb75d51a0d9c9c','ids.jpg');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
