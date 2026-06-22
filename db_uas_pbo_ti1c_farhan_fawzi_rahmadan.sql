-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2026 at 06:10 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uas_pbo_ti1c_farhan fawzi rahmadan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_karyawan`
--

CREATE TABLE `tabel_karyawan` (
  `id_karyawan` int NOT NULL,
  `nama_karyawan` varchar(150) NOT NULL,
  `departemen` varchar(100) NOT NULL,
  `hari_kerja_masuk` int NOT NULL DEFAULT '0',
  `gaji_dasar_per_hari` decimal(12,2) NOT NULL DEFAULT '0.00',
  `jenis_karyawan` enum('kontrak','tetap','magang') NOT NULL,
  `durasi_kontrak_bulan` int DEFAULT NULL,
  `agensi_penyalur` varchar(100) DEFAULT NULL,
  `tunjangan_kesehatan` decimal(12,2) DEFAULT NULL,
  `opsi_saham_id` varchar(50) DEFAULT NULL,
  `uang_saku_bulanan` decimal(12,2) DEFAULT NULL,
  `sertifikat_kampus_merdeka` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_karyawan`
--

INSERT INTO `tabel_karyawan` (`id_karyawan`, `nama_karyawan`, `departemen`, `hari_kerja_masuk`, `gaji_dasar_per_hari`, `jenis_karyawan`, `durasi_kontrak_bulan`, `agensi_penyalur`, `tunjangan_kesehatan`, `opsi_saham_id`, `uang_saku_bulanan`, `sertifikat_kampus_merdeka`) VALUES
(1, 'Rizky Pratama', 'Engineering', 22, '250000.00', 'kontrak', 12, 'PT Mitra Sumber Daya', NULL, NULL, NULL, NULL),
(2, 'Siti Aminah', 'Human Resources', 20, '200000.00', 'kontrak', 6, 'PT Global Talent', NULL, NULL, NULL, NULL),
(3, 'Budi Santoso', 'Operations', 24, '180000.00', 'kontrak', 24, 'PT Mitra Sumber Daya', NULL, NULL, NULL, NULL),
(4, 'Dewi Lestari', 'Marketing', 19, '220000.00', 'kontrak', 12, 'PT Elite Outsourcing', NULL, NULL, NULL, NULL),
(5, 'Fajar Nugraha', 'Finance', 21, '230000.00', 'kontrak', 6, 'PT Global Talent', NULL, NULL, NULL, NULL),
(6, 'Rini Amalia', 'Legal', 22, '260000.00', 'kontrak', 12, 'PT Elite Outsourcing', NULL, NULL, NULL, NULL),
(7, 'Hendra Wijaya', 'Procurement', 23, '190000.00', 'kontrak', 24, 'PT Mitra Sumber Daya', NULL, NULL, NULL, NULL),
(8, 'Andi Wijaya', 'Engineering', 21, '400000.00', 'tetap', NULL, NULL, '1500000.00', 'ESOP-ENG-001', NULL, NULL),
(9, 'Mega Utami', 'Finance', 22, '350000.00', 'tetap', NULL, NULL, '1200000.00', 'ESOP-FIN-042', NULL, NULL),
(10, 'Adi Sukarno', 'IT Support', 22, '300000.00', 'tetap', NULL, NULL, '1000000.00', 'ESOP-ITS-012', NULL, NULL),
(11, 'Citra Kirana', 'Marketing', 20, '380000.00', 'tetap', NULL, NULL, '1400000.00', 'ESOP-MKT-089', NULL, NULL),
(12, 'Eko Prasetyo', 'Engineering', 23, '450000.00', 'tetap', NULL, NULL, '1800000.00', 'ESOP-ENG-002', NULL, NULL),
(13, 'Fitri Handayani', 'Human Resources', 21, '360000.00', 'tetap', NULL, NULL, '1300000.00', 'ESOP-HR-005', NULL, NULL),
(14, 'Gilang Dirga', 'Operations', 22, '320000.00', 'tetap', NULL, NULL, '1100000.00', 'ESOP-OPS-031', NULL, NULL),
(15, 'Daffa Zaidan', 'Engineering', 20, '0.00', 'magang', NULL, NULL, NULL, NULL, '3500000.00', 'CERT-KM-ENG-2026A'),
(16, 'Larasati Putri', 'Marketing', 18, '0.00', 'magang', NULL, NULL, NULL, NULL, '3000000.00', 'CERT-KM-MKT-2026B'),
(17, 'Bagas Kara', 'Design', 21, '0.00', 'magang', NULL, NULL, NULL, NULL, '3000000.00', 'CERT-KM-DSN-2026A'),
(18, 'Nadia Vega', 'Human Resources', 19, '0.00', 'magang', NULL, NULL, NULL, NULL, '2800000.00', 'CERT-KM-HR-2026C'),
(19, 'Oki Setiawan', 'Engineering', 22, '0.00', 'magang', NULL, NULL, NULL, NULL, '3500000.00', 'CERT-KM-ENG-2026F'),
(20, 'Putri Ayu', 'Finance', 20, '0.00', 'magang', NULL, NULL, NULL, NULL, '3000000.00', 'CERT-KM-FIN-2026A'),
(21, 'Riyan Hidayat', 'IT Support', 17, '0.00', 'magang', NULL, NULL, NULL, NULL, '2800000.00', 'CERT-KM-ITS-2026E');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_karyawan`
--
ALTER TABLE `tabel_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_karyawan`
--
ALTER TABLE `tabel_karyawan`
  MODIFY `id_karyawan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
