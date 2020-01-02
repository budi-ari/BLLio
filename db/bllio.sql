-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2019 pada 15.44
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bllio`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Budi', 'admin', 'asd'),
(2, 'Feriyan', 'admin2', '123'),
(3, 'Eko Pujianto', 'admin3', '456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cs_order`
--

CREATE TABLE `cs_order` (
  `id` int(11) NOT NULL,
  `id_cs_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_link` int(11) NOT NULL,
  `invoice` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer_user`
--

CREATE TABLE `customer_user` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `nm_lembaga` varchar(25) NOT NULL,
  `nm_pj` varchar(25) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `count_login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_img_product`
--

CREATE TABLE `detail_img_product` (
  `id_product` int(11) NOT NULL,
  `id_img` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_link`
--

CREATE TABLE `detail_link` (
  `id_product` int(11) NOT NULL,
  `id_mp` int(11) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `marketplace`
--

CREATE TABLE `marketplace` (
  `id` int(11) NOT NULL,
  `nm_market` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `sku` int(11) NOT NULL,
  `nm_product` varchar(25) NOT NULL,
  `brand` varchar(25) NOT NULL,
  `waranty` varchar(2) NOT NULL,
  `stock` int(7) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `web_banner`
--

CREATE TABLE `web_banner` (
  `id` int(11) NOT NULL,
  `nm_banner` varchar(25) NOT NULL,
  `image` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `type` varchar(25) NOT NULL,
  `isactive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `web_banner`
--

INSERT INTO `web_banner` (`id`, `nm_banner`, `image`, `size`, `type`, `isactive`) VALUES
(1, 'banner 1', 'carousel1.jpg', 91052, 'image/jpeg', 1),
(2, 'banner 2', 'carousel2.jpg', 152900, 'image/jpeg', 1),
(3, 'banner 3', 'carousel3.jpg', 130908, 'image/jpeg', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cs_order`
--
ALTER TABLE `cs_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_co_user` (`id_cs_user`),
  ADD KEY `fk_co_idproduct` (`id_product`),
  ADD KEY `fk_co_idlink` (`id_link`);

--
-- Indeks untuk tabel `customer_user`
--
ALTER TABLE `customer_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `detail_img_product`
--
ALTER TABLE `detail_img_product`
  ADD KEY `fk_id_product` (`id_product`),
  ADD KEY `fk_id_img` (`id_img`);

--
-- Indeks untuk tabel `detail_link`
--
ALTER TABLE `detail_link`
  ADD KEY `fk_id_mp` (`id_mp`),
  ADD KEY `fk_idproduct` (`id_product`);

--
-- Indeks untuk tabel `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `marketplace`
--
ALTER TABLE `marketplace`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sku` (`sku`);

--
-- Indeks untuk tabel `web_banner`
--
ALTER TABLE `web_banner`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `cs_order`
--
ALTER TABLE `cs_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `customer_user`
--
ALTER TABLE `customer_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `marketplace`
--
ALTER TABLE `marketplace`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `web_banner`
--
ALTER TABLE `web_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cs_order`
--
ALTER TABLE `cs_order`
  ADD CONSTRAINT `fk_co_idlink` FOREIGN KEY (`id_link`) REFERENCES `detail_link` (`id_mp`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_co_idproduct` FOREIGN KEY (`id_product`) REFERENCES `detail_link` (`id_product`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_co_user` FOREIGN KEY (`id_cs_user`) REFERENCES `customer_user` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detail_img_product`
--
ALTER TABLE `detail_img_product`
  ADD CONSTRAINT `fk_id_img` FOREIGN KEY (`id_img`) REFERENCES `images` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detail_link`
--
ALTER TABLE `detail_link`
  ADD CONSTRAINT `fk_id_mp` FOREIGN KEY (`id_mp`) REFERENCES `marketplace` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_idproduct` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
