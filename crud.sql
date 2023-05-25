-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table pendataan_keuangan.kategori: ~5 rows (approximately)
INSERT INTO `kategori` (`id`, `kategori`, `tipe`, `created_at`, `updated_at`) VALUES
	(1, 'kendaraan', 'pengeluaran', '2023-05-25 10:20:31', '2023-05-25 10:20:27'),
	(2, 'makanan', 'pengeluaran', '2023-05-25 10:20:23', '2023-05-25 10:20:21'),
	(3, 'gadget', 'pengeluaran', '2023-05-25 10:20:28', '2023-05-25 10:20:30'),
	(4, 'gaji', 'pendapatan', '2023-05-25 10:20:26', '2023-05-25 10:20:22');

-- Dumping data for table pendataan_keuangan.rekening: ~5 rows (approximately)
INSERT INTO `rekening` (`id`, `rekening`, `created_at`, `updated_at`) VALUES
	(1, 'BNI', '2023-05-25 08:44:50', '2023-05-25 13:52:56'),
	(2, 'Mandiri', '2023-05-25 08:44:52', '2023-05-25 13:53:01'),
	(3, 'Dompet', '2023-05-25 08:44:53', '2023-05-25 13:53:07'),
	(4, 'LinkAja', '2023-05-25 08:44:54', '2023-05-25 13:53:15'),
	(5, 'Gopay', '2023-05-25 08:44:55', '2023-05-25 13:52:51');

-- Dumping data for table pendataan_keuangan.transaksi: ~0 rows (approximately)
INSERT INTO `transaksi` (`id`, `kategori_id`, `rekening_id`, `jumlah`, `keterangan`, `tanggal`, `created_at`, `updated_at`) VALUES
	(1, 2, 5, 10000, 'gorengan', '2023-05-25 22:58:46', NULL, NULL),
	(2, 3, 3, 123, 'asdf', '2023-05-25 18:59:00', '2023-05-25 16:00:43', NULL),
	(3, 1, 2, 1000000, 'ganti body motor', '2023-05-17 12:01:00', '2023-05-25 16:01:16', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
