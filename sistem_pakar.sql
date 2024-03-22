-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2024 at 01:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_pakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `basis_kasus`
--

CREATE TABLE `basis_kasus` (
  `id_aturan` int(11) NOT NULL,
  `id_penyakit` int(11) NOT NULL,
  `id_gejala` int(11) NOT NULL,
  `nama_penyakit` varchar(255) NOT NULL,
  `nama_gejala` varchar(255) NOT NULL,
  `bobot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `basis_kasus`
--

INSERT INTO `basis_kasus` (`id_aturan`, `id_penyakit`, `id_gejala`, `nama_penyakit`, `nama_gejala`, `bobot`) VALUES
(28, 1, 1, 'Defisiensi Vitamin A', 'Mata kering', 40),
(29, 1, 3, 'Defisiensi Vitamin A', 'Kulit kering', 10),
(30, 1, 2, 'Defisiensi Vitamin A', 'Sulit melihat di malam hari', 10),
(31, 1, 4, 'Defisiensi Vitamin A', 'Kuku pecah-pecah', 50),
(32, 1, 6, 'Defisiensi Vitamin A', 'Kebutaan', 80),
(33, 1, 7, 'Defisiensi Vitamin A', 'Bintik putih di mata', 50),
(34, 1, 9, 'Defisiensi Vitamin A', 'Infeksi', 30),
(35, 1, 8, 'Defisiensi Vitamin A', 'Gangguan Pertumbuhan', 10),
(36, 1, 5, 'Defisiensi Vitamin A', 'Ulkus kornea (luka pada mata)', 70),
(37, 2, 10, 'Kekurangan Yodium', 'Benjolan di leher', 80),
(38, 2, 11, 'Kekurangan Yodium', 'Rambut rontok', 30),
(39, 2, 12, 'Kekurangan Yodium', 'Peningkatan berat badan tanpa penyebab yang jelas', 10),
(40, 2, 13, 'Kekurangan Yodium', 'Tubuh terasa lelah dan lemah', 20),
(41, 2, 14, 'Kekurangan Yodium', 'Merasa kedinginan', 10),
(42, 2, 15, 'Kekurangan Yodium', 'Kulit menjadi kering dan pecah-pecah', 30),
(43, 2, 16, 'Kekurangan Yodium', 'Gangguan irama jantung', 20),
(44, 2, 17, 'Kekurangan Yodium', 'Penurunan daya ingat dan kemampuan berpikir.', 10),
(45, 2, 17, 'Kekurangan Yodium', 'Penurunan daya ingat dan kemampuan berpikir.', 20),
(46, 3, 18, 'Anemia', 'terlihat pucat', 10),
(47, 3, 19, 'Anemia', 'Mudah lelah', 20),
(48, 3, 20, 'Anemia', 'Kerap merasa pusing', 50),
(49, 3, 21, 'Anemia', 'Napas terasa lebih berat', 20),
(50, 3, 22, 'Anemia', 'Jantung berdetak lebih cepat', 20),
(51, 3, 23, 'Anemia', 'Kulit menjadi kuning', 70),
(52, 3, 24, 'Anemia', 'Tidak nafsu makan', 10),
(53, 3, 25, 'Anemia', 'Urine berwarna gelap', 50),
(54, 4, 26, 'Stunting', 'Tinggi badan anak lebih pendek daripada tinggi badan anak seusianya', 80),
(55, 4, 27, 'Stunting', 'Berat badan tidak meningkat secara konsisten', 30),
(56, 4, 28, 'Stunting', 'Tahap perkembangan yang terlambat dibandingkan anak seusianya', 50),
(57, 4, 29, 'Stunting', 'Tidak aktif bermain', 10),
(58, 4, 13, 'Stunting', 'Tubuh terasa lelah dan lemah', 10),
(59, 4, 31, 'Stunting', 'Mudah terserang penyakit, terutama infeksi', 20),
(60, 5, 32, 'Osteoporosis', 'Sakit punggung pada anak, terutama bagian bawah, atau nyeri di bagian pinggul dan kaki', 60),
(61, 5, 33, 'Osteoporosis', 'Pincang atau sulit berjalan', 70),
(62, 5, 34, 'Osteoporosis', 'Tulang belakang yang melengkung tidak normal (kifosis)', 80),
(63, 5, 35, 'Osteoporosis', 'Dada cekung', 70),
(64, 6, 13, 'Maramus', 'Tubuh terasa lelah dan lemah', 10),
(65, 6, 36, 'Maramus', 'Suhu tubuh yang menurun', 10),
(66, 6, 37, 'Maramus', 'Diare kronis', 50),
(67, 6, 38, 'Maramus', 'Infeksi saluran pernapasan', 70),
(68, 6, 39, 'Maramus', 'Gangguan emosional pada anak atau tidak menunjukkan ekspresi emosi', 20),
(69, 6, 40, 'Maramus', 'Mudah marah', 10),
(71, 6, 42, 'Maramus', 'Pernapasan melambat', 40),
(72, 6, 43, 'Maramus', 'Tangan bergetar', 10),
(73, 6, 44, 'Maramus', 'Kulit kering dan kasar', 20),
(74, 6, 45, 'Maramus', 'Kebotakan (rambut gampang rontok)', 10),
(75, 7, 46, 'Kwashirkor', 'Penurunan ketebalan otot', 20),
(76, 7, 47, 'Kwashirkor', 'Perut membesar', 50),
(77, 7, 48, 'Kwashirkor', 'Kulit berwarna kemerahan, kering, bersisik, atau terkelupas', 70),
(78, 7, 49, 'Kwashirkor', 'Kuku rapuh', 30),
(79, 7, 50, 'Kwashirkor', 'Rambut menjadi kering, rapuh, mudah patah, bahkan berubah warna menjadi kuning kemerahan seperti rambut jagung', 70),
(80, 7, 51, 'Kwashirkor', 'Gangguan tumbuh kembang', 10),
(81, 7, 52, 'Kwashirkor', 'Penyakit infeksi yang terjadi dalam jangka panjang atau sulit sembuh', 40),
(82, 7, 13, 'Kwashirkor', 'Tubuh terasa lelah dan lemah', 10),
(83, 7, 55, 'Kwashirkor', 'Lebih rewel dan sering menangis', 10);

-- --------------------------------------------------------

--
-- Table structure for table `detail_penyakit`
--

CREATE TABLE `detail_penyakit` (
  `id_konsultasi` int(11) NOT NULL,
  `id_penyakit` int(3) NOT NULL,
  `persentase` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` int(11) NOT NULL,
  `nama_gejala` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `nama_gejala`) VALUES
