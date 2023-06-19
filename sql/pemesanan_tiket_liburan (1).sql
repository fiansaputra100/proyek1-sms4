-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jun 2023 pada 07.26
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemesanan_tiket_liburan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_1`
--

CREATE TABLE `admin_1` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telepon` int(15) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin_1`
--

INSERT INTO `admin_1` (`id_admin`, `nama`, `username`, `password`, `email`, `telepon`, `alamat`) VALUES
(2, 'Ahmad Ghozi Saputra', 'admin', 'admin123', 'admin@admin.com', 855462590, 'malang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi_wisata`
--

CREATE TABLE `informasi_wisata` (
  `kode_info` int(11) NOT NULL,
  `judul_informasi` varchar(255) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `tanggal` date NOT NULL,
  `foto_informasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `informasi_wisata`
--

INSERT INTO `informasi_wisata` (`kode_info`, `judul_informasi`, `deskripsi`, `tanggal`, `foto_informasi`) VALUES
(5, 'Cara Pergi Ke Wisata Welora Maluku, Harus Naik Kapal Dulu', 'Desa Wisata Welora berada di Kecamatan Dawelor Dawera, Kabupaten Maluku Barat Daya, Provinsi Maluku. Desa ini terkenal akan alam bawah lautnya. \"Keunggulan kami di (wisata) laut, maka dengan adanya itu potensi di darat misalnya ada wisata-wisata sejarahnya kami bangun juga,\" kata Sekretaris Desa Welora, Markus Laimera kepada Kompas.com di Pameran Deep and Extreme Indonesia, Kamis (1/6/2023).  Welora, kata Markus, termasuk desa kecil dengan 50 kepala keluarga. Selain sektor perikanan, desa ini juga terkenal di kalangan wisatawan mancanegara yang gemar diving (menyelam). Bila ingin ke desa ini, berikut salah satu cara yang bisa dicoba: Adapun jadwal penerbangan menuju Pulau Moa dari maskapai penerbangan tersebut adalah setiap Selasa, Kamis dan Minggu. Sesampainya di Pulau Moa, naiklah kapal laut bernama Kapal Sabuk Nusantara. Perjalanan dari Pulau Moa ke Desa Wisata Welora akan memakan waktu sekitar dua hari. \"Perjalanannya memang agak jauh sekitar dua hari perjalanan dengan kapal,\" ucap', '2023-06-07', 'images.jfif'),
(6, '15 Tempat Makan Sekitar Batu Night Spectacular, Harga Mulai Rp 15.000', 'wisata ini merupakan wisata yang digemari banyak pengunjung', '2023-06-12', 'bns.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logins`
--

CREATE TABLE `logins` (
  `no_login` varchar(16) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_20_033302_create_logins_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `nama_yg_bayar` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pembelian`, `nama_yg_bayar`, `bank`, `jumlah`, `tanggal`, `bukti_pembayaran`) VALUES
(8, 1158, 'Fian Rifky Saputra', 'BRI', 2, '2023-06-06', '20230606153909project STORY kayana part 2 (FB Story).png'),
(9, 1158, 'Fian Rifky Saputra', 'Link Aja', 394000, '2023-06-06', '20230606172631project kayana part 3 (11).png'),
(10, 1159, 'Fian Rifky Saputra', 'Link Aja', 240000, '2023-06-07', '20230607002923pantai kuta bali.jpg'),
(11, 1158, 'Fian Rifky Saputra', 'BRI', 2147483647, '2023-06-07', '20230607080945b15afce68a0085741a3b4af359ea53fc.jpg'),
(12, 1160, 'arif maulana putri', 'BRI', 2147483647, '2023-06-07', '20230607081050b15afce68a0085741a3b4af359ea53fc.jpg'),
(13, 1161, 'Rizky Saputra', 'Mandiri', 377000, '2023-06-07', '20230607082553images.jfif'),
(14, 1162, 'Fian Rifky Saputra', 'BRI', 480000, '2023-06-11', '20230611200833Tambahkan judul (1).png'),
(15, 1162, 'arif maulana putri', 'BRI', 121, '2023-06-11', '20230611201139images.jpeg-13.jpg'),
(16, 1163, 'Fian Rifky Saputra', 'BRI', 34444, '2023-06-11', '20230611202018png-clipart-dewa-19-logo-graphics-nineteen.png'),
(17, 1164, 'arif maulana putri', 'BRI', 2222, '2023-06-11', '20230611202155png-clipart-dewa-19-logo-graphics-nineteen.png'),
(18, 1162, 'Fian Rifky Saputra', 'BRI', 22222, '2023-06-11', '20230611202453png-clipart-dewa-19-logo-graphics-nineteen.png'),
(19, 1162, 'Fian Rifky Saputra', 'BRI', 121, '2023-06-11', '20230611205058images.jpeg-13.jpg'),
(20, 1159, 'arif maulana putri', 'BRI', 250000, '2023-06-12', '20230612070951Tambahkan judul (1).png'),
(21, 1167, 'Fian Rifky Saputra', 'BRI', 250000, '2023-06-12', '20230612071206png-clipart-dewa-19-logo-graphics-nineteen.png'),
(22, 1169, 'Lailatul Badriyah', 'BNI', 600000, '2023-06-12', '20230612081630Untitled (6).png'),
(23, 1170, 'Satria Yudhistira', 'DANA', 360000, '2023-06-12', '20230612094653IMG_8779.JPG'),
(24, 1171, 'arif maulana putri', 'BRI', 240000, '2023-06-19', '202306190352532ac4a26072acac795fbf4da234b458ba (1)_auto_x2.jpg'),
(25, 1173, 'sifa zaidan', 'BNI', 30000, '2023-06-19', '20230619064634lionel-messi-timnas-argentina-argentina-vs-curacao-laga-persahabatan_169.jpeg'),
(26, 1173, 'sifa zaidan', 'BRI', 30000, '2023-06-19', '20230619070958png_20230617_175652_0000.png'),
(27, 1174, 'sifa zaidan', 'BRI', 291000, '2023-06-19', '20230619071256png_20230617_175652_0000.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_tiket`
--

CREATE TABLE `pembelian_tiket` (
  `kode_transaksi_tiket` int(11) NOT NULL,
  `id_transaksi` int(20) NOT NULL,
  `kode_wisata` int(25) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `subharga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_pelanggan` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password_akun` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_whatsapp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_pelanggan`, `username`, `password_akun`, `nama`, `email`, `no_whatsapp`) VALUES
(10, 'admin1', 'admin123', 'admin1@gmail.com', 'admin1', '085571383633'),
(15, 'ria1', 'ria123', 'ria', 'ria@gmail.com', '08664546474'),
(16, 'satriayudhistira500', 'satria123', 'Satria Yudhistira', 'satria@gmail.com', '0877735374411'),
(17, 'lailatul1', 'lailatul123', 'Lailatul Badriyah', 'lailatul@gmail.com', '081673784478'),
(19, 'sifa1', 'sifa123', 'sifa zaidan', 'sifa@gmail.com', '085546259011');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(20) NOT NULL,
  `id_pelanggan` int(255) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(11) NOT NULL,
  `status_pembelian` varchar(100) NOT NULL DEFAULT 'pending',
  `tanggal_pergi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pelanggan`, `tanggal_pembelian`, `total_pembelian`, `status_pembelian`, `tanggal_pergi`) VALUES
(1162, 10, '2023-06-11', 480000, 'sudah kirim pembayaran', '2023-06-11'),
(1163, 10, '2023-06-11', 51000, 'sudah kirim pembayaran', '2023-06-11'),
(1164, 10, '2023-06-11', 100000, 'sudah kirim pembayaran', '2023-06-11'),
(1169, 17, '2023-06-12', 600000, 'sudah kirim pembayaran', '2023-06-12'),
(1171, 16, '2023-06-19', 240000, 'sudah kirim pembayaran', '2023-06-19'),
(1172, 0, '2023-06-19', 440000, 'pending', '2023-06-19'),
(1173, 19, '2023-06-19', 30000, 'sudah kirim pembayaran', '2023-06-19'),
(1174, 19, '2023-06-19', 291000, 'sudah kirim pembayaran', '2023-06-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `kode_wisata` int(25) NOT NULL,
  `nama_wisata` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `lokasi_wisata` varchar(255) NOT NULL,
  `harga_wisata` int(25) NOT NULL,
  `foto_wisata` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`kode_wisata`, `nama_wisata`, `kategori`, `lokasi_wisata`, `harga_wisata`, `foto_wisata`) VALUES
(19, 'Pantai Kuta, Bali', 'pantai', 'Desa Kuta, Kecamatan Kuta, Kabupaten Badung, Provinsi Bali', 15000, 'WhatsApp-Image-2021-05-25-at-08.56.53.webp'),
(20, 'Jatim Park 1', 'wahana', 'Jl. Kartika no.2, sisir, Kecamatan Batu, Batu, Jawa Timur', 120000, 'jatim park 1.jfif'),
(21, 'Goa Maharani', 'goa', 'Jl. Raya,Paciran, Kec Paciran, Kabupaten Lamongan, Jawa Timur', 17000, 'goa maharani.jfif'),
(22, 'Wisata Kelora, Maluku', 'pantai', 'Maluku', 100000, 'WhatsApp-Image-2021-05-25-at-08.56.53.webp'),
(25, 'Batu Night Spectaculler', '', ' jalan Oro-Oro Ombo, sejalan dengan Jatim Park 2.', 40000, 'bns.jpg'),
(26, 'Pantai Coban Lanang', '', 'Batu, Malang', 10000, 'images.jfif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin_1`
--
ALTER TABLE `admin_1`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `informasi_wisata`
--
ALTER TABLE `informasi_wisata`
  ADD PRIMARY KEY (`kode_info`);

--
-- Indeks untuk tabel `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`no_login`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `pembelian_tiket`
--
ALTER TABLE `pembelian_tiket`
  ADD PRIMARY KEY (`kode_transaksi_tiket`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`kode_wisata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin_1`
--
ALTER TABLE `admin_1`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `informasi_wisata`
--
ALTER TABLE `informasi_wisata`
  MODIFY `kode_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `pembelian_tiket`
--
ALTER TABLE `pembelian_tiket`
  MODIFY `kode_transaksi_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1175;

--
-- AUTO_INCREMENT untuk tabel `wisata`
--
ALTER TABLE `wisata`
  MODIFY `kode_wisata` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
