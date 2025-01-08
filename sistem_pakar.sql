-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2024 at 11:30 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
(60, 5, 32, 'Osteoporosis', 'Sakit punggung pada anak, terutama bagian bawah, atau nyeri di bagian pinggul dan kaki', 60),
(61, 5, 33, 'Osteoporosis', 'Pincang atau sulit berjalan', 70),
(62, 5, 34, 'Osteoporosis', 'Tulang belakang yang melengkung tidak normal (kifosis)', 80),
(63, 5, 35, 'Osteoporosis', 'Dada cekung', 70),
(155, 1, 28, 'Defisiensi vitamin A', 'Mata kering', 70),
(156, 1, 37, 'Defisiensi vitamin A', 'Kulit kering', 20),
(157, 1, 45, 'Defisiensi vitamin A', 'Sulit melihat di malam hari', 80),
(158, 1, 26, 'Defisiensi vitamin A', 'Kebutaan', 90),
(159, 1, 49, 'Defisiensi vitamin A', 'Bintik putih di mata', 70),
(160, 1, 46, 'Defisiensi vitamin A', 'Infeksi', 40),
(161, 1, 36, 'Defisiensi vitamin A', 'Gangguan Pertumbuhan', 30),
(162, 1, 7, 'Defisiensi vitamin A', 'Ulkus kornea (luka pada mata)', 80),
(163, 2, 14, 'Kekurangan Yodium', 'Benjolan di leher', 90),
(164, 2, 38, 'Kekurangan Yodium', 'Rambut rontok', 30),
(165, 2, 8, 'Kekurangan Yodium', 'Peningkatan berat badan tanpa penyebab yang jelas', 30),
(166, 2, 29, 'Kekurangan Yodium', 'Tubuh terasa lelah dan lemah', 40),
(167, 2, 15, 'Kekurangan Yodium', 'Merasa kedinginan', 30),
(168, 2, 9, 'Kekurangan Yodium', 'Gangguan irama jantung', 40),
(169, 2, 6, 'Kekurangan Yodium', 'Penurunan daya ingat dan kemampuan berpikir', 50),
(170, 3, 27, 'Anemia', 'Terlihat pucat', 50),
(171, 3, 13, 'Anemia', 'Mudah lelah', 60),
(172, 3, 10, 'Anemia', 'Kerap merasa pusing', 50),
(173, 3, 35, 'Anemia', 'Napas terasa lebih berat', 40),
(174, 3, 20, 'Anemia', 'Jantung berdetak lebih cepat', 40),
(175, 4, 3, 'Stunting', 'Tinggi badan anak lebih pendek daripada tinggi badan anak seusianya', 90),
(176, 4, 16, 'Stunting', 'Berat badan tidak meningkat secara konsisten', 70),
(177, 4, 22, 'Stunting', 'Tahap perkembangan yang terlambat dibandingkan anak seusianya', 80),
(178, 4, 11, 'Stunting', 'Mudah terserang penyakit, terutama infeksi', 50),
(179, 6, 42, 'Marasmus', 'Tubuh terasa lelah dan lemah', 30),
(180, 6, 25, 'Marasmus', 'Diare kronis', 70),
(181, 6, 1, 'Marasmus', 'Infeksi saluran pernapasan', 60),
(182, 6, 21, 'Marasmus', 'Gangguan emosional pada anak atau tidak menunjukkan ekspresi emosi ', 40),
(183, 6, 31, 'Marasmus', 'Pernapasan melambat', 50),
(184, 6, 2, 'Marasmus', 'Kulit kering dan kasar', 30),
(185, 6, 12, 'Marasmus', 'Kebotakan (rambut gampang rontok)', 30),
(186, 7, 5, 'Kwashiorkor', 'Perut membesar', 70),
(187, 7, 44, 'Kwashiorkor', 'Kulit berwarna kemerahan, kering, bersisik, atau terkelupas', 60),
(188, 7, 24, 'Kwashiorkor', 'Rambut menjadi kering, rapuh, mudah patah, bahkan berubah warna menjadi kuning kemerahan seperti rambut jagung', 80),
(189, 7, 19, 'Kwashiorkor', 'Gangguan tumbuh kembang', 50),
(190, 7, 43, 'Kwashiorkor', 'Penyakit infeksi yang terjadi dalam jangka panjang atau sulit sembuh', 50),
(191, 7, 29, 'Kwashiorkor', 'Tubuh terasa lelah dan lemah', 20),
(192, 7, 4, 'Kwashiorkor', 'Lebih rewel dan sering menangis', 20),
(193, 14, 33, 'Obesitas', 'Penumpukan lemak di tubuh, terutama di sekitar pinggang', 20),
(194, 14, 48, 'Obesitas', 'Mudah berkeringat', 10),
(195, 14, 17, 'Obesitas', 'Susah tidur', 10),
(196, 14, 13, 'Obesitas', 'Mudah lelah', 10),
(197, 14, 40, 'Obesitas', 'Bagian lipatan kulit lembap karena keringat', 30),
(198, 14, 23, 'Obesitas', 'Nyeri di persendian atau punggung', 40),
(199, 14, 32, 'Obesitas', 'Nyeri dada', 20),
(200, 14, 34, 'Obesitas', 'Tekanan darah tinggi', 50),
(201, 14, 18, 'Obesitas', 'Gula darah tinggi', 80);

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
(1, 'Infeksi saluran pernapasan'),
(2, 'Kulit kering dan kasar'),
(3, 'Tinggi badan anak lebih pendek daripada tinggi badan anak seusianya'),
(4, 'Lebih rewel dan sering menangis'),
(5, 'Perut membesar'),
(6, 'Penurunan daya ingat dan kemampuan berpikir'),
(7, 'Ulkus kornea (luka pada mata)'),
(8, 'Peningkatan berat badan tanpa penyebab yang jelas'),
(9, 'Gangguan irama jantung'),
(10, 'Kerap merasa pusing'),
(11, 'Mudah terserang penyakit, terutama infeksi'),
(12, 'Kebotakan (rambut gampang rontok)'),
(13, 'Mudah lelah'),
(14, 'Benjolan di leher'),
(15, 'Merasa kedinginan'),
(16, 'Berat badan tidak meningkat secara konsisten'),
(17, 'Susah tidur'),
(18, 'Gula darah tinggi'),
(19, 'Gangguan tumbuh kembang'),
(20, 'Jantung berdetak lebih cepat'),
(21, 'Gangguan emosional pada anak atau tidak menunjukkan ekspresi emosi '),
(22, 'Tahap perkembangan yang terlambat dibandingkan anak seusianya'),
(23, 'Nyeri di persendian atau punggung'),
(24, 'Rambut menjadi kering, rapuh, mudah patah, bahkan berubah warna menjadi kuning kemerahan seperti rambut jagung'),
(25, 'Diare kronis'),
(26, 'Kebutaan'),
(27, 'Terlihat pucat'),
(28, 'Mata kering'),
(29, 'Tubuh terasa lelah dan lemah'),
(31, 'Pernapasan melambat'),
(32, 'Nyeri dada'),
(33, 'Penumpukan lemak di tubuh, terutama di sekitar pinggang'),
(34, 'Tekanan darah tinggi'),
(35, 'Napas terasa lebih berat'),
(36, 'Gangguan Pertumbuhan'),
(37, 'Kulit kering'),
(38, 'Rambut rontok'),
(39, 'Tubuh terasa lelah dan lemah'),
(40, 'Bagian lipatan kulit lembap karena keringat'),
(42, 'Tubuh terasa lelah dan lemah'),
(43, 'Penyakit infeksi yang terjadi dalam jangka panjang atau sulit sembuh'),
(44, 'Kulit berwarna kemerahan, kering, bersisik, atau terkelupas'),
(45, 'Sulit melihat di malam hari'),
(46, 'Infeksi'),
(47, 'Mudah lelah'),
(48, 'Mudah berkeringat'),
(49, 'Bintik putih di mata');

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
(305, '2024-06-06', 'DEFISIENSI VITAMIN A', 17.14),
(306, '2024-06-06', 'DEFISIENSI VITAMIN A', 31.43),
(308, '2024-06-14', 'DEFISIENSI VITAMIN A', 28),
(309, '2024-06-14', 'MARASMUS', 39.47),
(310, '2024-06-19', 'ANEMIA', 54.17);

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nm_penyakit` varchar(50) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `solusi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `gambar`, `nm_penyakit`, `keterangan`, `solusi`) VALUES
(1, 'DefisiensiVitaminA.jpeg', 'Defisiensi vitamin A', 'Defisiensi Vitamin A adalah kondisi kekurangan vitamin A yang penting untuk penglihatan, sistem kekebalan tubuh, dan pertumbuhan sel. Gejalanya meliputi rabun senja, kerusakan kornea yang bisa menyebabkan kebutaan, meningkatnya risiko infeksi, kulit kering, dan pertumbuhan yang terhambat pada anak-anak. Penyebabnya adalah asupan makanan yang rendah vitamin A atau penyerapan vitamin A yang buruk akibat gangguan pencernaan atau penyakit hati.', 'Solusi pencegahannya adalah meningkatkan konsumsi makanan kaya vitamin A seperti hati, susu, telur, serta buah dan sayuran berwarna oranye dan hijau gelap seperti wortel, bayam, dan brokoli. Selain itu, suplementasi vitamin A bisa diberikan pada populasi berisiko tinggi.'),
(2, 'KekuranganYodium.jpg', 'Kekurangan Yodium', 'Kekurangan Yodium adalah kondisi kekurangan yodium, mineral yang penting untuk produksi hormon tiroid. Gejalanya mencakup gondok (pembengkakan kelenjar tiroid), hipotiroidisme (kelelahan, penambahan berat badan, depresi), dan kretinisme (retardasi mental dan pertumbuhan terhambat pada anak-anak yang ibu mereka mengalami kekurangan yodium selama kehamilan). Penyebabnya adalah konsumsi makanan rendah yodium, terutama di daerah yang tanah dan airnya miskin yodium.', 'Solusi pencegahannya adalah menggunakan garam beryodium dalam masakan, serta mengonsumsi makanan laut, produk susu, dan telur yang kaya yodium.'),
(3, 'anemia.jpg', 'Anemia', 'Anemia adalah kondisi di mana jumlah sel darah merah atau kadar hemoglobin dalam darah kurang dari normal. Gejalanya meliputi kelelahan, kelemahan, kulit pucat, sesak napas, pusing, serta tangan dan kaki yang dingin. Penyebabnya bisa berupa kekurangan zat besi, vitamin B12, atau asam folat, kehilangan darah (misalnya karena menstruasi berat atau pendarahan internal), penyakit kronis, atau gangguan sumsum tulang.', 'Solusi pencegahannya adalah mengonsumsi makanan yang kaya zat besi seperti daging merah, hati, kacang-kacangan, bayam, dan biji-bijian, serta makanan yang kaya vitamin B12 dan asam folat seperti daging, ikan, telur, susu, dan sayuran berdaun hijau. Suplementasi zat besi juga bisa diperlukan bagi individu yang berisiko tinggi.'),
(4, 'Stunting.jpg', 'Stunting', 'Stunting adalah kondisi di mana tinggi badan anak lebih pendek dari standar yang seharusnya untuk usia mereka akibat malnutrisi kronis. Gejalanya adalah tinggi badan yang lebih pendek dari rata-rata untuk usia serta perkembangan fisik dan kognitif yang terhambat. Penyebabnya termasuk malnutrisi kronis, terutama selama 1000 hari pertama kehidupan (dari kehamilan hingga usia 2 tahun), infeksi berulang, dan kondisi lingkungan yang buruk.', 'Solusi pencegahannya adalah memastikan nutrisi yang cukup dan seimbang selama kehamilan dan masa bayi, memberikan ASI eksklusif selama 6 bulan pertama, memperkenalkan makanan pendamping ASI yang kaya nutrisi, serta memastikan kebersihan lingkungan untuk mencegah infeksi.'),
(6, 'maramus.jpg', 'Marasmus', 'Marasmus adalah bentuk malnutrisi parah yang disebabkan oleh kekurangan kalori dan protein. Gejalanya meliputi berat badan yang sangat rendah, otot dan jaringan lemak yang sangat berkurang, wajah terlihat tua, serta kulit kering dan keriput. Penyebabnya adalah asupan makanan yang sangat rendah, terutama selama masa bayi dan anak-anak.', 'Solusi pencegahannya adalah memastikan asupan kalori dan protein yang cukup melalui pemberian makanan bergizi seperti susu, daging, telur, kacang-kacangan, dan biji-bijian, serta memberikan pendidikan gizi kepada orang tua dan pengasuh.'),
(7, 'Kwashirkor.jpg', 'Kwashiorkor', 'Kwashiorkor adalah bentuk malnutrisi parah yang disebabkan oleh kekurangan protein, sering kali terjadi meski kalori yang dikonsumsi cukup. Gejalanya termasuk pembengkakan (edema), terutama di perut, kaki, dan tangan, rambut yang mudah dicabut dan berubah warna, kulit bersisik atau pecah-pecah, apati, dan pertumbuhan terhambat. Penyebabnya adalah diet yang sangat rendah protein, biasanya terjadi pada anak-anak yang beralih dari ASI ke makanan padat yang rendah protein.', 'Solusi pencegahannya adalah memastikan asupan protein yang cukup dengan memberikan makanan seperti susu, daging, ikan, telur, kacang-kacangan, dan biji-bijian, serta mengedukasi orang tua tentang pentingnya protein dalam diet anak.'),
(14, 'balita-obesitas.png', 'Obesitas', 'Obesitas adalah kondisi di mana terjadi penumpukan lemak tubuh yang berlebihan, yang dapat meningkatkan risiko berbagai penyakit. Gejalanya meliputi indeks massa tubuh (BMI) yang tinggi, lingkar pinggang yang besar, sesak napas, kelelahan, masalah tidur, serta peningkatan risiko penyakit seperti diabetes tipe 2, hipertensi, penyakit jantung, dan beberapa jenis kanker. Penyebabnya adalah asupan kalori yang berlebihan dibandingkan dengan pengeluaran energi, pola makan yang buruk, kurangnya aktivitas fisik, faktor genetik, faktor psikologis, dan kondisi medis tertentu.', 'Solusi pencegahannya adalah mengadopsi pola makan sehat dan seimbang dengan porsi yang sesuai, meningkatkan aktivitas fisik secara teratur, mengurangi waktu duduk atau beraktivitas tidak aktif, serta menghindari makanan tinggi gula dan lemak jenuh.');

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
  MODIFY `id_aturan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id_konsultasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=311;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
