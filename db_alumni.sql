-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Des 2020 pada 17.27
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_alumni`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `nama_event` varchar(60) NOT NULL,
  `event_title` varchar(50) NOT NULL,
  `event_slug` varchar(60) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_posting` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ekskul` varchar(50) NOT NULL,
  `tanggal_acara` varchar(20) NOT NULL,
  `berkas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id`, `nama_event`, `event_title`, `event_slug`, `deskripsi`, `tanggal_posting`, `ekskul`, `tanggal_acara`, `berkas`) VALUES
(56, 'pelantikan', 'pelantikan', 'pelantikan', 'tempat : SMA', '2020-12-20 14:54:35', 'Pramuka', '2020-12-30', '0351248_Appendices.pdf'),
(58, 'makan makan', 'makan ayam', 'makan-ayam', 'ayam goreng', '2020-12-21 09:31:37', 'Pramuka', '2020-12-22', '0b22fc6d3b3ba160ec684b132339996f.jpg'),
(60, 'a', 'a', 'a', 'a', '2020-12-21 09:38:43', 'OSIS', '2020-11-26', '2ae129c70a627d4dfe693be7e1b1db60.jpg'),
(62, 'a', 'a', 'a', 'a', '2020-12-25 15:04:58', 'Snikers', '2020-12-31', '0b14a84afbc9f50c464f5b446464b9151.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User'),
(3, 'osis', 'organisasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(19, '::1', 'pum@user.com', 1609342930),
(21, '::1', 'putridewipradasari@gmail.com', 1609343048),
(22, '::1', 'putridewipradasari@gmail.com', 1609343057),
(23, '::1', 'putridewipradasari@gmail.com', 1609343120);

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nisn` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(16) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(20) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(20) NOT NULL,
  `tahun_masuk` varchar(9) NOT NULL,
  `tahun_lulus` varchar(9) NOT NULL,
  `no_ijazah` varchar(50) NOT NULL,
  `no_skhun` varchar(50) NOT NULL,
  `ekskul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id`, `id_user`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `nisn`, `alamat`, `no_telp`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `tahun_masuk`, `tahun_lulus`, `no_ijazah`, `no_skhun`, `ekskul`) VALUES
