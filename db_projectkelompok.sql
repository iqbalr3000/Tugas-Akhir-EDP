-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Des 2021 pada 02.13
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_projectkelompok`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_log`
--

CREATE TABLE `tb_log` (
  `id` int(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `rfid` varchar(100) NOT NULL,
  `nama_tol` varchar(100) NOT NULL,
  `saldo_awal` int(100) NOT NULL,
  `bayar` int(100) NOT NULL,
  `saldo_akhir` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_log`
--

INSERT INTO `tb_log` (`id`, `tanggal`, `rfid`, `nama_tol`, `saldo_awal`, `bayar`, `saldo_akhir`) VALUES
(1, '2021-12-14 01:42:49', 'admin rfid', 'bogor', 100000, 5000, 95000),
(2, '2021-12-14 01:50:21', 'admin rfid', 'bogor', 10000, 5000, 5000),
(3, '2021-12-14 02:33:51', '4A516EAE', 'bogor', 10000, 5000, 5000),
(4, '2021-12-14 02:36:30', '4A516EAE', 'bogor', 5000, 5000, 0),
(5, '2021-12-17 08:22:03', '4A516EAE', 'bogor', 10000, 5000, 5000),
(6, '2021-12-17 08:30:19', '4A516EAE', 'bogor', 10000, 5000, 5000),
(7, '2021-12-17 08:33:41', '4A516EAE', 'bogor', 5000, 5000, 0),
(8, '2021-12-17 08:41:10', '4A516EAE', 'bogor', 10000, 5000, 5000),
(9, '2021-12-17 08:51:59', '4A516EAE', 'bogor', 5000, 5000, 0),
(10, '2021-12-17 08:54:27', '4A516EAE', 'bogor', 100000, 5000, 95000),
(11, '2021-12-17 08:55:54', '4A516EAE', 'bogor', 95000, 5000, 90000),
(12, '2021-12-17 08:59:42', '4A516EAE', 'bogor', 90000, 5000, 85000),
(13, '2021-12-17 09:00:09', '4A516EAE', 'bogor', 85000, 5000, 80000),
(14, '2021-12-17 09:00:13', '4A516EAE', 'bogor', 80000, 5000, 75000),
(15, '2021-12-17 09:03:06', '4A516EAE', 'bogor', 75000, 5000, 70000),
(16, '2021-12-17 09:04:13', '4A516EAE', 'bogor', 70000, 5000, 65000),
(17, '2021-12-17 09:05:08', '4A516EAE', 'bogor', 65000, 5000, 60000),
(18, '2021-12-17 09:08:02', '4A516EAE', 'bogor', 60000, 5000, 55000),
(19, '2021-12-17 09:08:29', '4A516EAE', 'bogor', 55000, 5000, 50000),
(20, '2021-12-17 09:10:35', '4A516EAE', 'bogor', 50000, 5000, 45000),
(21, '2021-12-17 09:11:04', '4A516EAE', 'bogor', 45000, 5000, 40000),
(22, '2021-12-17 09:12:22', '4A516EAE', 'bogor', 40000, 5000, 35000),
(23, '2021-12-17 09:13:40', '4A516EAE', 'bogor', 35000, 5000, 30000),
(24, '2021-12-18 03:16:26', '4A516EAE', 'bogor', 30000, 5000, 25000),
(25, '2021-12-18 03:34:52', '4A516EAE', 'bogor', 25000, 5000, 20000),
(26, '2021-12-18 03:38:12', '4A516EAE', 'bogor', 20000, 5000, 15000),
(27, '2021-12-18 03:39:55', '4A516EAE', 'bogor', 15000, 5000, 10000),
(28, '2021-12-18 03:42:01', '4A516EAE', 'bogor', 10000, 5000, 5000),
(29, '2021-12-18 03:44:33', '4A516EAE', 'bogor', 5000, 5000, 0),
(30, '2021-12-18 03:45:44', '4A516EAE', 'bogor', 500000, 5000, 495000),
(31, '2021-12-18 03:47:36', '4A516EAE', 'bogor', 495000, 5000, 490000),
(32, '2021-12-18 03:49:21', '4A516EAE', 'bogor', 490000, 5000, 485000),
(33, '2021-12-18 03:50:43', '4A516EAE', 'bogor', 485000, 5000, 480000),
(34, '2021-12-18 03:55:20', '4A516EAE', 'bogor', 480000, 5000, 475000),
(35, '2021-12-18 03:58:14', '4A516EAE', 'bogor', 475000, 5000, 470000),
(36, '2021-12-18 04:00:21', '4A516EAE', 'bogor', 470000, 5000, 465000),
(37, '2021-12-18 05:16:21', '4A516EAE', 'bogor', 465000, 5000, 460000),
(38, '2021-12-18 05:17:20', '4A516EAE', 'bogor', 460000, 5000, 455000),
(39, '2021-12-18 05:21:54', '4A516EAE', 'bogor', 455000, 5000, 450000),
(40, '2021-12-18 05:30:14', '4A516EAE', 'bogor', 450000, 5000, 445000),
(41, '2021-12-18 05:31:30', '4A516EAE', 'bogor', 445000, 5000, 440000),
(42, '2021-12-18 05:46:46', '4A516EAE', 'bogor', 440000, 5000, 435000),
(43, '2021-12-18 05:59:05', '4A516EAE', 'bogor', 435000, 5000, 430000),
(44, '2021-12-18 06:00:25', '4A516EAE', 'bogor', 430000, 5000, 425000),
(45, '2021-12-18 06:02:24', '4A516EAE', 'bogor', 425000, 5000, 420000),
(46, '2021-12-18 06:04:31', '4A516EAE', 'bogor', 420000, 5000, 415000),
(47, '2021-12-18 06:06:15', '4A516EAE', 'bogor', 415000, 5000, 410000),
(48, '2021-12-18 06:06:31', '4A516EAE', 'bogor', 410000, 5000, 405000),
(49, '2021-12-18 06:06:51', '4A516EAE', 'bogor', 405000, 5000, 400000),
(50, '2021-12-18 06:08:13', '4A516EAE', 'bogor', 400000, 5000, 395000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_log_saldo`
--

CREATE TABLE `tb_log_saldo` (
  `id` int(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `rfid` varchar(100) NOT NULL,
  `saldo_awal` int(100) NOT NULL,
  `tambah_saldo` int(100) NOT NULL,
  `saldo_akhir` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_log_saldo`
--

INSERT INTO `tb_log_saldo` (`id`, `tanggal`, `rfid`, `saldo_awal`, `tambah_saldo`, `saldo_akhir`) VALUES
(1, '2021-12-14 08:15:23', '4A516EAE', 5000, 10000, 15000),
(3, '2021-12-14 12:09:32', '4A516EAE', 10000, 5000, 15000),
(4, '2021-12-17 08:40:42', '4A516EAE', 0, 10000, 10000),
(5, '2021-12-17 08:54:21', '4A516EAE', 0, 100000, 100000),
(6, '2021-12-18 03:45:38', '4A516EAE', 0, 500000, 500000),
(7, '2021-12-21 14:32:51', '4A516EAE', 395000, 5000, 400000),
(8, '2021-12-21 14:36:55', '4A516EAE', 400000, 5000, 405000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_monitoring`
--

CREATE TABLE `tb_monitoring` (
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `rfid` varchar(100) NOT NULL,
  `nama_tol` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `pesan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_monitoring`
--

INSERT INTO `tb_monitoring` (`tanggal`, `rfid`, `nama_tol`, `status`, `pesan`) VALUES
('2021-12-21 14:21:28', '4A516EAE', 'bogor', 'Berhasil', 'Berhasil! Gerbang Dibuka');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rfid`
--

CREATE TABLE `tb_rfid` (
  `id` int(100) NOT NULL,
  `rfid` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `saldo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_rfid`
--

INSERT INTO `tb_rfid` (`id`, `rfid`, `nama`, `alamat`, `no_telp`, `saldo`) VALUES
(5, '4A516EAE', 'user', 'bogor', '123', 405000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tol`
--

CREATE TABLE `tb_tol` (
  `id` int(100) NOT NULL,
  `nama_tol` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tol`
--

INSERT INTO `tb_tol` (`id`, `nama_tol`, `harga`) VALUES
(1, 'bogor', 5000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role`) VALUES
('1', 'admin', 'admin', 'admin', 'admin'),
('4A516EAE', 'user', '123', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_log`
--
ALTER TABLE `tb_log`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_log_saldo`
--
ALTER TABLE `tb_log_saldo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_rfid`
--
ALTER TABLE `tb_rfid`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_tol`
--
ALTER TABLE `tb_tol`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_log`
--
ALTER TABLE `tb_log`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `tb_log_saldo`
--
ALTER TABLE `tb_log_saldo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_rfid`
--
ALTER TABLE `tb_rfid`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_tol`
--
ALTER TABLE `tb_tol`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
