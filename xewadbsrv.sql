-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jan 2019 pada 18.41
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xewadbsrv`
--
CREATE DATABASE IF NOT EXISTS `xewadbsrv` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `xewadbsrv`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `name` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`name`, `username`, `password`, `email`, `phone`, `address`) VALUES
('Dian Marlinayanti', 'dian', 'dian', 'dian@domain.com', '0812345', 'Jawa Tengah'),
('Ratna Alfiani', 'ratna', 'ratna', 'ratna@domain.com', '098324', 'Indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `image_link` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `gender` varchar(1) NOT NULL,
  `size` varchar(3) NOT NULL,
  `price` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `name`, `stock`, `available`, `image_link`, `description`, `gender`, `size`, `price`, `rating`) VALUES
(1, 'Snowy Things', 5, 5, 'https://i.ibb.co/Q6hjr5T/123.jpg', 'Memiliki warna putih yang menarik dan sangat indah.', 'F', 'L', 68000, 0),
(2, 'Colorful Buttefly', 2, 2, 'https://i.ibb.co/1vYGZwZ/hqdefault.jpg', 'Motif kupu-kupu yang sangat indah dengan warna-warna yang mencolok mata anda.', 'F', 'S', 50000, 0),
(3, 'Surise', 1, 1, 'https://i.ibb.co/4MLtsyn/karnaval-SMA.jpg', 'Bagaikan mentari yang terbit di pagi hari, kostum ini memberi semangat yang tinggi bagi pemakainya, percayalah!', 'F', 'M', 80000, 0),
(9, 'Aurora', 4, 4, 'https://www.w3schools.com/w3css/img_lights.jpg', 'Bagus sangad', 'U', 'L', 78000, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `provider`
--

CREATE TABLE `provider` (
  `name` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `provider`
--

INSERT INTO `provider` (`name`, `username`, `password`, `email`, `phone`) VALUES
('Pulung Imamuddin', 'pulung', 'pulung', 'pulung@domain.com', '08712466');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `trans_id` int(11) NOT NULL,
  `from_customer` varchar(25) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `track_no` varchar(30) NOT NULL,
  `date_created` date NOT NULL,
  `max_delivery_date` date NOT NULL,
  `date_returned` date NOT NULL,
  `total_price` int(11) NOT NULL,
  `returned_track_no` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`trans_id`, `from_customer`, `product_id`, `amount`, `status`, `track_no`, `date_created`, `max_delivery_date`, `date_returned`, `total_price`, `returned_track_no`) VALUES
(1, 'dian', 1, 1, 'Menunggu Pembayaran', '', '2019-01-08', '2019-01-09', '0000-00-00', 68000, ''),
(2, 'ratna', 2, 1, 'Telah Dikembalikan', 'JT442928', '2019-01-03', '2019-01-04', '2019-01-07', 200000, 'JT983742');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `provider`
--
ALTER TABLE `provider`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`trans_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
