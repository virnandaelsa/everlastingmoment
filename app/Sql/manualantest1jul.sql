INSERT INTO `pengguna` (`id_user`, `nama`, `no_telp`, `email`, `username`, `password`, `foto`, `role`, `alamat`, `remember_token`, `created_at`, `updated_at`) VALUES
(1015, 'lucing lucu', '0898265372833', 'lucinghuhu@mail', 'kucing', '$2y$12$c.Jwlg51JSfIdaeOpJ2Mg.cCWMJybPyuERGHMJvxmuC/ilVX4c53a', NULL, 0, 'JAwa Timur', NULL, '2024-06-30 11:01:28', '2024-06-30 11:01:28'),
(1016, 'Busana Collection', '082456779080', 'busanacollection@gmail.com', 'busanacollection', '$2y$12$nl9GylVcjOzVt/cEpwzGj.IOY2ySjvsgCM24dSLdss/qiPT0DHBDW', NULL, 0, 'Yogyakarta', NULL, '2024-07-01 16:37:00', '2024-07-01 16:37:00'),
(1017, 'Sound Magic', '085646997312', 'soundmagic@gmail.com', 'soundmagic', '$2y$12$9HwohZc3qwob673pP0xSmeWbc1SiTB5fM3Lh8XJn0Lpu0WxOPY.BW', NULL, 1, 'Ngadiluwih', NULL, '2024-07-01 16:54:39', '2024-07-01 16:54:39');

INSERT INTO `detailPJ` (`id_detailPJ`, `id_user`, `nama_toko`, `alamat`, `kategori`, `bank`, `no_rek`, `profil_tk`, `sampul_tk`, `created_at`, `updated_at`) VALUES
(232, 1017, 'Sound Magic', 'Desa Branggahan Kediri, Jawa Timur', 'Sound System', 'BCA', '445898898761', '1719853084.jpg', '1719853084.jpg', '2024-07-01 16:58:04', '2024-07-01 16:58:04');

INSERT INTO `katalog` (`id_katalog`, `id_detailPJ`, `judul`, `deskripsi`, `metode_bayar`, `created_at`, `updated_at`) VALUES
(347, 232, 'Paket Sound 7', 'Paket sound 7 berisi 2 unit Speaker, 2 unit sub speaker, 4 unit speaker huper, 2 unit mic wireless dan 4 unit mic kabel, 1 unit mixer dan operator', NULL, '2024-07-01 17:02:38', '2024-07-01 17:02:38'),
(348, 232, 'Paket Sound F', 'Paket sound 7 berisi 4 standing speaker dan 2 mic wireless', NULL, '2024-07-01 17:07:43', '2024-07-01 17:07:43'),
(349, 232, 'Paket Sensasi', 'Paket Sensasi 1 : berisi 1 sound portabel, 1 aub woofer, 2 mic wireless. Paket Sound 400 watt: berisi 4 speaker, 2 sub woofer, 1 mixer, dan 2 mic wireless', NULL, '2024-07-01 17:17:34', '2024-07-01 17:17:34');

INSERT INTO `dt_katalog` (`id_dt_katalog`, `judul_variasi`, `id_katalog`, `created_at`, `updated_at`, `harga`, `gambar`) VALUES
('1019', 'MakeUp Internasional Modern Flawless', '336', '2024-06-27 02:44:18', '2024-06-27 02:44:18', '2500000', '1719456258.jpg'),
(1035, 'Sound sistem 7', 347, '2024-07-01 17:02:38', '2024-07-01 17:02:38', 2300000, '1719853358.jpg'),
(1036, 'Paket Sound F', 348, '2024-07-01 17:07:43', '2024-07-01 17:07:43', 1000000, '1719853663.jpg'),
(1036, 'Paket Sensasi 1', 349, '2024-07-01 17:17:34', '2024-07-01 17:17:34', 600000, '1719854254.jpg');

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `id_dt_katalog`, `tanggal`, `status`, `created_at`, `updated_at`) VALUES
(556, 5, 1004, '2024-12-31', 1, NULL, NULL),
(557, 1004, 1008, '2024-06-30', 1, NULL, NULL),
(558, 1004, 1006, '2024-07-01', 1, NULL, NULL),
(559, 1004, 1019, '2024-07-02', 4, NULL, NULL),
(560, 5, 1021, '2222-12-31', 4, NULL, NULL),
(561, 1004, 1003, '2024-07-01', 3, NULL, NULL),
(562, 1004, 1021, '2024-07-01', 4, NULL, NULL),
(563, 1004, 1022, '2024-07-02', 1, NULL, NULL),
(564, 1004, 1021, '2024-07-01', 2, NULL, NULL);

INSERT INTO `dt_transaksi` (`id_dt_transaksi`, `id_transaksi`, `ket`, `bukti_tfDP`, `bukti_tfPelunasan`, `status_pembayaran`, `created_at`, `updated_at`) VALUES
(667, 556, 'FULL STACK', '', '', 1, NULL, NULL),
(668, 557, 'Pesan makeup arabian look', '', '', 1, NULL, NULL),
(669, 558, 'Pesan makeup arabian look', '', '', 1, NULL, NULL),
(670, 559, 'Pesan tenda bernuansa eropa', '1719789907.jpg', '1719790017.jpg', 3, NULL, NULL),
(671, 560, 'FULL FITUR', '', '1719801815.jpg', 3, NULL, NULL),
(672, 561, 'paket lengkap', '', '', 1, NULL, NULL),
(673, 562, 'resepsi', '1719823397.png', '1719823467.png', 3, NULL, NULL),
(674, 563, 'akad saja', '', '', 1, NULL, NULL),
(675, 564, 'Resepai', '1719832292.jpg', '', 2, NULL, NULL);