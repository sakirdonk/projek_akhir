-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 04, 2022 at 02:16 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbfaskesdepok`
--

-- --------------------------------------------------------

--
-- Table structure for table `faskes`
--

CREATE TABLE `faskes` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `latlong` varchar(40) DEFAULT NULL,
  `jenis_id` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `skor_rating` double DEFAULT NULL,
  `foto1` varchar(40) DEFAULT NULL,
  `foto2` varchar(40) DEFAULT NULL,
  `foto3` varchar(40) DEFAULT NULL,
  `kecamatan_id` int(11) NOT NULL,
  `website` varchar(45) DEFAULT NULL,
  `jumlah_dokter` int(11) DEFAULT NULL,
  `jumlah_pegawai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faskes`
--

INSERT INTO `faskes` (`id`, `nama`, `alamat`, `latlong`, `jenis_id`, `deskripsi`, `skor_rating`, `foto1`, `foto2`, `foto3`, `kecamatan_id`, `website`, `jumlah_dokter`, `jumlah_pegawai`) VALUES
(1, 'RS Grha Permata Ibu', 'Jl. K.H.M. Usman No.168, Kukusan, Kecamatan Beji, Kota Depok, Jawa Barat 16425', '-6.3706925,106.8134163', 1, 'Menjadi Rumah Sakit Terbaik, Modern dan mampu bersaing dalam memberikan pelayanan kesehatan di Kota Depok dan sekitarnya', 4.8, '11.jpg', '12.jpg', NULL, 1, 'https://www.grhapermataibu.com', 80, 100),
(2, 'RSU Bunda Aliyah', 'RSU Bunda Aliyah Depok, Jl. Kartini No.2, Depok, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16431', '-6.40422,106.81847', 1, 'Rumah Sakit Ibu dan Anak Bunda Aliyah adalah sebuah rumah sakit khusus ibu dan anak tipe B yang berada di lokasi Jalan Pahlawan Revolusi 100, Kelurahan Pondok Bambu, Kecamatan Duren Sawit, Kotamadya Jakarta Timur. Pembangunan Rumah Sakit Ibu dan Anak Bunda Aliyah selama 4 tahun dimulai sejak tahun 2004, dan pertama kali mulai mengadakan kegiatan pelayanan kesehatan sejak tanggal 16 Januari 2008', 4.6, '21.jpeg', '22.jpg', '23.jpg', 2, 'https://linktr.ee/bundaaliyahdepok', 80, 150),
(3, 'Dokter Anggi Dental Clinic Depok', 'Dokter Anggi Dental Clinic Depok, Jl. Akses UI Jl. Klp. Dua Raya No.59, RT.2/RW.09, Tugu, Cimanggis, Depok City, West Java 16951', '-6.34500,106.83979', 2, 'Kesehatan & keselamatan: Perlu janji temu · Wajib mengenakan masker · Wajib mengukur suhu tubuh · Staf mengenakan masker · Staf telah melakukan pengukuran suhu tubuh · Staf wajib menyemprotkan disinfektan ke permukaan di antara kunjungan pelanggan', 4.7, '31.png', '32.jpg', '33.jpg', 18, 'https://dokteranggi.co.id/', 5, 10),
(4, 'Audy Dental Depok Klinik Dokter Gigi Spesiali', 'Audy Dental Depok | Klinik Dokter Gigi Spesialis, Jl. Komjen.Pol.M.Jasin No.45B, Tugu, Cimanggis, Depok City, West Java 16451', '-6.35251,106.84322', 2, 'Ruangan bersih dan ada arena bermain anak', 4.4, '41.jpeg', '42.jpg', '43.jpeg', 18, 'audydental.com', 2, 8),
(5, 'Klinik Al Basyariah 1', 'Klinik Al Basyariah 1, Jl. Raya Citayam No.87, Ratu Jaya, Kec. Cipayung, Kota Depok, Jawa Barat 16436', '-6.44825,106.80119', 3, 'Klinik Al Basyariah merupakan salah satu klinik yang berada di wilayah cipayung', 4.5, '51.jpg', '52.jpg', '53.jpg', 17, 'http://klinikalbasyariah.blogspot.com/', 25, 55),
(6, 'KLINIK AINA MEDIKA SAWANGAN DEPOK', 'KLINIK AINA MEDIKA SAWANGAN DEPOK, Jalan Raihan Perumahan Villa Rizki Ilhami 2 Ruko RC No 11, Pengasinan, Kec. Sawangan, Kota Depok, Jawa Barat 16518', '-6.40751, 106.74864', 3, 'Klinik Aina Medika merupakan salah satu klinik yang berada di wilayah Sawangan, Depok. Saat ini, Klinik Aina Medika memiliki layanan dokter umum dan dokter gigi umum. Selain itu, Klinik Aina Medika juga memiliki fasilitas test COVID-19', 4.3, '61.jpg', '62.jpg', '63.png', 16, 'https://www.halodoc.com/rumah-sakit/nama/klin', 20, 40),
(7, 'UPTD Puskesmas Sukmajaya', 'UPTD Puskesmas Sukmajaya, Jl. Arjuna Raya No.1, Mekar Jaya, Sukmajaya, Depok City, West Java 16411', '-6.38081,106.83906', 4, 'Mewujudkan masyarakat di wilayah UPTD Puskesmas Sukmajaya yang Maju, Berbudaya, dan Sejahtera', 4.3, '71.jpeg', '72.jpg', '73.jpg', 20, 'https://pkmsukmajaya.depok.go.id/', 30, 45),
(8, 'UPTD Puskesmas Sukatani Depok', 'UPTD Puskesmas Sukatani Depok, Jl. Wijaya Kusuma, RT.04/RW.09, Sukatani, Kec. Tapos, Kota Depok, Jawa Barat 16454', '-6.39807,106.88717', 4, 'Mewujudkan masyarakat di wilayah UPTD Puskesmas Sukatani yang Maju, Berbudaya, dan Sejahtera', 4.9, '81.jpg', '82.jpg', '83.jpg', 1, 'https://pkmsukatani.depok.go.id/', 45, 60),
(9, 'Apotek K-24 Grand Depok City', 'Jalan Boulevard Grand Depok City No.Blok No.12, Kalibaru, Kec. Cilodong, Kota Depok, Jawa Barat 16413 ', '-6.43372, 106.82561', 5, 'Kesehatan & keselamatan: Wajib mengenakan masker · Staf mengenakan masker · Pembatas keamanan di kasir', 4.3, '91.jpg', '92.jpg', '93.jpg', 21, 'https://www.k24klik.com/', 20, 25),
(10, 'Apotek Roxy', 'Apotek Roxy, Jalan Nusantara Raya, Beji, Kecamatan Beji, Kota Depok, Jawa Barat 16421 ', '-6.38258, 106.81301', 5, 'APOTEK ROXY merupakan perusahaan Ritel Farmasi pertama dengan Reputasi Nasional melalui:\r\n\r\nPengembangan brand dan image yang bertujuan untuk memberikan jaminan kepada pasien atau masyarakat terhadap kualitas, Ketelitian pembacaan resep maupun peracikan obat, Kecepatan dalam pelayanan serta penambahan manfaat baru terhadap arti kesembuhan dan kesehatan bagi pasien.', 4.4, '101.jpg', '102.jpg', '103.jpg', 1, 'http://www.apotekroxy.com/', 35, 50);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_faskes`
--

