-- Adminer 4.2.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang` (
  `kode_barang` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nama_barang` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `harga_satuan` double NOT NULL,
  PRIMARY KEY (`kode_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `jumlah_barang`, `harga_satuan`) VALUES
('BRG001',	'Parfum Pewangi Ruangan',	2,	10000),
('BRG002',	'Laptop',	19,	30000),
('BRG003',	'Sepeda Motor',	9,	24000000);

DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pegawai` varchar(50) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `alamat` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `pelanggan`;
CREATE TABLE `pelanggan` (
  `kode_pelanggan` varchar(10) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `no_identitas` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  PRIMARY KEY (`kode_pelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `pelanggan` (`kode_pelanggan`, `nama_pelanggan`, `no_identitas`, `no_telp`, `alamat`) VALUES
('PL0003',	'Diky Mitza Pratama',	'0123',	'0813757234',	'Filano');

DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_faktur` varchar(12) NOT NULL,
  `kode_barang` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `jumlah` int(11) NOT NULL,
  `total_harga` double NOT NULL,
  `kode_pelanggan` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pelanggan_id` (`kode_pelanggan`),
  KEY `kode_barang` (`kode_barang`),
  CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `transaksi` (`id`, `no_faktur`, `kode_barang`, `tanggal`, `jumlah`, `total_harga`, `kode_pelanggan`) VALUES
(15,	'1',	'BRG001',	'0000-00-00 00:00:00',	5,	50000,	'PL000'),
(16,	'1',	'BRG001',	'2016-01-22 17:00:00',	3,	30000,	'PL000'),
(17,	'1',	'BRG002',	'2016-01-22 17:00:00',	1,	30000,	'PL0003');

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2,	'root',	'63a9f0ea7bb98050796b649e85481845');

-- 2016-01-23 14:15:35
