-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 05, 2018 at 02:16 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id3646127_ipgdota2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id_admin`, `email`, `password`) VALUES
(1, 'foubluse@yahoo.com', 'daltonista1'),
(2, 'nikola@bibic.com', 'nbaceltics123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `g_id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `qty` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `galerija`
--

CREATE TABLE `galerija` (
  `id_slika` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_guma` int(11) NOT NULL,
  `slike` text NOT NULL,
  `opis` text NOT NULL,
  `Datum` datetime NOT NULL,
  `status_slike` enum('0','1') NOT NULL COMMENT '0-ceka se odobrenje 1-odobreno'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galerija`
--

INSERT INTO `galerija` (`id_slika`, `id_user`, `id_guma`, `slike`, `opis`, `Datum`, `status_slike`) VALUES
(15, 2, 2, 'starfire-wt-200.jpg', 'PoruÄio sam gumu Starfire 200 65 za Audi A4 2008. godiÅ¡te, prezadovoljan sam, auto odliÄno leÅ¾i na cesti, sve pohvale za tim Internet Prodaja Guma, nadam se da Ä‡emo i dalje saraÄ‘ivati.', '2018-02-04 22:58:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `gume`
--

CREATE TABLE `gume` (
  `id_guma` int(11) NOT NULL,
  `id_marka` int(10) NOT NULL,
  `visina` int(10) NOT NULL,
  `sirina` int(10) NOT NULL,
  `precnik` varchar(10) NOT NULL,
  `opterecenje` varchar(10) NOT NULL,
  `indeks_brzine` text NOT NULL,
  `id_sezona` int(10) NOT NULL,
  `cena` decimal(10,0) NOT NULL,
  `slika` varchar(200) NOT NULL,
  `garancija` int(10) NOT NULL,
  `status` enum('0','1') NOT NULL COMMENT '0-activ 1-inactiv'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gume`
--

INSERT INTO `gume` (`id_guma`, `id_marka`, `visina`, `sirina`, `precnik`, `opterecenje`, `indeks_brzine`, `id_sezona`, `cena`, `slika`, `garancija`, `status`) VALUES
(2, 3, 200, 65, '14 ', '60', '225', 2, 5600, 'cor.jpg', 36, '1'),
(3, 2, 245, 50, 'R18', '97', '210', 1, 7480, 'starfire-wt-200.jpg', 36, '1'),
(4, 1, 225, 40, 'R18', '115', '270', 2, 8400, 'tigar.jpg', 36, '1'),
(5, 6, 270, 50, '16 ', '90', '210', 2, 7800, 'tigar.jpg', 36, '1'),
(6, 4, 275, 65, '70', '140', '280', 2, 7600, 'nokian.jpg', 36, '1'),
(7, 3, 270, 55, '16', '90', '240', 2, 6600, 'cor.jpg', 36, '1');

-- --------------------------------------------------------

--
-- Table structure for table `marka`
--

CREATE TABLE `marka` (
  `id_marka` int(11) NOT NULL,
  `marka` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marka`
--

INSERT INTO `marka` (`id_marka`, `marka`) VALUES
(1, 'Tigar'),
(2, 'Starfire'),
(3, 'Cordiant'),
(4, 'Nokian'),
(5, 'Sava'),
(6, 'Goodyear'),
(7, 'Michelin');

-- --------------------------------------------------------

--
-- Table structure for table `narudzba`
--

CREATE TABLE `narudzba` (
  `id_narudzba` int(11) NOT NULL,
  `id_gume` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kolicina` int(100) NOT NULL,
  `cena` decimal(10,0) NOT NULL,
  `Ukupna_cena` int(11) NOT NULL,
  `Ime` varchar(100) NOT NULL,
  `prezime` varchar(100) NOT NULL,
  `adresa` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `br_mob` varchar(15) NOT NULL,
  `grad` varchar(50) NOT NULL,
  `postanski_broj` int(11) NOT NULL,
  `napomena` text NOT NULL,
  `Datum` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_narudzbe` enum('0','1','2') NOT NULL COMMENT '0-Poruceno 1-Priprema 2-U tranzitu'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `narudzba`
--

INSERT INTO `narudzba` (`id_narudzba`, `id_gume`, `id_user`, `kolicina`, `cena`, `Ukupna_cena`, `Ime`, `prezime`, `adresa`, `email`, `br_mob`, `grad`, `postanski_broj`, `napomena`, `Datum`, `status_narudzbe`) VALUES
(1, 3, 2, 1, 7480, 7480, 'Nikola ', 'Bibic', 'sdaf', 'biban@live.com', '321321', 'Subotica', 123123, 'dsadsa', '2018-02-05 01:25:27', '0');

-- --------------------------------------------------------

--
-- Table structure for table `popust`
--

CREATE TABLE `popust` (
  `popust_id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `used_email` varchar(255) NOT NULL,
  `active` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sezona`
--

CREATE TABLE `sezona` (
  `id_sezona` int(11) NOT NULL,
  `sezona` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sezona`
--

INSERT INTO `sezona` (`id_sezona`, `sezona`) VALUES
(1, 'leto'),
(2, 'zima');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `first_name`, `last_name`, `email`, `password`, `hash`, `active`) VALUES
(2, 'Stevica', 'Radovanovic', 'foubluse@yahoo.com', '$2y$10$.gjwZ39xdwGoH7p5NoxdyO35wc9jcfYVq8h4T2p6R5xOkUP3tOcIK', 'fe8c15fed5f808006ce95eddb7366e35', 1),
(3, 'nikola', 'bibic', 'nikola@bibic', '$2y$10$5px8tAAnhCDBF7/MrqhbE.eNeJGkH6MHd/oKynyPT4wzJNlbK5222', '58ae749f25eded36f486bc85feb3f0ab', 1),
(13, 'ss', 'ss', 'sss@sss', '$2y$10$7YdP.scFp0ec.wAVVCVoyuvoX0.uSUC2ERJWLld1xtwvVyrsCaALe', '069059b7ef840f0c74a814ec9237b6ec', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `g_id` (`g_id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_2` (`id_user`);

--
-- Indexes for table `galerija`
--
ALTER TABLE `galerija`
  ADD PRIMARY KEY (`id_slika`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_guma` (`id_guma`);

--
-- Indexes for table `gume`
--
ALTER TABLE `gume`
  ADD PRIMARY KEY (`id_guma`),
  ADD KEY `id_marka` (`id_marka`),
  ADD KEY `id_sezona` (`id_sezona`);

--
-- Indexes for table `marka`
--
ALTER TABLE `marka`
  ADD PRIMARY KEY (`id_marka`);

--
-- Indexes for table `narudzba`
--
ALTER TABLE `narudzba`
  ADD PRIMARY KEY (`id_narudzba`),
  ADD KEY `id_gume` (`id_gume`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `popust`
--
ALTER TABLE `popust`
  ADD PRIMARY KEY (`popust_id`);

--
-- Indexes for table `sezona`
--
ALTER TABLE `sezona`
  ADD PRIMARY KEY (`id_sezona`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `galerija`
--
ALTER TABLE `galerija`
  MODIFY `id_slika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `gume`
--
ALTER TABLE `gume`
  MODIFY `id_guma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `marka`
--
ALTER TABLE `marka`
  MODIFY `id_marka` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `narudzba`
--
ALTER TABLE `narudzba`
  MODIFY `id_narudzba` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `popust`
--
ALTER TABLE `popust`
  MODIFY `popust_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sezona`
--
ALTER TABLE `sezona`
  MODIFY `id_sezona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`g_id`) REFERENCES `gume` (`id_guma`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `galerija`
--
ALTER TABLE `galerija`
  ADD CONSTRAINT `galerija_ibfk_2` FOREIGN KEY (`id_guma`) REFERENCES `gume` (`id_guma`),
  ADD CONSTRAINT `galerija_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `gume`
--
ALTER TABLE `gume`
  ADD CONSTRAINT `gume_ibfk_1` FOREIGN KEY (`id_marka`) REFERENCES `marka` (`id_marka`),
  ADD CONSTRAINT `gume_ibfk_2` FOREIGN KEY (`id_sezona`) REFERENCES `sezona` (`id_sezona`);

--
-- Constraints for table `narudzba`
--
ALTER TABLE `narudzba`
  ADD CONSTRAINT `narudzba_ibfk_2` FOREIGN KEY (`id_gume`) REFERENCES `gume` (`id_guma`),
  ADD CONSTRAINT `narudzba_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