CREATE TABLE `jenis_faskes` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenis_faskes`
--

INSERT INTO `jenis_faskes` (`id`, `nama`) VALUES
(1, 'Rumah Sakit'),
(2, 'Klinik Gigi'),
(3, 'Klinik Umum'),
(4, 'Puskesmas'),
(5, 'Apotik');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama`) VALUES
(1, 'Beji'),
(2, 'Pancoran Mas'),
(16, 'Sawangan'),
(17, 'Cipayung'),
(18, 'Cimanggis'),
(19, 'Tapos'),
(20, 'Sukmajaya'),
(21, 'Cilodong');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `faskes_id` int(11) DEFAULT NULL,
  `nilai_rating_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `tanggal`, `isi`, `users_id`, `faskes_id`, `nilai_rating_id`) VALUES
(1, '2022-06-12', 'Akhirnya selesai wkwk', 2, 1, 5),
(17, '2022-07-02', 'test mulu lo', 3, 1, 3),
(20, '2022-07-02', 'Cakep dah wkwk', 3, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_rating`
--

CREATE TABLE `nilai_rating` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nilai_rating`
--

INSERT INTO `nilai_rating` (`id`, `nama`) VALUES
(1, 'Jelek'),
(2, 'Kurang Bagus'),
(3, 'Biasa Aja'),
(4, 'Bagus'),
(5, 'Sangat Bagus');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`, `last_login`, `status`, `role`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'admin@gmail.com', '2022-06-12 00:32:05', '2022-06-12 00:32:05', 1, 'administrator'),
(2, 'aminah', '90b74c589f46e8f3a484082d659308bd', 'aminah@gmail.com', '2022-06-12 00:32:06', '2022-06-12 00:32:06', 1, 'public'),
(3, 'ronin', 'e10adc3949ba59abbe56e057f20f883e', 'ronin@gmail.com', '2022-07-02 03:39:24', '2022-07-02 03:39:24', 1, 'public'),
(11, 'jojon', '01cfcd4f6b8770febfb40cb906715822', 'jojon@gmail.com', '2022-07-02 12:14:39', '2022-07-02 12:14:39', 1, 'public'),
(12, 'coba', 'c33367701511b4f6020ec61ded352059', 'coba@gmail.com', '2022-07-02 12:21:45', '2022-07-02 12:21:45', 1, 'public');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faskes`
--
ALTER TABLE `faskes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_produk_jenis_produk_idx` (`jenis_id`),
  ADD KEY `fk_tempat_wisata_kelurahan1_idx` (`kecamatan_id`);

--
-- Indexes for table `jenis_faskes`
--
ALTER TABLE `jenis_faskes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pesanan_users1_idx` (`users_id`),
  ADD KEY `fk_pesanan_produk1_idx` (`faskes_id`),
  ADD KEY `fk_komentar_nilai_rating1_idx` (`nilai_rating_id`);

--
-- Indexes for table `nilai_rating`
--
ALTER TABLE `nilai_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faskes`
--
ALTER TABLE `faskes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jenis_faskes`
--
ALTER TABLE `jenis_faskes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `nilai_rating`
--
ALTER TABLE `nilai_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faskes`
--
ALTER TABLE `faskes`
  ADD CONSTRAINT `fk_produk_jenis_produk` FOREIGN KEY (`jenis_id`) REFERENCES `jenis_faskes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tempat_wisata_kelurahan1` FOREIGN KEY (`kecamatan_id`) REFERENCES `kecamatan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `fk_komentar_nilai_rating1` FOREIGN KEY (`nilai_rating_id`) REFERENCES `nilai_rating` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pesanan_produk1` FOREIGN KEY (`faskes_id`) REFERENCES `faskes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pesanan_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
