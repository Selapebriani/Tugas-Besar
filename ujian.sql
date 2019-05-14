-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Bulan Mei 2019 pada 06.29
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`id_post`, `title`, `isi`, `tanggal`) VALUES
(38, 'Meteor', 'Meteor adalah benda langit yang masuk ke dalam wilayah atmosfer bumi yang mengakibatkan terjadinya gesekan permukaan metor dengan udara dalam kecepatan tinggi. Akibat adanya gesekan yang yang cepat tersebut menimbulkan pijaran api dan cahaya yang dari kejauhan kita melihatnya seperti bintang jatuh.', '2019-05-14 05:07:10'),
(39, 'Meteorit', 'Meteorit adalah benda-benda di luar angkasa dengan kecepatan yang cepat. Jumlah meteorit di angkasa raya tidak terhitung karena sangat banyak dengan berbagai bentuk, jenis, bahan kandungan, warna, sifat dan sebagainya.', '2019-05-14 05:07:52'),
(40, 'Komet', 'Komet adalah benda langit yang mengelilingi matahari. Komet memiliki orbit garis edar sendiri yang bentuknya sangat lonjong. Komet biasa disebut sebagai bintang berekor karena sifatnya yang bercahaya terang dan memiliki ekor gas debu yang sangat panjang.', '2019-05-14 05:08:29'),
(41, 'Satelit', 'Satelit adalah benda yang mengelilingi planet yang memiliki orbit peredaran sendiri. Satelit bersama planet yang dikelilinginya secara bersama-sama mengelilingi bintang. Bulan adalah satelit alami yang dimiliki oleh bumi yang bersama bumi mengelilingi matahari, sedangkan satelit palapa, satelit b1, dan sebagainya adalah satelit buatan manusia yang digunakan untuk tujuan tertentu seperti untuk komunikasi, mata-mata, riset, dan lain sebagainya.', '2019-05-14 05:09:10'),
(42, 'Bintang', 'Bintang adalah benda langit luar angkasa yang memiliki ukuran besar dan memancarkan cahaya sebagai sumber cahaya. Bintang yang terdekat dengan bumi adalah matahari. Matahari dikelilingi oleh planet-planet anggota tata surya seperti pelanet bumi, merkurius, venus, mars, jupiter, saturnus, uranus, neptunus dan jupiter.', '2019-05-14 05:09:50'),
(43, 'Planet', 'Planet adalah benda langit yang mengelilingi bintang sebagai pusat tata surya. Planet tidak dapat menghasilkan cahaya sendiri namun dapat memantulkan cahaya. Planet yang dekat dengan bumi dapat kita lihat setiap hari dengan mata telanjang seperti planet venus yang disebut orang sebagai bintang fajar.', '2019-05-14 05:10:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `usia` int(100) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `biografi` text NOT NULL,
  `gender` varchar(20) NOT NULL,
  `website` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `usia`, `nim`, `jurusan`, `biografi`, `gender`, `website`, `email`) VALUES
(53, 'Sela Pebraini', '8c9a14ffebb7677d033ffce847991293', 18, '09031181823137', 'Sistem Informasi', 'Haeee', 'Perempuan', 'www.google.com', 'selamodric29@gmail.com'),
(60, 'Frisca Dwi', 'b59c67bf196a4758191e42f76670ceba', 18, '09031181822543', 'Manajemen Informatik', 'Blalala', 'Perempuan', 'www.unsri.ac.id', 'dwi28@gmail.com'),
(61, 'Indri Kurniawan Saputra', '5a142a55461d5fef016acfb927fee0bd', 24, '09031381824537', 'Komputerisasi Akunta', 'Apa lu!', 'Laki - Laki', 'www.google.com', 'gembele@gmail.com'),
(62, 'hhh', 'a3aca2964e72000eea4c56cb341002a4', 14, '1234', 'Komputerisasi Akunta', 'Bjlwjfe', 'Perempuan', 'www.google.unsri.ac.id', 'dwi@gmail.com'),
(63, 'sela', '81dc9bdb52d04dc20036dbd8313ed055', 12, '09098765', 'Manajemen Informatik', 'bjjnkjkjk', 'Perempuan', 'www.google.unsri.ac.id', 'dwi@gmail.com'),
(64, 'hodf', '072971eec561bbcf8e7bd93bdb0d5e6b', 0, 'jepo', 'Sistem Informasi', 'kklfr', '', 'nkkl', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
