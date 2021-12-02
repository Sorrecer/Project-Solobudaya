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

-- Membuang data untuk tabel db_solbud.provinsi: ~0 rows (lebih kurang)
DELETE FROM `provinsi`;
/*!40000 ALTER TABLE `provinsi` DISABLE KEYS */;
INSERT INTO `provinsi` (`id_provinsi`, `id_pulau`, `nama_provinsi`) VALUES
	(1, 1, 'Nanggroe Aceh Darussalam'),
	(2, 1, 'Sumatera Utara'),
	(3, 1, 'Sumatera Selatan'),
	(4, 1, 'Sumatera Barat'),
	(5, 1, 'Bengkulu'),
	(6, 1, 'Riau'),
	(7, 1, 'Kepulauan Riau'),
	(8, 1, 'Jambi'),
	(9, 1, 'Bandar Lampung'),
	(10, 1, 'Bangka Belitung'),
	(11, 2, 'Kalimantan Barat'),
	(12, 2, 'Kalimantan Timur'),
	(13, 2, 'Kalimantan Selatan'),
	(14, 2, 'Kalimantan Tengah'),
	(15, 2, 'Kalimantan Utara'),
	(16, 3, 'Banten'),
	(17, 3, 'DKI Jakarta'),
	(18, 3, 'Jawa Barat'),
	(19, 3, 'Jawa Tengah'),
	(20, 3, 'DI Yogyakarta'),
	(21, 3, 'Jawa Timur'),
	(22, 5, 'Bali'),
	(23, 5, 'Nusa Tenggara Timur'),
	(24, 5, 'Nusa Tenggara Barat'),
	(25, 4, 'Gorontalo'),
	(26, 4, 'Sulawesi Barat'),
	(27, 4, 'Sulawesi Tengah'),
	(28, 4, 'Sulawesi Utara'),
	(29, 4, 'Sulawesi Tenggara'),
	(30, 4, 'Sulawesi Selatan'),
	(31, 6, 'Maluku Utara'),
	(32, 6, 'Maluku'),
	(33, 6, 'Papua Barat'),
	(34, 6, 'Papua');
/*!40000 ALTER TABLE `provinsi` ENABLE KEYS */;

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

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