(1, 'Mata kering'),
(2, 'Sulit melihat di malam hari'),
(3, 'Kulit kering'),
(4, 'Kuku pecah-pecah'),
(5, 'Ulkus kornea (luka pada mata)'),
(6, 'Kebutaan'),
(7, 'Bintik putih di mata'),
(8, 'Gangguan Pertumbuhan'),
(9, 'Infeksi'),
(10, 'Benjolan di leher'),
(11, 'Rambut rontok'),
(12, 'Peningkatan berat badan tanpa penyebab yang jelas'),
(13, 'Tubuh terasa lelah dan lemah'),
(14, 'Merasa kedinginan'),
(15, 'Kulit menjadi kering dan pecah-pecah'),
(16, 'Gangguan irama jantung'),
(17, 'Penurunan daya ingat dan kemampuan berpikir.'),
(18, 'terlihat pucat'),
(19, 'Mudah lelah'),
(20, 'Kerap merasa pusing'),
(21, 'Napas terasa lebih berat'),
(22, 'Jantung berdetak lebih cepat'),
(23, 'Kulit menjadi kuning'),
(24, 'Tidak nafsu makan'),
(25, 'Urine berwarna gelap'),
(26, 'Tinggi badan anak lebih pendek daripada tinggi badan anak seusianya'),
(27, 'Berat badan tidak meningkat secara konsisten'),
(28, 'Tahap perkembangan yang terlambat dibandingkan anak seusianya'),
(29, 'Tidak aktif bermain'),
(31, 'Mudah terserang penyakit, terutama infeksi'),
(32, 'Sakit punggung pada anak, terutama bagian bawah, atau nyeri di bagian pinggul dan kaki'),
(33, 'Pincang atau sulit berjalan'),
(34, 'Tulang belakang yang melengkung tidak normal (kifosis)'),
(35, 'Dada cekung'),
(36, 'Suhu tubuh yang menurun'),
(37, 'Diare kronis'),
(38, 'Infeksi saluran pernapasan'),
(39, 'Gangguan emosional pada anak atau tidak menunjukkan ekspresi emosi'),
(40, 'Mudah marah'),
(42, 'Pernapasan melambat'),
(43, 'Tangan bergetar'),
(44, 'Kulit kering dan kasar'),
(45, 'Kebotakan (rambut gampang rontok)'),
(46, 'Penurunan ketebalan otot'),
(47, 'Perut membesar'),
(48, 'Kulit berwarna kemerahan, kering, bersisik, atau terkelupas'),
(49, 'Kuku rapuh'),
(50, 'Rambut menjadi kering, rapuh, mudah patah, bahkan berubah warna menjadi kuning kemerahan seperti rambut jagung'),
(51, 'Gangguan tumbuh kembang'),
(52, 'Penyakit infeksi yang terjadi dalam jangka panjang atau sulit sembuh'),
(55, 'Lebih rewel dan sering menangis');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsultasi` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `diagnosa` varchar(50) NOT NULL,
  `persentase` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsultasi`, `tanggal`, `diagnosa`, `persentase`) VALUES