(9, 2, 'Perempuan', 'ea', '1984-02-18', 11, 'aa', '11', 'aa', 'KEPOLISIAN RI', 'a1', 'PETANI', '2016', '2018', '11', '11', 'KIR'),
(10, 3, 'Perempuan', 's', '2000-01-01', 2, 's', '2', 's', 'PEGAWAI NEGERI SIPIL', 's', 'INDUSTRI', '2015', '2018', '2', '2', 'KIR'),
(11, 8, 'Perempuan', 'Raman Fajar', '2000-03-03', 18753064, 'Lampung Timur', '085809481793', 'Kasiran', '-', 'Istinah', 'Petani', '2015', '2018', '123456', '789123', 'Pramuka'),
(12, 7, 'Perempuan', 'Way Kanan', '2000-07-10', 18753041, 'Banjit, Way Kanan', '085366975484', 'Wayan', 'Petani', 'Wayan', 'Petani', '2015', '2018', '999998888', '009899', 'Pramuka'),
(13, 6, 'Perempuan', 'AS', '2000-08-01', 123, 'AS', '1234', 'asd', 'asd', 'sdf', 'sdf', '2015', '2017', '123', '123', 'OSIS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `referensi_ekskul`
--

CREATE TABLE `referensi_ekskul` (
  `id` int(11) NOT NULL,
  `nm_ekskul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `referensi_ekskul`
--

INSERT INTO `referensi_ekskul` (`id`, `nm_ekskul`) VALUES
(1, 'OSIS'),
(2, 'Pramuka'),
(5, 'Paskibra'),
(6, 'PMR'),
(7, 'Rohani Islam'),
(8, 'Rohani Hindu'),
(9, 'Rohani Kristen'),
(10, 'Rohani Katholik'),
(14, 'Robotik'),
(16, 'Snikers'),
(17, 'Olahraga'),
(18, 'Olimpiade'),
(19, 'DIKSI'),
(20, 'KIR'),
(21, 'English Club'),
(22, 'Japanes Club'),
(23, 'Tidak Memiliki Organisasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_alumni`
--

CREATE TABLE `status_alumni` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `status` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status_alumni`
--

INSERT INTO `status_alumni` (`id`, `id_user`, `status`, `deskripsi`) VALUES
(7, 2, 'Bekerja sambil kuliah', 'a'),
(8, 3, 'Kuliah', 's'),
(9, 8, 'Kuliah', 'POLITEKNIK NEGERI LAMPUNG'),
(10, 7, 'Kuliah', 'POLINELA'),
(11, 6, 'Kuliah', 'polinela');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$08$tXgzdrIacZ1OrTByIPY7CuOTFhKjrj7OwpzDG/hYmC8GdJURLPMIe', '', 'admin@admin.com', '', '-N-QzN8O8CuLVErLYKUPYOb87f501b797d0c121a', 1545139776, NULL, 1268889823, 1609345017, 1, 'Admin', 'istrator'),
(2, '::1', 'user1@user.com', '$2y$08$SiQSugQF8NduDBBxvOCOw.UXVRJb3zBo./qzWQ7tlrnwSmnZrpUF6', NULL, 'user1@user.com', NULL, NULL, NULL, 'CsXSyl3BnNknQSckb7DcZO', 1545149959, 1609345411, 1, 'user 1', 'user'),
(3, '::1', 'user2@user.com', '$2y$08$cjmwxcIhPuhcsORwO0wsJOxb5U0ZH11ds.y3FK61obTd/2lli6oau', NULL, 'user2@user.com', NULL, NULL, NULL, NULL, 1545287957, 1608475961, 1, 'user 2', 'user'),
(4, '::1', 'a@user.com', '$2y$08$q13eovxnUlkQuf9xZBMWYOt2lUd7DNBXQj7lXWzcJO6xawN2CGN5y', NULL, 'a@user.com', NULL, NULL, NULL, 'URkV2hKS3acDvx.Bo5tdv.', 1606753024, 1609344991, 1, 'aa', 'a'),
(5, '::1', 'b@admin.com', '$2y$08$brCDKFomhV5bywxc9agQtOLiXKq2DiKu6rPdqwE5wxZThJyva2EQe', NULL, 'b@admin.com', NULL, NULL, NULL, NULL, 1606753083, NULL, 1, 'b', 'b'),
(6, '::1', 'putri@user.com', '$2y$08$53ZOC/oLTgcLx2Z2Y/d3NecMRCRHy5QQLJ6rgfXahDl8lUsWKGW/G', NULL, 'pumkelompokdua@gmail.com', NULL, 'GqGHGnNI8QFs7XS.w2uhFO84f7bbb6627675fb27', 1608458877, NULL, 1607449301, 1608456610, 1, 'putri', 'dewi'),
(7, '::1', 'nynitatriyani10@gmail.com', '$2y$08$nfeBBAZEPYE2Lr6LoVmZmOtXSBuQEW3W20dKzEZ2siACMp87GcCVe', NULL, 'nynitatriyani10@gmail.com', NULL, NULL, NULL, NULL, 1607960234, 1607960563, 1, 'ita', 'triyani'),
(8, '::1', 'sriayulestari824@gmail.com', '$2y$08$s5CyaSjIvkBzR8PFXQQR/.n2SG.yuEhi66s7y53GzYZoiL0lgBDa6', NULL, 'sriayulestari824@gmail.com', NULL, NULL, NULL, NULL, 1607960284, 1608400327, 1, 'sri', 'ayu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(15, 1, 1),
(12, 2, 2),
(8, 3, 2),
(40, 4, 3),
(44, 5, 3),
(39, 6, 2),
(34, 7, 2),
(36, 8, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `referensi_ekskul`
--
ALTER TABLE `referensi_ekskul`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status_alumni`
--
ALTER TABLE `status_alumni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_user`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `referensi_ekskul`
--
ALTER TABLE `referensi_ekskul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `status_alumni`
--
ALTER TABLE `status_alumni`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD CONSTRAINT `profil_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `status_alumni`
--
ALTER TABLE `status_alumni`
  ADD CONSTRAINT `status_alumni_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
