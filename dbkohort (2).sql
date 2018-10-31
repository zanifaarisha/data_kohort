-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2018 at 03:31 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkohort`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anak_prasekolah`
--

CREATE TABLE `tbl_anak_prasekolah` (
  `id_anak_prasekolah` int(11) NOT NULL,
  `enam_enam_bulan` varchar(5) NOT NULL,
  `tujuh_dua_bulan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_biodata_balita`
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
  `no_tlp` varchar(15) NOT NULL,
  `punya_buku_kia` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_biodata_bayi`
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
  `punya_buku_kia` varchar(5) NOT NULL,
  `berat_panjang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_biodata_ibu_hamil`
--

CREATE TABLE `tbl_biodata_ibu_hamil` (
  `id_ibu_hamil` int(11) NOT NULL,
  `no_urut` varchar(100) NOT NULL,
  `no_indek` varchar(100) NOT NULL,
  `id_nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `id_umur` varchar(100) NOT NULL,
  `hamil_ke` varchar(10) NOT NULL,
  `bb_tb` varchar(10) NOT NULL,
  `lila_mt` varchar(10) NOT NULL,
  `hb_goldar` varchar(10) NOT NULL,
  `tensi` varchar(10) NOT NULL,
  `id_resiko` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_imunisasi_bayi`
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
-- Table structure for table `tbl_imunisasi_lanjutan`
--

CREATE TABLE `tbl_imunisasi_lanjutan` (
  `id_imunisasi` int(11) NOT NULL,
  `dpt_hb_hib` varchar(10) NOT NULL,
  `Campak` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_imunisasi_tt`
--

CREATE TABLE `tbl_imunisasi_tt` (
  `id_imunisasi` int(11) NOT NULL,
  `status_imunisasi_tt` varchar(100) NOT NULL,
  `pemberian_imunisasi_tt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kehamilan`
--

CREATE TABLE `tbl_kehamilan` (
  `id_kehamilan` int(11) NOT NULL,
  `jarakk_kehamilan` varchar(100) NOT NULL,
  `id_imunisasi` varchar(100) NOT NULL,
  `buku_kia_pasang_stiker` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelahiran`
--

CREATE TABLE `tbl_kelahiran` (
  `id_kelahiran` int(11) NOT NULL,
  `lahir_mati` varchar(5) NOT NULL,
  `lahir_hidup` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kematian_post_natal`
--

CREATE TABLE `tbl_kematian_post_natal` (
  `id_kematian` int(11) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kunjungan_bayi`
--

CREATE TABLE `tbl_kunjungan_bayi` (
  `id_kunjungan_bayi` int(11) NOT NULL,
  `id_tahun_pertama` varchar(100) NOT NULL,
  `id_tahun_kedua` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kunjungan_ibu`
--

CREATE TABLE `tbl_kunjungan_ibu` (
  `id_kunjungan` int(11) NOT NULL,
  `id_tahun_pertama` varchar(50) NOT NULL,
  `id_tahun_kedua` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kunjungan_neonatal`
--

CREATE TABLE `tbl_kunjungan_neonatal` (
  `id_kunjungan_neonatal` int(11) NOT NULL,
  `pertama` varchar(50) NOT NULL,
  `kedua` varchar(50) NOT NULL,
  `ketiga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_masa_neonatal`
--

CREATE TABLE `tbl_masa_neonatal` (
  `id_masa_neonatal` int(11) NOT NULL,
  `id_kunjungan_neonatal` int(10) NOT NULL,
  `lahir_lima_jam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_meninggal`
--

CREATE TABLE `tbl_meninggal` (
  `id_meninggal` int(11) NOT NULL,
  `tgl_penyebab_kematian` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nama`
--

CREATE TABLE `tbl_nama` (
  `id_nama` int(11) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `nama_suami` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nifas`
--

CREATE TABLE `tbl_nifas` (
  `id_nifas` int(11) NOT NULL,
  `enam_jam_tiga_hr` varchar(50) NOT NULL,
  `empat_duadelapan_hr` varchar(50) NOT NULL,
  `duasembilan_empatdua_hr` varchar(50) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelayanan_balita`
--

CREATE TABLE `tbl_pelayanan_balita` (
  `id_pelayanan_balita` int(11) NOT NULL,
  `id_tahun_pertama` int(11) NOT NULL,
  `id_tahun_kedua` int(11) NOT NULL,
  `id_tahun_ketiga` int(11) NOT NULL,
  `id_tahun_keempat` int(11) NOT NULL,
  `id_tahun_kelima` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendeteksi_faktor_resiko`
--

CREATE TABLE `tbl_pendeteksi_faktor_resiko` (
  `id_resiko` int(11) NOT NULL,
  `nakes` int(100) NOT NULL,
  `masyarakat` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penolak_persalinan`
--

CREATE TABLE `tbl_penolak_persalinan` (
  `id_persalinan` int(11) NOT NULL,
  `nakes_kongisten` varchar(100) NOT NULL,
  `dukun` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tahun_kedua`
--

CREATE TABLE `tbl_tahun_kedua` (
  `id_tahun_kedua` int(11) NOT NULL,
  `jan` varchar(5) NOT NULL,
  `feb` varchar(5) NOT NULL,
  `maret` varchar(5) NOT NULL,
  `april` varchar(5) NOT NULL,
  `mei` varchar(5) NOT NULL,
  `juni` varchar(5) NOT NULL,
  `july` varchar(5) NOT NULL,
  `agst` varchar(5) NOT NULL,
  `sept` varchar(5) NOT NULL,
  `okt` varchar(5) NOT NULL,
  `nov` varchar(5) NOT NULL,
  `des` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tahun_kedua_bayi`
--

CREATE TABLE `tbl_tahun_kedua_bayi` (
  `id_tahun_kedua` int(11) NOT NULL,
  `jan` varchar(5) NOT NULL,
  `feb` varchar(5) NOT NULL,
  `maret` varchar(5) NOT NULL,
  `april` varchar(5) NOT NULL,
  `mei` varchar(5) NOT NULL,
  `juni` varchar(5) NOT NULL,
  `juli` varchar(5) NOT NULL,
  `agst` varchar(5) NOT NULL,
  `sept` varchar(5) NOT NULL,
  `okt` varchar(5) NOT NULL,
  `nov` varchar(5) NOT NULL,
  `des` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tahun_kedua_ibu`
--

CREATE TABLE `tbl_tahun_kedua_ibu` (
  `id_tahun_kedua` int(11) NOT NULL,
  `jan` varchar(5) NOT NULL,
  `feb` varchar(5) NOT NULL,
  `maret` varchar(5) NOT NULL,
  `april` varchar(5) NOT NULL,
  `mei` varchar(5) NOT NULL,
  `juni` varchar(5) NOT NULL,
  `july` varchar(5) NOT NULL,
  `agst` varchar(5) NOT NULL,
  `sept` varchar(5) NOT NULL,
  `okt` varchar(5) NOT NULL,
  `nov` varchar(5) NOT NULL,
  `des` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tahun_keempat`
--

CREATE TABLE `tbl_tahun_keempat` (
  `id_tahun_keempat` int(11) NOT NULL,
  `jan` varchar(5) NOT NULL,
  `feb` varchar(5) NOT NULL,
  `maret` varchar(5) NOT NULL,
  `april` varchar(5) NOT NULL,
  `mei` varchar(5) NOT NULL,
  `juni` varchar(5) NOT NULL,
  `july` varchar(5) NOT NULL,
  `agst` varchar(5) NOT NULL,
  `sept` varchar(5) NOT NULL,
  `okt` varchar(5) NOT NULL,
  `nov` varchar(5) NOT NULL,
  `des` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tahun_kelima`
--

CREATE TABLE `tbl_tahun_kelima` (
  `id_tahun_kelima` int(11) NOT NULL,
  `jan` varchar(5) NOT NULL,
  `feb` varchar(5) NOT NULL,
  `maret` varchar(5) NOT NULL,
  `april` varchar(5) NOT NULL,
  `mei` varchar(5) NOT NULL,
  `juni` varchar(5) NOT NULL,
  `july` varchar(5) NOT NULL,
  `agst` varchar(5) NOT NULL,
  `sept` varchar(5) NOT NULL,
  `okt` varchar(5) NOT NULL,
  `nov` varchar(5) NOT NULL,
  `des` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tahun_ketiga`
--

CREATE TABLE `tbl_tahun_ketiga` (
  `id_tahun_ketiga` int(11) NOT NULL,
  `jan` varchar(5) NOT NULL,
  `feb` varchar(5) NOT NULL,
  `maret` varchar(5) NOT NULL,
  `april` varchar(5) NOT NULL,
  `mei` varchar(5) NOT NULL,
  `juni` varchar(5) NOT NULL,
  `july` varchar(5) NOT NULL,
  `agst` varchar(5) NOT NULL,
  `sept` varchar(5) NOT NULL,
  `okt` varchar(5) NOT NULL,
  `nov` varchar(5) NOT NULL,
  `des` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tahun_pertama`
--

CREATE TABLE `tbl_tahun_pertama` (
  `id_tahun_pertama` int(11) NOT NULL,
  `jan` varchar(5) NOT NULL,
  `feb` varchar(5) NOT NULL,
  `maret` varchar(5) NOT NULL,
  `april` varchar(5) NOT NULL,
  `mei` varchar(5) NOT NULL,
  `juni` varchar(5) NOT NULL,
  `july` varchar(5) NOT NULL,
  `agst` varchar(5) NOT NULL,
  `sept` varchar(5) NOT NULL,
  `okt` varchar(5) NOT NULL,
  `nov` varchar(5) NOT NULL,
  `des` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tahun_pertama_bayi`
--

CREATE TABLE `tbl_tahun_pertama_bayi` (
  `id_tahun_pertama` int(11) NOT NULL,
  `jan` varchar(5) NOT NULL,
  `feb` varchar(5) NOT NULL,
  `maret` varchar(5) NOT NULL,
  `april` varchar(5) NOT NULL,
  `mei` varchar(5) NOT NULL,
  `juni` varchar(5) NOT NULL,
  `july` varchar(5) NOT NULL,
  `agst` varchar(5) NOT NULL,
  `sept` varchar(5) NOT NULL,
  `okt` varchar(5) NOT NULL,
  `nov` varchar(5) NOT NULL,
  `des` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tahun_pertama_ibu`
--

CREATE TABLE `tbl_tahun_pertama_ibu` (
  `id_tahun_pertama` int(11) NOT NULL,
  `jan` varchar(5) NOT NULL,
  `feb` varchar(5) NOT NULL,
  `maret` varchar(5) NOT NULL,
  `april` varchar(5) NOT NULL,
  `mei` varchar(5) NOT NULL,
  `juni` varchar(5) NOT NULL,
  `july` varchar(5) NOT NULL,
  `agst` varchar(5) NOT NULL,
  `sept` varchar(5) NOT NULL,
  `okt` varchar(5) NOT NULL,
  `nov` varchar(5) NOT NULL,
  `des` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_umur`
--

CREATE TABLE `tbl_umur` (
  `id_umur` int(11) NOT NULL,
  `umur_ibu` varchar(100) NOT NULL,
  `kehamilan_ibu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vitamin_bayi`
--

CREATE TABLE `tbl_vitamin_bayi` (
  `id_vitamin` int(11) NOT NULL,
  `vit_A` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_anak_prasekolah`
--
ALTER TABLE `tbl_anak_prasekolah`
  ADD PRIMARY KEY (`id_anak_prasekolah`);

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
  ADD PRIMARY KEY (`id_ibu_hamil`);

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
-- Indexes for table `tbl_imunisasi_tt`
--
ALTER TABLE `tbl_imunisasi_tt`
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
-- Indexes for table `tbl_kematian_post_natal`
--
ALTER TABLE `tbl_kematian_post_natal`
  ADD PRIMARY KEY (`id_kematian`);

--
-- Indexes for table `tbl_kunjungan_bayi`
--
ALTER TABLE `tbl_kunjungan_bayi`
  ADD PRIMARY KEY (`id_kunjungan_bayi`);

--
-- Indexes for table `tbl_kunjungan_ibu`
--
ALTER TABLE `tbl_kunjungan_ibu`
  ADD PRIMARY KEY (`id_kunjungan`);

--
-- Indexes for table `tbl_kunjungan_neonatal`
--
ALTER TABLE `tbl_kunjungan_neonatal`
  ADD PRIMARY KEY (`id_kunjungan_neonatal`);

--
-- Indexes for table `tbl_masa_neonatal`
--
ALTER TABLE `tbl_masa_neonatal`
  ADD PRIMARY KEY (`id_masa_neonatal`);

--
-- Indexes for table `tbl_meninggal`
--
ALTER TABLE `tbl_meninggal`
  ADD PRIMARY KEY (`id_meninggal`);

--
-- Indexes for table `tbl_nama`
--
ALTER TABLE `tbl_nama`
  ADD PRIMARY KEY (`id_nama`);

--
-- Indexes for table `tbl_nifas`
--
ALTER TABLE `tbl_nifas`
  ADD PRIMARY KEY (`id_nifas`);

--
-- Indexes for table `tbl_pelayanan_balita`
--
ALTER TABLE `tbl_pelayanan_balita`
  ADD PRIMARY KEY (`id_pelayanan_balita`);

--
-- Indexes for table `tbl_pendeteksi_faktor_resiko`
--
ALTER TABLE `tbl_pendeteksi_faktor_resiko`
  ADD PRIMARY KEY (`id_resiko`);

--
-- Indexes for table `tbl_penolak_persalinan`
--
ALTER TABLE `tbl_penolak_persalinan`
  ADD PRIMARY KEY (`id_persalinan`);

--
-- Indexes for table `tbl_tahun_kedua`
--
ALTER TABLE `tbl_tahun_kedua`
  ADD PRIMARY KEY (`id_tahun_kedua`);

--
-- Indexes for table `tbl_tahun_kedua_bayi`
--
ALTER TABLE `tbl_tahun_kedua_bayi`
  ADD PRIMARY KEY (`id_tahun_kedua`);

--
-- Indexes for table `tbl_tahun_kedua_ibu`
--
ALTER TABLE `tbl_tahun_kedua_ibu`
  ADD PRIMARY KEY (`id_tahun_kedua`);

--
-- Indexes for table `tbl_tahun_keempat`
--
ALTER TABLE `tbl_tahun_keempat`
  ADD PRIMARY KEY (`id_tahun_keempat`);

--
-- Indexes for table `tbl_tahun_kelima`
--
ALTER TABLE `tbl_tahun_kelima`
  ADD PRIMARY KEY (`id_tahun_kelima`);

--
-- Indexes for table `tbl_tahun_ketiga`
--
ALTER TABLE `tbl_tahun_ketiga`
  ADD PRIMARY KEY (`id_tahun_ketiga`);

--
-- Indexes for table `tbl_tahun_pertama`
--
ALTER TABLE `tbl_tahun_pertama`
  ADD PRIMARY KEY (`id_tahun_pertama`);

--
-- Indexes for table `tbl_tahun_pertama_bayi`
--
ALTER TABLE `tbl_tahun_pertama_bayi`
  ADD PRIMARY KEY (`id_tahun_pertama`);

--
-- Indexes for table `tbl_tahun_pertama_ibu`
--
ALTER TABLE `tbl_tahun_pertama_ibu`
  ADD PRIMARY KEY (`id_tahun_pertama`);

--
-- Indexes for table `tbl_umur`
--
ALTER TABLE `tbl_umur`
  ADD PRIMARY KEY (`id_umur`);

--
-- Indexes for table `tbl_vitamin_bayi`
--
ALTER TABLE `tbl_vitamin_bayi`
  ADD PRIMARY KEY (`id_vitamin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_anak_prasekolah`
--
ALTER TABLE `tbl_anak_prasekolah`
  MODIFY `id_anak_prasekolah` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_biodata_balita`
--
ALTER TABLE `tbl_biodata_balita`
  MODIFY `id_balita` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_biodata_bayi`
--
ALTER TABLE `tbl_biodata_bayi`
  MODIFY `id_bayi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_biodata_ibu_hamil`
--
ALTER TABLE `tbl_biodata_ibu_hamil`
  MODIFY `id_ibu_hamil` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_imunisasi_bayi`
--
ALTER TABLE `tbl_imunisasi_bayi`
  MODIFY `id_imunisasi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_imunisasi_lanjutan`
--
ALTER TABLE `tbl_imunisasi_lanjutan`
  MODIFY `id_imunisasi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_imunisasi_tt`
--
ALTER TABLE `tbl_imunisasi_tt`
  MODIFY `id_imunisasi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_kehamilan`
--
ALTER TABLE `tbl_kehamilan`
  MODIFY `id_kehamilan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_kelahiran`
--
ALTER TABLE `tbl_kelahiran`
  MODIFY `id_kelahiran` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_kematian_post_natal`
--
ALTER TABLE `tbl_kematian_post_natal`
  MODIFY `id_kematian` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_kunjungan_bayi`
--
ALTER TABLE `tbl_kunjungan_bayi`
  MODIFY `id_kunjungan_bayi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_kunjungan_ibu`
--
ALTER TABLE `tbl_kunjungan_ibu`
  MODIFY `id_kunjungan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_kunjungan_neonatal`
--
ALTER TABLE `tbl_kunjungan_neonatal`
  MODIFY `id_kunjungan_neonatal` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_masa_neonatal`
--
ALTER TABLE `tbl_masa_neonatal`
  MODIFY `id_masa_neonatal` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_meninggal`
--
ALTER TABLE `tbl_meninggal`
  MODIFY `id_meninggal` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_nama`
--
ALTER TABLE `tbl_nama`
  MODIFY `id_nama` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_nifas`
--
ALTER TABLE `tbl_nifas`
  MODIFY `id_nifas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_pelayanan_balita`
--
ALTER TABLE `tbl_pelayanan_balita`
  MODIFY `id_pelayanan_balita` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_pendeteksi_faktor_resiko`
--
ALTER TABLE `tbl_pendeteksi_faktor_resiko`
  MODIFY `id_resiko` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_penolak_persalinan`
--
ALTER TABLE `tbl_penolak_persalinan`
  MODIFY `id_persalinan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_tahun_kedua`
--
ALTER TABLE `tbl_tahun_kedua`
  MODIFY `id_tahun_kedua` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_tahun_kedua_bayi`
--
ALTER TABLE `tbl_tahun_kedua_bayi`
  MODIFY `id_tahun_kedua` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_tahun_kedua_ibu`
--
ALTER TABLE `tbl_tahun_kedua_ibu`
  MODIFY `id_tahun_kedua` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_tahun_keempat`
--
ALTER TABLE `tbl_tahun_keempat`
  MODIFY `id_tahun_keempat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_tahun_kelima`
--
ALTER TABLE `tbl_tahun_kelima`
  MODIFY `id_tahun_kelima` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_tahun_ketiga`
--
ALTER TABLE `tbl_tahun_ketiga`
  MODIFY `id_tahun_ketiga` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_tahun_pertama`
--
ALTER TABLE `tbl_tahun_pertama`
  MODIFY `id_tahun_pertama` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_tahun_pertama_bayi`
--
ALTER TABLE `tbl_tahun_pertama_bayi`
  MODIFY `id_tahun_pertama` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_tahun_pertama_ibu`
--
ALTER TABLE `tbl_tahun_pertama_ibu`
  MODIFY `id_tahun_pertama` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_umur`
--
ALTER TABLE `tbl_umur`
  MODIFY `id_umur` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_vitamin_bayi`
--
ALTER TABLE `tbl_vitamin_bayi`
  MODIFY `id_vitamin` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