(4, '2011-05-26', 'DEFISIENSI VITAMIN A', 51.43),
(7, '2024-03-22', 'DEFISIENSI VITAMIN A', 51.43);

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` int(11) NOT NULL,
  `nm_penyakit` varchar(50) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `solusi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `nm_penyakit`, `keterangan`, `solusi`) VALUES
(1, 'Defisiensi Vitamin A', 'Defisiensi vitamin A merupakan kondisi defisiensi mikronutrien yang sering ditemukan pada negara yang sedang berkembang, terutama pada usia anak. Pada kondisi ini dapat terjadi gangguan pada penglihatan, sistem imun, metabolisme, dan perkembangan sel.  Defisiensi vitamin A merupakan penyebab terbesar kebutaan temporer pada anak. Hal ini dikarenakan vitamin A merupakan vitamin yang bersifat larut dalam lemak, tidak dapat disintesis oleh tubuh, dan merupakan elemen penting dalam mendukung fungsi penglihatan, pertumbuhan, dan daya tahan tubuh', 'Perubahan pola makan. Perubahan pola makan jangka panjang dapat membantu memperbaiki dan mencegah kondisi avitaminosis yang memburuk. Perbanyak konsumsi makanan sehat yang mengandung gizi seimbang agar mendapatkan asupan vitamin yang cukup.\r\n\r\nPenambahan vitamin. Hal ini bisa dilakukan dengan mengonsumsi suplemen vitamin sesuai dengan resep dokter. Terkadang, dokter juga memberikan injeksi vitamin B12 apabila pasien mengalami masalah penyerapan nutrisi.\r\n\r\nObat-obatan. Dokter akan memberikan obat-obatan pada pasien yang mengalami avitaminosis akibat penyakit tertentu.\r\n\r\n'),
(2, 'Kekurangan Yodium', 'Kekurangan asupan yodium menyebabkan penurunan produksi hormon tiroid di dalam tubuh hingga menyebabkan penyakit hipotiroid dan penyakit gondok. Hormon tiroid berperan besar dalam mengatur berbagai fungsi anggota tubuh.', 'Gangguan akibat kekurangan yodium, seperti penyakit gondok, hipotiroidisme, dan lainnya dapat dicegah dengan memasukkan garam beryodium dalam makanan serta mengonsumsi makanan yang kaya yodium, seperti telur, makanan laut (seafood), rumput laut, dan produk olahan susu'),
(3, 'Anemia', 'Anemia merupakan kondisi medis yang terjadi ketika jumlah sel darah merah dalam tubuh lebih rendah dari jumlah normal. Sel darah merah adalah sel darah yang bertanggung jawab untuk mengirimkan oksigen dari paru-paru ke seluruh tubuh. Ketika sel darah merah dalam tubuh sedikit dan mengalami gangguan, maka tubuh tidak dapat menerima oksigen dengan cukup.', 'Memberikan Si Kecil makanan yang kaya akan vitamin dan mineral, Memberi Si Kecil ASI, atau susu formula yang kaya zat besi.\r\nPastikan asupan air Si Kecil terpenuhi\r\nAjak Si Kecil untuk aktif bergerak,\r\nMengonsumsi suplemen zat besi dan\r\nMenghentikan penggunaan obat-obatan yang memicu anemia'),
(4, 'Stunting', 'Stunting adalah kondisi gizi kronis yang terjadi karena kekurangan asupan gizi dalam jangka waktu lama, sehingga menyebabkan pertumbuhan anak terganggu. ', 'Beberapa solusi mengatasi stunting pada anak adalah berikan ASI,\r\nperbaiki masalah menyusui,\r\nberi olahan protein hewani pada MPASI\r\n,imunisasi rutin,\r\n,Memantau tumbuh kembang anak,perilaku hidup bersih dan sehat dan\r\nmemakai jamban sehat'),
(5, 'Osteoporosis', NULL, NULL),
(6, 'Maramus', NULL, NULL),
(7, 'Kwashirkor', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basis_kasus`
--
ALTER TABLE `basis_kasus`
  ADD PRIMARY KEY (`id_aturan`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basis_kasus`
--
ALTER TABLE `basis_kasus`
  MODIFY `id_aturan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id_konsultasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
