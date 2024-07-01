-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 01, 2024 at 05:28 PM
-- Server version: 10.11.8-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u586962977_everlasting`
--

--
-- Dumping data for table `detailPJ`
--

INSERT INTO `detailPJ` (`id_detailPJ`, `id_user`, `nama_toko`, `alamat`, `kategori`, `bank`, `no_rek`, `profil_tk`, `sampul_tk`, `created_at`, `updated_at`) VALUES
(1, 1, 'Iyain Wedding', NULL, 'Make Up Artis', 'BRI', '7289108273391721', '-.png', '-.png', NULL, NULL),
(2, 2, 'Okelah Wedding', NULL, 'Dekorasi', 'BRI', '7289108273391722', '-.png', '-.png', NULL, NULL),
(222, 111, 'Savira Wedding', NULL, 'Make Up Artis', 'BRI', '7289108273391726', '-.png', '-.png', NULL, NULL),
(223, 4, 'deliaweding', 'kediri Kediri, Jawa Timur', 'Make Up Artist', 'BRI', NULL, '1719357114.jpeg', '1719357114.jpg', '2024-06-25 16:11:54', '2024-06-25 16:11:54'),
(224, 5, 'putri catering', 'ngadiluwih', 'catering', 'BNI', '123456789', NULL, NULL, NULL, NULL),
(225, 1003, 'virnandatoko', 'banaran Kediri, Jawa Timur', 'Make Up Artist', 'BNI', '0081617897761', '1719455850.png', '1719455850.png', '2024-06-27 02:37:30', '2024-06-27 02:37:30'),
(226, 1006, 'Ave Decoration', 'Jl. Pare-Kandangan N0.71, Dsn. Kwagean, Ds. Krenceng, Kec. Kepung, Kab Kediri, Jawa Timur', 'Dekorasi', 'Mandiri', '12345678', '1719457551.jpg', '1719457551.png', '2024-06-27 03:05:51', '2024-06-27 03:05:51'),
(227, 1007, 'Weralisa Make Up', 'Jl. Letjen Suparto Gg.i JL. Letjend Suprapto No.94,Banjaran, Kec. Kota Kediri, Jawa Timur', 'Make Up Artist', 'BRI', '1234567890', '1719458818.jpg', '1719458818.jpg', '2024-06-27 03:26:58', '2024-06-27 03:26:58'),
(228, 1008, 'Novanis Kediri', 'Banyakan Kediri Kediri, Jawa Timur', 'Fotografi & Vidografi', 'BNI', '098765432111', '1719459468.png', '1719459468.png', '2024-06-27 03:37:48', '2024-06-27 03:37:48'),
(229, 1009, 'Adelia Souvenir', 'Jl. Sakura No.37, Tulongrejo, Kec. Pare, Kab. Kediri, Jawa Timur 64212, Indonesia Kediri, Jawa Timur', 'Sovenir', 'BRI', '0017266172', '1719459632.jpg', '1719459632.jpg', '2024-06-27 03:40:32', '2024-06-27 03:40:32'),
(231, 1014, 'VAnguard', 'Kediri Tulungagung, Jawa Barat', 'Make Up Artist', 'BRI', '11765177891', '1719679417.jpg', '1719679417.jpg', '2024-06-29 16:43:37', '2024-06-29 16:43:37'),
(232, 1017, 'Sound Magic', 'Desa Branggahan Kediri, Jawa Timur', 'Sound System', 'BCA', '445898898761', '1719853084.jpg', '1719853084.jpg', '2024-07-01 16:58:04', '2024-07-01 16:58:04');

--
-- Dumping data for table `dt_katalog`
--

INSERT INTO `dt_katalog` (`id_dt_katalog`, `judul_variasi`, `id_katalog`, `created_at`, `updated_at`, `harga`, `gambar`) VALUES
(777, 'merah', 333, NULL, NULL, 2000000, 'https://cdn-images.hipwee.com/wp-content/uploads/2019/12/hipwee-69754942_494377488017876_4433346107784131494_n.jpg'),
(888, 'biru', 333, NULL, NULL, 3500000, 'test.jpg'),
(999, 'kuning', 333, NULL, NULL, 3000000, 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQKZtilxldd4PEFHgRCcVImId4rfio8Mc7890nNs7pS4qnRjX3k'),
(1000, 'last lif', 1, NULL, NULL, 6000000, 'https://asset-2.tstatic.net/tribunnews/foto/bank/images/fira-shehan_20180226_120149.jpg'),
(1001, 'mahkota', 1, NULL, NULL, 7000000, 'https://asset-a.grid.id/crop/0x0:0x0/x/photo/2022/06/20/jawa-crop-horz-1jpg-20220620111840.jpg'),
(1002, 'singger jilbab', 1, NULL, NULL, 7500000, 'https://unipasby.ac.id/ckeditor/images-media/1579683173_IMG20200122134532.jpg'),
(1003, 'jawa tradisional', 2, NULL, NULL, 3000000, 'https://cdn.idntimes.com/content-images/post/20210425/89087748-832623867150206-4820966565789090054-n-894c8edfd7539520e9042e69c6c14fcb.jpg'),
(1004, 'solo putri', 2, NULL, NULL, 3000000, 'https://awsimages.detik.net.id/community/media/visual/2019/12/02/fe165925-1513-4b00-a83a-098b6a0bad4b_43.jpeg?w=600&q=90'),
(1005, 'yogya paes ageng', 2, NULL, NULL, 3000000, 'https://bersukaria.com/files/uploads/2021/05/Paes_4-1024x683.jpg'),
(1006, 'mata bold dgn eyeliner', 3, NULL, NULL, 5000000, 'https://asset-a.grid.id/crop/0x103:423x350/360x240/photo/2021/07/12/arabic-bridal-party-wear-makeup-20210712123227.jpg'),
(1007, 'shimer putih', 3, NULL, NULL, 5000000, 'https://i.ytimg.com/vi/7S4xegGxwgA/sddefault.jpg?v=60f84470'),
(1008, 'eye shadow emas', 3, NULL, NULL, 5000000, 'https://asset-a.grid.id/crop/0x103:423x350/360x240/photo/2021/07/12/arabic-bridal-party-wear-makeup-20210712123227.jpg'),
(1009, 'natural', 4, NULL, NULL, 3000000, 'https://i.pinimg.com/originals/43/14/f3/4314f375e8ef24d5108c60c02add0b8e.jpg'),
(1010, 'berbie look', 4, NULL, NULL, 3000000, 'https://cdns.klimg.com/dream.co.id/resources/news/2023/06/09/232709/1200x600-mua-rias-hijaber-dengan-barbie-look-warganet-apik-tenan-2306091.jpg'),
(1011, 'Glam Weding Make up', 4, NULL, NULL, 3000000, 'https://dwpinsider.com/blog/wp-content/uploads/2021/08/jjUntitled-1.jpg'),
(1012, 'Paket Premium ', 5, NULL, NULL, 20000000, 'https://kateringaisya.com/wp-content/uploads/2022/06/wedding-5.jpg'),
(1013, 'Paket Medium ', 5, NULL, NULL, 15000000, 'https://miro.medium.com/v2/resize:fit:1358/1*PgqVqJ7InN1mM3cs456pSA.jpeg'),
(1014, 'Paket hemat ', 5, NULL, NULL, 10000000, 'https://img.ws.mms.shopee.co.id/4b3109100dadffc02e4b4d703af55614'),
(1015, 'Nasi Rawon, Esbuah, Somai', 6, NULL, NULL, 25000000, 'https://cdn.eurekabookhouse.co.id/ebh/product/all/2660669_349b831a-ca9c-4edd-a188-e57a56469b66_493_493.jpg'),
(1016, 'Nasi Ayam Capjay, air putih, puding coklat', 6, NULL, NULL, 30000000, 'https://images.tokopedia.net/img/cache/700/VqbcmM/2023/11/18/f51af3db-d79a-4bc6-9991-3f14851a7371.jpg'),
(1017, 'gado-gado, es cincau, roti isi', 6, NULL, NULL, 30000000, 'https://cdn.eurekabookhouse.co.id/ebh/product/all/2660669_349b831a-ca9c-4edd-a188-e57a56469b66_493_493.jpg'),
(1018, 'MakeUp Internasional Modern Flawless', 336, '2024-06-27 02:44:18', '2024-06-27 02:44:18', 2500000, 'https://cdn.idntimes.com/content-images/post/20210301/cover-artikel-18-e60b7d1c526122ac9156f1e8ad952f99_600x400.png'),
(1019, 'Decoration Eropa', 337, '2024-06-27 03:14:07', '2024-06-27 03:14:07', 15000000, '1719458047.jpg'),
(1020, 'Gold Decoration Gebyok', 338, '2024-06-27 03:22:41', '2024-06-27 03:22:41', 7200000, '1719458561.png'),
(1021, 'Gold Wedding Decoration Putih', 339, '2024-06-27 03:29:03', '2024-06-27 03:29:03', 7200000, '1719458943.png'),
(1022, 'Gold Akad Decoration', 340, '2024-06-27 03:33:15', '2024-06-27 03:33:15', 1900000, '1719459195.png'),
(1023, 'MakeUp 1', 341, '2024-06-27 03:34:34', '2024-06-27 03:34:34', 4000000, '1719459274.jpg'),
(1024, 'Indoor 1', 342, '2024-06-27 03:41:23', '2024-06-27 03:41:23', 1150000, '1719459683.png'),
(1025, 'Wedding Day 1', 343, '2024-06-27 03:43:53', '2024-06-27 03:43:53', 1000000, '1719459833.png'),
(1026, 'Sovenir Gelas', 344, '2024-06-27 03:45:20', '2024-06-27 03:45:20', 5500, '1719459920.png'),
(1027, 'Siger Hijab', 345, '2024-06-27 03:48:36', '2024-06-27 03:48:36', 5000000, '1719460116.jpg'),
(1028, 'Foto1', 346, '2024-06-29 16:45:29', '2024-06-29 16:45:29', 500000, 'https://weddingmarket.com/storage/images/artikelidea/1e77ef54a5bb3e93c84e64668bbe644bfa114176.webp'),
(1029, 'Sound sistem 7', 347, '2024-07-01 17:02:38', '2024-07-01 17:02:38', 2300000, '1719853358.jpg'),
(1030, 'Paket Sound F', 348, '2024-07-01 17:07:43', '2024-07-01 17:07:43', 1000000, '1719853663.jpg'),
(1031, 'Paket Sensasi 1', 349, '2024-07-01 17:17:34', '2024-07-01 17:17:34', 600000, '1719854254.jpg');

--
-- Dumping data for table `dt_transaksi`
--

INSERT INTO `dt_transaksi` (`id_dt_transaksi`, `id_transaksi`, `ket`, `bukti_tfDP`, `bukti_tfPelunasan`, `status_pembayaran`, `created_at`, `updated_at`) VALUES
(666, 555, 'Akad, Resepsi. Paket Lengkap orangtua dan pager ayu', '-.jgp', '-.jgp', 3, NULL, NULL),
(667, 556, 'FULL STACK', '', '', 1, NULL, NULL),
(668, 557, 'Pesan makeup arabian look', '', '', 1, NULL, NULL),
(669, 558, 'Pesan makeup arabian look', '', '', 1, NULL, NULL),
(670, 559, 'Pesan tenda bernuansa eropa', '1719789907.jpg', '1719790017.jpg', 3, NULL, NULL),
(671, 560, 'FULL FITUR', '', '1719801815.jpg', 3, NULL, NULL),
(672, 561, 'paket lengkap', '', '', 1, NULL, NULL),
(673, 562, 'resepsi', '1719823397.png', '1719823467.png', 3, NULL, NULL),
(674, 563, 'akad saja', '', '', 1, NULL, NULL),
(675, 564, 'Resepai', '1719832292.jpg', '', 2, NULL, NULL);

--
-- Dumping data for table `katalog`
--

INSERT INTO `katalog` (`id_katalog`, `id_detailPJ`, `judul`, `deskripsi`, `metode_bayar`, `created_at`, `updated_at`) VALUES
(1, 1, 'rias manten singer sunda', 'anti crak natural ', 12345678, NULL, NULL),
(2, 1, ' solo jawa', 'anti crak tradisional', 12345678, NULL, NULL),
(3, 1, 'arabian look', 'moderen', 12345678, NULL, NULL),
(4, 1, 'hijab syari', 'lebih natural dan flowles', 12345678, NULL, NULL),
(5, 2, 'Paket Prasmanan', 'untuk 1000 undangan \r\nset makan inclide', 12345678, NULL, NULL),
(6, 2, 'paket nasi kotak/piringan', 'per porsi include minum dan camilan', 12345678, NULL, NULL),
(333, 222, 'Paket Make Up Arabian Look', 'Arabian look identic dengan riasan di bagian mata dengan ciri bulu mata yang tebal dan menggunakan smokey eyes. ...', 1, NULL, NULL),
(336, 225, 'MakeUp Internasional', 'MakeUp Modern', NULL, '2024-06-27 02:44:18', '2024-06-27 02:44:18'),
(337, 226, 'Decoration Eropa', 'Decoration Modern Bernuansa Eropa', NULL, '2024-06-27 03:14:07', '2024-06-27 03:14:07'),
(338, 226, 'Gold Wedding Decoration', 'Gold Wedding Decoration Lebar 6x6', NULL, '2024-06-27 03:22:41', '2024-06-27 03:22:41'),
(339, 226, 'Gold Wedding Decoration Putih', 'Gold Wedding Decoration Lebar 6x6', NULL, '2024-06-27 03:29:03', '2024-06-27 03:29:03'),
(340, 226, 'Gold Akad Decoration', 'Decoration Akad Bernuansa Emas Lebar 4x6', NULL, '2024-06-27 03:33:15', '2024-06-27 03:33:15'),
(341, 227, 'Rias Solo Puteri', 'Make Up di lengkapi aksesoris dengan paes, Cunduk Mentul dan bunga melati', NULL, '2024-06-27 03:34:34', '2024-06-27 03:34:34'),
(342, 228, 'Foto Preweding Indoor', 'Menyediakan paket foto preweding Indoor. Menjadikan moment preweding Anda berkesan untuk selamanya.', NULL, '2024-06-27 03:41:23', '2024-06-27 03:41:23'),
(343, 228, 'Foto Wedding day', 'Menyediakan layanan fotografi di hari pernikahanmu yang akan memorable', NULL, '2024-06-27 03:43:53', '2024-06-27 03:43:53'),
(344, 229, 'Sovenir Pecah Belah', 'Sovenir Pecah Belah', NULL, '2024-06-27 03:45:20', '2024-06-27 03:45:20'),
(345, 227, 'MakeUp Pengantin Siger Sunda', 'Make Up Pengantin  Adat Sunda, dengan Mahkota Siger dilengkapi kembang tanjung, Hiasan Daun sirih', NULL, '2024-06-27 03:48:36', '2024-06-27 03:48:36'),
(346, 231, 'MUA Wedding', 'Uji coba', NULL, '2024-06-29 16:45:29', '2024-06-29 16:45:29'),
(347, 232, 'Paket Sound 7', 'Paket sound 7 berisi 2 unit Speaker, 2 unit sub speaker, 4 unit speaker huper, 2 unit mic wireless dan 4 unit mic kabel, 1 unit mixer dan operator', NULL, '2024-07-01 17:02:38', '2024-07-01 17:02:38'),
(348, 232, 'Paket Sound F', 'Paket sound 7 berisi 4 standing speaker dan 2 mic wireless', NULL, '2024-07-01 17:07:43', '2024-07-01 17:07:43'),
(349, 232, 'Paket Sensasi', 'Paket Sensasi 1 : berisi 1 sound portabel, 1 aub woofer, 2 mic wireless. Paket Sound 400 watt: berisi 4 speaker, 2 sub woofer, 1 mixer, dan 2 mic wireless', NULL, '2024-07-01 17:17:34', '2024-07-01 17:17:34');

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `judul_kategori`, `gambar_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Make Up Artist', 'Beautician.png', NULL, NULL),
(2, 'Dekorasi', 'Beautiful Wedding Ribbon.png', NULL, NULL),
(3, 'Sound Systems', 'Subwoofer.png', NULL, NULL),
(4, 'Cathering', 'Buffet Breakfast.png', NULL, NULL),
(5, 'Wedding Organizer', 'Tasklist.png', NULL, NULL),
(6, 'Photography', 'SLR Camera.png', NULL, NULL),
(7, 'Undangan', 'Letter.png', NULL, NULL),
(8, 'Souvenir', 'Favorite Package.png', NULL, NULL);

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_user`, `nama`, `no_telp`, `email`, `username`, `password`, `foto`, `role`, `alamat`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user1', NULL, NULL, 'u1', '$2y$12$fdbY.ssP55lENmjIfbFNJuSTbsZADNG/1xf7PUq1rcaJRC5A8ZJUC', NULL, 1, NULL, NULL, NULL, NULL),
(2, 'user2', NULL, NULL, 'u2', '$2y$12$x3OFzzVFfljNlVwXR/UHzuJireSAfnnaCQ3vHygmRx9s/NeJ.bN8W', NULL, 0, NULL, NULL, NULL, NULL),
(3, 'user3', NULL, NULL, 'u3', '$2y$12$bB2cNsXpfY4FD8TSOy2Ru.uYduxnjAgTYocRKAoAqEK.6X/NK4QIC', NULL, 0, NULL, NULL, NULL, NULL),
(4, 'user4', NULL, NULL, 'u4', '$2y$12$ZRQP1ihiEgHO4GSlRACDaeHav04mLzwmNVtFt0ffP4s1TWKx6xjQe', NULL, 0, NULL, NULL, NULL, NULL),
(5, 'user5', NULL, NULL, 'u5', '$2y$12$gDozExuWzbjsaZhB0q/jFuyjUZ29RsSYIRQjI.8l3iogkYHLpDeI6', NULL, 0, NULL, NULL, NULL, NULL),
(111, 'Savira Ciliania', '087615243654', 'savirasilla@gmail.com', 'saviraci75', '$2y$12$hOHXLSv9z06RHhkf2nCBwe/HTqk8ASzmw87Dg.gGboNIrYruAsule', '-.png', 1, 'Kab. Kediri', NULL, NULL, NULL),
(999, 'Savira Ciliania', '087605243654', 'satirasilla@gmail.com', 'uu1', '$2y$12$Jat6lTGbIcl/OguoL9fQqOGDpGhNr5YtL7Hvzk0H/gcn7ne9v4Pbm', '-.png', 1, 'Kab. Kediri', NULL, NULL, NULL),
(1000, 'Delia Listiana', '089726354635', 'ella10@gmail.com', 'dell', '$2y$12$c1PcI/hRSvGLbFhAa.YuDeEF4HjP8Aps3CkrfhYDIh1gAUM/LrPWW', NULL, 1, 'kediri', NULL, '2024-06-25 16:08:25', '2024-06-25 16:08:25'),
(1001, 'Putri Amelia Agustin', '098726354632', 'putri02@gmail.com', 'put123', '123', NULL, 1, 'ngadiluwih', NULL, NULL, NULL),
(1002, 'aruna hanin', '089876738292', 'aruna123@gmail.com', 'aruna', '$2y$12$gKyuLullabHBK/Odnygw5OK3bo5oCdv2nEjJz3D3ecW9Knh6PzRIO', NULL, 0, 'kediri', NULL, '2024-06-27 02:31:28', '2024-06-27 02:31:28'),
(1003, 'virnanda', '088718291001', 'virnandaelsa29@gmail.com', 'virnanda', '$2y$12$qoD76IYGIK3hPa9SK5dI.e02ET/OjYgXqOaeHHUM/ecWuy/rb.vxm', NULL, 1, 'kediri', NULL, '2024-06-27 02:35:28', '2024-06-27 02:35:28'),
(1004, 'elsa', '081652445167', 'virnandaelsa@gmail.com', 'elsa', '$2y$12$UP0DeA5oDSWd2U7Coelkwu8pL9tIyREEkSuZkRiJF4egKxFrT1arm', NULL, 0, 'Kediri', NULL, '2024-06-27 02:51:30', '2024-06-27 02:51:30'),
(1005, 'Putri', '086543281911', 'putriamelia@gmail.com', 'putriam', '$2y$12$xdxm5nyGsQz4ieu1sPaYxuq13YgcP7D5ldN.i/94LJtaV3i5ibXA6', NULL, 0, 'Kediri', NULL, '2024-06-27 02:51:55', '2024-06-27 02:51:55'),
(1006, 'Ave Decoration', '082228723425', 'avedecoration@gmail.com', 'AveDecoration', '$2y$12$sh7DOhTAbvObilyqOGOXPuc57t.dzkfLAu2H/KuSEf89FK.9W.fqa', NULL, 1, 'Kediri', NULL, '2024-06-27 02:53:54', '2024-06-27 02:53:54'),
(1007, 'Weralisa MakeUp', '082131420369', 'weralisamakeup@gmail.com', 'weralisamakeup', '$2y$12$tuTc93zYIyJZLqE4RYE9kuk6EIQ9Ht64pmIW.vV5w2emXuJIU1TLy', NULL, 1, 'Kediri', NULL, '2024-06-27 03:22:01', '2024-06-27 03:22:01'),
(1008, 'Novanis Kediri', '085663827119', 'novaniskediri@gmail.com', 'novaniskediri', '$2y$12$ihqFtBXeHklOTVKcVQtqvuydNKtaKD8PLpm2D9/yRvtkeNOmYVve6', NULL, 1, 'Kediri', NULL, '2024-06-27 03:22:49', '2024-06-27 03:22:49'),
(1009, 'Adelia Souvenir', '0865172811671', 'adeliasouvenir@gmail.com', 'adeliasouvenir', '$2y$12$mzg9wWywH8zOYebzTO4lfu8HcmvtAKKDkaQ5epDt.iHXOTphmFj4G', NULL, 1, 'Kediri', NULL, '2024-06-27 03:35:51', '2024-06-27 03:35:51'),
(1010, 'NANAG', '0877367527', 'nanag@mail.com', 'nanang', '$2y$12$JDQEOKKJ3FnL8goiupTFjuqNggZvkFVHxtbOXR/tA5STecqUEVi3O', NULL, 0, 'KEDIRI', NULL, '2024-06-27 16:39:28', '2024-06-27 16:39:28'),
(1011, 'sad', 'sad', 'sad@dsadc.fgd', 'sad', '$2y$12$jvQ1ax9AE7epkT2kEMz3ze3Dn4V8dBSfPApxz0syU0Bip3cpFRiPm', NULL, 0, 'asd', NULL, '2024-06-27 16:40:23', '2024-06-27 16:40:23'),
(1012, 'giniamat', '98364976', 'askdjha@maisl', 'a', '$2y$12$KCmmMPosN5eIaDOi1Uz4EuOyMpdBQiIaa8umZnixFp34rkuVaP3mC', NULL, 0, 'malanggg', NULL, '2024-06-27 16:41:08', '2024-06-27 16:41:08'),
(1013, 'Cahya', '085123456789', 'fandimugiwara93@gmail.com', 'cahya56', '$2y$12$kq2oO0rEmTUSWWYYKkZweeBUU7v./piPO.qhcZDGV9oyVgXDSL3je', NULL, 0, 'Kediri', NULL, '2024-06-28 11:59:11', '2024-06-28 11:59:11'),
(1014, 'bambang', '0823410951005', 'bambang99@gmail.com', 'bambang123', '$2y$12$C42o.ORdJzDEe1E0SZuA1eA/PUgL7cWZ9ymtz6zsqH7YftWCNUu7C', NULL, 1, 'Kediri', NULL, '2024-06-29 16:29:43', '2024-06-29 16:29:43'),
(1015, 'lucing lucu', '0898265372833', 'lucinghuhu@mail', 'kucing', '$2y$12$c.Jwlg51JSfIdaeOpJ2Mg.cCWMJybPyuERGHMJvxmuC/ilVX4c53a', NULL, 0, 'JAwa Timur', NULL, '2024-06-30 11:01:28', '2024-06-30 11:01:28'),
(1016, 'Busana Collection', '082456779080', 'busanacollection@gmail.com', 'busanacollection', '$2y$12$nl9GylVcjOzVt/cEpwzGj.IOY2ySjvsgCM24dSLdss/qiPT0DHBDW', NULL, 0, 'Yogyakarta', NULL, '2024-07-01 16:37:00', '2024-07-01 16:37:00'),
(1017, 'Sound Magic', '085646997312', 'soundmagic@gmail.com', 'soundmagic', '$2y$12$9HwohZc3qwob673pP0xSmeWbc1SiTB5fM3Lh8XJn0Lpu0WxOPY.BW', NULL, 1, 'Ngadiluwih', NULL, '2024-07-01 16:54:39', '2024-07-01 16:54:39');

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id_review`, `id_transaksi`, `kualitas`, `ketepatan`, `pelayanan`, `deskripsi_kualitas`, `deskripsi_ketepatan`, `deskripsi_pelayanan`, `ft_review`, `created_at`, `updated_at`) VALUES
(444, 555, 5, 3, 4, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1Q15zLy19x0NPei53da9Ioc0bwEbvsbeTmqgkkU1', NULL, '129.226.147.7', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTDBhdndlUFNzVGx5Nm9DVFdHOTc1T0hJNDdleXdhQ1RPSWkzVUFaTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHBzOi8vd3d3LmV2ZXJsYXN0aW5nbW9tZW50Lm5ldC9saWhhdGphc2EvNiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1719848635),
('20YCO9yDbKptTQGH7UpBblrKVOjBBML10UyUq5FE', NULL, '119.110.81.162', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:127.0) Gecko/20100101 Firefox/127.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWkxWUms1V1I1YW9VeTdnSzg0aXpGZ1FKMmt1RVl2ZDBTTEdDcVMzWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHBzOi8vZXZlcmxhc3Rpbmdtb21lbnQubmV0L2xpaGF0amFzYS8xIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1719853062),
('64OnWSvtzFCC095oHf1iDB3W1OH7BPSMWNHt3N9U', NULL, '192.178.8.5', 'Mozilla/5.0 (Linux; Android 7.0; SM-G930V Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.125 Mobile Safari/537.36 (compatible; Google-Read-Aloud; +https://support.google.com/webmasters/answer/1061943)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTGNIMmticFJLQmI4ZWw2SURFbEIxZ3J4a3BmWExVQTZlZEhsZjJZZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vZXZlcmxhc3Rpbmdtb21lbnQubmV0L3JlZ2lzdHJhc2kiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1719851402),
('6k4kbObPkLiixObJffxWRIArjzWCRXlUCfmMRsyE', 1009, '119.110.81.162', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVkw0bzhxYnNnVWhURVM0Smp3QXNVOHY2OGdOTHRMdEx5S2tGTFpQZCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHBzOi8vZXZlcmxhc3Rpbmdtb21lbnQubmV0L2xvZ2luIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTAwOTt9', 1719847612),
('Cyga65bQKxGUno30SCvomifmMlJPxvGOWkH06EyH', NULL, '182.1.82.195', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia0xKOVpNU2cxc0w4MjE4UExWc3o2NlNjbFJjWjVxOVFrMFh6eGw1OCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHBzOi8vZXZlcmxhc3Rpbmdtb21lbnQubmV0L2xpaGF0amFzYS8zMzMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1719851706),
('DczLQLTel37vwkiyXssXgjkCWRdR7p8ji25xFU2Z', NULL, '192.178.8.7', 'Mozilla/5.0 (Linux; Android 7.0; SM-G930V Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.125 Mobile Safari/537.36 (compatible; Google-Read-Aloud; +https://support.google.com/webmasters/answer/1061943)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoielYxZ1huSXNKS3ZrQnBtUzh3ZGZHMFh0R0tWVGJuTlB2ckg2TFZacyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vZXZlcmxhc3Rpbmdtb21lbnQubmV0L3JlZ2lzdHJhc2kiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1719851402),
('FmU6PVrfR06K5pwjyKgjB4h7mmp0rkAwJurWfBs3', NULL, '182.253.244.35', 'Mozilla/5.0 (X11; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/115.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVUsxa05HZ1l2aFlnWHR6MXNyRWhTVG81MG9NemFwZjdSV0J2MVhGZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vZXZlcmxhc3Rpbmdtb21lbnQubmV0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1719852797),
('FVHyrY8FsRza1Q7y0ViiOVfabDfgMTdJxo7IZ3Yj', NULL, '182.253.244.35', 'Mozilla/5.0 (X11; Linux x86_64; rv:109.0) Gecko/20100101 Firefox/115.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTkQyUU1memljYzRtNWtBN3ZoekVwaVdZOXdCS0o0cHhJQm8zMTNCWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vZXZlcmxhc3Rpbmdtb21lbnQubmV0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1719852152),
('HqdaRNPAPqwt8fTa4bxUNrbhyzNgassMcdCpsuCW', NULL, '52.167.144.231', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNmk5MGpHOXN3V3RvdTVuWHhMMlJoWlhzaDhzT0pkSjNQMnNVNWNCVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHBzOi8vZXZlcmxhc3Rpbmdtb21lbnQubmV0L2xpaGF0amFzYS8zNDIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1719853295),
('Jnk24sWYs3zpNcgTJLaVwcguDTJRcQWSWVYlvqeM', NULL, '129.226.147.7', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMjdia1BNR0d2RVdhZ2h4d0cyMEtJUFYxN3ZHMTFSSFdCaDVaa1hXUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHBzOi8vd3d3LmV2ZXJsYXN0aW5nbW9tZW50Lm5ldC9saWhhdGphc2EvNCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1719848622),
('MNGdIz9ZVdRrvcX8vZzH5EW16w8OINqDhGntQ0kB', NULL, '119.110.81.162', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic0plRnpydUMya0Q0cEpNM2l0bFFqWThmamFZeGpWMUdDWVp4dmd1eSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vZXZlcmxhc3Rpbmdtb21lbnQubmV0L3JlZ2lzdHJhc2kiO319', 1719854441),
('mVM1YqdaVVv5hJEaACYjXb5G54IfpuK2ZbMFCtMQ', NULL, '66.249.66.44', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.6422.175 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidlJZUmxTc0FtMmpDMlAwM3NvU2I3MG5Wa2NUMDViY3Y2bGpENTBGMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHBzOi8vZXZlcmxhc3Rpbmdtb21lbnQubmV0L2xpaGF0amFzYS8yIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1719854399),
('NzNg8bOdQKLOB9zDRkVymt8lnPZtRNnVWcVz9cPK', NULL, '119.110.81.162', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiU1ZmblU1bGRhMmk4aWtDU2xndW1YRjltUXpmTG8wMHcxSWo1Rkd2UiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vZXZlcmxhc3Rpbmdtb21lbnQubmV0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1719851526),
('pVAl6uT2cQUBFtbazo5fcuL51Ckv51vtcvOF1kqT', NULL, '40.77.167.4', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQmJGUHA0MkwyR0E1SGNZMUlsZEc3bHQxdW40bEdSSHY3Z3p4M3dLTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHBzOi8vZXZlcmxhc3Rpbmdtb21lbnQubmV0L2xpaGF0amFzYS8zNDEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1719854309),
('SBWdtUE1i1dbwQLeMgfQHtwi9XAbDyK4ZAWi8rWI', 1006, '119.110.81.162', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMGc0amdZd2sySHZLaHhhSzBxc2p3cHBwQTlheGVsOGFpR1Jld0Q1TiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHBzOi8vZXZlcmxhc3Rpbmdtb21lbnQubmV0L2RhdGFwZXNhbmFuIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTAwNjt9', 1719854637),
('TwrByWdnjYC292U64hLf1axbzOOwpWy4aCpswL4r', NULL, '119.110.81.162', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidnVTckMxcnIzVWxXc0xHY0NvM3FybFFrNWZlOGVDT0lPWDNZaWt1eCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHBzOi8vZXZlcmxhc3Rpbmdtb21lbnQubmV0L3JlZ2lzdHJhc2kiO319', 1719854802),
('xNuyS0kH07ISBsuMsqyvU9S0QdRxipxiM0blAqYd', NULL, '182.1.82.195', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:128.0) Gecko/20100101 Firefox/128.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieVU4RFhzbk5vWnFCd2UxeGI2bVBoUTlKdGdpZWNFYW13M1ZNWEREdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vZXZlcmxhc3Rpbmdtb21lbnQubmV0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1719853984);

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `id_dt_katalog`, `tanggal`, `status`, `created_at`, `updated_at`) VALUES
(555, 111, 777, '2002-02-02', 2, NULL, NULL),
(556, 5, 1004, '2024-12-31', 1, NULL, NULL),
(557, 1004, 1008, '2024-06-30', 1, NULL, NULL),
(558, 1004, 1006, '2024-07-01', 1, NULL, NULL),
(559, 1004, 1019, '2024-07-02', 4, NULL, NULL),
(560, 5, 1021, '2222-12-31', 4, NULL, NULL),
(561, 1004, 1003, '2024-07-01', 3, NULL, NULL),
(562, 1004, 1021, '2024-07-01', 4, NULL, NULL),
(563, 1004, 1022, '2024-07-02', 1, NULL, NULL),
(564, 1004, 1021, '2024-07-01', 2, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
