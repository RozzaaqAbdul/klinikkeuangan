-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 16, 2019 at 05:09 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik_keuangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `asuransi`
--

CREATE TABLE `asuransi` (
  `id` tinyint(4) NOT NULL,
  `question` text NOT NULL,
  `variable` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asuransi`
--

INSERT INTO `asuransi` (`id`, `question`, `variable`) VALUES
(2, 'Berapa nilai pertanggungan asuransi jiwa yang telah Anda miliki saat ini (dalam juta Rupiah) ?\r\n', 'var_a'),
(3, 'Berapa estimasi biaya hidup yang dibutuhkan keluarga Anda per bulan (dalam juta Rupiah) ?\r\n', 'var_b'),
(4, 'Berapa nilai hutang yang harus dilunasi segera jika terjadi resiko pada Anda (dalam juta Rupiah) ?\r\n', 'var_c');

-- --------------------------------------------------------

--
-- Table structure for table `asuransi_jiwa`
--

CREATE TABLE `asuransi_jiwa` (
  `id` tinyint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `value1` int(20) NOT NULL,
  `value2` int(20) NOT NULL,
  `value3` int(20) NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asuransi_jiwa`
--

INSERT INTO `asuransi_jiwa` (`id`, `email`, `value1`, `value2`, `value3`, `total`) VALUES
(1, 'abiyosoa@gmail.com', 10, 20, 30, '0'),
(2, 'abiyosoa@gmail.com', 1000000, 5000000, 7000000, '992000000'),
(3, 'abiyosoa@gmail.com', 1, 1, 1, '198'),
(4, 'abiyosoa@gmail.com3', 123123, 2147483647, 123123123, '24624501378354'),
(5, '', 0, 0, 0, '0'),
(6, '', 0, 0, 0, '0'),
(7, '', 0, 0, 0, '0'),
(8, '', 0, 0, 0, '0'),
(9, 'abiyosoa@gmail.com', 2, 1, 3, '-199'),
(10, 'abiyosoa@gmail.com', 2, 1, 3, '-199'),
(11, 'abiyosoa@gmail.com', 12, 2, 1, '-398'),
(12, 'abiyosoa@gmail.com', 12, 2, 1, '-398'),
(13, 'abiyosoa@gmail.com', 12, 2, 1, '-398'),
(14, 'abiyosoa@gmail.com', 3, 2, 1, '-398'),
(15, 'abiyosoa@gmail.com', 3, 2, 1, '-398'),
(16, 'abiyosoa@gmail.com', 3, 2, 1, '-398'),
(17, 'abiyosoa@gmail.com', 3, 2, 1, '-398'),
(18, 'abiyosoa@gmail.com', 3, 2, 1, '-398'),
(19, 'abiyosoa@gmail.com', 3, 2, 1, '-398'),
(20, 'abiyosoa@gmail.com', 3, 2, 1, '-398'),
(21, 'abiyosoa@gmail.com', 3, 2, 1, '-398'),
(22, 'abiyosoa@gmail.com', 3, 2, 1, '-398'),
(23, 'abi@gmail.com', 4000000, 10000000, 5000000, '-1990000000'),
(24, 'abi@gmail.com', 4000000, 10000000, 5000000, '-1990000000'),
(25, 'abi@gmail.com', 4000000, 10000000, 5000000, '-1990000000'),
(26, 'abi@gmail.com', 4000000, 10000000, 5000000, '-1990000000'),
(27, 'abi@gmail.com', 4000000, 10000000, 5000000, '-1990000000'),
(28, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(29, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(30, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(31, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(32, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(33, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(34, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(35, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(36, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(37, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(38, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(39, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(40, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(41, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(42, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(43, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(44, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(45, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(46, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(47, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(48, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(49, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(50, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(51, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(52, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(53, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(54, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(55, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(56, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(57, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(58, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(59, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(60, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(61, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(62, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(63, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(64, 'abiyosoa3@gmail.com', 12, 21, 12, '-4179'),
(65, 'abiyosoa2@gmail.com', 1, 1, 1, '-199'),
(66, 'abiyosoa2@gmail.com', 123, 12, 1, '-2388'),
(67, 'abiyosoa2@gmail.com', 123, 12, 1, '-2388'),
(68, 'abiyosoa2@gmail.com', 123, 12, 1, '-2388'),
(69, 'abiyosoa3@gmail.com', 123, 12, 1, '-2388'),
(70, 'panjirp@gmail.com', 123, 123, 123, '-24477'),
(71, 'abiyosoa@gmail.com', 98, 9, 98, '-1791'),
(72, 'abiyosoa3@gmail.com', 123, 123, 123, '-24477'),
(73, 'abiyosoa3@gmail.com', 123, 123, 123, '-24477'),
(74, 'abiyosoa3@gmail.com', 123, 123, 123, '-24477'),
(75, 'abiyosoa3@gmail.com', 123, 123, 123, '-24477'),
(76, 'abiyosoa@gmail.com', 12, 12, 12, '-2388'),
(77, 'abiyosoa@gmail.com', 12, 12, 12, '-2388'),
(78, 'abiyosoa3@gmail.com', 12, 21, 21, '-4179'),
(79, 'abiyosoa3@gmail.com', 12, 21, 21, '-4179'),
(80, 'abiyosoa3@gmail.com', 12, 21, 21, '-4179'),
(81, 'abiyosoa3@gmail.com', 12, 21, 21, '-4179'),
(82, 'abiyosoa3@gmail.com', 12, 21, 21, '-4179'),
(83, 'abiyosoa3@gmail.com', 12, 21, 21, '-4179'),
(84, 'abiyosoa3@gmail.com', 12, 21, 21, '-4179'),
(85, 'abiyosoa3@gmail.com', 12, 21, 21, '-4179'),
(86, 'abiyosoa3@gmail.com', 12, 21, 21, '-4179'),
(87, 'abiyosoa3@gmail.com', 12, 21, 21, '-4179'),
(88, 'abiyosoa3@gmail.com', 12, 21, 21, '-4179'),
(89, 'abiyosoa3@gmail.com', 12, 21, 21, '-4179'),
(90, 'abiyosoa3@gmail.com', 12, 21, 21, '-4179'),
(91, 'abiyosoa3@gmail.com', 12, 21, 21, '-4179'),
(92, 'abiyosoa3@gmail.com', 12, 21, 21, '-4179'),
(93, 'abiyosoa3@gmail.com', 12, 21, 21, '-4179'),
(94, 'abiyosoa3@gmail.com', 12, 21, 21, '-4179'),
(95, 'abiyosoa3@gmail.com', 12, 21, 21, '-4179'),
(96, 'abiyosoa3@gmail.com', 12, 21, 21, '-4179'),
(97, 'abiyosoa3@gmail.com', 12, 21, 21, '-4179'),
(98, 'abiyosoa3@gmail.com', 12, 21, 21, '-4179'),
(99, 'abiyosoa3@gmail.com', 12, 21, 21, '-4179'),
(100, 'abiyosoa3@gmail.com', 12, 21, 21, '-4179'),
(101, 'abiyosoa3@gmail.com', 12, 21, 21, '-4179'),
(102, 'abiyosoa@gmail.com', 12, 12, 12, '-2388'),
(103, 'abiyosoa@gmail.com', 12, 12, 12, '-2388'),
(104, 'abiyosoa@gmail.com', 12, 12, 12, '-2388'),
(105, 'abiyosoa@gmail.com', 12, 12, 12, '-2388'),
(106, 'abiyosoa3@gmail.com', 12, 12, 12, '-2388'),
(107, 'abiyosoa3@gmail.com', 12, 12, 12, '-2388'),
(108, 'panjirp@gmail.com', 12, 12, 12, '-2388'),
(109, 'panjirp@gmail.com', 12, 12, 12, '-2388'),
(110, 'panjirp@gmail.com', 12, 12, 12, '-2388'),
(111, 'panjirp@gmail.com', 12, 12, 12, '-2388'),
(112, 'panjirp@gmail.com', 12, 12, 12, '-2388'),
(113, 'panjirp@gmail.com', 12, 12, 12, '-2388'),
(114, 'abiyosoa3@gmail.com', 12, 12, 12, '-2388'),
(115, 'abiyosoa3@gmail.com', 12, 12, 12, '-2388'),
(116, 'abiyosoa3@gmail.com', 12, 12, 12, '-2388'),
(117, 'abiyosoa3@gmail.com', 12, 12, 12, '-2388'),
(118, 'abiyosoa3@gmail.com', 12, 12, 12, '-2388'),
(119, 'abiyosoa3@gmail.com', 12, 12, 12, '-2388'),
(120, 'abiyosoa3@gmail.com', 12, 12, 12, '-2388'),
(121, 'abiyosoa3@gmail.com', 12, 12, 12, '-2388'),
(122, 'abiyosoa3@gmail.com', 12, 12, 12, '-2388'),
(123, 'abiyosoa3@gmail.com', 12, 12, 12, '-2388');

-- --------------------------------------------------------

--
-- Table structure for table `financial_health`
--

CREATE TABLE `financial_health` (
  `id` tinyint(4) NOT NULL,
  `question` text NOT NULL,
  `variable_1` varchar(100) NOT NULL,
  `variable_2` varchar(100) NOT NULL,
  `variable_3` varchar(100) NOT NULL,
  `variable_4` varchar(100) NOT NULL,
  `value_1` varchar(100) NOT NULL,
  `value_2` varchar(100) NOT NULL,
  `value_3` varchar(100) NOT NULL,
  `value_4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `financial_health`
--

INSERT INTO `financial_health` (`id`, `question`, `variable_1`, `variable_2`, `variable_3`, `variable_4`, `value_1`, `value_2`, `value_3`, `value_4`) VALUES
(1, 'Berapakah yang secara rutin dan kontinyu setiap bulan dapat Anda sisakan dari pendapatan keluarga, yang dialokasikan untuk tabungan, investasi atau membeli hal lain ?\r\n', 'Defisit\r\n', '0-10%\r\n', '10-25%\r\n', '> 25%\r\n', '5\r\n', '3\r\n', '2\r\n', '0\r\n'),
(2, 'Berapakah yang secara rutin dan kontinyu setiap bulan Anda investasikan dari pendapatan ?\r\n', '0%\r\n', '0-10%\r\n', '10-25%\r\n', '> 25%\r\n', '5\r\n', '2\r\n', '1\r\n', '0\r\n'),
(3, 'Berapakah yang secara rutin dan kontinyu tiap bulan dari pendapatan dialokasikan untuk membayar premi asuransi Anda ?\r\n', '0%\r\n', '0-10%\r\n', '10-25%\r\n', '> 25%\r\n', '5\r\n', '2\r\n', '1\r\n', '0\r\n'),
(4, 'Berapakah yang secara rutin dan kontinyu tiap bulan dari pendapatan dialokasikan untuk membayar angsuran hutang Anda ?\r\n', '0%\r\n', '0-10%\r\n', '10-35%\r\n', '> 35%\r\n', '0\r\n', '1\r\n', '3\r\n', '5\r\n'),
(5, 'Setara berapa bulan gaji kotor per bulan Anda kah estimasi saldo Dana Darurat Anda (dalam bentuk saldo rekening tabungan atau uang tunai) ?\r\n', '> 12 bulan\r\n', '6-12 bulan\r\n', '3-6 bulan\r\n', '0-3 bulan\r\n', '0\r\n', '1\r\n', '3\r\n', '5\r\n'),
(6, 'Setara berapa bulan gaji kotor per bulan Anda kah estimasi total nilai hutang lancar Anda dan keluarga saat ini (kartu kredit, KTA, FinTech) ?\r\n', '0 bulan\r\n', 's/d 4 bulan\r\n', '4-8 bulan\r\n', '> 8 bulan\r\n', '0\r\n', '3\r\n', '4\r\n', '5\r\n'),
(7, 'Setara berapa bulan gaji kotor per bulan Anda kah estimasi total nilai hutang jangka panjang Anda dan keluarga saat ini (KPR, KPM, KUK) ?\r\n', '0 bulan\r\n', 's/d 6 bulan\r\n', '6-24 bulan\r\n', '> 24 bulan\r\n', '0\r\n', '2\r\n', '4\r\n', '5\r\n'),
(8, 'Setara berapa bulan gaji kotor per bulan Anda kah total nilai aset fisik yang Anda miliki saat ini (rumah, tanah, kendaraan, emas batangan, perabot) ?\r\n', '> 24 bulan\r\n', '12-24 bulan\r\n', '6-12 bulan\r\n', '0-6 bulan\r\n', '0\r\n', '1\r\n', '3\r\n', '5\r\n'),
(9, 'Setara berapa bulan gaji kotor per bulan Anda kah total nilai aset finansial yang Anda miliki saat ini (reksadana, saham, obligasi, deposito bank) ?\r\n', '> 24 bulan\r\n', '12-24 bulan\r\n', '6-12 bulan', '0-6 bulan\r\n', '0\r\n', '1\r\n', '2\r\n', '5\r\n'),
(10, 'Setara berapa bulan gaji kotor per bulan Anda kah total nilai uang pertanggungan asuransi jiwa yang Anda miliki saat ini (term life, personal accident, unit link benefit, endowment, asuransi pendidikan) ?\r\n', '0-6 bulan\r\n', '6-12 bulan\r\n', '12-24 bulan\r\n', '> 24 bulan\r\n', '5\r\n', '4\r\n', '3\r\n', '0\r\n'),
(11, 'Setara berapa bulan gaji kotor per bulan Anda kah total nilai saldo dana pensiun yang Anda miliki saat ini ?\r\n', '0-6 bulan\r\n', '6-12 bulan\r\n', '12-24 bulan\r\n', '> 24 bulan\r\n', '5\r\n', '3\r\n', '1\r\n', '0\r\n'),
(12, 'Berapa banyak sumber pendapatan keluarga Anda saat ini ? (jika hanya berasal dari gaji maka jawabannya adalah 1, jika hanya dari gaji Anda dan pasangan maka jawabannya adalah 2, jika kedua pihak bekerja dan ada 2 jenis bisnis misalnya, maka jawabannya adalah 4, dan seterusnya)\r\n', '4 atau lebih\r\n', '3\r\n', '2\r\n', '1\r\n', '0\r\n', '1\r\n', '2\r\n', '5\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `keterangan`
--

CREATE TABLE `keterangan` (
  `id` tinyint(4) NOT NULL,
  `score` varchar(100) NOT NULL,
  `interpretation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keterangan`
--

INSERT INTO `keterangan` (`id`, `score`, `interpretation`) VALUES
(1, '0-8', 'Anda berada dalam kondisi kesehatan finansial yang prima dengan manajemen resiko yang amat baik dan cadangan keuangan yang lebih dari cukup untuk antisipasi resiko.'),
(2, '9-16', 'Anda memiliki kesehatan finansial yang sangat baik dengan manajemen resiko yang baik dan cadangan keuangan yang memadai untuk antisipasi resiko finansial Anda'),
(3, '17-25\r\n', 'Anda memiliki kesehatan finansial yang cukup baik, memiliki manajemen resiko yang memadai, dan cadangan keuangan minimum untuk mengantisipasi resiko pada Anda'),
(4, '26-38\r\n', 'Anda memiliki kesehatan finansial yang sedang dalam hal keuangan, Anda memiliki manajemen resiko minimal namun kemungkinan tidak mencukupi saat terjadi suatu resiko'),
(5, '38-50\r\n', 'Anda memiliki kesehatan finansial yang buruk dan potensi bahaya dalam hal keuangan, Anda kekurangan cadangan keuangan dan tanpa manajemen resiko yang memadai '),
(6, '51-60\r\n', 'Anda memiliki kesehatan finansial yang amat buruk serta berada dalam potensi bahaya yang amat serius dalam hal keuangan, karena tidak ada manajemen resiko sama sekali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asuransi`
--
ALTER TABLE `asuransi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asuransi_jiwa`
--
ALTER TABLE `asuransi_jiwa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `financial_health`
--
ALTER TABLE `financial_health`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keterangan`
--
ALTER TABLE `keterangan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asuransi`
--
ALTER TABLE `asuransi`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `asuransi_jiwa`
--
ALTER TABLE `asuransi_jiwa`
  MODIFY `id` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `financial_health`
--
ALTER TABLE `financial_health`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `keterangan`
--
ALTER TABLE `keterangan`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
