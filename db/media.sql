-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Okt 2024 pada 05.53
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `media`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_materi`
--

CREATE TABLE `tb_materi` (
  `id_materi` int(11) NOT NULL,
  `nama_materi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(2) NOT NULL,
  `nama_siswa` text NOT NULL,
  `tes1` varchar(3) NOT NULL,
  `tes2` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nama_siswa`, `tes1`, `tes2`) VALUES
(1, 'Adhitya surya irawan', '45', '55'),
(2, 'Anisa Zahra Mufidah', '40', '85'),
(3, 'Arka Jenar Ma\'arif', '50', '40'),
(4, 'Ayu Diah Aprilia', '30', '50'),
(5, 'Attaya Kumara Syarief ', '50', '50'),
(6, 'Aufa Ramadhani', '60', '65'),
(7, 'Bagus Purnama N.', '65', '60'),
(9, 'Bryan Akmal I. D.', '70', '70'),
(10, 'Debby Maria', '50', '35'),
(12, 'Farrel Valentino AJP', '70', '70'),
(14, 'Fawwaz Syailendratama ', '50', '45'),
(16, 'Kenji Nararya Nayottama ', '60', '65'),
(17, 'Laily E. R.', '70', '80'),
(19, 'Moch.Adib I\'zaz Al H', '70', '75'),
(20, 'M Abi Putra P.', '55', '55'),
(21, 'Nabiel Asytar Awaludin', '60', '55'),
(22, 'Muhammad Nashrun Qowiyyu Arsyad', '60', '55'),
(23, 'Muhammad Ragil Chamim saputra', '75', '65'),
(24, 'Muhammad Raihan Arifin Putra', '50', '40'),
(25, 'Nailah Anastasya', '40', '60'),
(26, 'Rafa Adzani Dzaki Priyayasa', '55', '60'),
(28, 'Ryan Theola Youwe', '70', '85'),
(29, 'Sagetha Bayu Elma F.', '65', '65'),
(30, 'Salwa Imtiyaz', '55', '60'),
(31, 'Tiyo Kusuma Chandra', '60', '55'),
(33, 'Tristanio Putra Armanto', '75', '65'),
(34, 'RTY', '45', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswas`
--

