-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: localhost    Database: bios
-- ------------------------------------------------------
-- Server version	5.5.42

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `penerimaan`
--

DROP TABLE IF EXISTS `penerimaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penerimaan` (
  `Tanggal` date NOT NULL,
  `KodeAkun` char(15) NOT NULL,
  `Saldo` float DEFAULT NULL,
  `tgl_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Tanggal`,`KodeAkun`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penerimaan`
--

LOCK TABLES `penerimaan` WRITE;
/*!40000 ALTER TABLE `penerimaan` DISABLE KEYS */;
INSERT INTO `penerimaan` VALUES ('2017-12-01','73870',34050500,'2017-12-10 18:08:11'),('2017-12-03','73489',28374700,'2017-12-11 05:08:11'),('2017-12-11','12342',700000,'2017-12-18 09:28:54'),('2017-12-11','24592',450000,'2017-12-18 03:05:48'),('2017-12-13','34892',82376500,'2017-12-11 07:08:11');
/*!40000 ALTER TABLE `penerimaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengeluaran`
--

DROP TABLE IF EXISTS `pengeluaran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengeluaran` (
  `Tanggal` date NOT NULL,
  `KodeAkun` char(15) NOT NULL,
  `Saldo` float DEFAULT NULL,
  `tgl_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Tanggal`,`KodeAkun`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengeluaran`
--

LOCK TABLES `pengeluaran` WRITE;
/*!40000 ALTER TABLE `pengeluaran` DISABLE KEYS */;
INSERT INTO `pengeluaran` VALUES ('2017-12-02','76769',702349,'2017-12-10 17:00:00'),('2017-12-13','87344',7236430,'2017-12-10 17:00:00'),('2017-12-19','2322',22423,'2017-12-18 07:45:48'),('2017-12-20','2348',123123,'2017-12-18 07:45:48');
/*!40000 ALTER TABLE `pengeluaran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_fakultas`
--

DROP TABLE IF EXISTS `ref_fakultas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ref_fakultas` (
  `kode_fakultas` char(3) NOT NULL,
  `nama_fakultas` varchar(100) DEFAULT NULL,
  `ref_kode` char(150) DEFAULT NULL,
  PRIMARY KEY (`kode_fakultas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_fakultas`
--

LOCK TABLES `ref_fakultas` WRITE;
/*!40000 ALTER TABLE `ref_fakultas` DISABLE KEYS */;
/*!40000 ALTER TABLE `ref_fakultas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `saldo`
--

DROP TABLE IF EXISTS `saldo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `saldo` (
  `Tanggal` date NOT NULL,
  `kodeJenisRekening` char(2) NOT NULL,
  `NamaBank` varchar(45) DEFAULT NULL,
  `Saldo` float DEFAULT NULL,
  `tgl_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Tanggal`,`kodeJenisRekening`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `saldo`
--

LOCK TABLES `saldo` WRITE;
/*!40000 ALTER TABLE `saldo` DISABLE KEYS */;
INSERT INTO `saldo` VALUES ('2017-12-02','1','Bank BNI',2918370000,'2017-12-10 17:00:00'),('2017-12-14','2','BCA Syariah',35435,'2017-12-18 07:57:07'),('2017-12-15','3','Muamalat',56565,'2017-12-18 07:57:07');
/*!40000 ALTER TABLE `saldo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `satker`
--

DROP TABLE IF EXISTS `satker`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `satker` (
  `kode_satker` char(40) NOT NULL,
  `tahun` char(4) DEFAULT NULL,
  `bulan` char(2) DEFAULT NULL,
  `kd_fakultas` char(2) DEFAULT NULL,
  `kode_program_studi` char(2) DEFAULT NULL,
  `kode_akreditasi` char(30) DEFAULT NULL,
  `kode_jurusan` char(3) DEFAULT NULL,
  `tgl_update` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kode_satker`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `satker`
--

LOCK TABLES `satker` WRITE;
/*!40000 ALTER TABLE `satker` DISABLE KEYS */;
INSERT INTO `satker` VALUES ('11223','2016','10','6','21','B','3','2017-12-18 08:21:06'),('33445','2015','11','8','23','B','5','2017-12-18 08:21:06');
/*!40000 ALTER TABLE `satker` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `satker_lainnya`
--

DROP TABLE IF EXISTS `satker_lainnya`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `satker_lainnya` (
  `kode_satker` char(40) NOT NULL,
  `tahun` char(2) DEFAULT NULL,
  `bulan` char(2) DEFAULT NULL,
  `indikator` char(5) DEFAULT NULL,
  `jumlah` char(100) DEFAULT NULL,
  `tgl_update` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kode_satker`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `satker_lainnya`
--

LOCK TABLES `satker_lainnya` WRITE;
/*!40000 ALTER TABLE `satker_lainnya` DISABLE KEYS */;
INSERT INTO `satker_lainnya` VALUES ('7678','17','09','50','30','2017-12-09 17:00:00');
/*!40000 ALTER TABLE `satker_lainnya` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-22 14:15:43
