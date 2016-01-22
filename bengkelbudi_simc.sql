-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Des 2015 pada 09.18
-- Versi Server: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bengkelbudi_simc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurnal`
--

CREATE TABLE IF NOT EXISTS `jurnal` (
  `tanggalTransaksi` date DEFAULT NULL,
  `kode` varchar(10) DEFAULT NULL,
  `noFaktur` varchar(10) NOT NULL,
  `keterangan` varchar(70) NOT NULL,
  `nominal` double(12,2) NOT NULL,
  `dk` varchar(1) NOT NULL,
  UNIQUE KEY `noFaktur` (`noFaktur`),
  KEY `tanggalTransaksi` (`tanggalTransaksi`,`kode`),
  KEY `noFaktur_2` (`noFaktur`),
  KEY `noFaktur_3` (`noFaktur`),
  KEY `noFaktur_4` (`noFaktur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurnal`
--

INSERT INTO `jurnal` (`tanggalTransaksi`, `kode`, `noFaktur`, `keterangan`, `nominal`, `dk`) VALUES
('2014-11-01', '1101', '', 'investasi awal', 20000000.00, 'D'),
('2014-11-01', '3100', 'K001', 'investasi awal', 20000000.00, 'K'),
('2014-11-02', '1540', 'K002', 'pembelian perlengkapan bengkel', 6000000.00, 'D');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ledger`
--

CREATE TABLE IF NOT EXISTS `ledger` (
  `tanggal` date DEFAULT NULL,
  `kode` varchar(10) NOT NULL DEFAULT '',
  `saldo` double(12,2) NOT NULL,
  `dk` varchar(1) NOT NULL,
  PRIMARY KEY (`kode`),
  KEY `tanggal` (`tanggal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perkiraan`
--

CREATE TABLE IF NOT EXISTS `perkiraan` (
  `kode` varchar(10) NOT NULL DEFAULT '',
  `perkiraan` varchar(70) NOT NULL,
  `saldoNormal` varchar(1) NOT NULL,
  PRIMARY KEY (`kode`),
  KEY `perkiraan` (`perkiraan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perkiraan`
--

INSERT INTO `perkiraan` (`kode`, `perkiraan`, `saldoNormal`) VALUES
('1100', 'HARTA LANCAR', 'D'),
('1101', 'Kas', 'D'),
('1102', 'Piutang', 'D'),
('1103', 'Perlengkapan', 'D'),
('1500', 'HARTA TETAP', 'D'),
('1501', 'Tanah', 'D'),
('1520', 'Gedung', 'D'),
('1530', 'Kenderaan', 'D'),
('1540', 'Peralatan', 'D'),
('2100', 'HUTANG JANGKA PENDEK', 'K'),
('2500', 'HUTANG JANGKA PANJANG', 'K'),
('3100', 'Modal Awal', 'K'),
('3200', 'Prive', 'K'),
('4100', 'Pendapatan Jasa', 'K'),
('5101', 'Biaya Sewa', 'D'),
('5102', 'Biaya Gaji', 'D'),
('5103', 'Biaya Listrik', 'D'),
('5104', 'Biaya Air', 'D'),
('5105', 'Biaya Telp', 'D');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saldonormal`
--

CREATE TABLE IF NOT EXISTS `saldonormal` (
  `kategori` varchar(2) DEFAULT NULL,
  `saldoNormal` varchar(1) NOT NULL,
  PRIMARY KEY (`saldoNormal`),
  KEY `kategori` (`kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `vwjurnal`
--
CREATE TABLE IF NOT EXISTS `vwjurnal` (
`tanggalTransaksi` date
,`noFaktur` varchar(10)
,`kode` varchar(10)
,`perkiraan` varchar(70)
,`keterangan` varchar(70)
,`dk` varchar(1)
);
-- --------------------------------------------------------

--
-- Struktur untuk view `vwjurnal`
--
DROP TABLE IF EXISTS `vwjurnal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vwjurnal` AS select `jurnal`.`tanggalTransaksi` AS `tanggalTransaksi`,`jurnal`.`noFaktur` AS `noFaktur`,`jurnal`.`kode` AS `kode`,`perkiraan`.`perkiraan` AS `perkiraan`,`jurnal`.`keterangan` AS `keterangan`,`jurnal`.`dk` AS `dk` from (`jurnal` join `perkiraan` on((`jurnal`.`kode` = `perkiraan`.`kode`))) order by `jurnal`.`noFaktur`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
