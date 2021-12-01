-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 10.4.21-MariaDB - mariadb.org binary distribution
-- OS Server:                    Win64
-- HeidiSQL Versi:               11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Membuang struktur basisdata untuk db_solbud
DROP DATABASE IF EXISTS `db_solbud`;
CREATE DATABASE IF NOT EXISTS `db_solbud` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `db_solbud`;

-- membuang struktur untuk table db_solbud.admin
DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) DEFAULT NULL,
  KEY `FK_admin_akun` (`id_admin`),
  CONSTRAINT `FK_admin_akun` FOREIGN KEY (`id_admin`) REFERENCES `akun` (`id_akun`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel db_solbud.admin: ~0 rows (lebih kurang)
DELETE FROM `admin`;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- membuang struktur untuk table db_solbud.akun
DROP TABLE IF EXISTS `akun`;
CREATE TABLE IF NOT EXISTS `akun` (
  `id_akun` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_akun`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel db_solbud.akun: ~1 rows (lebih kurang)
DELETE FROM `akun`;
/*!40000 ALTER TABLE `akun` DISABLE KEYS */;
INSERT INTO `akun` (`id_akun`, `username`, `password`) VALUES
	(6, 'aaa', '827ccb0eea8a706c4c34a16891f84e7b');
/*!40000 ALTER TABLE `akun` ENABLE KEYS */;

-- membuang struktur untuk table db_solbud.kuis
DROP TABLE IF EXISTS `kuis`;
CREATE TABLE IF NOT EXISTS `kuis` (
  `id_kuis` int(11) NOT NULL AUTO_INCREMENT,
  `id_materi` int(11) NOT NULL,
  `isi_kuis` varchar(2000) DEFAULT NULL,
  `jenis_kuis` char(2) DEFAULT NULL,
  PRIMARY KEY (`id_kuis`),
  KEY `FK_kuis_materi` (`id_materi`),
  CONSTRAINT `FK_kuis_materi` FOREIGN KEY (`id_materi`) REFERENCES `materi` (`id_materi`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel db_solbud.kuis: ~0 rows (lebih kurang)
DELETE FROM `kuis`;
/*!40000 ALTER TABLE `kuis` DISABLE KEYS */;
/*!40000 ALTER TABLE `kuis` ENABLE KEYS */;

-- membuang struktur untuk table db_solbud.materi
DROP TABLE IF EXISTS `materi`;
CREATE TABLE IF NOT EXISTS `materi` (
  `id_materi` int(11) NOT NULL AUTO_INCREMENT,
  `id_provinsi` int(11) NOT NULL,
  `judul_materi` varchar(30) NOT NULL,
  `jenis_materi` varchar(15) NOT NULL,
  `isi_materi` varchar(10000) DEFAULT NULL,
  PRIMARY KEY (`id_materi`),
  KEY `FK_materi_provinsi` (`id_provinsi`),
  CONSTRAINT `FK_materi_provinsi` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id_provinsi`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel db_solbud.materi: ~0 rows (lebih kurang)
DELETE FROM `materi`;
/*!40000 ALTER TABLE `materi` DISABLE KEYS */;
/*!40000 ALTER TABLE `materi` ENABLE KEYS */;

-- membuang struktur untuk table db_solbud.progres
DROP TABLE IF EXISTS `progres`;
CREATE TABLE IF NOT EXISTS `progres` (
  `id_user` int(11) NOT NULL,
  `id_pulau` int(11) NOT NULL,
  `jumlah` decimal(3,2) NOT NULL DEFAULT 0.00,
  KEY `FK_progres_user` (`id_user`),
  KEY `FK_progres_pulau` (`id_pulau`),
  CONSTRAINT `FK_progres_pulau` FOREIGN KEY (`id_pulau`) REFERENCES `pulau` (`id_pulau`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_progres_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel db_solbud.progres: ~0 rows (lebih kurang)
DELETE FROM `progres`;
/*!40000 ALTER TABLE `progres` DISABLE KEYS */;
/*!40000 ALTER TABLE `progres` ENABLE KEYS */;

-- membuang struktur untuk table db_solbud.provinsi
DROP TABLE IF EXISTS `provinsi`;
CREATE TABLE IF NOT EXISTS `provinsi` (
  `id_provinsi` int(11) NOT NULL AUTO_INCREMENT,
  `id_pulau` int(11) NOT NULL,
  `nama_provinsi` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_provinsi`),
  KEY `FK_provinsi_pulau` (`id_pulau`),
  CONSTRAINT `FK_provinsi_pulau` FOREIGN KEY (`id_pulau`) REFERENCES `pulau` (`id_pulau`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel db_solbud.provinsi: ~0 rows (lebih kurang)
DELETE FROM `provinsi`;
/*!40000 ALTER TABLE `provinsi` DISABLE KEYS */;
/*!40000 ALTER TABLE `provinsi` ENABLE KEYS */;

-- membuang struktur untuk table db_solbud.pulau
DROP TABLE IF EXISTS `pulau`;
CREATE TABLE IF NOT EXISTS `pulau` (
  `id_pulau` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pulau` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pulau`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel db_solbud.pulau: ~0 rows (lebih kurang)
DELETE FROM `pulau`;
/*!40000 ALTER TABLE `pulau` DISABLE KEYS */;
/*!40000 ALTER TABLE `pulau` ENABLE KEYS */;

-- membuang struktur untuk table db_solbud.riwayat
DROP TABLE IF EXISTS `riwayat`;
CREATE TABLE IF NOT EXISTS `riwayat` (
  `id_admin` int(11) NOT NULL,
  `id_kuis` int(11) DEFAULT NULL,
  `id_materi` int(11) DEFAULT NULL,
  `waktu` datetime NOT NULL,
  KEY `FK_riwayat_admin` (`id_admin`),
  KEY `FK_riwayat_kuis` (`id_kuis`),
  KEY `FK_riwayat_materi` (`id_materi`),
  CONSTRAINT `FK_riwayat_admin` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_riwayat_kuis` FOREIGN KEY (`id_kuis`) REFERENCES `kuis` (`id_kuis`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_riwayat_materi` FOREIGN KEY (`id_materi`) REFERENCES `materi` (`id_materi`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel db_solbud.riwayat: ~0 rows (lebih kurang)
DELETE FROM `riwayat`;
/*!40000 ALTER TABLE `riwayat` DISABLE KEYS */;
/*!40000 ALTER TABLE `riwayat` ENABLE KEYS */;

-- membuang struktur untuk table db_solbud.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(30) DEFAULT '',
  `foto_profil` blob DEFAULT NULL,
  `deskripsi` varchar(100) DEFAULT NULL,
  KEY `FK_user_akun` (`id_user`),
  CONSTRAINT `FK_user_akun` FOREIGN KEY (`id_user`) REFERENCES `akun` (`id_akun`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel db_solbud.user: ~1 rows (lebih kurang)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id_user`, `nama_user`, `foto_profil`, `deskripsi`) VALUES
	(6, '', NULL, NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