CREATE TABLE `tb_siswas` (
  `id_siswa` int(2) NOT NULL,
  `nama_siswa` text NOT NULL,
  `tes1` varchar(3) NOT NULL,
  `tes2` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_soal`
--

CREATE TABLE `tb_soal` (
  `id_soal` int(11) NOT NULL,
  `isi_soal` text NOT NULL,
  `pil_a` text NOT NULL,
  `pil_b` text NOT NULL,
  `pil_c` text NOT NULL,
  `pil_d` text NOT NULL,
  `pil_benar` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_soal`
--

INSERT INTO `tb_soal` (`id_soal`, `isi_soal`, `pil_a`, `pil_b`, `pil_c`, `pil_d`, `pil_benar`) VALUES
(1, 'Langkah apa yang dilakukan setelah booting dari media instalasi Windows?', 'Memasukkan kunci produk', 'Pemilihan bahasa instalasi', 'Pemilihan partisi', 'Mengonfigurasi pengaturan awal', 'b'),
(2, 'Apa fungsi dari proses \"Copying Files\" selama instalasi Windows?', 'Mengatur partisi', 'Menyalin file instalasi', 'Mengaktifkan Windows', 'Membuat akun pengguna', 'b'),
(3, 'Mengapa penting untuk memilih partisi yang tepat saat instalasi Windows?', 'Mengoptimalkan kinerja sistem', 'Menghindari konflik driver', 'Menyimpan file instalasi', 'Mencegah kehilangan data', 'd'),
(4, 'Apa yang harus dilakukan setelah proses instalasi selesai untuk mencegah masalah booting?', 'Mengatur wallpaper', 'Memasang driver perangkat keras', 'Mengonfigurasi pengaturan awal', 'Membuat titik pemulihan sistem', 'c'),
(5, 'Mengapa pemilihan bahasa dan wilayah penting selama instalasi Windows?', 'Mempengaruhi tampilan antarmuka', 'Menentukan kunci produk', 'Mengoptimalkan kinerja sistem', 'Semua jawaban benar', 'd'),
(6, 'Apa perbedaan antara instalasi bersih (clean install) dan menginstal ulang Windows?', 'Instalasi bersih hanya menghapus file pengguna', 'Menginstal ulang Windows mempertahankan aplikasi', 'Instalasi bersih menghapus seluruh disk', 'Semua jawaban benar', 'c'),
(7, 'Apa fungsi dari proses \"Completing Installation\" dalam instalasi Windows?', 'Mengonfigurasi pengaturan awal', 'Menyalin file akhir', 'Aktivasi produk', 'Memasukkan kunci produk', 'a'),
(8, 'Apa yang perlu diperiksa sebelum memulai proses instalasi untuk memastikan kompatibilitas perangkat keras?', 'Memeriksa persyaratan minimum sistem', 'Memastikan media instalasi Windows yang baik', 'Mengecek ruang penyimpanan yang cukup', 'Semua jawaban benar', 'd'),
(9, 'Apa tujuan utama dari proses \"Checking compatibility\" selama instalasi Windows?', 'Memeriksa apakah perangkat keras sesuai', 'Menjalankan uji kinerja sistem', 'Mengonfigurasi pengaturan awal', 'Menyalin file instalasi', 'a'),
(10, 'Mengapa penting untuk membuat titik pemulihan sistem sebelum instalasi Windows?', 'Mencegah kehilangan data', 'Mempercepat proses instalasi', 'Menyesuaikan pengaturan awal', 'Mengoptimalkan kinerja sistem', 'a'),
(11, 'Apa yang dilakukan saat proses \"Installing features\" selama instalasi Windows?', 'Mengekstrak dan menyalin file instalasi', 'Mengonfigurasi pengaturan awal', 'Menyalin file akhir', 'Mengaktifkan Windows', 'c'),
(12, 'Apa langkah terakhir setelah menyelesaikan proses instalasi Windows?', 'Mengonfigurasi pengaturan awal', 'Menyalin file akhir', 'Memasang perangkat lunak antivirus', 'Melakukan pembaruan sistem', 'a'),
(13, 'Pada langkah apa pengguna diminta untuk memasukkan kunci produk Windows?', 'Pemilihan bahasa', 'Pemilihan tipe instalasi', 'Aktivasi produk', 'Menyesuaikan pengaturan awal', 'c'),
(14, 'Apa fungsi dari proses \"Finalizing your settings\" dalam instalasi Windows?', 'Mengonfigurasi pengaturan awal', 'Menyalin file akhir', 'Aktivasi produk', 'Memasukkan kunci produk', 'a'),
(15, 'Mengapa disarankan untuk membuat cadangan data sebelum memulai proses instalasi Windows?', 'Mencegah kehilangan data', 'Mengonfigurasi pengaturan awal', 'Mempercepat proses instalasi', 'Semua jawaban benar', 'a'),
(16, 'Apa yang dilakukan pada langkah \"Expanding Files\" selama instalasi Windows?', 'Mengekstrak dan menyalin file instalasi ke disk', 'Mengonfigurasi pengaturan awal', 'Mengaktifkan Windows', 'Membuat titik pemulihan sistem', 'a'),
(17, 'Mengapa penting untuk memahami opsi partisi selama instalasi Windows?', 'Meningkatkan kecepatan instalasi', 'eminimalkan konflik driver', 'Menyesuaikan pengaturan awal', 'Memastikan keamanan sistem', 'c'),
(18, 'Bagaimana cara mengatasi pesan kesalahan \"No bootable device\" setelah instalasi Windows?', 'Merestart komputer', 'Mengonfigurasi urutan boot di BIOS/UEFI', 'Melakukan instalasi ulang', 'Menonaktifkan kunci produk', 'b'),
(19, 'Apa peran dari fitur \"Custom (Advanced)\" selama pemilihan tipe instalasi Windows?', 'Memilih bahasa instalasi', 'Mengonfigurasi pengaturan awal', 'Menyesuaikan partisi dan ruang disk', 'Melakukan aktivasi produk', 'b'),
(20, 'Mengapa sebaiknya tidak mengabaikan pesan kesalahan selama instalasi Windows?', 'Pesan kesalahan biasanya tidak penting', 'Menjaga kestabilan sistem', 'Meningkatkan kinerja instalasi', 'Meminimalkan risiko masalah sistem di masa depan', 'd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nama_user`) VALUES
(1, 'admin', 'admin', 'Admin Jo'),
(2, 'superadmin', 'superadmin', 'super');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_materi`
--
ALTER TABLE `tb_materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tb_siswas`
--
ALTER TABLE `tb_siswas`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tb_soal`
--
ALTER TABLE `tb_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_materi`
--
ALTER TABLE `tb_materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_soal`
--
ALTER TABLE `tb_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
