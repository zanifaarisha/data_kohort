-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18 Des 2018 pada 01.45
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `works_kohort`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin', 'zanifah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_anak_prasekolah`
--

CREATE TABLE `tbl_anak_prasekolah` (
  `id_anak_prasekolah` int(11) NOT NULL,
  `enam_enam_bulan` varchar(5) NOT NULL,
  `tujuh_dua_bulan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_anc`
--

CREATE TABLE `tbl_anc` (
  `id` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `anc_awal` double NOT NULL,
  `anc_akhir` float DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_anc`
--

INSERT INTO `tbl_anc` (`id`, `id_pasien`, `anc_awal`, `anc_akhir`, `status`) VALUES
(1, 3, 20, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_biodata_balita`
--

CREATE TABLE `tbl_biodata_balita` (
  `id_balita` int(11) NOT NULL,
  `no_urut` varchar(10) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_anak` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P','','') NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_tlp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_biodata_balita`
--

INSERT INTO `tbl_biodata_balita` (`id_balita`, `no_urut`, `nik`, `nama_anak`, `tgl_lahir`, `jenis_kelamin`, `nama_ibu`, `alamat`, `no_tlp`) VALUES
(1, '1', '24524', 'fsdf', '2018-12-02', '', 'sfdf', 'sdfsd', 'sdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_biodata_bayi`
--

CREATE TABLE `tbl_biodata_bayi` (
  `id_bayi` int(11) NOT NULL,
  `no_urut` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama_bayi` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P','','') NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `berat_panjang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_biodata_ibu_hamil`
--

CREATE TABLE `tbl_biodata_ibu_hamil` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nama_suami` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_biodata_ibu_hamil`
--

INSERT INTO `tbl_biodata_ibu_hamil` (`id`, `nama`, `nama_suami`, `alamat`, `tgl_lahir`) VALUES
(1, 'ifa', 'tidak tau', 'tentara pelajar', '2018-12-17'),
(2, 'dian', 'akbar', 'banda', '2018-12-09'),
(3, 'wiwik', 'hamster', 'layya', '2018-12-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_imunisasi_bayi`
--

CREATE TABLE `tbl_imunisasi_bayi` (
  `id_imunisasi` int(11) NOT NULL,
  `hb_tujuh_hr` varchar(10) NOT NULL,
  `polio_satu` varchar(10) NOT NULL,
  `polio_dua` varchar(10) NOT NULL,
  `polio_tiga` varchar(10) NOT NULL,
  `polio_empat` varchar(10) NOT NULL,
  `campak` varchar(10) NOT NULL,
  `IDL` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_imunisasi_lanjutan`
--

CREATE TABLE `tbl_imunisasi_lanjutan` (
  `id_imunisasi` int(11) NOT NULL,
  `dpt_hb_hib` varchar(10) NOT NULL,
  `Campak` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_imunisasi_lanjutan`
--

INSERT INTO `tbl_imunisasi_lanjutan` (`id_imunisasi`, `dpt_hb_hib`, `Campak`) VALUES
(1, 'ya', 'tidak'),
(2, 'ya', 'ya'),
(3, 'tidak', 'ya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kehamilan`
--

CREATE TABLE `tbl_kehamilan` (
  `id_kehamilan` int(11) NOT NULL,
  `jarakk_kehamilan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kehamilan`
--

INSERT INTO `tbl_kehamilan` (`id_kehamilan`, `jarakk_kehamilan`) VALUES
(1, '2 tahun');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelahiran`
--

CREATE TABLE `tbl_kelahiran` (
  `id_kelahiran` int(11) NOT NULL,
  `lahir_mati` varchar(5) NOT NULL,
  `lahir_hidup` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kelahiran`
--

INSERT INTO `tbl_kelahiran` (`id_kelahiran`, `lahir_mati`, `lahir_hidup`) VALUES
(1, 'tidak', 'ya'),
(2, 'ya', 'tidak'),
(3, 'tidak', 'ya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kohort_anak`
--

CREATE TABLE `tbl_kohort_anak` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `nilai_anc` int(50) NOT NULL,
  `status_nifas` varchar(30) NOT NULL,
  `tgl_nifas` date NOT NULL,
  `nama_anak` varchar(50) NOT NULL,
  `anak_ke` varchar(10) NOT NULL,
  `berat_badan_anak` varchar(20) NOT NULL,
  `tinggi_anak` varchar(20) NOT NULL,
  `gizi_anak` varchar(30) NOT NULL,
  `pemberian_asi_exklusif` varchar(20) NOT NULL,
  `imunisasi_anak` varchar(20) NOT NULL,
  `pemberian_vit_a` varchar(20) NOT NULL,
  `keterangan_anak` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kohort_ibu`
--

CREATE TABLE `tbl_kohort_ibu` (
  `id` int(11) NOT NULL,
  `pemeriksaan_ke` varchar(10) NOT NULL,
  `tgl_pemeriksaan` date NOT NULL,
  `keluhan_sekarang` varchar(200) NOT NULL,
  `tekanan_darah` varchar(10) NOT NULL,
  `berat_badan` varchar(10) NOT NULL,
  `umur_kehamilan` varchar(10) NOT NULL,
  `tinggi_fundus` varchar(10) NOT NULL,
  `letak_janin` varchar(15) NOT NULL,
  `tingkat_hipertensi` varchar(10) NOT NULL,
  `tingkat_kesadaran` varchar(10) NOT NULL,
  `detak_jantung` varchar(10) NOT NULL,
  `lingkar_perut` varchar(10) NOT NULL,
  `kaki_bengkak` varchar(20) NOT NULL,
  `kondisi_badan` varchar(20) NOT NULL,
  `nilai_anc` int(100) NOT NULL,
  `hasil_pemeriksaan` varchar(10) NOT NULL,
  `tindakan` varchar(200) NOT NULL,
  `saran_bidan` varchar(200) NOT NULL,
  `tgl_pem_berikutnya` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kohort_nifas`
--

CREATE TABLE `tbl_kohort_nifas` (
  `id` int(11) NOT NULL,
  `nama_pasien` int(50) NOT NULL,
  `kondisi_ibu_nifas` varchar(10) NOT NULL,
  `tekanan_darah` varchar(10) NOT NULL,
  `suhu_tubuh` varchar(10) NOT NULL,
  `respirasi` varchar(10) NOT NULL,
  `nadi` varchar(10) NOT NULL,
  `pendarahan_pervigma` varchar(20) NOT NULL,
  `kondisi_perineum` varchar(10) NOT NULL,
  `tanda_infeksi` varchar(10) NOT NULL,
  `kontraksi_rahim` varchar(10) NOT NULL,
  `tinggi_fundus_uteri` varchar(10) NOT NULL,
  `payudara` varchar(20) NOT NULL,
  `pemberian_asi` varchar(20) NOT NULL,
  `pemberian_vit_a` varchar(10) NOT NULL,
  `layanan_kontrasepsi_pasapersalinan` varchar(10) NOT NULL,
  `kompilkasi` varchar(10) NOT NULL,
  `bab` varchar(10) NOT NULL,
  `bak` varchar(10) NOT NULL,
  `kesehatan_anak` varchar(20) NOT NULL,
  `produksi_asi` varchar(10) NOT NULL,
  `tindakan` varchar(200) NOT NULL,
  `saran_bidan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kunjungan`
--

CREATE TABLE `tbl_kunjungan` (
  `id` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `kunjungan_ke` varchar(5) NOT NULL,
  `tekanan_darah` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `lingkar_perut` int(11) NOT NULL,
  `nilai_kunjungan` double NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kunjungan`
--

INSERT INTO `tbl_kunjungan` (`id`, `id_pasien`, `kunjungan_ke`, `tekanan_darah`, `berat_badan`, `lingkar_perut`, `nilai_kunjungan`, `status`) VALUES
(1, 3, 'k1', 100, 55, 55, 47.78, 'tidak normal'),
(2, 3, 'k2', 120, 70, 90, 66.67, 'tidak normal'),
(3, 3, 'k3', 120, 90, 99, 76.33, 'tidak normal'),
(4, 3, 'k4', 150, 120, 120, 96.67, 'tidak normal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nama`
--

CREATE TABLE `tbl_nama` (
  `id_nama` int(11) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `nama_suami` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_nama`
--

INSERT INTO `tbl_nama` (`id_nama`, `nama_ibu`, `nama_suami`) VALUES
(1, 'ani', 'fandi'),
(2, 'wiwik', 'ahmad'),
(3, 'uni', 'dedi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `id` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `nama_suami` varchar(50) NOT NULL,
  `alamat_pasien` varchar(50) NOT NULL,
  `tgl_lahir_pasien` date NOT NULL,
  `umur_pasien` varchar(10) NOT NULL,
  `jarak_kehamilan` varchar(10) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `pendidikan_terakhir` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `gol_darah` varchar(10) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `perkawinan_ke` varchar(5) NOT NULL,
  `tgl_nikah` date NOT NULL,
  `tgl_persalinan_terakhir` date NOT NULL,
  `hamil_ke` varchar(10) NOT NULL,
  `tgl_hpht` date NOT NULL,
  `lingkar_lengan_atas` varchar(10) NOT NULL,
  `tinggi_badan` varchar(10) NOT NULL,
  `penggunaan_kb_sebelum_hamil` varchar(10) NOT NULL,
  `riwayat_penyakit` varchar(10) NOT NULL,
  `jenis_penyakit` varchar(20) NOT NULL,
  `riwayat_alergi` varchar(20) NOT NULL,
  `pernah_hamil_kembar` varchar(10) NOT NULL,
  `pernah_hamil_lebih_bulan` varchar(10) NOT NULL,
  `pernah_letak_sungsang` varchar(10) NOT NULL,
  `pernah_letak_lintang` varchar(10) NOT NULL,
  `pernah_kejang` varchar(10) NOT NULL,
  `jumlah_anak` varchar(5) NOT NULL,
  `umur_anak_terakhir` varchar(5) NOT NULL,
  `jumlah_lahir_mati` varchar(5) NOT NULL,
  `status_imunisasi` varchar(10) NOT NULL,
  `cara_persalinan_terakhir` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelayanan`
--

CREATE TABLE `tbl_pelayanan` (
  `id` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `tgl_pelayanan` date NOT NULL,
  `tgl_hpht` date NOT NULL,
  `anc_awal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tbl_pelayanan`
--

INSERT INTO `tbl_pelayanan` (`id`, `id_pasien`, `tgl_pelayanan`, `tgl_hpht`, `anc_awal`) VALUES
(1, 3, '2018-12-18', '2018-12-18', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_umur`
--

CREATE TABLE `tbl_umur` (
  `id_umur` int(11) NOT NULL,
  `umur_ibu` varchar(100) NOT NULL,
  `kehamilan_ibu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_umur`
--

INSERT INTO `tbl_umur` (`id_umur`, `umur_ibu`, `kehamilan_ibu`) VALUES
(1, '26', '12 minggu'),
(2, '25', '08 minggu'),
(3, '29', '5 mnggu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama`) VALUES
(1, 'user', 'user', 'zanifah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_anak_prasekolah`
--
ALTER TABLE `tbl_anak_prasekolah`
  ADD PRIMARY KEY (`id_anak_prasekolah`);

--
-- Indexes for table `tbl_anc`
--
ALTER TABLE `tbl_anc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_biodata_balita`
--
ALTER TABLE `tbl_biodata_balita`
  ADD PRIMARY KEY (`id_balita`);

--
-- Indexes for table `tbl_biodata_bayi`
--
ALTER TABLE `tbl_biodata_bayi`
  ADD PRIMARY KEY (`id_bayi`);

--
-- Indexes for table `tbl_biodata_ibu_hamil`
--
ALTER TABLE `tbl_biodata_ibu_hamil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_imunisasi_bayi`
--
ALTER TABLE `tbl_imunisasi_bayi`
  ADD PRIMARY KEY (`id_imunisasi`);

--
-- Indexes for table `tbl_imunisasi_lanjutan`
--
ALTER TABLE `tbl_imunisasi_lanjutan`
  ADD PRIMARY KEY (`id_imunisasi`);

--
-- Indexes for table `tbl_kehamilan`
--
ALTER TABLE `tbl_kehamilan`
  ADD PRIMARY KEY (`id_kehamilan`);

--
-- Indexes for table `tbl_kelahiran`
--
ALTER TABLE `tbl_kelahiran`
  ADD PRIMARY KEY (`id_kelahiran`);

--
-- Indexes for table `tbl_kohort_anak`
--
ALTER TABLE `tbl_kohort_anak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kohort_ibu`
--
ALTER TABLE `tbl_kohort_ibu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kohort_nifas`
--
ALTER TABLE `tbl_kohort_nifas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kunjungan`
--
ALTER TABLE `tbl_kunjungan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_nama`
--
ALTER TABLE `tbl_nama`
  ADD PRIMARY KEY (`id_nama`);

--
-- Indexes for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pelayanan`
--
ALTER TABLE `tbl_pelayanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_umur`
--
ALTER TABLE `tbl_umur`
  ADD PRIMARY KEY (`id_umur`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_anak_prasekolah`
--
ALTER TABLE `tbl_anak_prasekolah`
  MODIFY `id_anak_prasekolah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_anc`
--
ALTER TABLE `tbl_anc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_biodata_balita`
--
ALTER TABLE `tbl_biodata_balita`
  MODIFY `id_balita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_biodata_bayi`
--
ALTER TABLE `tbl_biodata_bayi`
  MODIFY `id_bayi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_biodata_ibu_hamil`
--
ALTER TABLE `tbl_biodata_ibu_hamil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_imunisasi_bayi`
--
ALTER TABLE `tbl_imunisasi_bayi`
  MODIFY `id_imunisasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_imunisasi_lanjutan`
--
ALTER TABLE `tbl_imunisasi_lanjutan`
  MODIFY `id_imunisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_kehamilan`
--
ALTER TABLE `tbl_kehamilan`
  MODIFY `id_kehamilan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_kelahiran`
--
ALTER TABLE `tbl_kelahiran`
  MODIFY `id_kelahiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_kohort_anak`
--
ALTER TABLE `tbl_kohort_anak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kohort_ibu`
--
ALTER TABLE `tbl_kohort_ibu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kohort_nifas`
--
ALTER TABLE `tbl_kohort_nifas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kunjungan`
--
ALTER TABLE `tbl_kunjungan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_nama`
--
ALTER TABLE `tbl_nama`
  MODIFY `id_nama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pelayanan`
--
ALTER TABLE `tbl_pelayanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_umur`
--
ALTER TABLE `tbl_umur`
  MODIFY `id_umur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
