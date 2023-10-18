-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Apr 2020 pada 15.33
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
-- Database: `kameo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `add_booking`
--

CREATE TABLE `add_booking` (
  `id_brg` int(11) NOT NULL,
  `tgl_mulai` varchar(125) NOT NULL,
  `tgl_selesai` varchar(125) NOT NULL,
  `pickup` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `image`, `password`, `date_created`) VALUES
(5, 'M Hasbi Hasbullah', 'mhasbihasbullah@gmail.com', '3.jpg', '$2y$10$LE9FAIo2kIy0NNaiJzTEI.DiQg82B8URxgEOMKR5qyaoQ98aza3be', 1552120289);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(125) NOT NULL,
  `id_ktg` int(11) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_brg`, `nama_brg`, `id_ktg`, `deskripsi`, `harga`, `gambar`) VALUES
(1, 'Sony A7 Mark II', 2, 'Highlight utama A7 mk II adalah 5 axis stabilization. Fitur ini membuat lensa apapun yang dipasangkan ke kamera akan mendapatkan keuntungan stabilizer, sehingga kita dapat mengunakan shutter speed yang lebih rendah saat memotret tanpa mengakibatkan gambar buram karena getaran tangan kita masuk ke foto.', 200000, 'Sony_Alpha_A7_Mark_II_Kit_28-70mm_f3_5-5_62-600x666.jpg'),
(3, 'Sony A7', 2, 'Sony A7 Body Only adalah kamera mirrorless dari Sony (Body Only) dengan resolusi 24 Megapixel Sensor full-frame Exmor CMOS dan E-Mount body. Fitur lainnya adalah hybrid phase detection autofocus yang mengakselerasi auto focus saat memotret subjek yang bergerak di lingkungan dengan cahaya terang (seperti di outdoor contohnya).', 120000, 'Sony_Alpha_A7_Kit_28-70mm_f3_5-5_64-600x666.jpg'),
(4, 'GoPro Hero 8 Black', 3, 'GoPro menambah jajaran kamera aksi yang sudah mengesankan dengan HERO8 Black, action cam generasi terbaru yang dirancang untuk menangkap rekaman halus dan stabil dari petualangan terbaru Anda, dari perjalanan kapal sederhana hingga naik gunung. HERO8 Black menghadirkan pembaruan HyperSmooth 2.0 stabilisasi untuk menghasilkan gerakan halus, seperti gimbal di semua frame rate yang didukung, tanpa perlu gimbal. Pembaruan tambahan termasuk desain fisik yang lebih ramping dengan basis tipe \"jari lipat\" untuk pemasangan cepat, pintu baterai yang dirancang ulang untuk penggantian baterai yang lebih cepat, lensa dengan resistensi dampak dua kali lipat seperti HERO7, Mod Baterai opsional untuk masa pakai baterai yang hampir 2.5x lebih banyak , dan Mod Media opsional untuk memperluas kemungkinan aksesori Anda.', 90000, '1569960044_IMG_1245120-600x666.jpg'),
(5, 'Canon EOS 5D Mark IV KIT', 1, 'EOS 5D Mark IV KIT megapiksel adalah kamera entry-level premium untuk penggemar fotografi yang menikmati ekspresi diri melalui gambar dan memiliki minat serius dalam mengeksplorasi kedalaman dalam fotografi digital.', 35000, '5DM4_1-600x666.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `kode_booking` varchar(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `durasi` int(11) NOT NULL,
  `status` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `pickup` varchar(125) NOT NULL,
  `tgl_booking` date NOT NULL,
  `bukti_bayar` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cek_booking`
--

CREATE TABLE `cek_booking` (
  `kode_booking` varchar(8) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `tgl_booking` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `contactus`
--

CREATE TABLE `contactus` (
  `id_cu` int(11) NOT NULL,
  `nama_visit` varchar(100) DEFAULT NULL,
  `email_visit` varchar(120) DEFAULT NULL,
  `telp_visit` char(16) DEFAULT NULL,
  `pesan` longtext,
  `tgl_posting` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE `customers` (
  `id_cs` int(11) NOT NULL,
  `nama_cs` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `telp` char(125) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `ktp` varchar(125) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `info_contact`
--

CREATE TABLE `info_contact` (
  `id_info` int(11) NOT NULL,
  `email_info` varchar(125) NOT NULL,
  `telp_info` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `info_contact`
--

INSERT INTO `info_contact` (`id_info`, `email_info`, `telp_info`) VALUES
(1, 'luckykamera@gmail.com', '0895378244308');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_ktg` int(11) NOT NULL,
  `nama_ktg` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_ktg`, `nama_ktg`) VALUES
(1, 'Kamera DSLR'),
(2, 'Kamera Mirrorless'),
(3, 'Kamera Action');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`kode_booking`);

--
-- Indeks untuk tabel `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id_cu`);

--
-- Indeks untuk tabel `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id_cs`);

--
-- Indeks untuk tabel `info_contact`
--
ALTER TABLE `info_contact`
  ADD PRIMARY KEY (`id_info`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_ktg`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id_cu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `customers`
--
ALTER TABLE `customers`
  MODIFY `id_cs` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `info_contact`
--
ALTER TABLE `info_contact`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_ktg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
