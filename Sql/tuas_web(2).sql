-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 12, 2015 at 01:02 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tuas_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE IF NOT EXISTS `biodata` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `jenis_kelamin` varchar(6) NOT NULL,
  `no_telp` int(12) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15645804 ;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`user_id`, `nama`, `tanggal_lahir`, `alamat`, `jenis_kelamin`, `no_telp`) VALUES
(12568934, 'Dochi Sadega', '1990-12-02', 'Jl.Kencana No.56 Bandung', 'Pria', 6004317),
(12453467, 'Ayi Mahardhika', '1990-06-06', 'Jl.Jakarta No.61 Bandung', 'Pria', 607890765),
(12546789, 'Sansan', '1991-11-09', 'Jl.Rajawali Utara No.237 Bandung', 'Pria', 6008789),
(15645789, 'Renaldy Prasetya', '1992-01-01', 'Jl.Buntu No.1 Bandung', 'Pria', 7001234),
(11667722, 'Reza Satiri', '1993-02-09', 'Jl.Gerinjul No.212 Bandung', 'Pria', 9001235),
(15645792, 'Bambang Lewandowski', '1990-01-09', 'Jl.Lurus No.123 Bandung', 'Pria', 6002345),
(15645793, 'Lina Herlina', '1995-08-07', 'Jl.Berliku No.23', 'Wanita', 9008790),
(15645796, 'Isyana Sarasvati', '1993-09-09', 'Jl. Ke Surga No.1', 'Wanita', 9007812),
(15645797, 'Umuh Muchtar', '1997-12-31', 'Jl.Kehidupan No.54 Bandung', 'Pria', 7009890),
(15645798, 'Fredy Pacquaio', '1994-01-28', 'Jl. Kebenaran No.90 Jakarta', 'Pria', 9001020),
(15645799, 'Angger Dimas', '1995-06-14', 'Jl.Gemerlap No.8 Bandung', 'Pria', 9008008),
(15645800, 'Danang', '1992-11-04', 'Jl.Jalan No.42', 'Pria', 9009089),
(15645801, 'Leonardo', '1993-02-09', 'Jl.Tol No.56 Cimahi', 'Pria', 6001276),
(15645802, 'Cinta Rahayu', '1996-05-28', 'Jl.Berlubang No.99 Bandung', 'Wanita', 8009009),
(15645803, 'Dinda Rahayu', '1996-05-29', 'Jl.Pasar Atas No.199 Bandung', 'Wanita', 9009009);

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE IF NOT EXISTS `pekerjaan` (
  `nama` varchar(30) NOT NULL,
  `perusahaan` varchar(30) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `tahun` varchar(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`nama`, `perusahaan`, `jabatan`, `tahun`) VALUES
('Dochi Sadega', 'PT.DI', 'Manager', '2014'),
('Ayi Mahardhika', 'Bank BCA', 'Komisaris', '2015'),
('Sansan', 'PT.KAI', 'Supervisor', '2013'),
('Renaldy Prasetya', 'PT.Inti', 'Manager', '2011'),
('Reza Satiri', 'PT.PBB', 'Manager', '2010'),
('Bambang Lewandowski', 'PT.Freeport Indonesia', 'Direktur Teknik', '2012'),
('bsdhadhdajsb', 'baksjbsk', 'sdsabkjsb', '2015'),
('Isyana Sarasvati', 'PT. Suara Indah', 'Human Resources Developme', '2015'),
('Umuh Muchtar', 'PT.PBB', 'Direktur Utama', '2010'),
('Angger Dimas', 'Djakarta Warehouse', 'Supervisor', '2013'),
('Danang', 'Netmediatama', 'Host', '2010'),
('Leonardo', 'Malaysia Airlines', 'Junior Mechanic', '2014'),
('Cinta Rahayu', 'PT.Kayu Jepara', 'Staff', '2009'),
('Dinda Rahayu', 'PT.Fujiyama', 'Sekertaris', '2014');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE IF NOT EXISTS `pendidikan` (
  `nama` varchar(30) NOT NULL,
  `sd` varchar(30) NOT NULL,
  `smp` varchar(30) NOT NULL,
  `sma` varchar(30) NOT NULL,
  `pt` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`nama`, `sd`, `smp`, `sma`, `pt`) VALUES
('Dochi Sadega', 'SDN Bandung Raya 1', 'SMPN 2 Bandung', 'SMKN 12 Bandung', 'Institut Teknologi Bandung'),
('Ayi Mahardhika', 'SDN Pajajaran 2 Bandung', 'SMPN 27 Bandung', 'SMAN 1 Bandung', 'Institut Teknologi Nasional'),
('Sansan', 'SDN Kesatria Pagi', 'SMPN 7 Bandung', 'SMAN 2 Bandung', 'Politeknik Negeri Bandung'),
('Renaldy Prasetya', 'SDN Bintang 1', 'SMPN 41 Bandung', 'SMAN 13 Bandung', 'STT Telkom'),
('Reza Satiri', 'SDN Kebayoran 1 Jakarta', 'SMPN 134 Jakarta', 'SMAN 82 Jakarta', 'Institut Kesenian Jakarta'),
('Bambang Lewandowski', 'SDN 2 Wonogiri', 'SMP 18 Trenggalek', 'SMAN 2 Manokwari', 'Universitas Diponegoro'),
('bambang', 'SD dfjsd', 's ansajcnlasc', 'hfsdhkfbd', 'cbdskjbckdjbc'),
('Isyana Sarasvati', 'SDN Garuda 2 Bandung', 'SMPN 9 Bandung', 'SMAN 9 Bandung', 'Politeknik Piksi Ganesha'),
('Umuh Muchtar', 'SDN 1 Kiaracondong', 'SMP 1 Pindad', 'SMA 1 Pindad', 'Universitas Padjajaran'),
('Fredy Pacquaio', 'SDN 1 Jayapura', 'SMPN 2 Timor Leste', 'SMK Merdeka Jakarta', 'Universitas Airlangga'),
('Angger Dimas', 'SDN Kencana 1', 'SMPN Margacinta', 'SMAN 1 Djakarta', 'Universitas Pasundan'),
('Danang', 'SDN Pematang Siantar', 'SMPN 102 Jakarta', 'SMAN 82 Jakarta', 'Institut Pertanian Bogor'),
('Leonardo', 'SD Kertasari 1', 'SMP Indonesia Raya', 'SMA Indonesia Merdeka', 'Harvard University'),
('Cinta Rahayu', 'SDN Keroncongan 1', 'SMPN 201 Jakarta', 'SMAN 89 Jakarta', 'Universitas Pasundan'),
('Dinda Rahayu', 'SDN Kedondong', 'SMP Pencitraan', 'SMA Kedoya 1', 'Politeknik Negeri Bandung');
