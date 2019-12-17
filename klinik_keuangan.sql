-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2019 at 10:46 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

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
-- Table structure for table `estimasi_pensiun`
--

CREATE TABLE `estimasi_pensiun` (
  `age` int(11) NOT NULL,
  `var_1` double NOT NULL,
  `var_2` double NOT NULL,
  `var_3` double NOT NULL,
  `var_4` double NOT NULL,
  `var_5` double NOT NULL,
  `var_6` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `estimasi_pensiun`
--

INSERT INTO `estimasi_pensiun` (`age`, `var_1`, `var_2`, `var_3`, `var_4`, `var_5`, `var_6`) VALUES
(25, 30449020.1706481, 45673530.2559722, 68510295.3839583, 91347060.5119444, 114183825.63993, 152245100.853241),
(30, 21709730.5604916, 32564595.8407373, 48846893.761106, 65129191.6814747, 81411489.6018434, 108548652.802458),
(35, 15478737.8499447, 23218106.7749171, 34827160.1623756, 46436213.5498342, 58045266.9372927, 77393689.2497236),
(40, 11036126.1628613, 16554189.244292, 24831283.866438, 33108378.488584, 41385473.11073, 55180630.8143067),
(45, 7868605.42915826, 11802908.1437374, 17704362.2156061, 23605816.2874748, 29507270.3593435, 39343027.1457913),
(50, 5610206.9228, 8415310.3842, 12622965.5763, 16830620.7684, 21038275.9605, 28051034.614);

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
-- Table structure for table `investasi_pensiun_rendah`
--

CREATE TABLE `investasi_pensiun_rendah` (
  `age` int(11) NOT NULL,
  `var_1` double NOT NULL,
  `var_2` double NOT NULL,
  `var_3` double NOT NULL,
  `var_4` double NOT NULL,
  `var_5` double NOT NULL,
  `var_6` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investasi_pensiun_rendah`
--

INSERT INTO `investasi_pensiun_rendah` (`age`, `var_1`, `var_2`, `var_3`, `var_4`, `var_5`, `var_6`) VALUES
(25, 2777560.08489798, 4166340.12734697, 6249510.19102046, 8332680.25469395, 10415850.3183674, 13887800.4244899),
(30, 3373885.72857713, 2490841.54885891, 3736262.32328836, 4981683.09771782, 6227103.87214728, 8302805.16286303),
(35, 4203152.10879113, 6304728.1631867, 9457092.24478005, 12609456.3263734, 15761820.4079668, 21015760.5439557),
(40, 5490545.87799601, 8235818.81699401, 12353728.225491, 16471637.633988, 20589547.042485, 27452729.38998),
(45, 7920722.11523292, 11881083.1728494, 17821624.7592741, 23762166.3456988, 29702707.9321234, 39603610.5761646),
(50, 14939026.149764, 22408539.2246459, 33612808.8369689, 44817078.4492919, 56021348.0616148, 74695130.7488198);

-- --------------------------------------------------------

--
-- Table structure for table `investasi_pensiun_sedang`
--

CREATE TABLE `investasi_pensiun_sedang` (
  `age` int(11) NOT NULL,
  `var_1` double NOT NULL,
  `var_2` double NOT NULL,
  `var_3` double NOT NULL,
  `var_4` double NOT NULL,
  `var_5` double NOT NULL,
  `var_6` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investasi_pensiun_sedang`
--

INSERT INTO `investasi_pensiun_sedang` (`age`, `var_1`, `var_2`, `var_3`, `var_4`, `var_5`, `var_6`) VALUES
(25, 1143031.89846845, 1714547.84770267, 2571821.771554, 3429095.69540533, 4286369.61925667, 5715159.49234222),
(30, 1660561.03257261, 2490841.54885891, 3736262.32328836, 4981683.09771782, 6227103.87214728, 8302805.16286303),
(35, 2452986.5612388, 3679479.84185821, 5519219.76278731, 7358959.68371642, 9198699.60464552, 12264932.806194),
(40, 3756553.35098463, 5634830.02647695, 8452245.03971542, 11269660.0529539, 14087075.0661924, 18782766.7549232),
(45, 6262890.2149921, 9394335.32248816, 14091502.9837322, 18788670.6449763, 23485838.3062204, 31314451.0749605),
(50, 13421112.2125971, 20131668.3188957, 30197502.4783436, 40263336.6377914, 50329170.7972393, 67105561.0629857);

-- --------------------------------------------------------

--
-- Table structure for table `investasi_pensiun_tinggi`
--

CREATE TABLE `investasi_pensiun_tinggi` (
  `age` int(11) NOT NULL,
  `var_1` double NOT NULL,
  `var_2` double NOT NULL,
  `var_3` double NOT NULL,
  `var_4` double NOT NULL,
  `var_5` double NOT NULL,
  `var_6` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investasi_pensiun_tinggi`
--

INSERT INTO `investasi_pensiun_tinggi` (`age`, `var_1`, `var_2`, `var_3`, `var_4`, `var_5`, `var_6`) VALUES
(25, 444865.061397921, 667297.592096881, 1000946.38814532, 1334595.18419376, 1668243.9802422, 2224325.3069896),
(30, 780266.103200916, 1170399.15480137, 1755598.73220206, 2340798.30960275, 2925997.88700344, 3901330.51600458),
(35, 1382392.39574518, 2073588.59361777, 3110382.89042666, 4147177.18723555, 5183971.48404443, 6911961.97872591),
(40, 2512816.75709889, 3769225.13564833, 5653837.70347249, 7538450.27129666, 9423062.83912082, 12564083.7854944),
(45, 4897609.3814483, 7346414.07217245, 11019621.1082587, 14692828.1443449, 18366035.1804311, 24488046.9072415),
(50, 12023474.8613443, 18035212.2920164, 27052818.4380247, 36070424.5840329, 45088030.7300411, 60117374.3067215);

-- --------------------------------------------------------

--
-- Table structure for table `kebutuhan_pensiun`
--

CREATE TABLE `kebutuhan_pensiun` (
  `age` int(11) NOT NULL,
  `var_1` double NOT NULL,
  `var_2` double NOT NULL,
  `var_3` double NOT NULL,
  `var_4` double NOT NULL,
  `var_5` double NOT NULL,
  `var_6` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kebutuhan_pensiun`
--

INSERT INTO `kebutuhan_pensiun` (`age`, `var_1`, `var_2`, `var_3`, `var_4`, `var_5`, `var_6`) VALUES
(25, 6278641032.30748, 9417961548.46122, 14126942322.6918, 18835923096.9224, 23544903871.153, 31393205161.5374),
(30, 4476584281.97431, 6714876422.96146, 10072314634.4422, 13429752845.9229, 16787191057.4037, 22382921409.8715),
(35, 3191742724.3415, 4787614086.51225, 7181421129.76838, 9575228173.0245, 11969035216.2806, 15958713621.7075),
(40, 2275668450.92304, 3413502676.38456, 5120254014.57685, 6827005352.76913, 8533756690.96141, 11378342254.6152),
(45, 1622520154.59514, 2433780231.89271, 3650670347.83906, 4867560463.78542, 6084450579.73177, 8112600772.97569),
(50, 1156834446.16004, 1735251669.24006, 2602877503.86009, 3470503338.48012, 4338129173.10015, 5784172230.80019);

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
