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

-- membuang struktur untuk table db_solbud.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) DEFAULT NULL,
  KEY `FK_admin_akun` (`id_admin`),
  CONSTRAINT `FK_admin_akun` FOREIGN KEY (`id_admin`) REFERENCES `akun` (`id_akun`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel db_solbud.admin: ~0 rows (lebih kurang)
DELETE FROM `admin`;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id_admin`) VALUES
	(1),
	(2);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- membuang struktur untuk table db_solbud.akun
CREATE TABLE IF NOT EXISTS `akun` (
  `id_akun` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_akun`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel db_solbud.akun: ~3 rows (lebih kurang)
DELETE FROM `akun`;
/*!40000 ALTER TABLE `akun` DISABLE KEYS */;
INSERT INTO `akun` (`id_akun`, `username`, `password`) VALUES
	(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b'),
	(2, 'root', '827ccb0eea8a706c4c34a16891f84e7b'),
	(10, 'user', '827ccb0eea8a706c4c34a16891f84e7b');
/*!40000 ALTER TABLE `akun` ENABLE KEYS */;

-- membuang struktur untuk table db_solbud.kuis
CREATE TABLE IF NOT EXISTS `kuis` (
  `id_kuis` int(11) NOT NULL AUTO_INCREMENT,
  `judul_kuis` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_kuis`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel db_solbud.kuis: ~26 rows (lebih kurang)
DELETE FROM `kuis`;
/*!40000 ALTER TABLE `kuis` DISABLE KEYS */;
INSERT INTO `kuis` (`id_kuis`, `judul_kuis`) VALUES
	(1, 'Tari Bedhaya'),
	(3, '456456'),
	(4, 'jfklds;fjaks'),
	(5, 'Senjata keris'),
	(6, 'Senjata Plinteng'),
	(7, 'Tari Gandrung'),
	(8, 'Senjata piso gaja dompak'),
	(9, 'senjata Pedang Jenawi'),
	(10, 'senjata Badik Tumbuk Lada'),
	(11, 'senjata Siwar Panjang'),
	(12, 'tari Radab Rahayu'),
	(13, 'Tari Gong'),
	(14, 'tari Tambun dan Bungai'),
	(15, 'Baksa Kembang'),
	(16, 'Senjata Wamilo'),
	(17, 'senjata pedang pasatimpo'),
	(18, 'Tari Sarode'),
	(19, 'tari Lenso'),
	(20, 'Senjata Wedhung'),
	(21, 'senjata Sundu'),
	(22, 'tari Caci'),
	(23, 'tari Selamat Datang'),
	(24, 'Senjata Panah'),
	(25, 'senjata Belati'),
	(26, 'Tari Perang Papua'),
	(27, 'tari Selamat Datang papua');
/*!40000 ALTER TABLE `kuis` ENABLE KEYS */;

-- membuang struktur untuk table db_solbud.materi
CREATE TABLE IF NOT EXISTS `materi` (
  `id_materi` int(11) NOT NULL AUTO_INCREMENT,
  `judul_materi` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_materi`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel db_solbud.materi: ~65 rows (lebih kurang)
DELETE FROM `materi`;
/*!40000 ALTER TABLE `materi` DISABLE KEYS */;
INSERT INTO `materi` (`id_materi`, `judul_materi`) VALUES
	(1, 'bukan cccccc'),
	(6, 'Tari Percintaan'),
	(9, 'Senjata Plinteng'),
	(10, 'Tari Gandrung'),
	(11, 'Senjata Celurit'),
	(12, 'Tari jaipong'),
	(13, 'Senjata Kujang'),
	(14, 'Tari Topeng'),
	(15, 'Senjata Golok'),
	(16, 'Tari Serimpi'),
	(17, 'Senjata Keris'),
	(18, 'Tari Rampak'),
	(19, 'Senjata Golok Ciomas'),
	(20, 'Tari Campak'),
	(21, 'Senjata Siwar'),
	(22, 'Tari Andun'),
	(23, 'Senjata keris bengkulu'),
	(24, 'Tari Rantak Kudo'),
	(25, 'Senjata badik tumbuk lada'),
	(26, 'Tari Tandak'),
	(27, 'Senjata badik tumbuk lado'),
	(28, 'Tari Melinting'),
	(29, 'Senjata Terapang'),
	(30, 'Tari Saman Meusekat'),
	(31, 'Senjata rencong'),
	(32, 'Tari Joget Lambak'),
	(33, 'Senjata pedang jenawi'),
	(34, 'Tari Piring'),
	(35, 'Senjata karih'),
	(36, 'Tari Tanggai'),
	(37, 'senjata trisula'),
	(38, 'Tari Tor Tor'),
	(39, 'Senjata piso gaja dompak'),
	(40, 'Tari Monong'),
	(41, 'Senjata dohong'),
	(42, 'Tari Baksa Kembang'),
	(43, 'Senjata mandau kalsel'),
	(44, 'Tari Tambun dan Bungai'),
	(45, 'senjata lonjo'),
	(46, 'Tari Gong'),
	(47, 'Senjata mandau KalTim'),
	(48, 'Tari Radab Rahayu'),
	(49, 'Senjata mandau KalUt'),
	(50, 'Tari Sarode'),
	(51, 'Senjata Wadaya'),
	(52, 'Tari Lenso'),
	(53, 'Senjata kalawai'),
	(54, 'Tari Perang'),
	(55, 'Senjata parang salawaku'),
	(56, 'Tari Patuddu'),
	(57, 'Senjata badik'),
	(58, 'Tari Pakarena'),
	(59, 'Senjata badik SulSel'),
	(60, 'Tari Dero'),
	(61, 'Senjata pasatimpo'),
	(62, 'Tari Lulo Alu'),
	(63, 'Senjata keris SulTeng'),
	(64, 'Tari Pendhet'),
	(65, 'Senjata keris bali'),
	(66, 'Tari Nguri'),
	(67, 'Senjata tulup NTB'),
	(68, 'Tari Perang Papua'),
	(69, 'Senjata panah dan busur papua'),
	(70, 'Tari Selamat Datang'),
	(71, 'Senjata Pisau Belati Papua bar');
/*!40000 ALTER TABLE `materi` ENABLE KEYS */;

-- membuang struktur untuk table db_solbud.pulau
CREATE TABLE IF NOT EXISTS `pulau` (
  `id_pulau` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pulau` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pulau`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel db_solbud.pulau: ~6 rows (lebih kurang)
DELETE FROM `pulau`;
/*!40000 ALTER TABLE `pulau` DISABLE KEYS */;
INSERT INTO `pulau` (`id_pulau`, `nama_pulau`) VALUES
	(1, 'Sumatera'),
	(2, 'Kalimantan'),
	(3, 'Jawa'),
	(4, 'Sulawesi'),
	(5, 'Nusa Tenggara'),
	(6, 'Papua');
/*!40000 ALTER TABLE `pulau` ENABLE KEYS */;

-- membuang struktur untuk table db_solbud.urutan_kuis
CREATE TABLE IF NOT EXISTS `urutan_kuis` (
  `id_pulau` int(11) NOT NULL,
  `id_kuis` int(11) NOT NULL,
  `urutan` int(11) NOT NULL,
  KEY `FK_urutan_kuis_pulau` (`id_pulau`),
  KEY `FK_urutan_kuis_kuis` (`id_kuis`),
  CONSTRAINT `FK_urutan_kuis_kuis` FOREIGN KEY (`id_kuis`) REFERENCES `kuis` (`id_kuis`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_urutan_kuis_pulau` FOREIGN KEY (`id_pulau`) REFERENCES `pulau` (`id_pulau`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel db_solbud.urutan_kuis: ~24 rows (lebih kurang)
DELETE FROM `urutan_kuis`;
/*!40000 ALTER TABLE `urutan_kuis` DISABLE KEYS */;
INSERT INTO `urutan_kuis` (`id_pulau`, `id_kuis`, `urutan`) VALUES
	(3, 1, 0),
	(3, 5, 1),
	(3, 6, 2),
	(3, 7, 3),
	(1, 8, 0),
	(1, 9, 1),
	(1, 10, 2),
	(1, 11, 3),
	(2, 12, 0),
	(2, 13, 1),
	(2, 14, 2),
	(2, 15, 3),
	(4, 16, 0),
	(4, 17, 1),
	(4, 18, 2),
	(4, 19, 3),
	(6, 24, 0),
	(6, 25, 1),
	(6, 26, 2),
	(6, 27, 3),
	(5, 20, 0),
	(5, 21, 1),
	(5, 22, 2),
	(5, 23, 3);
/*!40000 ALTER TABLE `urutan_kuis` ENABLE KEYS */;

-- membuang struktur untuk table db_solbud.urutan_materi
CREATE TABLE IF NOT EXISTS `urutan_materi` (
  `id_pulau` int(11) NOT NULL,
  `id_materi` int(11) NOT NULL,
  `urutan` int(11) NOT NULL,
  KEY `FK__pulau` (`id_pulau`),
  KEY `FK__materi` (`id_materi`),
  CONSTRAINT `FK__materi` FOREIGN KEY (`id_materi`) REFERENCES `materi` (`id_materi`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK__pulau` FOREIGN KEY (`id_pulau`) REFERENCES `pulau` (`id_pulau`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel db_solbud.urutan_materi: ~64 rows (lebih kurang)
DELETE FROM `urutan_materi`;
/*!40000 ALTER TABLE `urutan_materi` DISABLE KEYS */;
INSERT INTO `urutan_materi` (`id_pulau`, `id_materi`, `urutan`) VALUES
	(3, 1, 0),
	(3, 9, 1),
	(3, 10, 2),
	(3, 11, 3),
	(3, 12, 4),
	(3, 13, 5),
	(3, 14, 6),
	(3, 15, 7),
	(3, 16, 8),
	(3, 17, 9),
	(3, 18, 10),
	(3, 19, 11),
	(1, 20, 0),
	(1, 21, 1),
	(1, 22, 2),
	(1, 23, 3),
	(1, 24, 4),
	(1, 25, 5),
	(1, 26, 6),
	(1, 27, 7),
	(1, 28, 8),
	(1, 29, 9),
	(1, 30, 10),
	(1, 31, 11),
	(1, 32, 12),
	(1, 33, 13),
	(1, 34, 14),
	(1, 35, 15),
	(1, 36, 16),
	(1, 37, 17),
	(1, 38, 18),
	(1, 39, 19),
	(2, 40, 0),
	(2, 41, 1),
	(2, 42, 2),
	(2, 43, 3),
	(2, 44, 4),
	(2, 45, 5),
	(2, 46, 6),
	(2, 47, 7),
	(2, 48, 8),
	(2, 49, 9),
	(4, 50, 0),
	(4, 51, 1),
	(4, 52, 2),
	(4, 53, 3),
	(4, 54, 4),
	(4, 55, 5),
	(4, 56, 6),
	(4, 57, 7),
	(4, 58, 8),
	(4, 59, 9),
	(4, 60, 10),
	(4, 61, 11),
	(4, 62, 12),
	(4, 63, 13),
	(5, 64, 0),
	(5, 65, 1),
	(5, 66, 2),
	(5, 67, 3),
	(6, 68, 0),
	(6, 69, 1),
	(6, 70, 2),
	(6, 71, 3);
/*!40000 ALTER TABLE `urutan_materi` ENABLE KEYS */;

-- membuang struktur untuk table db_solbud.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(30) DEFAULT '',
  `foto_profil` int(11) DEFAULT NULL,
  `deskripsi` varchar(100) DEFAULT NULL,
  `tgl_gabung` date DEFAULT NULL,
  KEY `FK_user_akun` (`id_user`),
  CONSTRAINT `FK_user_akun` FOREIGN KEY (`id_user`) REFERENCES `akun` (`id_akun`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Membuang data untuk tabel db_solbud.user: ~2 rows (lebih kurang)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id_user`, `nama_user`, `foto_profil`, `deskripsi`, `tgl_gabung`) VALUES
	(10, 'User', 3, 'Sebuah contoh user', '2021-12-08');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
