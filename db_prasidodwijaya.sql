-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Des 2020 pada 08.40
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_prasidodwijaya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(125) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Bayu', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hubungi`
--

CREATE TABLE `hubungi` (
  `id_hubungi` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hubungi`
--

INSERT INTO `hubungi` (`id_hubungi`, `nama`, `email`, `pesan`) VALUES
(1, 'bay', 'bayuapriansyah7@gmail.com', 'tes'),
(2, 'bay', 'wuhan@covid.com', 'cek'),
(3, 'bayu', 'byabymin@gmail.com', 'kendala login');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `kode_type` varchar(125) NOT NULL,
  `merek` varchar(125) NOT NULL,
  `no_plat` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `status` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `supir` int(11) NOT NULL,
  `tape_cd` varchar(11) NOT NULL,
  `dongkrak_stang` varchar(11) NOT NULL,
  `ban_cadangan` varchar(11) NOT NULL,
  `karpet` varchar(11) NOT NULL,
  `kunci_roda` varchar(11) NOT NULL,
  `tempat_tisue` varchar(11) NOT NULL,
  `gambar` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `kode_type`, `merek`, `no_plat`, `warna`, `tahun`, `status`, `harga`, `denda`, `supir`, `tape_cd`, `dongkrak_stang`, `ban_cadangan`, `karpet`, `kunci_roda`, `tempat_tisue`, `gambar`) VALUES
(2, 'SDN', 'Xpander', 'AB 80808 HC', 'Hitam', '2019', '0', 120000, 50000, 100000, '0', '1', '1', '1', '1', '1', 'Mitsubishi-Xpander-Cross-Resize-5-0058.jpg'),
(4, 'SDN', 'Jazz', 'AD 1234 DA', 'Pink', '2018', '0', 200000, 100000, 0, '1', '', '1', '', '', '', 'mbl3.jpg'),
(5, 'MPV', 'Xpender', 'AB 8080 HC', 'Putih', '2017', '0', 150000, 50000, 0, '1', '', '0', '', '', '', 'Mitsubishi-Xpander-Cross-Resize-5-0057.jpg'),
(6, 'SDN', 'velox', 'AD 5555 EA', 'Hitam', '2017', '0', 200000, 50000, 150000, '1', '', '1', '0', '1', '1', 'black-rose-Wallpaper-1080p-number-chw.jpg'),
(10, 'SDN', 'Rebon', 'AB 1399 PX', 'Hitam', '2019', '1', 0, 0, 0, '1', '1', '1', '1', '1', '1', 'Mitsubishi-Xpander-Cross-Resize-5-0059.jpg'),
(11, 'SDN', 'Rebon', 'AB 1768 OF', 'Hitam', '2016', '1', 0, 0, 0, '1', '1', '1', '1', '1', '1', 'Mitsubishi-Xpander-Cross-Resize-5-00510.jpg'),
(12, 'SDN', 'GM ST', 'AB 1232 NH', 'Silver', '2016', '1', 0, 0, 0, '1', '1', '1', '1', '1', '1', 'Mitsubishi-Xpander-Cross-Resize-5-00511.jpg'),
(13, 'SDN', 'Avanza V', 'AB 1569 XY', 'Hitam', '2016', '1', 0, 0, 0, '1', '1', '1', '1', '1', '1', ''),
(14, 'SDN', 'Avanza V', 'AB 1891 DJ', 'Putih', '2016', '1', 0, 0, 0, '1', '1', '1', '1', '1', '1', ''),
(15, 'SDN', 'Avanza V', 'AB 1885 DJ', 'Hitam', '2016', '1', 0, 0, 0, '1', '1', '1', '1', '1', '1', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `alamat` varchar(125) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `password` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `email`, `alamat`, `gender`, `no_telepon`, `no_ktp`, `password`) VALUES
(2, 'hui', 'admin@1.com', 'PETOLONGAN KP PEKOJAN TENGAH NO 36', 'laki-laki', '0812345678', '12345678901', '7363a0d0604902af7b70b271a0b96480'),
(3, 'queen', 'khoirunsafitri1@gmail.com', 'PETOLONGAN KP PEKOJAN TENGAH NO 361', 'perempuan', '0812345678', '12345678901', 'd9b1d7db4cd6e70935368a1efb10e377'),
(4, 'eka', 'admin@mail.com', 'PESING POGIAR, CENGKARENG-JAKBAR', 'laki-laki', '0812345678', '12345678901', 'd9b1d7db4cd6e70935368a1efb10e377'),
(5, 'Admin_1', 'bayuapriansyah7@gmail.com', 'Yogyakarta', 'Laki-laki', '0812345678', '12345678901', '21232f297a57a5a743894a0e4a801fc3'),
(6, 'se', 'admin@1.com', 'KUSUMANEGARA NO 2', 'Laki-laki', '0812345678', '12345678901', '202cb962ac59075b964b07152d234b70'),
(7, 'wuhan', 'wuhan@covid.com', 'china', 'Laki-laki', '0812345678', '5657689', '202cb962ac59075b964b07152d234b70'),
(9, 'bay', 'wuhan@covid.com', 'Yogyakarta', 'Laki-laki', '0812345678', '12345678901', '202cb962ac59075b964b07152d234b70'),
(10, 'bay', 'kelvin@gmail.com', 'Yogyakarta', 'Laki-laki', '0812345678', '1234567890987654', '202cb962ac59075b964b07152d234b70'),
(11, 'bay', 'wibowo@gmail.com', 'Yogyakarta', 'Laki-laki', '1234567890', '1234567890987654', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `servis_pajak`
--

CREATE TABLE `servis_pajak` (
  `id_sp` int(11) NOT NULL,
  `merek` varchar(120) NOT NULL,
  `no_plat` varchar(20) NOT NULL,
  `servis` varchar(100) NOT NULL,
  `pajak` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `total_biaya` varchar(120) NOT NULL,
  `nama_supir` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `supir`
--

CREATE TABLE `supir` (
  `id_supir` int(11) NOT NULL,
  `nama_supir` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `supir`
--

INSERT INTO `supir` (`id_supir`, `nama_supir`, `email`, `alamat`, `gender`, `no_telepon`, `password`) VALUES
(1, 'edy wibowo', 'wibowo@gmail.com', 'ujungkulon', 'laki-laki', '0899999999', '7363a0d0604902af7b70b271a0b96480'),
(3, 'cs', 'bayuapriansyah7@gmail.com', 'Yogyakarta', 'Laki-laki', '08080808080', '202cb962ac59075b964b07152d234b70'),
(4, ', iygy', 'bayuapriansyah7@gmail.com', 'Yogyakarta', 'Laki-laki', '08080808080', '202cb962ac59075b964b07152d234b70'),
(5, 'hj b', 'bayuapriansyah7@gmail.com', 'Yogyakarta', 'Laki-laki', '08080808080', '202cb962ac59075b964b07152d234b70'),
(6, 'jbnj', 'bayuapriansyah7@gmail.com', 'Yogyakarta', 'Laki-laki', '0812345678', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_sewa` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `nama_supir` varchar(120) NOT NULL,
  `tanggal_sewa` date NOT NULL,
  `jam_sewa` time NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `jam_kembali` time NOT NULL,
  `alamat_detail` varchar(120) NOT NULL,
  `harga` varchar(120) NOT NULL,
  `denda` varchar(120) NOT NULL,
  `supir` varchar(120) NOT NULL,
  `total_denda` varchar(120) NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `jam_pengembalian` time NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL,
  `status_sewa` varchar(50) NOT NULL,
  `bukti_pembayaran` varchar(120) NOT NULL,
  `status_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_sewa`, `id_pelanggan`, `id_mobil`, `nama_supir`, `tanggal_sewa`, `jam_sewa`, `tanggal_kembali`, `jam_kembali`, `alamat_detail`, `harga`, `denda`, `supir`, `total_denda`, `tanggal_pengembalian`, `jam_pengembalian`, `status_pengembalian`, `status_sewa`, `bukti_pembayaran`, `status_pembayaran`) VALUES
