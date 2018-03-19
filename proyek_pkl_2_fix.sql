-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 19, 2018 at 10:05 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek_pkl_2_fix`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_team`
--

CREATE TABLE `detail_team` (
  `id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `mahasiswa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'Seni'),
(2, 'Keagamaan'),
(3, 'Olah Raga'),
(4, 'Sains'),
(5, 'Lain-lain');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `tingkat_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `tahun_ajar_awal` year(4) NOT NULL,
  `tahun_ajar_akhir` year(4) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `tanggal_awal_lomba` date NOT NULL,
  `tanggal_akhir_lomba` date NOT NULL,
  `tempat_lomba` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`) VALUES
(1, '15723001', 'saipul'),
(2, '15723002', 'nama x'),
(3, '15723003', 'heru'),
(4, '15723004', 'heni'),
(5, '15723005', 'dodok'),
(6, '15723006', 'kasinok'),
(7, '15723007', 'indrok'),
(8, '15723008', 'jemi'),
(9, '15723009', 'dion'),
(10, '15723010', 'heri'),
(11, '15723011', 'irfan '),
(12, '15723012', 'yendi'),
(13, '15723013', 'doli'),
(14, '15723014', 'mesi'),
(15, '15723015', 'ronaldo'),
(16, '15723016', 'marcelo'),
(17, '15723017', 'ibrahim m'),
(18, '15723018', 'ozil'),
(19, '15723019', 'ruben'),
(20, '15723020', 'casilas'),
(21, '15723021', 'vidal'),
(22, '15723022', 'vila'),
(23, '15723023', 'david'),
(24, '15723024', 'ramos'),
(25, '15723025', 'mesi'),
(26, '15723026', 'dodit'),
(27, '15723027', 'g pamungkas'),
(28, '15723028', 'melati'),
(29, '15723029', 'kamboja'),
(30, '15723030', 'mawar'),
(31, '15723031', 'raflessia'),
(32, '15723032', 'miya'),
(33, '15723033', 'layla'),
(34, '15723034', 'zilong'),
(35, '15723035', 'gatot kaca'),
(36, '15723036', 'lancelot'),
(37, '15723037', 'lord'),
(38, '15723038', 'natalia'),
(39, '15723040', 'sark'),
(40, '15723041', 'sun'),
(41, '15723042', 'alucard'),
(42, '15723043', 'fani'),
(43, '15723044', 'caiclop'),
(44, '15723045', 'ana'),
(45, '15723046', 'ani'),
(46, '15723047', 'ano'),
(47, '15723048', 'anu'),
(48, '15723049', 'nalamba'),
(49, '15723051', 'tri ayu'),
(50, '15723052', 'johan'),
(51, '15723053', 'david becham'),
(52, '15723054', 'bambang pamungkas'),
(53, '15723055', 'budi sudarsono'),
(54, '15723056', 'aji santoso'),
(55, '15723057', 'egi melgiansyah'),
(56, '15723058', 'kim jefri kurniawan'),
(57, '15723059', 'kristian gonzales'),
(58, '15723060', 'bio paulin'),
(59, '15723061', 'mak lampir'),
(60, '15723062', 'gerandong'),
(61, '15723063', 'ismed sofian'),
(62, '15723064', 'lili pali'),
(63, '15723065', 'pak lie'),
(64, '15723066', 'ramos'),
(65, '15723067', 'ronaldino'),
(66, '15723068', 'jupe'),
(67, '15723069', 'nikita mirzani'),
(68, '15723070', 'riska'),
(69, '15723071', 'rahmatul'),
(70, '15723072', 'jannah'),
(71, '15723073', 'vani'),
(72, '15723074', 'hp opo'),
(73, '15723075', 'chelsea olivia'),
(74, '15723076', 'indah '),
(75, '15723077', 'permata'),
(76, '15723078', 'sari'),
(77, '15723079', 'maul uhuy'),
(78, '15723080', 'kristian bejo'),
(79, '15723081', 'cak lontong'),
(80, '15723082', 'cak lemper'),
(81, '15723083', 'cak choy'),
(82, '15723084', 'cak imin'),
(83, '15723085', 'yongki'),
(84, '15723086', 'mungki'),
(85, '15723087', 'muki muki'),
(86, '15723088', 'pujianto'),
(87, '15723089', 'dani s'),
(88, '15723090', 'diah'),
(89, '15723091', 'santika'),
(90, '15723092', 'dewa'),
(91, '15723093', 'gede'),
(92, '15723094', 'ketut'),
(93, '15723095', 'nyoman'),
(94, '15723096', 'nyai kai'),
(95, '15723097', 'kaing kaing'),
(96, '15723099', 'nabila'),
(97, '15753001', 'Ade Irma'),
(98, '15753002', 'Adrian Reza'),
(99, '15753003', 'Agung Sapto'),
(100, '15753004', 'Aida A'),
(101, '15753005', 'Denny Adam'),
(102, '15753006', 'CRISTIANSON SIHOMBING'),
(103, '15753007', 'Deby'),
(104, '15753008', 'Diah A'),
(105, '15753009', 'Diah Santika'),
(106, '15753010', 'Ima'),
(107, '15753011', 'Gilda'),
(108, '15753012', 'Arta W'),
(109, '15753013', 'Chandra'),
(110, '15753014', 'Anita Safitri'),
(111, '15753015', 'Febri Ambika'),
(112, '15753016', 'Heri'),
(113, '15753017', 'Zayn Malik'),
(114, '15753019', 'Mikha'),
(115, '15753020', 'Yenni'),
(116, '15753021', 'Hadi Saputra'),
(117, '15753022', 'Jantika Ayu'),
(118, '15753023', 'Lala Karmela'),
(119, '15753024', 'Tika Yesi'),
(120, '15753025', 'Dewa Gede'),
(121, '15753026', 'Bintang A'),
(122, '15753027', 'Mario'),
(123, '15753028', 'Aman Natur'),
(124, '15753029', 'Egi Maulana FIkri'),
(125, '15753031', 'Kevin De Bruyne'),
(126, '15753032', 'Yosi'),
(127, '15753033', 'Jess No Limit'),
(128, '15753034', 'Evos Oura'),
(129, '15753035', 'Evos Galaxy'),
(130, '15753036', 'Swolen Left Thumb'),
(131, '15753037', 'Roy Khiosi'),
(132, '15753038', 'Tri Rahmad'),
(133, '15753039', 'Bob Marley'),
(134, '15753040', 'Radja Naiggollan'),
(135, '15753041', 'Nella Kharisma'),
(136, '15753042', 'Via Vallen'),
(137, '15753043', 'Bayu Skak'),
(138, '15753045', 'Loli'),
(139, '15753046', 'Joko Susilo'),
(140, '15753047', 'Joko Widodo'),
(141, '15753048', 'Yori'),
(142, '15753049', 'Betty'),
(143, '15753050', 'Harry Style'),
(144, '15753051', 'Patrick Star'),
(145, '15753052', 'Mark Marquez'),
(146, '15753053', 'Dani'),
(147, '15753054', 'Malik'),
(148, '15753055', 'Yesi'),
(149, '15753056', 'Rani'),
(150, '15753057', 'Natalia'),
(151, '15753058', 'Karina'),
(152, '15753059', 'Fasha'),
(153, '15753060', 'Bruno'),
(154, '15753061', 'Franco'),
(155, '15753062', 'Didik Sulistyanto'),
(156, '15753063', 'Mawar'),
(157, '15753064', 'Sri'),
(158, '15753065', 'Diana'),
(159, '15753066', 'Gosen'),
(160, '15753067', 'Haylos'),
(161, '15753068', 'Sasuke'),
(162, '15753069', 'Karim Benzema'),
(163, '15753070', 'Hayabusa'),
(164, '15753071', 'Alice'),
(165, '15753072', 'Neymar'),
(166, '15753073', 'Ge Pamungkas'),
(167, '15753074', 'Marsha'),
(168, '15753075', 'Yonada'),
(169, '15753076', 'Yohana A.'),
(170, '15753077', 'Leonardo'),
(171, '15753078', 'John Cena'),
(172, '15753079', 'Rey Misteryo'),
(173, '15753080', 'Arie Keriting'),
(174, '15753081', 'Ibrahimovic'),
(175, '15753082', 'Michael Carrick'),
(176, '15753083', 'Hariono'),
(177, '15753084', 'Bimasakti'),
(178, '15753085', 'Andik Firmansyah'),
(179, '15753086', 'Raul Gonzales'),
(180, '15753087', 'Johnson'),
(181, '15753088', 'Charles Puyol'),
(182, '15753089', 'Fernando Torres'),
(183, '15753090', 'Ronaldo'),
(184, '15753091', 'Hernandez'),
(185, '15753092', 'Cristiano Ronaldo'),
(186, '15753093', 'Boss Jono'),
(187, '15753094', 'Jeremi Teti'),
(188, '15753095', 'Luna Maya'),
(189, '15753096', 'Cut Tari'),
(190, '15753097', 'Cinta Laura'),
(191, '15753098', 'Aura Kasih'),
(192, '15753099', 'Dewi Sandra'),
(193, '15753100', 'Ariel Peterpan');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(11) NOT NULL,
  `prestasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id`, `prestasi`) VALUES
