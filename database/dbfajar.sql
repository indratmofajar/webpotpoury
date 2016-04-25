-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 25 Apr 2016 pada 08.56
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `dbfajar`
--
CREATE DATABASE IF NOT EXISTS `dbfajar` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbfajar`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `userID` varchar(6) NOT NULL,
  `passID` varchar(10) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`userID`, `passID`) VALUES
('admin', 'adm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `headline` varchar(200) NOT NULL,
  `isi_berita` text NOT NULL,
  `pengirim` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `headline`, `isi_berita`, `pengirim`, `tanggal`, `nama_file`) VALUES
(55, 'dfsf', 'dsfdsf', 'dfdsf', 'dfdsfds', '2016-04-25', 'cpannel/images/unduhan.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukutamu`
--

CREATE TABLE IF NOT EXISTS `bukutamu` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data untuk tabel `bukutamu`
--

INSERT INTO `bukutamu` (`id`, `nama`, `email`, `pesan`, `tanggal`, `status`) VALUES
(26, 'oky', 'okinawati@yahoo.com', ' baru kali ini makan sushi tapi ga kepengen muntah, amazing banget yah ', '2013-02-07', 'Y'),
(22, 'indra fajar', 'indratmo@gmail.com', ' santap malam saya jadi menggugah selera thanks Potpourri Resto ', '2013-02-06', 'Y'),
(24, 'indah safitri', 'indahsa@yahoo.com', ' sushinya yummy jadi ketagihan pengen datang lagi thanks potpourri resto!! ', '2013-02-06', 'Y'),
(25, 'yani', 'yaniya@yahoo.com', ' hmm service excellent banget deh love potpourri resto:) ', '2013-02-07', 'Y'),
(27, 'wendy', 'wendy@yahoo.co.id', ' live music kali ya biar tambah seru masukan buat potpourri resto nih... ', '2013-02-07', 'Y'),
(28, 'fajar', 'bsi', 'bs', '2013-02-15', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul_gambar` varchar(50) NOT NULL,
  `harga_gambar` double NOT NULL,
  `kategori` varchar(15) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=122 ;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `judul_gambar`, `harga_gambar`, `kategori`, `nama_file`) VALUES
(61, 'Seaweed Salad', 0, 'chinese', 'gambar/seaweed salad.jpg'),
(60, 'Somtam Salad', 0, 'thailand', 'gambar/somtam salad.jpg'),
(59, 'Asparagus Crab Meat Soup', 0, 'chinese', 'gambar/asparagus crab meat soup.jpg'),
(53, 'Maguro Sushi', 0, 'japan', 'gambar/maguro sashimi.jpg'),
(54, 'Salmon Sushi', 0, 'japan', 'gambar/salmon sushi.jpg'),
(55, 'Tako Sashimi', 0, 'japan', 'gambar/tako sashimi.jpg'),
(56, 'Sashimi Combo', 0, 'japan', 'gambar/sashimi combo.jpg'),
(57, 'Salmon Sashimi', 0, 'japan', 'gambar/salmon sashimi.jpg'),
(58, 'Maguro Sashimi ', 0, 'japan', 'gambar/maguro sashimi.jpg'),
(45, 'Agedashi Tofu', 0, 'japan', 'gambar/agedashi tofu.jpg'),
(46, 'California Maki', 0, 'japan', 'gambar/calofornia maki.jpg'),
(47, 'Ebi Sashimi', 0, 'japan', 'gambar/ebi sashimi.jpg'),
(48, 'Ebi Sushi', 0, 'japan', 'gambar/ebi sushi.jpg'),
(49, 'Fry Roll', 0, 'japan', 'gambar/fry roll.jpg'),
(50, 'Ebi Tempura with Salmon', 0, 'japan', 'gambar/ebi tempura with salmon maki.jpg'),
(51, 'Lover Roll (Popourrri Roll)', 0, 'japan', 'gambar/lover roll.jpg'),
(52, 'Tobiko Gunkan', 0, 'japan', 'gambar/tobiko gunkan.jpg'),
(62, 'Tom Yang Kung Soup', 0, 'thailand', 'gambar/tom yang kung soup.jpg'),
(63, 'Pad Thai', 0, 'thailand', 'gambar/pad thai.jpg'),
(64, 'Money Bag', 0, 'thailand', 'gambar/money bag.jpg'),
(65, 'Edamame', 0, 'thailand', 'gambar/edamame.jpg'),
(66, 'Fried Fish with Sweet Chili ', 0, 'thailand', 'gambar/fried fish with chili sauce.jpg'),
(67, 'Fried Chicken Wraped in Pandan', 0, 'thailand', 'gambar/frien chicken wrapped in pandan leaf.jpg'),
(68, 'Baby Kailan Oyster Sauce', 0, 'chinese', 'gambar/baby kailan oyster sauce.jpg'),
(69, 'Sapo Seafood Tofu', 0, 'chinese', 'gambar/sapo seafood tofu.jpg'),
(70, 'Steam Fish ala Hongkong', 0, 'chinese', 'gambar/steam fish ala hongkong.jpg'),
(71, 'Szechuan Soup', 0, 'chinese', 'gambar/szechuan soup.jpg'),
(72, 'Money Bag', 0, 'promo', 'gambar/frien chicken wrapped in pandan leaf.jpg'),
(73, 'Tempura', 0, 'promo', 'gambar/tempura.jpg'),
(74, 'Ebi Sushi', 0, 'japan', 'gambar/ebi sushi.jpg'),
(75, 'Chai Tea', 0, 'beverages', 'gambar/chai tea.jpg'),
(76, 'Chocolate Melt Cake', 0, 'beverages', 'gambar/chocolate melt cake.jpg'),
(77, 'Harro Ginger', 0, 'beverages', 'gambar/harro ginger.jpg'),
(78, 'Herbal Mint Tea', 0, 'beverages', 'gambar/Herbal Mint Tea 25.jpg'),
(79, 'Ice Mocca', 0, 'beverages', 'gambar/ice mocca.jpg'),
(80, 'Ice Thai Tea', 0, 'beverages', 'gambar/ice thai tea.jpg'),
(81, 'Hot Lemon', 0, 'beverages', 'gambar/lemon hot.jpg'),
(82, 'Peach Smothies', 0, 'beverages', 'gambar/peach smoothies.jpg'),
(83, 'Seha Herba', 0, 'beverages', 'gambar/seha herba.jpg'),
(84, 'Ebi Sushi', 0, 'promo', 'gambar/ebi sushi.jpg'),
(121, 'fdsfd', 0, 'Japan', 'cpannel/images/unduhan.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