(5, 7, 2, 'edy wibowo', '2020-12-04', '00:00:00', '2020-12-05', '00:00:00', '', '120000', '50000', '', '550000', '2020-12-16', '00:00:00', 'Kembali', 'Selesai', '', 0),
(6, 7, 5, '', '2020-12-03', '00:00:00', '2020-12-04', '00:00:00', '', '150000', '50000', '', '150000', '2020-12-07', '00:00:00', 'Kembali', 'Selesai', '', 0),
(9, 7, 4, 'edy wibowo', '2020-12-16', '19:40:00', '2020-12-17', '00:00:00', '', '200000', '100000', '0', '100000', '2020-12-16', '00:00:00', 'Belum Kembali', 'Belum Selesai', '', 0),
(10, 7, 6, 'edy wibowo', '2020-12-16', '19:40:00', '2020-12-18', '00:00:00', '', '200000', '50000', '---Pilih---', '100000', '2020-12-16', '00:00:00', 'Belum Kembali', 'Belum Selesai', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `kode_type` varchar(10) NOT NULL,
  `nama_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `type`
--

INSERT INTO `type` (`id_type`, `kode_type`, `nama_type`) VALUES
(1, 'SDN', 'Sedan'),
(2, 'MPV', 'Multi Purpose Vechile');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `hubungi`
--
ALTER TABLE `hubungi`
  ADD PRIMARY KEY (`id_hubungi`);

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `servis_pajak`
--
ALTER TABLE `servis_pajak`
  ADD PRIMARY KEY (`id_sp`);

--
-- Indeks untuk tabel `supir`
--
ALTER TABLE `supir`
  ADD PRIMARY KEY (`id_supir`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_sewa`);

--
-- Indeks untuk tabel `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `hubungi`
--
ALTER TABLE `hubungi`
  MODIFY `id_hubungi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `servis_pajak`
--
ALTER TABLE `servis_pajak`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `supir`
--
ALTER TABLE `supir`
  MODIFY `id_supir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
