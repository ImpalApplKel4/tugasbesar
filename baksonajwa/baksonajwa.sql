-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Des 2018 pada 17.00
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baksonajwa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan`
--

CREATE TABLE `bahan` (
  `NamaBahan` varchar(20) NOT NULL,
  `idBahan` int(5) NOT NULL,
  `stockBahan` int(11) NOT NULL,
  `tglBahan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bahan`
--

INSERT INTO `bahan` (`NamaBahan`, `idBahan`, `stockBahan`, `tglBahan`) VALUES
('1', 1, 1, '0001-01-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `NIK` int(5) NOT NULL,
  `NamaKar` varchar(50) NOT NULL,
  `Divisi` varchar(20) NOT NULL,
  `Gaji` int(11) NOT NULL,
  `noHP` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`NIK`, `NamaKar`, `Divisi`, `Gaji`, `noHP`) VALUES
(2, '2', 'Keuangan', 500000, '111222111111'),
(6, '12', 'Keuangan', 500000, '08112256456'),
(12, 'dinda', 'Keuangan', 500000, '111111111111');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesan`
--

CREATE TABLE `pemesan` (
  `idPemesanan` int(8) NOT NULL,
  `namaCust` varchar(20) NOT NULL,
  `namaInstansi` varchar(20) NOT NULL,
  `CP` varchar(15) NOT NULL,
  `alamatCust` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `totalHarga` int(11) NOT NULL,
  `tglBayar` date NOT NULL,
  `TotaldiBayar` int(11) NOT NULL,
  `pesanan` varchar(1000) NOT NULL,
  `tglPesan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesan`
--

INSERT INTO `pemesan` (`idPemesanan`, `namaCust`, `namaInstansi`, `CP`, `alamatCust`, `status`, `totalHarga`, `tglBayar`, `TotaldiBayar`, `pesanan`, `tglPesan`) VALUES
(2, '1', '1', '182181821821', '1', 'Lunas', 10000, '0000-00-00', 0, '1', '0001-01-01'),
(3, '2', '2', '081122522222', '2', 'Belum Luna', 2147483647, '0000-00-00', 0, '21', '1091-11-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `idPengeluaran` int(8) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tglPengeluaran` date NOT NULL,
  `hargaPengeluaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`idPengeluaran`, `keterangan`, `tglPengeluaran`, `hargaPengeluaran`) VALUES
(2, '1', '0001-01-01', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `idProduk` int(5) NOT NULL,
  `NamaProduk` varchar(20) NOT NULL,
  `HargaProduk` int(20) NOT NULL,
  `TipeProduk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`idProduk`, `NamaProduk`, `HargaProduk`, `TipeProduk`) VALUES
(2, '12', 1, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `level`, `nama`) VALUES
('keuangan', 'keuangan', 'Keuangan', 'Keuangan'),
('pemilik', 'pemilik', 'Pemilik', 'Pemilik'),
('service', 'service', 'Service', 'Service'),
('staffgudang', 'staffgudang', 'Staff Gudang', 'staff Gudang');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bahan`
--
ALTER TABLE `bahan`
  ADD PRIMARY KEY (`idBahan`),
  ADD UNIQUE KEY `idBahan` (`idBahan`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`NIK`),
  ADD UNIQUE KEY `NIK` (`NIK`);

--
-- Indeks untuk tabel `pemesan`
--
ALTER TABLE `pemesan`
  ADD PRIMARY KEY (`idPemesanan`),
  ADD UNIQUE KEY `idPemesanan` (`idPemesanan`);

--
-- Indeks untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`idPengeluaran`),
  ADD UNIQUE KEY `idPengeluaran` (`idPengeluaran`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idProduk`),
  ADD UNIQUE KEY `idProduk` (`idProduk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bahan`
--
ALTER TABLE `bahan`
  MODIFY `idBahan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `NIK` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pemesan`
--
ALTER TABLE `pemesan`
  MODIFY `idPemesanan` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `idPengeluaran` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `idProduk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