(1, 'Juara Umum'),
(2, 'Juara 1'),
(3, 'Juara 2'),
(4, 'Juara 3'),
(5, 'Juara Harapan 1'),
(6, 'Juara Harapan 2'),
(7, 'Juara Harapan 3');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id` int(11) NOT NULL,
  `semester` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id`, `semester`) VALUES
(1, 'Gasal'),
(2, 'Genap');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `nama_team` varchar(255) NOT NULL,
  `jumlah_anggota` int(11) NOT NULL,
  `prestasi_id` int(11) NOT NULL,
  `kegiatan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tingkat`
--

CREATE TABLE `tingkat` (
  `id` int(11) NOT NULL,
  `tingkat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tingkat`
--

INSERT INTO `tingkat` (`id`, `tingkat`) VALUES
(1, 'Lokal'),
(2, 'Nasional'),
(3, 'Internasional');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_team`
--
ALTER TABLE `detail_team`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_id` (`team_id`),
  ADD KEY `mahasiswa_id` (`mahasiswa_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id` (`kategori_id`),
  ADD KEY `semester_id` (`semester_id`),
  ADD KEY `tingkat_id` (`tingkat_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kegiatan_id` (`kegiatan_id`),
  ADD KEY `prestasi_id` (`prestasi_id`);

--
-- Indexes for table `tingkat`
--
ALTER TABLE `tingkat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_team`
--
ALTER TABLE `detail_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tingkat`
--
ALTER TABLE `tingkat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_team`
--
ALTER TABLE `detail_team`
  ADD CONSTRAINT `detail_team_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `team` (`id`),
  ADD CONSTRAINT `detail_team_ibfk_2` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`id`);

--
-- Constraints for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `kegiatan_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`),
  ADD CONSTRAINT `kegiatan_ibfk_2` FOREIGN KEY (`semester_id`) REFERENCES `semester` (`id`),
  ADD CONSTRAINT `kegiatan_ibfk_3` FOREIGN KEY (`tingkat_id`) REFERENCES `tingkat` (`id`),
  ADD CONSTRAINT `kegiatan_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `team`
--
ALTER TABLE `team`
  ADD CONSTRAINT `team_ibfk_1` FOREIGN KEY (`kegiatan_id`) REFERENCES `kegiatan` (`id`),
  ADD CONSTRAINT `team_ibfk_2` FOREIGN KEY (`prestasi_id`) REFERENCES `prestasi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
