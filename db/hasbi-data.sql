-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Feb 2016 pada 05.36
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hasbi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hb_pesanan`
--

CREATE TABLE `hb_pesanan` (
  `id` int(32) NOT NULL,
  `user` varchar(10) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(32) NOT NULL,
  `jumlah_harga` text NOT NULL,
  `tgl_pesan` date NOT NULL,
  `tgl_jadi` date NOT NULL,
  `gambar` varchar(32) NOT NULL,
  `keterangan` text NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hb_pesanan`
--

INSERT INTO `hb_pesanan` (`id`, `user`, `nama`, `alamat`, `no_hp`, `jumlah_harga`, `tgl_pesan`, `tgl_jadi`, `gambar`, `keterangan`, `status`) VALUES
(1, '2807dc75f7', 'Pratika Dayu Aninda Harmantaka Ningrum', 'kamajaya Ponorogos<br>', '089820654031', 'a:10:{s:14:"jml_ko_panjang";s:2:"12";s:16:"harga_ko_panjang";s:4:"9000";s:13:"jml_ko_pendek";s:0:"";s:15:"harga_ko_pendek";s:0:"";s:14:"jml_kk_panjang";s:2:"10";s:16:"harga_kk_panjang";s:5:"15000";s:13:"jml_kk_pendek";s:0:"";s:15:"harga_kk_pendek";s:0:"";s:6:"jml_ka";s:0:"";s:8:"harga_ka";s:0:"";}', '2015-12-01', '2015-12-11', '', '<ul><li>Lengan panjangs</li><li>Tests</li><li>Yas<br></li></ul>', 3),
(2, '2807dc75f7', 'Muhammad Ayub Muchtar', 'Karanggebang Jetis Ponorogo<br>', '098123423', 'a:10:{s:14:"jml_ko_panjang";s:2:"12";s:16:"harga_ko_panjang";s:4:"9000";s:13:"jml_ko_pendek";s:0:"";s:15:"harga_ko_pendek";s:0:"";s:14:"jml_kk_panjang";s:2:"10";s:16:"harga_kk_panjang";s:5:"15000";s:13:"jml_kk_pendek";s:0:"";s:15:"harga_kk_pendek";s:0:"";s:6:"jml_ka";s:0:"";s:8:"harga_ka";s:0:"";}', '2015-12-01', '2015-12-07', 'dcd3b8094d.jpg', '<ul><li>Lengan panjangh</li><li>ukuran XL sama L</li><li>Segera diseleseikan<br></li></ul>', 2),
(3000, '1', 'Vita Riski Asholihah', 'Malang Jatim<br>', '098123423', 'a:10:{s:14:"jml_ko_panjang";s:2:"12";s:16:"harga_ko_panjang";s:4:"9000";s:13:"jml_ko_pendek";s:0:"";s:15:"harga_ko_pendek";s:0:"";s:14:"jml_kk_panjang";s:2:"10";s:16:"harga_kk_panjang";s:5:"15000";s:13:"jml_kk_pendek";s:0:"";s:15:"harga_kk_pendek";s:0:"";s:6:"jml_ka";s:0:"";s:8:"harga_ka";s:0:"";}', '2015-11-30', '2015-12-08', '', '<ul><li>halo ya<br></li></ul>', 2),
(4, '1', 'Awali Natsir', 'Sukorejo Ponorogo<br>', '098123423', 'a:10:{s:14:"jml_ko_panjang";s:2:"12";s:16:"harga_ko_panjang";s:4:"9000";s:13:"jml_ko_pendek";s:0:"";s:15:"harga_ko_pendek";s:0:"";s:14:"jml_kk_panjang";s:2:"10";s:16:"harga_kk_panjang";s:5:"15000";s:13:"jml_kk_pendek";s:2:"12";s:15:"harga_kk_pendek";s:10:"1212121212";s:6:"jml_ka";s:0:"";s:8:"harga_ka";s:0:"";}', '2016-02-19', '2015-12-10', '', '<ul><li>Kaos oblong</li><li>sablon depan belakang<br></li></ul>', 1),
(3001, '1', 'Daffa Anka', 'asasasas', '32432432432', 'a:10:{s:14:"jml_ko_panjang";s:2:"12";s:16:"harga_ko_panjang";s:4:"9000";s:13:"jml_ko_pendek";s:0:"";s:15:"harga_ko_pendek";s:0:"";s:14:"jml_kk_panjang";s:2:"10";s:16:"harga_kk_panjang";s:5:"15000";s:13:"jml_kk_pendek";s:0:"";s:15:"harga_kk_pendek";s:0:"";s:6:"jml_ka";s:0:"";s:8:"harga_ka";s:0:"";}', '2016-02-19', '2016-02-29', '2d86a835be.jpg', 'sdfsldfkmdsfkldsf', 1),
(3002, '1', 'Ika ngaidatul', 'fdsfdsfdsf', '7879798', 'a:10:{s:14:"jml_ko_panjang";s:0:"";s:16:"harga_ko_panjang";s:0:"";s:13:"jml_ko_pendek";s:1:"2";s:15:"harga_ko_pendek";s:5:"10000";s:14:"jml_kk_panjang";s:0:"";s:16:"harga_kk_panjang";s:0:"";s:13:"jml_kk_pendek";s:2:"12";s:15:"harga_kk_pendek";s:4:"1212";s:6:"jml_ka";s:2:"12";s:8:"harga_ka";s:6:"120000";}', '2016-02-19', '2016-02-29', '', 'jojoij', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hb_user`
--

CREATE TABLE `hb_user` (
  `id` varchar(10) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hb_user`
--

INSERT INTO `hb_user` (`id`, `nama`, `username`, `password`, `status`) VALUES
('1', 'Hasby admin', 'admin', 'a8d11a299820521a7ba6', 1),
('2807dc75f7', 'Ika ngaidatul', 'ika', 'b2e7a2d1d3bdca3aade7', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hb_pesanan`
--
ALTER TABLE `hb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hb_user`
--
ALTER TABLE `hb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hb_pesanan`
--
ALTER TABLE `hb_pesanan`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3003;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
