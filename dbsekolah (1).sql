-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Feb 2024 pada 09.21
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_inputsiswa`
--

CREATE TABLE `tb_inputsiswa` (
  `id` int(11) NOT NULL,
  `nis` double NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_tlp` int(15) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `asal_sekolah` varchar(30) NOT NULL,
  `jurusan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_inputsiswa`
--

INSERT INTO `tb_inputsiswa` (`id`, `nis`, `nama`, `alamat`, `no_tlp`, `jenis_kelamin`, `asal_sekolah`, `jurusan`) VALUES
(0, 2, 'Maull', 'kp.bojong', 1416, 'Laki Laki', 'smk', 'tbsm'),
(0, 3, 'Wulan', 'kp.dukuh', 2147483647, 'Perempuan', 'smpn1rongga', 'atph'),
(0, 4, 'Elisa F', 'kp.pamokolan', 2147483647, 'Perempuan', 'smpn1gununghalu', 'rpl'),
(0, 5, 'Natasya Sanda', 'kp.bunijaya', 2147483647, 'Perempuan', 'smpn1gununghalu', 'tbsm'),
(0, 6, 'keysia wafak', 'kp.cicariu', 2147483647, 'Perempuan', 'smpn2gununghalu', 'atph'),
(0, 7, 'pia', 'kp.pamoyanan', 2147483647, 'Perempuan', 'smpn1rongga', 'rpl'),
(0, 8, 'Ai Diva S', 'kp.cibali', 2147483647, 'Perempuan', 'smpn2rongga', 'tbsm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `username`, `email`, `password_hash`, `full_name`, `birthdate`, `created_at`, `update_at`) VALUES
(4, 'Wulan', '@gmail.com', '7a674153c63cff1ad7f0e261c369ab2c', 'Wulan Rahma', '2024-01-03', '2024-01-29 01:50:57', '2024-01-29 01:50:57');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
